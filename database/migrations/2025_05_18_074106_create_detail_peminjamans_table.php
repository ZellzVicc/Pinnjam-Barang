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
    Schema::create('detail_peminjamans', function (Blueprint $table) {
        $table->id('detail_id');
        $table->unsignedBigInteger('peminjaman_id');
        $table->unsignedBigInteger('barang_id');
        $table->integer('jumlah');
        $table->timestamps();

        $table->foreign('peminjaman_id')->references('peminjaman_id')->on('peminjamans')->onDelete('cascade');
        $table->foreign('barang_id')->references('barang_id')->on('barangs')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_peminjamans');
    }
};
