<?php

namespace App\Http\Controllers;

use App\Models\KuesionerKuliah;
use App\Models\Alumni;
use App\Models\TracerKuliah;
use App\Models\StatusAlumni;
use Illuminate\Http\Request;

class KuesionerKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
     public function index(Request $request)
     {
         $query = $request->input('search');
 
         // Query data kuesioner dengan pencarian
         $kuesioners = KuesionerKuliah::when($query, function ($q) use ($query) {
             $q->whereHas('alumni', function ($alumni) use ($query) {
                 $alumni->where('nama_depan', 'like', '%' . $query . '%')
                        ->orWhere('nama_belakang', 'like', '%' . $query . '%');
             })->orWhere('alasan_melanjutkan_kuliah', 'like', '%' . $query . '%')
               ->orWhere('program_studi', 'like', '%' . $query . '%');
         })->with(['alumni', 'statusAlumni', 'tracerKuliah'])->paginate(10);
 
         return view('kuesioner_kuliah.index', compact('kuesioners'));
     }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengambil semua data alumni, tracer kuliah, dan status alumni untuk ditampilkan pada dropdown
        $alumni = Alumni::all();
        $tracerKuliah = TracerKuliah::all();
        $statusAlumni = StatusAlumni::all();

        // Menampilkan form untuk membuat kuesioner kuliah
        return view('kuesioner_kuliah.create', compact('alumni', 'tracerKuliah', 'statusAlumni'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_alumni' => 'required|exists:tbl_alumni,id_alumni',
            'id_tracer_kuliah' => 'required|exists:tbl_tracer_kuliah,id_tracer_kuliah',
            'id_status_alumni' => 'required|exists:tbl_status_alumni,id_status_alumni',
            'umur' => 'required|integer',
            'jenis_kelamin' => 'required',
            'alasan_melanjutkan_kuliah' => 'required',
            'apa_yang_mendorong_anda' => 'required',
            'program_studi' => 'required',
            'harapan_setelah_kuliah' => 'required',
            'persiapan_melanjutkan_kuliah' => 'required',
            'faktor_pemilihan_universitas' => 'required',
            'mencari_beasiswa' => 'required|boolean',
            'jenis_beasiswa' => 'nullable',
            'rencana_pembiayaan_kuliah' => 'required',
            'tantangan_terbesar' => 'required',
            'harapan_kampus' => 'required',
        ]);

        KuesionerKuliah::create($request->all());
        return redirect()->route('kuesioner_kuliah.index')->with('success', 'Kuesioner berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    // Mengambil data kuesioner berdasarkan ID
    $kuesioner = KuesionerKuliah::findOrFail($id);

    // Mengambil data alumni, status alumni, dan tracer kuliah
    $alumni = Alumni::all();
    $statusAlumni = StatusAlumni::all();
    $tracerKuliah = TracerKuliah::all();

    // Mengirim data ke view
    return view('kuesioner_kuliah.edit', compact('kuesioner', 'alumni', 'statusAlumni', 'tracerKuliah'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_alumni' => 'required',
            'id_tracer_kuliah' => 'required',
            'id_status_alumni' => 'required',
            'umur' => 'required|integer',
            'jenis_kelamin' => 'required',
            'alasan_melanjutkan_kuliah' => 'required',
            'apa_yang_mendorong_anda' => 'required',
            'program_studi' => 'required',
            'harapan_setelah_kuliah' => 'required',
            'persiapan_melanjutkan_kuliah' => 'required',
            'faktor_pemilihan_universitas' => 'required',
            'mencari_beasiswa' => 'required|boolean',
            'jenis_beasiswa' => 'nullable',
            'rencana_pembiayaan_kuliah' => 'required',
            'tantangan_terbesar' => 'required',
            'harapan_kampus' => 'required',
        ]);

        $kuesioner = KuesionerKuliah::findOrFail($id);
        $kuesioner->update($request->all());
        return redirect()->route('kuesioner_kuliah.index')->with('success', 'Kuesioner berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kuesioner = KuesionerKuliah::findOrFail($id);
        $kuesioner->delete();
        return redirect()->route('kuesioner_kuliah.index')->with('success', 'Kuesioner berhasil dihapus.');
    }
    public function show($id)
    {
        // Mendapatkan data kuesioner berdasarkan ID
        $kuesioner = KuesionerKuliah::findOrFail($id);
        // Mengirim data ke view
        return view('kuesioner_kuliah.show', compact('kuesioner'));
    }
}
