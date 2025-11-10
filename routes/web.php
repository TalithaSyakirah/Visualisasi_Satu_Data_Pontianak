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


// Data Jumlah Penduduk
use App\Http\Controllers\DataJumlahPendudukKotaPontianakController;

// Tambah data
Route::post('/data-jumlah-penduduk', [DataJumlahPendudukKotaPontianakController::class, 'store'])
    ->name('data_jumlah_penduduk_kota_pontianak.store');

// Edit data (view update)
Route::get('/data-jumlah-penduduk/{jumlah_penduduk_Pontianak}/viewUpdate', [DataJumlahPendudukKotaPontianakController::class, 'viewUpdate'])
    ->name('data_jumlah_penduduk_kota_pontianak.viewUpdate');

// Update data
Route::put('/data-jumlah-penduduk/{jumlah_penduduk_Pontianak}', [DataJumlahPendudukKotaPontianakController::class, 'update'])
    ->name('data_jumlah_penduduk_kota_pontianak.update');

// Hapus data
Route::delete('/data-jumlah-penduduk/{jumlah_penduduk_Pontianak}', [DataJumlahPendudukKotaPontianakController::class, 'destroy'])
    ->name('data_jumlah_penduduk_kota_pontianak.destroy');


//Data Jumlah Persentase Penduduk Miskin di Kota Pontianak

use App\Http\Controllers\DataJumlahPersentasePendudukMiskindiKotaPontianakController;

// tambah data
Route::post('/datajumlahpersentasemiskin', [DataJumlahPersentasePendudukMiskindiKotaPontianakController::class, 'store'])->name('data_jumlah_persentase_miskin.store');

// hapus data
Route::delete('/datajumlahpersentasemiskin/{data_jumlah_persentase_miskin}', [DataJumlahPersentasePendudukMiskindiKotaPontianakController::class, 'destroy'])->name('data_jumlah_persentase_miskin.destroy');

// form update
Route::get('/datajumlahpersentasemiskin/{data_jumlah_persentase_miskin}/viewUpdate', [DataJumlahPersentasePendudukMiskindiKotaPontianakController::class, 'viewUpdate'])->name('data_jumlah_persentase_miskin.viewUpdate');

// simpan update
Route::put('/datajumlahpersentasemiskin/{data_jumlah_persentase_miskin}', [DataJumlahPersentasePendudukMiskindiKotaPontianakController::class, 'update'])->name('data_jumlah_persentase_miskin.update');

//Data IPM Kota Pontianak Menurut Komponen Pembentuknya


use App\Http\Controllers\DataIpmKotaPontianakMenurutKomponenPembentuknyaController;


// tambah data
Route::post('/dataipmkotapontianak', [DataIpmKotaPontianakMenurutKomponenPembentuknyaController::class, 'store'])->name('data_ipm_kota_pontianak_menurut_komponen_pembentuknya.store');

// hapus data
Route::delete('/dataipmkotapontianak/{data_ipm_menurut_pembentuk}', [DataIpmKotaPontianakMenurutKomponenPembentuknyaController::class, 'destroy'])->name('data_ipm_kota_pontianak_menurut_komponen_pembentuknya.destroy');

// form update
Route::get('/dataipmkotapontianak/{data_ipm_menurut_pembentuk}/viewUpdate', [DataIpmKotaPontianakMenurutKomponenPembentuknyaController::class, 'viewUpdate'])->name('data_ipm_kota_pontianak_menurut_komponen_pembentuknya.viewUpdate');

// simpan update
Route::put('/dataipmkotapontianak/{data_ipm_menurut_pembentuk}', [DataIpmKotaPontianakMenurutKomponenPembentuknyaController::class, 'update'])->name('data_ipm_kota_pontianak_menurut_komponen_pembentuknya.update');

//Data IPM Menurut Kabupaten/Kota di Kalimantan Barat

use App\Http\Controllers\DataIpmMenurutKabupatenKotaDiKalimantanBaratController;

// tambah data
Route::post('/dataipmmenurutkabupaten', [DataIpmMenurutKabupatenKotaDiKalimantanBaratController::class, 'store'])->name('data_ipm_menurut_kabupaten_kota.store');

// hapus data
Route::delete('/dataipmmenurutkabupaten/{data_ipm_menurut_kabupaten_kota}', [DataIpmMenurutKabupatenKotaDiKalimantanBaratController::class, 'destroy'])->name('data_ipm_menurut_kabupaten_kota.destroy');

// form update
Route::get('/dataipmmenurutkabupaten/{data_ipm_menurut_kabupaten_kota}/viewUpdate', [DataIpmMenurutKabupatenKotaDiKalimantanBaratController::class, 'viewUpdate'])->name('data_ipm_menurut_kabupaten_kota.viewUpdate');

