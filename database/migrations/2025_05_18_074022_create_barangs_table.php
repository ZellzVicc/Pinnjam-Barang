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
    Schema::create('barangs', function (Blueprint $table) {
        $table->id('barang_id');
        $table->string('nama_barang', 100);
        $table->text('deskripsi')->nullable();
        $table->enum('status', ['tersedia', 'dipinjam'])->default('tersedia');
        $table->unsignedBigInteger('kategori_id');
        $table->timestamps();
        $table->foreign('kategori_id')->references('kategori_id')->on('kategori_barangs')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
