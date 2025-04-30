<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Alumni</title>
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <!-- Kotak putih untuk konten -->
    <div class="bg-white p-5 rounded shadow-lg">
        <h1 class="text-center mb-4 text-2xl font-semibold text-dark">Daftar Alumni</h1>
    
        <div class="mb-3 text-start">
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Kembali</a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Tahun Lulus</th>
                        <th>Konsentrasi Keahlian</th>
                        <th>Status Alumni</th>
                        <th>NISN</th>
                        <th>NIK</th>
                        <th>Nama Depan</th>
                        <th>Nama Belakang</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Akun FB</th>
                        <th>Akun IG</th>
                        <th>Akun TikTok</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Status Login</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alumnis as $alumni)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $alumni->tahunLulus->tahun_lulus }}</td>
                            <td>{{ $alumni->konsentrasiKeahlian->konsentrasi_keahlian }}</td>
                            <td>{{ $alumni->statusAlumni->status }}</td>
                            <td>{{ $alumni->nisn }}</td>
                            <td>{{ $alumni->nik }}</td>
                            <td>{{ $alumni->nama_depan }}</td>
                            <td>{{ $alumni->nama_belakang }}</td>
                            <td>{{ $alumni->jenis_kelamin }}</td>
                            <td>{{ $alumni->tempat_lahir }}</td>
                            <td>{{ $alumni->tgl_lahir }}</td>
                            <td>{{ $alumni->alamat }}</td>
                            <td>{{ $alumni->no_hp }}</td>
                            <td>{{ $alumni->akun_fb }}</td>
                            <td>{{ $alumni->akun_ig }}</td>
                            <td>{{ $alumni->akun_tiktok }}</td>
                            <td>{{ $alumni->email }}</td>
                            <td>{{ $alumni->password }}</td>
                            <td>
                                @if ($alumni->status_login == 1)
                                    <span class="badge bg-success">Aktif</span>
                                @else
                                    <span class="badge bg-danger">Tidak Aktif</span>
                                @endif
                            </td>
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
