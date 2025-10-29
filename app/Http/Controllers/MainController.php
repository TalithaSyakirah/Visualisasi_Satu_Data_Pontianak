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

class MainController extends Controller
{
    public function index(): View
    {
        // 1. Dari DataLuasWilayahPerKecamatanController
        $DataLuasWilayahPerKecamatan = Data_Luas_Wilayah_Per_Kecamatan::all();
        
        // 2. Dari DataJumlahPendudukKotaPontianakController
        $DataJumlahPendudukKotaPontianak = Data_Jumlah_Penduduk_Kota_Pontianak::all();
        
        // 3. Dari DataJumlahPersentasePendudukMiskindiKotaPontianakController
        $DataJumlahPersentasePendudukMiskindiKotaPontianak = Data_Jumlah_Persentase_Penduduk_Miskin_di_Kota_Pontianak::all();
        
        // 4. Dari DataIPMKotaPontianakMenurutKomponenPembentuknyaController
        $DataIPMKotaPontianakMenurutKomponenPembentuknya = Data_IPM_Kota_Pontianak_Menurut_Komponen_Pembentuknya::all();
        
        // 5. Dari DataIPMMenurutKabupatenKotadiKalimantanBaratController
        $DataIPMMenurutKabupatenKotaDiKalimantanBarat = Data_IPM_Menurut_Kabupaten_Kota_Di_Kalimantan_Barat::all();
        
        // 6. Dari DataKondisiKetenagakerjaanKotaPontianakController
        $DataKondisiKetenagakerjaanKotaPontianak = Data_Kondisi_Ketenagakerjaan_Kota_Pontianak::all();
        
        // 7. Dari DataPersentaseBekerjaMenurutLapanganUsahaController
        $DataPersentaseBekerjaMenurutLapanganUsaha = Data_Persentase_Bekerja_Menurut_Lapangan_Usaha::all();
        
        // 8. Dari DataNilaiPDRBDasarHargaBerlakuMenurutKategoriController
        $DataNilaiPDRBDasarHargaBerlakuMenurutKategori = Data_Nilai_PDRB_Dasar_Harga_Berlaku_Menurut_Kategori::all();

        // 9. Dari DataPertumbuhanNilaiTambahKategoriKotaPontianakController
        $DataPertumbuhanNilaiTambahKategoriKotaPontianak = Data_Pertumbuhan_Nilai_Tambah_Kategori_Kota_Pontianak::all();

        // 10. Dari DataKontribusiKategoriTerhadapPDRBKotaPontianakController
        $DataKontribusiKategoriTerhadapPDRBKotaPontianak = Data_Kontribusi_Kategori_Terhadap_PDRB_Kota_Pontianak::all();

        // 11. Dari DataTingkatPengangguranTerbukaController
        $DataTingkatPengangguranTerbuka = Data_Tingkat_Pengangguran_Terbuka::all();

        // 12. Dari DataTingkatInflasiKotaPontianakController
        $DataTingkatInflasiKotaPontianak = Data_Tingkat_Inflasi_Kota_Pontianak::all();

        // Mengirim semua data ke view 'index'
        return view('index', compact(
            'DataLuasWilayahPerKecamatans',
            'DataJumlahPendudukKotaPontianaks',
            'DataJumlahPersentasePendudukMiskindiKotaPontianaks',
            'DataIPMKotaPontianakMenurutKomponenPembentuknyas',
            'DataIPMMenurutKabupatenKotaDiKalimantanBarats',
            'DataKondisiKetenagakerjaanKotaPontianaks',
            'DataPersentaseBekerjaMenurutLapanganUsahas',
            'DataNilaiPDRBDasarHargaBerlakuMenurutKategoris',
            'DataPertumbuhanNilaiTambahKategoriKotaPontianaks',
            'DataKontribusiKategoriTerhadapPDRBKotaPontianaks',
            'DataTingkatPengangguranTerbukas',
            'DataTingkatInflasiKotaPontianaks'
        ));
    }
}
