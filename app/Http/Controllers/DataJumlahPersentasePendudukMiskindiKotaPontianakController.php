<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data_Jumlah_Persentase_Penduduk_Miskin_di_Kota_Pontianak;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DataJumlahPersentasePendudukMiskindiKotaPontianakController extends Controller
{

    //Menyimpan data baru ke database.
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'Tahun' => 'required|integer',
            'Garis_Kemiskinan_(Rp/Kapita/Bulan)' => 'required|integer',
            'Jumlah_Penduduk_Miskin' => 'required|numeric',
            'Persentase_Penduduk_Miskin' => 'required|numeric',
        ]);

        Data_Jumlah_Persentase_Penduduk_Miskin_di_Kota_Pontianak::create([
            'Tahun' => $request->input('Tahun'),
            'Garis_Kemiskinan_(Rp/Kapita/Bulan)' => $request->input('Garis_Kemiskinan_(Rp/Kapita/Bulan)'),
            'Jumlah_Penduduk_Miskin' => $request->input('Jumlah_Penduduk_Miskin'),
            'Persentase_Penduduk_Miskin' => $request->input('Persentase_Penduduk_Miskin'),
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil ditambahkan.');
    }

    //Menghapus data.
    public function destroy(Data_Jumlah_Persentase_Penduduk_Miskin_di_Kota_Pontianak $data_jumlah_persentase_miskin): RedirectResponse
    {
        $data_jumlah_persentase_miskin->delete();
        return redirect()->route('dashboard.index')->with('success', 'Data berhasil dihapus.');
    }

    //Menampilkan form edit.
    public function viewUpdate(Data_Jumlah_Persentase_Penduduk_Miskin_di_Kota_Pontianak $data_jumlah_persentase_miskin): View
    {
        return view('update.viewUpdate_Data_Jumlah_Persentase_Penduduk_Miskin_di_Kota_Pontianak', compact('data_jumlah_persentase_miskin'));
    }

    //Memperbarui data yang sudah ada.
    public function update(Request $request, Data_Jumlah_Persentase_Penduduk_Miskin_di_Kota_Pontianak $data_jumlah_persentase_miskin): RedirectResponse
    {
        $request->validate([
            'tahun' => 'required|integer',
            'garis_kemiskinan_(rp/kapita/bulan)' => 'required|integer',
            'jumlah_penduduk_miskin' => 'required|numeric',
            'persentase_penduduk_miskin' => 'required|numeric',
        ]);

        $data_jumlah_persentase_miskin->update([
            'Tahun' => $request->input('tahun'),
            'Garis_Kemiskinan_(Rp/Kapita/Bulan)' => $request->input('garis_kemiskinan_(rp/kapita/bulan)'),
            'Jumlah_Penduduk_Miskin' => $request->input('jumlah_penduduk_miskin'),
            'Persentase_Penduduk_Miskin' => $request->input('persentase_penduduk_miskin'),
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil diperbarui.');
    }
}
