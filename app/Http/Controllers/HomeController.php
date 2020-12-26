<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

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
    
}
