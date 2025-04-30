@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Kotak putih untuk konten -->
    <div class="bg-white p-5 rounded shadow-lg">
        <h1 class="text-center mb-4 text-2xl font-semibold text-gray-800">Tambah Konsentrasi Keahlian</h1>


        <form action="{{ route('konsentrasi_keahlian.store') }}" method="POST">
            @csrf

            <!-- Pilihan Program Keahlian -->
            <div class="mb-3">
                <label for="id_program_keahlian" class="form-label">Program Keahlian</label>
                <select class="form-control" id="id_program_keahlian" name="id_program_keahlian" required>
                    <option value="">-- Pilih Program Keahlian --</option>
                    @foreach ($programKeahlian as $program)
                        <option value="{{ $program->id_program_keahlian }}">{{ $program->program_keahlian }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Input Kode Konsentrasi Keahlian -->
            <div class="mb-3">
                <label for="kode_konsentrasi_keahlian" class="form-label">Kode Konsentrasi Keahlian</label>
                <input type="text" class="form-control" id="kode_konsentrasi_keahlian" name="kode_konsentrasi_keahlian" required>
            </div>

            <!-- Input Konsentrasi Keahlian -->
            <div class="mb-3">
                <label for="konsentrasi_keahlian" class="form-label">Konsentrasi Keahlian</label>
                <input type="text" class="form-control" id="konsentrasi_keahlian" name="konsentrasi_keahlian" required>
            </div>

            <!-- Tombol Simpan dan Kembali -->
            <div class="d-flex justify-content-end">
                <a href="{{ route('konsentrasi_keahlian.index') }}" class="btn btn-secondary btn-sm me-2">Kembali</a>
                <button type="submit" class="btn btn-success btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
