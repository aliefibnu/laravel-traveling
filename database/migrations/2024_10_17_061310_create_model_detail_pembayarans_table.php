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
        Schema::create('detail_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_maskapai');
            $table->string('origin');
            $table->integer('penumpang_dewasa');
            $table->integer('penumpang_anak');
            $table->integer('penumpang_bayi');
            $table->date('tanggal_keberangkatan');
            $table->date('tanggal_kembali')->nullable();
            $table->string('kelas_kursi');
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_maskapai')->references('id_maskapai')->on('maskapai')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pembayaran');
    }
};
