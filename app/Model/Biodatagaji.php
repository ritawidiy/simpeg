<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodatagaji extends Model
{
    public $timestamps = false;
    protected $table = 'biodata_gaji';
    public $fillable = ['id_gaji',
        'nip_biodata',
        'bulan_bayar',
        'gaji_pokok',
        'status',
        'id_bulan',
        'tahun'
    ];
}
