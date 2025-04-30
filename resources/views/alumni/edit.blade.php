@extends('layouts.app')

@section('content')
<div class="container mt-5">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- Kotak putih untuk konten -->
    <div class="container mt-5">
    <div class="bg-white p-5 rounded shadow-lg">
        <h1 class="text-center mb-4 text-2xl font-semibold text-gray-800">Edit Alumni</h1>

        <div class="card-body">
            <form action="{{ route('alumni.update', $alumni) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="form-group mb-3">
                    <label for="id_tahun_lulus">Tahun Lulus</label>
                    <select name="id_tahun_lulus" id="id_tahun_lulus" class="form-control">
                        <option value="">Pilih Tahun Lulus</option>
                        @foreach($tahunLulus as $tahun)
                            <option value="{{ $tahun->id_tahun_lulus }}" {{ $alumni->id_tahun_lulus == $tahun->id_tahun_lulus ? 'selected' : '' }}>
                                {{ $tahun->tahun_lulus }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="id_konsentrasi_keahlian">Konsentrasi Keahlian</label>
                    <select name="id_konsentrasi_keahlian" id="id_konsentrasi_keahlian" class="form-control">
                        <option value="">Pilih Konsentrasi Keahlian</option>
                        @foreach($konsentrasiKeahlian as $konsentrasi)
                            <option value="{{ $konsentrasi->id_konsentrasi_keahlian }}" {{ $alumni->id_konsentrasi_keahlian == $konsentrasi->id_konsentrasi_keahlian ? 'selected' : '' }}>
                                {{ $konsentrasi->konsentrasi_keahlian }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="id_status_alumni">Status Alumni</label>
                    <select name="id_status_alumni" id="id_status_alumni" class="form-control">
                        <option value="">Pilih Status Alumni</option>
                        @foreach($statusAlumni as $status)
                            <option value="{{ $status->id_status_alumni }}" {{ $alumni->id_status_alumni == $status->id ? 'selected' : '' }}>
                                {{ $status->status }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="nisn">NISN</label>
                    <input type="text" name="nisn" id="nisn" class="form-control" value="{{ $alumni->nisn }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="nik">NIK</label>
                    <input type="text" name="nik" id="nik" class="form-control" value="{{ $alumni->nik }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="nama_depan">Nama Depan</label>
                    <input type="text" name="nama_depan" id="nama_depan" class="form-control" value="{{ $alumni->nama_depan }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="nama_belakang">Nama Belakang</label>
                    <input type="text" name="nama_belakang" id="nama_belakang" class="form-control" value="{{ $alumni->nama_belakang }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                        <option value="Laki-Laki" {{ $alumni->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                        <option value="Perempuan" {{ $alumni->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="{{ $alumni->tempat_lahir }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="{{ $alumni->tgl_lahir }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" rows="3" required>{{ $alumni->alamat }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="no_hp">No HP</label>
                    <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{ $alumni->no_hp }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="akun_fb">Akun Facebook</label>
                    <input type="text" name="akun_fb" id="akun_fb" class="form-control" value="{{ $alumni->akun_fb }}">
                </div>
                <div class="form-group mb-3">
                    <label for="akun_ig">Akun Instagram</label>
                    <input type="text" name="akun_ig" id="akun_ig" class="form-control" value="{{ $alumni->akun_ig }}">
                </div>
                <div class="form-group mb-3">
                    <label for="akun_tiktok">Akun TikTok</label>
                    <input type="text" name="akun_tiktok" id="akun_tiktok" class="form-control" value="{{ $alumni->akun_tiktok }}">
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $alumni->email }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <small>Biarkan kosong jika tidak ingin mengubah password</small>
                </div>
                <div class="form-group mb-3">
                    <label for="status_login">Status Login</label>
                    <select name="status_login" id="status_login" class="form-control" required>
                        <option value="0" {{ $alumni->status_login == 0 ? 'selected' : '' }}>Tidak Aktif</option>
                        <option value="1" {{ $alumni->status_login == 1 ? 'selected' : '' }}>Aktif</option>
                    </select>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('alumni.index') }}" class="btn btn-secondary btn-sm me-2">Kembali</a>
                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
