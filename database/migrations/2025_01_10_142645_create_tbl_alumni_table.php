<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('tbl_alumni', function (Blueprint $table) {
        $table->id('id_alumni');
        $table->unsignedBigInteger('id_tahun_lulus');
        $table->unsignedBigInteger('id_konsentrasi_keahlian');
        $table->unsignedBigInteger('id_status_alumni');
        $table->string('nisn', 20);
        $table->string('nik', 20);
        $table->string('nama_depan', 50);
        $table->string('nama_belakang', 50);
        $table->string('jenis_kelamin', 10);
        $table->string('tempat_lahir', 20);
        $table->date('tgl_lahir');
        $table->string('alamat', 50);
        $table->string('no_hp', 15);
        $table->string('akun_fb', 50)->nullable();
        $table->string('akun_ig', 50)->nullable();
        $table->string('akun_tiktok', 50)->nullable();
        $table->string('email', 50)->unique();
        $table->longText('password');
        $table->enum('status_login', ['0', '1']);
        
        // Foreign keys
        $table->foreign('id_tahun_lulus')->references('id_tahun_lulus')->on('tb_tahun_lulus');
        $table->foreign('id_konsentrasi_keahlian')->references('id_konsentrasi_keahlian')->on('tbl_konsentrasi_keahlian');
        $table->foreign('id_status_alumni')->references('id_status_alumni')->on('tbl_status_alumni');

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_alumni');
    }
};
