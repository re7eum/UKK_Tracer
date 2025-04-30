<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tracer Kerja</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <!-- Kotak putih untuk konten -->
    <div class="card shadow-lg p-5">
        <h1 class="text-center mb-4 text-dark">Data Tracer Kerja</h1>

        <!-- Tombol Kembali ke Dashboard -->
        <div class="mb-3 text-start">
            <a href="{{ route('dashboard') }}" class="btn btn-secondary btn-sm">Kembali</a>
        </div>

        <!-- Tabel data tracer kerja -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama Alumni</th>
                        <th>Pekerjaan</th>
                        <th>Nama Perusahaan</th>
                        <th>Jabatan</th>
                        <th>Status</th>
                        <th>Lokasi</th>
                        <th>Alamat</th>
                        <th>Tanggal Mulai</th>
                        <th>Gaji</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tracerKerja as $index => $kerja)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $kerja->alumni->nama_depan }} {{ $kerja->alumni->nama_belakang }}</td>
                            <td>{{ $kerja->tracer_kerja_pekerjaan }}</td>
                            <td>{{ $kerja->tracer_kerja_nama }}</td>
                            <td>{{ $kerja->tracer_kerja_jabatan }}</td>
                            <td>{{ $kerja->tracer_kerja_status }}</td>
                            <td>{{ $kerja->tracer_kerja_lokasi }}</td>
                            <td>{{ $kerja->tracer_kerja_alamat }}</td>
                            <td>{{ $kerja->tracer_kerja_tgl_mulai }}</td>
                            <td>{{ $kerja->tracer_kerja_gaji }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Link ke Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
