<?php

namespace Database\Seeders;

use App\Models\Ujian;
use Illuminate\Database\Seeder;

class UjianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ujian = [
            [
                "nama_mk" => "Pemrograman Web",
                "dosen" => "Pahrul Irfan, M.Kom",
                "jumlah_soal" => 25,
                "keterangan" => "Pemrograman Web Dasar, membahas HTML, CSS, JS, dan PHP murni"
            ],
            [
                "nama_mk" => "Pemrograman Web Services",
                "dosen" => "Pahrul Irfan, M.Kom",
                "jumlah_soal" => 15,
                "keterangan" => "Pemrograman Web Lanjut, memperlajari penggunaan framework laravel serta membangun web service menggunakan laravel"
            ]
        ];

        foreach ($ujian as $value) {
            Ujian::create($value);
        }
    }
}
