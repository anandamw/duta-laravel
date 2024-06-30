<?php

namespace Database\Seeders;

use App\Models\Pemilihan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemilihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [[
            "kandidats_id" => 1,
            "nama_depan" => "yoga",
            "nama_belakang" => "lorem",
            "alasan" => "suka lawakkkkkkkssss",
            "tanggal_pemilihan" => date("Y-m-d H:i:s")


        ]];


        foreach ($data as $item) {
            Pemilihan::create($item);
        }
    }
}
