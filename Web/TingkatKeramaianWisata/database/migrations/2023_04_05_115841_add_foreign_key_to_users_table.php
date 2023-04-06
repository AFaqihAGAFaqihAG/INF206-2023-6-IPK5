<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->unsignedBigInteger('id_tempat_wisata')->nullable();
        $table->foreign('id_tempat_wisata')->references('id_tempat')->on('tempat_wisata')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['id_tempat_wisata']);
            $table->dropColumn('id_tempat_wisata');
        });
    }
};
