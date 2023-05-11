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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('r_id');
            $table->unsignedBigInteger('id_tempat_wisata')->nullable();
            $table->foreign('id_tempat_wisata')->references('id_tempat')->on('tempat_wisata')->onDelete('cascade');
            $table->string('R_nama');
            $table->text('isi_review');
            $table->timestamp('publised_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
