<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi data input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba untuk melakukan login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();

            // Validasi apakah petugas memiliki id_tempat_wisata yang terdaftar pada tabel tempat_wisata
            $tempatWisata = DB::table('tempat_wisata')
                ->where('id_tempat', '=', $user->id_tempat_wisata)
                ->first();

            if ($tempatWisata) {
                // Jika berhasil login, redirect ke halaman tempat wisata yang terkait
                return redirect()->route('petugas.show', ['id_tempat' => $user->id_tempat_wisata]);
            } else {
                // Jika id_tempat_wisata yang terkait tidak terdaftar pada tabel tempat_wisata, logout petugas dan redirect ke halaman login dengan pesan error
                Auth::logout();
                return redirect()->back()->withErrors(['email' => 'Anda tidak memiliki akses ke halaman tersebut']);
            }
        } else {
            // Jika gagal login, kembali ke halaman login dengan pesan error
            return redirect()->back()->withErrors(['email' => 'Email atau password salah']);
        }
    }

    // Proses logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
