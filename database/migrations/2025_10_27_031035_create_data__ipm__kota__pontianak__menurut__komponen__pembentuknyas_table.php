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
        Schema::create('data__ipm__kota__pontianak__menurut__komponen__pembentuknyas', function (Blueprint $table) {
            $table->id();
            $table->integer('Tahun');
            $table->decimal('Angka_Harapan_Hidup_(Tahun)', 5, 2);
            $table->decimal('Harapan_Lama_Sekolah_(Tahun)', 5, 2);
            $table->decimal('Rata_Rata_Lama_Sekolah_(Tahun)', 5, 2);
            $table->integer('Pengeluran_Per_Kapita_(Ribu_Rupiah)');
            $table->decimal('Indeks_Pembangunan_Manusia', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data__ipm__kota__pontianak__menurut__komponen__pembentuknyas');
    }
};
