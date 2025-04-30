@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Kotak putih untuk konten -->
    <div class="bg-white p-5 rounded shadow-lg">
        <h1 class="text-center mb-4 text-2xl font-semibold text-gray-800">Tambah Program Keahlian</h1>
        
        <!-- Form tambah data -->
        <form action="{{ route('program_keahlian.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="id_bidang_keahlian" class="form-label">Bidang Keahlian</label>
                <select class="form-control" id="id_bidang_keahlian" name="id_bidang_keahlian" required>
                    <option value="">-- Pilih Bidang Keahlian --</option>
                    @foreach ($bidangKeahlian as $bidang)
                        <option value="{{ $bidang->id_bidang_keahlian }}">{{ $bidang->bidang_keahlian }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="kode_program_keahlian" class="form-label">Kode Program Keahlian</label>
                <input type="text" class="form-control" id="kode_program_keahlian" name="kode_program_keahlian" required>
            </div>
            <div class="mb-3">
                <label for="program_keahlian" class="form-label">Program Keahlian</label>
                <input type="text" class="form-control" id="program_keahlian" name="program_keahlian" required>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ route('program_keahlian.index') }}" class="btn btn-secondary btn-sm me-2">Kembali</a>
                <button type="submit" class="btn btn-success btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
