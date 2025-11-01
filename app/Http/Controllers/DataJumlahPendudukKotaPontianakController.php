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
    public function destroy(Data_Jumlah_Penduduk_Kota_Pontianak $jumlah_penduduk_Pontianak): RedirectResponse
    {
        $jumlah_penduduk_Pontianak->delete();
        return redirect()->route('dashboard.index')->with('success', 'Data berhasil dihapus.');
    }

    // Menampilkan form edit.
   public function viewUpdate(Data_Jumlah_Penduduk_Kota_Pontianak $jumlah_penduduk_Pontianak): View
    {
        return view('update.viewUpdate_Data_Jumlah_Penduduk_Kota_Pontianak', compact('jumlah_penduduk_Pontianak'));
    }

    // Memperbarui data yang sudah ada.
   public function update(Request $request, Data_Jumlah_Penduduk_Kota_Pontianak $jumlah_penduduk_Pontianak): RedirectResponse
    {
        $request->validate([
            'tahun' => 'required|integer',
            'laki_laki' => 'required|integer',
            'perempuan' => 'required|integer',
            'jumlah' => 'required|integer',
        ]);

       $jumlah_penduduk_Pontianak->update([
            'Tahun' => $request->input('tahun'),
            'Laki_Laki' => $request->input('laki_laki'),
            'Perempuan' => $request->input('perempuan'),
            'Jumlah' => $request->input('jumlah'),
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil diperbarui.');
    }
}
