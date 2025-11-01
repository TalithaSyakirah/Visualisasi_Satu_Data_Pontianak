@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-4">
  <div class="col-md-8">
    <div class="card shadow-sm border-0">
      <div class="card-header bg-warning text-white">
        <h4 class="mb-0">Edit Data IPM Kota Pontianak Menurut Komponen Pembentuknya</h4>
      </div>

      <div class="card-body">
        <form 
          action="{{ route('data_ipm_kota_pontianak_menurut_komponen_pembentuknya.update', $data_ipm_menurut_pembentuk->id) }}" 
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
              value="{{ old('Tahun', $data_ipm_menurut_pembentuk->Tahun) }}" 
              required
            >
          </div>

          {{-- Komponen Pembentuk IPM --}}
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="Angka_Harapan_Hidup_(Tahun)" class="form-label fw-semibold">Angka Harapan Hidup (Tahun)</label>
              <input 
                type="number" 
                step="any"
                name="Angka_Harapan_Hidup_(Tahun)" 
                id="Angka_Harapan_Hidup_(Tahun)" 
                class="form-control" 
                value="{{ old('Angka_Harapan_Hidup_(Tahun)', $data_ipm_menurut_pembentuk->{'Angka_Harapan_Hidup_(Tahun)'}) }}" 
                required
              >
            </div>

            <div class="col-md-6 mb-3">
              <label for="Harapan_Lama_Sekolah_(Tahun)" class="form-label fw-semibold">Harapan Lama Sekolah (Tahun)</label>
              <input 
                type="number" 
                step="any"
                name="Harapan_Lama_Sekolah_(Tahun)" 
                id="Harapan_Lama_Sekolah_(Tahun)" 
                class="form-control" 
                value="{{ old('Harapan_Lama_Sekolah_(Tahun)', $data_ipm_menurut_pembentuk->{'Harapan_Lama_Sekolah_(Tahun)'}) }}" 
                required
              >
            </div>

            <div class="col-md-6 mb-3">
              <label for="Rata_Rata_Lama_Sekolah_(Tahun)" class="form-label fw-semibold">Rata-rata Lama Sekolah (Tahun)</label>
              <input 
                type="number" 
                step="any"
                name="Rata_Rata_Lama_Sekolah_(Tahun)" 
                id="Rata_Rata_Lama_Sekolah_(Tahun)" 
                class="form-control" 
                value="{{ old('Rata_Rata_Lama_Sekolah_(Tahun)', $data_ipm_menurut_pembentuk->{'Rata_Rata_Lama_Sekolah_(Tahun)'}) }}" 
                required
              >
            </div>

            <div class="col-md-6 mb-3">
              <label for="Pengeluran_Per_Kapita_(Ribu_Rupiah)" class="form-label fw-semibold">Pengeluaran Per Kapita (Ribu Rupiah)</label>
              <input 
                type="number" 
                step="any"
                name="Pengeluran_Per_Kapita_(Ribu_Rupiah)" 
                id="Pengeluran_Per_Kapita_(Ribu_Rupiah)" 
                class="form-control" 
                value="{{ old('Pengeluran_Per_Kapita_(Ribu_Rupiah)', $data_ipm_menurut_pembentuk->{'Pengeluran_Per_Kapita_(Ribu_Rupiah)'}) }}" 
                required
              >
            </div>

            <div class="col-md-12 mb-3">
              <label for="Indeks_Pembangunan_Manusia" class="form-label fw-semibold">Indeks Pembangunan Manusia</label>
              <input 
                type="number" 
                step="any"
                name="Indeks_Pembangunan_Manusia" 
                id="Indeks_Pembangunan_Manusia" 
                class="form-control" 
                value="{{ old('Indeks_Pembangunan_Manusia', $data_ipm_menurut_pembentuk->Indeks_Pembangunan_Manusia) }}" 
                required
              >
            </div>
          </div>

          {{-- Tombol --}}
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
