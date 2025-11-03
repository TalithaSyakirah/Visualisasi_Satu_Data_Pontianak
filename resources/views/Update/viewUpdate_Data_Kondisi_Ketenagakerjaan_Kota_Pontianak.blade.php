@extends('layouts.app')

@section('title', 'Edit Data Kondisi Ketenagakerjaan Kota Pontianak')

@section('content')
<div class="container-custom">

  <!-- Judul -->
  <div class="mb-4">
    <h2 class="fw-bold text-uppercase" style="font-size: 1.5rem; color:#212529; margin-bottom: 5px;">
      Edit Data Kondisi Ketenagakerjaan Kota Pontianak
    </h2>
  </div>

  <!-- Form Edit Data -->
  <form 
    action="{{ route('data_kondisi_ketenagakerjaan_kota_pontianak.update', $data_kondisi_ketenagakerjaan->id) }}" 
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
        value="{{ old('Tahun', $data_kondisi_ketenagakerjaan->{'Tahun'}) }}" 
        placeholder="Masukkan tahun"
        required
      >
    </div>

    {{-- Jumlah Angkatan Kerja --}}
    <div class="mb-3">
      <label class="form-label fw-semibold">Jumlah Angkatan Kerja</label>
      <input 
        type="number" 
        name="Angkatan_Kerja" 
        id="Angkatan_Kerja" 
        class="form-control" 
        value="{{ old('Angkatan_Kerja', $data_kondisi_ketenagakerjaan->{'Angkatan_Kerja'}) }}" 
        placeholder="Masukkan jumlah angkatan kerja"
        required
      >
    </div>

    {{-- Jumlah Bukan Angkatan Kerja --}}
    <div class="mb-3">
      <label class="form-label fw-semibold">Jumlah Bukan Angkatan Kerja</label>
      <input 
        type="number" 
        name="Bukan_Angkatan_Kerja" 
        id="Bukan_Angkatan_Kerja" 
        class="form-control" 
        value="{{ old('Bukan_Angkatan_Kerja', $data_kondisi_ketenagakerjaan->{'Bukan_Angkatan_Kerja'}) }}" 
        placeholder="Masukkan jumlah bukan angkatan kerja"
        required
      >
    </div>

    {{-- Jumlah Total --}}
    <div class="mb-3">
      <label class="form-label fw-semibold">Jumlah Total</label>
      <input 
        type="number" 
        name="Jumlah" 
        id="Jumlah" 
        class="form-control" 
        value="{{ old('Jumlah', $data_kondisi_ketenagakerjaan->{'Jumlah'}) }}" 
        placeholder="Masukkan jumlah total"
        required
      >
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
