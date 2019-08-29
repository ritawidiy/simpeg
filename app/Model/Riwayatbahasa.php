<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Riwayatbahasa extends Model
{
    public $timestamps = false;
    protected $table = 'riwayatbahasa';
    public $fillable = ['nip',
        'namabahasa_daerah',
        'kemampuanbicara_daerah',
        'namabahasa_asing',
        'kemampuanbicara_asing',
        'kodeusulan',
        'id'];

    public function getBiodata()
    {
        return $this->hasMany(Biodata::class, 'nip');
    }
}
