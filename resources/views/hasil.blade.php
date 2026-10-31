@extends('layouts.main')

@section('title', 'Hasil Deteksi – AgriVision Garut')

@section('content')
    <h1>Hasil Deteksi Hama</h1>

    @if ($deteksi->status_deteksi === 'Hama Terkonfirmasi')
        <div class="alert alert-danger">Hama Terkonfirmasi – {{ $rekomendasi }}.</div>
    @elseif ($deteksi->status_deteksi === 'Indikasi Hama')
        <div class="alert alert-warning">Indikasi Hama – {{ $rekomendasi }}.</div>
    @else
        <div class="alert alert-info">Tidak Pasti – {{ $rekomendasi }}.</div>
    @endif

    <table class="table">
        <tr><th>Lokasi Lahan</th><td>{{ $deteksi->lokasi }}</td></tr>
        <tr><th>Nama Tanaman</th><td>{{ $deteksi->nama_tanaman }}</td></tr>
        <tr><th>Jenis Hama</th><td>{{ $deteksi->jenis_hama }}</td></tr>
        <tr><th>Confidence Score</th><td>{{ $deteksi->confidence_score }}%</td></tr>
        <tr><th>Tingkat Kerusakan Daun</th><td>{{ $deteksi->tingkat_kerusakan }}%</td></tr>
        <tr><th>Status Deteksi</th><td>{{ $deteksi->status_deteksi }}</td></tr>
        <tr><th>Rekomendasi</th><td>{{ $rekomendasi }}</td></tr>
    </table>

    <div class="actions">
        <a class="btn" href="{{ route('deteksi') }}">Input lagi</a>
        <a class="btn btn-outline" href="{{ route('riwayat') }}">Lihat riwayat</a>
    </div>
@endsection
