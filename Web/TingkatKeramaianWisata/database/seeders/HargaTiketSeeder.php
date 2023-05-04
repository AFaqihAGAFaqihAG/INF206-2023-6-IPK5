<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HargaTiket;

class HargaTiketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hargaTiket = [
            [
                'id_tempat_wisata' => 1,
                'jenis_tiket' => 'Reguler',
                'harga' => 50000,
                'sisa_jumlah' => 100,
            ],
            [
                'id_tempat_wisata' => 1,
                'jenis_tiket' => 'VIP',
                'harga' => 100000,
                'sisa_jumlah' => 50,
            ],
            [
                'id_tempat_wisata' => 2,
                'jenis_tiket' => 'Reguler',
                'harga' => 75000,
                'sisa_jumlah' => 75,
            ],
            [
                'id_tempat_wisata' => 2,
                'jenis_tiket' => 'VIP',
                'harga' => 150000,
                'sisa_jumlah' => 25,
            ],
            [
                'id_tempat_wisata' => 3,
                'jenis_tiket' => 'Reguler',
                'harga' => 60000,
                'sisa_jumlah' => 80,
            ],
            [
                'id_tempat_wisata' => 3,
                'jenis_tiket' => 'VIP',
                'harga' => 120000,
                'sisa_jumlah' => 40,
            ],
            [
                'id_tempat_wisata' => 4,
                'jenis_tiket' => 'Reguler',
                'harga' => 40000,
                'sisa_jumlah' => 120,
            ],
            [
                'id_tempat_wisata' => 4,
                'jenis_tiket' => 'VIP',
                'harga' => 80000,
                'sisa_jumlah' => 60,
            ],
            [
                'id_tempat_wisata' => 5,
                'jenis_tiket' => 'Reguler',
                'harga' => 55000,
                'sisa_jumlah' => 90,
            ],
            [
                'id_tempat_wisata' => 5,
                'jenis_tiket' => 'VIP',
                'harga' => 110000,
                'sisa_jumlah' => 45,
            ],
            [
                'id_tempat_wisata' => 6,
                'jenis_tiket' => 'Reguler',
                'harga' => 55000,
                'sisa_jumlah' => 90,
            ],
            [
                'id_tempat_wisata' => 6,
                'jenis_tiket' => 'VIP',
                'harga' => 110000,
                'sisa_jumlah' => 45,
            ],
        ];

        // Insert data harga tiket ke tabel harga_tiket
        foreach ($hargaTiket as $harga) {
            HargaTiket::create($harga);
        }
    }
}
