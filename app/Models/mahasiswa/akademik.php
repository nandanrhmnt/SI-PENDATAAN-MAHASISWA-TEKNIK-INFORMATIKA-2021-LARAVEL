<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akademik extends Model
{
    protected $fillable = [
        'mahasiswa_id', 'IPK', 'nilai_mata_kuliah', 'prestasi_akademik',
    ];

    public function pribadi()
    {
        return $this->belongsTo(Pribadi::class);
    }
}

