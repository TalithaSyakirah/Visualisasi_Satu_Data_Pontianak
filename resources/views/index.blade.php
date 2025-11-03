@extends('layouts.app')
@section('content')
  <!-- <pre>
              {{ print_r($columnsDataJumlahPendudukKotaPontianak) }}
              </pre> -->
  {{-- ====================== BAGIAN: DATA LUAS KECAMATAN ====================== --}}


  <div class="container-custom">
    <!-- Judul dan Deskripsi -->
    <div class="mb-4">
      <h2 class="fw-bold text-uppercase" style="font-size: 1.5rem; color:#212529; margin-bottom: 5px;">
        Data Luas Wilayah Per Kecamatan
      </h2>

    </div>

    <!-- Form Tambah Data -->
    <form action="{{ route('data_luas_wilayah.store') }}" method="POST" class="mt-3 mb-4">
      @csrf

      <div class="mb-3">
        <label for="kecamatan" class="form-label fw-semibold">Kecamatan</label>
        <input type="text" id="kecamatan" name="Kecamatan" class="form-control" placeholder="Masukkan nama kecamatan"
          required>
      </div>

      <div class="mb-3">
        <label for="luas" class="form-label fw-semibold">Luas Kecamatan (Km²)</label>
        <input type="number" id="luas" name="Luas_(Km^2)" class="form-control" placeholder="Masukkan luas wilayah"
          required>
      </div>


      <div class="d-flex justify-content-end mt-3">
        <button type="submit" class="btn"
          style="background-color:#007BFF; color:white; font-weight:600; padding: 8px 20px; border-radius:8px;">
          Tambah
        </button>
      </div>
    </form>

    <!-- Garis Pemisah -->
    <hr class="my-4">

    <!-- Tabel Data -->
    <table class="table table-bordered table-hover text-center align-middle">
      <thead style="background-color:#f8f9fa;">
        <tr>
          <th>No</th>
          @foreach ($columnsDataLuasWilayahPerKecamatan as $column)
            @if (!in_array($column, ['id', 'created_at', 'updated_at']))
              <th>{{ ucwords(str_replace(['_', '__'], [' ', ' '], preg_replace('/\s*\(.*\)\s*/', '', $column))) }}</th>
            @endif
          @endforeach
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
        @forelse ($DataLuasWilayahPerKecamatan as $index => $data)
          <tr>
            <td>{{ $index + 1 }}</td>
            @foreach ($columnsDataLuasWilayahPerKecamatan as $column)
              @if (!in_array($column, ['id', 'created_at', 'updated_at']))
                <td>{{ $data->$column }}</td>
              @endif
            @endforeach
            <td>
              <a href="{{ route('data_luas_wilayah.viewUpdate', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
              <form action="{{ route('data_luas_wilayah.destroy', $data->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">
                  Hapus
                </button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="{{ count($columnsDataLuasWilayahPerKecamatan) + 2 }}" class="text-muted">Belum ada data</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>


  {{-- ====================== BAGIAN: JUMLAH PENDUDUK ====================== --}}
  <div class="container-custom">

    <!-- Judul -->
    <div class="mb-4">
      <h2 class="fw-bold text-uppercase" style="font-size: 1.5rem; color:#212529; margin-bottom: 5px;">
        Data Jumlah Penduduk Kota Pontianak
      </h2>
    </div>

    <!-- Form Tambah Data -->
    <form action="{{ route('data_jumlah_penduduk_kota_pontianak.store') }}" method="POST" class="mt-3 mb-4">
      @csrf

      <div class="mb-3">
        <label for="tahun" class="form-label fw-semibold">Tahun</label>
        <input type="number" id="tahun" name="Tahun" class="form-control" placeholder="Masukkan tahun" required>
      </div>

      <div class="mb-3">
        <label for="laki" class="form-label fw-semibold">Jumlah Laki-laki</label>
        <input type="number" id="laki" name="Laki_Laki" class="form-control" placeholder="Masukkan jumlah laki-laki"
          required>
      </div>

      <div class="mb-3">
        <label for="perempuan" class="form-label fw-semibold">Jumlah Perempuan</label>
        <input type="number" id="perempuan" name="Perempuan" class="form-control" placeholder="Masukkan jumlah perempuan"
          required>
      </div>

      <div class="mb-3">
        <label for="jumlah" class="form-label fw-semibold">Total Penduduk</label>
        <input type="number" id="jumlah" name="Jumlah" class="form-control" placeholder="Masukkan total penduduk"
          required>
      </div>

      <!-- Tombol Tambah rata kanan -->
      <div class="d-flex justify-content-end mt-3">
        <button type="submit" class="btn"
          style="background-color:#007BFF; color:white; font-weight:600; padding: 8px 20px; border-radius:8px;">
          Tambah
        </button>
      </div>
    </form>

    <!-- Garis pemisah -->
    <hr class="my-4">

    <!-- Tabel Data -->
    <table class="table table-bordered table-hover text-center align-middle">
      <thead style="background-color:#f8f9fa;">
        <tr>
          <th>No</th>
          @foreach ($columnsDataJumlahPendudukKotaPontianak as $column)
            @if (!in_array($column, ['id', 'created_at', 'updated_at']))
              <th>{{ ucwords(str_replace(['_', '__'], [' ', ' '], preg_replace('/\s*\(.*\)\s*/', '', $column))) }}</th>
            @endif
          @endforeach
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
        @forelse ($DataJumlahPendudukKotaPontianak as $index => $data)
          <tr>
            <td>{{ $index + 1 }}</td>
            @foreach ($columnsDataJumlahPendudukKotaPontianak as $column)
              @if (!in_array($column, ['id', 'created_at', 'updated_at']))
                <td>{{ $data->$column }}</td>
              @endif
            @endforeach
            <td>
              <a href="{{ route('data_jumlah_penduduk_kota_pontianak.viewUpdate', $data->id) }}"
                class="btn btn-warning btn-sm">Edit</a>
              <form action="{{ route('data_jumlah_penduduk_kota_pontianak.destroy', $data->id) }}" method="POST"
                class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">
                  Hapus
                </button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="{{ count($columnsDataJumlahPendudukKotaPontianak) + 2 }}" class="text-muted">Belum ada data</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>



  {{-- ====================== BAGIAN: JUMLAH & PERSENTASE PENDUDUK MISKIN ====================== --}}
  <div class="container-custom">

    <!-- Judul -->
    <div class="mb-4">
      <h2 class="fw-bold text-uppercase" style="font-size: 1.5rem; color:#212529; margin-bottom: 5px;">
        Data Jumlah dan Persentase Penduduk Miskin di Kota Pontianak
      </h2>
    </div>

    <!-- Form Tambah Data -->
    <form action="{{ route('data_jumlah_persentase_miskin.store') }}" method="POST" class="mt-3 mb-4">
      @csrf

      <div class="mb-3">
        <label for="tahun" class="form-label fw-semibold">Tahun</label>
        <input type="number" id="tahun" name="Tahun" class="form-control" placeholder="Masukkan tahun" required>
      </div>

      <div class="mb-3">
        <label for="garis" class="form-label fw-semibold">Garis Kemiskinan (Rp/Kapita/Bulan)</label>
        <input type="number" id="garis" name="Garis_Kemiskinan_(Rp/Kapita/Bulan)" class="form-control"
          placeholder="Masukkan garis kemiskinan" required>
      </div>

      <div class="mb-3">
        <label for="jumlah" class="form-label fw-semibold">Jumlah Penduduk Miskin</label>
        <input type="number" step="0.01" id="jumlah" name="Jumlah_Penduduk_Miskin" class="form-control"
          placeholder="Masukkan jumlah penduduk miskin" required>
      </div>

      <div class="mb-3">
        <label for="persentase" class="form-label fw-semibold">Persentase Penduduk Miskin (%)</label>
        <input type="number" step="0.01" id="persentase" name="Persentase_Penduduk_Miskin" class="form-control"
          placeholder="Masukkan persentase penduduk miskin" required>
      </div>

      <!-- Tombol Tambah -->
      <div class="d-flex justify-content-end mt-3">
        <button type="submit" class="btn"
          style="background-color:#007BFF; color:white; font-weight:600; padding: 8px 20px; border-radius:8px;">
          Tambah
        </button>
      </div>
    </form>

    <!-- Garis Pemisah -->
    <hr class="my-4">

    <!-- Tabel Data -->
    <table class="table table-bordered table-hover text-center align-middle">
      <thead style="background-color:#f8f9fa;">
        <tr>
          <th>No</th>
          @foreach ($columnsDataJumlahPersentasePendudukMiskindiKotaPontianak as $column)
            @if (!in_array($column, ['id', 'created_at', 'updated_at']))
              <th>{{ ucwords(str_replace(['_', '__'], [' ', ' '], preg_replace('/\s*\(.*\)\s*/', '', $column))) }}</th>
            @endif
          @endforeach
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
        @forelse ($DataJumlahPersentasePendudukMiskindiKotaPontianak as $index => $data)
          <tr>
            <td>{{ $index + 1 }}</td>
            @foreach ($columnsDataJumlahPersentasePendudukMiskindiKotaPontianak as $column)
              @if (!in_array($column, ['id', 'created_at', 'updated_at']))
                <td>{{ $data->$column }}</td>
              @endif
            @endforeach
            <td>
              <a href="{{ route('data_jumlah_persentase_miskin.viewUpdate', $data->id) }}"
                class="btn btn-warning btn-sm">Edit</a>
              <form action="{{ route('data_jumlah_persentase_miskin.destroy', $data->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">
                  Hapus
                </button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="{{ count($columnsDataJumlahPersentasePendudukMiskindiKotaPontianak) + 2 }}" class="text-muted">
              Belum ada data
            </td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>



  {{-- ====================== BAGIAN: DATA IPM KOTA PONTIANAK MENURURUT KOMPONEN PEMBENTUKNYA ====================== --}}


  <div class="container-custom">

    <!-- Judul -->
    <div class="mb-4">
      <h2 class="fw-bold text-uppercase" style="font-size: 1.5rem; color:#212529; margin-bottom: 5px;">
        Indeks Pembangunan Manusia (IPM) Kota Pontianak Menurut Komponen Pembentuknya
      </h2>
    </div>

    <!-- Form Tambah Data -->
    <form action="{{ route('data_ipm_kota_pontianak_menurut_komponen_pembentuknya.store') }}" method="POST"
      class="mt-3 mb-4">
      @csrf

      <div class="mb-3">
        <label for="tahun" class="form-label fw-semibold">Tahun</label>
        <input type="number" id="tahun" name="Tahun" class="form-control" placeholder="Masukkan tahun" required>
      </div>

      <div class="mb-3">
        <label for="ahh" class="form-label fw-semibold">Angka Harapan Hidup (Tahun)</label>
        <input type="number" step="0.01" id="ahh" name="Angka_Harapan_Hidup_(Tahun)" class="form-control"
          placeholder="Masukkan angka harapan hidup" required>
      </div>

      <div class="mb-3">
        <label for="hls" class="form-label fw-semibold">Harapan Lama Sekolah (Tahun)</label>
        <input type="number" step="0.01" id="hls" name="Harapan_Lama_Sekolah_(Tahun)" class="form-control"
          placeholder="Masukkan harapan lama sekolah" required>
      </div>

      <div class="mb-3">
        <label for="rls" class="form-label fw-semibold">Rata-rata Lama Sekolah (Tahun)</label>
        <input type="number" step="0.01" id="rls" name="Rata_Rata_Lama_Sekolah_(Tahun)" class="form-control"
          placeholder="Masukkan rata-rata lama sekolah" required>
      </div>

      <div class="mb-3">
        <label for="pengeluaran" class="form-label fw-semibold">Pengeluaran Per Kapita (Ribu Rupiah)</label>
        <input type="number" id="pengeluaran" name="Pengeluran_Per_Kapita_(Ribu_Rupiah)" class="form-control"
          placeholder="Masukkan pengeluaran per kapita" required>
      </div>

      <div class="mb-3">
        <label for="ipm" class="form-label fw-semibold">Indeks Pembangunan Manusia (IPM)</label>
        <input type="number" step="0.01" id="ipm" name="Indeks_Pembangunan_Manusia" class="form-control"
          placeholder="Masukkan nilai IPM" required>
      </div>

      <!-- Tombol Tambah -->
      <div class="d-flex justify-content-end mt-3">
        <button type="submit" class="btn"
          style="background-color:#007BFF; color:white; font-weight:600; padding: 8px 20px; border-radius:8px;">
          Tambah
        </button>
      </div>
    </form>

    <!-- Garis pemisah -->
    <hr class="my-4">

    <!-- Tabel Data -->
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead style="background-color:#f8f9fa;">
          <tr>
            <th>No</th>
            @foreach ($columnsDataIPMKotaPontianakMenurutKomponenPembentuknya as $column)
              @if (!in_array($column, ['id', 'created_at', 'updated_at']))
                <th>{{ ucwords(str_replace(['_', '__'], [' ', ' '], preg_replace('/\s*\(.*\)\s*/', '', $column))) }}</th>
              @endif
            @endforeach
            <th>Aksi</th>
          </tr>
        </thead>

        <tbody>
          @forelse ($DataIPMKotaPontianakMenurutKomponenPembentuknya as $index => $data)
            <tr>
              <td>{{ $index + 1 }}</td>
              @foreach ($columnsDataIPMKotaPontianakMenurutKomponenPembentuknya as $column)
                @if (!in_array($column, ['id', 'created_at', 'updated_at']))
                  <td>{{ $data->$column }}</td>
                @endif
              @endforeach
              <td>
                <a href="{{ route('data_ipm_kota_pontianak_menurut_komponen_pembentuknya.viewUpdate', $data->id) }}"
                  class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('data_ipm_kota_pontianak_menurut_komponen_pembentuknya.destroy', $data->id) }}"
                  method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">
                    Hapus
                  </button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="{{ count($columnsDataIPMKotaPontianakMenurutKomponenPembentuknya) + 2 }}" class="text-muted">
                Belum ada data
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>


  {{-- ====================== BAGIAN: DATA IPM KABUPATEN/KOTA ====================== --}}
  <div class="container-custom">

    <!-- Judul -->
    <div class="mb-4">
      <h2 class="fw-bold text-uppercase" style="font-size: 1.5rem; color:#212529; margin-bottom: 5px;">
        Data Indeks Pembangunan Manusia (IPM) Menurut Kabupaten/Kota di Kalimantan Barat
      </h2>
      <p class="text-muted" style="font-size: 0.95rem;">
        Data IPM per kabupaten/kota di Kalimantan Barat mencakup nilai indeks pembangunan manusia tiap wilayah.
      </p>
    </div>

    <!-- Form Tambah Data -->
    <form action="{{ route('data_ipm_menurut_kabupaten_kota.store') }}" method="POST" class="mt-3 mb-4">
      @csrf

      <div class="mb-3">
        <label for="tahun" class="form-label fw-semibold">Tahun</label>
        <input type="number" id="tahun" name="Tahun" class="form-control" placeholder="Masukkan tahun" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Nilai IPM per Kabupaten/Kota</label>
        <input type="text" name="Kabupaten_Sambas" class="form-control mb-2" placeholder="Kabupaten Sambas" required>
        <input type="text" name="Kabupaten_Bengkayang" class="form-control mb-2" placeholder="Kabupaten Bengkayang"
          required>
        <input type="text" name="Kabupaten_Landak" class="form-control mb-2" placeholder="Kabupaten Landak" required>
        <input type="text" name="Kabupaten_Mempawah" class="form-control mb-2" placeholder="Kabupaten Mempawah" required>
        <input type="text" name="Kabupaten_Sanggau" class="form-control mb-2" placeholder="Kabupaten Sanggau" required>
        <input type="text" name="Kabupaten_Ketapang" class="form-control mb-2" placeholder="Kabupaten Ketapang" required>
        <input type="text" name="Kabupaten_Sintang" class="form-control mb-2" placeholder="Kabupaten Sintang" required>
        <input type="text" name="Kabupaten_Kapuas_Hulu" class="form-control mb-2" placeholder="Kabupaten Kapuas Hulu"
          required>
        <input type="text" name="Kabupaten_Sekadau" class="form-control mb-2" placeholder="Kabupaten Sekadau" required>
        <input type="text" name="Kabupaten_Melawi" class="form-control mb-2" placeholder="Kabupaten Melawi" required>
        <input type="text" name="Kabupaten_Kayong_Utara" class="form-control mb-2" placeholder="Kabupaten Kayong Utara"
          required>
        <input type="text" name="Kabupaten_Kubu_Raya" class="form-control mb-2" placeholder="Kabupaten Kubu Raya"
          required>
        <input type="text" name="Kota_Pontianak" class="form-control mb-2" placeholder="Kota Pontianak" required>
        <input type="text" name="Kota_Singkawang" class="form-control mb-2" placeholder="Kota Singkawang" required>
      </div>

      <!-- Tombol Tambah -->
      <div class="d-flex justify-content-end mt-3">
        <button type="submit" class="btn"
          style="background-color:#007BFF; color:white; font-weight:600; padding:8px 20px; border-radius:8px;">
          Tambah
        </button>
      </div>
    </form>

    <!-- Garis Pemisah -->
    <hr class="my-4">

    <!-- Tabel Data -->
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead style="background-color:#f8f9fa;">
          <tr>
            <th>No</th>
            @foreach ($columnsDataIPMMenurutKabupatenKotaDiKalimantanBarat as $column)
              @if (!in_array($column, ['id', 'created_at', 'updated_at']))
                <th>{{ ucwords(str_replace(['_', '__'], [' ', ' '], preg_replace('/\s*\(.*\)\s*/', '', $column))) }}</th>
              @endif
            @endforeach
            <th>Aksi</th>
          </tr>
        </thead>

        <tbody>
          @forelse ($DataIPMMenurutKabupatenKotaDiKalimantanBarat as $index => $data)
            <tr>
              <td>{{ $index + 1 }}</td>
              @foreach ($columnsDataIPMMenurutKabupatenKotaDiKalimantanBarat as $column)
                @if (!in_array($column, ['id', 'created_at', 'updated_at']))
                  <td>{{ $data->$column }}</td>
                @endif
              @endforeach
              <td>
                <a href="{{ route('data_ipm_menurut_kabupaten_kota.viewUpdate', $data->id) }}"
                  class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('data_ipm_menurut_kabupaten_kota.destroy', $data->id) }}" method="POST"
                  class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">
                    Hapus
                  </button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="{{ count($columnsDataIPMMenurutKabupatenKotaDiKalimantanBarat) + 2 }}" class="text-muted">
                Belum ada data
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

  {{-- ====================== BAGIAN: KONDISI KETENAGAKERJAAN ====================== --}}
  <div class="container-custom">

    <!-- Judul -->
    <div class="mb-4">
      <h2 class="fw-bold text-uppercase" style="font-size: 1.5rem; color:#212529; margin-bottom: 5px;">
        Data Kondisi Ketenagakerjaan Kota Pontianak
      </h2>
      <p class="text-muted" style="font-size: 0.95rem;">
        Data mengenai jumlah angkatan kerja, bukan angkatan kerja, serta total tenaga kerja di Kota Pontianak.
      </p>
    </div>

    <!-- Form Tambah Data -->
    <form action="{{ route('data_kondisi_ketenagakerjaan_kota_pontianak.store') }}" method="POST" class="mt-3 mb-4">
      @csrf

      <div class="mb-3">
        <label for="tahun" class="form-label fw-semibold">Tahun</label>
        <input type="number" id="tahun" name="Tahun" class="form-control" placeholder="Masukkan tahun" required>
      </div>

      <div class="mb-3">
        <label for="angkatan_kerja" class="form-label fw-semibold">Angkatan Kerja</label>
        <input type="number" id="angkatan_kerja" name="Angkatan_Kerja" class="form-control"
          placeholder="Masukkan jumlah angkatan kerja" required>
      </div>

      <div class="mb-3">
        <label for="bukan_angkatan_kerja" class="form-label fw-semibold">Bukan Angkatan Kerja</label>
        <input type="number" id="bukan_angkatan_kerja" name="Bukan_Angkatan_Kerja" class="form-control"
          placeholder="Masukkan jumlah bukan angkatan kerja" required>
      </div>

      <div class="mb-3">
        <label for="jumlah" class="form-label fw-semibold">Jumlah</label>
        <input type="number" id="jumlah" name="Jumlah" class="form-control" placeholder="Masukkan total jumlah" required>
      </div>

      <!-- Tombol Tambah -->
      <div class="d-flex justify-content-end mt-3">
        <button type="submit" class="btn"
          style="background-color:#007BFF; color:white; font-weight:600; padding: 8px 20px; border-radius:8px;">
          Tambah
        </button>
      </div>
    </form>

    <!-- Garis Pemisah -->
    <hr class="my-4">

    <!-- Tabel Data -->
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead style="background-color:#f8f9fa;">
          <tr>
            <th>No</th>
            @foreach ($columnsDataKondisiKetenagakerjaanKotaPontianak as $column)
              @if (!in_array($column, ['id', 'created_at', 'updated_at']))
                <th>{{ ucwords(str_replace(['_', '__'], [' ', ' '], preg_replace('/\s*\(.*\)\s*/', '', $column))) }}</th>
              @endif
            @endforeach
            <th>Aksi</th>
          </tr>
        </thead>

        <tbody>
          @forelse ($DataKondisiKetenagakerjaanKotaPontianak as $index => $data)
            <tr>
              <td>{{ $index + 1 }}</td>
              @foreach ($columnsDataKondisiKetenagakerjaanKotaPontianak as $column)
                @if (!in_array($column, ['id', 'created_at', 'updated_at']))
                  <td>{{ $data->$column }}</td>
                @endif
              @endforeach
              <td>
                <a href="{{ route('data_kondisi_ketenagakerjaan_kota_pontianak.viewUpdate', $data->id) }}"
                  class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('data_kondisi_ketenagakerjaan_kota_pontianak.destroy', $data->id) }}" method="POST"
                  class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">
                    Hapus
                  </button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="{{ count($columnsDataKondisiKetenagakerjaanKotaPontianak) + 2 }}" class="text-muted">
                Belum ada data
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

  {{-- ====================== BAGIAN: TINGKAT PENGANGGURAN TERBUKA ====================== --}}
  <div class="container-custom">

    <!-- Judul -->
    <div class="mb-4">
      <h2 class="fw-bold text-uppercase" style="font-size: 1.5rem; color:#212529; margin-bottom: 5px;">
        Data Tingkat Pengangguran Terbuka
      </h2>
      <p class="text-muted" style="font-size: 0.95rem;">
        Data tingkat pengangguran terbuka berdasarkan persentase penduduk yang belum bekerja di Kota Pontianak.
      </p>
    </div>

    <!-- Form Tambah Data -->
    <form action="{{ route('data_tingkat_pengangguran_terbuka.store') }}" method="POST" class="mt-3 mb-4">
      @csrf

      <div class="mb-3">
        <label for="tahun" class="form-label fw-semibold">Tahun</label>
        <input type="number" id="tahun" name="Tahun" class="form-control" placeholder="Masukkan tahun" required>
      </div>

      <div class="mb-3">
        <label for="jumlah" class="form-label fw-semibold">Jumlah (%)</label>
        <input type="number" step="0.01" id="jumlah" name="Jumlah" class="form-control"
          placeholder="Masukkan tingkat pengangguran (%)" required>
      </div>

      <!-- Tombol Tambah -->
      <div class="d-flex justify-content-end mt-3">
        <button type="submit" class="btn"
          style="background-color:#007BFF; color:white; font-weight:600; padding: 8px 20px; border-radius:8px;">
          Tambah
        </button>
      </div>
    </form>

    <!-- Garis Pemisah -->
    <hr class="my-4">

    <!-- Tabel Data -->
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead style="background-color:#f8f9fa;">
          <tr>
            <th>No</th>
            @foreach ($columnsDataTingkatPengangguranTerbuka as $column)
              @if (!in_array($column, ['id', 'created_at', 'updated_at']))
                <th>{{ ucwords(str_replace(['_', '__'], [' ', ' '], preg_replace('/\s*\(.*\)\s*/', '', $column))) }}</th>
              @endif
            @endforeach
            <th>Aksi</th>
          </tr>
        </thead>

        <tbody>
          @forelse ($DataTingkatPengangguranTerbuka as $index => $data)
            <tr>
              <td>{{ $index + 1 }}</td>
              @foreach ($columnsDataTingkatPengangguranTerbuka as $column)
                @if (!in_array($column, ['id', 'created_at', 'updated_at']))
                  <td>{{ $data->$column }}</td>
                @endif
              @endforeach
              <td>
                <a href="{{ route('data_tingkat_pengangguran_terbuka.viewUpdate', $data->id) }}"
                  class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('data_tingkat_pengangguran_terbuka.destroy', $data->id) }}" method="POST"
                  class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">
                    Hapus
                  </button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="{{ count($columnsDataTingkatPengangguranTerbuka) + 2 }}" class="text-muted">
                Belum ada data
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>


  {{-- ====================== BAGIAN: Data Persentase Penduduk Bekerja Menurut Lapangan Usaha ====================== --}}
  <div class="container-custom">

    <!-- Judul -->
    <div class="mb-4">
      <h2 class="fw-bold text-uppercase" style="font-size: 1.5rem; color:#212529; margin-bottom: 5px;">
        Data Persentase Penduduk yang Bekerja Menurut Lapangan Usaha di Kota Pontianak
      </h2>
      <p class="text-muted" style="font-size: 0.95rem;">
        Persentase penduduk yang bekerja berdasarkan kategori lapangan usaha di Kota Pontianak.
      </p>
    </div>

    <!-- Form Tambah Data -->
    <form action="{{ route('data_persentase_bekerja_menurut_lapangan_usaha.store') }}" method="POST" class="mt-3 mb-4">
      @csrf

      <div class="mb-3">
        <label for="tahun" class="form-label fw-semibold">Tahun</label>
        <input type="number" id="tahun" name="Tahun" class="form-control" placeholder="Masukkan tahun" required>
      </div>

      <div class="mb-3">
        <label for="pertanian" class="form-label fw-semibold">Pertanian, Perkebunan, Kehutanan, Perburuan dan Perikanan
          (%)</label>
        <input type="number" step="0.01" id="pertanian" name="Pertanian_Perkebunan_Kehutanan_Perburuan_dan_Perikanan"
          class="form-control" placeholder="Masukkan nilai (%)" required>
      </div>

      <div class="mb-3">
        <label for="pertambangan" class="form-label fw-semibold">Pertambangan dan Penggalian (%)</label>
        <input type="number" step="0.01" id="pertambangan" name="Pertambangan_dan_Penggalian" class="form-control"
          placeholder="Masukkan nilai (%)" required>
      </div>

      <div class="mb-3">
        <label for="industri" class="form-label fw-semibold">Industri (%)</label>
        <input type="number" step="0.01" id="industri" name="Industri" class="form-control"
          placeholder="Masukkan nilai (%)" required>
      </div>

      <div class="mb-3">
        <label for="listrik" class="form-label fw-semibold">Listrik, Gas dan Air Minum (%)</label>
        <input type="number" step="0.01" id="listrik" name="Listrik_Gas_dan_Air_Minum" class="form-control"
          placeholder="Masukkan nilai (%)" required>
      </div>

      <div class="mb-3">
        <label for="konstruksi" class="form-label fw-semibold">Konstruksi (%)</label>
        <input type="number" step="0.01" id="konstruksi" name="Konstruksi" class="form-control"
          placeholder="Masukkan nilai (%)" required>
      </div>

      <div class="mb-3">
        <label for="perdagangan" class="form-label fw-semibold">Perdagangan, Rumah Makan dan Jasa Akomodasi (%)</label>
        <input type="number" step="0.01" id="perdagangan" name="Perdagangan_Rumah_Makan_dan_Jasa_Akomodasi"
          class="form-control" placeholder="Masukkan nilai (%)" required>
      </div>

      <div class="mb-3">
        <label for="transportasi" class="form-label fw-semibold">Transportasi, Pergudangan dan Komunikasi (%)</label>
        <input type="number" step="0.01" id="transportasi" name="Transportasi_Pergudangan_dan_Komunikasi"
          class="form-control" placeholder="Masukkan nilai (%)" required>
      </div>

      <div class="mb-3">
        <label for="keuangan" class="form-label fw-semibold">Lembaga Keuangan, Real Estate, Usaha Perusahaan dan Jasa
          Persh (%)</label>
        <input type="number" step="0.01" id="keuangan" name="Lembaga_Keuangan_Real_Estate_Usaha_Perusahaan_dan_Jasa_Persh"
          class="form-control" placeholder="Masukkan nilai (%)" required>
      </div>

      <div class="mb-3">
        <label for="jasa" class="form-label fw-semibold">Jasa Kemasyarakatan, Sosial dan Perorangan (%)</label>
        <input type="number" step="0.01" id="jasa" name="Jasa_Kemasyarakatan_Sosial_dan_Perorangan" class="form-control"
          placeholder="Masukkan nilai (%)" required>
      </div>

      <div class="mb-3">
        <label for="jumlah" class="form-label fw-semibold">Jumlah (%)</label>
        <input type="number" step="0.01" id="jumlah" name="Jumlah" class="form-control"
          placeholder="Masukkan total jumlah (%)" required>
      </div>

      <!-- Tombol Tambah -->
      <div class="d-flex justify-content-end mt-3">
        <button type="submit" class="btn"
          style="background-color:#007BFF; color:white; font-weight:600; padding: 8px 20px; border-radius:8px;">
          Tambah
        </button>
      </div>
    </form>

    <!-- Garis Pemisah -->
    <hr class="my-4">

    <!-- Tabel Data -->
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead style="background-color:#f8f9fa;">
          <tr>
            <th>No</th>
            @foreach ($columnsDataPersentaseBekerjaMenurutLapanganUsaha as $column)
              @if (!in_array($column, ['id', 'created_at', 'updated_at']))
                <th>{{ ucwords(str_replace(['_', '__'], [' ', ' '], preg_replace('/\s*\(.*\)\s*/', '', $column))) }}</th>
              @endif
            @endforeach
            <th>Aksi</th>
          </tr>
        </thead>

        <tbody>
          @forelse ($DataPersentaseBekerjaMenurutLapanganUsaha as $index => $data)
            <tr>
              <td>{{ $index + 1 }}</td>
              @foreach ($columnsDataPersentaseBekerjaMenurutLapanganUsaha as $column)
                @if (!in_array($column, ['id', 'created_at', 'updated_at']))
                  <td>{{ $data->$column }}</td>
                @endif
              @endforeach
              <td>
                <a href="{{ route('data_persentase_bekerja_menurut_lapangan_usaha.viewUpdate', $data->id) }}"
                  class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('data_persentase_bekerja_menurut_lapangan_usaha.destroy', $data->id) }}"
                  method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">
                    Hapus
                  </button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="{{ count($columnsDataPersentaseBekerjaMenurutLapanganUsaha) + 2 }}" class="text-muted">
                Belum ada data
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>


  {{-- ====================== BAGIAN: Data Nilai PDRB Atas Dasar Harga Berlaku Menurut Kategori (Miliar Rupiah)
  ====================== --}}
  <div class="container-custom">

    <!-- Judul -->
    <div class="mb-4">
      <h2 class="fw-bold text-uppercase" style="font-size: 1.5rem; color:#212529; margin-bottom: 5px;">
        Data Nilai PDRB Atas Dasar Harga Berlaku Menurut Kategori (Miliar Rupiah)
      </h2>
      <p class="text-muted" style="font-size: 0.95rem;">
        Data Produk Domestik Regional Bruto (PDRB) Kota Pontianak atas dasar harga berlaku menurut kategori usaha.
      </p>
    </div>

    <!-- Form Tambah Data -->
    <form action="{{ route('data_nilai_pdrb_dasar_harga_berlaku_menurut_kategori.store') }}" method="POST"
      class="mt-3 mb-4">
      @csrf

      <div class="mb-3">
        <label for="tahun" class="form-label fw-semibold">Tahun</label>
        <input type="number" id="tahun" name="Tahun" class="form-control" placeholder="Masukkan tahun" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Pertanian, Kehutanan dan Perikanan (Miliar Rp)</label>
        <input type="number" step="0.01" name="Pertanian_Kehutanan_dan_Perikanan" class="form-control"
          placeholder="Masukkan nilai (Miliar Rp)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Pertambangan dan Penggalian (Miliar Rp)</label>
        <input type="number" step="0.01" name="Pertambangan_dan_Penggalian" class="form-control"
          placeholder="Masukkan nilai (Miliar Rp)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Industri Pengolahan (Miliar Rp)</label>
        <input type="number" step="0.01" name="Industri_Pengolahan" class="form-control"
          placeholder="Masukkan nilai (Miliar Rp)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Pengadaan Listrik dan Gas (Miliar Rp)</label>
        <input type="number" step="0.01" name="Pengadaan_Listrik_dan_Gas" class="form-control"
          placeholder="Masukkan nilai (Miliar Rp)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Pengadaan Air, Pengelolaan Sampah, Limbah dan Daur Ulang (Miliar Rp)</label>
        <input type="number" step="0.01" name="Pengadaan_Air_Pengelolaan_Sampah_Limbah_dan_Daur_Ulang"
          class="form-control" placeholder="Masukkan nilai (Miliar Rp)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Konstruksi (Miliar Rp)</label>
        <input type="number" step="0.01" name="Konstruksi" class="form-control" placeholder="Masukkan nilai (Miliar Rp)"
          required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Perdagangan Besar dan Eceran, Reparasi Mobil dan Sepeda Motor (Miliar
          Rp)</label>
        <input type="number" step="0.01" name="Perdagangan_Besar_dan_Eceran_Reparasi_Mobil_dan_Sepeda_Motor"
          class="form-control" placeholder="Masukkan nilai (Miliar Rp)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Transportasi dan Pergudangan (Miliar Rp)</label>
        <input type="number" step="0.01" name="Transportasi_dan_Pergudangan" class="form-control"
          placeholder="Masukkan nilai (Miliar Rp)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Penyediaan Akomodasi dan Makan Minum (Miliar Rp)</label>
        <input type="number" step="0.01" name="Penyediaan_Akomodasi_dan_Makan_Minuman" class="form-control"
          placeholder="Masukkan nilai (Miliar Rp)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Informasi dan Komunikasi (Miliar Rp)</label>
        <input type="number" step="0.01" name="Informasi_dan_Komunikasi" class="form-control"
          placeholder="Masukkan nilai (Miliar Rp)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Jasa Keuangan dan Asuransi (Miliar Rp)</label>
        <input type="number" step="0.01" name="Jasa_Keuangan_dan_Asuransi" class="form-control"
          placeholder="Masukkan nilai (Miliar Rp)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Real Estate (Miliar Rp)</label>
        <input type="number" step="0.01" name="Real_Estate" class="form-control" placeholder="Masukkan nilai (Miliar Rp)"
          required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Jasa Perusahaan (Miliar Rp)</label>
        <input type="number" step="0.01" name="Jasa_Perusahaan" class="form-control"
          placeholder="Masukkan nilai (Miliar Rp)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Administrasi Pemerintahan, Pertahanan dan Jaminan Sosial Wajib (Miliar
          Rp)</label>
        <input type="number" step="0.01" name="Administrasi_Pemerintahan_Pertahanan_dan_Jaminan_Sosial_Wajib"
          class="form-control" placeholder="Masukkan nilai (Miliar Rp)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Jasa Pendidikan (Miliar Rp)</label>
        <input type="number" step="0.01" name="Jasa_Pendidikan" class="form-control"
          placeholder="Masukkan nilai (Miliar Rp)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Jasa Kesehatan dan Kegiatan Sosial (Miliar Rp)</label>
        <input type="number" step="0.01" name="Jasa_Kesehatan_dan_Kegiatan_Sosial" class="form-control"
          placeholder="Masukkan nilai (Miliar Rp)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Jasa Lainnya (Miliar Rp)</label>
        <input type="number" step="0.01" name="Jasa_Lainnya" class="form-control" placeholder="Masukkan nilai (Miliar Rp)"
          required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Jumlah Total (Miliar Rp)</label>
        <input type="number" step="0.01" name="Jumlah" class="form-control"
          placeholder="Masukkan jumlah total (Miliar Rp)" required>
      </div>

      <!-- Tombol Tambah -->
      <div class="d-flex justify-content-end mt-3">
        <button type="submit" class="btn"
          style="background-color:#007BFF; color:white; font-weight:600; padding:8px 20px; border-radius:8px;">
          Tambah
        </button>
      </div>
    </form>

    <!-- Garis Pemisah -->
    <hr class="my-4">

    <!-- Tabel Data -->
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead style="background-color:#f8f9fa;">
          <tr>
            <th>No</th>
            @foreach ($columnsDataNilaiPDRBDasarHargaBerlakuMenurutKategori as $column)
              @if (!in_array($column, ['id', 'created_at', 'updated_at']))
                <th>{{ ucwords(str_replace(['_', '__'], [' ', ' '], preg_replace('/\s*\(.*\)\s*/', '', $column))) }}</th>
              @endif
            @endforeach
            <th>Aksi</th>
          </tr>
        </thead>

        <tbody>
          @forelse ($DataNilaiPDRBDasarHargaBerlakuMenurutKategori as $index => $data)
            <tr>
              <td>{{ $index + 1 }}</td>
              @foreach ($columnsDataNilaiPDRBDasarHargaBerlakuMenurutKategori as $column)
                @if (!in_array($column, ['id', 'created_at', 'updated_at']))
                  <td>{{ $data->$column }}</td>
                @endif
              @endforeach
              <td>
                <a href="{{ route('data_nilai_pdrb_dasar_harga_berlaku_menurut_kategori.viewUpdate', $data->id) }}"
                  class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('data_nilai_pdrb_dasar_harga_berlaku_menurut_kategori.destroy', $data->id) }}"
                  method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">
                    Hapus
                  </button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="{{ count($columnsDataNilaiPDRBDasarHargaBerlakuMenurutKategori) + 2 }}" class="text-muted">
                Belum ada data
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

  {{-- ====================== BAGIAN: Data Pertumbuhan Nilai Tambah per Kategori Kota Pontianak ======================
  --}}
  <div class="container-custom">

    <!-- Judul -->
    <div class="mb-4">
      <h2 class="fw-bold text-uppercase" style="font-size: 1.5rem; color:#212529; margin-bottom: 5px;">
        Data Pertumbuhan Nilai Tambah Kategori Kota Pontianak
      </h2>
      <p class="text-muted" style="font-size: 0.95rem;">
        Data ini menampilkan pertumbuhan nilai tambah per kategori usaha di Kota Pontianak berdasarkan tahun.
      </p>
    </div>

    <!-- Form Tambah Data -->
    <form action="{{ route('data_pertumbuhan_nilai_tambah_kategori_kota_pontianak.store') }}" method="POST"
      class="mt-3 mb-4">
      @csrf

      <div class="mb-3">
        <label for="tahun" class="form-label fw-semibold">Tahun</label>
        <input type="number" id="tahun" name="Tahun" class="form-control" placeholder="Masukkan tahun" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Pertanian, Kehutanan dan Perikanan (%)</label>
        <input type="number" step="0.01" name="Pertanian_Kehutanan_dan_Perikanan" class="form-control"
          placeholder="Masukkan nilai pertumbuhan (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Pertambangan dan Penggalian (%)</label>
        <input type="number" step="0.01" name="Pertambangan_dan_Penggalian" class="form-control"
          placeholder="Masukkan nilai pertumbuhan (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Industri Pengolahan (%)</label>
        <input type="number" step="0.01" name="Industri_Pengolahan" class="form-control"
          placeholder="Masukkan nilai pertumbuhan (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Pengadaan Listrik dan Gas (%)</label>
        <input type="number" step="0.01" name="Pengadaan_Listrik_dan_Gas" class="form-control"
          placeholder="Masukkan nilai pertumbuhan (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Pengadaan Air, Pengelolaan Sampah, Limbah dan Daur Ulang (%)</label>
        <input type="number" step="0.01" name="Pengadaan_Air_Pengelolaan_Sampah_Limbah_dan_Daur_Ulang"
          class="form-control" placeholder="Masukkan nilai pertumbuhan (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Konstruksi (%)</label>
        <input type="number" step="0.01" name="Konstruksi" class="form-control"
          placeholder="Masukkan nilai pertumbuhan (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Perdagangan Besar dan Eceran, Reparasi Mobil dan Sepeda Motor (%)</label>
        <input type="number" step="0.01" name="Perdagangan_Besar_dan_Eceran_Reparasi_Mobil_dan_Sepeda_Motor"
          class="form-control" placeholder="Masukkan nilai pertumbuhan (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Transportasi dan Pergudangan (%)</label>
        <input type="number" step="0.01" name="Transportasi_dan_Pergudangan" class="form-control"
          placeholder="Masukkan nilai pertumbuhan (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Penyediaan Akomodasi dan Makan Minum (%)</label>
        <input type="number" step="0.01" name="Penyediaan_Akomodasi_dan_Makan_Minuman" class="form-control"
          placeholder="Masukkan nilai pertumbuhan (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Informasi dan Komunikasi (%)</label>
        <input type="number" step="0.01" name="Informasi_dan_Komunikasi" class="form-control"
          placeholder="Masukkan nilai pertumbuhan (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Jasa Keuangan dan Asuransi (%)</label>
        <input type="number" step="0.01" name="Jasa_Keuangan_dan_Asuransi" class="form-control"
          placeholder="Masukkan nilai pertumbuhan (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Real Estate (%)</label>
        <input type="number" step="0.01" name="Real_Estate" class="form-control"
          placeholder="Masukkan nilai pertumbuhan (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Jasa Perusahaan (%)</label>
        <input type="number" step="0.01" name="Jasa_Perusahaan" class="form-control"
          placeholder="Masukkan nilai pertumbuhan (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Administrasi Pemerintahan, Pertahanan dan Jaminan Sosial Wajib (%)</label>
        <input type="number" step="0.01" name="Administrasi_Pemerintahan_Pertahanan_dan_Jaminan_Sosial_Wajib"
          class="form-control" placeholder="Masukkan nilai pertumbuhan (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Jasa Pendidikan (%)</label>
        <input type="number" step="0.01" name="Jasa_Pendidikan" class="form-control"
          placeholder="Masukkan nilai pertumbuhan (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Jasa Kesehatan dan Kegiatan Sosial (%)</label>
        <input type="number" step="0.01" name="Jasa_Kesehatan_dan_Kegiatan_Sosial" class="form-control"
          placeholder="Masukkan nilai pertumbuhan (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Jasa Lainnya (%)</label>
        <input type="number" step="0.01" name="Jasa_Lainnya" class="form-control"
          placeholder="Masukkan nilai pertumbuhan (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Jumlah Total (%)</label>
        <input type="number" step="0.01" name="Jumlah" class="form-control" placeholder="Masukkan total pertumbuhan (%)"
          required>
      </div>

      <!-- Tombol Tambah -->
      <div class="d-flex justify-content-end mt-3">
        <button type="submit" class="btn"
          style="background-color:#007BFF; color:white; font-weight:600; padding:8px 20px; border-radius:8px;">
          Tambah
        </button>
      </div>
    </form>

    <!-- Garis Pemisah -->
    <hr class="my-4">

    <!-- Tabel Data -->
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead style="background-color:#f8f9fa;">
          <tr>
            <th>No</th>
            @foreach ($columnsDataPertumbuhanNilaiTambahKategoriKotaPontianak as $column)
              @if (!in_array($column, ['id', 'created_at', 'updated_at']))
                <th>{{ ucwords(str_replace(['_', '__'], [' ', ' '], preg_replace('/\s*\(.*\)\s*/', '', $column))) }}</th>
              @endif
            @endforeach
            <th>Aksi</th>
          </tr>
        </thead>

        <tbody>
          @forelse ($DataPertumbuhanNilaiTambahKategoriKotaPontianak as $index => $data)
            <tr>
              <td>{{ $index + 1 }}</td>
              @foreach ($columnsDataPertumbuhanNilaiTambahKategoriKotaPontianak as $column)
                @if (!in_array($column, ['id', 'created_at', 'updated_at']))
                  <td>{{ $data->$column }}</td>
                @endif
              @endforeach
              <td>
                <a href="{{ route('data_pertumbuhan_nilai_tambah_kategori_kota_pontianak.viewUpdate', $data->id) }}"
                  class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('data_pertumbuhan_nilai_tambah_kategori_kota_pontianak.destroy', $data->id) }}"
                  method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">
                    Hapus
                  </button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="{{ count($columnsDataPertumbuhanNilaiTambahKategoriKotaPontianak) + 2 }}" class="text-muted">
                Belum ada data
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>


  {{-- ====================== BAGIAN: Data Kontribusi Kategori terhadap PDRB Kota Pontianak ====================== --}}
  <div class="container-custom">

    <!-- Judul -->
    <div class="mb-4">
      <h2 class="fw-bold text-uppercase" style="font-size: 1.5rem; color:#212529; margin-bottom: 5px;">
        Data Kontribusi Kategori terhadap PDRB Kota Pontianak
      </h2>
      <p class="text-muted" style="font-size: 0.95rem;">
        Data ini menampilkan kontribusi tiap kategori usaha terhadap Produk Domestik Regional Bruto (PDRB) Kota Pontianak.
      </p>
    </div>

    <!-- Form Tambah Data -->
    <form action="{{ route('data_kontribusi_kategori_terhadap_pdrb_kota_pontianak.store') }}" method="POST"
      class="mt-3 mb-4">
      @csrf

      <div class="mb-3">
        <label class="form-label fw-semibold">Tahun</label>
        <input type="number" name="Tahun" class="form-control" placeholder="Masukkan tahun" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Pertanian, Kehutanan dan Perikanan (%)</label>
        <input type="number" step="0.01" name="Pertanian_Kehutanan_dan_Perikanan" class="form-control"
          placeholder="Masukkan nilai kontribusi (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Pertambangan dan Penggalian (%)</label>
        <input type="number" step="0.01" name="Pertambangan_dan_Penggalian" class="form-control"
          placeholder="Masukkan nilai kontribusi (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Industri Pengolahan (%)</label>
        <input type="number" step="0.01" name="Industri_Pengolahan" class="form-control"
          placeholder="Masukkan nilai kontribusi (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Pengadaan Listrik dan Gas (%)</label>
        <input type="number" step="0.01" name="Pengadaan_Listrik_dan_Gas" class="form-control"
          placeholder="Masukkan nilai kontribusi (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Pengadaan Air, Pengelolaan Sampah, Limbah dan Daur Ulang (%)</label>
        <input type="number" step="0.01" name="Pengadaan_Air_Pengelolaan_Sampah_Limbah_dan_Daur_Ulang"
          class="form-control" placeholder="Masukkan nilai kontribusi (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Konstruksi (%)</label>
        <input type="number" step="0.01" name="Konstruksi" class="form-control"
          placeholder="Masukkan nilai kontribusi (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Perdagangan Besar dan Eceran, Reparasi Mobil dan Sepeda Motor (%)</label>
        <input type="number" step="0.01" name="Perdagangan_Besar_dan_Eceran_Reparasi_Mobil_dan_Sepeda_Motor"
          class="form-control" placeholder="Masukkan nilai kontribusi (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Transportasi dan Pergudangan (%)</label>
        <input type="number" step="0.01" name="Transportasi_dan_Pergudangan" class="form-control"
          placeholder="Masukkan nilai kontribusi (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Penyediaan Akomodasi dan Makan Minum (%)</label>
        <input type="number" step="0.01" name="Penyediaan_Akomodasi_dan_Makan_Minuman" class="form-control"
          placeholder="Masukkan nilai kontribusi (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Informasi dan Komunikasi (%)</label>
        <input type="number" step="0.01" name="Informasi_dan_Komunikasi" class="form-control"
          placeholder="Masukkan nilai kontribusi (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Jasa Keuangan dan Asuransi (%)</label>
        <input type="number" step="0.01" name="Jasa_Keuangan_dan_Asuransi" class="form-control"
          placeholder="Masukkan nilai kontribusi (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Real Estate (%)</label>
        <input type="number" step="0.01" name="Real_Estate" class="form-control"
          placeholder="Masukkan nilai kontribusi (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Jasa Perusahaan (%)</label>
        <input type="number" step="0.01" name="Jasa_Perusahaan" class="form-control"
          placeholder="Masukkan nilai kontribusi (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Administrasi Pemerintahan, Pertahanan dan Jaminan Sosial Wajib (%)</label>
        <input type="number" step="0.01" name="Administrasi_Pemerintahan_Pertahanan_dan_Jaminan_Sosial_Wajib"
          class="form-control" placeholder="Masukkan nilai kontribusi (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Jasa Pendidikan (%)</label>
        <input type="number" step="0.01" name="Jasa_Pendidikan" class="form-control"
          placeholder="Masukkan nilai kontribusi (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Jasa Kesehatan dan Kegiatan Sosial (%)</label>
        <input type="number" step="0.01" name="Jasa_Kesehatan_dan_Kegiatan_Sosial" class="form-control"
          placeholder="Masukkan nilai kontribusi (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Jasa Lainnya (%)</label>
        <input type="number" step="0.01" name="Jasa_Lainnya" class="form-control"
          placeholder="Masukkan nilai kontribusi (%)" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Jumlah Total (%)</label>
        <input type="number" step="0.01" name="Jumlah" class="form-control" placeholder="Masukkan jumlah total (%)"
          required>
      </div>

      <!-- Tombol Tambah -->
      <div class="d-flex justify-content-end mt-3">
        <button type="submit" class="btn"
          style="background-color:#007BFF; color:white; font-weight:600; padding:8px 20px; border-radius:8px;">
          Tambah
        </button>
      </div>
    </form>

    <!-- Garis Pemisah -->
    <hr class="my-4">

    <!-- Tabel Data -->
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead style="background-color:#f8f9fa;">
          <tr>
            <th>No</th>
            @foreach ($columnsDataKontribusiKategoriTerhadapPDRBKotaPontianak as $column)
              @if (!in_array($column, ['id', 'created_at', 'updated_at']))
                <th>{{ ucwords(str_replace(['_', '__'], [' ', ' '], preg_replace('/\s*\(.*\)\s*/', '', $column))) }}</th>
              @endif
            @endforeach
            <th>Aksi</th>
          </tr>
        </thead>

        <tbody>
          @forelse ($DataKontribusiKategoriTerhadapPDRBKotaPontianak as $index => $data)
            <tr>
              <td>{{ $index + 1 }}</td>
              @foreach ($columnsDataKontribusiKategoriTerhadapPDRBKotaPontianak as $column)
                @if (!in_array($column, ['id', 'created_at', 'updated_at']))
                  <td>{{ $data->$column }}</td>
                @endif
              @endforeach
              <td>
                <a href="{{ route('data_kontribusi_kategori_terhadap_pdrb_kota_pontianak.viewUpdate', $data->id) }}"
                  class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('data_kontribusi_kategori_terhadap_pdrb_kota_pontianak.destroy', $data->id) }}"
                  method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">
                    Hapus
                  </button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="{{ count($columnsDataKontribusiKategoriTerhadapPDRBKotaPontianak) + 2 }}" class="text-muted">
                Belum ada data
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>


  {{-- ====================== BAGIAN: Data Tingkat Inflasi Kota Pontianak ====================== --}}
  <div class="container-custom">

    <!-- Judul -->
    <div class="mb-4">
      <h2 class="fw-bold text-uppercase" style="font-size: 1.5rem; color:#212529; margin-bottom: 5px;">
        Data Tingkat Inflasi Kota Pontianak
      </h2>
      <p class="text-muted" style="font-size: 0.95rem;">
        Data ini menampilkan tingkat inflasi tahunan di Kota Pontianak berdasarkan persentase.
      </p>
    </div>

    <!-- Form Tambah Data -->
    <form action="{{ route('data_tingkat_inflasi_kota_pontianak.store') }}" method="POST" class="mt-3 mb-4">
      @csrf

      <div class="mb-3">
        <label class="form-label fw-semibold">Tahun</label>
        <input type="number" name="Tahun" class="form-control" placeholder="Masukkan tahun" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Jumlah (%)</label>
        <input type="number" step="0.01" name="Jumlah" class="form-control" placeholder="Masukkan tingkat inflasi (%)"
          required>
      </div>

      <!-- Tombol Tambah -->
      <div class="d-flex justify-content-end mt-3">
        <button type="submit" class="btn"
          style="background-color:#007BFF; color:white; font-weight:600; padding:8px 20px; border-radius:8px;">
          Tambah
        </button>
      </div>
    </form>

    <!-- Garis Pemisah -->
    <hr class="my-4">

    <!-- Tabel Data -->
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead style="background-color:#f8f9fa;">
          <tr>
            <th>No</th>
            @foreach ($columnsDataTingkatInflasiKotaPontianak as $column)
              @if (!in_array($column, ['id', 'created_at', 'updated_at']))
                <th>{{ ucwords(str_replace(['_', '__'], [' ', ' '], preg_replace('/\s*\(.*\)\s*/', '', $column))) }}</th>
              @endif
            @endforeach
            <th>Aksi</th>
          </tr>
        </thead>

        <tbody>
          @forelse ($DataTingkatInflasiKotaPontianak as $index => $data)
            <tr>
              <td>{{ $index + 1 }}</td>
              @foreach ($columnsDataTingkatInflasiKotaPontianak as $column)
                @if (!in_array($column, ['id', 'created_at', 'updated_at']))
                  <td>{{ $data->$column }}</td>
                @endif
              @endforeach
              <td>
                <a href="{{ route('data_tingkat_inflasi_kota_pontianak.viewUpdate', $data->id) }}"
                  class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('data_tingkat_inflasi_kota_pontianak.destroy', $data->id) }}" method="POST"
                  class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">
                    Hapus
                  </button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="{{ count($columnsDataTingkatInflasiKotaPontianak) + 2 }}" class="text-muted">
                Belum ada data
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

@endsection