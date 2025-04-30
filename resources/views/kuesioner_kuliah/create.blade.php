<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kuesioner</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #343a40;
        }
        .form-label {
            font-weight: bold;
            color: #495057;
        }
        .form-control {
            border-radius: 5px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        .btn-success {
            width: 100%;
            padding: 12px;
            font-size: 16px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Tambah Kuesioner</h2>

    <form action="{{ route('kuesioner_kuliah.store') }}" method="POST">
        <!-- CSRF Token -->
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <!-- Alumni -->
        <div class="mb-3">
            <label for="id_alumni" class="form-label">Alumni</label>
            <select class="form-control" id="id_alumni" name="id_alumni" required>
                <option value="">Pilih Alumni</option>
                @foreach ($alumni as $alumnus)
                    <option value="{{ $alumnus->id_alumni }}">{{ $alumnus->nama_depan }} {{ $alumnus->nama_belakang }}</option>
                @endforeach
            </select>
        </div>

        <!-- Tracer Kuliah -->
        <div class="form-group">
            <label for="id_tracer_kuliah" class="form-label">Tracer Kuliah</label>
            <select name="id_tracer_kuliah" class="form-control" required>
                <option value="">Pilih Tracer Kuliah</option>
                @foreach($tracerKuliah as $tracer)
                    <option value="{{ $tracer->id_tracer_kuliah }}">{{ $tracer->tracer_kuliah_kampus }}</option>
                @endforeach
            </select>
        </div>

        <!-- Status Alumni -->
        <div class="form-group mb-3">
            <label for="id_status_alumni" class="form-label">Status Alumni</label>
            <select name="id_status_alumni" id="id_status_alumni" class="form-control">
                <option value="">Pilih Status Alumni</option>
                @foreach($statusAlumni as $status)
                    <option value="{{ $status->id_status_alumni }}">{{ $status->status }}</option>
                @endforeach
            </select>
        </div>

        <!-- Umur -->
        <div class="form-group">
            <label for="umur" class="form-label">Umur</label>
            <input type="number" name="umur" class="form-control" required>
        </div>

        <!-- Jenis Kelamin -->
        <div class="form-group">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <!-- Alasan Melanjutkan Kuliah -->
        <div class="form-group">
            <label for="alasan_melanjutkan_kuliah" class="form-label">Alasan Melanjutkan Kuliah</label>
            <textarea name="alasan_melanjutkan_kuliah" class="form-control" required></textarea>
        </div>

        <!-- Apa yang Mendorong Anda -->
        <div class="form-group">
            <label for="apa_yang_mendorong_anda" class="form-label">Apa yang Mendorong Anda?</label>
            <textarea name="apa_yang_mendorong_anda" class="form-control" required></textarea>
        </div>

        <!-- Program Studi -->
        <div class="form-group">
            <label for="program_studi" class="form-label">Program Studi</label>
            <input type="text" name="program_studi" class="form-control" required>
        </div>

        <!-- Harapan Setelah Kuliah -->
        <div class="form-group">
            <label for="harapan_setelah_kuliah" class="form-label">Harapan Setelah Kuliah</label>
            <textarea name="harapan_setelah_kuliah" class="form-control" required></textarea>
        </div>

        <!-- Persiapan Melanjutkan Kuliah -->
        <div class="form-group">
            <label for="persiapan_melanjutkan_kuliah" class="form-label">Persiapan Melanjutkan Kuliah</label>
            <textarea name="persiapan_melanjutkan_kuliah" class="form-control" required></textarea>
        </div>

        <!-- Faktor Pemilihan Universitas -->
        <div class="form-group">
            <label for="faktor_pemilihan_universitas" class="form-label">Faktor Pemilihan Universitas</label>
            <input type="text" name="faktor_pemilihan_universitas" class="form-control" required>
        </div>

        <!-- Mencari Beasiswa -->
        <div class="form-group">
            <label for="mencari_beasiswa" class="form-label">Mencari Beasiswa?</label>
            <select name="mencari_beasiswa" class="form-control" required>
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
            </select>
        </div>

        <!-- Jenis Beasiswa -->
        <div class="form-group">
            <label for="jenis_beasiswa" class="form-label">Jenis Beasiswa</label>
            <input type="text" name="jenis_beasiswa" class="form-control">
        </div>

        <!-- Rencana Pembiayaan Kuliah -->
        <div class="form-group">
            <label for="rencana_pembiayaan_kuliah" class="form-label">Rencana Pembiayaan Kuliah</label>
            <input type="text" name="rencana_pembiayaan_kuliah" class="form-control" required>
        </div>

        <!-- Tantangan Terbesar -->
        <div class="form-group">
            <label for="tantangan_terbesar" class="form-label">Tantangan Terbesar</label>
            <textarea name="tantangan_terbesar" class="form-control" required></textarea>
        </div>

        <!-- Harapan Kampus -->
        <div class="form-group">
            <label for="harapan_kampus" class="form-label">Harapan Kampus</label>
            <textarea name="harapan_kampus" class="form-control" required></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
