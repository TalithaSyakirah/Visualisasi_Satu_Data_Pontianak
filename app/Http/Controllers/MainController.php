<?php

namespace App\Http\Controllers;

use App\Models\Data_Luas_Wilayah_Per_Kecamatan;
use App\Models\Data_Jumlah_Penduduk_Kota_Pontianak;
use App\Models\Data_Jumlah_Persentase_Penduduk_Miskin_di_Kota_Pontianak;
use App\Models\Data_IPM_Kota_Pontianak_Menurut_Komponen_Pembentuknya;
use App\Models\Data_IPM_Menurut_Kabupaten_Kota_Di_Kalimantan_Barat;
use App\Models\Data_Kondisi_Ketenagakerjaan_Kota_Pontianak;
use App\Models\Data_Persentase_Bekerja_Menurut_Lapangan_Usaha;
use App\Models\Data_Nilai_PDRB_Dasar_Harga_Berlaku_Menurut_Kategori;
use App\Models\Data_Pertumbuhan_Nilai_Tambah_Kategori_Kota_Pontianak;
use App\Models\Data_Kontribusi_Kategori_Terhadap_PDRB_Kota_Pontianak;
use App\Models\Data_Tingkat_Inflasi_Kota_Pontianak;
use App\Models\Data_Tingkat_Pengangguran_Terbuka;
use Illuminate\View\View;

use Illuminate\Support\Facades\Schema;


class MainController extends Controller
{
    public function index(): View
    {
        // 1. Dari DataLuasWilayahPerKecamatanController
        $DataLuasWilayahPerKecamatan = Data_Luas_Wilayah_Per_Kecamatan::all();
        $columnsDataLuasWilayahPerKecamatan = Schema::getColumnListing('data__luas__wilayah__per__kecamatans');

        
        // 2. Dari DataJumlahPendudukKotaPontianakController
        $DataJumlahPendudukKotaPontianak = Data_Jumlah_Penduduk_Kota_Pontianak::all();
        $columnsDataJumlahPendudukKotaPontianak =Schema::getColumnListing('data__jumlah__penduduk__kota__pontianaks');
;

        // 3. Dari DataJumlahPersentasePendudukMiskindiKotaPontianakController
        $DataJumlahPersentasePendudukMiskindiKotaPontianak = Data_Jumlah_Persentase_Penduduk_Miskin_di_Kota_Pontianak::all();
        $columnsDataJumlahPersentasePendudukMiskindiKotaPontianak =Schema::getColumnListing('data__jumlah__persentase__penduduk__miskin_di__kota__pontianaks');
        
        // 4. Dari DataIPMKotaPontianakMenurutKomponenPembentuknyaController
        $DataIPMKotaPontianakMenurutKomponenPembentuknya = Data_IPM_Kota_Pontianak_Menurut_Komponen_Pembentuknya::all();
        $columnsDataIPMKotaPontianakMenurutKomponenPembentuknya =Schema::getColumnListing('data__ipm__kota__pontianak__menurut__komponen__pembentuknyas');
        
        // 5. Dari DataIPMMenurutKabupatenKotadiKalimantanBaratController
        $DataIPMMenurutKabupatenKotaDiKalimantanBarat = Data_IPM_Menurut_Kabupaten_Kota_Di_Kalimantan_Barat::all();
        $columnsDataIPMMenurutKabupatenKotaDiKalimantanBarat=Schema::getColumnListing('data__ipm__menurut__kabupaten__kota_di__kalimantan__barats');

        // 6. Dari DataKondisiKetenagakerjaanKotaPontianakController
        $DataKondisiKetenagakerjaanKotaPontianak = Data_Kondisi_Ketenagakerjaan_Kota_Pontianak::all();
        $columnsDataKondisiKetenagakerjaanKotaPontianak =Schema::getColumnListing('data__kondisi__ketenagakerjaan__kota__pontianaks');

        // 7. Dari DataTingkatPengangguranTerbukaController
        $DataTingkatPengangguranTerbuka = Data_Tingkat_Pengangguran_Terbuka::all();
        $columnsDataTingkatPengangguranTerbuka =Schema::getColumnListing('data__tingkat__pengangguran__terbukas');

        // 8. Dari DataPersentaseBekerjaMenurutLapanganUsahaController
        $DataPersentaseBekerjaMenurutLapanganUsaha = Data_Persentase_Bekerja_Menurut_Lapangan_Usaha::all();
        $columnsDataPersentaseBekerjaMenurutLapanganUsaha =Schema::getColumnListing('data__persentase__bekerja__menurut__lapangan__usahas');
        
        // 8. Dari DataNilaiPDRBDasarHargaBerlakuMenurutKategoriController
        $DataNilaiPDRBDasarHargaBerlakuMenurutKategori = Data_Nilai_PDRB_Dasar_Harga_Berlaku_Menurut_Kategori::all();
        $columnsDataNilaiPDRBDasarHargaBerlakuMenurutKategori =Schema::getColumnListing('data__nilai__p_d_r_b__dasar__harga__berlaku__menurut__kategoris');

        // 9. Dari DataPertumbuhanNilaiTambahKategoriKotaPontianakController
        $DataPertumbuhanNilaiTambahKategoriKotaPontianak = Data_Pertumbuhan_Nilai_Tambah_Kategori_Kota_Pontianak::all();
        $columnsDataPertumbuhanNilaiTambahKategoriKotaPontianak =Schema::getColumnListing('data__pertumbuhan__nilai__tambah__kategori__kota__pontianaks');

        // 10. Dari DataKontribusiKategoriTerhadapPDRBKotaPontianakController
        $DataKontribusiKategoriTerhadapPDRBKotaPontianak = Data_Kontribusi_Kategori_Terhadap_PDRB_Kota_Pontianak::all();
        $columnsDataKontribusiKategoriTerhadapPDRBKotaPontianak =Schema::getColumnListing('data__kontribusi__kategori__terhadap__p_d_r_b__kota__pontianaks');

        // 12. Dari DataTingkatInflasiKotaPontianakController
        $DataTingkatInflasiKotaPontianak = Data_Tingkat_Inflasi_Kota_Pontianak::all();
        $columnsDataTingkatInflasiKotaPontianak =Schema::getColumnListing('data__tingkat__inflasi__kota__pontianaks');

        // Mengirim semua data ke view 'index'
        return view('index', compact(
            // PERBAIKAN: Menghapus huruf 's' di akhir setiap string compact
            'DataLuasWilayahPerKecamatan',
            'DataJumlahPendudukKotaPontianak',
            'DataJumlahPersentasePendudukMiskindiKotaPontianak',
            'DataIPMKotaPontianakMenurutKomponenPembentuknya',
            'DataIPMMenurutKabupatenKotaDiKalimantanBarat',
            'DataKondisiKetenagakerjaanKotaPontianak',
            'DataPersentaseBekerjaMenurutLapanganUsaha',
            'DataNilaiPDRBDasarHargaBerlakuMenurutKategori',
            'DataPertumbuhanNilaiTambahKategoriKotaPontianak',
            'DataKontribusiKategoriTerhadapPDRBKotaPontianak',
            'DataTingkatPengangguranTerbuka',
            'DataTingkatInflasiKotaPontianak',
            'columnsDataLuasWilayahPerKecamatan',
            'columnsDataJumlahPendudukKotaPontianak',
            'columnsDataJumlahPersentasePendudukMiskindiKotaPontianak',
            'columnsDataIPMMenurutKabupatenKotaDiKalimantanBarat',
            'columnsDataIPMKotaPontianakMenurutKomponenPembentuknya',
            'columnsDataKondisiKetenagakerjaanKotaPontianak',
            'columnsDataPersentaseBekerjaMenurutLapanganUsaha',
            'columnsDataTingkatPengangguranTerbuka',
            'columnsDataNilaiPDRBDasarHargaBerlakuMenurutKategori',
            'columnsDataPertumbuhanNilaiTambahKategoriKotaPontianak',
            'columnsDataKontribusiKategoriTerhadapPDRBKotaPontianak',
            'columnsDataTingkatInflasiKotaPontianak',
        ));
    }
}
