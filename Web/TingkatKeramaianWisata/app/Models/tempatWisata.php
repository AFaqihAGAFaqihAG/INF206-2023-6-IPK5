<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TempatWisata extends Model
{
    use HasFactory;

    protected $table = "tempat_wisata";

    protected $fillable = ['nama_tempat', 'alamat', 'status', 'jam_buka', 'jam_tutup', 'jumlah_pengunjung', 'tingkat_keramaian', 'note', 'gambar'];

    public function addGambar($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $fileName);
        $this->gambar = $fileName;
        $this->save();
    }

    /**
     * 
     * Satu tempat wisata memiliki banyak user
     * relasi many to one
     */
    public function user()
    {
        return $this->hasMany(User::class, 'id_tempat');
    }


    /**
     * Satu tempat wisata memiliki banyak macam tiket
     * relasi many to one 
     */

     protected $primaryKey = 'id_tempat';
    public function HargaTiket()
    {
        return $this->hasMany(HargaTiket::class, 'id_tempat');
    }

}