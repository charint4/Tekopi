<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    //
    public function index()
    {
        return view('karyawan/welcome');
    }
    public function product()
    {
        return view('karyawan/product');
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
}
