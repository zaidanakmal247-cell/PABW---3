@extends('layouts.app')

@section('title', 'Daftar Laporan Banjir - BPBD')

@section('content')
<h2 style="margin-bottom: 20px; color :#0d47a1;">Daftar Laporan Banjir Terkini</h2>

{{-- Penggunaan @forelse untuk iterasi data --}}
@forelse($daftarLaporan as $laporan)
{{-- Dipanggil menggunakan @include partial --}}
@include('partials.laporan-card',['laporan' => $laporan])
@empty
<div class="card">
    <p>Belum ada laporan bencana banjir yang diterima saat ini.</p>
</div>
@endforelse
@endsection