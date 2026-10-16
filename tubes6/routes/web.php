<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParkController;

// Dashboard
Route::get('/', [ParkController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard', [ParkController::class, 'dashboard']);

// Form Reservasi Baru
Route::get('/reservasi', [ParkController::class, 'reservasi'])->name('reservasi.index');

// Proses Simpan Reservasi
Route::post('/reservasi', [ParkController::class, 'storeReservasi'])->name('reservasi.store');

// Halaman Daftar Reservasi & Denda (Menampilkan data Eloquent Model dari Database)
Route::get('/denda', [ParkController::class, 'denda'])->name('denda.index');