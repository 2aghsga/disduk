<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WebController;
use App\Http\Controllers\BeritaController;
Route::get('/', [WebController::class, 'home'])->name('home');
// Route untuk menu dropdown Profil
Route::prefix('profil')->group(function () {
    Route::get('/visi-misi', [WebController::class, 'visiMisi'])->name('visi-misi');
    Route::get('/struktur', [WebController::class, 'struktur'])->name('struktur');
    Route::get('/tugas-fungsi', [WebController::class, 'tugasFungsi'])->name('tugas-fungsi');
    Route::get('/pegawai', [WebController::class, 'pegawai'])->name('pegawai');
    });
   
    Route::prefix('layanan')->group(function () {
    Route::get('/sd', [WebController::class, 'layananSD'])->name('layanan.sd');
    Route::get('/smp', [WebController::class, 'layananSMP'])->name('layanan.smp');
    Route::get('/sma', [WebController::class, 'layananSMA'])->name('layanan.sma');
});

Route::get('/kontak', [WebController::class, 'kontak'])->name('kontak');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/create/', [BeritaController::class, 'create'])->name('berita.create');
Route::delete('/berita{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
Route::post('/berita/store/', [BeritaController::class, 'store'])->name('berita.store');

