<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_IPM_Menurut_Kabupaten_Kota_di_Kalimantan_Barat extends Model
{
    use HasFactory;

    protected $fillable = [
        'Tahun',
        'Kabupaten_Sambas',
        'Kabupaten_Bengkayang',
        'Kabupaten_Landak',
        'Kabupaten_Mempawah',
        'Kabupaten_Sanggau',
        'Kabupaten_Ketapang',
        'Kabupaten_Sintang',
        'Kabupaten_Kapuas_Hulu',
        'Kabupaten_Sekadau',
        'Kabupaten_Melawi',
        'Kabupaten_Kayong_Utara',
        'Kabupaten_Kubu_Raya',
        'Kota_Pontianak',
        'Kota_Singkawang',
    ];

}
