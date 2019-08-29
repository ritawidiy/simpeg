<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usulanmutasi extends Model
{
    public $timestamps = false;
    protected $table = 'usulanmutasi';
    public $fillable = [
        'nip',
        'status',
        'tglpengajuan',
        'userpengusul',
        'kodeusulan'
    ];
}
