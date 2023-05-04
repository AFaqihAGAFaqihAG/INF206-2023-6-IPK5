<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengunjungController extends Controller
{
    public function show($id_tempat)
    {
        // ambil data tempat wisata berdasarkan id_tempat dari database
        $tempatWisata = DB::table('tempat_wisata')
            ->where('id_tempat', '=', $id_tempat)
            ->first();

        // tampilkan halaman pengunjung dengan data dari database
        return view('PengunjungPage', ['tempatWisata' => $tempatWisata]);
    }
}
