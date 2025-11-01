@extends('layouts.app')
@section('content')
  <!-- <pre>
            {{ print_r($columnsDataJumlahPendudukKotaPontianak) }}
            </pre> -->
  {{-- ====================== BAGIAN: DATA LUAS KECAMATAN ====================== --}}
  <div class="container-custom">
    <h1>Data Luas Wilayah Per Kecamatan</h1>

    {{-- Form Tambah Data --}}
    <form action="{{ route('data_luas_wilayah.store') }}" method="POST" class="row g-2 mt-2 mb-3">
      @csrf
      <div class="col-md-6">
        <input type="text" name="Kecamatan" class="form-control" placeholder="Nama Kecamatan" required>
      </div>
      <div class="col-md-6">
        <input type="number" name="Luas_(Km^2)" class="form-control" placeholder="Luas (Km²)" required>
      </div>

      <div class="col-12 form-footer">
        <button type="submit" class="btn btn-success">Tambah</button>
      </div>
    </form>

    {{-- Tabel Data --}}
    <table class="table table-bordered table-hover text-center align-middle">
      <thead class="table-secondary">
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
    <h1>Data Jumlah Penduduk Kota Pontianak</h1>

    {{-- Form Tambah Data --}}
    <form action="{{ route('data_jumlah_penduduk_kota_pontianak.store') }}" method="POST" class="row g-2 mt-2 mb-3">
      @csrf
      <div class="col-md-3">
        <input type="number" name="Tahun" class="form-control" placeholder="Tahun" required>
      </div>
      <div class="col-md-3">
        <input type="number" name="Laki_Laki" class="form-control" placeholder="Jumlah Laki-laki" required>
      </div>
      <div class="col-md-3">
        <input type="number" name="Perempuan" class="form-control" placeholder="Jumlah Perempuan" required>
      </div>
      <div class="col-md-3">
        <input type="number" name="Jumlah" class="form-control" placeholder="Total Penduduk" required>
      </div>

      <div class="col-12 form-footer">
        <button type="submit" class="btn btn-success">Tambah</button>
      </div>
    </form>


    {{-- Tabel Data --}}
    <table class="table table-bordered table-hover text-center align-middle">
      <thead class="table-secondary">
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
    <h1>Data Jumlah dan Persentase Penduduk Miskin di Kota Pontianak</h1>

    {{-- Form Tambah Data --}}
    <form action="{{ route('data_jumlah_persentase_miskin.store') }}" method="POST" class="row g-2 mt-2 mb-3">
      @csrf
      <div class="col-md-3">
        <input type="number" name="Tahun" class="form-control" placeholder="Tahun" required>
      </div>
      <div class="col-md-3">
        <input type="number" name="Garis_Kemiskinan_(Rp/Kapita/Bulan)" class="form-control"
          placeholder="Garis Kemiskinan (Rp/Kapita/Bulan)" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="Jumlah_Penduduk_Miskin" class="form-control"
          placeholder="Jumlah Penduduk Miskin" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="Persentase_Penduduk_Miskin" class="form-control"
          placeholder="Persentase (%)" required>
      </div>

      <div class="col-12 form-footer">
        <button type="submit" class="btn btn-success">Tambah</button>
      </div>
    </form>

    {{-- Tabel Data --}}
    <table class="table table-bordered table-hover text-center align-middle">
      <thead class="table-secondary">
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
              Belum ada data</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>


  {{-- ====================== BAGIAN: DATA IPM KOTA PONTIANAK MENURURUT KOMPONEN PEMBENTUKNYA ====================== --}}
  <div class="container-custom">
    <h1>Indeks Pembangunan Manusia (IPM) Kota Pontianak Menurut Komponen Pembentuknya</h1>

    {{-- Form Tambah Data --}}
    <form action="{{ route('data_ipm_kota_pontianak_menurut_komponen_pembentuknya.store') }}" method="POST"
      class="row g-2 mt-2 mb-3">
      @csrf
      <div class="col-md-2">
        <input type="number" name="Tahun" class="form-control" placeholder="Tahun" required>
      </div>
      <div class="col-md-2">
        <input type="number" step="0.01" name="Angka_Harapan_Hidup_(Tahun)" class="form-control"
          placeholder="Angka Harapan Hidup" required>
      </div>
      <div class="col-md-2">
        <input type="number" step="0.01" name="Harapan_Lama_Sekolah_(Tahun)" class="form-control"
          placeholder="Harapan Lama Sekolah" required>
      </div>
      <div class="col-md-2">
        <input type="number" step="0.01" name="Rata_Rata_Lama_Sekolah_(Tahun)" class="form-control"
          placeholder="Rata-rata Lama Sekolah" required>
      </div>
      <div class="col-md-2">
        <input type="number" name="Pengeluran_Per_Kapita_(Ribu_Rupiah)" class="form-control"
          placeholder="Pengeluaran/kapita (Ribu)" required>
      </div>
      <div class="col-md-2">
        <input type="number" step="0.01" name="Indeks_Pembangunan_Manusia" class="form-control" placeholder="IPM"
          required>
      </div>

      <div class="col-12 form-footer">
        <button type="submit" class="btn btn-success">Tambah</button>
      </div>
    </form>

    {{-- Tabel Data --}}
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-secondary">
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
                Belum ada data</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

  {{-- ====================== BAGIAN: DATA IPM KABUPATEN/KOTA ====================== --}}
  <div class="container-custom">
    <h1>Data Indeks Pembangunan Manusia (IPM) Menurut Kabupaten/Kota di Kalimantan Barat</h1>

    {{-- Form Tambah Data --}}
    <form action="{{ route('data_ipm_menurut_kabupaten_kota.store') }}" method="POST" class="row g-2 mt-2 mb-3">
      @csrf
      <div class="col-md-3">
        <input type="number" name="Tahun" class="form-control" placeholder="Tahun" required>
      </div>

      {{-- Input tiap kabupaten/kota --}}
      <div class="col-md-9">
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

      <div class="col-12 form-footer">
        <button type="submit" class="btn btn-success">Tambah</button>
      </div>
    </form>

    {{-- Tabel Data --}}
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-secondary">
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
              <td colspan="{{ count($columnsDataIPMMenurutKabupatenKotaDiKalimantanBarat) + 2 }}" class="text-muted">Belum
                ada data</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

  {{-- ====================== BAGIAN: KONDISI KETENAGAKERJAAN ====================== --}}
  <div class="container-custom">
    <h1>Data Kondisi Ketenagakejaan Kota Pontianak</h1>

    {{-- Form Tambah Data --}}
    <form action="{{ route('data_kondisi_ketenagakerjaan_kota_pontianak.store') }}" method="POST"
      class="row g-2 mt-2 mb-3">
      @csrf
      <div class="col-md-3">
        <input type="number" name="Tahun" class="form-control" placeholder="Tahun" required>
      </div>
      <div class="col-md-3">
        <input type="number" name="Angkatan_Kerja" class="form-control" placeholder="Angkatan Kerja" required>
      </div>
      <div class="col-md-3">
        <input type="number" name="Bukan_Angkatan_Kerja" class="form-control" placeholder="Bukan Angkatan Kerja" required>
      </div>
      <div class="col-md-3">
        <input type="number" name="Jumlah" class="form-control" placeholder="Jumlah" required>
      </div>

      <div class="col-12 form-footer">
        <button type="submit" class="btn btn-success">Tambah</button>
      </div>
    </form>

    {{-- Tabel Data --}}
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-secondary">
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
              <td colspan="{{ count($columnsDataKondisiKetenagakerjaanKotaPontianak) + 2 }}" class="text-muted">Belum ada
                data</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

  {{-- ====================== BAGIAN: TINGKAT PENGANGGURAN TERBUKA ====================== --}}
  <div class="container-custom">
    <h1>Data Tingkat Pengangguran Terbuka</h1>

    {{-- Form Tambah Data --}}
    <form action="{{ route('data_tingkat_pengangguran_terbuka.store') }}" method="POST" class="row g-2 mt-2 mb-3">
      @csrf
      <div class="col-md-6">
        <input type="number" name="Tahun" class="form-control" placeholder="Tahun" required>
      </div>
      <div class="col-md-6">
        <input type="number" step="0.01" name="Jumlah" class="form-control" placeholder="Jumlah (%)" required>
      </div>

      <div class="col-12 form-footer">
        <button type="submit" class="btn btn-success">Tambah</button>
      </div>
    </form>

    {{-- Tabel Data --}}
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-secondary">
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
              <td colspan="{{ count($columnsDataTingkatPengangguranTerbuka) + 2 }}" class="text-muted">Belum ada data</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

  {{-- ====================== BAGIAN: Data Persentase Penduduk Bekerja Menurut Lapangan Usaha ====================== --}}
  <div class="container-custom">
    <h1>Data Persentase Penduduk yang Bekerja Menurut Lapangan Usaha di Kota Pontianak</h1>

    {{-- Form Tambah Data --}}
    <form action="{{ route('data_persentase_bekerja_menurut_lapangan_usaha.store') }}" method="POST"
      class="row g-2 mt-2 mb-3">
      @csrf
      <div class="col-md-3">
        <input type="number" name="Tahun" class="form-control" placeholder="Tahun" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Pertanian_Perkebunan_Kehutanan_Perburuan_dan_Perikanan"
          class="form-control" placeholder="Pertanian (%)" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Pertambangan_dan_Penggalian" class="form-control"
          placeholder="Pertambangan (%)" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Industri" class="form-control" placeholder="Industri (%)" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Listrik_Gas_dan_Air_Minum" class="form-control"
          placeholder="Listrik, Gas & Air Minum (%)" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Konstruksi" class="form-control" placeholder="Konstruksi (%)" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Perdagangan_Rumah_Makan_dan_Jasa_Akomodasi" class="form-control"
          placeholder="Perdagangan & Jasa Akomodasi (%)" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Transportasi_Pergudangan_dan_Komunikasi" class="form-control"
          placeholder="Transportasi & Komunikasi (%)" required>
      </div>

      <div class="col-md-4">
        <input type="number" step="0.01" name="Lembaga_Keuangan_Real_Estate_Usaha_Perusahaan_dan_Jasa_Persh"
          class="form-control" placeholder="Keuangan & Real Estate (%)" required>
      </div>

      <div class="col-md-4">
        <input type="number" step="0.01" name="Jasa_Kemasyarakatan_Sosial_dan_Perorangan" class="form-control"
          placeholder="Jasa Sosial & Perorangan (%)" required>
      </div>

      <div class="col-md-4">
        <input type="number" step="0.01" name="Jumlah" class="form-control" placeholder="Jumlah (%)" required>
      </div>

      <div class="col-12 form-footer">
        <button type="submit" class="btn btn-success">Tambah</button>
      </div>
    </form>


    {{-- Tabel Data --}}
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-secondary">
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
              <td colspan="{{ count($columnsDataPersentaseBekerjaMenurutLapanganUsaha) + 2 }}" class="text-muted">Belum ada
                data</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

  {{-- ====================== BAGIAN: Data PDRB Harga Berlaku Menurut Kategori (Miliar Rupiah) ====================== --}}
  <div class="container-custom">
    <h1>Data Nilai PDRB Atas Dasar Harga Berlaku Menurut Kategori (Miliar Rupiah)</h1>

    {{-- Form Tambah Data --}}
    <form action="{{ route('data_nilai_pdrb_dasar_harga_berlaku_menurut_kategori.store') }}" method="POST"
      class="row g-2 mt-2 mb-3">
      @csrf

      <div class="col-md-3">
        <input type="number" name="Tahun" class="form-control" placeholder="Tahun" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Pertanian_Kehutanan_dan_Perikanan" class="form-control"
          placeholder="Pertanian, Kehutanan & Perikanan" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Pertambangan_dan_Penggalian" class="form-control"
          placeholder="Pertambangan & Penggalian" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Industri_Pengolahan" class="form-control" placeholder="Industri Pengolahan"
          required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Pengadaan_Listrik_dan_Gas" class="form-control"
          placeholder="Pengadaan Listrik & Gas" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Pengadaan_Air_Pengelolaan_Sampah_Limbah_dan_Daur_Ulang"
          class="form-control" placeholder="Pengadaan Air & Pengelolaan Limbah" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Konstruksi" class="form-control" placeholder="Konstruksi" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Perdagangan_Besar_dan_Eceran_Reparasi_Mobil_dan_Sepeda_Motor"
          class="form-control" placeholder="Perdagangan & Reparasi" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Transportasi_dan_Pergudangan" class="form-control"
          placeholder="Transportasi & Pergudangan" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Penyediaan_Akomodasi_dan_Makan_Minuman" class="form-control"
          placeholder="Akomodasi & Makan Minum" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Informasi_dan_Komunikasi" class="form-control"
          placeholder="Informasi & Komunikasi" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Jasa_Keuangan_dan_Asuransi" class="form-control"
          placeholder="Jasa Keuangan & Asuransi" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Real_Estate" class="form-control" placeholder="Real Estate" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Jasa_Perusahaan" class="form-control" placeholder="Jasa Perusahaan"
          required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Administrasi_Pemerintahan_Pertahanan_dan_Jaminan_Sosial_Wajib"
          class="form-control" placeholder="Administrasi & Pertahanan" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Jasa_Pendidikan" class="form-control" placeholder="Jasa Pendidikan"
          required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Jasa_Kesehatan_dan_Kegiatan_Sosial" class="form-control"
          placeholder="Kesehatan & Kegiatan Sosial" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Jasa_Lainnya" class="form-control" placeholder="Jasa Lainnya" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Jumlah" class="form-control" placeholder="Jumlah Total (Miliar Rupiah)"
          required>
      </div>

      <div class="col-12 form-footer">
        <button type="submit" class="btn btn-success">Tambah</button>
      </div>
    </form>


    {{-- Tabel Data --}}
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-secondary">
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
              <td colspan="{{ count($columnsDataNilaiPDRBDasarHargaBerlakuMenurutKategori) + 2 }}" class="text-muted">Belum
                ada
                data</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>


  {{-- ====================== BAGIAN: Data Pertumbuhan Nilai Tambah per Kategori Kota Pontianak ======================--}}
  <div class="container-custom">
    <h1>Data Pertumbuhan Nilai Tambah Kategori Kota Pontianak</h1>

    {{-- Form Tambah Data --}}
    <form action="{{ route('data_pertumbuhan_nilai_tambah_kategori_kota_pontianak.store') }}" method="POST"
      class="row g-2 mt-2 mb-3">
      @csrf
      <div class="col-md-3">
        <input type="number" name="Tahun" class="form-control" placeholder="Tahun" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Pertanian_Kehutanan_dan_Perikanan" class="form-control"
          placeholder="Pertanian, Kehutanan & Perikanan" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Pertambangan_dan_Penggalian" class="form-control"
          placeholder="Pertambangan & Penggalian" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Industri_Pengolahan" class="form-control" placeholder="Industri Pengolahan"
          required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Pengadaan_Listrik_dan_Gas" class="form-control"
          placeholder="Pengadaan Listrik & Gas" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Pengadaan_Air_Pengelolaan_Sampah_Limbah_dan_Daur_Ulang"
          class="form-control" placeholder="Pengadaan Air & Pengelolaan Limbah" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Konstruksi" class="form-control" placeholder="Konstruksi" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Perdagangan_Besar_dan_Eceran_Reparasi_Mobil_dan_Sepeda_Motor"
          class="form-control" placeholder="Perdagangan & Reparasi" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Transportasi_dan_Pergudangan" class="form-control"
          placeholder="Transportasi & Pergudangan" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Penyediaan_Akomodasi_dan_Makan_Minuman" class="form-control"
          placeholder="Akomodasi & Makan Minum" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Informasi_dan_Komunikasi" class="form-control"
          placeholder="Informasi & Komunikasi" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Jasa_Keuangan_dan_Asuransi" class="form-control"
          placeholder="Jasa Keuangan & Asuransi" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Real_Estate" class="form-control" placeholder="Real Estate" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Jasa_Perusahaan" class="form-control" placeholder="Jasa Perusahaan"
          required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Administrasi_Pemerintahan_Pertahanan_dan_Jaminan_Sosial_Wajib"
          class="form-control" placeholder="Administrasi & Pertahanan" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Jasa_Pendidikan" class="form-control" placeholder="Jasa Pendidikan"
          required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Jasa_Kesehatan_dan_Kegiatan_Sosial" class="form-control"
          placeholder="Kesehatan & Kegiatan Sosial" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Jasa_Lainnya" class="form-control" placeholder="Jasa Lainnya" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Jumlah" class="form-control" placeholder="Jumlah Total (Miliar Rupiah)"
          required>
      </div>

      <div class="col-12 form-footer">
        <button type="submit" class="btn btn-success">Tambah</button>
      </div>
    </form>

    {{-- Tabel Data --}}
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-secondary">
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
                Belum
                ada
                data</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>


  {{-- ====================== BAGIAN: Data Kontribusi Kategori terhadap PDRB Kota Pontianak ====================== --}}
  <div class="container-custom">
    <h1>Data Kontribusi Kategori terhadap PDRB Kota Pontianak</h1>

    {{-- Form Tambah Data --}}
    <form action="{{ route('data_kontribusi_kategori_terhadap_pdrb_kota_pontianak.store') }}" method="POST"
      class="row g-2 mt-2 mb-3">
      @csrf
      <div class="col-md-3">
        <input type="number" name="Tahun" class="form-control" placeholder="Tahun" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Pertanian_Kehutanan_dan_Perikanan" class="form-control"
          placeholder="Pertanian, Kehutanan & Perikanan" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Pertambangan_dan_Penggalian" class="form-control"
          placeholder="Pertambangan & Penggalian" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Industri_Pengolahan" class="form-control" placeholder="Industri Pengolahan"
          required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Pengadaan_Listrik_dan_Gas" class="form-control"
          placeholder="Pengadaan Listrik & Gas" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Pengadaan_Air_Pengelolaan_Sampah_Limbah_dan_Daur_Ulang"
          class="form-control" placeholder="Pengadaan Air & Pengelolaan Limbah" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Konstruksi" class="form-control" placeholder="Konstruksi" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Perdagangan_Besar_dan_Eceran_Reparasi_Mobil_dan_Sepeda_Motor"
          class="form-control" placeholder="Perdagangan & Reparasi" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Transportasi_dan_Pergudangan" class="form-control"
          placeholder="Transportasi & Pergudangan" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Penyediaan_Akomodasi_dan_Makan_Minuman" class="form-control"
          placeholder="Akomodasi & Makan Minum" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Informasi_dan_Komunikasi" class="form-control"
          placeholder="Informasi & Komunikasi" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Jasa_Keuangan_dan_Asuransi" class="form-control"
          placeholder="Jasa Keuangan & Asuransi" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Real_Estate" class="form-control" placeholder="Real Estate" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Jasa_Perusahaan" class="form-control" placeholder="Jasa Perusahaan"
          required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Administrasi_Pemerintahan_Pertahanan_dan_Jaminan_Sosial_Wajib"
          class="form-control" placeholder="Administrasi & Pertahanan" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Jasa_Pendidikan" class="form-control" placeholder="Jasa Pendidikan"
          required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Jasa_Kesehatan_dan_Kegiatan_Sosial" class="form-control"
          placeholder="Kesehatan & Kegiatan Sosial" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Jasa_Lainnya" class="form-control" placeholder="Jasa Lainnya" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="Jumlah" class="form-control" placeholder="Jumlah Total (Miliar Rupiah)"
          required>
      </div>

      <div class="col-12 form-footer">
        <button type="submit" class="btn btn-success">Tambah</button>
      </div>
    </form>

    {{-- Tabel Data --}}
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-secondary">
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
                Belum
                ada
                data</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>


