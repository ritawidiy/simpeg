<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterusergaji extends Model
{
    public $timestamps = false;
    protected $table = ‘masterusergaji’;
    public $fillable = ['username',
        'password',
        'eneble',
        'level',
        'last_login',
        'keterangan',
        'no_nip',
        'id'];
}
