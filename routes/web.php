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
Route::get('/profilePelanggan', [App\Http\Controllers\HomeController::class, 'profilePelanggan'])->name('profilePelanggan');
Route::post('/updatePelanggan', [App\Http\Controllers\HomeController::class, 'updatePelanggan'])->name('updatePelanggan');
Route::get('/order', [App\Http\Controllers\HomeController::class, 'order'])->name('orderHistory');
Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('lihatProduct');
Route::get('/cart', [App\Http\Controllers\HomeController::class, 'listCart'])->name('listCart');
Route::post('/tambahCart', [App\Http\Controllers\HomeController::class, 'tambahCart'])->name('tambahCart');
Route::post('/tambahTransaksi', [App\Http\Controllers\HomeController::class, 'tambahTransaksi'])->name('tambahTransaksi');
Route::post('/tambahBuktiBayar', [App\Http\Controllers\HomeController::class, 'tambahBuktiBayar'])->name('tambahBuktiBayar');
Route::post('/cancelCart', [App\Http\Controllers\HomeController::class, 'cancelCart'])->name('cancelCart');

Route::get('pemilik/home', [PemilikController::class, 'index'])->name('home');
Route::get('pemilik/report', [PemilikController::class, 'lk'])->name('lk');
Route::get('pemilik/listKaryawan', [PemilikController::class, 'listKaryawan'])->name('listKaryawan');
Route::post('pemilik/registerKaryawan', [PemilikController::class, 'registerKaryawan'])->name('registerKaryawan');
Route::post('pemilik/hapusKaryawan', [PemilikController::class, 'hapusKaryawan'])->name('hapusKaryawan');
Route::post('pemilik/updateKaryawan', [PemilikController::class, 'updateKaryawan'])->name('updateKaryawan');
Route::get('pemilik/profile', [PemilikController::class, 'profile'])->name('profile');
Route::post('pemilik/updatePemilik', [PemilikController::class, 'updatePemilik'])->name('updatePemilik');
Route::get('pemilik/report',  [PemilikController::class, 'chartTahunan'])->name('chartTahunan');
Route::post('pemilik/report',  [PemilikController::class, 'chartTahunan'])->name('chartTahunan');
Route::get('pemilik/monthReport',  [PemilikController::class, 'chartBulanan'])->name('chartBulanan');
Route::post('pemilik/monthReport',  [PemilikController::class, 'chartBulanan'])->name('chartBulanan');

Route::get('karyawan/home', [KaryawanController::class, 'index'])->name('home');
Route::get('karyawan/product', [KaryawanController::class, 'product'])->name('product');
Route::post('karyawan/tambahProduct', [KaryawanController::class, 'tambahProduct'])->name('tambahProduct');
Route::post('karyawan/hapusProduct', [KaryawanController::class, 'hapusProduct'])->name('hapusProduct');
Route::post('karyawan/updateProduct', [KaryawanController::class, 'updateProduct'])->name('updateProduct');
Route::get('karyawan/storage', [KaryawanController::class, 'storage'])->name('storage');
Route::post('karyawan/tambahStorage', [KaryawanController::class, 'tambahStorage'])->name('tambahStorage');
Route::post('karyawan/hapusStorage', [KaryawanController::class, 'hapusStorage'])->name('hapusStorage');
Route::post('karyawan/updateStorage', [KaryawanController::class, 'updateStorage'])->name('updateStorage');
Route::get('karyawan/order', [KaryawanController::class, 'order'])->name('order');
Route::get('karyawan/customer', [KaryawanController::class, 'customer'])->name('customer');
Route::get('karyawan/payment', [KaryawanController::class, 'payment'])->name('payment');
Route::post('karyawan/verifikasiPembayaran', [KaryawanController::class, 'verifikasiPembayaran'])->name('verifikasiPembayaran');
Route::post('karyawan/ubahStatusTransaksi', [KaryawanController::class, 'statusTransaksi'])->name('statusTransaksi');
Route::get('karyawan/profile',[KaryawanController::class, 'profile'])->name('Profile');
Route::post('karyawan/updateKaryawan',[KaryawanController::class, 'updateKaryawan'])->name('Profile');