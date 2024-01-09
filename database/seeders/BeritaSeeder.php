<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Berita::create([
            'judul_berita' => 'Sobat Sehat: Menjaga Kesehatan Tubuh dengan Olahraga Rutin',
            'isi_berita' => 'Sobat Sehat di seluruh Indonesia semakin menyadari pentingnya menjaga kesehatan tubuh melalui gaya hidup aktif',
            'tanggal' => '2021-01-01',
        ]);
    }
}
