<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Lokasi extends Model
{
    use HasFactory;

    protected $table = 'lokasi';

    protected $fillable = [
        'nama_lokasi',
        'alamat',
        'jenis_olahraga',
        'tanggal',
        'waktu',
    ];

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class, 'id_lokasi');
    }

    public $timestamps = false;
}
