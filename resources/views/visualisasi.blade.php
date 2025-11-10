@extends('layouts/app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-center mb-4 fw-bold">Dashboard Visualisasi Data</h1>

        <div class="row">
            <div class="col-xl-6 col-lg-6 mb-4 w-100">
                <!-- Grafik Persentase Luas Wilayah Start -->
                <div class="card shadow mb-5">
                    <div class="card-header fw-bold">
                        Grafik Data Luas Wilayah Per Kecamatan
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        <div style="width: 100%">
                            <canvas id="chartLuasWilayah" style="height: 25em;"></canvas>
                        </div>
                    </div>
                </div>
                <!-- Grafik Persentase Luas Wilayah End -->

                <!-- Grafik Jumlah Penduduk Kota Pontianak Start -->
                <div class="card shadow mb-5">
                    <div class="card-header fw-bold">
                        Grafik Data Jumlah Penduduk Kota Pontianak
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        <div style="width: 100%">
                            <canvas id="chartJumlahPenduduk" style="height: 25em;"></canvas>
                        </div>
                    </div>
                </div>
                <!-- Grafik Jumlah Penduduk Kota Pontianak End -->

                <!-- Grafik Jumlah dan Persentase Penduduk Miskin di Kota Pontianak  Start -->
                <div class="card shadow mb-5">
                    <div class="card-header fw-bold">
                        Grafik Data Jumlah dan Persentase Penduduk Miskin di Kota Pontianak
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        <div style="width: 100%">
                            <canvas id="chartJumlahPendudukMiskin" style="height: 25em;"></canvas>
                        </div>
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        <div style="width: 100%">
                            <canvas id="chartGarisKemiskinan" style="height: 25em;"></canvas>
                        </div>
                    </div>
                </div>
                <!-- Grafik Jumlah dan Persentase Penduduk Miskin di Kota Pontianak  End -->

                <!-- Grafik Indeks Pembangunan Manusia (IPM) Kota Pontianak Menurut Komponen Pembentuknya Start -->
                <div class="card shadow mb-5">
                    <div class="card-header fw-bold">
                        Grafik Indeks Pembangunan Manusia (IPM) Kota Pontianak Menurut Komponen Pembentuknya
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        <div style="width: 100%;">
                            <canvas id="chartIPMKotaPontianakMenurutKomponenPembentuknya" style="height: 25rem;"></canvas>
                        </div>
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        <div style="width: 100%;">
                            <canvas id="chartPengeluaranPerKapita" style="height: 25rem;"></canvas>
                        </div>
                    </div>
                </div>
                <!-- Grafik Indeks Pembangunan Manusia (IPM) Kota Pontianak Menurut Komponen Pembentuknya End -->

                <!-- Grafik IPM Menurut Kabupaten/Kota di Kalbar Start -->
                <div class="card shadow mb-5">
                    <div class="card-header fw-bold d-flex justify-content-between align-items-center">
                        <span>Grafik Data Indeks Pembangunan Manusia (IPM) Menurut Kabupaten/Kota di Kalimantan Barat</span>
                        {{-- Ini adalah Filternya --}}
                        <div class="d-flex align-items-center">
                            <label for="ipmKabupatenFilter" class="form-label me-2 mb-0">Tahun:</label>
                            <select id="ipmKabupatenFilter" class="form-select form-select-sm"
                                style="width: 100px;"></select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div style="height: 25rem;"> {{-- Wrapper untuk tinggi canvas --}}
                            <canvas id="chartIPMKabupaten"></canvas>
                        </div>
                    </div>
                </div>
                <!-- Grafik IPM Menurut Kabupaten/Kota di Kalbar End -->

                <!-- Grafik Kondisi Ketenagakerjaan Start -->
                <div class="card shadow mb-5">
                    <div class="card-header fw-bold">
                        Grafik Data Kondisi Ketenagakejaan Kota Pontianak
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        <div style="width: 100%;">
                            <canvas id="chartAngkatanKerja" style="height: 25rem;"></canvas>
                        </div>
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        <div style="width: 100%;">
                            <canvas id="chartJumlahAngkatanKerja" style="height: 25rem;"></canvas>
                        </div>
                    </div>
                </div>
                <!-- Grafik Kondisi Ketenagakerjaan End -->

                <!-- Grafik Tingkat Pengangguran Start -->
                <div class="card shadow mb-5">
                    <div class="card-header fw-bold">
                        Grafik Data Tingkat Pengangguran Terbuka
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        <div style="width: 100%;">
                            <canvas id="chartTingkatPengangguran" style="height: 25rem;"></canvas>
                        </div>
                    </div>
                </div>
                <!-- Grafik Tingkat Pengangguran End -->

                <!-- Grafik Data Nilai PDRB Start -->
                <div class="card shadow mb-5">
                    <div class="card-header fw-bold d-flex justify-content-between align-items-center">
                        <span>Grafik Data Nilai PDRB Atas Dasar Harga Berlaku Menurut Kategori</span>

                        {{-- Ini adalah Filternya --}}
                        <div class="d-flex align-items-center">
                            <label for="pdrbYearFilter" class="form-label me-2 mb-0">Tahun:</label>
                            <select id="pdrbYearFilter" class="form-select form-select-sm" style="width: 100px;"></select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div style="height: 25rem;"> {{-- Wrapper untuk tinggi canvas --}}
                            <canvas id="chartPDRB"></canvas>
                        </div>
                    </div>
                    <div class="card-footer bg-white pb-3">

                        <small>
                            <strong>Keterangan:</strong>
                            @foreach ($columnsDataNilaiPDRBDasarHargaBerlakuMenurutKategori as $index => $column)
                                <strong>{{ $loop->iteration }}.</strong>
                                {{ str_replace('_', ' ', $column) }}@if(!$loop->last),@endif
                            @endforeach
                        </small>


                    </div>
                </div>
                <!-- Grafik Data Nilai PDRB End -->

                <!-- Grafik Pertumbuhan Nilai Tambah Start -->
                <div class="card shadow mb-5">
                    <div class="card-header fw-bold d-flex justify-content-between align-items-center">
                        <span>Grafik Data Pertumbuhan Nilai Tambah Kategori Kota Pontianak (Persentase)</span>

                        {{-- Ini adalah Filternya --}}
                        <div class="d-flex align-items-center">
                            <label for="pertumbuhanNilaiFilter" class="form-label me-2 mb-0">Tahun:</label>
                            <select id="pertumbuhanNilaiFilter" class="form-select form-select-sm"
                                style="width: 100px;"></select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div style="height: 25rem;"> {{-- Wrapper untuk tinggi canvas --}}
                            <canvas id="chartPertumbuhanNilai"></canvas>
                        </div>
                    </div>
                    <div class="card-footer bg-white pb-3">
                        <small>
                            <strong>Keterangan:</strong>
                            @foreach ($columnsDataPertumbuhanNilaiTambahKategoriKotaPontianak as $index => $column)
                                <strong>{{ $loop->iteration }}.</strong>
                                {{ str_replace('_', ' ', $column) }}@if(!$loop->last),@endif
                            @endforeach
                        </small>

                    </div>
                </div>
                <!-- Grafik Pertumbuhan Nilai Tambah End -->

                <!-- Data Kontribusi Kategori terhadap PDRB Kota Pontianak Start -->
                <div class="card shadow mb-5">
                    <div class="card-header fw-bold">
                        Grafik Data Kontribusi Kategori terhadap PDRB Kota Pontianak
                    </div>
                    <div class="card-body">
                        <div style="height: 30rem;"> {{-- Buat lebih tinggi untuk menampung semua tahun --}}
                            <canvas id="chartKontribusi"></canvas>
                        </div>
                    </div>
                </div>
                <!-- Data Kontribusi Kategori terhadap PDRB Kota Pontianak End -->

                <!-- Chart Inflasi Start -->
                <div class="card shadow mb-5">
                    <div class="card-header fw-bold">
                        Grafik Data Tingkat Inflasi Kota Pontianak
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        <div style="width: 100%;">
                            <canvas id="chartInflasi" style="height: 25rem;"></canvas>
                        </div>
                    </div>
                </div>
                <!-- Chart Inflasi End -->
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- testing pake cdn dulu -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

    <script>
        Chart.register(ChartDataLabels);
        document.addEventListener('DOMContentLoaded', (event) => {
            // Chart Data Luas Wilayah Per Kecamatan Start
            try {
                const dataRawLuas = @json($DataLuasWilayahPerKecamatan);

                const labelLuas = dataRawLuas.map(data => data.Kecamatan);
                const dataLuas = dataRawLuas.map(data => data['Luas_(Km^2)']);

                const totalLuas = dataLuas.reduce((sum, current) => sum + parseFloat(current, 0));

                const ctxLuas = document.getElementById('chartLuasWilayah').getContext('2d');
                new Chart(ctxLuas, {
                    type: 'doughnut',
                    data: {
                        labels: labelLuas,
                        datasets: [{
                            label: 'Luas Wilayah (Km²)',
                            backgroundColor: [
                                '#0b5884',
                                '#4f8edc',
                                '#3caea3',
                                '#a8c686',
                                '#d9c97c',
                                '#f96b09'
                            ],
                            data: dataLuas,
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        cutout: '60%',
                        layout: {
                            padding: {
                                top: 40, // Ruang di atas
                                bottom: 40, // Ruang di bawah
                                left: 40, // Ruang di kiri
                                right: 40 // Ruang di kanan
                            }
                        },
                        plugins: {
                            legend: {
                                display: true,
                                position: 'right',
                                padding: 0,
                            },
                            tooltip: {
                                callbacks: {
                                    label: function (context) {
                                        let label = context.label || '';
                                        if (label) {
                                            label += ': ';
                                        }

                                        if (context.parsed !== null) {
                                            const value = context.parsed;
                                            const percentage = (value / totalLuas * 100).toFixed(2);
                                            label += value + ' Km² (' + percentage + '%)';
                                        }
                                        return label;
                                    }
                                }
                            },
                            datalabels: {
                                color: '#000',
                                textAlign: 'center',
                                font: {
                                    weight: 'bold',
                                    size: 14,
                                },
                                formatter: (value, ctx) => {
                                    return value + ' km2';
                                },
                                anchor: 'end',
                                align: 'end',
                                offset: 10,
                                display: 'auto',
                            }
                        },
                    },
                    plugins: [{
                        id: 'textInCenter',
                        beforeDraw: (chart) => {
                            const {
                                ctx,
                                width,
                                height
                            } = chart;
                            ctx.restore();

                            // Teks 1: "Total Luas" (Label)
                            const text1 = "Total Luas";
                            ctx.font = "14px sans-serif";
                            ctx.fillStyle = "#6c757d"; // Warna abu-abu
                            ctx.textBaseline = "middle";
                            const text1_X = Math.round((width - ctx.measureText(text1).width) / 2 - 86);
                            const text1_Y = height / 2 - 20; // Baris atas
                            ctx.fillText(text1, text1_X, text1_Y);

                            // Teks 2: Angka Total (Nilai)
                            const text2 = totalLuas.toFixed(2) + ' km²';
                            ctx.font = "bold 24px sans-serif"; // Bold dan besar
                            ctx.fillStyle = "#343a40"; // Warna gelap
                            const text2_X = Math.round((width - ctx.measureText(text2).width) / 2 - 86);
                            const text2_Y = height / 2 + 5; // Baris bawah
                            ctx.fillText(text2, text2_X, text2_Y);

                            ctx.save();
                        }
                    }]
                });
            } catch (e) {
                console.error("Gagal memuat chart Luas Wilayah: ", e);
            }
            // Chart Data Luas Wilayah Per Kecamatan End




            
            // Chart Data Jumlah Penduduk Kota Pontianak Start
            try {
                const dataRawJumlahPenduduk = @json($DataJumlahPendudukKotaPontianak);

                const labelTahun = dataRawJumlahPenduduk.map(data => data.Tahun);
                const labelJumlah = dataRawJumlahPenduduk.map(data => data.Jumlah);
                const labelLakiLaki = dataRawJumlahPenduduk.map(data => data['Laki_Laki']);
                const labelPerempuan = dataRawJumlahPenduduk.map(data => data['Perempuan']);

                const ctxPenduduk = document.getElementById('chartJumlahPenduduk').getContext('2d');
                new Chart(ctxPenduduk, {
                    data: {
                        labels: labelTahun,
                        datasets: [{
                            type: 'bar',
                            label: 'Laki-Laki',
                            backgroundColor: [
                                '#4f8edc'
                            ],
                            data: labelLakiLaki,
                        }, {
                            type: 'bar',
                            label: 'Perempuan',
                            backgroundColor: [
                                '#ff97a1ff'
                            ],
                            data: labelPerempuan,
                        }, {
                            type: 'line',
                            label: 'Jumlah Penduduk',
                            borderColor: '#f96b09',
                            backgroundColor: [
                                '#f96b09'
                            ],
                            data: labelJumlah
                        }]
                    },
                    options: {
                        plugins: {
                            datalabels: {
                                display: true,
                            },
                            legend: {
                                position: 'bottom',
                            }
                        },
                    }
                })
            } catch (e) {
                console.error("Gagal memuat chart Jumlah Penduduk: ", e);
            }
            // Chart Data Jumlah Penduduk Kota Pontianak End




            // Chart Data Jumlah Penduduk Miskin Start
            try {
                const dataRawJumlahPendudukMiskin = @json($DataJumlahPendudukMiskinKotaPontianak);

                const labelTahun = dataRawJumlahPendudukMiskin.map(data => data.Tahun);
                const labelGarisKemiskinan = dataRawJumlahPendudukMiskin.map(data => data['Garis_Kemiskinan_(Rp/Kapita/Bulan)']);
                const labelJumlahPendudukMiskin = dataRawJumlahPendudukMiskin.map(data => data.Jumlah_Penduduk_Miskin);
                const labelPersentasePendudukMiskin = dataRawJumlahPendudukMiskin.map(data => data.Persentase_Penduduk_Miskin);

                const ctxPendudukMiskin = document.getElementById('chartJumlahPendudukMiskin').getContext('2d');
                new Chart(ctxPendudukMiskin, {
                    type: 'bar',
                    data: {
                        labels: labelTahun,
                        datasets: [{
                            label: 'Jumlah',
                            data: labelJumlahPendudukMiskin,
                            backgroundColor: '#3caea3',

                        },
                        {
                            label: 'Persentase',
                            data: labelPersentasePendudukMiskin,
                            backgroundColor: '#a7c7e7',
                        }
                        ],
                    },
                    options: {
                        plugins: {
                            datalabels: {
                                display: true,
                            },
                            legend: {
                                position: 'bottom',
                            }
                        },
                    }
                })

                const ctxGarisKemiskinan = document.getElementById('chartGarisKemiskinan').getContext('2d');
                new Chart(ctxGarisKemiskinan, {
                    type: 'line',
                    data: {
                        labels: labelTahun,
                        datasets: [{
                            label: 'Garis Kemiskinan',
                            data: labelGarisKemiskinan,
                            borderColor: '#4f8edc',
                            backgroundColor: '#4f8edc',
                        }]
                    },
                    options: {
                        plugins: {
                            datalabels: {
                                display: true,
                            },
                            legend: {
                                position: 'bottom',
                            }
                        },
                    }
                })
            } catch (e) {
                console.error("Gagal memuat chart Jumlah Penduduk Miskin: ", e);
            }
            // Chart Data Jumlah Penduduk Miskin End




            // Chart Indeks Pembangunan Manusia (IPM) Kota Pontianak Menurut Komponen Pembentuknya Start
            try {
                const dataRawIPM = @json($DataIPMKotaPontianakMenurutKomponenPembentuknya);

                const labelTahun = dataRawIPM.map(data => data.Tahun);
                const labelAngkaHarapanHidup = dataRawIPM.map(data => data['Angka_Harapan_Hidup_(Tahun)']);
                const labelHarapanLamaSekolah = dataRawIPM.map(data => data['Harapan_Lama_Sekolah_(Tahun)']);
                const labelRataRataLamaSekolah = dataRawIPM.map(data => data['Rata_Rata_Lama_Sekolah_(Tahun)']);
                const labelIndeksPembangunanManusia = dataRawIPM.map(data => data['Indeks_Pembangunan_Manusia']);

                const ctxIPM = document.getElementById('chartIPMKotaPontianakMenurutKomponenPembentuknya').getContext('2d');
                new Chart(ctxIPM, {
                    data: {
                        labels: labelTahun,
                        datasets: [{
                            type: 'bar',
                            label: 'Angka Harapan Hidup',
                            data: labelAngkaHarapanHidup,
                            backgroundColor: '#4f8edc',

                        },
                        {
                            type: 'bar',
                            label: 'Harapan Lama Sekolah',
                            data: labelHarapanLamaSekolah,
                            backgroundColor: '#6fa8dc',
                        },
                        {
                            type: 'bar',
                            label: 'Rata Rata Lama Sekolah',
                            data: labelRataRataLamaSekolah,
                            backgroundColor: '#a7c7e7',
                        },
                        {
                            type: 'bar',
                            label: 'Indeks Pembangunan Manusia',
                            data: labelIndeksPembangunanManusia,
                            backgroundColor: '#4093a4',
                        }
                        ],
                    },
                    options: {
                        plugins: {
                            datalabels: {
                                display: true,
                            },
                            legend: {
                                position: 'bottom',
                            }
                        },
                    }
                });

                const labelPengeluaranPerKapita = dataRawIPM.map(data => data['Pengeluran_Per_Kapita_(Ribu_Rupiah)']);
                const ctxPengeluaranPerKapita = document.getElementById('chartPengeluaranPerKapita').getContext('2d');
                new Chart(ctxPengeluaranPerKapita, {
                    data: {
                        labels: labelTahun,
                        datasets: [{
                            type: 'line',
                            label: 'Pengeluaran Per Kapita',
                            data: labelPengeluaranPerKapita,
                            borderColor: '#4f8edc',
                            backgroundColor: '#4f8edc',
                        }],
                    },
                    options: {
                        plugins: {
                            datalabels: {
                                display: true,
                            },
                            legend: {
                                position: 'bottom',
                            }
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: false,
                                title: {
                                    display: true,
                                    text: 'Ribu Rupiah'
                                } // Menambahkan label sumbu Y
                            }
                        }
                    }
                });
            } catch (e) {
                console.error("Gagal memuat chart IPM Kota Pontianak: ", e);
            }

            // Chart Indeks Pembangunan Manusia (IPM) Kota Pontianak Menurut Komponen Pembentuknya End




            // Chart Data Indeks Pembangunan Manusia (IPM) Menurut Kabupaten/Kota di Kalimantan Barat Start
            try {
                // Variabel global untuk menampung instance chart
                let myIpmChart;


                const allIpmData = @json($DataIPMMenurutKabupatenKotaDiKalimantanBarat);
                const filterSelect = document.getElementById('ipmKabupatenFilter');
                const ctxIPM = document.getElementById('chartIPMKabupaten').getContext('2d');

                const ipmLabels = [
                    'Sambas', 'Bengkayang', 'Landak', 'Mempawah', 'Sanggau', 'Ketapang',
                    'Sintang', 'Kapuas Hulu', 'Sekadau', 'Melawi', 'Kayong Utara',
                    'Kubu Raya', 'Pontianak', 'Singkawang'
                ];

                // Definisikan Kunci Data (Harus SAMA DENGAN NAMA KOLOM DB)
                const ipmDataKeys = [
                    'Kabupaten_Sambas', 'Kabupaten_Bengkayang', 'Kabupaten_Landak',
                    'Kabupaten_Mempawah', 'Kabupaten_Sanggau', 'Kabupaten_Ketapang',
                    'Kabupaten_Sintang', 'Kabupaten_Kapuas_Hulu', 'Kabupaten_Sekadau',
                    'Kabupaten_Melawi', 'Kabupaten_Kayong_Utara', 'Kabupaten_Kubu_Raya',
                    'Kota_Pontianak', 'Kota_Singkawang'
                ];

                // Fungsi untuk mengisi dropdown filter
                function populateIpmFilter() {
                    filterSelect.innerHTML = ''; // Hapus opsi lama
                    allIpmData
                        .sort((a, b) => a.Tahun - b.Tahun) // Urutkan tahun
                        .forEach(item => {
                            const option = document.createElement('option');
                            option.value = item.Tahun;
                            option.text = item.Tahun;
                            filterSelect.appendChild(option);
                        });

                    // Pilih tahun terakhir sebagai default
                    if (allIpmData.length > 0) {
                        filterSelect.value = allIpmData[allIpmData.length - 1].Tahun;
                    }
                }

                // Fungsi untuk menggambar atau memperbarui chart
                function updateIpmChart() {
                    const selectedYear = filterSelect.value;

                    // Temukan data untuk tahun yang dipilih
                    const yearData = allIpmData.find(d => d.Tahun == selectedYear);
                    if (!yearData) return; // Jika data tidak ditemukan

                    // Ekstrak nilai IPM berdasarkan kunci data
                    const chartValues = ipmDataKeys.map(key => yearData[key]);

                    if (myIpmChart) {
                        // Jika chart sudah ada, perbarui datanya
                        myIpmChart.data.datasets[0].data = chartValues;
                        myIpmChart.data.datasets[0].label = 'IPM (' + selectedYear + ')';
                        myIpmChart.update();
                    } else {
                        // Jika chart belum ada, buat baru
                        myIpmChart = new Chart(ctxIPM, {
                            type: 'bar',
                            data: {
                                labels: ipmLabels, // Sumbu X [Sambas, Bengkayang, ...]
                                datasets: [{
                                    label: 'IPM (' + selectedYear + ')',
                                    data: chartValues,
                                    backgroundColor: '#a8c686',
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: {
                                    legend: {
                                        display: true,
                                        position: 'bottom'
                                    },
                                    tooltip: {
                                        callbacks: {
                                            label: function (context) {
                                                return 'IPM: ' + context.parsed.y;
                                            }
                                        }
                                    }
                                },
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        max: 100, // IPM maksimal 100
                                        title: {
                                            display: true,
                                            text: 'Nilai IPM'
                                        }
                                    },
                                    x: {
                                        // !! PENTING: Rotasi label agar tidak tumpang tindih !!
                                        ticks: {
                                            autoSkip: false,
                                            maxRotation: 90,
                                            minRotation: 90
                                        }
                                    }
                                }
                            }
                        });
                    }
                }

                // Jalankan semuanya
                populateIpmFilter();
                updateIpmChart(); // Gambar chart untuk pertama kali

                // Tambahkan Event Listener ke filter
                filterSelect.addEventListener('change', updateIpmChart);

            } catch (e) {
                console.error("Gagal memuat chart IPM Kabupaten: ", e);
            }
            // Chart Data Indeks Pembangunan Manusia (IPM) Menurut Kabupaten/Kota di Kalimantan Barat End




            // Chart Data Kondisi Ketenagakerjaan Kota Pontianak Start
            try {
                const dataRawKondisiKetenagakerjaan = @json($DataKondisiKetenagakerjaanKotaPontianak);

                const labelTahun = dataRawKondisiKetenagakerjaan.map(data => data.Tahun);
                const labelAngkatanKerja = dataRawKondisiKetenagakerjaan.map(data => data.Angkatan_Kerja);
                const labelBukanAngkatanKerja = dataRawKondisiKetenagakerjaan.map(data => data.Bukan_Angkatan_Kerja);
                const labelJumlah = dataRawKondisiKetenagakerjaan.map(data => data.Jumlah);

                const ctxAngkatanKerja = document.getElementById('chartAngkatanKerja').getContext('2d');
                new Chart(ctxAngkatanKerja, {
                    data: {
                        labels: labelTahun,
                        datasets: [{
                            type: 'bar',
                            label: 'Angkatan Kerja',
                            data: labelAngkatanKerja,
                            backgroundColor: '#d9c97c',

                        },
                        {
                            type: 'bar',
                            label: 'Bukan Angkatan Kerja',
                            data: labelBukanAngkatanKerja,
                            backgroundColor: '#f96b09',
                        }
                        ],
                    },
                    options: {
                        plugins: {
                            datalabels: {
                                display: true,
                            },
                            legend: {
                                position: 'bottom',
                            }
                        },
                    }
                });

                const ctxJumlahAngkatanKerja = document.getElementById('chartJumlahAngkatanKerja').getContext('2d');
                new Chart(ctxJumlahAngkatanKerja, {
                    data: {
                        labels: labelTahun,
                        datasets: [{
                            type: 'line',
                            label: 'Jumlah',
                            data: labelJumlah,
                            borderColor: '#ffd166',
                            backgroundColor: '#ffd166',
                        }],
                    },
                    options: {
                        plugins: {
                            datalabels: {
                                display: true,
                            },
                            legend: {
                                position: 'bottom',
                            }
                        },
                    }
                });
            } catch (e) {
                console.error("Gagal memuat chart Kondisi Ketenagakerjaan Kota Pontianak: ", e);
            }
            // Chart Data Kondisi Ketenagakerjaan Kota Pontianak End
            




            // Chart Data Tingkat Pengangguran Terbuka Start
            try {
                const dataRawTingkatPengangguran = @json($DataTingkatPengangguranTerbuka);

                const labelTahun = dataRawTingkatPengangguran.map(data => data.Tahun);
                const labelJumlah = dataRawTingkatPengangguran.map(data => data.Jumlah);

                const ctxTingkatPengangguran = document.getElementById('chartTingkatPengangguran').getContext('2d');
                new Chart(ctxTingkatPengangguran, {
                    data: {
                        labels: labelTahun,
                        datasets: [{
                            type: 'bar',
                            label: 'Jumlah Pengangguran Terbuka',
                            data: labelJumlah,
                            backgroundColor: '#a7c7e7',
                        }]
                    },
                    options: {
                        plugins: {
                            datalabels: {
                                display: true,
                            },
                            legend: {
                                position: 'bottom',
                            }
                        },
                    }
                });
            } catch (e) {
                console.error("Gagal memuat chart Tingkat Pengangguran Terbuka: ", e);
            }
            // Chart Data Tingkat Pengangguran Terbuka End



            // Chart Nilai PDRB Atas Dasar Harga Berlaku Menurut Kategori (Miliar Rupiah) Start
            try {
                // Variabel global untuk menampung instance chart
                let myPdrbChart;

                // Ambil semua data & elemen HTML
                const allPdrbData_Raw = @json($DataNilaiPDRBDasarHargaBerlakuMenurutKategori);

                const uniqueYear = new Map(allPdrbData_Raw.map(data => [data.Tahun, data]));
                const allPdrbData = Array.from(uniqueYear.values());

                const filterSelect = document.getElementById('pdrbYearFilter');
                const ctxPDRB = document.getElementById('chartPDRB').getContext('2d');

                // Definisikan Kategori (Harus urut dan SAMA DENGAN FOTO)
                const pdrbLabels = [
                    '1', '2', '3', '4', '5', '6', '7', '8', '9',
                    '10', '11', '12', '13', '14', '15', '16', '17'
                ];

                // Definisikan Kunci Data (Harus SAMA DENGAN NAMA KOLOM DB)
                const pdrbDataKeys = [
                    'Pertanian_Kehutanan_dan_Perikanan',
                    'Pertambangan_dan_Penggalian',
                    'Industri_Pengolahan',
                    'Pengadaan_Listrik_dan_Gas',
                    'Pengadaan_Air_Pengelolaan_Sampah_Limbah_dan_Daur_Ulang',
                    'Konstruksi',
                    'Perdagangan_Besar_dan_Eceran_Reparasi_Mobil_dan_Sepeda_Motor',
                    'Transportasi_dan_Pergudangan',
                    'Penyediaan_Akomodasi_dan_Makan_Minuman',
                    'Informasi_dan_Komunikasi',
                    'Jasa_Keuangan_dan_Asuransi',
                    'Real_Estate',
                    'Jasa_Perusahaan',
                    'Administrasi_Pemerintahan_Pertahanan_dan_Jaminan_Sosial_Wajib',
                    'Jasa_Pendidikan',
                    'Jasa_Kesehatan_dan_Kegiatan_Sosial',
                    'Jasa_Lainnya'
                ];

                // Fungsi untuk mengisi dropdown filter
                function populatePdrbFilter() {
                    allPdrbData.forEach(item => {
                        const option = document.createElement('option');
                        option.value = item.Tahun;
                        option.text = item.Tahun;
                        filterSelect.appendChild(option);
                    });
                    filterSelect.value = allPdrbData[allPdrbData.length - 1].Tahun;
                }

                // Fungsi untuk menggambar atau memperbarui chart
                function updatePdrbChart() {
                    const selectedYear = filterSelect.value;

                    // Temukan data untuk tahun yang dipilih
                    const yearData = allPdrbData.find(d => d.Tahun == selectedYear);
                    if (!yearData) return; // Jika data tidak ditemukan

                    // Ekstrak nilai berdasarkan kunci data
                    const chartValues = pdrbDataKeys.map(key => yearData[key]);

                    if (myPdrbChart) {
                        // Jika chart sudah ada, perbarui datanya
                        myPdrbChart.data.datasets[0].data = chartValues;
                        myPdrbChart.data.datasets[0].label = 'Jumlah (Tahun ' + selectedYear + ')';
                        myPdrbChart.update();
                    } else {
                        // Jika chart belum ada, buat baru
                        myPdrbChart = new Chart(ctxPDRB, {
                            type: 'bar',
                            data: {
                                labels: pdrbLabels, // Sumbu X [1, 2, 3, ...]
                                datasets: [{
                                    label: 'Jumlah (Tahun ' + selectedYear + ')',
                                    data: chartValues,
                                    backgroundColor: '#3caea3',

                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: {
                                    legend: {
                                        display: false
                                    }, // Sembunyikan legenda (karena ada di footer)
                                    tooltip: {
                                        callbacks: {
                                            // Kustomisasi tooltip agar menampilkan nama kategori
                                            title: function (tooltipItems) {
                                                // Ambil index (0-16)
                                                const index = tooltipItems[0].dataIndex;
                                                // Ambil nama kolom dari kunci data
                                                let label = pdrbDataKeys[index].replace(/_/g, ' ');
                                                // Kembalikan nomor + nama
                                                return (index + 1) + '. ' + label;
                                            },
                                            label: function (context) {
                                                return 'Jumlah: ' + context.parsed.y + ' Miliar';
                                            }
                                        }
                                    }
                                },
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        title: {
                                            display: true,
                                            text: 'Miliar Rupiah'
                                        }
                                    },
                                    x: {
                                        title: {
                                            display: true,
                                            text: 'Kategori'
                                        }
                                    }
                                }
                            }
                        });
                    }
                }

                // Jalankan semuanya
                populatePdrbFilter();
                updatePdrbChart(); // Gambar chart untuk pertama kali

                // Tambahkan Event Listener ke filter
                filterSelect.addEventListener('change', updatePdrbChart);

            } catch (e) {
                console.error("Gagal memuat chart PDRB: ", e);
            }
            // Chart Nilai PDRB Atas Dasar Harga Berlaku Menurut Kategori (Miliar Rupiah) End

            // Chart Data Pertumbuhan Nilai Tambah Kategori Kota Pontianak Start
            try {
                // Variabel global untuk menampung instance chart
                let myPertumbuhanChart;

                // Ambil semua data & elemen HTML
                const allPertumbuhanData = @json($DataPertumbuhanNilaiTambahKategoriKotaPontianak);
                const filterSelectPertumbuhan = document.getElementById('pertumbuhanNilaiFilter');
                const ctxPertumbuhan = document.getElementById('chartPertumbuhanNilai').getContext('2d');

                // Definisikan Kategori (Label Sumbu Y)
                // Sesuai gambar, kita gunakan angka
                const pertumbuhanLabels = [
                    '1', '2', '3', '4', '5', '6', '7', '8', '9',
                    '10', '11', '12', '13', '14', '15', '16', '17'
                ];

                // Definisikan Kunci Data (Harus SAMA DENGAN NAMA KOLOM DB)
                // Ini adalah 17 nama kolom kategori Anda
                const pertumbuhanDataKeys = [
                    'Pertanian_Kehutanan_dan_Perikanan',
                    'Pertambangan_dan_Penggalian',
                    'Industri_Pengolahan',
                    'Pengadaan_Listrik_dan_Gas',
                    'Pengadaan_Air_Pengelolaan_Sampah_Limbah_dan_Daur_Ulang',
                    'Konstruksi',
                    'Perdagangan_Besar_dan_Eceran_Reparasi_Mobil_dan_Sepeda_Motor',
                    'Transportasi_dan_Pergudangan',
                    'Penyediaan_Akomodasi_dan_Makan_Minuman',
                    'Informasi_dan_Komunikasi',
                    'Jasa_Keuangan_dan_Asuransi',
                    'Real_Estate',
                    'Jasa_Perusahaan',
                    'Administrasi_Pemerintahan_Pertahanan_dan_Jaminan_Sosial_Wajib',
                    'Jasa_Pendidikan',
                    'Jasa_Kesehatan_dan_Kegiatan_Sosial',
                    'Jasa_Lainnya'
                ];

                // Fungsi untuk mengisi dropdown filter
                function populatePertumbuhanFilter() {
                    filterSelectPertumbuhan.innerHTML = ''; // Hapus opsi lama

                    // Buat daftar tahun yang unik
                    const years = [...new Set(allPertumbuhanData.map(item => item.Tahun))];

                    years.sort((a, b) => a - b) // Urutkan tahun
                        .forEach(tahun => {
                            const option = document.createElement('option');
                            option.value = tahun;
                            option.text = tahun;
                            filterSelectPertumbuhan.appendChild(option);
                        });

                    // Pilih tahun terakhir sebagai default
                    if (years.length > 0) {
                        filterSelectPertumbuhan.value = years[years.length - 1];
                    }
                }

                // Fungsi untuk menggambar atau memperbarui chart
                function updatePertumbuhanChart() {
                    const selectedYear = filterSelectPertumbuhan.value;

                    // Temukan data untuk tahun yang dipilih
                    const yearData = allPertumbuhanData.find(d => d.Tahun == selectedYear);
                    if (!yearData) return; // Jika data tidak ditemukan

                    // Ekstrak nilai pertumbuhan berdasarkan kunci data
                    const chartValues = pertumbuhanDataKeys.map(key => yearData[key]);

                    if (myPertumbuhanChart) {
                        // Jika chart sudah ada, perbarui datanya
                        myPertumbuhanChart.data.datasets[0].data = chartValues;
                        myPertumbuhanChart.data.datasets[0].label = 'Pertumbuhan (Tahun ' + selectedYear + ')';
                        myPertumbuhanChart.update();
                    } else {
                        // Jika chart belum ada, buat baru
                        myPertumbuhanChart = new Chart(ctxPertumbuhan, {
                            type: 'bar',
                            data: {
                                labels: pertumbuhanLabels, // Sumbu Y [1, 2, 3, ...]
                                datasets: [{
                                    label: 'Pertumbuhan (Tahun ' + selectedYear + ')',
                                    data: chartValues,
                                    backgroundColor: '#a8c686',
                                }]
                            },
                            options: {
                                // !! INI KUNCINYA: Membuat chart jadi horizontal !!
                                indexAxis: 'x',

                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: {
                                    legend: {
                                        display: false,
                                        position: 'bottom'
                                    }, // Sembunyikan legenda
                                    tooltip: {
                                        callbacks: {
                                            // Kustomisasi tooltip agar menampilkan nama kategori
                                            title: function (tooltipItems) {
                                                const index = tooltipItems[0].dataIndex;
                                                let label = pertumbuhanDataKeys[index].replace(/_/g, ' ');
                                                return (index + 1) + '. ' + label;
                                            },
                                            label: function (context) {
                                                return 'Pertumbuhan: ' + context.parsed.y + '%';
                                            }
                                        }
                                    }
                                },
                                scales: {
                                    // Sumbu X (sekarang horizontal) adalah sumbu nilai
                                    x: {
                                        title: {
                                            display: true,
                                            text: 'Dalam Persentase (%)'
                                        },
                                        // Sesuai gambar, set min/max 0-100
                                        // min: 0,
                                        // max: 100
                                    },
                                    // Sumbu Y (sekarang vertikal) adalah sumbu kategori
                                    y: {
                                        title: {
                                            display: false
                                        }
                                    }
                                }
                            }
                        });
                    }
                }

                // Jalankan semuanya
                populatePertumbuhanFilter();
                updatePertumbuhanChart(); // Gambar chart untuk pertama kali

                // Tambahkan Event Listener ke filter
                filterSelectPertumbuhan.addEventListener('change', updatePertumbuhanChart);

            } catch (e) {
                console.error("Gagal memuat chart Pertumbuhan Nilai Tambah: ", e);
            }
            // Chart Data Pertumbuhan Nilai Tambah Kategori Kota Pontianak End

            // Chart Data Kontribusi Kategori terhadap PDRB Kota Pontianak Start
            try {
                const allKontribusiData = @json($DataKontribusiKategoriTerhadapPDRBKotaPontianak);
                const kontribusiLabels = allKontribusiData.map(d => d.Tahun).sort((a, b) => a - b);

                // Ambil nama kolom dari PHP (dinamis)
                const kontribusiKategori = @json($columnsDataKontribusiKategoriTerhadapPDRBKotaPontianak).map((col, index) => ({
                    key: col,
                    label: `${index + 1}. ${col.replaceAll('_', ' ')}`
                }));

                const kontribusiColors = [
                    '#708090', '#0b5884', '#4f8edc', '#6fa8dc', '#a7c7e7', '#4093a4',
                    '#2a9d8f', '#3caea3', '#81B29a', '#789262', '#a8c686', '#bee577',
                    '#d9c977', '#e9c46a', '#d4a373', '#f96b09', '#ffd166'
                ];

                const kontribusiDatasets = kontribusiKategori.map((kategori, index) => ({
                    label: kategori.label,
                    data: kontribusiLabels.map(tahun => {
                        const row = allKontribusiData.find(d => d.Tahun == tahun);
                        return row ? row[kategori.key] : 0;
                    }),
                    backgroundColor: kontribusiColors[index % kontribusiColors.length],
                }));

                const ctxKontribusi = document.getElementById('chartKontribusi').getContext('2d');
                new Chart(ctxKontribusi, {
                    type: 'bar',
                    data: {
                        labels: kontribusiLabels,
                        datasets: kontribusiDatasets
                    },
                    options: {
                        indexAxis: 'x',
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                display: true,
                                position: 'bottom'
                            },
                            tooltip: {
                                callbacks: {
                                    label: function (context) {
                                        return context.dataset.label + ': ' + context.parsed.y + '%';
                                    }
                                }
                            },

                            datalabels: {
                                display: false
                            }
                        },
                        scales: {
                            x: {
                                stacked: false,
                                title: { display: true, text: 'Dalam Persentase (%)' },
                                min: 0,
                                max: 100
                            },
                            y: {
                                stacked: false,
                                title: { display: true, text: 'Tahun' }
                            }
                        }
                    }
                });

            } catch (e) {
                console.error("Gagal memuat chart Kontribusi Kategori: ", e);
            }
            // Chart Data Kontribusi Kategori terhadap PDRB Kota Pontianak End

            // Chart Data Tingkat Inflasi Kota Pontianak Start
            try {
                const rawData = @json($DataTingkatInflasiKotaPontianak);

                const labelTahun = rawData.map(data => data.Tahun);
                const labelJumlah = rawData.map(data => data.Jumlah);

                const ctxInflasi = document.getElementById("chartInflasi").getContext('2d');
                new Chart(ctxInflasi, {
                    data: {
                        labels: labelTahun,
                        datasets: [{
                            type: 'bar',
                            label: 'Tingkat Inflasi',
                            data: labelJumlah,
                            backgroundColor: '#4f8edc',
                        }]
                    },
                    options: {
                        plugins: {
                            datalabels: {
                                display: true,
                            },
                            legend: {
                                position: 'bottom',
                            }
                        },
                    }
                });
            } catch (e) {
                console.error("Gagal memuat chart Inflasi: ", e);
            }
            // Chart Data Tingkat Inflasi Kota Pontianak End
        });
    </script>
@endpush