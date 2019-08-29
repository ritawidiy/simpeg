<!-- //unit kja -->

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masteruserss extends Model
{
    public $timestamps = false;
    protected $table = ‘masteruser__’;
    public $fillable = ['username',
        'password',
        'eneble',
        'level',
        'last_login',
        'keterangan',
        'no_nip'];
}
