<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

// Halaman Utama langsung mengarah ke Daftar Laporan
Route::get('/', [LaporanController::class, 'index']);

// Route Halaman Daftar Laporan
Route::get('/daftar-laporan', [LaporanController::class, 'index'])->name('laporan.index');

// Route Halaman Form Lapor (Disandirkan nama 'laporan.create')
Route::get('/lapor', [LaporanController::class, 'create'])->name('laporan.create');

// Route Proses Simpan Data Form (POST)
Route::post('/lapor', [LaporanController::class, 'store'])->name('lapor.kirim');