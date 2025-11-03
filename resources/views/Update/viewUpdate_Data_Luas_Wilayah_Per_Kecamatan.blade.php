@extends('layouts.app')

@section('title', 'Edit Data Luas Wilayah Per Kecamatan')

@section('content')
<div class="container-custom">

  <!-- Judul -->
  <div class="mb-4">
    <h2 class="fw-bold text-uppercase" style="font-size: 1.5rem; color:#212529; margin-bottom: 5px;">
      Edit Data Luas Wilayah Per Kecamatan
    </h2>
  </div>

  <!-- Form Edit Data -->
  <form action="{{ route('data_luas_wilayah.update', $Data_Luas_Wilayah_Per_Kecamatan->id) }}" method="POST" class="mt-3 mb-4">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label class="form-label fw-semibold">Nama Kecamatan</label>
      <input
        type="text"
        name="kecamatan"
        id="kecamatan"
        class="form-control"
        value="{{ old('kecamatan', $Data_Luas_Wilayah_Per_Kecamatan->Kecamatan) }}"
        placeholder="Masukkan nama kecamatan"
        required
      >
    </div>

    <div class="mb-3">
      <label class="form-label fw-semibold">Luas (Km²)</label>
      <input
        type="number"
        step="0.01"
        name="luas_(km2)"
        id="luas_km2"
        class="form-control"
        value="{{ old('luas_km2', $Data_Luas_Wilayah_Per_Kecamatan->{'Luas_(Km^2)'}) }}"
        placeholder="Masukkan luas wilayah (Km²)"
        required
      >
    </div>

    <!-- Tombol Simpan & Cancel -->
    <div class="d-flex justify-content-end mt-4">
      <button type="submit" class="btn"
        style="background-color:#007BFF; color:white; font-weight:600; padding:8px 20px; border-radius:8px;">
        Simpan
      </button>
      <a href="{{ route('dashboard.index') }}" class="btn btn-secondary ms-2" style="padding:8px 20px; border-radius:8px;">
        Cancel
      </a>
    </div>
  </form>
</div>
@endsection
