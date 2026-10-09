<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    // Halaman Form Pelaporan
    public function create()
    {
        return view('laporan.form');
    }

    // Proses pengiriman data form via POST -> Konfirmasi
    public function store(Request $request)
    {
        $laporan = [
            'nama_pelapor' => $request->input('nama_pelapor'),
            'lokasi' => $request->input('lokasi'),
            'tinggi_air' => $request->input('tinggi_air'),
        ];

        return view('laporan.konfirmasi', compact('laporan'));
    }

    // Halaman Daftar Laporan (Array dummy tanpa database)
    public function index()
    {
        $daftarLaporan = [
            [
                'nama_pelapor' => 'Ahmad Suhendar',
                'lokasi' => 'Kecamatan Dayeuhkolot',
                'tinggi_air' => 25, // Waspada (< 30 cm)
            ],
            [
                'nama_pelapor' => 'Budi Santoso',
                'lokasi' => 'Kecamatan Baleendah',
                'tinggi_air' => 50, // Siaga (30 - 70 cm)
            ],
            [
                'nama_pelapor' => 'Siti Aminah',
                'lokasi' => 'Kecamatan Bojongsoang',
                'tinggi_air' => 90, // Awas (> 70 cm)
            ],
        ];

        return view('laporan.index', compact('daftarLaporan'));
    }
}