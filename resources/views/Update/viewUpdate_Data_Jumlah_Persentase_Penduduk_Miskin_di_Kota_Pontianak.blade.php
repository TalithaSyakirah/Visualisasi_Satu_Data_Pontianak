@extends('layouts.app')

@section('title', 'Edit Data Jumlah dan Persentase Penduduk Miskin di Kota Pontianak')

@section('content')
<div class="container-custom">

  <!-- Judul -->
  <div class="mb-4">
    <h2 class="fw-bold text-uppercase" style="font-size: 1.5rem; color:#212529; margin-bottom: 5px;">
      Edit Data Jumlah dan Persentase Penduduk Miskin di Kota Pontianak
    </h2>
  </div>

  <!-- Form Edit Data -->
  <form action="{{ route('data_jumlah_persentase_miskin.update', $data_jumlah_persentase_miskin->id) }}" method="POST" class="mt-3 mb-4">
    @csrf
    @method('PUT')

    {{-- Tahun --}}
    <div class="mb-3">
      <label class="form-label fw-semibold">Tahun</label>
      <input 
        type="number" 
        name="tahun" 
        id="tahun" 
        class="form-control" 
        value="{{ old('tahun', $data_jumlah_persentase_miskin->{'Tahun'}) }}" 
        placeholder="Masukkan tahun"
        required>
    </div>

    {{-- Garis Kemiskinan --}}
    <div class="mb-3">
      <label class="form-label fw-semibold">Garis Kemiskinan (Rp/Kapita/Bulan)</label>
      <input 
        type="number" 
        step="0.01"
        name="garis_kemiskinan_(rp/kapita/bulan)" 
        id="garis_kemiskinan" 
        class="form-control" 
        value="{{ old('garis_kemiskinan_(rp/kapita/bulan)', $data_jumlah_persentase_miskin->{'Garis_Kemiskinan_(Rp/Kapita/Bulan)'}) }}" 
        placeholder="Masukkan garis kemiskinan (Rp/Kapita/Bulan)"
        required>
    </div>

    {{-- Jumlah Penduduk Miskin --}}
    <div class="mb-3">
      <label class="form-label fw-semibold">Jumlah Penduduk Miskin</label>
      <input 
        type="number" 
        step="0.01"
        name="jumlah_penduduk_miskin" 
        id="jumlah_penduduk_miskin" 
        class="form-control" 
        value="{{ old('jumlah_penduduk_miskin', $data_jumlah_persentase_miskin->{'Jumlah_Penduduk_Miskin'}) }}" 
        placeholder="Masukkan jumlah penduduk miskin"
        required>
    </div>

    {{-- Persentase Penduduk Miskin --}}
    <div class="mb-3">
      <label class="form-label fw-semibold">Persentase Penduduk Miskin (%)</label>
      <input 
        type="number" 
        step="0.01"
        name="persentase_penduduk_miskin" 
        id="persentase_penduduk_miskin" 
        class="form-control" 
        value="{{ old('persentase_penduduk_miskin', $data_jumlah_persentase_miskin->{'Persentase_Penduduk_Miskin'}) }}" 
        placeholder="Masukkan persentase penduduk miskin (%)"
        required>
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
