@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-4">
  <div class="col-md-10">
    <div class="card shadow-sm border-0">
      <div class="card-header bg-warning text-white">
        <h4 class="mb-0">Edit Data IPM Kabupaten/Kota di Kalimantan Barat</h4>
      </div>

      <div class="card-body">
        <form 
          action="{{ route('data_ipm_menurut_kabupaten_kota.update', $data_ipm_menurut_kabupaten_kota->id) }}" 
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
              value="{{ old('Tahun', $data_ipm_menurut_kabupaten_kota->Tahun) }}" 
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
                <label for="{{ $field }}" class="form-label fw-semibold">
                  {{ str_replace('_', ' ', $field) }}
                </label>
                <input 
                  type="number" 
                  step="any"
                  name="{{ $field }}" 
                  id="{{ $field }}" 
                  class="form-control" 
                  value="{{ old($field, $data_ipm_menurut_kabupaten_kota->$field) }}" 
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
