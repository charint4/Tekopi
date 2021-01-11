<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
use App\Models\Karyawan;
use App\Models\Bahan_baku;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    //
    public function index()
    {
        return view('karyawan/welcome');
    }

    public function profile()
    {
        if (Auth::user()->login_type == 1)
            return view('welcome');
        
        $user = Auth::user();
        return view('karyawan/profile',compact('user'));
    }

    public function updateKaryawan(Request $req)
    {
        if (Auth::user()->login_type == 1)
            return view('welcome');
        
            User::where('id', Auth::user()->id)->update([
                'name' => $req->name,
                'no_hp' => $req->no_hp
            ]);

            Karyawan::where('email_kar', $req->email)->update([
                'nama_kar' => $req->name,
                'no_hp_kar' => $req->no_hp
            ]);

            return redirect()->route('profile');
    }

    public function product()
    {
        if (Auth::user()->login_type == 1)
            return view('welcome');

        $produkList = DB::table('produk')
                    ->select('produk.*')
                    ->get();

        return view('karyawan/product', compact('produkList'));
    }
    public function storage()
    {
        if (Auth::user()->login_type == 1)
            return view('welcome');

        $bahanList = DB::table('bahan_baku')
                    ->select('bahan_baku.*')
                    ->get();

        return view('karyawan/storage', compact('bahanList'));
    }
    public function tambahStorage(Request $req)
    {
        if (Auth::user()->login_type == 1)
            return view('welcome');

        Bahan_baku::create(
            [
                'nama_bahan' => $req->nama_bahan,
                'stok_bahan' => $req->stok_bahan
            ]
        );

        return redirect()->route('storage');
    }
    public function hapusStorage(Request $req)
    {
        if (Auth::user()->login_type == 1)
            return view('welcome');
            
        Bahan_baku::where('id_bahan', $req->id_bahan)->delete();

        return redirect()->route('storage');
    }
    public function updateStorage(Request $req)
    {
        if (Auth::user()->login_type == 1)
            return view('welcome');
            
        Bahan_baku::where('id_bahan', $req->id_bahan)->update([
            // 'nama_bahan' => $req->nama_bahan,
            'stok_bahan' => $req->stok_bahan
        ]);

        return redirect()->route('storage');
    }
    public function order()
    {
        if (Auth::user()->login_type == 1)
            return view('welcome');
            
        return view('karyawan/order');
    }
    public function customer()
    {
        if (Auth::user()->login_type == 1)
            return view('welcome');
            
        return view('karyawan/customer');
    }
    public function payment()
    {
        if (Auth::user()->login_type == 1)
            return view('welcome');
            
        $allTranList = DB::table('transaksi')
        ->select('transaksi.*')
        ->orderBy('id_tran', 'desc')
        ->get();

        $allTranProdList = DB::table('transaksi_berisi_produk')
                    ->join('produk', 'transaksi_berisi_produk.id_prod', '=', 'produk.id_prod')
                    ->get();

        return view('karyawan/payment', compact('allTranList','allTranProdList'));
    }

    public function tambahProduct(Request $req)
    {
        if (Auth::user()->login_type == 1)
            return view('welcome');
            
        $image = $req->gambar_prod;
        $fileName = $image->getClientOriginalName();

        Storage::putFileAs('public/produk', $image, $fileName);

        Product::create(
            [
                'nama_prod' => $req->nama_prod,
                'harga_prod' => $req->harga_prod,
                'stok_prod' => $req->stok_prod,
                'deskripsi_prod' => $req->deskripsi_prod,
                'gambar_prod' => $fileName,
            ]
        );

        return redirect()->route('product');
    }

    public function hapusProduct(Request $req)
    {
        if (Auth::user()->login_type == 1)
            return view('welcome');
            
        // $product = Product::find($req->id_prod);
        // $product->delete();

        Product::where('id_prod', $req->id_prod)->delete();

        return redirect()->route('product');
    }

    public function updateProduct(Request $req)
    {
        if (Auth::user()->login_type == 1)
            return view('welcome');
            
        Product::where('id_prod', $req->id_prod)->update([
            'nama_prod' => $req->nama_prod,
            'harga_prod' => $req->harga_prod,
            'stok_prod' => $req->stok_prod,
            'deskripsi_prod' => $req->deskripsi_prod
        ]);

        return redirect()->route('product');
    }

    public function verifikasiPembayaran(Request $req)
    {
        if (Auth::user()->login_type == 1)
            return view('welcome');
            
        Transaksi::where('id_tran', $req->id_tran)->update([
            'status_bayar' => $req->status_bayar,
            'status_transaksi' => "pesanan sedang dibuat"
        ]);

        return redirect()->route('payment');
    }

    public function statusTransaksi(Request $req)
    {
        if (Auth::user()->login_type == 1)
            return view('welcome');
            
        Transaksi::where('id_tran', $req->id_tran)->update([
            'status_transaksi' => $req->status_transaksi,
        ]);

        return redirect()->route('payment');
    }

   
}
