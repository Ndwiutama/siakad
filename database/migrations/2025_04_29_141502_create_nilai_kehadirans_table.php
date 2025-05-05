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
        Schema::create('nilai_kehadirans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('praja_id');
            $table->unsignedBigInteger('dosen_id');
            $table->string('semester');
            $table->string('mata_kuliah');
            $table->string('kelas')->nullable();
            $table->integer('kehadiran')->nullable();
            $table->integer('tugas')->nullable();
            $table->integer('uts')->nullable();
            $table->integer('uas')->nullable();
            $table->integer('nilai_akhir')->nullable();
            $table->timestamps();

            $table->foreign('praja_id')->references('id')->on('prajas')->onDelete('cascade');
            $table->foreign('dosen_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_kehadirans');
    }
};
