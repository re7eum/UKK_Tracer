<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kuesioner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .form-control-lg {
            border-radius: 8px;
        }
        .btn-warning {
            background-color: #ffcc00;
            border-color: #ffcc00;
        }
        .btn-warning:hover {
            background-color: #e6b800;
            border-color: #e6b800;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4">
            <h2 class="text-center mb-4">Edit Kuesioner</h2>
            <form action="{{ route('kuesioner_kuliah.update', $kuesioner->id_kuesioner_kuliah) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="id_alumni" class="form-label">Nama Alumni</label>
                    <select name="id_alumni" class="form-control form-control-lg" required>
                        <option value="">Pilih Alumni</option>
                        @foreach($alumni as $item)
                            <option value="{{ $item->id_alumni }}" @if($item->id_alumni == $kuesioner->id_alumni) selected @endif>
                                {{ $item->nama_depan }} {{ $item->nama_belakang }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="id_status_alumni" class="form-label">Status Alumni</label>
                    <select name="id_status_alumni" class="form-control form-control-lg" required>
                        <option value="">Pilih Status Alumni</option>
                        @foreach($statusAlumni as $status)
                            <option value="{{ $status->id_status_alumni }}" @if($status->id_status_alumni == $kuesioner->id_status_alumni) selected @endif>
                                {{ $status->status }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="id_tracer_kuliah" class="form-label">Tracer Kuliah</label>
                    <select name="id_tracer_kuliah" class="form-control form-control-lg" required>
                        <option value="">Pilih Tracer Kuliah</option>
                        @foreach($tracerKuliah as $tracer)
                            <option value="{{ $tracer->id_tracer_kuliah }}" @if($tracer->id_tracer_kuliah == $kuesioner->id_tracer_kuliah) selected @endif>
                                {{ $tracer->tracer_kuliah_kampus }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="number" name="umur" class="form-control form-control-lg" value="{{ $kuesioner->umur }}" required>
                </div>

                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control form-control-lg" required>
                        <option value="L" @if($kuesioner->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                        <option value="P" @if($kuesioner->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="alasan_melanjutkan_kuliah" class="form-label">Alasan Melanjutkan Kuliah</label>
                    <textarea name="alasan_melanjutkan_kuliah" class="form-control form-control-lg" required>{{ $kuesioner->alasan_melanjutkan_kuliah }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="apa_yang_mendorong_anda" class="form-label">Apa yang Mendorong Anda?</label>
                    <textarea name="apa_yang_mendorong_anda" class="form-control form-control-lg" required>{{ $kuesioner->apa_yang_mendorong_anda }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="program_studi" class="form-label">Program Studi</label>
                    <input type="text" name="program_studi" class="form-control form-control-lg" value="{{ $kuesioner->program_studi }}" required>
                </div>

                <div class="mb-3">
                    <label for="harapan_setelah_kuliah" class="form-label">Harapan Setelah Kuliah</label>
                    <textarea name="harapan_setelah_kuliah" class="form-control form-control-lg" required>{{ $kuesioner->harapan_setelah_kuliah }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="persiapan_melanjutkan_kuliah" class="form-label">Persiapan Melanjutkan Kuliah</label>
                    <textarea name="persiapan_melanjutkan_kuliah" class="form-control form-control-lg" required>{{ $kuesioner->persiapan_melanjutkan_kuliah }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="faktor_pemilihan_universitas" class="form-label">Faktor Pemilihan Universitas</label>
                    <input type="text" name="faktor_pemilihan_universitas" class="form-control form-control-lg" value="{{ $kuesioner->faktor_pemilihan_universitas }}" required>
                </div>

                <div class="mb-3">
                    <label for="mencari_beasiswa" class="form-label">Mencari Beasiswa</label>
                    <select name="mencari_beasiswa" class="form-control form-control-lg" required>
                        <option value="1" @if($kuesioner->mencari_beasiswa) selected @endif>Ya</option>
                        <option value="0" @if(!$kuesioner->mencari_beasiswa) selected @endif>Tidak</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="jenis_beasiswa" class="form-label">Jenis Beasiswa</label>
                    <input type="text" name="jenis_beasiswa" class="form-control form-control-lg" value="{{ $kuesioner->jenis_beasiswa }}">
                </div>

                <div class="mb-3">
                    <label for="rencana_pembiayaan_kuliah" class="form-label">Rencana Pembiayaan Kuliah</label>
                    <input type="text" name="rencana_pembiayaan_kuliah" class="form-control form-control-lg" value="{{ $kuesioner->rencana_pembiayaan_kuliah }}" required>
                </div>

                <div class="mb-3">
                    <label for="tantangan_terbesar" class="form-label">Tantangan Terbesar</label>
                    <textarea name="tantangan_terbesar" class="form-control form-control-lg" required>{{ $kuesioner->tantangan_terbesar }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="harapan_kampus" class="form-label">Harapan Kampus</label>
                    <textarea name="harapan_kampus" class="form-control form-control-lg" required>{{ $kuesioner->harapan_kampus }}</textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('kuesioner_kuliah.index') }}" class="btn btn-secondary btn-lg">Kembali</a>
                    <button type="submit" class="btn btn-warning btn-lg">Update</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
