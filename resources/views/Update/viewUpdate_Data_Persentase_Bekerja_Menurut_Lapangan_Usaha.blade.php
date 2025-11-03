@extends('layouts.app')

@section('title', 'Edit Data Persentase Penduduk yang Bekerja Menurut Lapangan Usaha di Kota Pontianak')

@section('content')
<div class="container-custom">

  <!-- Judul -->
  <div class="mb-4">
    <h2 class="fw-bold text-uppercase" style="font-size: 1.5rem; color:#212529; margin-bottom: 5px;">
      Edit Data Persentase Penduduk yang Bekerja Menurut Lapangan Usaha di Kota Pontianak
    </h2>
  </div>

  <!-- Form Edit Data -->
  <form 
    action="{{ route('data_persentase_bekerja_menurut_lapangan_usaha.update', $data_bekerja_lapangan_usaha->id) }}" 
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
        class="form-control" 
        value="{{ old('Tahun', $data_bekerja_lapangan_usaha->{'Tahun'}) }}" 
        placeholder="Masukkan tahun"
        required>
    </div>

    {{-- Pertanian, Perkebunan, Kehutanan, Perburuan & Perikanan --}}
    <div class="mb-3">
      <label class="form-label fw-semibold">Pertanian, Perkebunan, Kehutanan, Perburuan & Perikanan (%)</label>
      <input 
        type="number" step="0.01"
        name="Pertanian_Perkebunan_Kehutanan_Perburuan_dan_Perikanan"
        class="form-control"
        value="{{ old('Pertanian_Perkebunan_Kehutanan_Perburuan_dan_Perikanan', $data_bekerja_lapangan_usaha->{'Pertanian_Perkebunan_Kehutanan_Perburuan_dan_Perikanan'}) }}"
        placeholder="Masukkan persentase"
        required>
    </div>

    {{-- Pertambangan & Penggalian --}}
    <div class="mb-3">
      <label class="form-label fw-semibold">Pertambangan & Penggalian (%)</label>
      <input 
        type="number" step="0.01"
        name="Pertambangan_dan_Penggalian"
        class="form-control"
        value="{{ old('Pertambangan_dan_Penggalian', $data_bekerja_lapangan_usaha->{'Pertambangan_dan_Penggalian'}) }}"
        placeholder="Masukkan persentase"
        required>
    </div>

    {{-- Industri --}}
    <div class="mb-3">
      <label class="form-label fw-semibold">Industri (%)</label>
      <input 
        type="number" step="0.01"
        name="Industri"
        class="form-control"
        value="{{ old('Industri', $data_bekerja_lapangan_usaha->{'Industri'}) }}"
        placeholder="Masukkan persentase"
        required>
    </div>

    {{-- Listrik, Gas & Air Minum --}}
    <div class="mb-3">
      <label class="form-label fw-semibold">Listrik, Gas & Air Minum (%)</label>
      <input 
        type="number" step="0.01"
        name="Listrik_Gas_dan_Air_Minum"
        class="form-control"
        value="{{ old('Listrik_Gas_dan_Air_Minum', $data_bekerja_lapangan_usaha->{'Listrik_Gas_dan_Air_Minum'}) }}"
        placeholder="Masukkan persentase"
        required>
    </div>

    {{-- Konstruksi --}}
    <div class="mb-3">
      <label class="form-label fw-semibold">Konstruksi (%)</label>
      <input 
        type="number" step="0.01"
        name="Konstruksi"
        class="form-control"
        value="{{ old('Konstruksi', $data_bekerja_lapangan_usaha->{'Konstruksi'}) }}"
        placeholder="Masukkan persentase"
        required>
    </div>

    {{-- Perdagangan, Rumah Makan & Jasa Akomodasi --}}
    <div class="mb-3">
      <label class="form-label fw-semibold">Perdagangan, Rumah Makan & Jasa Akomodasi (%)</label>
      <input 
        type="number" step="0.01"
        name="Perdagangan_Rumah_Makan_dan_Jasa_Akomodasi"
        class="form-control"
        value="{{ old('Perdagangan_Rumah_Makan_dan_Jasa_Akomodasi', $data_bekerja_lapangan_usaha->{'Perdagangan_Rumah_Makan_dan_Jasa_Akomodasi'}) }}"
        placeholder="Masukkan persentase"
        required>
    </div>

    {{-- Transportasi, Pergudangan & Komunikasi --}}
    <div class="mb-3">
      <label class="form-label fw-semibold">Transportasi, Pergudangan & Komunikasi (%)</label>
      <input 
        type="number" step="0.01"
        name="Transportasi_Pergudangan_dan_Komunikasi"
        class="form-control"
        value="{{ old('Transportasi_Pergudangan_dan_Komunikasi', $data_bekerja_lapangan_usaha->{'Transportasi_Pergudangan_dan_Komunikasi'}) }}"
        placeholder="Masukkan persentase"
        required>
    </div>

    {{-- Keuangan, Real Estate & Jasa Perusahaan --}}
    <div class="mb-3">
      <label class="form-label fw-semibold">Keuangan, Real Estate & Jasa Perusahaan (%)</label>
      <input 
        type="number" step="0.01"
        name="Lembaga_Keuangan_Real_Estate_Usaha_Perusahaan_dan_Jasa_Persh"
        class="form-control"
        value="{{ old('Lembaga_Keuangan_Real_Estate_Usaha_Perusahaan_dan_Jasa_Persh', $data_bekerja_lapangan_usaha->{'Lembaga_Keuangan_Real_Estate_Usaha_Perusahaan_dan_Jasa_Persh'}) }}"
        placeholder="Masukkan persentase"
        required>
    </div>

    {{-- Jasa Kemasyarakatan, Sosial & Perorangan --}}
    <div class="mb-3">
      <label class="form-label fw-semibold">Jasa Kemasyarakatan, Sosial & Perorangan (%)</label>
      <input 
        type="number" step="0.01"
        name="Jasa_Kemasyarakatan_Sosial_dan_Perorangan"
        class="form-control"
        value="{{ old('Jasa_Kemasyarakatan_Sosial_dan_Perorangan', $data_bekerja_lapangan_usaha->{'Jasa_Kemasyarakatan_Sosial_dan_Perorangan'}) }}"
        placeholder="Masukkan persentase"
        required>
    </div>

    {{-- Jumlah (%) --}}
    <div class="mb-3">
      <label class="form-label fw-semibold">Jumlah (%)</label>
      <input 
        type="number" step="0.01"
        name="Jumlah"
        class="form-control"
        value="{{ old('Jumlah', $data_bekerja_lapangan_usaha->{'Jumlah'}) }}"
        placeholder="Masukkan jumlah total (%)"
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
