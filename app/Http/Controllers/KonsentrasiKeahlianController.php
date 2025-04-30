<?php

namespace App\Http\Controllers;

use App\Models\KonsentrasiKeahlian;
use App\Models\ProgramKeahlian;
use Illuminate\Http\Request;

class KonsentrasiKeahlianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $konsentrasiKeahlian = KonsentrasiKeahlian::with('programKeahlian')->get();
        return view('konsentrasi_keahlian.index', compact('konsentrasiKeahlian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $programKeahlian = ProgramKeahlian::all();
        return view('konsentrasi_keahlian.create', compact('programKeahlian'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_program_keahlian' => 'required|exists:tbl_program_keahlian,id_program_keahlian',
            'kode_konsentrasi_keahlian' => 'required|max:10',
            'konsentrasi_keahlian' => 'required|max:100',
        ]);

        KonsentrasiKeahlian::create($request->all());

        return redirect()->route('konsentrasi_keahlian.index')->with('success', 'Konsentrasi Keahlian berhasil ditambah.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KonsentrasiKeahlian $konsentrasiKeahlian)
    {
        $programKeahlian = ProgramKeahlian::all();
        return view('konsentrasi_keahlian.edit', compact('konsentrasiKeahlian', 'programKeahlian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KonsentrasiKeahlian $konsentrasiKeahlian)
    {
        $request->validate([
            'id_program_keahlian' => 'required|exists:tbl_program_keahlian,id_program_keahlian',
            'kode_konsentrasi_keahlian' => 'required|max:10',
            'konsentrasi_keahlian' => 'required|max:100',
        ]);

        $konsentrasiKeahlian->update($request->all());

        return redirect()->route('konsentrasi_keahlian.index')->with('success', 'Konsentrasi Keahlian berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KonsentrasiKeahlian $konsentrasiKeahlian)
    {
        $konsentrasiKeahlian->delete();

        return redirect()->route('konsentrasi_keahlian.index')->with('success', 'Konsentrasi Keahlian berhasil dihapus.');
    }
}
