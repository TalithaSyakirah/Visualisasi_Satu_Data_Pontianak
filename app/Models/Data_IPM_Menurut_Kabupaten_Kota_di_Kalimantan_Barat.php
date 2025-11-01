<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_IPM_Menurut_Kabupaten_Kota_Di_Kalimantan_Barat extends Model
{
    use HasFactory;

    // WAJIB: Tentukan nama tabel secara eksplisit agar sesuai dengan migration
    protected $table = 'data__ipm__menurut__kabupaten__kota_di__kalimantan__barats';

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
