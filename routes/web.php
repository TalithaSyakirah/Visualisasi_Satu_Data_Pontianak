<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/welcome', function () {
    return view('welcome');
});

// Halaman utama dashboard
Route::get('/', [MainController::class, 'index'])->name('dashboard.index');


// Data Luas Wilayah Per Kecamatan

use App\Http\Controllers\DataLuasWilayahPerKecamatanController;

// Tambah data
Route::post('/data-luas-wilayah', [DataLuasWilayahPerKecamatanController::class, 'store'])->name('data_luas_wilayah.store');

// Hapus data
Route::delete('/data-luas-wilayah/{Data_Luas_Wilayah_Per_Kecamatan}', [DataLuasWilayahPerKecamatanController::class, 'destroy'])->name('data_luas_wilayah.destroy');

// Form edit data
Route::get('/data-luas-wilayah/{Data_Luas_Wilayah_Per_Kecamatan}/viewUpdate', [DataLuasWilayahPerKecamatanController::class, 'viewUpdate'])->name('data_luas_wilayah.viewUpdate');

// Update data
Route::put('/data-luas-wilayah/{Data_Luas_Wilayah_Per_Kecamatan}', [DataLuasWilayahPerKecamatanController::class, 'update'])->name('data_luas_wilayah.update');


// Data Jumlah Penduduk Kota Pontianak

use App\Http\Controllers\DataJumlahPendudukKotaPontianakController;

// Tambah data
Route::post('/data-jumlah-penduduk', [DataJumlahPendudukKotaPontianakController::class, 'store'])->name('data_jumlah_penduduk.store');

// Hapus data
Route::delete('/data-jumlah-penduduk/{Data_Jumlah_Penduduk_Kota_Pontianak}', [DataJumlahPendudukKotaPontianakController::class, 'destroy'])->name('data_jumlah_penduduk.destroy');

// Form edit
Route::get('/data-jumlah-penduduk/{Data_Jumlah_Penduduk_Kota_Pontianak}/viewUpdate', [DataJumlahPendudukKotaPontianakController::class, 'viewUpdate'])->name('data_jumlah_penduduk.viewUpdate');

// Simpan update
Route::put('/data-jumlah-penduduk/{Data_Jumlah_Penduduk_Kota_Pontianak}', [DataJumlahPendudukKotaPontianakController::class, 'update'])->name('data_jumlah_penduduk.update');


//Data Jumlah Persentase Penduduk Miskin di Kota Pontianak

use App\Http\Controllers\DataJumlahPersentasePendudukMiskindiKotaPontianakController;

// tambah data
Route::post('/datajumlahpersentasemiskin', [DataJumlahPersentasePendudukMiskindiKotaPontianakController::class, 'store'])->name('datajumlahpersentasemiskin.store');

// hapus data
Route::delete('/datajumlahpersentasemiskin/{datajumlahpersentasemiskin}', [DataJumlahPersentasePendudukMiskindiKotaPontianakController::class, 'destroy'])->name('datajumlahpersentasemiskin.destroy');

// form update
Route::get('/datajumlahpersentasemiskin/{datajumlahpersentasemiskin}/viewUpdate', [DataJumlahPersentasePendudukMiskindiKotaPontianakController::class, 'viewUpdate'])->name('datajumlahpersentasemiskin.viewUpdate');

// simpan update
Route::put('/datajumlahpersentasemiskin/{datajumlahpersentasemiskin}', [DataJumlahPersentasePendudukMiskindiKotaPontianakController::class, 'update'])->name('datajumlahpersentasemiskin.update');


//Data IPM Menurut Kabupaten/Kota di Kalimantan Barat

use App\Http\Controllers\DataIpmMenurutKabupatenKotaDiKalimantanBaratController;

// tambah data
Route::post('/dataipmmenurutkabupaten', [DataIpmMenurutKabupatenKotaDiKalimantanBaratController::class, 'store'])->name('dataipmmenurutkabupaten.store');

// hapus data
Route::delete('/dataipmmenurutkabupaten/{dataipmmenurutkabupaten}', [DataIpmMenurutKabupatenKotaDiKalimantanBaratController::class, 'destroy'])->name('dataipmmenurutkabupaten.destroy');

// form update
Route::get('/dataipmmenurutkabupaten/{dataipmmenurutkabupaten}/viewUpdate', [DataIpmMenurutKabupatenKotaDiKalimantanBaratController::class, 'viewUpdate'])->name('dataipmmenurutkabupaten.viewUpdate');

// simpan update
Route::put('/dataipmmenurutkabupaten/{dataipmmenurutkabupaten}', [DataIpmMenurutKabupatenKotaDiKalimantanBaratController::class, 'update'])->name('dataipmmenurutkabupaten.update');


//Data IPM Kota Pontianak Menurut Komponen Pembentuknya


use App\Http\Controllers\DataIpmKotaPontianakMenurutKomponenPembentuknyaController;


