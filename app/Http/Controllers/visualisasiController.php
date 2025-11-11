<?php

namespace App\Http\Controllers;

use App\Models\Data_Jumlah_Penduduk_Kota_Pontianak;
use App\Models\Data_Jumlah_Persentase_Penduduk_Miskin_di_Kota_Pontianak;
use App\Models\Data_Luas_Wilayah_Per_Kecamatan;
use App\Models\Data_IPM_Kota_Pontianak_Menurut_Komponen_Pembentuknya;
use App\Models\Data_IPM_Menurut_Kabupaten_Kota_Di_Kalimantan_Barat;
use App\Models\Data_Kondisi_Ketenagakerjaan_Kota_Pontianak;
use App\Models\Data_Persentase_Bekerja_Menurut_Lapangan_Usaha;
use App\Models\Data_Nilai_PDRB_Dasar_Harga_Berlaku_Menurut_Kategori;
use App\Models\Data_Pertumbuhan_Nilai_Tambah_Kategori_Kota_Pontianak;
use App\Models\Data_Kontribusi_Kategori_Terhadap_PDRB_Kota_Pontianak;
use App\Models\Data_Tingkat_Inflasi_Kota_Pontianak;
use App\Models\Data_Tingkat_Pengangguran_Terbuka;
use Illuminate\Support\Facades\Schema;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class visualisasiController extends Controller
{
    public function index()
    {
        $dataLuasWilayahPerKecamatan = Data_Luas_Wilayah_Per_Kecamatan::all();
        $dataPenduduk = Data_Jumlah_Penduduk_Kota_Pontianak::orderBy('tahun', 'asc')->get();
        $dataMiskin = Data_Jumlah_Persentase_Penduduk_Miskin_di_Kota_Pontianak::orderBy('Tahun', 'asc')->get();
        $DataIPMKotaPontianakMenurutKomponenPembentuknya = Data_IPM_Kota_Pontianak_Menurut_Komponen_Pembentuknya::all();
        $DataKondisiKetenagakerjaanKotaPontianak = Data_Kondisi_Ketenagakerjaan_Kota_Pontianak::all();
        $DataTingkatPengangguranTerbuka = Data_Tingkat_Pengangguran_Terbuka::all();
        $DataPersentaseBekerjaMenurutLapanganUsaha = Data_Persentase_Bekerja_Menurut_Lapangan_Usaha::all();
        $DataNilaiPDRBDasarHargaBerlakuMenurutKategori = Data_Nilai_PDRB_Dasar_Harga_Berlaku_Menurut_Kategori::orderBy('Tahun', 'asc')->get();
        $columnsDataNilaiPDRBDasarHargaBerlakuMenurutKategori =array_diff(Schema::getColumnListing('data__nilai__p_d_r_b__dasar__harga__berlaku__menurut__kategoris'), ['id', 'Tahun', 'created_at', 'updated_at']);
        $DataIPMMenurutKabupatenKotaDiKalimantanBarat = Data_IPM_Menurut_Kabupaten_Kota_Di_Kalimantan_Barat::all();
        $DataPertumbuhanNilaiTambahKategoriKotaPontianak = Data_Pertumbuhan_Nilai_Tambah_Kategori_Kota_Pontianak::all();
        $columnsDataPertumbuhanNilaiTambahKategoriKotaPontianak = array_diff(Schema::getColumnListing('data__pertumbuhan__nilai__tambah__kategori__kota__pontianaks'), ['id', 'Tahun', 'created_at', 'updated_at']);
        $DataKontribusiKategoriTerhadapPDRBKotaPontianak = Data_Kontribusi_Kategori_Terhadap_PDRB_Kota_Pontianak::orderBy('Tahun', 'asc')->get();
        $columnsDataKontribusiKategoriTerhadapPDRBKotaPontianak = array_values(array_filter(Schema::getColumnListing('data__kontribusi__kategori__terhadap__p_d_r_b__kota__pontianaks'),fn($col) => !in_array($col, ['id', 'Tahun', 'created_at', 'updated_at', 'Jumlah' ])));
        $DataTingkatInflasiKotaPontianak = Data_Tingkat_Inflasi_Kota_Pontianak::all();

        $kontribusiDataKeys = [
            'Pertanian_Kehutanan_dan_Perikanan', 'Pertambangan_dan_Penggalian', 'Industri_Pengolahan',
            'Pengadaan_Listrik_dan_Gas', 'Pengadaan_Air_Pengelolaan_Sampah_Limbah_dan_Daur_Ulang', 'Konstruksi',
            'Perdagangan_Besar_dan_Eceran_Reparasi_Mobil_dan_Sepeda_Motor', 'Transportasi_dan_Pergudangan',
            'Penyediaan_Akomodasi_dan_Makan_Minuman', 'Informasi_dan_Komunikasi',
            'Jasa_Keuangan_dan_Asuransi', 'Real_Estate', 'Jasa_Perusahaan',
            'Administrasi_Pemerintahan_Pertahanan_dan_Jaminan_Sosial_Wajib',
            'Jasa_Pendidikan', 'Jasa_Kesehatan_dan_Kegiatan_Sosial', 'Jasa_Lainnya'
        ];

        $kontribusiLabels = array_map(function($key, $index) {
            // Ganti _ dengan spasi dan buat lebih rapi
            $cleanLabel = str_replace(['_', 'dan_Perikanan', 'Reparasi_Mobil_dan_Sepeda_Motor', 'Limbah_dan_Daur_Ulang', 'Pertahanan_dan_Jaminan_Sosial_Wajib'], '', $key);
            $cleanLabel = str_replace(['_'], ' ', $cleanLabel);
            return ($index + 1) . '. ' . $cleanLabel;
        }, $kontribusiDataKeys, array_keys($kontribusiDataKeys));


        return view('visualisasi', [
            'DataLuasWilayahPerKecamatan' => $dataLuasWilayahPerKecamatan,
            'columnsDataLuasWilayahPerKecamatan',
            'DataJumlahPendudukKotaPontianak' => $dataPenduduk,
            'columnsDataJumlahPendudukKotaPontianak',
            'DataJumlahPendudukMiskinKotaPontianak' => $dataMiskin,
            'columnsDataJumlahPendudukMiskinKotaPontianak',
            'DataIPMKotaPontianakMenurutKomponenPembentuknya' => $DataIPMKotaPontianakMenurutKomponenPembentuknya,
            'columnsDataIPMKotaPontianakMenurutKomponenPembentuknya',
            'DataKondisiKetenagakerjaanKotaPontianak' => $DataKondisiKetenagakerjaanKotaPontianak,
            'columnsDataKondisiKetenagakerjaanKotaPontianak',
            'DataTingkatPengangguranTerbuka' => $DataTingkatPengangguranTerbuka,
            'columnsDataTingkatPengangguranTerbuka',
            'DataPersentaseBekerjaMenurutLapanganUsaha' => $DataPersentaseBekerjaMenurutLapanganUsaha,
            'columnsDataPersentaseBekerjaMenurutLapanganUsaha',
            'DataNilaiPDRBDasarHargaBerlakuMenurutKategori' => $DataNilaiPDRBDasarHargaBerlakuMenurutKategori,
            'columnsDataNilaiPDRBDasarHargaBerlakuMenurutKategori' => $columnsDataNilaiPDRBDasarHargaBerlakuMenurutKategori,
            'DataIPMMenurutKabupatenKotaDiKalimantanBarat' => $DataIPMMenurutKabupatenKotaDiKalimantanBarat,
            'columnsDataIPMMenurutKabupatenKotaDiKalimantanBarat',
            'DataPertumbuhanNilaiTambahKategoriKotaPontianak' => $DataPertumbuhanNilaiTambahKategoriKotaPontianak,
            'columnsDataPertumbuhanNilaiTambahKategoriKotaPontianak' => $columnsDataPertumbuhanNilaiTambahKategoriKotaPontianak,
            'DataKontribusiKategoriTerhadapPDRBKotaPontianak' => $DataKontribusiKategoriTerhadapPDRBKotaPontianak,
            'columnsDataKontribusiKategoriTerhadapPDRBKotaPontianak'=> $columnsDataKontribusiKategoriTerhadapPDRBKotaPontianak,
            'DataTingkatInflasiKotaPontianak' => $DataTingkatInflasiKotaPontianak,
            'columnsDataTingkatInflasiKotaPontianak',
            'DataKontribusiKategoriTerhadapPDRBKotaPontianak',
            'kontribusiLabels' => $kontribusiLabels,
            'kontribusiDataKeys' => $kontribusiDataKeys,
        ]);
    }
}