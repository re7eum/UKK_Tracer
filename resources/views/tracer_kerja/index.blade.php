@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Kotak putih untuk konten -->
    <div class="bg-white p-5 rounded shadow-lg">
        <h1 class="text-center mb-4 text-2xl font-semibold text-gray-800">Data Tracer Kerja</h1>


            <!-- Back Button -->
            <div class="mb-3 text-start">
            <a href="{{ route('app') }}" class="btn btn-secondary">Kembali</a>
            </div>
            <div class="mb-3 text-start">
            <a href="{{ route('tracer_kerja.create') }}" class="btn btn-primary">Tambah Tracer Kerja</a>
            </div>
            <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama Alumni</th>
                        <th>Pekerjaan</th>
                        <th>Nama Perusahaan</th>
                        <th>Jabatan</th>
                        <th>Status</th>
                        <th>Lokasi</th>
                        <th>Alamat</th>
                        <th>Tanggal Mulai</th>
                        <th>Gaji</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tracerKerja as $index => $kerja)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $kerja->alumni->nama_depan }} {{ $kerja->alumni->nama_belakang }}</td>
                            <td>{{ $kerja->tracer_kerja_pekerjaan }}</td>
                            <td>{{ $kerja->tracer_kerja_nama }}</td>
                            <td>{{ $kerja->tracer_kerja_jabatan }}</td>
                            <td>{{ $kerja->tracer_kerja_status }}</td>
                            <td>{{ $kerja->tracer_kerja_lokasi }}</td>
                            <td>{{ $kerja->tracer_kerja_alamat }}</td>
                            <td>{{ $kerja->tracer_kerja_tgl_mulai }}</td>
                            <td>{{ $kerja->tracer_kerja_gaji }}</td>
                            <td>
                            <div class="d-flex">
                                <a href="{{ route('tracer_kerja.edit', $kerja->id_tracer_kerja) }}" class="btn btn-warning me-2">Edit</a>
                                <form action="{{ route('tracer_kerja.destroy', $kerja->id_tracer_kerja) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
