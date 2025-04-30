<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KuesionerKerja extends Model
{
    use HasFactory;

    protected $table = 'kuesioner_kerja';
    protected $primaryKey = 'id_kuesioner_kerja';

    protected $fillable = [
        'id_alumni',
        'id_tahun_lulus',
        'id_sekolah',
        'id_status_alumni',
        'id_bidang_keahlian',
        'id_konsentrasi_keahlian',
        'jenis_kelamin',
        'umur',
        'motivasi_melanjutkan_pekerjaan',
        'bidang_karir',
        'sektor_pekerjaan',
        'pengalaman_kerja',
        'keterampilan_digunakan',
        'rencana_5_tahun',
        'minat_kerja_luar_negeri',
        'faktor_pemilihan_pekerjaan',
        'pendapat_jaringan_profesional',
        'jenis_pekerjaan',
        'preferensi_kerja',
        'kesiapan_mental_fisik',
        'harapan_pekerjaan',
    ];

    /**
     * Relasi ke tabel `tbl_alumni`
     */
    public function alumni()
    {
        return $this->belongsTo(Alumni::class, 'id_alumni', 'id_alumni');
    }

    /**
     * Relasi ke tabel `tb_tahun_lulus`
     */
    public function tahunlulus()
    {
        return $this->belongsTo(TahunLulus::class, 'id_tahun_lulus', 'id_tahun_lulus');
    }

    /**
     * Relasi ke tabel `tbl_sekolah`
     */
    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class, 'id_sekolah', 'id_sekolah');
    }

    /**
     * Relasi ke tabel `tbl_status_alumni`
     */
    public function statusAlumni()
    {
        return $this->belongsTo(StatusAlumni::class, 'id_status_alumni', 'id_status_alumni');
    }

    /**
     * Relasi ke tabel `tbl_bidang_keahlian`
     */
    public function bidangkeahlian()
    {
        return $this->belongsTo(BidangKeahlian::class, 'id_bidang_keahlian', 'id_bidang_keahlian');
    }

    /**
     * Relasi ke tabel `tbl_konsentrasi_keahlian`
     */
    public function konsentrasiKeahlian()
    {
        return $this->belongsTo(KonsentrasiKeahlian::class, 'id_konsentrasi_keahlian', 'id_konsentrasi_keahlian');
    }
    
}
