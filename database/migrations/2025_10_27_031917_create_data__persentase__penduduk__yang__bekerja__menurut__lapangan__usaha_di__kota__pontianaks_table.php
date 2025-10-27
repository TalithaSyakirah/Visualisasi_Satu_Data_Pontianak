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
        Schema::create('data__persentase__penduduk__yang__bekerja__menurut__lapangan__usaha_di__kota__pontianaks', function (Blueprint $table) {
            $table->id();
            $table->integer('Tahun');
            $table->decimal('Pertanian_Perkebunan_Kehutanan_Perburuan_dan_Perikanan', 5, 2);
            $table->decimal('Pertambangan_dan_Penggalian', 5, 2);
            $table->decimal('Industri', 5, 2);
            $table->decimal('Listrik_Gas_dan_Air Minum', 5, 2);
            $table->decimal('Konstruksi', 5, 2);
            $table->decimal('Perdagangan_Rumah_Makan_dan_Jasa_Akomodasi', 5, 2);
            $table->decimal('Transportasi_Pergudangan_dan_Komunikasi', 5, 2);
            $table->decimal('Lembaga_Keuangan_Real_Estate_Usaha_Perusahaan_dan_Jasa_Persh', 5, 2);
            $table->decimal('Jasa_Kemasyarakatan_Sosial_dan_Perorangan', 5, 2);
            $table->decimal('Jumlah', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data__persentase__penduduk__yang__bekerja__menurut__lapangan__usaha_di__kota__pontianaks');
    }
};
