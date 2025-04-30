<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\KonsentrasiKeahlian;
use App\Models\StatusAlumni;
use App\Models\TahunLulus;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    // Menampilkan daftar alumni
    public function index()
    {
        $alumnis = Alumni::all(); // Ambil semua data alumni
        return view('alumni.index', compact('alumnis'));
    }

    

    // Menampilkan form untuk menambah alumni
    public function create()
    {
        $konsentrasiKeahlian = KonsentrasiKeahlian::all();
        $tahunLulus = TahunLulus::all();
        $statusAlumni = StatusAlumni::all();
        return view('alumni.create', compact('konsentrasiKeahlian', 'tahunLulus', 'statusAlumni'));
    }

    // Menyimpan data alumni baru
    public function store(Request $request)
    {
        // dd($request->all());            
        // Validasi input dari form
        $validatedData = $request->validate([
            'id_tahun_lulus' => 'required|exists:tb_tahun_lulus,id_tahun_lulus',
            'id_konsentrasi_keahlian' => 'required|exists:tbl_konsentrasi_keahlian,id_konsentrasi_keahlian',
            'id_status_alumni' => 'required|exists:tbl_status_alumni,id_status_alumni',
            'nisn' => 'required|numeric',
            'nik' => 'required|numeric',
            'nama_depan' => 'required|string|max:255',
            'nama_belakang' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|in:Laki-Laki,Perempuan',
            'tempat_lahir' => 'required|string|max:255',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|numeric',
            'akun_fb' => 'nullable|string|max:255',
            'akun_ig' => 'nullable|string|max:255',
            'akun_tiktok' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8',
            'status_login' => 'required|boolean',
        ]);

        // Menyimpan data ke database
        Alumni::create($request->all());    

        // Redirect ke halaman daftar alumni
        return redirect()->route('alumni.index')->with('success', 'Alumni berhasil ditambahkan');
    }

    // Menampilkan form untuk mengedit data alumni
    public function edit($id)
    {
        $konsentrasiKeahlian = KonsentrasiKeahlian::all();
        $tahunLulus = TahunLulus::all();
        $statusAlumni = StatusAlumni::all();
        $alumni = Alumni::findOrFail($id); // Ambil data alumni berdasarkan ID
        return view('alumni.edit', compact('alumni', 'konsentrasiKeahlian', 'tahunLulus', 'statusAlumni'));
    }

    // Memperbarui data alumni
    public function update(Request $request, $id)
    {
        // Validasi input dari form
        $validatedData = $request->validate([
            'id_tahun_lulus' => 'required|exists:tb_tahun_lulus,id_tahun_lulus',
            'id_konsentrasi_keahlian' => 'required|exists:tbl_konsentrasi_keahlian,id_konsentrasi_keahlian',
            'id_status_alumni' => 'required|exists:tbl_status_alumni,id_status_alumni',
            'nisn' => 'required|numeric',
            'nik' => 'required|numeric',
            'nama_depan' => 'required|string|max:255',
            'nama_belakang' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|in:Laki-Laki,Perempuan',
            'tempat_lahir' => 'required|string|max:255',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|numeric',
            'akun_fb' => 'nullable|string|max:255',
            'akun_ig' => 'nullable|string|max:255',
            'akun_tiktok' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'nullable|string|min:8',
            'status_login' => 'required|boolean',
        ]);

        // Cari data alumni berdasarkan ID
        $alumni = Alumni::findOrFail($id);

        // Update data alumni dengan data baru
        $alumni->update($validatedData);

        // Redirect ke halaman daftar alumni
        return redirect()->route('alumni.index')->with('success', 'Alumni berhasil diperbarui');
    }

    // Menghapus data alumni
    public function destroy($id)
    {
        $alumni = Alumni::findOrFail($id); // Cari alumni berdasarkan ID
        $alumni->delete(); // Hapus alumni

        // Redirect ke halaman daftar alumni
        return redirect()->route('alumni.index')->with('success', 'Alumni berhasil dihapus');
    }
}