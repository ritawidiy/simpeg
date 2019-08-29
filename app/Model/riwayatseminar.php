<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class riwayatseminar extends Model
{
    public $timestamps = false;
    protected $table = 'riwayatseminar';
    public $fillable = [
        'nip',
        'jenisseminar',
        'namaseminar',
        'tempatseminar',
        'penyelenggara',
        'angkatan',
        'tglmulai',
        'tglselesai',
        'lamajamseminar',
        'nosk',
        'tglsk',
        'nosertifikat',
        'tglsertifikat',
        'pangkatsaatitu',
        'golongansaatitu',
        'jabatansaatitu',
        'eselonsaatitu',
        'instansisaatitu',
        'kodeusulan',
        'ijazahsertifikat',
        'id',
        'unitkerjasaatitu'
    ];

    public function getBiodata()
    {
        return $this->hasMany(Biodata::class, 'nip');
    }
}
