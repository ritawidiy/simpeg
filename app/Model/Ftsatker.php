<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ftsatker extends Model
{
    public $timestamps = false;
    protected $table = 'ftsatker';
    public $fillable = ['satker',
        'satkerlm',
        'unit',
        'kota',
        'kd_spp',
        'no_unit',
        'kepala',
        'nip_ka',
        'nip_kabr',
        'jabatan',
        'bendahara',
        'nip_ben',
        'nip_benbr',
        'operator',
        'nip_opr',
        'nip_oprbr'];
}