// simpan update
Route::put('/dataipmmenurutkabupaten/{data_ipm_menurut_kabupaten_kota}', [DataIpmMenurutKabupatenKotaDiKalimantanBaratController::class, 'update'])->name('data_ipm_menurut_kabupaten_kota.update');


// Data Kondisi Ketenagakerjaan Kota Pontianak

use App\Http\Controllers\DataKondisiKetenagakerjaanKotaPontianakController;

// tambah data
Route::post('/datakondisiketenagakerjaan', [DataKondisiKetenagakerjaanKotaPontianakController::class, 'store'])->name('data_kondisi_ketenagakerjaan_kota_pontianak.store');

// hapus data
Route::delete('/datakondisiketenagakerjaan/{data_kondisi_ketenagakerjaan}', [DataKondisiKetenagakerjaanKotaPontianakController::class, 'destroy'])->name('data_kondisi_ketenagakerjaan_kota_pontianak.destroy');

// form update
Route::get('/datakondisiketenagakerjaan/{data_kondisi_ketenagakerjaan}/viewUpdate', [DataKondisiKetenagakerjaanKotaPontianakController::class, 'viewUpdate'])->name('data_kondisi_ketenagakerjaan_kota_pontianak.viewUpdate');

// simpan update
Route::put('/datakondisiketenagakerjaan/{data_kondisi_ketenagakerjaan}', [DataKondisiKetenagakerjaanKotaPontianakController::class, 'update'])->name('data_kondisi_ketenagakerjaan_kota_pontianak.update');


// Data Tingkat Pengangguran Terbuka

use App\Http\Controllers\DataTingkatPengangguranTerbukaController;

// tambah data
Route::post('/datatingkatpengangguranterbuka', [DataTingkatPengangguranTerbukaController::class, 'store'])->name('data_tingkat_pengangguran_terbuka.store');

// hapus data
Route::delete('/datatingkatpengangguranterbuka/{data_tingkat_pengangguran}', [DataTingkatPengangguranTerbukaController::class, 'destroy'])->name('data_tingkat_pengangguran_terbuka.destroy');

// form update
Route::get('/datatingkatpengangguranterbuka/{data_tingkat_pengangguran}/viewUpdate', [DataTingkatPengangguranTerbukaController::class, 'viewUpdate'])->name('data_tingkat_pengangguran_terbuka.viewUpdate');

// simpan update
Route::put('/datatingkatpengangguranterbuka/{data_tingkat_pengangguran}', [DataTingkatPengangguranTerbukaController::class, 'update'])->name('data_tingkat_pengangguran_terbuka.update');

// Data Persentase Bekerja Menurut Lapangan Usaha

use App\Http\Controllers\DataPersentaseBekerjaMenurutLapanganUsahaController;

// tambah data
Route::post('/datapersentasebekerjalapanganusaha', [DataPersentaseBekerjaMenurutLapanganUsahaController::class, 'store'])->name('data_persentase_bekerja_menurut_lapangan_usaha.store');

// hapus data
Route::delete('/datapersentasebekerjalapanganusaha/{data_bekerja_lapangan_usaha}', [DataPersentaseBekerjaMenurutLapanganUsahaController::class, 'destroy'])->name('data_persentase_bekerja_menurut_lapangan_usaha.destroy');

// form update
Route::get('/datapersentasebekerjalapanganusaha/{data_bekerja_lapangan_usaha}/viewUpdate', [DataPersentaseBekerjaMenurutLapanganUsahaController::class, 'viewUpdate'])->name('data_persentase_bekerja_menurut_lapangan_usaha.viewUpdate');

// simpan update
Route::put('/datapersentasebekerjalapanganusaha/{data_bekerja_lapangan_usaha}', [DataPersentaseBekerjaMenurutLapanganUsahaController::class, 'update'])->name('data_persentase_bekerja_menurut_lapangan_usaha.update');



// Data Nilai PDRB Dasar Harga Berlaku Menurut Kategori

use App\Http\Controllers\DataNilaiPDRBDasarHargaBerlakuMenurutKategoriController;

// tambah data
Route::post('/datanilaipdrbdasarhargaberlakumenurutkategori', [DataNilaiPDRBDasarHargaBerlakuMenurutKategoriController::class, 'store'])->name('data_nilai_pdrb_dasar_harga_berlaku_menurut_kategori.store');

// hapus data
Route::delete('/datanilaipdrbdasarhargaberlakumenurutkategori/{data_pdrb_dasar_harga_berlaku}', [DataNilaiPDRBDasarHargaBerlakuMenurutKategoriController::class, 'destroy'])->name('data_nilai_pdrb_dasar_harga_berlaku_menurut_kategori.destroy');

