<?php

namespace App\Http\Controllers;

use App\Models\DeteksiHama;
use Illuminate\Http\Request;

class DeteksiController extends Controller
{
    public function form()
    {
        return view('deteksi');
    }

    public function prosesData(Request $request)
    {
        $data = $request->validate([
            'lokasi'            => 'required|in:Garut Kota,Tarogong Kaler,Samarang',
            'nama_tanaman'      => 'required|string|max:100',
            'jenis_hama'        => 'required|string|max:100',
            'confidence_score'  => 'required|integer|min:0|max:100',
            'tingkat_kerusakan' => 'required|numeric|min:0|max:100',
        ]);

        // Pengolahan status deteksi dilakukan di Controller
        $score = (int) $data['confidence_score'];

        if ($score < 50) {
            $status = 'Tidak Pasti';
            $rekomendasi = 'Perlu verifikasi manual oleh petugas';
        } elseif ($score <= 80) {
            $status = 'Indikasi Hama';
            $rekomendasi = 'Lakukan pemantauan intensif';
        } else {
            $status = 'Hama Terkonfirmasi';
            $rekomendasi = 'Segera lakukan pengendalian hama';
        }

        $data['status_deteksi'] = $status;

        // Simpan dengan Eloquent ORM
        $deteksi = DeteksiHama::create($data);

        return view('hasil', compact('deteksi', 'rekomendasi'));
    }

    public function riwayat()
    {
        $riwayat = DeteksiHama::latest()->get();

        return view('riwayat', compact('riwayat'));
    }
}