{{-- ====================== BAGIAN: TINGKAT INFLASI ====================== --}}
  <div class="container-custom">
    <h1>Data Tingkat Inflasi Kota Pontianak</h1>

    {{-- Form Tambah Data --}}
    <form action="{{ route('data_tingkat_inflasi_kota_pontianak.store') }}" method="POST" class="row g-2 mt-2 mb-3">
      @csrf
      <div class="col-md-6">
        <input type="number" name="Tahun" class="form-control" placeholder="Tahun" required>
      </div>
      <div class="col-md-6">
        <input type="number" step="0.01" name="Jumlah" class="form-control" placeholder="Jumlah (%)" required>
      </div>

      <div class="col-12 form-footer">
        <button type="submit" class="btn btn-success">Tambah</button>
      </div>
    </form>

    {{-- Tabel Data --}}
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-secondary">
          <tr>
            <th>No</th>
            @foreach ($columnsDataTingkatInflasiKotaPontianak as $column)
              @if (!in_array($column, ['id', 'created_at', 'updated_at']))
                <th>{{ ucwords(str_replace(['', '_'], [' ', ' '], preg_replace('/\s*\(.\)\s/', '', $column))) }}</th>
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
                <form action="{{ route('data_tingkat_inflasi_kota_pontianak.destroy', $data->id) }}"
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
              <td colspan="{{ count($columnsDataTingkatInflasiKotaPontianak) + 2 }}" class="text-muted">
                Belum
                ada
                data</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

  
@endsection