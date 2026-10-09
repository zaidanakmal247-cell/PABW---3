<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParkController extends Controller
{
    // Halaman Dashboard
    public function dashboard()
    {
        return view('dashboard');
    }

  
   // Halaman Reservasi
public function reservasi()
{
    return view('reservasi.index');
}

    // Halaman Pelanggaran & Denda
    public function denda()
    {
        $dendaList = [
            [
                'keterangan' => 'Parkir di luar area garis',
                'nominal' => 50000,
                'status' => 'Belum Dibayar',
            ],
            [
                'keterangan' => 'Melebihi batas waktu reservasi',
                'nominal' => 25000,
                'status' => 'Lunas',
            ],
        ];

        return view('denda.index', compact('dendaList'));
    }

    // Memproses data formulir reservasi
public function storeReservasi(Request $request)
{
    // Logika simpan data atau proses reservasi
    
    // Redirect kembali ke halaman reservasi dengan pesan sukses
    return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil dikirim!');
}
}