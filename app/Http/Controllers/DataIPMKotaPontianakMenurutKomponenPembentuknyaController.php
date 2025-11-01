<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data_IPM_Kota_Pontianak_Menurut_Komponen_Pembentuknya;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DataIpmKotaPontianakMenurutKomponenPembentuknyaController extends Controller
{

    //Menyimpan data baru ke database.
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'Tahun' => 'required|integer',
            'Angka_Harapan_Hidup_(Tahun)' => 'required|numeric',
            'Harapan_Lama_Sekolah_(Tahun)' => 'required|numeric',
            'Rata_Rata_Lama_Sekolah_(Tahun)' => 'required|numeric',
            'Pengeluran_Per_Kapita_(Ribu_Rupiah)' => 'required|integer',
            'Indeks_Pembangunan_Manusia' => 'required|numeric',
        ]);

        Data_IPM_Kota_Pontianak_Menurut_Komponen_Pembentuknya::create($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil ditambahkan.');
    }

    //Menghapus data.
    public function destroy(Data_IPM_Kota_Pontianak_Menurut_Komponen_Pembentuknya $data_ipm_menurut_pembentuk): RedirectResponse
    {
        $data_ipm_menurut_pembentuk->delete();
        return redirect()->route('dashboard.index')->with('success', 'Data berhasil dihapus.');
    }

    //Menampilkan form edit.
    public function viewUpdate(Data_IPM_Kota_Pontianak_Menurut_Komponen_Pembentuknya $data_ipm_menurut_pembentuk): View
    {
        return view('update.viewUpdate_Data_IPM_Kota_Pontianak_Menurut_Komponen_Pembentuknya', compact('data_ipm_menurut_pembentuk'));
    }

    //Memperbarui data yang sudah ada.
    public function update(Request $request, Data_IPM_Kota_Pontianak_Menurut_Komponen_Pembentuknya $data_ipm_menurut_pembentuk): RedirectResponse
    {
        $request->validate([
            'Tahun' => 'required|integer',
            'Angka_Harapan_Hidup_(Tahun)' => 'required|numeric',
            'Harapan_Lama_Sekolah_(Tahun)' => 'required|numeric',
            'Rata_Rata_Lama_Sekolah_(Tahun)' => 'required|numeric',
            'Pengeluran_Per_Kapita_(Ribu_Rupiah)' => 'required|integer',
            'Indeks_Pembangunan_Manusia' => 'required|numeric',
        ]);

        $data_ipm_menurut_pembentuk->update($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil diperbarui.');
    }
}
