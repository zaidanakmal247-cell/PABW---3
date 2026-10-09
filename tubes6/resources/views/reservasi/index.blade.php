@extends('layouts.app')

@section('title', 'Reservasi Parkir')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white py-3">
        <h4 class="mb-0 fw-bold">Form Reservasi Tempat Parkir</h4>
    </div>
    <div class="card-body">
        
        {{-- Panggil partial alert di sini --}}
        @include('pemberitahuan.alert')

        <form action="{{ route('reservasi.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pemesan</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="mb-3">
                <label for="plat" class="form-label">Nomor Plat Kendaraan</label>
                <input type="text" class="form-control" id="plat" name="plat_nomor" placeholder="Contoh: D 1234 ABC" required>
            </div>
            <div class="mb-3">
                <label for="area" class="form-label">Area Parkir</label>
                <select class="form-select" id="area" name="area" required>
                    <option value="">-- Pilih Area Parkir --</option>
                    <option value="A">Lantai 1 - Area A</option>
                    <option value="B">Lantai 1 - Area B</option>
                    <option value="C">Lantai 2 - Area C</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Reservasi Sekarang</button>
        </form>
    </div>
</div>
@endsection