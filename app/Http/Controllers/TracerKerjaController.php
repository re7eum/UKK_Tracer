<?php

namespace App\Http\Controllers;

use App\Models\TracerKerja;
use App\Models\Alumni;
use Illuminate\Http\Request;

class TracerKerjaController extends Controller
{
    // Menampilkan semua data tracer kerja
    public function index()
    {
        $tracerKerja = TracerKerja::all();
        return view('tracer_kerja.index', compact('tracerKerja'));
    }

    // Menampilkan form untuk menambah data tracer kerja
    public function create()
    {
        $alumni = Alumni::all(); // Menampilkan semua alumni untuk dropdown
        return view('tracer_kerja.create', compact('alumni'));
    }

    // Menyimpan data tracer kerja baru
    public function store(Request $request)
    {
        $request->validate([
            'id_alumni' => 'required|exists:tbl_alumni,id_alumni',
            'tracer_kerja_pekerjaan' => 'required|string|max:50',
            'tracer_kerja_nama' => 'required|string|max:50',
            'tracer_kerja_jabatan' => 'required|string|max:50',
            'tracer_kerja_status' => 'required|string|max:50',
            'tracer_kerja_lokasi' => 'required|string|max:50',
            'tracer_kerja_alamat' => 'required|string|max:50',
            'tracer_kerja_tgl_mulai' => 'required|date',
            'tracer_kerja_gaji' => 'required|string|max:50',
        ]);

        TracerKerja::create($request->all());
        return redirect()->route('tracer_kerja.index')->with('success', 'Data Tracer Kerja berhasil ditambah');
    }

    // Menampilkan form untuk mengedit data tracer kerja
    public function edit($id)
    {
        $tracerKerja = TracerKerja::findOrFail($id);
        $alumni = Alumni::all(); // Menampilkan semua alumni untuk dropdown
        return view('tracer_kerja.edit', compact('tracerKerja', 'alumni'));
    }

    // Memperbarui data tracer kerja
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_alumni' => 'required|exists:tbl_alumni,id_alumni',
            'tracer_kerja_pekerjaan' => 'required|string|max:50',
            'tracer_kerja_nama' => 'required|string|max:50',
            'tracer_kerja_jabatan' => 'required|string|max:50',
            'tracer_kerja_status' => 'required|string|max:50',
            'tracer_kerja_lokasi' => 'required|string|max:50',
            'tracer_kerja_alamat' => 'required|string|max:50',
            'tracer_kerja_tgl_mulai' => 'required|date',
            'tracer_kerja_gaji' => 'required|string|max:50',
        ]);

        $tracerKerja = TracerKerja::findOrFail($id);
        $tracerKerja->update($request->all());

        return redirect()->route('tracer_kerja.index')->with('success', 'Data Tracer Kerja berhasil diperbarui');
    }

    // Menghapus data tracer kerja
    public function destroy($id)
    {
        TracerKerja::findOrFail($id)->delete();
        return redirect()->route('tracer_kerja.index')->with('success', 'Data Tracer Kerja berhasil dihapus');
    }
}

