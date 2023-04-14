<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
            // Jika berhasil login, redirect ke halaman beranda
            return redirect()->intended('pengunjung');
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
