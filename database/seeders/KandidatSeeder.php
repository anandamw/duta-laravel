<?php

namespace Database\Seeders;

use App\Models\Kandidat;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker; // Perhatikan penggunaan namespace yang benar untuk Faker

class KandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [
                "nama" => "ananda",
                "fakultas" => "teknik",
                "prodi" => "informatika",
                "domisili" => "sumenep",
                "umur" => "19",
                "jenis_kelamin" => 1,
                "angkatan" => "2020",
                "file_pdf" => "berkas.pdf",
                "gambar" => "gambar.jpg",
                "no_whatsapp" => "087740505052",
                "email" => "ananda@gmail.com",
                "visi" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit quos sed adipisci aut doloribus repellat eius ratione harum ipsa provident? ",
                "misi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro doloremque neque, aliquam eligendi aspernatur numquam. ",
                "tinggi_badan" => 170,
                "berat_badan" => 55
            ]
        ];

        foreach ($data as $item) {
            Kandidat::create($item);
        }
    }
}
