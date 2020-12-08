<?php

use App\Http\Controllers\PemilikController;
use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/order', [App\Http\Controllers\HomeController::class, 'order'])->name('order');

Auth::routes();

Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('product');

Auth::routes();

Route::get('pemilik/home', [PemilikController::class, 'index'])->name('home');

Auth::routes();

Route::get('pemilik/report', [PemilikController::class, 'lk'])->name('lk');

Auth::routes();

Route::get('pemilik/monthReport', [PemilikController::class, 'lkBulan'])->name('lkBulan');

Auth::routes();

Route::get('pemilik/listKaryawan', [PemilikController::class, 'listKaryawan'])->name('listKaryawan');

Auth::routes();

Route::get('pemilik/profile', [PemilikController::class, 'profile'])->name('profile');

Route::get('karyawan/home', [KaryawanController::class, 'index'])->name('home');
Route::get('karyawan/product', [KaryawanController::class, 'product'])->name('product');
Route::get('karyawan/storage', [KaryawanController::class, 'storage'])->name('storage');
Route::get('karyawan/order', [KaryawanController::class, 'order'])->name('order');
Route::get('karyawan/customer', [KaryawanController::class, 'customer'])->name('customer');
Route::get('karyawan/payment', [KaryawanController::class, 'payment'])->name('payment');