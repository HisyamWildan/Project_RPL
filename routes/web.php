<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('landing');
});
Route::get('/home', function () {
    return view('home');
});



Route::get('/dashboard', [DashboardController::class, 'index']);

// Lokasi
Route::get('/lokasi', [LokasiController::class, 'index']);
Route::get('/lokasi/create', [LokasiController::class, 'create']);
Route::post('/lokasi/store', [LokasiController::class, 'store']);
Route::get('/lokasi/edit/{id}', [LokasiController::class, 'edit']);
Route::put('/lokasi/update/{id}', [LokasiController::class, 'update']);
Route::delete('/lokasi/destroy/{id}', [LokasiController::class, 'destroy']);

// Jadwal
Route::get('/jadwal', [JadwalController::class, 'index']);
Route::get('/jadwal/create', [JadwalController::class, 'create']);
Route::post('/jadwal/store', [JadwalController::class, 'store']);
Route::get('/jadwal/edit/{id}', [JadwalController::class, 'edit']);
Route::put('/jadwal/update/{id}', [JadwalController::class, 'update']);
Route::delete('/jadwal/destroy/{id}', [JadwalController::class, 'destroy']);


// Berita
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/create', [BeritaController::class, 'create']);
Route::post('/berita/store', [BeritaController::class, 'store']);
Route::get('/berita/edit/{id}', [BeritaController::class, 'edit']);
Route::put('/berita/update/{id}', [BeritaController::class, 'update']);
Route::delete('/berita/destroy/{id}', [BeritaController::class, 'destroy']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
