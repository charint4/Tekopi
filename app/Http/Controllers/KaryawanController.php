<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Bahan_baku;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    //
    public function index()
    {
        return view('karyawan/welcome');
    }
    public function product()
    {
        $produkList = DB::table('produk')
                    ->select('produk.*')
                    ->get();

        return view('karyawan/product', compact('produkList'));
    }
    public function storage()
    {
        $bahanList = DB::table('bahan_baku')
                    ->select('bahan_baku.*')
                    ->get();

        return view('karyawan/storage', compact('bahanList'));
    }
    public function tambahStorage(Request $req)
    {
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
        Bahan_baku::where('id_bahan', $req->id_bahan)->delete();

        return redirect()->route('storage');
    }
    public function updateStorage(Request $req)
    {
        Bahan_baku::where('id_bahan', $req->id_bahan)->update([
            // 'nama_bahan' => $req->nama_bahan,
            'stok_bahan' => $req->stok_bahan
        ]);

        return redirect()->route('storage');
    }
    public function order()
    {
        return view('karyawan/order');
    }
    public function customer()
    {
        return view('karyawan/customer');
    }
    public function payment()
    {
        return view('karyawan/payment');
    }

    public function tambahProduct(Request $req)
    {
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
        // $product = Product::find($req->id_prod);
        // $product->delete();

        Product::where('id_prod', $req->id_prod)->delete();

        return redirect()->route('product');
    }

    public function updateProduct(Request $req)
    {
        Product::where('id_prod', $req->id_prod)->update([
            'nama_prod' => $req->nama_prod,
            'harga_prod' => $req->harga_prod,
            'stok_prod' => $req->stok_prod,
            'deskripsi_prod' => $req->deskripsi_prod
        ]);

        return redirect()->route('product');
    }
}
