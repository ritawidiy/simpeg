<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mastercuti extends Model
{
    public $timestamps = false;
    protected $table = ‘mastercuti’;
    public $fillable = ['kode',
        'jeniscuti',
        'lama',
        'syarat',
        'header',
        'alamat',
        'alamat1',
        'alamat2',
        'npkd1',
        'npkd2'];
}
