@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Kotak putih untuk konten -->
    <div class="bg-white p-5 rounded shadow-lg">
        <h1 class="text-center mb-4 text-2xl font-semibold text-gray-800">Edit Tahun Lulus</h1>

        <!-- Form edit data -->
        <form action="{{ route('tahun_lulus.update', $tahunLulus) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
                <input type="text" class="form-control" id="tahun_lulus" name="tahun_lulus" value="{{ $tahunLulus->tahun_lulus }}" required>
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $tahunLulus->keterangan }}">
            </div>
                <!-- Tombol kembali -->
                <a href="{{ route('tahun_lulus.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
