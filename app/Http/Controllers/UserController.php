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
use App\Models\TracerKuliah;
use App\Models\TracerKerja;
use App\Models\Testimoni;
use App\Models\KuesionerKuliah;

class UserController extends Controller
{
    public function dataSekolah()
    {
        $sekolahs = Sekolah::all();

        return view('user.data_sekolah', compact('sekolahs'));  
    }

    public function dataTahunLulus()
    {
        $tahunLulus = TahunLulus::all();

        return view('user.data_tahun_lulus', compact('tahunLulus'));
    }

    public function dataBidangKeahlian()
    {
        $bidangKeahlian = BidangKeahlian::all();
        return view('user.data_bidang_keahlian', compact('bidangKeahlian'));
    }

    public function dataProgramKeahlian()
    {
        $programKeahlian = ProgramKeahlian::all();
        return view('user.data_program_keahlian', compact('programKeahlian'));
    }

    public function dataKonsentrasiKeahlian()
    {
        $konsentrasiKeahlian = KonsentrasiKeahlian::all();
        return view('user.data_konsentrasi_keahlian', compact('konsentrasiKeahlian') );
    }

    public function dataStatusAlumni()
    {
        $statusAlumni = StatusAlumni::all();
        return view('user.data_status_alumni', compact('statusAlumni'));
    }

    public function dataAlumni()
    {
        $alumnis = Alumni::all();
        return view('user.data_alumni', compact('alumnis'));
    }

    public function dataTracerKuliah()
    {
        $tracerKuliah = TracerKuliah::all();
        return view('user.data_tracer_kuliah', compact('tracerKuliah'));
    }

    public function dataTracerKerja()
    {
        $tracerKerja = TracerKerja::all();
        return view('user.data_tracer_kerja', compact('tracerKerja'));
    }

    public function dataTestimoni()
    {
        $testimoni = Testimoni::all();
        return view('user.data_testimoni', compact('testimoni'));
    }

}

