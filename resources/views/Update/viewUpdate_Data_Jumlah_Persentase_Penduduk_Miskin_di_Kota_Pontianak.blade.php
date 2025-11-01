@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-4">
  <div class="col-md-8">
    <div class="card shadow-sm border-0">
      <div class="card-header bg-warning text-white">
        <h4 class="mb-0">Edit Data Jumlah Persentase Penduduk Miskin di Kota Pontianak</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('data_jumlah_persentase_miskin.update', $data_jumlah_persentase_miskin->id) }}" method="POST">
          @csrf
          @method('PUT')

          {{-- Tahun --}}
          <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input 
              type="number" 
              name="tahun" 
              id="tahun" 
              class="form-control" 
              value="{{ old('tahun', $data_jumlah_persentase_miskin->{'Tahun'}) }}" 
              required>
          </div>

          {{-- Garis Kemiskinan --}}
          <div class="mb-3">
            <label for="garis_kemiskinan" class="form-label">Garis Kemiskinan (Rp/Kapita/Bulan)</label>
            <input 
              type="number" 
              step="0.01"
              name="garis_kemiskinan_(rp/kapita/bulan)" 
              id="garis_kemiskinan" 
              class="form-control" 
              value="{{ old('garis_kemiskinan_(rp/kapita/bulan)', $data_jumlah_persentase_miskin->{'Garis_Kemiskinan_(Rp/Kapita/Bulan)'}) }}" 
              required>
          </div>

          {{-- Jumlah Penduduk Miskin --}}
          <div class="mb-3">
            <label for="jumlah_penduduk_miskin" class="form-label">Jumlah Penduduk Miskin</label>
            <input 
              type="number" 
              step="0.01"
              name="jumlah_penduduk_miskin" 
              id="jumlah_penduduk_miskin" 
              class="form-control" 
              value="{{ old('jumlah_penduduk_miskin', $data_jumlah_persentase_miskin->{'Jumlah_Penduduk_Miskin'}) }}" 
              required>
          </div>

          {{-- Persentase Penduduk Miskin --}}
          <div class="mb-3">
            <label for="persentase_penduduk_miskin" class="form-label">Persentase Penduduk Miskin (%)</label>
            <input 
              type="number" 
              step="0.01"
              name="persentase_penduduk_miskin" 
              id="persentase_penduduk_miskin" 
              class="form-control" 
              value="{{ old('persentase_penduduk_miskin', $data_jumlah_persentase_miskin->{'Persentase_Penduduk_Miskin'}) }}" 
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
