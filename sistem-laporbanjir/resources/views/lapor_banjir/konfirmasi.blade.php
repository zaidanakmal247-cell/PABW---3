<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Laporan - LaporBanjir</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h2>Laporan Berhasil Diterima</h2>
            <p>Terima kasih atas partisipasi Anda.</p>
        </div>

        <div class="result-item">
            <strong>Nama Pelapor:</strong>
            <p>{{ $data['nama_pelapor'] }}</p>
        </div>

        <div class="result-item">
            <strong>Lokasi Kejadian:</strong>
            <p>{{ $data['lokasi'] }}</p>
        </div>

        <div class="result-item">
            <strong>Tinggi Genangan Air:</strong>
            <p>{{ $data['tinggi_genangan'] }} cm</p>
        </div>

        <div style="margin-top: 20px;">
            <a href="{{ route('lapor.index') }}">
                <button class="btn" style="background-color: #6c757d;">Buat Laporan Baru</button>
            </a>
        </div>
    </div>
</body>
</html>