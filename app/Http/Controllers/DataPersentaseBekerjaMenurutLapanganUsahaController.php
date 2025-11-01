<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data_Persentase_Bekerja_Menurut_Lapangan_Usaha;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DataPersentaseBekerjaMenurutLapanganUsahaController extends Controller
{

    // Menyimpan data baru ke database.
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'Tahun' => 'required|integer',
            'Pertanian_Perkebunan_Kehutanan_Perburuan_dan_Perikanan' => 'required|numeric',
            'Pertambangan_dan_Penggalian' => 'required|numeric',
            'Industri' => 'required|numeric',
            'Listrik_Gas_dan_Air_Minum' => 'required|numeric',
            'Konstruksi' => 'required|numeric',
            'Perdagangan_Rumah_Makan_dan_Jasa_Akomodasi' => 'required|numeric',
            'Transportasi_Pergudangan_dan_Komunikasi' => 'required|numeric',
            'Lembaga_Keuangan_Real_Estate_Usaha_Perusahaan_dan_Jasa_Persh' => 'required|numeric',
            'Jasa_Kemasyarakatan_Sosial_dan_Perorangan' => 'required|numeric',
            'Jumlah' => 'required|numeric',
        ]);

        Data_Persentase_Bekerja_Menurut_Lapangan_Usaha::create($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil ditambahkan.');
    }

    // Menghapus data.
    public function destroy(Data_Persentase_Bekerja_Menurut_Lapangan_Usaha $data_bekerja_lapangan_usaha): RedirectResponse
    {
        $data_bekerja_lapangan_usaha->delete();
        return redirect()->route('dashboard.index')->with('success', 'Data berhasil dihapus.');
    }

    // Menampilkan form edit.
    public function viewUpdate(Data_Persentase_Bekerja_Menurut_Lapangan_Usaha $data_bekerja_lapangan_usaha): View
    {
        return view('update.viewUpdate_Data_Persentase_Bekerja_Menurut_Lapangan_Usaha', compact('data_bekerja_lapangan_usaha'));
    }

    // Memperbarui data yang sudah ada.
    public function update(Request $request, Data_Persentase_Bekerja_Menurut_Lapangan_Usaha $data_bekerja_lapangan_usaha): RedirectResponse
    {
        $request->validate([
            'Tahun' => 'required|integer',
            'Pertanian_Perkebunan_Kehutanan_Perburuan_dan_Perikanan' => 'required|numeric',
            'Pertambangan_dan_Penggalian' => 'required|numeric',
            'Industri' => 'required|numeric',
            'Listrik_Gas_dan_Air_Minum' => 'required|numeric',
            'Konstruksi' => 'required|numeric',
            'Perdagangan_Rumah_Makan_dan_Jasa_Akomodasi' => 'required|numeric',
            'Transportasi_Pergudangan_dan_Komunikasi' => 'required|numeric',
            'Lembaga_Keuangan_Real_Estate_Usaha_Perusahaan_dan_Jasa_Persh' => 'required|numeric',
            'Jasa_Kemasyarakatan_Sosial_dan_Perorangan' => 'required|numeric',
            'Jumlah' => 'required|numeric',
        ]);

        $data_bekerja_lapangan_usaha->update($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil diperbarui.');
    }
}
