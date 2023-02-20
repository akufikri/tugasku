<?php

use App\Http\Controllers\BarangController;
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

Route::get('/', [BarangController::class, 'index']);
Route::get('/databarang', [BarangController::class, 'databarang']);
Route::get('/hapus/{id}', [BarangController::class, 'hapus'])->name('hapus');
Route::get('/tambahdata', [BarangController::class, 'tambahdata']);
Route::post('/insert', [BarangController::class, 'insert']);

Route::get('/tampildata/{id}', [BarangController::class, 'tampildata']);
Route::post('/updatedata/{id}', [BarangController::class, 'updatedata']);
