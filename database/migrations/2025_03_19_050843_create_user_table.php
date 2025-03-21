<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('npm')->unique(); // Menjadikan npm unik
            $table->foreignId('kelas_id')->constrained('kelas')->onDelete('cascade'); // Menghubungkan ke tabel kelas
            $table->timestamps();
        });
    }

    /**
     * Rollback migrasi.
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
};
