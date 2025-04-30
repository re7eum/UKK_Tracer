@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Kotak putih untuk konten -->
    <div class="bg-white p-5 rounded shadow-lg">
        <h1 class="text-center mb-4 text-2xl font-semibold text-gray-800">Tambah Bidang Keahlian</h1>

        <form action="{{ route('bidang_keahlian.store') }}" method="POST">
            @csrf

            <!-- Kode Bidang Keahlian -->
            <div class="mb-3">
                <label for="kode_bidang_keahlian" class="form-label">Kode Bidang Keahlian</label>
                <input type="text" name="kode_bidang_keahlian" id="kode_bidang_keahlian" class="form-control" required>
            </div>

            <!-- Bidang Keahlian -->
            <div class="mb-3">
                <label for="bidang_keahlian" class="form-label">Bidang Keahlian</label>
                <input type="text" name="bidang_keahlian" id="bidang_keahlian" class="form-control" required>
            </div>

            <!-- Tombol Simpan -->
            <div class="d-flex justify-content-end">
            <a href="{{ route('bidang_keahlian.index') }}" class="btn btn-secondary btn-sm me-2">Kembali</a>
                <button type="submit" class="btn btn-success btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
