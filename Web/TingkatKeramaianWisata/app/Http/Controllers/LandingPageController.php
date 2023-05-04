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
}
