@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-4">
  <div class="col-md-8">
    <div class="card shadow-sm border-0">
      <div class="card-header bg-warning text-white">
        <h4 class="mb-0">Edit Data Kontribusi Kategori Terhadap PDRB Kota Pontianak</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('data_kontribusi_kategori_terhadap_pdrb_kota_pontianak.update', $data_kontribusi_kategori->id) }}" method="POST">
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
              value="{{ old('Tahun', $data_kontribusi_kategori->Tahun) }}" 
              required>
          </div>

          {{-- Daftar Input Semua Kolom --}}
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Pertanian, Kehutanan, dan Perikanan</label>
              <input type="number" step="0.01" name="Pertanian_Kehutanan_dan_Perikanan" class="form-control"
                     value="{{ old('Pertanian_Kehutanan_dan_Perikanan', $data_kontribusi_kategori->Pertanian_Kehutanan_dan_Perikanan) }}" required>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Pertambangan dan Penggalian</label>
              <input type="number" step="0.01" name="Pertambangan_dan_Penggalian" class="form-control"
                     value="{{ old('Pertambangan_dan_Penggalian', $data_kontribusi_kategori->Pertambangan_dan_Penggalian) }}" required>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Industri Pengolahan</label>
              <input type="number" step="0.01" name="Industri_Pengolahan" class="form-control"
                     value="{{ old('Industri_Pengolahan', $data_kontribusi_kategori->Industri_Pengolahan) }}" required>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Pengadaan Listrik dan Gas</label>
              <input type="number" step="0.01" name="Pengadaan_Listrik_dan_Gas" class="form-control"
                     value="{{ old('Pengadaan_Listrik_dan_Gas', $data_kontribusi_kategori->Pengadaan_Listrik_dan_Gas) }}" required>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Pengadaan Air, Pengelolaan Sampah, Limbah, dan Daur Ulang</label>
              <input type="number" step="0.01" name="Pengadaan_Air_Pengelolaan_Sampah_Limbah_dan_Daur_Ulang" class="form-control"
                     value="{{ old('Pengadaan_Air_Pengelolaan_Sampah_Limbah_dan_Daur_Ulang', $data_kontribusi_kategori->Pengadaan_Air_Pengelolaan_Sampah_Limbah_dan_Daur_Ulang) }}" required>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Konstruksi</label>
              <input type="number" step="0.01" name="Konstruksi" class="form-control"
                     value="{{ old('Konstruksi', $data_kontribusi_kategori->Konstruksi) }}" required>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Perdagangan, Reparasi Mobil & Sepeda Motor</label>
              <input type="number" step="0.01" name="Perdagangan_Besar_dan_Eceran_Reparasi_Mobil_dan_Sepeda_Motor" class="form-control"
                     value="{{ old('Perdagangan_Besar_dan_Eceran_Reparasi_Mobil_dan_Sepeda_Motor', $data_kontribusi_kategori->Perdagangan_Besar_dan_Eceran_Reparasi_Mobil_dan_Sepeda_Motor) }}" required>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Transportasi dan Pergudangan</label>
              <input type="number" step="0.01" name="Transportasi_dan_Pergudangan" class="form-control"
                     value="{{ old('Transportasi_dan_Pergudangan', $data_kontribusi_kategori->Transportasi_dan_Pergudangan) }}" required>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Penyediaan Akomodasi dan Makan Minuman</label>
              <input type="number" step="0.01" name="Penyediaan_Akomodasi_dan_Makan_Minuman" class="form-control"
                     value="{{ old('Penyediaan_Akomodasi_dan_Makan_Minuman', $data_kontribusi_kategori->Penyediaan_Akomodasi_dan_Makan_Minuman) }}" required>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Informasi dan Komunikasi</label>
              <input type="number" step="0.01" name="Informasi_dan_Komunikasi" class="form-control"
                     value="{{ old('Informasi_dan_Komunikasi', $data_kontribusi_kategori->Informasi_dan_Komunikasi) }}" required>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Jasa Keuangan dan Asuransi</label>
              <input type="number" step="0.01" name="Jasa_Keuangan_dan_Asuransi" class="form-control"
                     value="{{ old('Jasa_Keuangan_dan_Asuransi', $data_kontribusi_kategori->Jasa_Keuangan_dan_Asuransi) }}" required>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Real Estate</label>
              <input type="number" step="0.01" name="Real_Estate" class="form-control"
                     value="{{ old('Real_Estate', $data_kontribusi_kategori->Real_Estate) }}" required>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Jasa Perusahaan</label>
              <input type="number" step="0.01" name="Jasa_Perusahaan" class="form-control"
                     value="{{ old('Jasa_Perusahaan', $data_kontribusi_kategori->Jasa_Perusahaan) }}" required>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Administrasi Pemerintahan, Pertahanan, dan Jaminan Sosial Wajib</label>
              <input type="number" step="0.01" name="Administrasi_Pemerintahan_Pertahanan_dan_Jaminan_Sosial_Wajib" class="form-control"
                     value="{{ old('Administrasi_Pemerintahan_Pertahanan_dan_Jaminan_Sosial_Wajib', $data_kontribusi_kategori->Administrasi_Pemerintahan_Pertahanan_dan_Jaminan_Sosial_Wajib) }}" required>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Jasa Pendidikan</label>
              <input type="number" step="0.01" name="Jasa_Pendidikan" class="form-control"
                     value="{{ old('Jasa_Pendidikan', $data_kontribusi_kategori->Jasa_Pendidikan) }}" required>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Jasa Kesehatan dan Kegiatan Sosial</label>
              <input type="number" step="0.01" name="Jasa_Kesehatan_dan_Kegiatan_Sosial" class="form-control"
                     value="{{ old('Jasa_Kesehatan_dan_Kegiatan_Sosial', $data_kontribusi_kategori->Jasa_Kesehatan_dan_Kegiatan_Sosial) }}" required>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Jasa Lainnya</label>
              <input type="number" step="0.01" name="Jasa_Lainnya" class="form-control"
                     value="{{ old('Jasa_Lainnya', $data_kontribusi_kategori->Jasa_Lainnya) }}" required>
            </div>
          </div>

          {{-- Jumlah --}}
          <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah Total</label>
            <input 
              type="number" 
              step="0.01" 
              name="Jumlah" 
              id="jumlah" 
              class="form-control" 
              value="{{ old('Jumlah', $data_kontribusi_kategori->Jumlah) }}" 
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
