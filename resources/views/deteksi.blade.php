@extends('layouts.main')

@section('title', 'Input Deteksi – AgriVision Garut')

@section('content')
    <h1>Input Hasil Deteksi Hama</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('deteksi.proses') }}" method="POST" class="card form">
        @csrf

        <label for="lokasi">Lokasi Lahan</label>
        <select name="lokasi" id="lokasi" required>
            <option value="">-- Pilih lokasi --</option>
            @foreach (['Garut Kota', 'Tarogong Kaler', 'Samarang'] as $l)
                <option value="{{ $l }}" @selected(old('lokasi') === $l)>{{ $l }}</option>
            @endforeach
        </select>

        <label for="nama_tanaman">Nama Tanaman</label>
        <input type="text" name="nama_tanaman" id="nama_tanaman" placeholder="Padi, Jagung, Cabai" value="{{ old('nama_tanaman') }}" required>

        <label for="jenis_hama">Jenis Hama Hasil Prediksi</label>
        <input type="text" name="jenis_hama" id="jenis_hama" placeholder="Wereng Cokelat, Ulat Grayak, Kutu Daun" value="{{ old('jenis_hama') }}" required>

        <label for="confidence_score">Confidence Score (%)</label>
        <input type="number" name="confidence_score" id="confidence_score" min="0" max="100" value="{{ old('confidence_score') }}" required>
        <small id="preview-status" class="preview"></small>

        <label for="tingkat_kerusakan">Tingkat Kerusakan Daun (%)</label>
        <input type="number" name="tingkat_kerusakan" id="tingkat_kerusakan" min="0" max="100" step="0.1" value="{{ old('tingkat_kerusakan') }}" required>

        <button type="submit" class="btn">Proses dan simpan</button>
    </form>
@endsection
