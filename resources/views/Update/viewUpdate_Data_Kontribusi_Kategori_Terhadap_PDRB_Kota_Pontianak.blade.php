@extends('layouts.app')

@section('title', 'Edit Data Kontribusi Kategori terhadap PDRB Kota Pontianak')

@section('content')
  <div class="container-custom">

    <!-- Judul -->
    <div class="mb-4">
      <h2 class="fw-bold text-uppercase" style="font-size: 1.5rem; color:#212529; margin-bottom: 5px;">
        Edit Data Kontribusi Kategori terhadap PDRB Kota Pontianak
      </h2>
    </div>

    <!-- Form Edit Data -->
    <form
      action="{{ route('data_kontribusi_kategori_terhadap_pdrb_kota_pontianak.update', $data_kontribusi_kategori->id) }}"
      method="POST" class="mt-3 mb-4">
      @csrf
      @method('PUT')

      {{-- Tahun --}}
      <div class="mb-3">
        <label class="form-label fw-semibold">Tahun</label>
        <input type="number" name="Tahun" id="tahun" class="form-control"
          value="{{ old('Tahun', $data_kontribusi_kategori->Tahun) }}" placeholder="Masukkan tahun" required>
      </div>

      {{-- Input Kategori --}}
      <div class="mb-3">
        <label class="form-label fw-semibold">Pertanian, Kehutanan, dan Perikanan</label>
        <input type="number" step="0.01" name="Pertanian_Kehutanan_dan_Perikanan" class="form-control"
          value="{{ old('Pertanian_Kehutanan_dan_Perikanan', $data_kontribusi_kategori->Pertanian_Kehutanan_dan_Perikanan) }}"
          required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Pertambangan dan Penggalian</label>
        <input type="number" step="0.01" name="Pertambangan_dan_Penggalian" class="form-control"
          value="{{ old('Pertambangan_dan_Penggalian', $data_kontribusi_kategori->Pertambangan_dan_Penggalian) }}"
          required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Industri Pengolahan</label>
        <input type="number" step="0.01" name="Industri_Pengolahan" class="form-control"
          value="{{ old('Industri_Pengolahan', $data_kontribusi_kategori->Industri_Pengolahan) }}" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Pengadaan Listrik dan Gas</label>
        <input type="number" step="0.01" name="Pengadaan_Listrik_dan_Gas" class="form-control"
          value="{{ old('Pengadaan_Listrik_dan_Gas', $data_kontribusi_kategori->Pengadaan_Listrik_dan_Gas) }}" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Pengadaan Air, Pengelolaan Sampah, Limbah, dan Daur Ulang</label>
        <input type="number" step="0.01" name="Pengadaan_Air_Pengelolaan_Sampah_Limbah_dan_Daur_Ulang"
          class="form-control"
          value="{{ old('Pengadaan_Air_Pengelolaan_Sampah_Limbah_dan_Daur_Ulang', $data_kontribusi_kategori->Pengadaan_Air_Pengelolaan_Sampah_Limbah_dan_Daur_Ulang) }}"
          required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Konstruksi</label>
        <input type="number" step="0.01" name="Konstruksi" class="form-control"
          value="{{ old('Konstruksi', $data_kontribusi_kategori->Konstruksi) }}" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Perdagangan Besar dan Eceran; Reparasi Mobil dan Sepeda Motor</label>
        <input type="number" step="0.01" name="Perdagangan_Besar_dan_Eceran_Reparasi_Mobil_dan_Sepeda_Motor"
          class="form-control"
          value="{{ old('Perdagangan_Besar_dan_Eceran_Reparasi_Mobil_dan_Sepeda_Motor', $data_kontribusi_kategori->Perdagangan_Besar_dan_Eceran_Reparasi_Mobil_dan_Sepeda_Motor) }}"
          required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Transportasi dan Pergudangan</label>
        <input type="number" step="0.01" name="Transportasi_dan_Pergudangan" class="form-control"
          value="{{ old('Transportasi_dan_Pergudangan', $data_kontribusi_kategori->Transportasi_dan_Pergudangan) }}"
          required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Penyediaan Akomodasi dan Makan Minuman</label>
        <input type="number" step="0.01" name="Penyediaan_Akomodasi_dan_Makan_Minuman" class="form-control"
          value="{{ old('Penyediaan_Akomodasi_dan_Makan_Minuman', $data_kontribusi_kategori->Penyediaan_Akomodasi_dan_Makan_Minuman) }}"
          required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Informasi dan Komunikasi</label>
        <input type="number" step="0.01" name="Informasi_dan_Komunikasi" class="form-control"
          value="{{ old('Informasi_dan_Komunikasi', $data_kontribusi_kategori->Informasi_dan_Komunikasi) }}" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Jasa Keuangan dan Asuransi</label>
        <input type="number" step="0.01" name="Jasa_Keuangan_dan_Asuransi" class="form-control"
          value="{{ old('Jasa_Keuangan_dan_Asuransi', $data_kontribusi_kategori->Jasa_Keuangan_dan_Asuransi) }}" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Real Estate</label>
        <input type="number" step="0.01" name="Real_Estate" class="form-control"
          value="{{ old('Real_Estate', $data_kontribusi_kategori->Real_Estate) }}" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Jasa Perusahaan</label>
        <input type="number" step="0.01" name="Jasa_Perusahaan" class="form-control"
          value="{{ old('Jasa_Perusahaan', $data_kontribusi_kategori->Jasa_Perusahaan) }}" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Administrasi Pemerintahan, Pertahanan, dan Jaminan Sosial Wajib</label>
        <input type="number" step="0.01" name="Administrasi_Pemerintahan_Pertahanan_dan_Jaminan_Sosial_Wajib"
          class="form-control"
          value="{{ old('Administrasi_Pemerintahan_Pertahanan_dan_Jaminan_Sosial_Wajib', $data_kontribusi_kategori->Administrasi_Pemerintahan_Pertahanan_dan_Jaminan_Sosial_Wajib) }}"
          required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Jasa Pendidikan</label>
        <input type="number" step="0.01" name="Jasa_Pendidikan" class="form-control"
          value="{{ old('Jasa_Pendidikan', $data_kontribusi_kategori->Jasa_Pendidikan) }}" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Jasa Kesehatan dan Kegiatan Sosial</label>
        <input type="number" step="0.01" name="Jasa_Kesehatan_dan_Kegiatan_Sosial" class="form-control"
          value="{{ old('Jasa_Kesehatan_dan_Kegiatan_Sosial', $data_kontribusi_kategori->Jasa_Kesehatan_dan_Kegiatan_Sosial) }}"
          required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Jasa Lainnya</label>
        <input type="number" step="0.01" name="Jasa_Lainnya" class="form-control"
          value="{{ old('Jasa_Lainnya', $data_kontribusi_kategori->Jasa_Lainnya) }}" required>
      </div>

      {{-- Jumlah --}}
      <div class="mb-3">
        <label class="form-label fw-semibold">Jumlah (Total)</label>
        <input type="number" step="0.01" name="Jumlah" class="form-control"
          value="{{ old('Jumlah', $data_kontribusi_kategori->Jumlah) }}" placeholder="Masukkan jumlah total" required>
      </div>

      <!-- Tombol Simpan & Cancel -->
      <div class="d-flex justify-content-end mt-4">
        <button type="submit" class="btn"
          style="background-color:#007BFF; color:white; font-weight:600; padding:8px 20px; border-radius:8px;">
          Simpan
        </button>
        <a href="{{ route('dashboard.index') }}" class="btn btn-secondary ms-2"
          style="padding:8px 20px; border-radius:8px;">
          Cancel
        </a>
      </div>

    </form>
  </div>
@endsection