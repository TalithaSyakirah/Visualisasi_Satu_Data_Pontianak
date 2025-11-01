@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-4">
  <div class="col-md-8">
    <div class="card shadow-sm border-0">
      <div class="card-header bg-warning text-white">
        <h4 class="mb-0">Edit Data Tingkat Inflasi Kota Pontianak</h4>
      </div>

      <div class="card-body">
        <form 
          action="{{ route('data_tingkat_inflasi_kota_pontianak.update', $data_tingkat_inflasi->id) }}" 
          method="POST"
        >
          @csrf
          @method('PUT')

          {{-- Tahun --}}
          <div class="mb-3">
            <label for="Tahun" class="form-label fw-semibold">Tahun</label>
            <input 
              type="number" 
              name="Tahun" 
              id="Tahun" 
              class="form-control" 
              value="{{ old('Tahun', $data_tingkat_inflasi->Tahun) }}" 
              required
            >
          </div>

          {{-- Jumlah Tingkat Inflasi --}}
          <div class="mb-3">
            <label for="Jumlah" class="form-label fw-semibold">Tingkat Inflasi (%)</label>
            <input 
              type="number" 
              step="any" 
              name="Jumlah" 
              id="Jumlah" 
              class="form-control" 
              value="{{ old('Jumlah', $data_tingkat_inflasi->Jumlah) }}" 
              required
            >
          </div>

          {{-- Tombol Aksi --}}
          <div class="d-flex mt-3">
            <button type="submit" class="btn btn-primary me-2">Update Data</button>
            <a href="{{ route('dashboard.index') }}" class="btn btn-secondary">Cancel</a>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
@endsection