// form update
Route::get('/datanilaipdrbdasarhargaberlakumenurutkategori/{data_pdrb_dasar_harga_berlaku}/viewUpdate', [DataNilaiPDRBDasarHargaBerlakuMenurutKategoriController::class, 'viewUpdate'])->name('data_nilai_pdrb_dasar_harga_berlaku_menurut_kategori.viewUpdate');

// simpan update
Route::put('/datanilaipdrbdasarhargaberlakumenurutkategori/{data_pdrb_dasar_harga_berlaku}', [DataNilaiPDRBDasarHargaBerlakuMenurutKategoriController::class, 'update'])->name('data_nilai_pdrb_dasar_harga_berlaku_menurut_kategori.update');


// Data Pertumbuhan Nilai Tambah Kategori Kota Pontianak

use App\Http\Controllers\DataPertumbuhanNilaiTambahKategoriKotaPontianakController;

// tambah data
Route::post('/datapertumbuhannilaitambahkategorikotapontianak', [DataPertumbuhanNilaiTambahKategoriKotaPontianakController::class, 'store'])->name('data_pertumbuhan_nilai_tambah_kategori_kota_pontianak.store');

// hapus data
Route::delete('/datapertumbuhannilaitambahkategorikotapontianak/{data_nilai_tambah_kategori}', [DataPertumbuhanNilaiTambahKategoriKotaPontianakController::class, 'destroy'])->name('data_pertumbuhan_nilai_tambah_kategori_kota_pontianak.destroy');

// form update
Route::get('/datapertumbuhannilaitambahkategorikotapontianak/{data_nilai_tambah_kategori}/viewUpdate', [DataPertumbuhanNilaiTambahKategoriKotaPontianakController::class, 'viewUpdate'])->name('data_pertumbuhan_nilai_tambah_kategori_kota_pontianak.viewUpdate');

// simpan update
Route::put('/datapertumbuhannilaitambahkategorikotapontianak/{data_nilai_tambah_kategori}', [DataPertumbuhanNilaiTambahKategoriKotaPontianakController::class, 'update'])->name('data_pertumbuhan_nilai_tambah_kategori_kota_pontianak.update');


// Data Kontribusi Kategori Terhadap PDRB Kota Pontianak

use App\Http\Controllers\DataKontribusiKategoriTerhadapPDRBKotaPontianakController;

// tambah data
Route::post('/datakontribusikategoriterhadappdrbkotapontianak', [DataKontribusiKategoriTerhadapPDRBKotaPontianakController::class, 'store'])->name('data_kontribusi_kategori_terhadap_pdrb_kota_pontianak.store');

// hapus data
Route::delete('/datakontribusikategoriterhadappdrbkotapontianak/{data_kontribusi_kategori}', [DataKontribusiKategoriTerhadapPDRBKotaPontianakController::class, 'destroy'])->name('data_kontribusi_kategori_terhadap_pdrb_kota_pontianak.destroy');

// form update
Route::get('/datakontribusikategoriterhadappdrbkotapontianak/{data_kontribusi_kategori}/viewUpdate', [DataKontribusiKategoriTerhadapPDRBKotaPontianakController::class, 'viewUpdate'])->name('data_kontribusi_kategori_terhadap_pdrb_kota_pontianak.viewUpdate');

// simpan update
Route::put('/datakontribusikategoriterhadappdrbkotapontianak/{data_kontribusi_kategori}', [DataKontribusiKategoriTerhadapPDRBKotaPontianakController::class, 'update'])->name('data_kontribusi_kategori_terhadap_pdrb_kota_pontianak.update');

// Data Tingkat Inflasi Kota Pontianak

use App\Http\Controllers\DataTingkatInflasiKotaPontianakController;

// tambah data
Route::post('/datatingkatinflasikotapontianak', [DataTingkatInflasiKotaPontianakController::class, 'store'])->name('data_tingkat_inflasi_kota_pontianak.store');

// hapus data
Route::delete('/datatingkatinflasikotapontianak/{data_tingkat_inflasi}', [DataTingkatInflasiKotaPontianakController::class, 'destroy'])->name('data_tingkat_inflasi_kota_pontianak.destroy');

// form update
Route::get('/datatingkatinflasikotapontianak/{data_tingkat_inflasi}/viewUpdate', [DataTingkatInflasiKotaPontianakController::class, 'viewUpdate'])->name('data_tingkat_inflasi_kota_pontianak.viewUpdate');

// simpan update
Route::put('/datatingkatinflasikotapontianak/{data_tingkat_inflasi}', [DataTingkatInflasiKotaPontianakController::class, 'update'])->name('data_tingkat_inflasi_kota_pontianak.update');

// Data Vidualisasi

use App\Http\Controllers\visualisasiController;

// Get Visual
Route::get('/visualisasi', [visualisasiController::class, 'index'])->name('visualisasi');