<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data_Tingkat_Inflasi_Kota_Pontianak;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DataTingkatInflasiKotaPontianakController extends Controller
{

    // Menyimpan data baru ke database.
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'Tahun' => 'required|integer|unique:data__tingkat__inflasi__kota__pontianaks,Tahun',
            'Jumlah' => 'required|numeric',
        ]);

        Data_Tingkat_Inflasi_Kota_Pontianak::create([
            'Tahun' => $request->input('Tahun'),
            'Jumlah' => $request->input('Jumlah'),
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil ditambahkan.');
    }

    // Menghapus data.
    public function destroy(Data_Tingkat_Inflasi_Kota_Pontianak $data_tingkat_inflasi): RedirectResponse
    {
        $data_tingkat_inflasi->delete();
        return redirect()->route('dashboard.index')->with('success', 'Data berhasil dihapus.');
    }

    // Menampilkan form edit.
    public function viewUpdate(Data_Tingkat_Inflasi_Kota_Pontianak $data_tingkat_inflasi): View
    {
        return view('update.viewUpdate_Data_Tingkat_Inflasi_Kota_Pontianak', compact('data_tingkat_inflasi'));
    }

    // Memperbarui data yang sudah ada.
    public function update(Request $request, Data_Tingkat_Inflasi_Kota_Pontianak $data_tingkat_inflasi): RedirectResponse
    {
        $request->validate([
            'Tahun' => 'required|integer|unique:data__tingkat__inflasi__kota__pontianaks,Tahun,' . $data_tingkat_inflasi->id,
            'Jumlah' => 'required|numeric',
        ]);

        $data_tingkat_inflasi->update([
            'Tahun' => $request->input('Tahun'),
            'Jumlah' => $request->input('Jumlah'),
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil diperbarui.');
    }
}
