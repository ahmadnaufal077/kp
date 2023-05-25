<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\JasaserviceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('transaksi.index');
});

Route::get('/portfolio-details', function () {
    return view('utama.portfolio-details');
});

Route::get('/barang',[BarangController::class,'index']);
Route::post('/barang/tambah-barang',[BarangController::class,'save'])->name('barang.tambah');

Route::get('/jasaservice',[JasaserviceController::class,'index']);