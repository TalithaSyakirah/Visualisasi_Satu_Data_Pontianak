@extends('layouts.app')

@section('title', 'Edit Data Indeks Pembangunan Manusia (IPM) Menurut Kabupaten/Kota di Kalimantan Barat')

@section('content')
<div class="container-custom">

  <!-- Judul -->
  <div class="mb-4">
    <h2 class="fw-bold text-uppercase" style="font-size: 1.5rem; color:#212529; margin-bottom: 5px;">
      Edit Data Indeks Pembangunan Manusia (IPM) Menurut Kabupaten/Kota di Kalimantan Barat
    </h2>
  </div>

  <!-- Form Edit Data -->
  <form 
    action="{{ route('data_ipm_menurut_kabupaten_kota.update', $data_ipm_menurut_kabupaten_kota->id) }}" 
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
        value="{{ old('Tahun', $data_ipm_menurut_kabupaten_kota->Tahun) }}" 
        placeholder="Masukkan tahun"
        required
      >
    </div>

    {{-- Input untuk setiap kabupaten/kota --}}
    @php
      $fields = [
        'Kabupaten_Sambas',
        'Kabupaten_Bengkayang',
        'Kabupaten_Landak',
        'Kabupaten_Mempawah',
        'Kabupaten_Sanggau',
        'Kabupaten_Ketapang',
        'Kabupaten_Sintang',
        'Kabupaten_Kapuas_Hulu',
        'Kabupaten_Sekadau',
        'Kabupaten_Melawi',
        'Kabupaten_Kayong_Utara',
        'Kabupaten_Kubu_Raya',
        'Kota_Pontianak',
        'Kota_Singkawang',
      ];
    @endphp

    <div class="row">
      @foreach ($fields as $field)
        <div class="col-md-6 mb-3">
          <label class="form-label fw-semibold">{{ str_replace('_', ' ', $field) }}</label>
          <input 
            type="number" 
            step="any"
            name="{{ $field }}" 
            id="{{ $field }}" 
            class="form-control" 
            value="{{ old($field, $data_ipm_menurut_kabupaten_kota->$field) }}" 
            placeholder="Masukkan nilai {{ strtolower(str_replace('_', ' ', $field)) }}"
            required
          >
        </div>
      @endforeach
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
