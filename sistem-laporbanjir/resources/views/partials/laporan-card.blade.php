@php
    $status = '';
    $badgeClass = '';

    if ($laporan['tinggi_air'] < 30) {
        $status = 'Waspada';
        $badgeClass = 'bg-waspada';
    } elseif ($laporan['tinggi_air'] <= 70) {
        $status = 'Siaga';
        $badgeClass = 'bg-siaga';
    } else {
        $status = 'Awas';
        $badgeClass = 'bg-awas';
    }
@endphp

<div class="card{{$badgeClass}}">
    <div style="display: flex; justify-content: space-between; align-items:center; margin-bottom:8px;">
        <h3 style="margin: 0; color:rgb(0, 0, 0);">{{$laporan['lokasi']}}</h3>
        <span class="badge {{ $badgeClass  }}">Status: {{$status}}</span>
    </div>
    <p><strong>Nama Pelapor:</strong>{{$laporan['nama_pelapor']}}</p>
    <p><strong>Tinggi Genangan:</strong>{{$laporan['tinggi_air']}}cm</p>


</div>