@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Kotak putih untuk konten -->
    <div class="bg-white p-5 rounded shadow-lg">
        <h1 class="text-center mb-4 text-2xl font-semibold text-gray-800">Daftar Alumni</h1>
    
        <div class="mb-3 text-start">
        <a href="{{ route('app') }}" class="btn btn-secondary">Kembali </a>
        </div>
        <div class="mb-3 text-start">
        <a href="{{ route('alumni.create') }}" class="btn btn-primary">Tambah Alumni</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Tahun Lulus</th>
                        <th>Konsentrasi Keahlian</th>
                        <th>Status Alumni</th>
                        <th>NISN</th>
                        <th>NIK</th>
                        <th>Nama Depan</th>
                        <th>Nama Belakang</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Akun FB</th>
                        <th>Akun IG</th>
                        <th>Akun TikTok</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Status Login</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alumnis as $alumni)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $alumni->tahunLulus->tahun_lulus }}</td>
                            <td>{{ $alumni->konsentrasiKeahlian->konsentrasi_keahlian }}</td>
                            <td>{{ $alumni->statusAlumni->status }}</td>
                            <td>{{ $alumni->nisn }}</td>
                            <td>{{ $alumni->nik }}</td>
                            <td>{{ $alumni->nama_depan }}</td>
                            <td>{{ $alumni->nama_belakang }}</td>
                            <td>{{ $alumni->jenis_kelamin }}</td>
                            <td>{{ $alumni->tempat_lahir }}</td>
                            <td>{{ $alumni->tgl_lahir }}</td>
                            <td>{{ $alumni->alamat }}</td>
                            <td>{{ $alumni->no_hp }}</td>
                            <td>{{ $alumni->akun_fb }}</td>
                            <td>{{ $alumni->akun_ig }}</td>
                            <td>{{ $alumni->akun_tiktok }}</td>
                            <td>{{ $alumni->email }}</td>
                            <td>{{ $alumni->password }}</td>
                            <td>
                                @if ($alumni->status_login == 1)
                                    <span class="badge bg-success">Aktif</span>
                                @else
                                    <span class="badge bg-danger">Tidak Aktif</span>
                                @endif
                            </td>
                            <td>
                            <div class="d-flex">
                                <a href="{{ route('alumni.edit', $alumni->id_alumni) }}" class="btn btn-warning me-2">Edit</a>
                                <form action="{{ route('alumni.destroy', $alumni->id_alumni) }}" method="POST" class="d-inline">
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
</div>
@endsection
