<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data_Kondisi_Ketenagakerjaan_Kota_Pontianak;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DataKondisiKetenagakerjaanKotaPontianakController extends Controller
{

    // Menyimpan data baru ke database.
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'Tahun' => 'required|integer',
            'Angkatan_Kerja' => 'required|integer',
            'Bukan_Angkatan_Kerja' => 'required|integer',
            'Jumlah' => 'required|integer',
        ]);

        Data_Kondisi_Ketenagakerjaan_Kota_Pontianak::create($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil ditambahkan.');
    }

    // Menghapus data.
    public function destroy(Data_Kondisi_Ketenagakerjaan_Kota_Pontianak $Data_Kondisi_Ketenagakerjaan_Kota_Pontianak): RedirectResponse
    {
        $Data_Kondisi_Ketenagakerjaan_Kota_Pontianak->delete();
        return redirect()->route('dashboard.index')->with('success', 'Data berhasil dihapus.');
    }

    // Menampilkan form edit.
    public function viewUpdate(Data_Kondisi_Ketenagakerjaan_Kota_Pontianak $Data_Kondisi_Ketenagakerjaan_Kota_Pontianak): View
    {
        return view('update.viewUpdate_Data_Kondisi_Ketenagakerjaan_Kota_Pontianak', compact('Data_Kondisi_Ketenagakerjaan_Kota_Pontianak'));
    }

    // Memperbarui data yang sudah ada.
    public function update(Request $request, Data_Kondisi_Ketenagakerjaan_Kota_Pontianak $Data_Kondisi_Ketenagakerjaan_Kota_Pontianak): RedirectResponse
    {
        $request->validate([
            'Tahun' => 'required|integer',
            'Angkatan_Kerja' => 'required|integer',
            'Bukan_Angkatan_Kerja' => 'required|integer',
            'Jumlah' => 'required|integer',
        ]);

        $Data_Kondisi_Ketenagakerjaan_Kota_Pontianak->update($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil diperbarui.');
    }
}
