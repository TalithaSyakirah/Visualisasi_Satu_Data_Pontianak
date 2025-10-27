<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Jumlah_Penduduk_Kota_Pontianak extends Model
{
    use HasFactory;

    protected $fillable = [
        'Tahun',
        'Laki_Laki',
        'Perempuan',
        'Jumlah',
    ];

}
