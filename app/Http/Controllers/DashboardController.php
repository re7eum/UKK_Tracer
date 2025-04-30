<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah;
use App\Models\TahunLulus;
use App\Models\BidangKeahlian;
use App\Models\ProgramKeahlian;
use App\Models\KonsentrasiKeahlian;
use App\Models\StatusAlumni;
use App\Models\Alumni;
use App\Models\TracerKerja;
use App\Models\TracerKuliah;
use App\Models\Testimoni;


class DashboardController extends Controller
{
    public function statistik()
{
    $sekolahCount = Sekolah::count();
    $tahunLulusCount = TahunLulus::count();
    $bidangKeahlianCount = BidangKeahlian::count();
    $programKeahlianCount = ProgramKeahlian::count();
    $konsentrasiKeahlianCount = KonsentrasiKeahlian::count();
    $statusAlumniCount = StatusAlumni::count();
    $alumniCount = Alumni::count();
    $tracerKerjaCount = TracerKerja::count();
    $tracerKuliahCount = TracerKuliah::count();
    $testimoniCount = Testimoni::count();

return view('statistik', compact(
    'sekolahCount', 'tahunLulusCount', 'bidangKeahlianCount', 'programKeahlianCount',
    'konsentrasiKeahlianCount', 'statusAlumniCount', 'alumniCount', 'tracerKerjaCount',
    'tracerKuliahCount', 'testimoniCount'
));
}
}
