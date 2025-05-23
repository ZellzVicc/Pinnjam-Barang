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
    Schema::create('notifikasis', function (Blueprint $table) {
        $table->id('notifikasi_id');
        $table->unsignedBigInteger('user_id');
        $table->text('isi_pesan');
        $table->dateTime('tanggal');
        $table->boolean('status_baca')->default(false);
        $table->timestamps();

        $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifikasis');
    }
};
