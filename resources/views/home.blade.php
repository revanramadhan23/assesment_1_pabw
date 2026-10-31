@extends('layouts.main')

@section('title', 'Dashboard – AgriVision Garut')

@section('content')
    <section class="hero">
        <h1>Selamat Datang di AgriVision Garut – Sistem Deteksi Hama Tanaman Berbasis Computer Vision</h1>
        <p>Catat hasil prediksi model EfficientNet-B0, pantau tingkat kerusakan daun, dan dapatkan rekomendasi penanganan hama di lahan Kabupaten Garut.</p>
        <div class="actions">
            <a class="btn" href="{{ route('deteksi') }}">Catat hasil deteksi</a>
            <a class="btn btn-outline" href="{{ route('riwayat') }}">Lihat riwayat</a>
        </div>
    </section>

    <section class="card">
        <h2>Tujuan Pengembangan</h2>
        <p>Mempercepat penanganan serangan hama dengan pencatatan digital yang teratur, menggantikan pencatatan manual oleh petani.</p>
        <h2>Teknologi Computer Vision</h2>
        <p>Model klasifikasi citra EfficientNet-B0 memprediksi jenis hama dari foto daun beserta nilai confidence score.</p>
    </section>
@endsection
