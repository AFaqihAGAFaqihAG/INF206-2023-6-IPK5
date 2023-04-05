<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tempatWisata extends Model
{
    use HasFactory;
    /**
     * 
     * Satu tempat wisata memiliki banyak user
     * relasi many to one
     */
    public function user(){
        return $this->hasMany(User::class);
    }
}
