<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usulandiklat extends Model
{
    public $timestamps = false;
    protected $table = 'usulandiklat';
    public $fillable = [
        'nip',
        'status',
        'tglpengajuan',
        'userpengusul',
        'kodeusulan'
    ];
}
