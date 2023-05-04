<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TempatWisata;

class TempatWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TempatWisata::create([
            'nama_tempat' => 'Taman Mini Indonesia Indah',
            'gambar' => 'gambar_1.png',
            'alamat' => ' Jl. Raya Jakarta-Tangerang, Jakarta Timur',
            'jam_buka' => '08:00:00',
            'jam_tutup' => '18:00:00',
            'jumlah_pengunjung' => 100,
            'tingkat_keramaian' => 'sepi',
            'note' => 'tempat sedang sepi'
        ]);
        TempatWisata::create([
            'nama_tempat' => 'Tanah Lot',
            'gambar' => 'gambar_2.png',
            'alamat' => 'Beraban, Kediri, Tabanan, Bali',
            'jam_buka' => '07:00:00',
            'jam_tutup' => '19:00:00',
            'jumlah_pengunjung' => 200,
            'tingkat_keramaian' => 'sedang',
            'note' => 'tempat dalam keadaan normal'
        ]);
        TempatWisata::create([
            'nama_tempat' => 'Candi Borobudur',
            'gambar' => 'gambar_3.png',
            'alamat' => 'Jl. Badrawati, Borobudur, Magelang, Jawa Tengah',
            'jam_buka' => '06:00:00',
            'jam_tutup' => '17:00:00',
            'jumlah_pengunjung' => 100,
            'tingkat_keramaian' => 'sepi',
            'note' => 'tempat sedang sepi'
        ]);
        TempatWisata::create([
            'nama_tempat' => 'Gunung Bromo',
            'gambar' => 'gambar_4.png',
            'alamat' => 'Desa Ngadisari,Probolinggo,Jawa Timur.',
            'jam_buka' => '00:00:00',
            'jam_tutup' => '00:00:00',
            'jumlah_pengunjung' => 200,
            'tingkat_keramaian' => 'sedang',
            'note' => 'tempat dalam keadaan normal'
        ]);
        TempatWisata::create([
            'nama_tempat' => 'Danau Toba',
            'gambar' => 'gambar_1.png',
            'alamat' => 'Pulau Samosir, Toba, Sumatra Utara',
            'jam_buka' => '00:00:00',
            'jam_tutup' => '00:00:00',
            'jumlah_pengunjung' => 100,
            'tingkat_keramaian' => 'sepi',
            'note' => 'tempat sedang sepi'
        ]);
        TempatWisata::create([
            'nama_tempat' => 'Candi Prambanan',
            'gambar' => 'gambar_2.png',
            'alamat' => ' Bokoharjo, Prambanan, Sleman, Yogyakarta',
            'jam_buka' => '06:00:00',
            'jam_tutup' => '17:00:00',
            'jumlah_pengunjung' => 200,
            'tingkat_keramaian' => 'sedang',
            'note' => 'tempat dalam keadaan normal'
        ]);
        TempatWisata::create([
            'nama_tempat' => 'Pulau komodo',
            'gambar' => 'gambar_3.png',
            'alamat' => 'Pulau Komodo, Nusa Tenggara Timur',
            'jam_buka' => '07:00:00',
            'jam_tutup' => '16:00:00',
            'jumlah_pengunjung' => 100,
            'tingkat_keramaian' => 'sepi',
            'note' => 'tempat sedang sepi'
        ]);
        TempatWisata::create([
            'nama_tempat' => 'Bali Safari and Marine Park',
            'gambar' => 'gambar_4.png',
            'alamat' => ' Jl. Bypass Prof. Dr. Ida Bagus Mantra Km. 19,8, Gianyar, Bali',
            'jam_buka' => '09:00:00',
            'jam_tutup' => '17:00:00',
            'jumlah_pengunjung' => 200,
            'tingkat_keramaian' => 'sedang',
            'note' => 'tempat dalam keadaan normal'
        ]);
        TempatWisata::create([
            'nama_tempat' => 'Monas',
            'gambar' => 'gambar_1.png',
            'alamat' => 'Gambir, Jakarta Pusat',
            'jam_buka' => '08:00:00',
            'jam_tutup' => '16:00:00',
            'jumlah_pengunjung' => 100,
            'tingkat_keramaian' => 'sepi',
            'note' => 'tempat sedang sepi'
        ]);
        TempatWisata::create([
            'nama_tempat' => 'Jatim Park 2',
            'gambar' => 'gambar_2.png',
            'alamat' => 'Jl. Oro-Oro Ombo No. 9-11, Batu, Jawa Timur',
            'jam_buka' => '09:00:00',
            'jam_tutup' => '18:00:00',
            'jumlah_pengunjung' => 200,
            'tingkat_keramaian' => 'sedang',
            'note' => 'tempat dalam keadaan normal'
        ]);
        TempatWisata::create([
            'nama_tempat' => 'Taman Safari Indonesia',
            'gambar' => 'gambar_3.png',
            'alamat' => 'Jl. Raya Puncak No.601, Cisarua, Bogor, Jawa Barat',
            'jam_buka' => '09:00:00',
            'jam_tutup' => '17:00:00',
            'jumlah_pengunjung' => 100,
            'tingkat_keramaian' => 'sepi',
            'note' => 'tempat sedang sepi'
        ]);
        TempatWisata::create([
            'nama_tempat' => 'Pantai Lampuuk',
            'gambar' => 'gambar_4.png',
            'alamat' => 'Desa Lampuuk, Kecamatan Lhoknga,Aceh Besar, Aceh',
            'jam_buka' => '08:00:00',
            'jam_tutup' => '18:00:00',
            'jumlah_pengunjung' => 200,
            'tingkat_keramaian' => 'sedang',
            'note' => 'tempat dalam keadaan normal'
        ]);
        TempatWisata::create([
            'nama_tempat' => 'Masjid Raya Baiturrahman',
            'gambar' => 'gambar_4.png',
            'alamat' => ' Jl. Mohd. Jam, Kecamatan Baiturrahman, Kota Banda Aceh, Aceh',
            'jam_buka' => '08:00:00',
            'jam_tutup' => '17:00:00',
            'jumlah_pengunjung' => 200,
            'tingkat_keramaian' => 'sedang',
            'note' => 'tempat dalam keadaan normal'
        ]);
        TempatWisata::create([
            'nama_tempat' => 'Pantai Ujong Kareung',
            'gambar' => 'gambar_4.png',
            'alamat' => 'Kecamatan Krueng Barona Jaya, Kabupaten Aceh Besar, Aceh',
            'jam_buka' => '08:00:00',
            'jam_tutup' => '17:00:00',
            'jumlah_pengunjung' => 200,
            'tingkat_keramaian' => 'sedang',
            'note' => 'tempat dalam keadaan normal'
        ]);
        TempatWisata::create([
            'nama_tempat' => 'Taman Putroe Phang',
            'gambar' => 'gambar_4.png',
            'alamat' => 'Jl. Tgk. Daud Beureueh, Kecamatan Baiturrahman, Kota Banda Aceh, Aceh',
            'jam_buka' => '08:00:00',
            'jam_tutup' => '17:00:00',
            'jumlah_pengunjung' => 200,
            'tingkat_keramaian' => 'sedang',
            'note' => 'tempat dalam keadaan normal'
        ]);
        TempatWisata::create([
            'nama_tempat' => 'Taman Sari Gunongan Historical Park',
            'gambar' => 'gambar_4.png',
            'alamat' => 'Jalan Teuku Nyak Arief, Kecamatan Baiturrahman, Kota Banda Aceh, Aceh',
            'jam_buka' => '09:00:00',
            'jam_tutup' => '17:00:00',
            'jumlah_pengunjung' => 200,
            'tingkat_keramaian' => 'sedang',
            'note' => 'tempat dalam keadaan normal'
        ]);
        TempatWisata::create([
            'nama_tempat' => 'Air Terjun Lhok Meuriah',
            'gambar' => 'gambar_4.png',
            'alamat' => 'Desa Bukit Mas, Kecamatan Dewantara, Aceh Utara, Aceh',
            'jam_buka' => '08:00:00',
            'jam_tutup' => '18:00:00',
            'jumlah_pengunjung' => 200,
            'tingkat_keramaian' => 'sedang',
            'note' => 'tempat dalam keadaan normal'
        ]);
    }
}