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
        Schema::create('data__ipm__menurut__kabupaten__kota_di__kalimantan__barats', function (Blueprint $table) {
            $table->id();
            $table->integer('Tahun');
            $table->decimal('Kabupaten_Sambas', 5, 2);
            $table->decimal('Kabupaten_Bengkayang', 5, 2);
            $table->decimal('Kabupaten_Landak', 5, 2);
            $table->decimal('Kabupaten_Mempawah', 5, 2);
            $table->decimal('Kabupaten_Sanggau', 5, 2);
            $table->decimal('Kabupaten_Ketapang', 5, 2);
            $table->decimal('Kabupaten_Sintang', 5, 2);
            $table->decimal('Kabupaten_Kapuas_Hulu', 5, 2);
            $table->decimal('Kabupaten_Sekadau', 5, 2);
            $table->decimal('Kabupaten_Melawi', 5, 2);
            $table->decimal('Kabupaten_Kayong_Utara', 5, 2);
            $table->decimal('Kabupaten_Kubu_Raya', 5, 2);
            $table->decimal('Kota_Pontianak', 5, 2);
            $table->decimal('Kota_Singkawang', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data__ipm__menurut__kabupaten__kota_di__kalimantan__barats');
    }
};
