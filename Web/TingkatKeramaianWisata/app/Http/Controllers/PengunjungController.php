<?php

namespace App\Http\Controllers;

use App\Models\TempatWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Review;
use App\Models\HargaTiket;

class PengunjungController extends Controller
{
    public function show($id_tempat)
    {
        // ambil data tempat wisata berdasarkan id_tempat dari database
        $tempatWisata = DB::table('tempat_wisata')
            ->where('id_tempat', '=', $id_tempat)
            ->first();
        
        $tempatWisata = TempatWisata::findOrFail($id_tempat);
        $hargaTiket = HargaTiket::where('id_tempat_wisata', $id_tempat)->get();

        $reviews = Review::all();
        // tampilkan halaman pengunjung dengan data dari database
        return view('PengunjungPage', compact('tempatWisata','hargaTiket', 'reviews' ));
    }
    

    public function postReview(Request $request)
    {

        $request->validate([
            'R_nama' => 'required|string|max:30',
            'isi_review' => 'required|string|max:500'
        ]);
        
        $review = new Review;
        $review->id_tempat_wisata = $request->input('id_tempat');
        $review->R_nama = $request->input('R_nama');
        $review->isi_review = $request->input('isi_review');
        $review->save();
        
        return redirect()->back();
    }   
}
