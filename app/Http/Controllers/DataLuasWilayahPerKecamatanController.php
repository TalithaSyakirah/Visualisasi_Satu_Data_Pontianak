<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data_Luas_Wilayah_Per_Kecamatan;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DataLuasWilayahPerKecamatanController extends Controller
{

    //Menyimpan data baru ke database.
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'Kecamatan' => 'required|max:100',
            'Luas_(Km^2)' => 'required|integer',
        ]);

        Data_Luas_Wilayah_Per_Kecamatan::create([
            'Kecamatan' => $request->input('Kecamatan'),
            'Luas_(Km^2)' => $request->input('Luas_(Km^2)'),
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil ditambahkan.');
    }

    //Menghapus data.
    public function destroy(Data_Luas_Wilayah_Per_Kecamatan $Data_Luas_Wilayah_Per_Kecamatan): RedirectResponse
    {
        $Data_Luas_Wilayah_Per_Kecamatan->delete();
        return redirect()->route('dashboard.index')->with('success', 'Data berhasil dihapus.');
    }

    //Menampilkan form edit.
    public function viewUpdate(Data_Luas_Wilayah_Per_Kecamatan $Data_Luas_Wilayah_Per_Kecamatan): View
    {
        return view('update.viewUpdate_Data_Luas_Wilayah_Per_Kecamatan', compact('Data_Luas_Wilayah_Per_Kecamatan'));
    }

    //Memperbarui data yang sudah ada.
    public function update(Request $request, Data_Luas_Wilayah_Per_Kecamatan $Data_Luas_Wilayah_Per_Kecamatan): RedirectResponse
    {
        $request->validate([
            'kecamatan' => 'required|max:100',
            'luas_(km2)' => 'required|numeric',
        ]);

        $Data_Luas_Wilayah_Per_Kecamatan->update([
            'Kecamatan' => $request->input('kecamatan'),
            'Luas_(Km^2)' => $request->input('luas_(km2)'),
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil diperbarui.');
    }

}
