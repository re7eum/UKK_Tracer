@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Kotak putih untuk konten -->
    <div class="bg-white p-5 rounded shadow-lg">
        <h1 class="text-center mb-4 text-2xl font-semibold text-gray-800">Edit Status Alumni</h1>

        <form action="{{ route('status_alumni.update', $statusAlumni) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Status Alumni -->
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" id="status" name="status" value="{{ $statusAlumni->status }}" required maxlength="25">
            </div>

            <!-- Tombol Update dan Kembali -->
            <a href="{{ route('status_alumni.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
