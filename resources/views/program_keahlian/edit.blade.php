@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Kotak putih untuk konten -->
    <div class="bg-white p-5 rounded shadow-lg">
        <h1 class="text-center mb-4 text-2xl font-semibold text-gray-800">Edit Program Keahlian</h1>
        
        <!-- Form edit program keahlian -->
        <form action="{{ route('program_keahlian.update', $programKeahlian) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="id_bidang_keahlian" class="form-label">Bidang Keahlian</label>
                <select class="form-control" id="id_bidang_keahlian" name="id_bidang_keahlian" required>
                    @foreach ($bidangKeahlian as $bidang)
                        <option value="{{ $bidang->id_bidang_keahlian }}" {{ $bidang->id_bidang_keahlian == $programKeahlian->id_bidang_keahlian ? 'selected' : '' }}>
                            {{ $bidang->bidang_keahlian }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="kode_program_keahlian" class="form-label">Kode Program Keahlian</label>
                <input type="text" class="form-control" id="kode_program_keahlian" name="kode_program_keahlian" value="{{ $programKeahlian->kode_program_keahlian }}" required>
            </div>

            <div class="mb-3">
                <label for="program_keahlian" class="form-label">Program Keahlian</label>
                <input type="text" class="form-control" id="program_keahlian" name="program_keahlian" value="{{ $programKeahlian->program_keahlian }}" required>
            </div>

           
                <!-- Tombol kembali -->
                <a href="{{ route('program_keahlian.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
