<?php

namespace App\Http\Controllers;

use App\Models\BidangKeahlian;
use Illuminate\Http\Request;

class BidangKeahlianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bidangKeahlian = BidangKeahlian::all();
        return view('bidang_keahlian.index', compact('bidangKeahlian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bidang_keahlian.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_bidang_keahlian' => 'required|max:10',
            'bidang_keahlian' => 'required|max:100',
        ]);

        BidangKeahlian::create($request->all());

        return redirect()->route('bidang_keahlian.index')->with('success', 'Bidang Keahlian berhasil ditambah.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BidangKeahlian $bidangKeahlian)
    {
        return view('bidang_keahlian.edit', compact('bidangKeahlian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BidangKeahlian $bidangKeahlian)
    {
        $request->validate([
            'kode_bidang_keahlian' => 'required|max:10',
            'bidang_keahlian' => 'required|max:100',
        ]);

        $bidangKeahlian->update($request->all());

        return redirect()->route('bidang_keahlian.index')->with('success', 'Bidang Keahlian berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BidangKeahlian $bidangKeahlian)
    {
        $bidangKeahlian->delete();

        return redirect()->route('bidang_keahlian.index')->with('success', 'Bidang Keahlian berhasil dihapus.');
    }
}
