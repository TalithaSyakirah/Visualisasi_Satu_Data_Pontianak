<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Pertumbuhan_Nilai_Tambah_Kategori_Kota_Pontianak extends Model
{
    use HasFactory;

    protected $fillable = [
        'Tahun', 
        'Pertanian_Kehutanan_dan_Perikanan', 
        'Pertambangan_dan_Penggalian', 
        'Industri_Pengolahan', 
        'Pengadaan_Listrik_dan_Gas', 
        'Pengadaan_Air_Pengelolaan_Sampah_Limbah_dan_Daur_Ulang', 
        'Konstruksi', 
        'Perdagangan_Besar_dan_Eceran_Reparasi_Mobil_dan_Sepeda_Motor', 
        'Transportasi_dan_Pergudangan', 
        'Penyediaan_Akomodasi_dan_Makan_Minuman', 
        'Informasi_dan_Komunikasi', 
        'Jasa_Keuangan_dan_Asuransi', 
        'Real_Estate', 
        'Jasa_Perusahaan', 
        'Administrasi_Pemerintahan_Pertahanan_dan_Jaminan_Sosial_Wajib', 
        'Jasa_Pendidikan', 
        'Jasa_Kesehatan_dan_Kegiatan_Sosial', 
        'Jasa_Lainnya', 
        'Jumlah'
        ];

}
