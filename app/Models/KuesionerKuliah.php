<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KuesionerKuliah extends Model
{
    use HasFactory;

    protected $table = 'kuesioner_kuliah';
    protected $primaryKey = 'id_kuesioner_kuliah';

    protected $fillable = [
        'id_alumni',
        'id_tracer_kuliah',
        'id_status_alumni',
        'umur',
        'jenis_kelamin',
        'alasan_melanjutkan_kuliah',
        'apa_yang_mendorong_anda',
        'program_studi',
        'harapan_setelah_kuliah',
        'persiapan_melanjutkan_kuliah',
        'faktor_pemilihan_universitas',
        'mencari_beasiswa',
        'jenis_beasiswa',
        'rencana_pembiayaan_kuliah',
        'tantangan_terbesar',
        'harapan_kampus',
    ];

    /**
     * Relasi ke tabel `tbl_alumni`
     */
    public function alumni()
    {
        return $this->belongsTo(Alumni::class, 'id_alumni', 'id_alumni');
    }

    /**
     * Relasi ke tabel `tbl_tracer_kuliah`
     */
    public function tracerkuliah()
    {
        return $this->belongsTo(TracerKuliah::class, 'id_tracer_kuliah', 'id_tracer_kuliah');
    }

    /**
     * Relasi ke tabel `tbl_status_alumni`
     */
    public function statusAlumni()
    {
        return $this->belongsTo(StatusAlumni::class, 'id_status_alumni', 'id_status_alumni');
    }
}
