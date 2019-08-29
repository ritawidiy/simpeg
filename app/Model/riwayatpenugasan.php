<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class riwayatpenugasan extends Model
{
    public $timestamps = false;
    protected $table = 'riwayatpenugasan';
    public $fillable = [
        'nip',
        'jenispenugasan',
        'namapenugasan',
        'tempatpenugasan',
        'penyelenggara',
        'angkatan',
        'tglmulai',
        'tglselesai',
        'lamajampenugasan',
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
        'id',
        'unitkerjasaatitu'
    ];

    public function getBiodata()
    {
        return $this->hasMany(Biodata::class, 'nip');
    }
}
