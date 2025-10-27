<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class Data_Luas_Wilayah_Per_Kecamatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'Kecamatan',
        'Luas_(Km^2)',
    ];

}