// tambah data
Route::post('/dataipmkotapontianak', [DataIpmKotaPontianakMenurutKomponenPembentuknyaController::class, 'store'])->name('dataipmkotapontianak.store');

// hapus data
Route::delete('/dataipmkotapontianak/{dataipmkotapontianak}', [DataIpmKotaPontianakMenurutKomponenPembentuknyaController::class, 'destroy'])->name('dataipmkotapontianak.destroy');

// form update
Route::get('/dataipmkotapontianak/{dataipmkotapontianak}/viewUpdate', [DataIpmKotaPontianakMenurutKomponenPembentuknyaController::class, 'viewUpdate'])->name('dataipmkotapontianak.viewUpdate');

// simpan update
Route::put('/dataipmkotapontianak/{dataipmkotapontianak}', [DataIpmKotaPontianakMenurutKomponenPembentuknyaController::class, 'update'])->name('dataipmkotapontianak.update');


// Data Kondisi Ketenagakerjaan Kota Pontianak

use App\Http\Controllers\DataKondisiKetenagakerjaanKotaPontianakController;

// tambah data
Route::post('/datakondisiketenagakerjaan', [DataKondisiKetenagakerjaanKotaPontianakController::class, 'store'])->name('datakondisiketenagakerjaan.store');

// hapus data
Route::delete('/datakondisiketenagakerjaan/{datakondisiketenagakerjaan}', [DataKondisiKetenagakerjaanKotaPontianakController::class, 'destroy'])->name('datakondisiketenagakerjaan.destroy');

// form update
Route::get('/datakondisiketenagakerjaan/{datakondisiketenagakerjaan}/viewUpdate', [DataKondisiKetenagakerjaanKotaPontianakController::class, 'viewUpdate'])->name('datakondisiketenagakerjaan.viewUpdate');

// simpan update
Route::put('/datakondisiketenagakerjaan/{datakondisiketenagakerjaan}', [DataKondisiKetenagakerjaanKotaPontianakController::class, 'update'])->name('datakondisiketenagakerjaan.update');


// Data Persentase Bekerja Menurut Lapangan Usaha

use App\Http\Controllers\DataPersentaseBekerjaMenurutLapanganUsahaController;

// tambah data
Route::post('/datapersentasebekerjalapanganusaha', [DataPersentaseBekerjaMenurutLapanganUsahaController::class, 'store'])->name('datapersentasebekerjalapanganusaha.store');

// hapus data
Route::delete('/datapersentasebekerjalapanganusaha/{datapersentasebekerjalapanganusaha}', [DataPersentaseBekerjaMenurutLapanganUsahaController::class, 'destroy'])->name('datapersentasebekerjalapanganusaha.destroy');

// form update
Route::get('/datapersentasebekerjalapanganusaha/{datapersentasebekerjalapanganusaha}/viewUpdate', [DataPersentaseBekerjaMenurutLapanganUsahaController::class, 'viewUpdate'])->name('datapersentasebekerjalapanganusaha.viewUpdate');

// simpan update
Route::put('/datapersentasebekerjalapanganusaha/{datapersentasebekerjalapanganusaha}', [DataPersentaseBekerjaMenurutLapanganUsahaController::class, 'update'])->name('datapersentasebekerjalapanganusaha.update');


// Data Tingkat Pengangguran Terbuka

use App\Http\Controllers\DataTingkatPengangguranTerbukaController;

// tambah data
Route::post('/datatingkatpengangguranterbuka', [DataTingkatPengangguranTerbukaController::class, 'store'])->name('datatingkatpengangguranterbuka.store');

// hapus data
Route::delete('/datatingkatpengangguranterbuka/{datatingkatpengangguranterbuka}', [DataTingkatPengangguranTerbukaController::class, 'destroy'])->name('datatingkatpengangguranterbuka.destroy');

// form update
Route::get('/datatingkatpengangguranterbuka/{datatingkatpengangguranterbuka}/viewUpdate', [DataTingkatPengangguranTerbukaController::class, 'viewUpdate'])->name('datatingkatpengangguranterbuka.viewUpdate');

// simpan update
Route::put('/datatingkatpengangguranterbuka/{datatingkatpengangguranterbuka}', [DataTingkatPengangguranTerbukaController::class, 'update'])->name('datatingkatpengangguranterbuka.update');


// Data Nilai PDRB Dasar Harga Berlaku Menurut Kategori

use App\Http\Controllers\DataNilaiPDRBDasarHargaBerlakuMenurutKategoriController;

// tambah data
Route::post('/datanilaipdrbdasarhargaberlakumenurutkategori', [DataNilaiPDRBDasarHargaBerlakuMenurutKategoriController::class, 'store'])->name('datanilaipdrbdasarhargaberlakumenurutkategori.store');

