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
        //
        Schema::create('maskapai',  function (Blueprint $table) {
            $table->id('id_maskapai');
            $table->string('nama_maskapai');
            $table->string('kelas_kursi');
            $table->string('deskripsi_maskapai');
            $table->string('url_foto');
            $table->timestamps();
        });
        Schema::create('harga_tiket', function (Blueprint $table) {
            $table->id('id_harga');
            $table->unsignedBigInteger('id_maskapai');
            $table->integer('harga_low');
            $table->integer('harga_top');
            $table->string('lokasi_transit');
            $table->timestamps();
            $table->foreign('id_maskapai')->references('id_maskapai')->on('maskapai')->onDelete('cascade');
        });
        Schema::create('durasi', function (Blueprint $table) {
            $table->id('id_durasi');
            $table->unsignedBigInteger('id_maskapai');
            $table->string('paling_cepat');
            $table->string('kisaran_normal');
            $table->timestamps();
            $table->foreign('id_maskapai')->references('id_maskapai')->on('maskapai')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('durasi');
        Schema::dropIfExists('harga_tiket');
        Schema::dropIfExists('maskapai');
    }
};
