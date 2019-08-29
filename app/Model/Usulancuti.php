<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usulancuti extends Model
{
    public $timestamps = false;
    protected $table = 'usulancuti';
    public $fillable = [
        'nip',
        'status',
        'tglpengajuan',
        'userpengusul',
        'kodeusulan'
    ];
}
