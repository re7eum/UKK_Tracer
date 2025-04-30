@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Kotak putih untuk konten -->
    <div class="bg-white p-5 rounded shadow-lg">
        <h1 class="text-center mb-4 text-2xl font-semibold text-gray-800">Data Tracer Kuliah</h1>

            <!-- Back Button -->
            <div class="mb-3 text-start">
            <a href="{{ route('app') }}" class="btn btn-secondary">Kembali</a>
            </div>
            <div class="mb-3 text-start">
            <a href="{{ route('tracer_kuliah.create') }}" class="btn btn-primary">Tambah Tracer Kuliah</a>
            </div>
            @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Kampus</th>
                        <th>Status</th>
                        <th>Jenjang</th>
                        <th>Jurusan</th>
                        <th>Linier</th>
                        <th>Alamat</th>
                        <th>Nama Alumni</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tracerKuliah as $tracer)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $tracer->tracer_kuliah_kampus }}</td>
                            <td>{{ $tracer->tracer_kuliah_status }}</td>
                            <td>{{ $tracer->tracer_kuliah_jenjang }}</td>
                            <td>{{ $tracer->tracer_kuliah_jurusan }}</td>
                            <td>{{ $tracer->tracer_kuliah_linier }}</td>
                            <td>{{ $tracer->tracer_kuliah_alamat }}</td>
                            <td>{{ $tracer->alumni->nama_depan }} {{ $tracer->alumni->nama_belakang }}</td>
                            <td>
                            <div class="d-flex gap-2">
                                    <a href="{{ route('tracer_kuliah.edit', $tracer) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('tracer_kuliah.destroy', $tracer) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
