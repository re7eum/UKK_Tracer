@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Kotak putih untuk konten -->
    <div class="bg-white p-5 rounded shadow-lg">
        <h1 class="text-center mb-4 text-2xl font-semibold text-gray-800">Data Testimoni</h1>

        <div class="mb-3 text-start">
        <a href="{{ route('app') }}" class="btn btn-secondary">Kembali</a>
        </div>
        <div class="mb-3 text-start">
        <a href="{{ route('testimoni.create') }}" class="btn btn-primary">Tambah Testimoni</a>
        </div>  
       
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                    <th>ID</th>
                    <th>Nama Alumni</th>
                    <th>Testimoni</th>
                    <th>Tanggal Testimoni</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($testimoni as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->alumni->nama_depan }} {{ $item->alumni->nama_belakang }}</td>
                        <td>{{ $item->testimoni }}</td>
                        <td>{{ $item->tgl_testimoni }}</td>
                        <td>
                            <a href="{{ route('testimoni.edit', $item->id_testimoni) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('testimoni.destroy', $item->id_testimoni) }}" method="POST" style="display:inline;">
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
