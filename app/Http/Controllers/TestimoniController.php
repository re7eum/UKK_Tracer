<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use App\Models\Alumni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    // Menampilkan semua data testimoni
    public function index()
    {
        $testimoni = Testimoni::all();
        return view('testimoni.index', compact('testimoni'));
    }

    // Menampilkan form untuk menambah data testimoni
    public function create()
    {
        $alumni = Alumni::all(); // Menampilkan semua alumni untuk dropdown
        return view('testimoni.create', compact('alumni'));
    }

    // Menyimpan data testimoni baru
    public function store(Request $request)
    {
        $request->validate([
            'id_alumni' => 'required|exists:tbl_alumni,id_alumni',
            'testimoni' => 'required|string',
            'tgl_testimoni' => 'required|date',
        ]);

        Testimoni::create($request->all());
        return redirect()->route('testimoni.index')->with('success', 'Data Testimoni berhasil ditambah');
    }

    // Menampilkan form untuk mengedit data testimoni
    public function edit($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        $alumni = Alumni::all(); // Menampilkan semua alumni untuk dropdown
        return view('testimoni.edit', compact('testimoni', 'alumni'));
    }

    // Memperbarui data testimoni
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_alumni' => 'required|exists:tbl_alumni,id_alumni',
            'testimoni' => 'required|string',
            'tgl_testimoni' => 'required|date',
        ]);

        $testimoni = Testimoni::findOrFail($id);
        $testimoni->update($request->all());

        return redirect()->route('testimoni.index')->with('success', 'Data Testimoni berhasil diperbarui');
    }

    // Menghapus data testimoni
    public function destroy($id)
    {
        Testimoni::findOrFail($id)->delete();
        return redirect()->route('testimoni.index')->with('success', 'Data Testimoni berhasil dihapus');
    }
}

