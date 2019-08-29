<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tempbiodata extends Model
{
    public $timestamps = false;
    protected $table = 'temp_biodata';
    public $fillable = [
        'nip',
        'nama',
        'tgllahir',
        'alamat',
        'sex',
        'urtgol',
        'golongan',
        'statpeg',
        'statkel',
        'satker',
        'eselon',
        'masker',
        'tmtskep',
        'tmtmulai',
        'noskep',
        'penerbit',
        'kd_fungsi',
        'kd_guru',
        'status'
    ];
}
