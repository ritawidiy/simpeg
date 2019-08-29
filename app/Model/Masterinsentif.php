<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterinsentif extends Model
{
    public $timestamps = false;
    protected $table = 'master_insentif';
    public $fillable = ['id',
        'keterangan',
        'nilai'
    ];
}
