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
        Schema::create('peminjamans', function (Blueprint $table) {
        $table->id('peminjaman_id');
        $table->unsignedBigInteger('user_id');
        $table->date('tanggal_pinjam');
        $table->date('tanggal_kembali');
        $table->enum('status', ['diproses', 'disetujui', 'ditolak', 'dikembalikan'])->default('diproses');
        $table->integer('jumlah');
        $table->timestamps();

        $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamans');
    }
};
