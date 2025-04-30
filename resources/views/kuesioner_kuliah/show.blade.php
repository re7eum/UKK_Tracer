<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kuesioner Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e9ecef;
            font-family: 'Roboto', sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .table-responsive {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
        }
        h2 {
            color: #495057;
            font-weight: bold;
        }
        th {
            width: 250px;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="card p-4">
            <h2 class="text-center mb-4">Detail Kuesioner Kuliah</h2>
            <a href="{{ route('kuesioner_kuliah.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
            <div class="mt-4">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama Lengkap</th>
                        <td>{{ $kuesioner->alumni->nama_depan }} {{ $kuesioner->alumni->nama_belakang }}</td>
                    </tr>
                    <tr>
                        <th>Umur</th>
                        <td>{{ $kuesioner->umur }}</td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>{{ $kuesioner->jenis_kelamin }}</td>
                    </tr>
                    <tr>
                        <th>Pendidikan Terakhir</th>
                        <td>{{ $kuesioner->statusAlumni->status }}</td>
                    </tr>
                    <tr>
                        <th>Alasan Melanjutkan Kuliah</th>
                        <td>{{ $kuesioner->alasan_melanjutkan_kuliah }}</td>
                    </tr>
                    <tr>
                        <th>Faktor Pendorong</th>
                        <td>{{ $kuesioner->apa_yang_mendorong_anda }}</td>
                    </tr>
                    <tr>
                        <th>Program Studi</th>
                        <td>{{ $kuesioner->program_studi }}</td>
                    </tr>
                    <tr>
                        <th>Harapan Setelah Kuliah</th>
                        <td>{{ $kuesioner->harapan_setelah_kuliah }}</td>
                    </tr>
                    <tr>
                        <th>Persiapan Melanjutkan Kuliah</th>
                        <td>{{ $kuesioner->persiapan_melanjutkan_kuliah }}</td>
                    </tr>
                    <tr>
                        <th>Universitas Tujuan</th>
                        <td>{{ $kuesioner->tracerKuliah->tracer_kuliah_kampus }}</td>
                    </tr>
                    <tr>
                        <th>Faktor Pemilihan Universitas</th>
                        <td>{{ $kuesioner->faktor_pemilihan_universitas }}</td>
                    </tr>
                    <tr>
                        <th>Berencana Beasiswa</th>
                        <td>{{ $kuesioner->berencana_beasiswa ? 'Ya' : 'Tidak' }}</td>
                    </tr>
                    <tr>
                        <th>Jenis Beasiswa</th>
                        <td>{{ $kuesioner->jenis_beasiswa }}</td>
                    </tr>
                    <tr>
                        <th>Rencana Pembiayaan Kuliah</th>
                        <td>{{ $kuesioner->rencana_pembiayaan_kuliah }}</td>
                    </tr>
                    <tr>
                        <th>Tantangan Terbesar</th>
                        <td>{{ $kuesioner->tantangan_terbesar }}</td>
                    </tr>
                    <tr>
                        <th>Harapan Kampus</th>
                        <td>{{ $kuesioner->harapan_kampus }}</td>
                    </tr>
                
                </table>
            </div>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
