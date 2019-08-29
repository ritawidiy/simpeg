<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class riwayatpenataran extends Model
{
    public $timestamps = false;
    protected $table = 'riwayatpenataran';
    public $fillable = ['nip',
        'jenispenataran',
        'namapenataran',
        'tempatpenataran',
        'penyelenggara',
        'angkatan',
        'tglmulai',
        'tglselesai',
        'lamajampenataran',
        'nosk',
        'tglsk',
        'nosertifikat',
        'pangkatsaatitu',
        'golongansaatitu',
        'jabatansaatitu',
        'eselonsaatitu',
        'instansisaatitu',
        'kodeusulan',
        'ijazasertifikat',
        'id',
        'unitkerjasaatitu'
    ];

    public function getBiodata()
    {
        return $this->hasMany(Biodata::class, 'nip');
    }
}
