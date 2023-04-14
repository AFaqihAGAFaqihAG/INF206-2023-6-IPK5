<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tempatWisata;

class PengunjungPageController extends Controller
{
    public function index()
    {
        $tempatWisata = tempatWisata::all();

        return view('PengunjungPage', compact('tempatWisata'));
    }
}
