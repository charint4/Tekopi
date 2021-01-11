<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Cart;
use App\Models\User;
use App\Models\CartHistory;
use App\Models\Transaksi;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function profilePelanggan()
    {
        $user = Auth::user();

        return view('profile', compact('user'));
    }

    public function updatePelanggan(Request $req)
    {
        User::where('id',Auth::user()->id)->update([
            'name' => $req->name,
            'alamat' => $req->alamat,
            'no_hp' => $req->no_hp

        ]);

        return redirect()->route('profilePelanggan');
    }

    public function order()
    {
        $tranList = DB::table('transaksi')
        ->select('transaksi.*')
        ->where('idUser', Auth::user()->id )
        ->where('harga_tran', '>', 0)
        ->orderBy('id_tran', 'desc')
        ->get();

        $tranProdList = DB::table('transaksi_berisi_produk')
                    ->join('produk', 'transaksi_berisi_produk.id_prod', '=', 'produk.id_prod')
                    ->get();

        return view('order', compact('tranList', 'tranProdList'));
    }

    public function cart()
    {
        return view('cart');
    }

    public function product()
    {
        $produkList = DB::table('produk')
                    ->select('produk.*')
                    ->get();

        return view('product', compact('produkList'));
    }

    public function tambahCart(Request $req)
    {
        Cart::create(
            [
                'idUser' => Auth::user()->id,
                'id_prod' => $req->id_prod,
                'jumlah' => $req->jumlah
            ]
        );

        return redirect()->route('lihatProduct');
    }

    public function listCart()
    {
        
        $chartList = DB::table('cart_pelanggan')
                    ->join('produk', 'cart_pelanggan.id_prod', '=', 'produk.id_prod')
                    ->where('idUser', Auth::user()->id )
                    ->get();

        $pelanggan = DB::table('users')
                    ->select('users.*')
                    ->where('id', Auth::user()->id)
                    ->latest()
                    ->first();

        return view('cart', compact('chartList', 'pelanggan'));
    }

    public function tambahTransaksi(Request $req)
    {
        $date = date('Y-m-d h:m:s');
        $statusBayar = "menunggu pembayaran";
        $statusTrasaksi = "menunggu pembayaran";

        if ($req->kirim_tran == 1) {
            Transaksi::create(
                [
                    'idUser' => Auth::user()->id,
                    'harga_tran' => $req->totalharga,
                    'tanggal_tran' => $date,
                    'kirim_tran' => 'diantar',
                    'alamat_kirim' => $req->alamat_kirim,
                    'bukti_bayar' => null,
                    'status_transaksi' => $statusTrasaksi,
                    'status_bayar' => $statusBayar
                ]
            );
        }
        else {
            Transaksi::create(
                [
                    'idUser' => Auth::user()->id,
                    'harga_tran' => $req->totalharga,
                    'tanggal_tran' => $date,
                    'kirim_tran' => 'ambil sendiri',
                    'alamat_kirim' => '-',
                    'bukti_bayar' => null,
                    'status_transaksi' => $statusTrasaksi,
                    'status_bayar' => $statusBayar
                ]
            );
        }
        
        $idTran = Transaksi::where('tanggal_tran', $date)->first();
        $chartList = DB::table('cart_pelanggan')
                    ->select('id_prod','jumlah')
                    ->where('idUser',Auth::user()->id )
                    ->get();

        $tranList = DB::table('transaksi')
                    ->select('id_tran')
                    ->where('idUser',Auth::user()->id)
                    ->latest()
                    ->first();

        
        foreach ($chartList as $object){
            CartHistory::create(
            [
                'id_tran' => $tranList->id_tran,
                'id_prod' => $object->id_prod,
                'jumlah' => $object->jumlah,
            ]
            );
            Cart::where('id_prod', $object->id_prod)->delete();
        };

        return redirect()->route('lihatProduct');
    }

    public function tambahBuktiBayar(Request $req)
    {
        $image = $req->gambar_bukti;
        $fileName = $image->getClientOriginalName();

        Storage::putFileAs('public/bukti', $image, $fileName);

        Transaksi::where('id_tran', $req->id_tran)->update([
            'bukti_bayar' => $fileName,
            'status_bayar' => 'menunggu verifikasi'
        ]);

        return redirect()->route('orderHistory');
    }

    public function cancelCart(){
        $chartList = DB::table('cart_pelanggan')
                    ->select('id_prod','jumlah')
                    ->where('idUser',Auth::user()->id )
                    ->get();

        
        foreach ($chartList as $object){
            Cart::where('id_prod', $object->id_prod)->delete();
        };
        return redirect()->route('lihatProduct');
    }
}
