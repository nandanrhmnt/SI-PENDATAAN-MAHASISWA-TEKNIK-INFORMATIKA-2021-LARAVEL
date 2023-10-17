<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pribadi extends Model
{
    protected $fillable = [
        'nama', 'NIM', 'alamat', 'tanggal_lahir', 'jenis_kelamin', 'agama',
    ];

    public function akademik()
    {
        return $this->hasMany(Akademik::class);
    }

    public function kegiatan()
    {
        return $this->hasMany(Kegiatan::class);
    }

    public function lainnya()
    {
        return $this->hasOne(Lainnya::class);
    }
}

