<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Persentase_Bekerja_Menurut_Lapangan_Usaha extends Model
{
    use HasFactory;

    protected $fillable = [
        'Tahun',
        'Pertanian_Perkebunan_Kehutanan_Perburuan_dan_Perikanan',
        'Pertambangan_dan_Penggalian',
        'Industri',
        'Listrik_Gas_dan_Air_Minum',
        'Konstruksi',
        'Perdagangan_Rumah_Makan_dan_Jasa_Akomodasi',
        'Transportasi_Pergudangan_dan_Komunikasi',
        'Lembaga_Keuangan_Real_Estate_Usaha_Perusahaan_dan_Jasa_Persh',
        'Jasa_Kemasyarakatan_Sosial_dan_Perorangan',
        'Jumlah',
    ];

}
