<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Jumlah_Persentase_Penduduk_Miskin_di_Kota_Pontianak extends Model
{
    use HasFactory;

    protected $fillable = [
        'Tahun',
        'Garis_Kemiskinan_(Rp/Kapita/Bulan)',
        'Jumlah_Penduduk_Miskin',
        'Persentase_Penduduk_Miskin',
    ];

}