// hapus data
Route::delete('/datanilaipdrbdasarhargaberlakumenurutkategori/{datanilaipdrbdasarhargaberlakumenurutkategori}', [DataNilaiPDRBDasarHargaBerlakuMenurutKategoriController::class, 'destroy'])->name('datanilaipdrbdasarhargaberlakumenurutkategori.destroy');

// form update
Route::get('/datanilaipdrbdasarhargaberlakumenurutkategori/{datanilaipdrbdasarhargaberlakumenurutkategori}/viewUpdate', [DataNilaiPDRBDasarHargaBerlakuMenurutKategoriController::class, 'viewUpdate'])->name('datanilaipdrbdasarhargaberlakumenurutkategori.viewUpdate');

// simpan update
Route::put('/datanilaipdrbdasarhargaberlakumenurutkategori/{datanilaipdrbdasarhargaberlakumenurutkategori}', [DataNilaiPDRBDasarHargaBerlakuMenurutKategoriController::class, 'update'])->name('datanilaipdrbdasarhargaberlakumenurutkategori.update');


// Data Pertumbuhan Nilai Tambah Kategori Kota Pontianak

use App\Http\Controllers\DataPertumbuhanNilaiTambahKategoriKotaPontianakController;

// tambah data
Route::post('/datapertumbuhannilaitambahkategorikotapontianak', [DataPertumbuhanNilaiTambahKategoriKotaPontianakController::class, 'store'])->name('datapertumbuhannilaitambahkategorikotapontianak.store');

// hapus data
Route::delete('/datapertumbuhannilaitambahkategorikotapontianak/{datapertumbuhannilaitambahkategorikotapontianak}', [DataPertumbuhanNilaiTambahKategoriKotaPontianakController::class, 'destroy'])->name('datapertumbuhannilaitambahkategorikotapontianak.destroy');

// form update
Route::get('/datapertumbuhannilaitambahkategorikotapontianak/{datapertumbuhannilaitambahkategorikotapontianak}/viewUpdate', [DataPertumbuhanNilaiTambahKategoriKotaPontianakController::class, 'viewUpdate'])->name('datapertumbuhannilaitambahkategorikotapontianak.viewUpdate');

// simpan update
Route::put('/datapertumbuhannilaitambahkategorikotapontianak/{datapertumbuhannilaitambahkategorikotapontianak}', [DataPertumbuhanNilaiTambahKategoriKotaPontianakController::class, 'update'])->name('datapertumbuhannilaitambahkategorikotapontianak.update');


// Data Kontribusi Kategori Terhadap PDRB Kota Pontianak

use App\Http\Controllers\DataKontribusiKategoriTerhadapPDRBKotaPontianakController;

// tambah data
Route::post('/datakontribusikategoriterhadappdrbkotapontianak', [DataKontribusiKategoriTerhadapPDRBKotaPontianakController::class, 'store'])->name('datakontribusikategoriterhadappdrbkotapontianak.store');

// hapus data
Route::delete('/datakontribusikategoriterhadappdrbkotapontianak/{datakontribusikategoriterhadappdrbkotapontianak}', [DataKontribusiKategoriTerhadapPDRBKotaPontianakController::class, 'destroy'])->name('datakontribusikategoriterhadappdrbkotapontianak.destroy');

// form update
Route::get('/datakontribusikategoriterhadappdrbkotapontianak/{datakontribusikategoriterhadappdrbkotapontianak}/viewUpdate', [DataKontribusiKategoriTerhadapPDRBKotaPontianakController::class, 'viewUpdate'])->name('datakontribusikategoriterhadappdrbkotapontianak.viewUpdate');

// simpan update
Route::put('/datakontribusikategoriterhadappdrbkotapontianak/{datakontribusikategoriterhadappdrbkotapontianak}', [DataKontribusiKategoriTerhadapPDRBKotaPontianakController::class, 'update'])->name('datakontribusikategoriterhadappdrbkotapontianak.update');


// Data Tingkat Inflasi Kota Pontianak

use App\Http\Controllers\DataTingkatInflasiKotaPontianakController;

// tambah data
Route::post('/datatingkatinflasikotapontianak', [DataTingkatInflasiKotaPontianakController::class, 'store'])->name('datatingkatinflasikotapontianak.store');

// hapus data
Route::delete('/datatingkatinflasikotapontianak/{datatingkatinflasikotapontianak}', [DataTingkatInflasiKotaPontianakController::class, 'destroy'])->name('datatingkatinflasikotapontianak.destroy');

// form update
Route::get('/datatingkatinflasikotapontianak/{datatingkatinflasikotapontianak}/viewUpdate', [DataTingkatInflasiKotaPontianakController::class, 'viewUpdate'])->name('datatingkatinflasikotapontianak.viewUpdate');

// simpan update
Route::put('/datatingkatinflasikotapontianak/{datatingkatinflasikotapontianak}', [DataTingkatInflasiKotaPontianakController::class, 'update'])->name('datatingkatinflasikotapontianak.update');
