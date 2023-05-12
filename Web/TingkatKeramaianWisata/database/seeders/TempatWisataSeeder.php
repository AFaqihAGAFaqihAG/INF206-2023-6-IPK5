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
            'nama_tempat' => 'Museum Tsunami Aceh',
            'gambar' => 'gambar_1.png',
            'alamat' => 'Kec. Baiturrahman Banda Aceh',
            'status' => 'buka',
            'jam_buka' => '09:00:00',
            'jam_tutup' => '16:00:00',
            'jumlah_pengunjung' => 50,
            'tingkat_keramaian' => 'sepi',
            'note' => 'Jika Anda mencari tempat untuk bersantai dan menikmati waktu sendiri, maka saat ini mungkin adalah waktu yang tepat untuk mengunjungi tempat wisata yang sedang sepi. Dengan sedikit atau bahkan tanpa kerumunan orang, pengunjung dapat menikmati keindahan dan kenyamanan tempat wisata dengan lebih tenang dan santai.' 
        ]);
        TempatWisata::create([
            'nama_tempat' => 'Museum Aceh',
            'gambar' => 'gambar_2.png',
            'alamat' => 'Kec. Baiturrahman, Banda Aceh',
            'status' => 'buka',
            'jam_buka' => '08:30:00',
            'jam_tutup' => '16:15:00',
            'jumlah_pengunjung' => 30,
            'tingkat_keramaian' => 'sepi',
            'note' => 'Jika Anda mencari tempat untuk bersantai dan menikmati waktu sendiri, maka saat ini mungkin adalah waktu yang tepat untuk mengunjungi tempat wisata yang sedang sepi. Dengan sedikit atau bahkan tanpa kerumunan orang, pengunjung dapat menikmati keindahan dan kenyamanan tempat wisata dengan lebih tenang dan santai.' 
        ]);
        TempatWisata::create([
            'nama_tempat' => 'Pantai Ulee Lheue',
            'gambar' => 'gambar_3.png',
            'alamat' => 'Kec. Meuraxa, Banda Aceh',
            'status' => 'buka',
            'jam_buka' => '06:00:00',
            'jam_tutup' => '18:00:00',
            'jumlah_pengunjung' => 200,
            'tingkat_keramaian' => 'padat',
            'note' => 'Jika Anda sedang mencari tempat wisata yang penuh dengan keramaian dan aktivitas, maka mungkin tempat wisata yang sedang padat adalah pilihan yang tepat untuk Anda. Di tempat seperti ini, Anda akan menemukan banyak pengunjung yang memadati area wisata. Namun jika anda tidak menyukai keramaian berlebih, maka tidak disarankan untuk anda pergi ke tempat wisata ini.' 
        ]);   
        TempatWisata::create([
            'nama_tempat' => 'Rumah Cut Nyak Dien',
            'gambar' => 'gambar_4.png',
            'alamat' => 'Kec. Peukan Bada, Aceh Besar',
            'status' => 'buka',
            'jam_buka' => '09:00:00',
            'jam_tutup' => '17:00:00',
            'jumlah_pengunjung' => 25,
            'tingkat_keramaian' => 'sedang',
            'note' => 'Tempat wisata saat ini berada dalam keadaan normal, artinya tempat tersebut tidak terlalu ramai dan tidak terlalu sepi. Anda tetap dapat menikmati keadaan tempat wisata secara tenang dan tidak perlu mengantri terlalu lama untuk menikmati fasilitas didalamnya.' 
        ]);     
        TempatWisata::create([
            'nama_tempat' => 'Museum PLTD Apung',
            'gambar' => 'gambar_5.png',
            'alamat' => 'Kec. Jaya Baru, Banda Aceh',
            'status' => 'buka',
            'jam_buka' => '09:00:00',
            'jam_tutup' => '17:30:00',
            'jumlah_pengunjung' => 200,
            'tingkat_keramaian' => 'padat',
            'note' => 'Jika Anda sedang mencari tempat wisata yang penuh dengan keramaian dan aktivitas, maka mungkin tempat wisata yang sedang padat adalah pilihan yang tepat untuk Anda. Di tempat seperti ini, Anda akan menemukan banyak pengunjung yang memadati area wisata. Namun jika anda tidak menyukai keramaian berlebih, maka tidak disarankan untuk anda pergi ke tempat wisata ini.' 
        ]);     
        TempatWisata::create([
            'nama_tempat' => 'Pantai Lampuuk',
            'gambar' => 'gambar_6.png',
            'alamat' => 'Kec. Lhoknga, Aceh Besar',
            'status' => 'buka',
            'jam_buka' => '08:00:00',
            'jam_tutup' => '18:30:00',
            'jumlah_pengunjung' => 400,
            'tingkat_keramaian' => 'padat',
            'note' => 'Jika Anda sedang mencari tempat wisata yang penuh dengan keramaian dan aktivitas, maka mungkin tempat wisata yang sedang padat adalah pilihan yang tepat untuk Anda. Di tempat seperti ini, Anda akan menemukan banyak pengunjung yang memadati area wisata. Namun jika anda tidak menyukai keramaian berlebih, maka tidak disarankan untuk anda pergi ke tempat wisata ini.' 
        ]);      
        TempatWisata::create([
            'nama_tempat' => 'Candi Borobudur',
            'gambar' => 'gambar_7.png',
            'alamat' => 'Kec. Borobudur, Magelang',
            'status' => 'buka',
            'jam_buka' => '09:00:00',
            'jam_tutup' => '18:30:00',
            'jumlah_pengunjung' => 1200,
            'tingkat_keramaian' => 'padat',
            'note' => 'Jika Anda sedang mencari tempat wisata yang penuh dengan keramaian dan aktivitas, maka mungkin tempat wisata yang sedang padat adalah pilihan yang tepat untuk Anda. Di tempat seperti ini, Anda akan menemukan banyak pengunjung yang memadati area wisata. Namun jika anda tidak menyukai keramaian berlebih, maka tidak disarankan untuk anda pergi ke tempat wisata ini.' 
        ]); 
        TempatWisata::create([
            'nama_tempat' => 'Danau Toba',
            'gambar' => 'gambar_8.png',
            'alamat' => 'Sumatera Utara',
            'status' => 'buka',
            'jam_buka' => '09:00:00',
            'jam_tutup' => '18:30:00',
            'jumlah_pengunjung' => 800,
            'tingkat_keramaian' => 'padat',
            'note' => 'Jika Anda sedang mencari tempat wisata yang penuh dengan keramaian dan aktivitas, maka mungkin tempat wisata yang sedang padat adalah pilihan yang tepat untuk Anda. Di tempat seperti ini, Anda akan menemukan banyak pengunjung yang memadati area wisata. Namun jika anda tidak menyukai keramaian berlebih, maka tidak disarankan untuk anda pergi ke tempat wisata ini.' 
        ]); 
        TempatWisata::create([
            'nama_tempat' => 'Gunung Bromo',
            'gambar' => 'gambar_9.png',
            'alamat' => 'Kab. Lumajang, Jawa Timur',
            'status' => 'buka',
            'jam_buka' => '00:00:00',
            'jam_tutup' => '00:00:00',
            'jumlah_pengunjung' => 800,
            'tingkat_keramaian' => 'padat',
            'note' => 'Jika Anda sedang mencari tempat wisata yang penuh dengan keramaian dan aktivitas, maka mungkin tempat wisata yang sedang padat adalah pilihan yang tepat untuk Anda. Di tempat seperti ini, Anda akan menemukan banyak pengunjung yang memadati area wisata. Namun jika anda tidak menyukai keramaian berlebih, maka tidak disarankan untuk anda pergi ke tempat wisata ini.' 
        ]); 
        TempatWisata::create([
            'nama_tempat' => 'Raja Ampat',
            'gambar' => 'gambar_10.png',
            'alamat' => 'Kab. Raja Ampat, Papua Barat Daya',
            'status' => 'buka',
            'jam_buka' => '10:00:00',
            'jam_tutup' => '17:00:00',
            'jumlah_pengunjung' => 600,
            'tingkat_keramaian' => 'padat',
            'note' => 'Jika Anda sedang mencari tempat wisata yang penuh dengan keramaian dan aktivitas, maka mungkin tempat wisata yang sedang padat adalah pilihan yang tepat untuk Anda. Di tempat seperti ini, Anda akan menemukan banyak pengunjung yang memadati area wisata. Namun jika anda tidak menyukai keramaian berlebih, maka tidak disarankan untuk anda pergi ke tempat wisata ini.' 
        ]); 
        TempatWisata::create([
            'nama_tempat' => 'Pulau Komodo',
            'gambar' => 'gambar_11.png',
            'alamat' => 'Kepulauan Nusa Tenggara, NTT',
            'status' => 'buka',
            'jam_buka' => '00:00:00',
            'jam_tutup' => '00:00:00',
            'jumlah_pengunjung' => 100,
            'tingkat_keramaian' => 'sepi',
            'note' => 'Jika Anda mencari tempat untuk bersantai dan menikmati waktu sendiri, maka saat ini mungkin adalah waktu yang tepat untuk mengunjungi tempat wisata yang sedang sepi. Dengan sedikit atau bahkan tanpa kerumunan orang, pengunjung dapat menikmati keindahan dan kenyamanan tempat wisata dengan lebih tenang dan santai.' 
        ]); 
        TempatWisata::create([
            'nama_tempat' => 'Candi Prambanan',
            'gambar' => 'gambar_12.png',
            'alamat' => 'Kab. Klaten, Jawa Tengah',
            'status' => 'buka',
            'jam_buka' => '06:30:00',
            'jam_tutup' => '17:00:00',
            'jumlah_pengunjung' => 500,
            'tingkat_keramaian' => 'ramai',
            'note' => 'Jika Anda sedang mencari tempat wisata yang penuh dengan keramaian dan aktivitas, maka mungkin tempat wisata yang sedang padat adalah pilihan yang tepat untuk Anda. Di tempat seperti ini, Anda akan menemukan banyak pengunjung yang memadati area wisata. Namun jika anda tidak menyukai keramaian berlebih, maka tidak disarankan untuk anda pergi ke tempat wisata ini.' 
        ]); 
    }
}