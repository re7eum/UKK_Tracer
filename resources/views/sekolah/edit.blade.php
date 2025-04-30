@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Kotak putih untuk konten -->
    <div class="bg-white p-5 rounded shadow-lg">
        <h1 class="text-center mb-4 text-2xl font-semibold text-gray-800">Edit Sekolah</h1>

        <form action="{{ route('sekolah.update', $sekolah) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="npsn" class="form-label">NPSN</label>
                <input type="text" class="form-control" id="npsn" name="npsn" value="{{ $sekolah->npsn }}" required>
            </div>
            <div class="mb-3">
                <label for="nss" class="form-label">NSS</label>
                <input type="text" class="form-control" id="nss" name="nss" value="{{ $sekolah->nss }}" required>
            </div>
            <div class="mb-3">
                <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
                <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" value="{{ $sekolah->nama_sekolah }}" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $sekolah->alamat }}" required>
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">No. Telp</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ $sekolah->no_telp }}" required>
            </div>
            <div class="mb-3">
                <label for="website" class="form-label">Website</label>
                <input type="url" class="form-control" id="website" name="website" value="{{ $sekolah->website }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $sekolah->email }}" required>
            </div>
             <!-- Tombol kembali -->
            <a href="{{ route('sekolah.index') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
