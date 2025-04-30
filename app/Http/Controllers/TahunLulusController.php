<?php

namespace App\Http\Controllers;

use App\Models\TahunLulus;
use Illuminate\Http\Request;

class TahunLulusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tahunLulus = TahunLulus::all();
        return view('tahun_lulus.index', compact('tahunLulus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tahun_lulus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tahun_lulus' => 'required|max:20',
            'keterangan' => 'nullable|max:50',
        ]);

        TahunLulus::create($request->all());

        return redirect()->route('tahun_lulus.index')->with('success', 'Tahun Lulus berhasil ditambah.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tahunLulus = TahunLulus::findOrFail($id);
        return view('tahun_lulus.edit', compact('tahunLulus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'tahun_lulus' => 'required|string|max:255',
        'keterangan' => 'nullable|string|max:255',
    ]);

    // Cari data berdasarkan ID
    $tahunLulus = TahunLulus::findOrFail($id);

    // Update data
    $tahunLulus->tahun_lulus = $request->tahun_lulus;
    $tahunLulus->keterangan = $request->keterangan;
    $tahunLulus->save();

    // Redirect dengan pesan sukses
    return redirect()->route('tahun_lulus.index')->with('success', 'Tahun lulus berhasil diperbarui.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tahunLulus = TahunLulus::findOrFail($id);
        $tahunLulus->delete();

        return redirect()->route('tahun_lulus.index')->with('success', 'Tahun Lulus berhasil dihapus.');
    }
}
