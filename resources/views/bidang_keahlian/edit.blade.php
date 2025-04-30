@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Kotak putih untuk konten -->
    <div class="bg-white p-5 rounded shadow-lg">
        <h1 class="text-center mb-4 text-2xl font-semibold text-gray-800">Edit Bidang Keahlian</h1>

        <form action="{{ route('bidang_keahlian.update', $bidangKeahlian) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Kode Bidang Keahlian -->
            <div class="mb-3">
                <label for="kode_bidang_keahlian" class="form-label">Kode Bidang Keahlian</label>
                <input type="text" class="form-control" id="kode_bidang_keahlian" name="kode_bidang_keahlian" value="{{ $bidangKeahlian->kode_bidang_keahlian }}" required>
            </div>

            <!-- Bidang Keahlian -->
            <div class="mb-3">
                <label for="bidang_keahlian" class="form-label">Bidang Keahlian</label>
                <input type="text" class="form-control" id="bidang_keahlian" name="bidang_keahlian" value="{{ $bidangKeahlian->bidang_keahlian }}" required>
            </div>

            <!-- Tombol kembali -->
                <a href="{{ route('bidang_keahlian.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
