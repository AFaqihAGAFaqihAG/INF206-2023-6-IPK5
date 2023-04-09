<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TempatWisata;

class TempatWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // buat data dummy
        $tempatWisata = [
            [
                'gambar' => 'images/candiBorobudur.jpg',
                'nama_tempat' => 'Candi Borobudur',
                'alamat' => 'Jalan Badrawati, Borobudur, Magelang',
                'jam_buka' => '06:00:00',
                'jam_tutup' => '17:00:00',
                'jumlah_pengunjung' => 500,
                'tingkat_keramaian' => 'Sedang',
                'note' => 'Candi Buddha terbesar di dunia.'
            ],
            [
                'nama_tempat' => 'Monas',
                'alamat' => 'Jl. Medan Merdeka, Jakarta Pusat',
                'jam_buka' => '08:00:00',
                'jam_tutup' => '16:00:00',
                'jumlah_pengunjung' => 500,
                'tingkat_keramaian' => 'sedang',
                'note' => 'Ikon kota Jakarta',
            ],
            [
                'nama_tempat' => 'Pantai Kuta',
                'alamat' => 'Jl. Pantai Kuta, Bali',
                'jam_buka' => '07:00:00',
                'jam_tutup' => '18:00:00',
                'jumlah_pengunjung' => 2000,
                'tingkat_keramaian' => 'ramai',
                'note' => 'Surfing paradise',
            ]
        ];
 
        // insert data ke database
        foreach ($tempatWisata as $tw) {
            TempatWisata::create($tw);
        }
    }
}
