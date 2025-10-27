<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Kondisi_Ketenagakerjaan_Kota_Pontianak extends Model
{
    use HasFactory;

    protected $fillable = [
        'Tahun',
        'Angkatan_Kerja',
        'Bukan_Angkatan_Kerja',
        'Jumlah',
    ] ;

}
