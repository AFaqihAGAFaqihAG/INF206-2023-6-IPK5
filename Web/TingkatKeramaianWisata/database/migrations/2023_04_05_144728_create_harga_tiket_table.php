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
        Schema::create('harga_tiket', function (Blueprint $table) {
            $table->id('id_harga_tiket');
            $table->unsignedBigInteger('id_tempat_wisata')->nullable();
            $table->foreign('id_tempat_wisata')->references('id_tempat')->on('tempat_wisata')->onDelete('cascade');
            $table->string('jenis_tiket');
            $table->integer('harga');
            $table->integer('sisa_jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('harga_tikets');
    }
};
