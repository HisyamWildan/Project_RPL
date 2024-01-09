<?php

namespace Database\Seeders;

use App\Models\Lokasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lokasi::create([
            'nama_lokasi' => 'Lapangan Futsal',
            'alamat' => 'Jl. Raya Cipadung No. 1, Cibiru, Kec. Cileunyi, Bandung, Jawa Barat 40625',
            'jenis_olahraga' => 'Futsal',
            'tanggal' => '2021-01-01',
            'waktu' => '08:00:00',
        ]);
    }
}
