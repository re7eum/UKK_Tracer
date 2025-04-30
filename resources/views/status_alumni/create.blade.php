@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Kotak putih untuk konten -->
    <div class="bg-white p-5 rounded shadow-lg">
        <h1 class="text-center mb-4 text-2xl font-semibold text-gray-800">Tambah Status Alumni</h1>

        <form action="{{ route('status_alumni.store') }}" method="POST">
            @csrf

            <!-- Status Alumni -->
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" id="status" name="status" required maxlength="25">
            </div>

            <!-- Tombol Simpan -->
            <div class="d-flex justify-content-end">
            <a href="{{ route('status_alumni.index') }}" class="btn btn-secondary mx-2">Kembali</a>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
