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
        Schema::create('tb_tahun_lulus', function (Blueprint $table) {
            $table->id('id_tahun_lulus');
            $table->string('tahun_lulus', 20);
            $table->string('keterangan', 50)->nullable(); // Kolom keterangan bisa kosong
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_tahun_lulus');
    }
};
