<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tempat_wisata', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tempat');
            $table->string('alamat');
            $table->time('jam_buka');
            $table->time('jam_tutup');
            $table->integer('jumlah_pengunjung');
            $table->string('tingkat_keramaian');
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tempat_wisata');
    }
};
