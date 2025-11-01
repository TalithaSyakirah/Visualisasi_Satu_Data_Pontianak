@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-4">
  <div class="col-md-10">
    <div class="card shadow-sm border-0">
      <div class="card-header bg-warning text-white">
        <h4 class="mb-0">Edit Data Nilai PDRB Dasar Harga Berlaku Menurut Kategori</h4>
      </div>

      <div class="card-body">
        <form 
          action="{{ route('data_nilai_pdrb_dasar_harga_berlaku_menurut_kategori.update', $data_pdrb_dasar_harga_berlaku->id) }}" 
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
              value="{{ old('Tahun', $data_pdrb_dasar_harga_berlaku->Tahun) }}" 
              required
            >
          </div>

          {{-- Kolom-Kolom Kategori --}}
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label fw-semibold">Pertanian, Kehutanan, dan Perikanan</label>
              <input type="number" step="any" name="Pertanian_Kehutanan_dan_Perikanan" class="form-control" value="{{ old('Pertanian_Kehutanan_dan_Perikanan', $data_pdrb_dasar_harga_berlaku->Pertanian_Kehutanan_dan_Perikanan) }}" required>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label fw-semibold">Pertambangan dan Penggalian</label>
              <input type="number" step="any" name="Pertambangan_dan_Penggalian" class="form-control" value="{{ old('Pertambangan_dan_Penggalian', $data_pdrb_dasar_harga_berlaku->Pertambangan_dan_Penggalian ?? $data_pdrb_dasar_harga_berlaku->pertambangan_dan_Penggalian) }}" required>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label fw-semibold">Industri Pengolahan</label>
              <input type="number" step="any" name="Industri_Pengolahan" class="form-control" value="{{ old('Industri_Pengolahan', $data_pdrb_dasar_harga_berlaku->Industri_Pengolahan) }}" required>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label fw-semibold">Pengadaan Listrik dan Gas</label>
              <input type="number" step="any" name="Pengadaan_Listrik_dan_Gas" class="form-control" value="{{ old('Pengadaan_Listrik_dan_Gas', $data_pdrb_dasar_harga_berlaku->Pengadaan_Listrik_dan_Gas) }}" required>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label fw-semibold">Pengadaan Air, Pengelolaan Sampah, Limbah, dan Daur Ulang</label>
              <input type="number" step="any" name="Pengadaan_Air_Pengelolaan_Sampah_Limbah_dan_Daur_Ulang" class="form-control" value="{{ old('Pengadaan_Air_Pengelolaan_Sampah_Limbah_dan_Daur_Ulang', $data_pdrb_dasar_harga_berlaku->Pengadaan_Air_Pengelolaan_Sampah_Limbah_dan_Daur_Ulang) }}" required>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label fw-semibold">Konstruksi</label>
              <input type="number" step="any" name="Konstruksi" class="form-control" value="{{ old('Konstruksi', $data_pdrb_dasar_harga_berlaku->Konstruksi) }}" required>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label fw-semibold">Perdagangan Besar dan Eceran; Reparasi Mobil dan Sepeda Motor</label>
              <input type="number" step="any" name="Perdagangan_Besar_dan_Eceran_Reparasi_Mobil_dan_Sepeda_Motor" class="form-control" value="{{ old('Perdagangan_Besar_dan_Eceran_Reparasi_Mobil_dan_Sepeda_Motor', $data_pdrb_dasar_harga_berlaku->Perdagangan_Besar_dan_Eceran_Reparasi_Mobil_dan_Sepeda_Motor) }}" required>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label fw-semibold">Transportasi dan Pergudangan</label>
              <input type="number" step="any" name="Transportasi_dan_Pergudangan" class="form-control" value="{{ old('Transportasi_dan_Pergudangan', $data_pdrb_dasar_harga_berlaku->Transportasi_dan_Pergudangan) }}" required>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label fw-semibold">Penyediaan Akomodasi dan Makan Minuman</label>
              <input type="number" step="any" name="Penyediaan_Akomodasi_dan_Makan_Minuman" class="form-control" value="{{ old('Penyediaan_Akomodasi_dan_Makan_Minuman', $data_pdrb_dasar_harga_berlaku->Penyediaan_Akomodasi_dan_Makan_Minuman) }}" required>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label fw-semibold">Informasi dan Komunikasi</label>
              <input type="number" step="any" name="Informasi_dan_Komunikasi" class="form-control" value="{{ old('Informasi_dan_Komunikasi', $data_pdrb_dasar_harga_berlaku->Informasi_dan_Komunikasi) }}" required>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label fw-semibold">Jasa Keuangan dan Asuransi</label>
              <input type="number" step="any" name="Jasa_Keuangan_dan_Asuransi" class="form-control" value="{{ old('Jasa_Keuangan_dan_Asuransi', $data_pdrb_dasar_harga_berlaku->Jasa_Keuangan_dan_Asuransi) }}" required>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label fw-semibold">Real Estate</label>
              <input type="number" step="any" name="Real_Estate" class="form-control" value="{{ old('Real_Estate', $data_pdrb_dasar_harga_berlaku->Real_Estate) }}" required>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label fw-semibold">Jasa Perusahaan</label>
              <input type="number" step="any" name="Jasa_Perusahaan" class="form-control" value="{{ old('Jasa_Perusahaan', $data_pdrb_dasar_harga_berlaku->Jasa_Perusahaan) }}" required>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label fw-semibold">Administrasi Pemerintahan, Pertahanan, dan Jaminan Sosial Wajib</label>
              <input type="number" step="any" name="Administrasi_Pemerintahan_Pertahanan_dan_Jaminan_Sosial_Wajib" class="form-control" value="{{ old('Administrasi_Pemerintahan_Pertahanan_dan_Jaminan_Sosial_Wajib', $data_pdrb_dasar_harga_berlaku->Administrasi_Pemerintahan_Pertahanan_dan_Jaminan_Sosial_Wajib) }}" required>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label fw-semibold">Jasa Pendidikan</label>
              <input type="number" step="any" name="Jasa_Pendidikan" class="form-control" value="{{ old('Jasa_Pendidikan', $data_pdrb_dasar_harga_berlaku->Jasa_Pendidikan) }}" required>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label fw-semibold">Jasa Kesehatan dan Kegiatan Sosial</label>
              <input type="number" step="any" name="Jasa_Kesehatan_dan_Kegiatan_Sosial" class="form-control" value="{{ old('Jasa_Kesehatan_dan_Kegiatan_Sosial', $data_pdrb_dasar_harga_berlaku->Jasa_Kesehatan_dan_Kegiatan_Sosial) }}" required>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label fw-semibold">Jasa Lainnya</label>
              <input type="number" step="any" name="Jasa_Lainnya" class="form-control" value="{{ old('Jasa_Lainnya', $data_pdrb_dasar_harga_berlaku->Jasa_Lainnya) }}" required>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label fw-semibold">Jumlah (Total)</label>
              <input type="number" step="any" name="Jumlah" class="form-control" value="{{ old('Jumlah', $data_pdrb_dasar_harga_berlaku->Jumlah) }}" required>
            </div>
          </div>

          {{-- Tombol --}}
          <div class="d-flex mt-3">
            <button type="submit" class="btn btn-primary me-2">Update Data</button>
            <a href="{{ route('dashboard.index') }}" class="btn btn-secondary">Batal</a>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
@endsection
