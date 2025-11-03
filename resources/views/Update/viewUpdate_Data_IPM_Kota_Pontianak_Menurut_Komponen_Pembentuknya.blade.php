@extends('layouts.app')

@section('title', 'Edit Indeks Pembangunan Manusia (IPM) Kota Pontianak Menurut Komponen Pembentuknya')

@section('content')
<div class="container-custom">

  <!-- Judul -->
  <div class="mb-4">
    <h2 class="fw-bold text-uppercase" style="font-size: 1.5rem; color:#212529; margin-bottom: 5px;">
      Edit Indeks Pembangunan Manusia (IPM) Kota Pontianak Menurut Komponen Pembentuknya
    </h2>
  </div>

  <!-- Form Edit Data -->
  <form 
    action="{{ route('data_ipm_kota_pontianak_menurut_komponen_pembentuknya.update', $data_ipm_menurut_pembentuk->id) }}" 
    method="POST" 
    class="mt-3 mb-4"
  >
    @csrf
    @method('PUT')

    {{-- Tahun --}}
    <div class="mb-3">
      <label class="form-label fw-semibold">Tahun</label>
      <input 
        type="number" 
        name="Tahun" 
        id="Tahun" 
        class="form-control" 
        value="{{ old('Tahun', $data_ipm_menurut_pembentuk->Tahun) }}" 
        placeholder="Masukkan tahun"
        required
      >
    </div>

    {{-- Komponen Pembentuk IPM --}}
    <div class="row">
      <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Angka Harapan Hidup (Tahun)</label>
        <input 
          type="number" 
          step="any"
          name="Angka_Harapan_Hidup_(Tahun)" 
          id="Angka_Harapan_Hidup_(Tahun)" 
          class="form-control" 
          value="{{ old('Angka_Harapan_Hidup_(Tahun)', $data_ipm_menurut_pembentuk->{'Angka_Harapan_Hidup_(Tahun)'}) }}" 
          placeholder="Masukkan angka harapan hidup"
          required
        >
      </div>

      <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Harapan Lama Sekolah (Tahun)</label>
        <input 
          type="number" 
          step="any"
          name="Harapan_Lama_Sekolah_(Tahun)" 
          id="Harapan_Lama_Sekolah_(Tahun)" 
          class="form-control" 
          value="{{ old('Harapan_Lama_Sekolah_(Tahun)', $data_ipm_menurut_pembentuk->{'Harapan_Lama_Sekolah_(Tahun)'}) }}" 
          placeholder="Masukkan harapan lama sekolah"
          required
        >
      </div>

      <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Rata-rata Lama Sekolah (Tahun)</label>
        <input 
          type="number" 
          step="any"
          name="Rata_Rata_Lama_Sekolah_(Tahun)" 
          id="Rata_Rata_Lama_Sekolah_(Tahun)" 
          class="form-control" 
          value="{{ old('Rata_Rata_Lama_Sekolah_(Tahun)', $data_ipm_menurut_pembentuk->{'Rata_Rata_Lama_Sekolah_(Tahun)'}) }}" 
          placeholder="Masukkan rata-rata lama sekolah"
          required
        >
      </div>

      <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Pengeluaran Per Kapita (Ribu Rupiah)</label>
        <input 
          type="number" 
          step="any"
          name="Pengeluran_Per_Kapita_(Ribu_Rupiah)" 
          id="Pengeluran_Per_Kapita_(Ribu_Rupiah)" 
          class="form-control" 
          value="{{ old('Pengeluran_Per_Kapita_(Ribu_Rupiah)', $data_ipm_menurut_pembentuk->{'Pengeluran_Per_Kapita_(Ribu_Rupiah)'}) }}" 
          placeholder="Masukkan pengeluaran per kapita (ribu rupiah)"
          required
        >
      </div>

      <div class="col-md-12 mb-3">
        <label class="form-label fw-semibold">Indeks Pembangunan Manusia</label>
        <input 
          type="number" 
          step="any"
          name="Indeks_Pembangunan_Manusia" 
          id="Indeks_Pembangunan_Manusia" 
          class="form-control" 
          value="{{ old('Indeks_Pembangunan_Manusia', $data_ipm_menurut_pembentuk->Indeks_Pembangunan_Manusia) }}" 
          placeholder="Masukkan indeks pembangunan manusia"
          required
        >
      </div>
    </div>

    <!-- Tombol Simpan & Cancel -->
    <div class="d-flex justify-content-end mt-4">
      <button type="submit" class="btn" 
        style="background-color:#007BFF; color:white; font-weight:600; padding:8px 20px; border-radius:8px;">
        Simpan
      </button>
      <a href="{{ route('dashboard.index') }}" class="btn btn-secondary ms-2" 
        style="padding:8px 20px; border-radius:8px;">
        Cancel
      </a>
    </div>
  </form>
</div>
@endsection
