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
        Schema::create('data__pertumbuhan__nilai__tambah__kategori__kota__pontianaks', function (Blueprint $table) {
            $table->id();
            $table->integer('Tahun');
            $table->decimal('Pertanian_Kehutanan_dan_Perikanan', 15, 2);
            $table->decimal('pertambangan_dan_Penggalian', 15, 2);
            $table->decimal('Industri_Pengolahan', 15, 2);
            $table->decimal('Pengadaan_Listrik_dan_Gas', 15, 2);
            $table->decimal('Pengadaan_Air_Pengelolaan_Sampah_Limbah_dan_Daur_Ulang', 15, 2);
            $table->decimal('Konstruksi', 15, 2);
            $table->decimal('Perdagangan_Besar_dan_Eceran_Reparasi_Mobil_dan_Sepeda_Motor', 15, 2);
            $table->decimal('Transportasi_dan_Pergudangan', 15, 2);
            $table->decimal('Penyediaan_Akomodasi_dan_Makan_Minuman', 15, 2);
            $table->decimal('Informasi_dan_Komunikasi', 15, 2);
            $table->decimal('Jasa_Keuangan_dan_Asuransi', 15, 2);
            $table->decimal('Real_Estate', 15, 2);
            $table->decimal('Jasa_Perusahaan', 15, 2);
            $table->decimal('Administrasi_Pemerintahan_Pertahanan_dan_Jaminan_Sosial_Wajib', 15, 2);
            $table->decimal('Jasa_Pendidikan', 15, 2);
            $table->decimal('Jasa_Kesehatan_dan_Kegiatan_Sosial', 15, 2);
            $table->decimal('Jasa_Lainnya', 15, 2);
            $table->decimal('Jumlah', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data__pertumbuhan__nilai__tambah__kategori__kota__pontianaks');
    }
};
