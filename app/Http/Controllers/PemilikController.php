<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Karyawan;
use Illuminate\Support\Facades\Hash;

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

    public function registerKaryawan(Request $req)
    {
        User::create(
            [
                'name' => $req->nama_kar,
                'email' => $req->email_kar,
                'no_hp' => $req->no_hp_kar,
                'alamat' => $req->alamat,
                'login_type' => $req->login_type,
                'password' => Hash::make($req->password),
            ]
        );

        Karyawan::create(
            [
                'nama_kar' => $req->nama_kar,
                'email_kar' => $req->email_kar,
                'no_hp_kar' => $req->no_hp_kar,
            ]
        );

        return view('pemilik/listKaryawan');
    }

}
