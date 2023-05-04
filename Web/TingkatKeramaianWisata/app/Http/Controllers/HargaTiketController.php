<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\TempatWisata;
use App\Models\HargaTiket;

class HargaTiketController extends Controller
{
    public function index($id_tempat)
    {
        $tempatWisata = TempatWisata::findOrFail($id_tempat);
        $hargaTiket = HargaTiket::where('id_tempat_wisata', $id_tempat)->get();

        return view('harga-tiket', compact('tempatWisata', 'hargaTiket'));
    }
}