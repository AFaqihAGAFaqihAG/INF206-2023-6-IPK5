<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PengunjungPageController;
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

Route::get('daftar', function () {
    return view('DaftarPage');
});
Route::get('pengunjung', function () {
    return view('PengunjungPage');
});

Route::get('/', [LandingPageController::class, 'index']);

//Router::get('/', [PengunjungPageController::class, 'index']);


