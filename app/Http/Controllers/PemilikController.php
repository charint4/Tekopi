<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemilikController extends Controller
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
        return view('pemilik/welcome');
    }
    
    public function profile()
    {
        return view('pemilik/profile');
    }
    
    public function lk()
    {
        return view('pemilik/report');
    }
    
    public function lkBulan()
    {
        return view('pemilik/monthReport');
    }
    
    public function listKaryawan()
    {
        return view('pemilik/listKaryawan');
    }


}
