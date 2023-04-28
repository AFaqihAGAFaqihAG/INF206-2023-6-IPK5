<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengunjungPageController;
use App\Http\Controllers\PengunjungController;
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



Route::get('login', function () {
    return view('LoginPage');
});
Route::post('/Login', [LoginController::class, 'login'])->name('login');

Route::get('daftar', function () {
    return view('DaftarPage');
});
Route::post('/daftar-petugas', [PetugasController::class, 'daftarPetugas']);

Route::get('pengunjung', function () {
    return view('PengunjungPage');
});
Route::get('/', [LandingPageController::class, 'index']);

//Router::get('/', [PengunjungPageController::class, 'index']);


