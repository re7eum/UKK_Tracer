@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Kotak putih untuk konten -->
    <div class="bg-white p-5 rounded shadow-lg">
        <h1 class="text-center mb-4 text-2xl font-semibold text-gray-800">Data Status Alumni</h1>

        <div class="mb-3 text-start">
            <a href="{{ route('app') }}" class="btn btn-secondary btn-sm">Kembali</a>
        </div>
        <div class="mb-3 text-start">
        <a href="{{ route('status_alumni.create') }}" class="btn btn-primary mb-3">Tambah Status Alumni</a>
        </div>
        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                    <th>ID</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($statusAlumni as $status)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $status->status }}</td>
                        <td>
                            <a href="{{ route('status_alumni.edit', $status) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('status_alumni.destroy', $status) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
