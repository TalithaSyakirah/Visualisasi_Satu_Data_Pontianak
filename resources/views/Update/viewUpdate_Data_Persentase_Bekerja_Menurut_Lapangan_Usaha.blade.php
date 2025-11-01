@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-4">
  <div class="col-md-10">
    <div class="card shadow-sm border-0">
      <div class="card-header bg-warning text-white">
        <h4 class="mb-0">Edit Data Persentase Bekerja Menurut Lapangan Usaha</h4>
      </div>

      <div class="card-body">
        <form 
          action="{{ route('data_persentase_bekerja_menurut_lapangan_usaha.update', $data_bekerja_lapangan_usaha->id) }}" 
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
              value="{{ old('Tahun', $data_bekerja_lapangan_usaha->Tahun) }}" 
              required
            >
          </div>

          {{-- Input untuk setiap bidang usaha --}}
          @php
            $fields = [
              'Pertanian_Perkebunan_Kehutanan_Perburuan_dan_Perikanan' => 'Pertanian, Perkebunan, Kehutanan, Perburuan & Perikanan',
              'Pertambangan_dan_Penggalian' => 'Pertambangan & Penggalian',
              'Industri' => 'Industri',
              'Listrik_Gas_dan_Air_Minum' => 'Listrik, Gas & Air Minum',
              'Konstruksi' => 'Konstruksi',
              'Perdagangan_Rumah_Makan_dan_Jasa_Akomodasi' => 'Perdagangan, Rumah Makan & Jasa Akomodasi',
              'Transportasi_Pergudangan_dan_Komunikasi' => 'Transportasi, Pergudangan & Komunikasi',
              'Lembaga_Keuangan_Real_Estate_Usaha_Perusahaan_dan_Jasa_Persh' => 'Keuangan, Real Estate & Jasa Perusahaan',
              'Jasa_Kemasyarakatan_Sosial_dan_Perorangan' => 'Jasa Kemasyarakatan, Sosial & Perorangan',
              'Jumlah' => 'Jumlah (%)',
            ];
          @endphp

          <div class="row">
            @foreach ($fields as $field => $label)
              <div class="col-md-6 mb-3">
                <label for="{{ $field }}" class="form-label fw-semibold">
                  {{ $label }}
                </label>
                <input 
                  type="number" 
                  step="any"
                  name="{{ $field }}" 
                  id="{{ $field }}" 
                  class="form-control" 
                  value="{{ old($field, $data_bekerja_lapangan_usaha->$field) }}" 
                  required
                >
              </div>
            @endforeach
          </div>

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
