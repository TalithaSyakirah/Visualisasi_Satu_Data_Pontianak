@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-4">
  <div class="col-md-8">
    <div class="card shadow-sm border-0">
      <div class="card-header bg-warning text-white">
        <h4 class="mb-0">Edit Data Tingkat Pengangguran Terbuka Kota Pontianak</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('data_tingkat_pengangguran_terbuka.update', $data_tingkat_pengangguran->id) }}" method="POST">
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
              value="{{ old('Tahun', $data_tingkat_pengangguran->{'Tahun'}) }}" 
              required>
          </div>

          {{-- Jumlah Tingkat Pengangguran --}}
          <div class="mb-3">
            <label for="jumlah" class="form-label">Tingkat Pengangguran Terbuka (%)</label>
            <input 
              type="number" 
              step="0.01"
              name="Jumlah" 
              id="jumlah" 
              class="form-control" 
              value="{{ old('Jumlah', $data_tingkat_pengangguran->{'Jumlah'}) }}" 
              required>
          </div>

          {{-- Tombol --}}
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
