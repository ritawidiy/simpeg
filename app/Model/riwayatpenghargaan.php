<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class riwayatpenghargaan extends Model
{
    public $timestamps = false;
    protected $table = 'riwayatpenghargaan';
    public $fillable = [
        'nip',
        'namapenghargaan',
        'nosk',
        'tglsk',
        'tahun',
        'asal',
        'pangkatsaatitu',
        'golongansaatitu',
        'jabatansaatitu',
        'eselonsaatitu',
        'instansisaatitu',
        'kodeusulan',
        'id',
        'unitkerjasaatitu'
    ];

    public function getBiodata()
    {
        return $this->hasMany(Biodata::class, 'nip');
    }
}
