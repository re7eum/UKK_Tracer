@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Kotak putih untuk konten -->
    <div class="bg-white p-5 rounded shadow-lg">
        <h1 class="text-center mb-4 text-2xl font-semibold text-gray-800">Tambah Tahun Lulus</h1>
        

        <!-- Form tambah data -->
        <form action="{{ route('tahun_lulus.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
                <input type="text" class="form-control" id="tahun_lulus" name="tahun_lulus" required>
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan">
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ route('tahun_lulus.index') }}" class="btn btn-secondary me-2">Kembali</a>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
