<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterjabatanfungsional extends Model
{
    public $timestamps = false;
    protected $table = 'masterjabatanfungsional';
    public $fillable = ['kode',
        'nama',
        'usiapensiun',
        'header',
        'tunjangan',
        'instansi'];
}
