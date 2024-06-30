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
        Schema::create('kandidats', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('fakultas');
            $table->string('prodi');
            $table->string('domisili');
            $table->integer('umur');
            $table->enum('jenis_kelamin', [0, 1]);
            $table->enum('angkatan', [2020, 2021, 2022, 2023, 2024]);
            $table->string('file_pdf');
            $table->string('gambar');
            $table->string('no_whatsapp');
            $table->string('email');
            $table->text('visi');
            $table->text('misi');
            $table->double('tinggi_badan');
            $table->double('berat_badan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kandidats');
    }
};
