@extends('layouts.app')

@section('title', 'Edit Data Jumlah Penduduk Kota Pontianak')

@section('content')
<div class="container-custom">

  <!-- Judul -->
  <div class="mb-4">
    <h2 class="fw-bold text-uppercase" style="font-size: 1.5rem; color:#212529; margin-bottom: 5px;">
      Edit Data Jumlah Penduduk Kota Pontianak
    </h2>
  </div>

  <!-- Form Edit Data -->
  <form action="{{ route('data_jumlah_penduduk_kota_pontianak.update', $jumlah_penduduk_Pontianak->id) }}" method="POST" class="mt-3 mb-4">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label class="form-label fw-semibold">Tahun</label>
      <input 
        type="number" 
        name="tahun" 
        id="tahun" 
        class="form-control" 
        value="{{ old('tahun', $jumlah_penduduk_Pontianak->{'Tahun'}) }}" 
        placeholder="Masukkan tahun"
        required>
    </div>

    <div class="mb-3">
      <label class="form-label fw-semibold">Jumlah Laki-laki</label>
      <input 
        type="number" 
        name="laki_laki" 
        id="laki_laki" 
        class="form-control" 
        value="{{ old('laki_laki', $jumlah_penduduk_Pontianak->{'Laki_Laki'}) }}" 
        placeholder="Masukkan jumlah laki-laki"
        required>
    </div>

    <div class="mb-3">
      <label class="form-label fw-semibold">Jumlah Perempuan</label>
      <input 
        type="number" 
        name="perempuan" 
        id="perempuan" 
        class="form-control" 
        value="{{ old('perempuan', $jumlah_penduduk_Pontianak->{'Perempuan'}) }}" 
        placeholder="Masukkan jumlah perempuan"
        required>
    </div>

    <div class="mb-3">
      <label class="form-label fw-semibold">Total Penduduk</label>
      <input 
        type="number" 
        name="jumlah" 
        id="jumlah" 
        class="form-control" 
        value="{{ old('jumlah', $jumlah_penduduk_Pontianak->{'Jumlah'}) }}" 
        placeholder="Masukkan total penduduk"
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
