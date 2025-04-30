<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kuesioner Kerja</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Sesuaikan tampilan CSS jika diperlukan */
        .container {
            max-width: 800px;
            margin-top: 50px;
        }
        h1 {
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-4">Edit Kuesioner Kerja</h1>

        <form action="{{ route('kuesioner_kerja.update', $kuesioner->id_kuesioner_kerja) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="id_alumni" class="form-label">Alumni</label>
                <select class="form-control" id="id_alumni" name="id_alumni" required>
                    <option value="">Pilih Alumni</option>
                    @foreach ($alumni as $alumnus)
                        <option value="{{ $alumnus->id_alumni }}" {{ $alumnus->id_alumni == $kuesioner->id_alumni ? 'selected' : '' }}>
                            {{ $alumnus->nama_depan }} {{ $alumnus->nama_belakang }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="id_tahun_lulus">Tahun Lulus</label>
                <select name="id_tahun_lulus" id="id_tahun_lulus" class="form-control">
                    <option value="">Pilih Tahun Lulus</option>
                    @foreach($tahunLulus as $tahun)
                        <option value="{{ $tahun->id_tahun_lulus }}" {{ $tahun->id_tahun_lulus == $kuesioner->id_tahun_lulus ? 'selected' : '' }}>
                            {{ $tahun->tahun_lulus }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="id_sekolah" class="form-label">Sekolah</label>
                <select name="id_sekolah" id="id_sekolah" class="form-control">
                    <option value="">--Pilih Sekolah--</option>
                    @foreach($sekolah as $sekolah)
                        <option value="{{ $sekolah->id_sekolah }}" {{ $sekolah->id_sekolah == $kuesioner->id_sekolah ? 'selected' : '' }}>
                            {{ $sekolah->nama_sekolah }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="id_status_alumni" class="form-label">Status Alumni</label>
                <select name="id_status_alumni" id="id_status_alumni" class="form-control">
                    <option value="">Pilih Status Alumni</option>
                    @foreach($statusAlumni as $status)
                        <option value="{{ $status->id_status_alumni }}" {{ $status->id_status_alumni == $kuesioner->id_status_alumni ? 'selected' : '' }}>
                            {{ $status->status }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="id_bidang_keahlian" class="form-label">Bidang Keahlian</label>
                <select class="form-control" id="id_bidang_keahlian" name="id_bidang_keahlian" required>
                    <option value="">-- Pilih Bidang Keahlian --</option>
                    @foreach ($bidangKeahlian as $bidang)
                        <option value="{{ $bidang->id_bidang_keahlian }}" {{ $bidang->id_bidang_keahlian == $kuesioner->id_bidang_keahlian ? 'selected' : '' }}>
                            {{ $bidang->bidang_keahlian }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="id_konsentrasi_keahlian">Konsentrasi Keahlian</label>
                <select name="id_konsentrasi_keahlian" id="id_konsentrasi_keahlian" class="form-control">
                    <option value="">--Pilih Konsentrasi Keahlian--</option>
                    @foreach($konsentrasiKeahlian as $konsentrasi)
                        <option value="{{ $konsentrasi->id_konsentrasi_keahlian }}" {{ $konsentrasi->id_konsentrasi_keahlian == $kuesioner->id_konsentrasi_keahlian ? 'selected' : '' }}>
                            {{ $konsentrasi->konsentrasi_keahlian }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                    <option value="Laki-laki" {{ $kuesioner->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ $kuesioner->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
             <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" name="umur" id="umur" class="form-control" value="{{ old('umur', $kuesioner->umur) }}" required>
        </div>

        <div class="form-group">
            <label for="motivasi_melanjutkan_pekerjaan">Motivasi Melanjutkan Pekerjaan</label>
            <textarea name="motivasi_melanjutkan_pekerjaan" id="motivasi_melanjutkan_pekerjaan" class="form-control" rows="3" required>{{ old('motivasi_melanjutkan_pekerjaan', $kuesioner->motivasi_melanjutkan_pekerjaan) }}</textarea>
        </div>

        <div class="form-group">
            <label for="bidang_karir">Bidang Karir</label>
            <input type="text" name="bidang_karir" id="bidang_karir" class="form-control" value="{{ old('bidang_karir', $kuesioner->bidang_karir) }}" required>
        </div>

        <div class="form-group">
            <label for="sektor_pekerjaan">Sektor Pekerjaan</label>
            <input type="text" name="sektor_pekerjaan" id="sektor_pekerjaan" class="form-control" value="{{ old('sektor_pekerjaan', $kuesioner->sektor_pekerjaan) }}" required>
        </div>

        <div class="form-group">
            <label for="pengalaman_kerja">Pengalaman Kerja</label>
            <textarea name="pengalaman_kerja" id="pengalaman_kerja" class="form-control" rows="3" required>{{ old('pengalaman_kerja', $kuesioner->pengalaman_kerja) }}</textarea>
        </div>

        <div class="form-group">
            <label for="keterampilan_digunakan">Keterampilan Digunakan</label>
            <input type="text" name="keterampilan_digunakan" id="keterampilan_digunakan" class="form-control" value="{{ old('keterampilan_digunakan', $kuesioner->keterampilan_digunakan) }}" required>
        </div>

        <div class="form-group">
            <label for="rencana_5_tahun">Rencana 5 Tahun</label>
            <textarea name="rencana_5_tahun" id="rencana_5_tahun" class="form-control" rows="3" required>{{ old('rencana_5_tahun', $kuesioner->rencana_5_tahun) }}</textarea>
        </div>

        <div class="form-group">
            <label for="minat_kerja_luar_negeri">Minat Kerja Luar Negeri</label>
            <select name="minat_kerja_luar_negeri" id="minat_kerja_luar_negeri" class="form-control">
                <option value="Ya" {{ $kuesioner->minat_kerja_luar_negeri == 'Ya' ? 'selected' : '' }}>Ya</option>
                <option value="Tidak" {{ $kuesioner->minat_kerja_luar_negeri == 'Tidak' ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>

        <div class="form-group">
            <label for="faktor_pemilihan_pekerjaan">Faktor Pemilihan Pekerjaan</label>
            <textarea name="faktor_pemilihan_pekerjaan" id="faktor_pemilihan_pekerjaan" class="form-control" rows="3" required>{{ old('faktor_pemilihan_pekerjaan', $kuesioner->faktor_pemilihan_pekerjaan) }}</textarea>
        </div>
  <div class="form-group">
            <label for="pendapat_jaringan_profesional">Pendapat Jaringan Profesional</label>
            <textarea name="pendapat_jaringan_profesional" id="pendapat_jaringan_profesional" class="form-control" rows="3" required>{{ old('pendapat_jaringan_profesional', $kuesioner->pendapat_jaringan_profesional) }}</textarea>
        </div>

        <div class="form-group">
            <label for="jenis_pekerjaan">Jenis Pekerjaan</label>
            <input type="text" name="jenis_pekerjaan" id="jenis_pekerjaan" class="form-control" value="{{ old('jenis_pekerjaan', $kuesioner->jenis_pekerjaan) }}" required>
         </div>

        <div class="form-group">
            <label for="preferensi_kerja">Preferensi Kerja</label>
            <input type="text" name="preferensi_kerja" id="preferensi_kerja" class="form-control" value="{{ old('preferensi_kerja', $kuesioner->preferensi_kerja) }}" required>
        </div>

        <div class="form-group">
            <label for="kesiapan_mental_fisik">Kesiapan Mental Fisik</label>
            <input type="text" name="kesiapan_mental_fisik" id="kesiapan_mental_fisik" class="form-control" value="{{ old('kesiapan_mental_fisik', $kuesioner->kesiapan_mental_fisik) }}" required>
        </div>

        <div class="form-group">
            <label for="harapan_pekerjaan">Harapan Pekerjaan</label>
            <textarea name="harapan_pekerjaan" id="harapan_pekerjaan" class="form-control" rows="3" required>{{ old('harapan_pekerjaan', $kuesioner->harapan_pekerjaan) }}</textarea>
         </div>




            <!-- Form fields continue similarly... -->

            <div class="form-group d-flex justify-content-between">
                <a href="{{ route('kuesioner_kerja.index') }}" class="btn btn-secondary btn-kembali">Kembali</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
