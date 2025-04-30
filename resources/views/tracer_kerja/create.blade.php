@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Kotak putih untuk konten -->
    <div class="bg-white p-5 rounded shadow-lg">
        <h1 class="text-center mb-4 text-2xl font-semibold text-gray-800">Tambah Tracer Kerja</h1>

       
            <form action="{{ route('tracer_kerja.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="id_alumni" class="form-label">Alumni</label>
                    <select class="form-control" id="id_alumni" name="id_alumni" required>
                        <option value="">Pilih Alumni</option>
                        @foreach ($alumni as $alumnus)
                            <option value="{{ $alumnus->id_alumni }}">{{ $alumnus->nama_depan }} {{ $alumnus->nama_belakang }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tracer_kerja_pekerjaan" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control" id="tracer_kerja_pekerjaan" name="tracer_kerja_pekerjaan" required>
                </div>
                <div class="mb-3">
                    <label for="tracer_kerja_nama" class="form-label">Nama Perusahaan</label>
                    <input type="text" class="form-control" id="tracer_kerja_nama" name="tracer_kerja_nama" required>
                </div>
                <div class="mb-3">
                    <label for="tracer_kerja_jabatan" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" id="tracer_kerja_jabatan" name="tracer_kerja_jabatan" required>
                </div>
                <div class="mb-3">
                    <label for="tracer_kerja_status" class="form-label">Status</label>
                    <input type="text" class="form-control" id="tracer_kerja_status" name="tracer_kerja_status" required>
                </div>
                <div class="mb-3">
                    <label for="tracer_kerja_lokasi" class="form-label">Lokasi</label>
                    <input type="text" class="form-control" id="tracer_kerja_lokasi" name="tracer_kerja_lokasi" required>
                </div>
                <div class="mb-3">
                    <label for="tracer_kerja_alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="tracer_kerja_alamat" name="tracer_kerja_alamat" required>
                </div>
                <div class="mb-3">
                    <label for="tracer_kerja_tgl_mulai" class="form-label">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="tracer_kerja_tgl_mulai" name="tracer_kerja_tgl_mulai" required>
                </div>
                <div class="mb-3">
                    <label for="tracer_kerja_gaji" class="form-label">Gaji</label>
                    <input type="text" class="form-control" id="tracer_kerja_gaji" name="tracer_kerja_gaji" required>
                </div>
                <div class="d-flex justify-content-end">
                <a href="{{ route('tracer_kerja.index') }}" class="btn btn-secondary btn-sm me-2">Kembali</a>
                <button type="submit" class="btn btn-success btn-sm">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
