@extends('layouts.main')

@section('title', 'Tentang – AgriVision Garut')

@section('content')
    <h1>Tentang AgriVision Garut</h1>

    <section class="card">
        <h2>Tujuan Sistem</h2>
        <p>Mencatat hasil deteksi hama tanaman, menampilkan informasi tanaman, serta menentukan status deteksi dan rekomendasi penanganan berdasarkan confidence score.</p>
    </section>

    <section class="card">
        <h2>Lokasi Deteksi</h2>
        <ul>
            <li>Kecamatan Garut Kota</li>
            <li>Kecamatan Tarogong Kaler</li>
            <li>Kecamatan Samarang</li>
        </ul>
    </section>

    <section class="card">
        <h2>Parameter yang Dicatat</h2>
        <ul>
            <li>Jenis hama</li>
            <li>Confidence score</li>
            <li>Tingkat kerusakan daun</li>
        </ul>
    </section>

    <section class="card">
        <h2>Model Klasifikasi</h2>
        <p>EfficientNet-B0 – model klasifikasi citra untuk memprediksi jenis hama dari foto daun tanaman.</p>
    </section>
@endsection
