<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data_IPM_Menurut_Kabupaten_Kota_Di_Kalimantan_Barat;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DataIpmMenurutKabupatenKotaDiKalimantanBaratController extends Controller
{

    //Menyimpan data baru ke database.
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'Tahun' => 'required|integer',
            'Kabupaten_Sambas' => 'required|numeric',
            'Kabupaten_Bengkayang' => 'required|numeric',
            'Kabupaten_Landak' => 'required|numeric',
            'Kabupaten_Mempawah' => 'required|numeric',
            'Kabupaten_Sanggau' => 'required|numeric',
            'Kabupaten_Ketapang' => 'required|numeric',
            'Kabupaten_Sintang' => 'required|numeric',
            'Kabupaten_Kapuas_Hulu' => 'required|numeric',
            'Kabupaten_Sekadau' => 'required|numeric',
            'Kabupaten_Melawi' => 'required|numeric',
            'Kabupaten_Kayong_Utara' => 'required|numeric',
            'Kabupaten_Kubu_Raya' => 'required|numeric',
            'Kota_Pontianak' => 'required|numeric',
            'Kota_Singkawang' => 'required|numeric',
        ]);

        Data_IPM_Menurut_Kabupaten_Kota_Di_Kalimantan_Barat::create($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil ditambahkan.');
    }

    //Menghapus data.
    public function destroy(Data_IPM_Menurut_Kabupaten_Kota_Di_Kalimantan_Barat $Data_IPM_Menurut_Kabupaten_Kota_Di_Kalimantan_Barat): RedirectResponse
    {
        $Data_IPM_Menurut_Kabupaten_Kota_Di_Kalimantan_Barat->delete();
        return redirect()->route('dashboard.index')->with('success', 'Data berhasil dihapus.');
    }

    //Menampilkan form edit.
    public function viewUpdate(Data_IPM_Menurut_Kabupaten_Kota_Di_Kalimantan_Barat $Data_IPM_Menurut_Kabupaten_Kota_Di_Kalimantan_Barat): View
    {
        return view('update.viewUpdate_Data_IPM_Menurut_Kabupaten_Kota_Di_Kalimantan_Barat', compact('Data_IPM_Menurut_Kabupaten_Kota_Di_Kalimantan_Barat'));
    }

    //Memperbarui data yang sudah ada.
    public function update(Request $request, Data_IPM_Menurut_Kabupaten_Kota_Di_Kalimantan_Barat $Data_IPM_Menurut_Kabupaten_Kota_Di_Kalimantan_Barat): RedirectResponse
    {
        $request->validate([
            'Tahun' => 'required|integer',
            'Kabupaten_Sambas' => 'required|numeric',
            'Kabupaten_Bengkayang' => 'required|numeric',
            'Kabupaten_Landak' => 'required|numeric',
            'Kabupaten_Mempawah' => 'required|numeric',
            'Kabupaten_Sanggau' => 'required|numeric',
            'Kabupaten_Ketapang' => 'required|numeric',
            'Kabupaten_Sintang' => 'required|numeric',
            'Kabupaten_Kapuas_Hulu' => 'required|numeric',
            'Kabupaten_Sekadau' => 'required|numeric',
            'Kabupaten_Melawi' => 'required|numeric',
            'Kabupaten_Kayong_Utara' => 'required|numeric',
            'Kabupaten_Kubu_Raya' => 'required|numeric',
            'Kota_Pontianak' => 'required|numeric',
            'Kota_Singkawang' => 'required|numeric',
        ]);

        $Data_IPM_Menurut_Kabupaten_Kota_Di_Kalimantan_Barat->update($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil diperbarui.');
    }
}
