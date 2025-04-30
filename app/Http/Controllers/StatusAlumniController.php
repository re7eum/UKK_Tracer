<?php

namespace App\Http\Controllers;

use App\Models\StatusAlumni;
use Illuminate\Http\Request;

class StatusAlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statusAlumni = StatusAlumni::all();
        return view('status_alumni.index', compact('statusAlumni'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('status_alumni.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required|max:25',
        ]);

        StatusAlumni::create($request->all());

        return redirect()->route('status_alumni.index')->with('success', 'Status Alumni berhasil ditambah.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $statusAlumni = StatusAlumni::findOrFail($id);
        return view('status_alumni.edit', compact('statusAlumni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|max:25',
        ]);
          // Cari data berdasarkan ID
        $statusAlumni = StatusAlumni::findOrFail($id);
       
        $statusAlumni->status = $request->status;
        $statusAlumni->save();

        return redirect()->route('status_alumni.index')->with('success', 'Status Alumni berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $statusAlumni = StatusAlumni::findOrFail($id);
        $statusAlumni->delete();

        return redirect()->route('status_alumni.index')->with('success', 'Status Alumni berhasil dihapus.');
    }
}
