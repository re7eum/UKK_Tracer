<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tracer Kuliah</title>
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
        <h1 class="text-center mb-4 text-dark">Data Tracer Kuliah</h1>

        <!-- Tombol Kembali ke Dashboard -->
        <div class="mb-3 text-start">
            <a href="{{ route('dashboard') }}" class="btn btn-secondary btn-sm">Kembali</a>
        </div>

        <!-- Menampilkan pesan sukses jika ada -->
        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tabel data tracer kuliah -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Kampus</th>
                        <th>Status</th>
                        <th>Jenjang</th>
                        <th>Jurusan</th>
                        <th>Linier</th>
                        <th>Alamat</th>
                        <th>Nama Alumni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tracerKuliah as $tracer)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $tracer->tracer_kuliah_kampus }}</td>
                            <td>{{ $tracer->tracer_kuliah_status }}</td>
                            <td>{{ $tracer->tracer_kuliah_jenjang }}</td>
                            <td>{{ $tracer->tracer_kuliah_jurusan }}</td>
                            <td>{{ $tracer->tracer_kuliah_linier }}</td>
                            <td>{{ $tracer->tracer_kuliah_alamat }}</td>
                            <td>{{ $tracer->alumni->nama_depan }} {{ $tracer->alumni->nama_belakang }}</td>
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
