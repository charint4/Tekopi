<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
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

    public function order()
    {
        return view('order');
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
                    ->where('idUser',Auth::user()->id )
                    ->get();

        return view('cart', compact('chartList'));
    }

    public function tambahTransaksi(Request $req)
    {
        $date = date('Y-m-d h:m:s');
        $statusBayar = "menunggu pembayaran";
        $statusTrasaksi = "menunggu pembayaran";

        Transaksi::create(
            [
                'idUser' => Auth::user()->id,
                'harga_tran' => $req->totalharga,
                'tanggal_tran' => $date,
                'bukti_bayar' => null,
                'status_transaksi' => $statusTrasaksi,
                'status_bayar' => $statusBayar
            ]
        );

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
}
