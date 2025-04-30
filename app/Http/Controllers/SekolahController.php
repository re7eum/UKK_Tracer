<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sekolahs = Sekolah::all();
        return view('sekolah.index', compact('sekolahs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'npsn' => 'required|max:10',
            'nss' => 'required|max:20',
            'nama_sekolah' => 'required|max:50',
            'alamat' => 'required|max:50',
            'no_telp' => 'required|max:15',
            'website' => 'required|url|max:50',
            'email' => 'required|email|max:50',
        ]);

        Sekolah::create($request->all());

        return redirect()->route('sekolah.index')->with('success', 'Sekolah berhasil ditambah.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sekolah $sekolah)
    {
        return view('sekolah.edit', compact('sekolah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sekolah $sekolah)
    {
        $request->validate([
            'npsn' => 'required|max:10',
            'nss' => 'required|max:20',
            'nama_sekolah' => 'required|max:50',
            'alamat' => 'required|max:50',
            'no_telp' => 'required|max:15',
            'website' => 'required|url|max:50',
            'email' => 'required|email|max:50',
        ]);

        $sekolah->update($request->all());

        return redirect()->route('sekolah.index')->with('success', 'Sekolah berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sekolah $sekolah)
    {
        $sekolah->delete();

        return redirect()->route('sekolah.index')->with('success', 'Sekolah berhasil dihapus.');
    }
}
