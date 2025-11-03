@extends('layouts.app')

@section('title', 'Edit Data Tingkat Inflasi Kota Pontianak')

@section('content')
<div class="container-custom">

  <!-- Judul -->
  <div class="mb-4">
    <h2 class="fw-bold text-uppercase" style="font-size: 1.5rem; color:#212529; margin-bottom: 5px;">
      Edit Data Tingkat Inflasi Kota Pontianak
    </h2>
  </div>

  <!-- Form Edit Data -->
  <form 
    action="{{ route('data_tingkat_inflasi_kota_pontianak.update', $data_tingkat_inflasi->id) }}" 
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
        value="{{ old('Tahun', $data_tingkat_inflasi->Tahun) }}" 
        placeholder="Masukkan tahun"
        required>
    </div>

    {{-- Tingkat Inflasi --}}
    <div class="mb-3">
      <label class="form-label fw-semibold">Tingkat Inflasi (%)</label>
      <input 
        type="number" 
        step="0.01" 
        name="Jumlah" 
        id="Jumlah" 
        class="form-control" 
        value="{{ old('Jumlah', $data_tingkat_inflasi->Jumlah) }}" 
        placeholder="Masukkan tingkat inflasi"
        required>
    </div>

    <!-- Tombol Simpan & Cancel -->
    <div class="d-flex justify-content-end mt-4">
      <button 
        type="submit" 
        class="btn" 
        style="background-color:#007BFF; color:white; font-weight:600; padding:8px 20px; border-radius:8px;">
        Simpan
      </button>
      <a 
        href="{{ route('dashboard.index') }}" 
        class="btn btn-secondary ms-2" 
        style="padding:8px 20px; border-radius:8px;">
        Cancel
      </a>
    </div>

  </form>
</div>
@endsection
