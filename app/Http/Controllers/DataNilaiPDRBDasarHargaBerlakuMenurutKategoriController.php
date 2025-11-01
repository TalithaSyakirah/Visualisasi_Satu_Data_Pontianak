<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data_Nilai_PDRB_Dasar_Harga_Berlaku_Menurut_Kategori;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DataNilaiPDRBDasarHargaBerlakuMenurutKategoriController extends Controller
{

    // Menyimpan data baru ke database.
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'Tahun' => 'required|integer|unique:data__nilai__p_d_r_b__dasar__harga__berlaku__menurut__kategoris,Tahun',
            'Pertanian_Kehutanan_dan_Perikanan' => 'required|numeric',
            'Pertambangan_dan_Penggalian' => 'required|numeric',
            'Industri_Pengolahan' => 'required|numeric',
            'Pengadaan_Listrik_dan_Gas' => 'required|numeric',
            'Pengadaan_Air_Pengelolaan_Sampah_Limbah_dan_Daur_Ulang' => 'required|numeric',
            'Konstruksi' => 'required|numeric',
            'Perdagangan_Besar_dan_Eceran_Reparasi_Mobil_dan_Sepeda_Motor' => 'required|numeric',
            'Transportasi_dan_Pergudangan' => 'required|numeric',
            'Penyediaan_Akomodasi_dan_Makan_Minuman' => 'required|numeric',
            'Informasi_dan_Komunikasi' => 'required|numeric',
            'Jasa_Keuangan_dan_Asuransi' => 'required|numeric',
            'Real_Estate' => 'required|numeric',
            'Jasa_Perusahaan' => 'required|numeric',
            'Administrasi_Pemerintahan_Pertahanan_dan_Jaminan_Sosial_Wajib' => 'required|numeric',
            'Jasa_Pendidikan' => 'required|numeric',
            'Jasa_Kesehatan_dan_Kegiatan_Sosial' => 'required|numeric',
            'Jasa_Lainnya' => 'required|numeric',
            'Jumlah' => 'required|numeric',
        ]);

        Data_Nilai_PDRB_Dasar_Harga_Berlaku_Menurut_Kategori::create($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil ditambahkan.');
    }

    // Menghapus data.
    public function destroy(Data_Nilai_PDRB_Dasar_Harga_Berlaku_Menurut_Kategori $data_pdrb_dasar_harga_berlaku): RedirectResponse
    {
        $data_pdrb_dasar_harga_berlaku->delete();
        return redirect()->route('dashboard.index')->with('success', 'Data berhasil dihapus.');
    }

    // Menampilkan form edit.
    public function viewUpdate(Data_Nilai_PDRB_Dasar_Harga_Berlaku_Menurut_Kategori $data_pdrb_dasar_harga_berlaku): View
    {
        return view('update.viewUpdate_Data_Nilai_PDRB_Dasar_Harga_Berlaku_Menurut_Kategori', compact('data_pdrb_dasar_harga_berlaku'));
    }

    // Memperbarui data yang sudah ada.
    public function update(Request $request, Data_Nilai_PDRB_Dasar_Harga_Berlaku_Menurut_Kategori $data_pdrb_dasar_harga_berlaku): RedirectResponse
    {
        $request->validate([
            'Tahun' => 'required|integer|unique:data__nilai__p_d_r_b__dasar__harga__berlaku__menurut__kategoris,Tahun,' . $data_pdrb_dasar_harga_berlaku->id,
            'Pertanian_Kehutanan_dan_Perikanan' => 'required|numeric',
            'Pertambangan_dan_Penggalian' => 'required|numeric',
            'Industri_Pengolahan' => 'required|numeric',
            'Pengadaan_Listrik_dan_Gas' => 'required|numeric',
            'Pengadaan_Air_Pengelolaan_Sampah_Limbah_dan_Daur_Ulang' => 'required|numeric',
            'Konstruksi' => 'required|numeric',
            'Perdagangan_Besar_dan_Eceran_Reparasi_Mobil_dan_Sepeda_Motor' => 'required|numeric',
            'Transportasi_dan_Pergudangan' => 'required|numeric',
            'Penyediaan_Akomodasi_dan_Makan_Minuman' => 'required|numeric',
            'Informasi_dan_Komunikasi' => 'required|numeric',
            'Jasa_Keuangan_dan_Asuransi' => 'required|numeric',
            'Real_Estate' => 'required|numeric',
            'Jasa_Perusahaan' => 'required|numeric',
            'Administrasi_Pemerintahan_Pertahanan_dan_Jaminan_Sosial_Wajib' => 'required|numeric',
            'Jasa_Pendidikan' => 'required|numeric',
            'Jasa_Kesehatan_dan_Kegiatan_Sosial' => 'required|numeric',
            'Jasa_Lainnya' => 'required|numeric',
            'Jumlah' => 'required|numeric',
        ]);

        $data_pdrb_dasar_harga_berlaku->update($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil diperbarui.');
    }
}
