<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TempatWisata;

class LandingPageController extends Controller
{
    public function index()
    {
        $tempatWisata = TempatWisata::all();
        return view('LandingPage', compact(['tempatWisata']));
    }

    public function search()
    {
        $tempatWisata = TempatWisata::latest();
    
        if (request('search')) {
            $tempatWisata = $tempatWisata->where('nama_tempat', 'like', '%' . request('search') . '%');
        }
    
        $tempatWisata = $tempatWisata->get();
    
        return view('search', compact('tempatWisata'));
    }
    
}
