<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Pribadi extends Model
{
    protected $fillable = [
        'nama', 'NIM', 'alamat', 'tanggal_lahir', 'jenis_kelamin', 'agama',
    ];

    // Definisi hubungan one-to-many dengan model Akademik
    public function akademik()
    {
        return $this->hasMany(Akademik::class);
    }

    // Definisi hubungan one-to-many dengan model Kegiatan
    public function kegiatan()
    {
        return $this->hasMany(Kegiatan::class);
    }

    // Definisi hubungan one-to-one dengan model Lainnya
    public function lainnya()
    {
        return $this->hasOne(Lainnya::class);
    }
}
