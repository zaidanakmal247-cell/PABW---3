<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporBanjir - BPBD Kabupaten Bandung</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h2>Form Pelaporan Banjir</h2>
            <p>BPBD Kabupaten Bandung</p>
        </div>

        @if ($errors->any())
            <div class="alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('lapor.kirim') }}" method="POST" onsubmit="return konfirmasiKirim()">
            @csrf
            <div class="form-group">
                <label for="nama_pelapor">Nama Pelapor</label>
                <input type="text" id="nama_pelapor" name="nama_pelapor" value="{{ old('nama_pelapor') }}" placeholder="Masukkan nama lengkap Anda" required>
            </div>

            <div class="form-group">
                <label for="lokasi">Lokasi Kejadian (Kecamatan/Desa)</label>
                <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi') }}" placeholder="Contoh: Dayeuhkolot / Desa Cangkuang" required>
            </div>

            <div class="form-group">
                <label for="tinggi_genangan">Tinggi Genangan Air (cm)</label>
                <input type="number" id="tinggi_genangan" name="tinggi_genangan" value="{{ old('tinggi_genangan') }}" placeholder="Contoh: 50" required min="1">
            </div>

            <button type="submit" class="btn">Kirim Laporan</button>
        </form>
    </div>

    <script>
        function konfirmasiKirim() {
            return confirm("Apakah data laporan banjir yang Anda masukkan sudah benar?");
        }
    </script>
</body>
</html>