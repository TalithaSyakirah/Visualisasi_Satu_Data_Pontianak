@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-4">
  <div class="col-md-8">
    <div class="card shadow-sm border-0">
      <div class="card-header bg-warning text-white">
        <h4 class="mb-0">Edit Data Kondisi Ketenagakerjaan Kota Pontianak</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('data_kondisi_ketenagakerjaan_kota_pontianak.update', $data_kondisi_ketenagakerjaan->id) }}" method="POST">
          @csrf
          @method('PUT')

          {{-- Tahun --}}
          <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input 
              type="number" 
              name="Tahun" 
              id="tahun" 
              class="form-control" 
              value="{{ old('Tahun', $data_kondisi_ketenagakerjaan->{'Tahun'}) }}" 
              required>
          </div>

          {{-- Angkatan Kerja --}}
          <div class="mb-3">
            <label for="angkatan_kerja" class="form-label">Jumlah Angkatan Kerja</label>
            <input 
              type="number" 
              name="Angkatan_Kerja" 
              id="angkatan_kerja" 
              class="form-control" 
              value="{{ old('Angkatan_Kerja', $data_kondisi_ketenagakerjaan->{'Angkatan_Kerja'}) }}" 
              required>
          </div>

          {{-- Bukan Angkatan Kerja --}}
          <div class="mb-3">
            <label for="bukan_angkatan_kerja" class="form-label">Jumlah Bukan Angkatan Kerja</label>
            <input 
              type="number" 
              name="Bukan_Angkatan_Kerja" 
              id="bukan_angkatan_kerja" 
              class="form-control" 
              value="{{ old('Bukan_Angkatan_Kerja', $data_kondisi_ketenagakerjaan->{'Bukan_Angkatan_Kerja'}) }}" 
              required>
          </div>

          {{-- Jumlah Total --}}
          <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah Total</label>
            <input 
              type="number" 
              name="Jumlah" 
              id="jumlah" 
              class="form-control" 
              value="{{ old('Jumlah', $data_kondisi_ketenagakerjaan->{'Jumlah'}) }}" 
              required>
          </div>

          {{-- Tombol Aksi --}}
          <div class="d-flex">
            <button type="submit" class="btn btn-primary me-2">Update Data</button>
            <a href="{{ route('dashboard.index') }}" class="btn btn-secondary">Cancel</a>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
@endsection
