<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kuesioner Kerja</title>
    <!-- Link to Bootstrap CSS for responsiveness -->
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
            <h2 class="text-center mb-4">Detail Kuesioner Kerja</h2>
            <a href="{{ route('kuesioner_kerja.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
            <div class="mt-4">
        <table class="table table-bordered">
            <tr>
                <th>Nama Lengkap</th>
                <td>{{ $kuesioner->alumni->nama_depan }} {{ $kuesioner->alumni->nama_belakang }}</td>
            </tr>
            <tr>
                <th>Tahun Lulus</th>
                <td>{{ $kuesioner->tahunLulus->tahun_lulus }}</td>
            </tr>
            <tr>
                <th>Alumni Sekolah</th>
                <td>{{ $kuesioner->sekolah->nama_sekolah }}</td>
            </tr>
            <tr>
                <th>Status Alumni</th>
                <td>{{ $kuesioner->statusAlumni->status }}</td>
            </tr>
            <tr>
                <th>Bidang Keahlian</th>
                <td>{{ $kuesioner->bidangKeahlian->bidang_keahlian }}</td>
            </tr>
            <tr>
                <th>Konsentrasi Keahlian</th>
                <td>{{ $kuesioner->konsentrasiKeahlian->konsentrasi_keahlian }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $kuesioner->jenis_kelamin }}</td>
            </tr>
            <tr>
                <th>Umur</th>
                <td>{{ $kuesioner->umur }}</td>
            </tr>
            <tr>
                <th>Motivasi Melanjutkan Pekerjaan</th>
                <td>{{ $kuesioner->motivasi_melanjutkan_pekerjaan }}</td>
            </tr>
            <tr>
                <th>Bidang Karir</th>
                <td>{{ $kuesioner->bidang_karir }}</td>
            </tr>
            <tr>
                <th>Sektor Pekerjaan</th>
                <td>{{ $kuesioner->sektor_pekerjaan }}</td>
            </tr>
            <tr>
                <th>Pengalaman Kerja</th>
                <td>{{ $kuesioner->pengalaman_kerja }}</td>
            </tr>
            <tr>
                <th>Keterampilan Digunakan</th>
                <td>{{ $kuesioner->keterampilan_digunakan }}</td>
            </tr>
            <tr>
                <th>Rencana 5 Tahun</th>
                <td>{{ $kuesioner->rencana_5_tahun }}</td>
            </tr>
            <tr>
                <th>Minat Kerja Luar Negeri</th>
                <td>{{ $kuesioner->minat_kerja_luar_negeri ? 'Ya' : 'Tidak' }}</td>
            </tr>
            <tr>
                <th>Faktor Pemilihan Pekerjaan</th>
                <td>{{ $kuesioner->faktor_pemilihan_pekerjaan }}</td>
            </tr>
            <tr>
                <th>Pendapat Jaringan Profesional</th>
                <td>{{ $kuesioner->pendapat_jaringan_profesional }}</td>
            </tr>
            <tr>
                <th>Jenis Pekerjaan</th>
                <td>{{ $kuesioner->jenis_pekerjaan }}</td>
            </tr>
            <tr>
                <th>Preferensi Kerja</th>
                <td>{{ $kuesioner->preferensi_kerja }}</td>
            </tr>
            <tr>
                <th>Kesiapan Mental Fisik</th>
                <td>{{ $kuesioner->kesiapan_mental_fisik }}</td>
            </tr>
            <tr>
                <th>Harapan Pekerjaan</th>
                <td>{{ $kuesioner->harapan_pekerjaan }}</td>
            </tr>
        </table>
    </div>


<!-- JS for Bootstrap (Optional, depending on your usage) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
