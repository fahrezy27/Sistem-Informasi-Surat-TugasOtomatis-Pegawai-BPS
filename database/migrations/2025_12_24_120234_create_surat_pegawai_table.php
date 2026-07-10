<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('surat_pegawai', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('surat_id');
            $table->unsignedBigInteger('pegawai_id');
            $table->timestamps();

            // Foreign key
            $table->foreign('surat_id')
                  ->references('id')
                  ->on('surat')
                  ->onDelete('cascade');

            $table->foreign('pegawai_id')
                  ->references('id')
                  ->on('pegawai')
                  ->onDelete('cascade');

            // Supaya tidak dobel pegawai di surat yang sama
            $table->unique(['surat_id', 'pegawai_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('surat_pegawai');
    }
};
