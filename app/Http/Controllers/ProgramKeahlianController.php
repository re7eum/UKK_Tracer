<?php

namespace App\Http\Controllers;

use App\Models\ProgramKeahlian;
use App\Models\BidangKeahlian;
use Illuminate\Http\Request;

class ProgramKeahlianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programKeahlian = ProgramKeahlian::with('bidangKeahlian')->get();
        return view('program_keahlian.index', compact('programKeahlian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bidangKeahlian = BidangKeahlian::all();
        return view('program_keahlian.create', compact('bidangKeahlian'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_bidang_keahlian' => 'required|exists:tbl_bidang_keahlian,id_bidang_keahlian',
            'kode_program_keahlian' => 'required|max:10',
            'program_keahlian' => 'required|max:100',
        ]);

        ProgramKeahlian::create($request->all());

        return redirect()->route('program_keahlian.index')->with('success', 'Program Keahlian berhasil ditambah.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProgramKeahlian $programKeahlian)
    {
        $bidangKeahlian = BidangKeahlian::all();
        return view('program_keahlian.edit', compact('programKeahlian', 'bidangKeahlian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProgramKeahlian $programKeahlian)
    {
        $request->validate([
            'id_bidang_keahlian' => 'required|exists:tbl_bidang_keahlian,id_bidang_keahlian',
            'kode_program_keahlian' => 'required|max:10',
            'program_keahlian' => 'required|max:100',
        ]);

        $programKeahlian->update($request->all());

        return redirect()->route('program_keahlian.index')->with('success', 'Program Keahlian berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProgramKeahlian $programKeahlian)
    {
        $programKeahlian->delete();

        return redirect()->route('program_keahlian.index')->with('success', 'Program Keahlian berhasil dihapus.');
    }
}
