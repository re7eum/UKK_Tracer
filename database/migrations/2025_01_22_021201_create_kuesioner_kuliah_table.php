<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kuesioner_kuliah', function (Blueprint $table) {
        $table->id('id_kuesioner_kuliah');
        $table->unsignedBigInteger('id_alumni');
        $table->unsignedBigInteger('id_tracer_kuliah');
        $table->unsignedBigInteger('id_status_alumni');
        $table->integer('umur');
        $table->string('jenis_kelamin');
        $table->text('alasan_melanjutkan_kuliah');
        $table->text('apa_yang_mendorong_anda');
        $table->string('program_studi');
        $table->text('harapan_setelah_kuliah');
        $table->text('persiapan_melanjutkan_kuliah');
        $table->string('faktor_pemilihan_universitas');
        $table->boolean('mencari_beasiswa');
        $table->string('jenis_beasiswa');
        $table->string('rencana_pembiayaan_kuliah');
        $table->text('tantangan_terbesar');
        $table->text('harapan_kampus');
        $table->timestamps();

        $table->foreign('id_alumni')->references('id_alumni')->on('tbl_alumni')->onDelete('cascade');
        $table->foreign('id_tracer_kuliah')->references('id_tracer_kuliah')->on('tbl_tracer_kuliah')->onDelete('cascade');
        $table->foreign('id_status_alumni')->references('id_status_alumni')->on('tbl_status_alumni')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kuesioner_kuliah');
    }
};
