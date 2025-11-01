<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data_Tingkat_Pengangguran_Terbuka;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DataTingkatPengangguranTerbukaController extends Controller
{

    // Menyimpan data baru ke database.
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'Tahun' => 'required|integer|unique:data__tingkat__pengangguran__terbukas,Tahun',
            'Jumlah' => 'required|numeric',
        ]);

        Data_Tingkat_Pengangguran_Terbuka::create($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil ditambahkan.');
    }

    // Menghapus data.
    public function destroy(Data_Tingkat_Pengangguran_Terbuka $data_tingkat_pengangguran): RedirectResponse
    {
        $data_tingkat_pengangguran->delete();
        return redirect()->route('dashboard.index')->with('success', 'Data berhasil dihapus.');
    }

    // Menampilkan form edit.
    public function viewUpdate(Data_Tingkat_Pengangguran_Terbuka $data_tingkat_pengangguran): View
    {
        return view('update.viewUpdate_Data_Tingkat_Pengangguran_Terbuka', compact('data_tingkat_pengangguran'));
    }

    // Memperbarui data yang sudah ada.
    public function update(Request $request, Data_Tingkat_Pengangguran_Terbuka $data_tingkat_pengangguran): RedirectResponse
    {
        $request->validate([
            'Tahun' => 'required|integer|unique:data__tingkat__pengangguran__terbukas,Tahun,' . $data_tingkat_pengangguran->id,
            'Jumlah' => 'required|numeric',
        ]);

        $data_tingkat_pengangguran->update($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil diperbarui.');
    }
}
