@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Kotak putih untuk konten -->
    <div class="bg-white p-5 rounded shadow-lg">
        <h1 class="text-center mb-4 text-2xl font-semibold text-gray-800">Edit Konsentrasi Keahlian</h1>


        <form action="{{ route('konsentrasi_keahlian.update', $konsentrasiKeahlian) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Pilihan Program Keahlian -->
            <div class="mb-3">
                <label for="id_program_keahlian" class="form-label">Program Keahlian</label>
                <select class="form-control" id="id_program_keahlian" name="id_program_keahlian" required>
                    @foreach ($programKeahlian as $program)
                        <option value="{{ $program->id_program_keahlian }}" {{ $program->id_program_keahlian == $konsentrasiKeahlian->id_program_keahlian ? 'selected' : '' }}>
                            {{ $program->program_keahlian }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Input Kode Konsentrasi Keahlian -->
            <div class="mb-3">
                <label for="kode_konsentrasi_keahlian" class="form-label">Kode Konsentrasi Keahlian</label>
                <input type="text" class="form-control" id="kode_konsentrasi_keahlian" name="kode_konsentrasi_keahlian" value="{{ $konsentrasiKeahlian->kode_konsentrasi_keahlian }}" required>
            </div>

            <!-- Input Konsentrasi Keahlian -->
            <div class="mb-3">
                <label for="konsentrasi_keahlian" class="form-label">Konsentrasi Keahlian</label>
                <input type="text" class="form-control" id="konsentrasi_keahlian" name="konsentrasi_keahlian" value="{{ $konsentrasiKeahlian->konsentrasi_keahlian }}" required>
            </div>
                <!-- Tombol kembali -->
                <a href="{{ route('konsentrasi_keahlian.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
