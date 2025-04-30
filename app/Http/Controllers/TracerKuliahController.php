<?php

namespace App\Http\Controllers;

use App\Models\TracerKuliah;
use App\Models\Alumni;
use Illuminate\Http\Request;

class TracerKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tracerKuliah = TracerKuliah::with('alumni')->get();
        return view('tracer_kuliah.index', compact('tracerKuliah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alumni = Alumni::all();
        return view('tracer_kuliah.create', compact('alumni'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_alumni' => 'required|exists:tbl_alumni,id_alumni',
            'tracer_kuliah_kampus' => 'required|max:45',
            'tracer_kuliah_status' => 'required|max:45',
            'tracer_kuliah_jenjang' => 'required|max:45',
            'tracer_kuliah_jurusan' => 'required|max:45',
            'tracer_kuliah_linier' => 'required|max:45',
            'tracer_kuliah_alamat' => 'required|max:45',
        ]);

        TracerKuliah::create($request->all());

        return redirect()->route('tracer_kuliah.index')->with('success', 'Data Tracer Kuliah berhasil ditambah.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TracerKuliah $tracerKuliah)
    {
        $alumni = Alumni::all();
        return view('tracer_kuliah.edit', compact('tracerKuliah', 'alumni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TracerKuliah $tracerKuliah)
    {
        $request->validate([
            'id_alumni' => 'required|exists:tbl_alumni,id_alumni',
            'tracer_kuliah_kampus' => 'required|max:45',
            'tracer_kuliah_status' => 'required|max:45',
            'tracer_kuliah_jenjang' => 'required|max:45',
            'tracer_kuliah_jurusan' => 'required|max:45',
            'tracer_kuliah_linier' => 'required|max:45',
            'tracer_kuliah_alamat' => 'required|max:45',
        ]);

        $tracerKuliah->update($request->all());

        return redirect()->route('tracer_kuliah.index')->with('success', 'Data Tracer Kuliah berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TracerKuliah $tracerKuliah)
    {
        $tracerKuliah->delete();

        return redirect()->route('tracer_kuliah.index')->with('success', 'Data Tracer Kuliah berhasil dihapus.');
    }
}
