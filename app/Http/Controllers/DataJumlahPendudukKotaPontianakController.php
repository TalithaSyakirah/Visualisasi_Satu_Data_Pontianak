<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data_Jumlah_Penduduk_Kota_Pontianak;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DataJumlahPendudukKotaPontianakController extends Controller
{
    // Menyimpan data baru ke database.
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'Tahun' => 'required|integer',
            'Laki_Laki' => 'required|integer',
            'Perempuan' => 'required|integer',
            'Jumlah' => 'required|integer',
        ]);

        Data_Jumlah_Penduduk_Kota_Pontianak::create([
            'Tahun' => $request->input('Tahun'),
            'Laki_Laki' => $request->input('Laki_Laki'),
            'Perempuan' => $request->input('Perempuan'),
            'Jumlah' => $request->input('Jumlah'),
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil ditambahkan.');
    }

    // Menghapus data.
    public function destroy(Data_Jumlah_Penduduk_Kota_Pontianak $Data_Jumlah_Penduduk_Kota_Pontianak): RedirectResponse
    {
        $Data_Jumlah_Penduduk_Kota_Pontianak->delete();
        return redirect()->route('dashboard.index')->with('success', 'Data berhasil dihapus.');
    }

    // Menampilkan form edit.
    public function viewUpdate(Data_Jumlah_Penduduk_Kota_Pontianak $Data_Jumlah_Penduduk_Kota_Pontianak): View
    {
        return view('update.viewUpdate_Data_Jumlah_Penduduk_Kota_Pontianak', compact('Data_Jumlah_Penduduk_Kota_Pontianak'));
    }

    // Memperbarui data yang sudah ada.
    public function update(Request $request, Data_Jumlah_Penduduk_Kota_Pontianak $Data_Jumlah_Penduduk_Kota_Pontianak): RedirectResponse
    {
        $request->validate([
            'Tahun' => 'required|integer',
            'Laki_Laki' => 'required|integer',
            'Perempuan' => 'required|integer',
            'Jumlah' => 'required|integer',
        ]);

        $Data_Jumlah_Penduduk_Kota_Pontianak->update([
            'Tahun' => $request->input('Tahun'),
            'Laki_Laki' => $request->input('Laki_Laki'),
            'Perempuan' => $request->input('Perempuan'),
            'Jumlah' => $request->input('Jumlah'),
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil diperbarui.');
    }
}
