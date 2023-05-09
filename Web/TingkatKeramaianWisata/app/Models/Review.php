<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = "reviews";

    protected $fillable = ['R_nama', 'isi_review'];

    public function tempatWisata()
    {
        return $this->belongsTo(TempatWisata::class, 'id_tempat_wisata');
    }
    
}
