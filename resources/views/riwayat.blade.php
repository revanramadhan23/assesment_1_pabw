@extends('layouts.main')

@section('title', 'Riwayat Deteksi – AgriVision Garut')

@section('content')
    <h1>Riwayat Deteksi Hama</h1>

    <div class="table-wrap">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Lokasi</th>
                <th>Tanaman</th>
                <th>Jenis Hama</th>
                <th>Confidence</th>
                <th>Kerusakan Daun</th>
                <th>Status</th>
                <th>Rekomendasi</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($riwayat as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->lokasi }}</td>
                    <td>{{ $item->nama_tanaman }}</td>
                    <td>{{ $item->jenis_hama }}</td>
                    <td>{{ $item->confidence_score }}%</td>
                    <td>{{ $item->tingkat_kerusakan }}%</td>
                    <td>
                        @if ($item->status_deteksi === 'Hama Terkonfirmasi')
                            <span class="badge badge-danger">{{ $item->status_deteksi }}</span>
                        @elseif ($item->status_deteksi === 'Indikasi Hama')
                            <span class="badge badge-warning">{{ $item->status_deteksi }}</span>
                        @else
                            <span class="badge badge-info">{{ $item->status_deteksi }}</span>
                        @endif
                    </td>
                    <td>{{ $item->rekomendasi }}</td>
                    <td>{{ $item->created_at->format('d/m/Y H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="empty">Belum ada data. <a href="{{ route('deteksi') }}">Catat hasil deteksi pertama</a>.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    </div>
@endsection
