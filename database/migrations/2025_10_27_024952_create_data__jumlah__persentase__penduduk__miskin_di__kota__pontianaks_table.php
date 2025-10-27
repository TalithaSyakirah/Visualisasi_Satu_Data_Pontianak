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
        Schema::create('data__jumlah__persentase__penduduk__miskin_di__kota__pontianaks', function (Blueprint $table) {
            $table->id();
            $table->integer('Tahun');
            $table->integer('Garis_Kemiskinan_(Rp/Kapita/Bulan)');
            $table->decimal('Jumlah_Penduduk_Miskin',10,2);
            $table->decimal('Persentase_Penduduk_Miskin', 5, 2);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data__jumlah__persentase__penduduk__miskin_di__kota__pontianaks');
    }
};
