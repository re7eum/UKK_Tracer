<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kuesioner Kerja</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 900px;
            margin-top: 50px;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h1 {
            color: #4CAF50;
            text-align: center;
            margin-bottom: 30px;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
        .btn-back {
            background-color: #6c757d;
            color: white;
        }
        .btn-back:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Kuesioner Kerja</h1>

        <form action="{{ route('kuesioner_kerja.store') }}" method="POST">
            @csrf

            <!-- Alumni -->
            <div class="form-group mb-3">
                <label for="id_alumni">Alumni</label>
                <select class="form-control" id="id_alumni" name="id_alumni" required>
                    <option value="">Pilih Alumni</option>
                    @foreach ($alumni as $alumnus)
                        <option value="{{ $alumnus->id_alumni }}">{{ $alumnus->nama_depan }} {{ $alumnus->nama_belakang }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Tahun Lulus -->
            <div class="form-group mb-3">
                <label for="id_tahun_lulus">Tahun Lulus</label>
                <select name="id_tahun_lulus" id="id_tahun_lulus" class="form-control">
                    <option value="">Pilih Tahun Lulus</option>
                    @foreach($tahunLulus as $tahun)
                        <option value="{{ $tahun->id_tahun_lulus }}" {{ old('id_tahun_lulus') == $tahun->id ? 'selected' : '' }}>
                            {{ $tahun->tahun_lulus }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Sekolah -->
            <div class="form-group mb-3">
                <label for="id_sekolah">Sekolah</label>
                <select name="id_sekolah" id="id_sekolah" class="form-control">
                    <option value="">--Pilih Sekolah--</option>
                    @foreach($sekolah as $sekolah)
                        <option value="{{ $sekolah->id_sekolah }}">{{ $sekolah->nama_sekolah }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Status Alumni -->
            <div class="form-group mb-3">
                <label for="id_status_alumni">Status Alumni</label>
                <select name="id_status_alumni" id="id_status_alumni" class="form-control">
                    <option value="">Pilih Status Alumni</option>
                    @foreach($statusAlumni as $status)
                        <option value="{{ $status->id_status_alumni }}">{{ $status->status }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Bidang Keahlian -->
            <div class="form-group mb-3">
                <label for="id_bidang_keahlian">Bidang Keahlian</label>
                <select class="form-control" id="id_bidang_keahlian" name="id_bidang_keahlian" required>
                    <option value="">-- Pilih Bidang Keahlian --</option>
                    @foreach ($bidangKeahlian as $bidang)
                        <option value="{{ $bidang->id_bidang_keahlian }}">{{ $bidang->bidang_keahlian }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Konsentrasi Keahlian -->
            <div class="form-group mb-3">
                <label for="id_konsentrasi_keahlian">Konsentrasi Keahlian</label>
                <select name="id_konsentrasi_keahlian" id="id_konsentrasi_keahlian" class="form-control">
                    <option value="">--Pilih Konsentrasi Keahlian--</option>
                    @foreach($konsentrasiKeahlian as $konsentrasi)
                        <option value="{{ $konsentrasi->id_konsentrasi_keahlian }}" {{ old('id_konsentrasi_keahlian') == $konsentrasi->id ? 'selected' : '' }}>
                            {{ $konsentrasi->konsentrasi_keahlian }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Jenis Kelamin -->
            <div class="form-group mb-3">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <!-- Umur -->
            <div class="form-group mb-3">
                <label for="umur">Umur</label>
                <input type="number" name="umur" id="umur" class="form-control" required>
            </div>

            <!-- Motivasi Melanjutkan Pekerjaan -->
            <div class="form-group mb-3">
                <label for="motivasi_melanjutkan_pekerjaan">Motivasi Melanjutkan Pekerjaan</label>
                <textarea name="motivasi_melanjutkan_pekerjaan" id="motivasi_melanjutkan_pekerjaan" class="form-control" rows="3" required></textarea>
            </div>

            <!-- Bidang Karir -->
            <div class="form-group mb-3">
                <label for="bidang_karir">Bidang Karir</label>
                <input type="text" name="bidang_karir" id="bidang_karir" class="form-control" required>
            </div>

            <!-- Sektor Pekerjaan -->
            <div class="form-group mb-3">
                <label for="sektor_pekerjaan">Sektor Pekerjaan</label>
                <input type="text" name="sektor_pekerjaan" id="sektor_pekerjaan" class="form-control" required>
            </div>

            <!-- Pengalaman Kerja -->
            <div class="form-group mb-3">
                <label for="pengalaman_kerja">Pengalaman Kerja</label>
                <textarea name="pengalaman_kerja" id="pengalaman_kerja" class="form-control" rows="3" required></textarea>
            </div>

            <!-- Keterampilan Digunakan -->
            <div class="form-group mb-3">
                <label for="keterampilan_digunakan">Keterampilan Digunakan</label>
                <input type="text" name="keterampilan_digunakan" id="keterampilan_digunakan" class="form-control" required>
            </div>

            <!-- Rencana 5 Tahun -->
            <div class="form-group mb-3">
                <label for="rencana_5_tahun">Rencana 5 Tahun</label>
                <textarea name="rencana_5_tahun" id="rencana_5_tahun" class="form-control" rows="3" required></textarea>
            </div>

            <!-- Minat Kerja Luar Negeri -->
            <div class="form-group mb-3">
                <label for="minat_kerja_luar_negeri">Minat Kerja Luar Negeri</label>
                <select name="minat_kerja_luar_negeri" id="minat_kerja_luar_negeri" class="form-control">
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                </select>
            </div>

            <!-- Faktor Pemilihan Pekerjaan -->
            <div class="form-group mb-3">
                <label for="faktor_pemilihan_pekerjaan">Faktor Pemilihan Pekerjaan</label>
                <textarea name="faktor_pemilihan_pekerjaan" id="faktor_pemilihan_pekerjaan" class="form-control" rows="3" required></textarea>
            </div>

            <!-- Pendapat Jaringan Profesional -->
            <div class="form-group mb-3">
                <label for="pendapat_jaringan_profesional">Pendapat Jaringan Profesional</label>
                <textarea name="pendapat_jaringan_profesional" id="pendapat_jaringan_profesional" class="form-control" rows="3" required></textarea>
            </div>

            <!-- Jenis Pekerjaan -->
            <div class="form-group mb-3">
                <label for="jenis_pekerjaan">Jenis Pekerjaan</label>
                <input type="text" name="jenis_pekerjaan" id="jenis_pekerjaan" class="form-control" required>
            </div>

            <!-- Preferensi Kerja -->
            <div class="form-group mb-3">
                <label for="preferensi_kerja">Preferensi Kerja</label>
                <input type="text" name="preferensi_kerja" id="preferensi_kerja" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="kesiapan_mental_fisik">Kesiapan Mental Fisik</label>
                <input type="text" name="kesiapan_mental_fisik" id="kesiapan_mental_fisik" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="harapan_pekerjaan">Harapan Pekerjaan</label>
                <textarea name="harapan_pekerjaan" id="harapan_pekerjaan" class="form-control" rows="3" required></textarea>
            </div>

            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-back" onclick="window.history.back();">Kembali</button>
                <button type="submit" class="btn btn-custom">Simpan</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.5/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
