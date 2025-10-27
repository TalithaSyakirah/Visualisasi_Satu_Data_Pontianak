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
        Schema::create('data__kondisi__ketenagakerjaan__kota__pontianaks', function (Blueprint $table) {
            $table->id();
            $table->integer('Tahun');
            $table->integer('Angkatan_Kerja');
            $table->integer('Bukan_Angkatan_Kerja');
            $table->integer('Jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data__kondisi__ketenagakerjaan__kota__pontianaks');
    }
};
