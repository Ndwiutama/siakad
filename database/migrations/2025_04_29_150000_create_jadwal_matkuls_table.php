<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jadwal_matkuls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dosen_id');
            $table->string('mata_kuliah');
            $table->string('kelas')->nullable();
            $table->string('hari');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->integer('semester');
            $table->string('ruang')->nullable();
            $table->timestamps();

            $table->foreign('dosen_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jadwal_matkuls');
    }
}; 