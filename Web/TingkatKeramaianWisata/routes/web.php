<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\HargaTiketController;
use App\Http\Controllers\ReviewController;
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
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('daftar', function () {
    return view('DaftarPage');
});
Route::post('/daftar-petugas', [PetugasController::class, 'daftarPetugas']);

Route::get('pengunjung', function () {
    return view('PengunjungPage');
});

Route::get('Editpetugas', function () {
    return view('Editpetugas');
});


Route::get('/pengunjung/{id_tempat}', [PengunjungController::class, 'show']);

Route::post('/review-post', [PengunjungController::class, 'postReview']);


Route::get('/tempat-wisata/{id}/harga-tiket', [HargaTiketController::class, 'index'])->name('harga-tiket');

Route::get('/', [LandingPageController::class, 'index']);


Route::get('/tampilanPetugas', function () {
    return view('PageTampilanPetugas');
});

Route::get('/petugas/{id_tempat}', [PetugasController::class, 'show'])
    ->name('petugas.show')
    ->middleware('auth');

Route::get('/petugas/{id_tempat}/editpetugas', [PetugasController::class, 'editPetugas'])->name('petugas.editPetugas');

Route::put('/petugas/{id_tempat}/editpetugas', [PetugasController::class, 'update'])->name('petugas.update');


Route::get('/petugas/{id_tempat}/editharga', [HargaTiketController::class, 'edit'])->name('EditHarga');

Route::put('/petugas/{id_tempat}/editharga/{id_harga_tiket}', [HargaTiketController::class, 'update'])->name('EditHarga.update');
Route::delete('/petugas/{id_tempat}/editharga/{id_harga_tiket}', [HargaTiketController::class, 'destroy'])
    ->name('EditHarga.destroy');
Route::post('/petugas/{id_tempat}/editharga', [HargaTiketController::class, 'store'])->name('EditHarga.store')->middleware('auth');