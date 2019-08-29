<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usulankenaikangaji extends Model
{
    public $timestamps = false;
    protected $table = 'usulankenaikangaji';
    public $fillable = [
        'nip',
        'status',
        'tglpengajuan',
        'userpengusul',
        'kodeusulan'
    ];
}
