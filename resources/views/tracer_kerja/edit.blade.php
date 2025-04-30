@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Kotak putih untuk konten -->
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="text-center mb-4 text-2xl font-semibold text-gray-800">Edit Tracer Kerja</h1>

            <form action="{{ route('tracer_kerja.update', $tracerKerja->id_tracer_kerja) }}" method="POST">
    @csrf
    @method('PUT')

                <div class="mb-3">
                    <label for="id_alumni" class="form-label">Alumni</label>
                    <select class="form-control" id="id_alumni" name="id_alumni" required>
                        @foreach ($alumni as $alumnus)
                            <option value="{{ $alumnus->id_alumni }}" {{ $tracerKerja->id_alumni == $alumnus->id_alumni ? 'selected' : '' }}>
                                {{ $alumnus->nama_depan }} {{ $alumnus->nama_belakang }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="tracer_kerja_pekerjaan" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control" id="tracer_kerja_pekerjaan" name="tracer_kerja_pekerjaan" value="{{ $tracerKerja->tracer_kerja_pekerjaan }}" required>
                </div>

                <div class="mb-3">
                    <label for="tracer_kerja_nama" class="form-label">Nama Perusahaan</label>
                    <input type="text" class="form-control" id="tracer_kerja_nama" name="tracer_kerja_nama" value="{{ $tracerKerja->tracer_kerja_nama }}" required>
                </div>

                <div class="mb-3">
                    <label for="tracer_kerja_jabatan" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" id="tracer_kerja_jabatan" name="tracer_kerja_jabatan" value="{{ $tracerKerja->tracer_kerja_jabatan }}" required>
                </div>

                <div class="mb-3">
                    <label for="tracer_kerja_status" class="form-label">Status</label>
                    <input type="text" class="form-control" id="tracer_kerja_status" name="tracer_kerja_status" value="{{ $tracerKerja->tracer_kerja_status }}" required>
                </div>

                <div class="mb-3">
                    <label for="tracer_kerja_lokasi" class="form-label">Lokasi</label>
                    <input type="text" class="form-control" id="tracer_kerja_lokasi" name="tracer_kerja_lokasi" value="{{ $tracerKerja->tracer_kerja_lokasi }}" required>
                </div>

                <div class="mb-3">
                    <label for="tracer_kerja_alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="tracer_kerja_alamat" name="tracer_kerja_alamat" value="{{ $tracerKerja->tracer_kerja_alamat }}" required>
                </div>

                <div class="mb-3">
                    <label for="tracer_kerja_tgl_mulai" class="form-label">Tanggal Mulai Kerja</label>
                    <input type="date" class="form-control" id="tracer_kerja_tgl_mulai" name="tracer_kerja_tgl_mulai" value="{{ $tracerKerja->tracer_kerja_tgl_mulai }}" required>
                </div>

                <div class="mb-3">
                    <label for="tracer_kerja_gaji" class="form-label">Gaji</label>
                    <input type="text" class="form-control" id="tracer_kerja_gaji" name="tracer_kerja_gaji" value="{{ $tracerKerja->tracer_kerja_gaji }}" required>
                </div>
                  <!-- Tombol kembali -->
                <a href="{{ route('tracer_kerja.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
