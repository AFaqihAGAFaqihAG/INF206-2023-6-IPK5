<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import model User untuk mengakses tabel users pada database
use Illuminate\Support\Facades\Session; // Import facade Session untuk mengakses session pada Laravel
use Illuminate\Support\Facades\DB;
use App\Models\TempatWisata;

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

    public function show($id_tempat)
    {
        $tempatWisata = DB::table('tempat_wisata')
            ->where('id_tempat', '=', $id_tempat)
            ->first();

        if (!$tempatWisata) {
            return redirect()->route('login')->withErrors(['email' => 'Anda tidak memiliki akses ke halaman tersebut']);
        }

        return view('PageTampilanPetugas', ['tempatWisata' => $tempatWisata]);
    }

    public function editPetugas($id_tempat)
    {
        $tempatWisata = TempatWisata::findOrFail($id_tempat);

        $tempatWisata = DB::table('tempat_wisata')
        ->where('id_tempat', '=', $id_tempat)
        ->first();
        return view('editpetugas', ['tempatWisata' => $tempatWisata]);
    }


    public function update(Request $request, $id_tempat)
    {
        $tempatWisata = TempatWisata::findOrFail($id_tempat);
        $tempatWisata->tingkat_keramaian = $request->tingkat_keramaian;
        $tempatWisata->note = $request->note;
        $tempatWisata->jam_buka = $request->jam_buka;
        $tempatWisata->jam_tutup = $request->jam_tutup;
        $tempatWisata->status = $request->status;
        $tempatWisata->jumlah_pengunjung = $request->jumlah_pengunjung;
        $tempatWisata->save();
        return redirect()->route('petugas.show', $id_tempat);
    }

}