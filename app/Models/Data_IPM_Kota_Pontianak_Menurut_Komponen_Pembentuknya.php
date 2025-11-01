<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_IPM_Kota_Pontianak_Menurut_Komponen_Pembentuknya extends Model
{
    use HasFactory;

    // Tambahkan baris ini!
    protected $table = 'data__ipm__kota__pontianak__menurut__komponen__pembentuknyas'; 

    protected $fillable = [
        'Tahun',
        'Angka_Harapan_Hidup_(Tahun)',
        'Harapan_Lama_Sekolah_(Tahun)',
        'Rata_Rata_Lama_Sekolah_(Tahun)',
        'Pengeluran_Per_Kapita_(Ribu_Rupiah)',
        'Indeks_Pembangunan_Manusia',
    ];
}