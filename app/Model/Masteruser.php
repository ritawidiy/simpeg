<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Masteruser extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'no_nip';
    public $incrementing = false;
    public $timestamps = false;
    protected $table = 'masteruser';
    public $fillable = ['username',
        'password',
        'eneble',
        'level',
        'last_login',
        'keterangan',
        'no_nip'];
}
