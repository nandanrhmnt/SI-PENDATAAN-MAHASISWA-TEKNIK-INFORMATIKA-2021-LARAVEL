<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lainnya extends Model
{
    protected $fillable = [
        'mahasiswa_id', 'riwayat_penyakit', 'nama_ayah', 'nama_ibu', 'kontak_orangtua',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
}
