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
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            // Validasi apakah petugas memiliki id_tempat_wisata yang terdaftar pada tabel tempat_wisata
            $tempatWisata = DB::table('tempat_wisata')
                ->where('id_tempat', '=', $user->id_tempat_wisata)
                ->first();
    
            if ($tempatWisata) {
                // Jika berhasil login, kirimkan URL halaman tempat wisata yang terkait sebagai response
                return response()->json([
                    'status' => 'success',
                    'url' => route('petugas.show', ['id_tempat' => $user->id_tempat_wisata]),
                ]);
            } else {
                // Jika id_tempat_wisata yang terkait tidak terdaftar pada tabel tempat_wisata, logout petugas dan kirimkan pesan error sebagai response
                Auth::logout();
                return response()->json([
                    'status' => 'error',
                    'message' => 'Anda tidak memiliki akses ke halaman tersebut',
                ]);
            }
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Username atau password salah',
            ]);
        }
    }    

    // Proses logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
