<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import model User untuk mengakses tabel users pada database
use Illuminate\Support\Facades\Session; // Import facade Session untuk mengakses session pada Laravel

class PetugasController extends Controller
{
    public function daftarPetugas(Request $request)
    {
        // Validasi data input dari form pendaftaran
        $request->validate([
            'id_tempat_wisata' => 'required',
            // Menyatakan field id_tempat_wisata wajib diisi
            'name' => 'required|string|max:255',
            // Menyatakan field name wajib diisi, string, dan maksimal 255 karakter
            'email' => 'required|email|unique:users,email',
            // Menyatakan field email wajib diisi, harus dalam format email, dan harus unik di dalam tabel users
            'password' => 'required|string|min:8',
            // Menyatakan field password wajib diisi dan minimal 8 karakter
            'role' => 'string', // Menyatakan field role harus dalam format string (optional)
        ]);

        // Membuat instance model User untuk menyimpan data pendaftaran petugas baru ke dalam database
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role = $request->input('role', 'petugas'); // Jika tidak ada inputan untuk field role, default-nya adalah 'petugas'
        $user->id_tempat_wisata = $request->input('id_tempat_wisata');
        $user->save();

        // Set pesan alert bahwa akun telah berhasil dibuat
        Session::flash('success', 'Akun Anda telah berhasil dibuat! Silakan login.');

        // Redirect ke halaman login
        return redirect('/login');
    }
}