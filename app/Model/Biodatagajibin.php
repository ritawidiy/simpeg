<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodatagajibin extends Model
{
    public $timestamps = false;
    protected $table = 'biodata_gaji_';
    public $fillable = ['nip',
        'jiwa',
        'gapok',
        'tistri',
        'tanak',
        'tlain',
        'tjabat',
        'tnonjab',
        'tfungsi',
        'tberas',
        'tkhusus',
        'bulat',
        'kotor',
        'iwp10',
        'ppajak',
        'psewa_rmh',
        'ptung_sewa',
        'pang_rmh',
        'phut_lebih',
        'ptab_rmh',
        'plain',
        'potong',
        'bersih',
        'tglupd',
        'blthgaji',
        'keterangan',
        'satker',
        'satkerx'
    ];
}
