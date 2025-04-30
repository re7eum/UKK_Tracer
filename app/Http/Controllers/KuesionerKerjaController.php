<?php

namespace App\Http\Controllers;

use App\Models\KuesionerKerja;
use App\Models\Alumni;
use App\Models\TahunLulus;
use App\Models\Sekolah;
use App\Models\StatusAlumni;
use App\Models\BidangKeahlian;
use App\Models\KonsentrasiKeahlian;
use Illuminate\Http\Request;

class KuesionerKerjaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        
        // Gunakan paginate() untuk membatasi jumlah hasil per halaman
        $kuesioners = KuesionerKerja::when($search, function ($query, $search) {
            return $query->whereHas('alumni', function ($query) use ($search) {
                $query->where('nama_depan', 'like', '%' . $search . '%')
                    ->orWhere('nama_belakang', 'like', '%' . $search . '%');
                })
                ->orWhereHas('tahunLulus', function ($query) use ($search) {
                    $query->where('tahun_lulus', 'like', '%' . $search . '%');
                })
                ->orWhereHas('sekolah', function ($query) use ($search) {
                    $query->where('nama_sekolah', 'like', '%' . $search . '%');
                
                });
            })->paginate(10);
        return view('kuesioner_kerja.index', compact('kuesioners'));
    }

    public function create()
    {
        $alumni = Alumni::all();
        $tahunLulus = TahunLulus::all();
        $sekolah = Sekolah::all();
        $statusAlumni = StatusAlumni::all();
        $bidangKeahlian = BidangKeahlian::all();
        $konsentrasiKeahlian = KonsentrasiKeahlian::all();
        return view('kuesioner_kerja.create', compact('alumni', 'tahunLulus', 'sekolah', 'statusAlumni', 'bidangKeahlian', 'konsentrasiKeahlian'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_alumni' => 'required|exists:tbl_alumni,id_alumni',
            'id_tahun_lulus' => 'required|exists:tb_tahun_lulus,id_tahun_lulus',
            'id_sekolah' => 'required|exists:tbl_sekolah,id_sekolah',
            'id_status_alumni' => 'required|exists:tbl_status_alumni,id_status_alumni',
            'id_bidang_keahlian' => 'required|exists:tbl_bidang_keahlian,id_bidang_keahlian',
            'id_konsentrasi_keahlian' => 'required|exists:tbl_konsentrasi_keahlian,id_konsentrasi_keahlian',
            'jenis_kelamin' => 'required',
            'umur' => 'required|integer',
            'motivasi_melanjutkan_pekerjaan' => 'required',
            'bidang_karir' => 'required',
            'sektor_pekerjaan' => 'required',
            'pengalaman_kerja' => 'nullable',
            'keterampilan_digunakan' => 'required',
            'rencana_5_tahun' => 'required',
            'minat_kerja_luar_negeri' => 'nullable',
            'faktor_pemilihan_pekerjaan' => 'required',
            'pendapat_jaringan_profesional' => 'required',
            'jenis_pekerjaan' => 'required',
            'preferensi_kerja' => 'required',
            'kesiapan_mental_fisik' => 'required',
            'harapan_pekerjaan' => 'required',
        ]);

        KuesionerKerja::create($request->all());
        return redirect()->route('kuesioner_kerja.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $kuesioner = KuesionerKerja::findOrFail($id);
        $alumni = Alumni::all();
        $tahunLulus = TahunLulus::all();
        $sekolah = Sekolah::all();
        $statusAlumni = StatusAlumni::all();
        $bidangKeahlian = BidangKeahlian::all();
        $konsentrasiKeahlian = KonsentrasiKeahlian::all();
        return view('kuesioner_kerja.edit', compact('kuesioner', 'alumni', 'tahunLulus', 'sekolah', 'statusAlumni', 'bidangKeahlian', 'konsentrasiKeahlian'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_alumni' => 'required',
            'id_tahun_lulus' => 'required',
            'id_sekolah' => 'required',
            'id_status_alumni' => 'required',
            'id_bidang_keahlian' => 'required',
            'id_konsentrasi_keahlian' => 'required',
            'jenis_kelamin' => 'required',
            'umur' => 'required|integer',
            'motivasi_melanjutkan_pekerjaan' => 'required',
            'bidang_karir' => 'required',
            'sektor_pekerjaan' => 'required',
            'pengalaman_kerja' => 'required',
            'keterampilan_digunakan' => 'required',
            'rencana_5_tahun' => 'required',
            'minat_kerja_luar_negeri' => 'required',
            'faktor_pemilihan_pekerjaan' => 'required',
            'pendapat_jaringan_profesional' => 'required',
            'jenis_pekerjaan' => 'required',
            'preferensi_kerja' => 'required',
            'kesiapan_mental_fisik' => 'required',
            'harapan_pekerjaan' => 'required',
        ]);

        $kuesioner = KuesionerKerja::findOrFail($id);
        $kuesioner->update($request->all());
        return redirect()->route('kuesioner_kerja.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $kuesioner = KuesionerKerja::findOrFail($id);
        $kuesioner->delete();
        return redirect()->route('kuesioner_kerja.index')->with('success', 'Data berhasil dihapus!');
    }

    public function show($id)
    {
        $kuesioner = KuesionerKerja::findOrFail($id);
        return view('kuesioner_kerja.show', compact('kuesioner'));
    }
}
