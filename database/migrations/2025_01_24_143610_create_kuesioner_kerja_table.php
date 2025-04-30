<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuesionerKerjaTable extends Migration
{
    public function up()
    {
        Schema::create('kuesioner_kerja', function (Blueprint $table) {
            $table->id('id_kuesioner_kerja');
            $table->unsignedBigInteger('id_alumni');
            $table->unsignedBigInteger('id_tahun_lulus');
            $table->unsignedBigInteger('id_sekolah');
            $table->unsignedBigInteger('id_status_alumni');
            $table->unsignedBigInteger('id_bidang_keahlian');
            $table->unsignedBigInteger('id_konsentrasi_keahlian');
            $table->string('jenis_kelamin');
            $table->integer('umur');
            $table->text('motivasi_melanjutkan_pekerjaan');
            $table->string('bidang_karir');
            $table->string('sektor_pekerjaan');
            $table->text('pengalaman_kerja');
            $table->text('keterampilan_digunakan');
            $table->string('rencana_5_tahun');
            $table->enum('minat_kerja_luar_negeri', ['Ya', 'Tidak'])->nullable();
            $table->string('faktor_pemilihan_pekerjaan');
            $table->text('pendapat_jaringan_profesional');
            $table->string('jenis_pekerjaan');
            $table->string('preferensi_kerja');
            $table->text('kesiapan_mental_fisik');
            $table->text('harapan_pekerjaan');
            $table->timestamps();

            $table->foreign('id_alumni')->references('id_alumni')->on('tbl_alumni')->onDelete('cascade');
            $table->foreign('id_tahun_lulus')->references('id_tahun_lulus')->on('tb_tahun_lulus')->onDelete('cascade');
            $table->foreign('id_sekolah')->references('id_sekolah')->on('tbl_sekolah')->onDelete('cascade');
            $table->foreign('id_status_alumni')->references('id_status_alumni')->on('tbl_status_alumni')->onDelete('cascade');
            $table->foreign('id_bidang_keahlian')->references('id_bidang_keahlian')->on('tbl_bidang_keahlian')->onDelete('cascade');
            $table->foreign('id_konsentrasi_keahlian')->references('id_konsentrasi_keahlian')->on('tbl_konsentrasi_keahlian')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('kuesioner_kerja');
    }
};

