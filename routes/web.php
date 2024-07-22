<?php


use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\KwitansiController;
use App\Http\Controllers\AwalController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/login', LoginController::class);
Route::resource('/penyewa', PenyewaController::class);
Route::resource('/kendaraan', KendaraanController::class);
Route::resource('/sewa',SewaController::class);
Route::resource('/kwitansi',KwitansiController::class);
Route::resource('/invoice',InvoiceController::class);
Route::resource('/awal',AwalController::class);
Route::resource('/user',UserController::class);
Route::resource('/admin',AdminController::class);