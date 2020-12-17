<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
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
        return view('karyawan/storage');
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
}
