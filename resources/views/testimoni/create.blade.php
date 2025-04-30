@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Kotak putih untuk konten -->
    <div class="bg-white p-5 rounded shadow-lg">
        <h1 class="text-center mb-4 text-2xl font-semibold text-gray-800">Tambah Testimoni</h1>

        <form action="{{ route('testimoni.store') }}" method="POST">
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
                <label for="testimoni" class="form-label">Testimoni</label>
                <textarea class="form-control" id="testimoni" name="testimoni" required></textarea>
            </div>

            <div class="mb-3">
                <label for="tgl_testimoni" class="form-label">Tanggal Testimoni</label>
                <input type="date" class="form-control" id="tgl_testimoni" name="tgl_testimoni" required>
            </div>
            <div class="d-flex justify-content-end">
            <a href="{{ route('testimoni.index') }}" class="btn btn-secondary btn-sm me-2">Kembali</a>
            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
        </div>
        </form>
    </div>
</div>
@endsection
