@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-4">
  <div class="col-md-8">
    <div class="card shadow-sm border-0">
      <div class="card-header bg-warning text-white">
        <h4 class="mb-0">Edit Data Jumlah Penduduk</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('data_jumlah_penduduk_kota_pontianak.update', $jumlah_penduduk_Pontianak->id) }}" method="POST">
          @csrf
          @method('PUT')

          <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input 
              type="number" 
              name="tahun" 
              id="tahun" 
              class="form-control" 
              value="{{ old('tahun', $jumlah_penduduk_Pontianak->{'Tahun'}) }}" 
              required>
          </div>

          <div class="mb-3">
            <label for="laki_laki" class="form-label">Jumlah Laki-laki</label>
            <input 
              type="number" 
              name="laki_laki" 
             id="laki_laki" 
              class="form-control" 
              value="{{ old('laki_laki', $jumlah_penduduk_Pontianak->{'Laki_Laki'}) }}" 
              required>
          </div>

          <div class="mb-3">
            <label for="perempuan" class="form-label">Jumlah Perempuan</label>
            <input 
              type="number" 
              name="perempuan" 
              id="perempuan" 
              class="form-control" 
              value="{{ old('perempuan', $jumlah_penduduk_Pontianak->{'Perempuan'}) }}" 
              required>
          </div>

          <div class="mb-3">
            <label for="jumlah" class="form-label">Total Penduduk</label>
            <input 
              type="number" 
              name="jumlah" 
              id="jumlah" 
              class="form-control" 
              value="{{ old('jumlah', $jumlah_penduduk_Pontianak->{('Jumlah')}) }}" 
              required>
          </div>

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