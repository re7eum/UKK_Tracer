<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Program Keahlian</title>
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <!-- Kotak putih untuk konten -->
    <div class="bg-white p-5 rounded shadow-lg">
        <h1 class="text-center mb-4 text-dark">Data Program Keahlian</h1>
        
        <!-- Tombol Kembali ke Dashboard -->
        <div class="mb-3 text-start">
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Kembali</a>
        </div>

        <!-- Menampilkan pesan sukses -->
        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tabel dengan border dan desain rapi -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Kode Program Keahlian</th>
                        <th>Program Keahlian</th>
                        <th>Bidang Keahlian</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($programKeahlian as $program)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $program->kode_program_keahlian }}</td>
                            <td>{{ $program->program_keahlian }}</td>
                            <td>{{ $program->bidangKeahlian->bidang_keahlian }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Link Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
