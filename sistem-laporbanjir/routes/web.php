<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

// Redirect root ke halaman form pelaporan
Route::get('/', function () {
    return redirect()->route('laporan.create');
});

// Named Routes Aplikasi LaporBanjir
Route::get('/lapor', [LaporanController::class, 'create'])->name('laporan.create');
Route::post('/konfirmasi', [LaporanController::class, 'store'])->name('laporan.store');
Route::get('/daftar-laporan', [LaporanController::class, 'index'])->name('laporan.index');