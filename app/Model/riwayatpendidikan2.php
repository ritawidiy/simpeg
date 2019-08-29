<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class riwayatpendidikan2 extends Model
{
    public $timestamps = false;
    protected $table = 'riwayatpendidikan2';
    public $fillable = ['nip',
        'pendidkan',
        'namapendidikan',
        'luluspendidikan',
        'ijazasertifikat'
    ];
}
