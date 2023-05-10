<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
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

    public function edit($id_tempat)
    {
        // Ambil data tempat wisata berdasarkan id_tempat
        $tempatWisata = TempatWisata::findOrFail($id_tempat);

        // Ambil data harga tiket berdasarkan id_tempat_wisata yang sama dengan id_tempat
        $hargaTiket = HargaTiket::where('id_tempat_wisata', $id_tempat)->get();

        // Kirim data tempat wisata dan harga tiket ke view EditHarga
        return view('EditHarga', compact('tempatWisata', 'hargaTiket'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_tempat_wisata' => 'required',
            'jenis_tiket' => 'required',
            'harga' => 'required|numeric|min:0',
            'sisa_jumlah' => 'required|numeric|min:0',
        ]);

        $id_tempat = $request->id_tempat_wisata;

        HargaTiket::create([
            'id_tempat_wisata' => $id_tempat,
            'jenis_tiket' => $validatedData['jenis_tiket'],
            'harga' => $validatedData['harga'],
            'sisa_jumlah' => $validatedData['sisa_jumlah'],
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan.');
    }



    public function update(Request $request, $id_tempat, $id_harga_tiket)
    {
        $harga_tiket = HargaTiket::where('id_harga_tiket', $id_harga_tiket)->first();
        $harga_tiket->jenis_tiket = $request->jenis_tiket;
        $harga_tiket->harga = $request->harga;
        $harga_tiket->sisa_jumlah = $request->sisa_jumlah;
        $harga_tiket->save();

        return redirect()->back()->with('success', 'Harga tiket berhasil diubah');
    }
    public function destroy($id_tempat, $id_harga_tiket)
    {
        $hargaTiket = HargaTiket::where('id_harga_tiket', $id_harga_tiket)->firstOrFail();
        $hargaTiket->delete();
    
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }    
}