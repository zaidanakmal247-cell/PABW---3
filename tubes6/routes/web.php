<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParkController;

// Route Halaman Utama / Dashboard
Route::get('/dashboard', [ParkController::class, 'dashboard'])->name('dashboard');

// Route Halaman Reservasi
Route::get('/reservasi', [ParkController::class, 'reservasi'])->name('reservasi.index');

// Route Halaman Pelanggaran & Denda
Route::get('/denda', [ParkController::class, 'denda'])->name('denda.index');

// Route untuk menampilkan halaman (GET)
Route::get('/reservasi', [ParkController::class, 'reservasi'])->name('reservasi.index');

// Route untuk memproses formulir (POST)
Route::post('/reservasi', [ParkController::class, 'storeReservasi'])->name('reservasi.store');