@extends('layouts.app')

@section('title', 'Form Lapor Banjir - BPBD')

@section('content')
<div style="background: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
    <h2 style="margin-bottom: 20px; color: #0d47a1;">Formulir Pelaporan Banjir</h2>

    <form action="{{ route('laporan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_pelapor">Nama Pelapor:</label>
            <input type="text" id="nama_pelapor" name="nama_pelapor" placeholder="Masukkan nama lengkap" required>
        </div>

        <div class="form-group">
            <label for="lokasi">Lokasi Kejadian:</label>
            <input type="text" id="lokasi" name="lokasi" placeholder="Contoh: Kecamatan Dayeuhkolot" required>
        </div>

        <div class="form-group">
            <label for="tinggi_air">Tinggi Genangan Air (cm):</label>
            <input type="number" id="tinggi_air" name="tinggi_air" placeholder="Contoh: 45" required min="1">
        </div>

        <button type="submit" class="btn-submit">Kirim Laporan</button>
    </form>
</div>
@endsection