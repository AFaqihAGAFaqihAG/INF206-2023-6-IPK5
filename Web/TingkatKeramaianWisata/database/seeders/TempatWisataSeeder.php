<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Seeder;
use App\Models\tempatWisata;

class TempatWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tempatWisata::create([
            'nama_tempat' => 'Tempat_Wisata_1',
            'gambar' => 'gambar_1.png',
            'alamat' => 'Alamat_Wisata_1',
            'jam_buka' => '10:00:00',
            'jam_tutup' => '22:00:00',
            'jumlah_pengunjung' => 100,
            'tingkat_keramaian' => 'sepi',
            'note' => 'tempat sedang sepi' 
        ]);
        tempatWisata::create([
            'nama_tempat' => 'Tempat_Wisata_2',
            'gambar' => 'gambar_2.png',
            'alamat' => 'Alamat_Wisata_2',
            'jam_buka' => '12:00:00',
            'jam_tutup' => '20:00:00',
            'jumlah_pengunjung' => 200,
            'tingkat_keramaian' => 'sedang',
            'note' => 'tempat dalam keadaan normal' 
        ]);
        tempatWisata::create([
            'nama_tempat' => 'Tempat_Wisata_3',
            'gambar' => 'gambar_3.png',
            'alamat' => 'Alamat_Wisata_3',
            'jam_buka' => '10:00:00',
            'jam_tutup' => '22:00:00',
            'jumlah_pengunjung' => 100,
            'tingkat_keramaian' => 'sepi',
            'note' => 'tempat sedang sepi' 
        ]);
        tempatWisata::create([
            'nama_tempat' => 'Tempat_Wisata_4',
            'gambar' => 'gambar_4.png',
            'alamat' => 'Alamat_Wisata_4',
            'jam_buka' => '12:00:00',
            'jam_tutup' => '20:00:00',
            'jumlah_pengunjung' => 200,
            'tingkat_keramaian' => 'sedang',
            'note' => 'tempat dalam keadaan normal' 
        ]);     
        
        // insert data ke database
        foreach ($tempatWisata as $tw) {
            TempatWisata::create($tw);
        }
    }
}
