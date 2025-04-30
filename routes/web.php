<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\BidangKeahlianController;
use App\Http\Controllers\ProgramKeahlianController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\TracerKerjaController;
use App\Http\Controllers\TracerKuliahController;
use App\Http\Controllers\StatusAlumniController;
use App\Http\Controllers\KonsentrasiKeahlianController;
use App\Http\Controllers\TahunLulusController;
use App\Http\Controllers\KuesionerKuliahController;
use App\Http\Controllers\KuesionerKerjaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

// Rute Utama dan Dashboard
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/app', function () {
    return view('layouts.app');  // Pastikan ini merujuk ke file app.blade.php Anda
})->name('app');

// Rute untuk Halaman Tentang
Route::get('/penjelasan', function () {
    return view('layouts.penjelasan');  // Pastikan ini merujuk ke file app.blade.php Anda
})->name('penjelasan');

Route::get('/lowongan_alumni', function () {
    return view('layouts.lowongan_alumni');  // Pastikan ini merujuk ke file app.blade.php Anda
})->name('lowongan_alumni');

Route::get('/universitas_terbaik', function () {
    return view('layouts.universitas_terbaik');  // Pastikan ini merujuk ke file app.blade.php Anda
})->name('universitas_terbaik');

Route::get('/permintaan_kuesioner_kerja', function () {
    return view('layouts.permintaan_kuesioner_kerja');  // Pastikan ini merujuk ke file app.blade.php Anda
})->name('permintaan_kuesioner_kerja');

Route::get('/permintaan_kuesioner_kuliah', function () {
    return view('layouts.permintaan_kuesioner_kuliah');  // Pastikan ini merujuk ke file app.blade.php Anda
})->name('permintaan_kuesioner_kuliah');

Route::get('/page_after_submission', function () {
    return view('layouts.page_after_submission');  // Pastikan ini merujuk ke file app.blade.php Anda
})->name('page_after_submission');

Route::get('/page_after_submmission', function () {
    return view('layouts.page_after_submmission');  // Pastikan ini merujuk ke file app.blade.php Anda
})->name('page_after_submmission');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::resource('kuesioner_kuliah', KuesionerKuliahController::class);
Route::resource('kuesioner_kerja', KuesionerKerjaController::class);

Route::post('kuesioner_kuliah/{id}', [KuesionerKuliahController::class, 'show'])->name('kuesioner_kuliah.show');
Route::post('kuesioner_kerja/{id}', [KuesionerKerjaController::class, 'show'])->name('kuesioner_kerja.show');
Route::get('/kuesioner_kuliah/{id}', [KuesionerKuliahController::class, 'show'])
    ->name('kuesioner_kuliah.show', );

Route::get('/statistik', [DashboardController::class, 'statistik'])->name('statistik');


// Rute untuk Profile Pengguna
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Dashboard dan CRUD Resource Routes
Route::middleware(['auth', 'role:admin'])->group(function(){
    // Dashboard Admin
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // CRUD untuk Alumni
    Route::resource('alumni', AlumniController::class);

    // CRUD untuk Status Alumni
    Route::resource('status_alumni', StatusAlumniController::class);

    // CRUD untuk Konsentrasi Keahlian
    Route::resource('konsentrasi_keahlian', KonsentrasiKeahlianController::class);

    // CRUD untuk Tahun Lulus
    Route::resource('tahun_lulus', TahunLulusController::class);

    // CRUD untuk Sekolah
    Route::resource('sekolah', SekolahController::class);

    // CRUD untuk Bidang Keahlian
    Route::resource('bidang_keahlian', BidangKeahlianController::class);

    // CRUD untuk Program Keahlian
    Route::resource('program_keahlian', ProgramKeahlianController::class);

    // CRUD untuk Tracer Kuliah
    Route::resource('tracer_kuliah', TracerKuliahController::class);

    // CRUD untuk Tracer Kerja
    Route::resource('tracer_kerja', TracerKerjaController::class);

      // CRUD untuk Testimoni
      Route::resource('testimoni', TestimoniController::class);

});

Route::prefix('user')->group(function () {
    Route::get('/data_sekolah', [UserController::class, 'dataSekolah'])->name('user.data_sekolah');
    Route::get('/data_tahun_lulus', [UserController::class, 'dataTahunLulus'])->name('user.data_tahun_lulus');
    Route::get('/data_bidang_keahlian', [UserController::class, 'dataBidangKeahlian'])->name('user.data_bidang_keahlian');
    Route::get('/data_program_keahlian', [UserController::class, 'dataProgramKeahlian'])->name('user.data_program_keahlian');
    Route::get('/data_konsentrasi_keahlian', [UserController::class, 'dataKonsentrasiKeahlian'])->name('user.data_konsentrasi_keahlian');
    Route::get('/data_status_alumni', [UserController::class, 'dataStatusAlumni'])->name('user.data_status_alumni');
    Route::get('/data_alumni', [UserController::class, 'dataAlumni'])->name('user.data_alumni');
    Route::get('/data_tracer_kuliah', [UserController::class, 'dataTracerKuliah'])->name('user.data_tracer_kuliah');
    Route::get('/data_tracer_kerja', [UserController::class, 'dataTracerKerja'])->name('user.data_tracer_kerja');
    Route::get('/data_testimoni', [UserController::class, 'dataTestimoni'])->name('user.data_testimoni'); 
});


Route::get('/dashboard', function () {
    return view('dashboard');  // Pastikan ini merujuk ke file app.blade.php Anda
})->name('dashboard');


require __DIR__.'/auth.php';
