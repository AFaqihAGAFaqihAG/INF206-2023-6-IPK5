<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HargaTiket extends Model
{
    use HasFactory;

    protected $table = 'harga_tiket';

    protected $primaryKey = 'id_harga_tiket';

    protected $fillable = [
        'id_tempat_wisata',
        'jenis_tiket',
        'harga',
        'sisa_jumlah',
    ];

    public function tempatWisata()
    {
        return $this->belongsTo(TempatWisata::class, 'id_tempat_wisata');
    }
}