<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunLulus extends Model
{
    use HasFactory;

    protected $table = 'tb_tahun_lulus'; // Nama tabel
    protected $primaryKey = 'id_tahun_lulus'; // Primary key
    protected $fillable = ['tahun_lulus', 'keterangan']; // Kolom yang bisa diisi
}
