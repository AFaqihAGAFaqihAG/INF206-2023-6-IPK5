<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tempatWisata extends Model
{
    use HasFactory;
    
    protected $table = "tempat_wisata";
    protected $fillable = ['nama_tempat', 'alamat', 'jam_buka', 'jam_tutup', 'jumlah_pengunjung', 'tingkat_keramaian', 'note', 'gambar'];

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
        return $this->hasMany(User::class);
    }


    /**
     * 
     * Satu tempat wisata memiliki banyak macam tiket
     * relasi many to one 
     */
    public function harga_tiket()
    {
        return $this->hasMany(User::class);
    }
}