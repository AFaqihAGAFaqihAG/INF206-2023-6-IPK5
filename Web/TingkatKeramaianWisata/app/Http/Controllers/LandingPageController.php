<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tempatWisata;

class LandingPageController extends Controller
{
    public function index()
    {
        $tempatWisata = tempatWisata::all();
        return view('LandingPage', compact(['tempatWisata']));
    }
}
