<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/pasien',[PasienController::class, 'index'])->name('pasien');
Route::get('/tambahpasien', [PasienController::class, 'tambahpasien'])->name('tambahpasien');
Route::post('/insertdata', [PasienController::class, 'insertdata'])->name('insertdata');
Route::get('/ubahpasien/{id}', [PasienController::class, 'ubahpasien'])->name('ubahpasien');
Route::post('/updatedata/{id}', [PasienController::class, 'updatedata'])->name('updatedata');
Route::get('/deletepasien/{id}', [PasienController::class, 'deletepasien'])->name('deletepasien');

Route::get('/obat', [ObatController::class, 'index'])->name('obat');
Route::get('/tambahobat', [ObatController::class, 'tambahobat'])->name('tambahobat');
Route::post('/insertdata1', [ObatController::class, 'insertdata1'])->name('insertdata1');
Route::get('/ubahobat/{id}', [ObatController::class, 'ubahobat'])->name('ubahobat');
Route::post('/updatedata1/{id}', [ObatController::class, 'updatedata1'])->name('updatedata1');
Route::get('/deleteobat/{id}', [ObatController::class, 'deleteobat'])->name('deleteobat');
//menangani ketika ada request untuk ekspor data obat
Route::get('/eksporobat', [ObatController::class, 'eksporobat'])->name('eksporobat');

Route::get('/kamar', [KamarController::class, 'index'])->name('kamar');
Route::get('/tambahkamar', [KamarController::class, 'tambahkamar'])->name('tambahkamar');
Route::post('/insertdata2', [KamarController::class, 'insertdata2'])->name('insertdata2');
Route::get('/ubahkamar/{id}', [KamarController::class, 'ubahkamar'])->name('ubahkamar');
Route::post('/updatedata2/{id}', [KamarController::class, 'updatedata2'])->name('updatedata2');
Route::get('/deletekamar/{id}', [KamarController::class, 'deletekamar'])->name('deletekamar');
Route::get('/eksporkamar', [KamarController::class, 'eksporkamar'])->name('eksporkamar');

Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran');
Route::get('/tambahpembayaran', [PembayaranController::class, 'tambahpembayaran'])->name('tambahpembayaran');
Route::post('/insertdata3', [PembayaranController::class, 'insertdata3'])->name('insertdata3');
Route::get('/ubahpembayaran/{id}', [PembayaranController::class, 'ubahpembayaran'])->name('ubahpembayaran');
Route::post('/updatedata3/{id}', [PembayaranController::class, 'updatedata3'])->name('updatedata3');
Route::get('/deletepembayaran/{id}', [PembayaranController::class, 'deletepembayaran'])->name('deletepembayaran');
Route::get('/eksporpembayaran', [PembayaranController::class, 'eksporpembayaran'])->name('eksporpembayaran');
