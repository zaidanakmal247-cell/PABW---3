@extends('layouts.app')

@section('title', 'Daftar Pelanggaran & Denda')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white py-3">
        <h4 class="mb-0 fw-bold">Riwayat Pelanggaran & Denda</h4>
    </div>
    <div class="card-body">
        
        {{-- Percabangan @if untuk notifikasi --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-hover table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th style="width: 50px;">No</th>
                        <th>Keterangan Pelanggaran</th>
                        <th>Nominal Denda</th>
                        <th>Status Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Perulangan @forelse --}}
                    @forelse($dendaList as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item['keterangan'] }}</td>
                            <td>Rp {{ number_format($item['nominal'], 0, ',', '.') }}</td>
                            <td>
                                {{-- Directive Percabangan Status --}}
                                @if($item['status'] === 'Lunas')
                                    <span class="badge bg-success">Lunas</span>
                                @else
                                    <span class="badge bg-danger">Belum Dibayar</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted py-4">
                                Tidak ada data pelanggaran atau denda yang tercatat.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection