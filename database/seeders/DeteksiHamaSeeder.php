<?php

namespace Database\Seeders;

use App\Models\DeteksiHama;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DeteksiHamaSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $lokasi  = ['Garut Kota', 'Tarogong Kaler', 'Samarang'];
        $tanaman = ['Padi', 'Jagung', 'Cabai'];
        $hama    = ['Wereng Cokelat', 'Ulat Grayak', 'Kutu Daun'];

        for ($i = 0; $i < 18; $i++) {
            // 3 data pertama dipaksa mewakili tiap kategori agar semua status muncul
            $score = match ($i) {
                0 => $faker->numberBetween(30, 49),
                1 => $faker->numberBetween(50, 80),
                2 => $faker->numberBetween(81, 99),
                default => $faker->numberBetween(30, 99),
            };

            DeteksiHama::create([
                'lokasi'            => $faker->randomElement($lokasi),
                'nama_tanaman'      => $faker->randomElement($tanaman),
                'jenis_hama'        => $faker->randomElement($hama),
                'confidence_score'  => $score,
                'tingkat_kerusakan' => $faker->randomFloat(1, 0, 80),
                'status_deteksi'    => $this->tentukanStatus($score),
            ]);
        }
    }

    private function tentukanStatus(int $score): string
    {
        if ($score < 50) {
            return 'Tidak Pasti';
        } elseif ($score <= 80) {
            return 'Indikasi Hama';
        }
        return 'Hama Terkonfirmasi';
    }
}
