<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterjeniskenaikanpangkat extends Model
{
    public $timestamps = false;
    protected $table = ‘masterjeniskenaikanpangkat’;
    public $fillable = ['kode',
        'namajenis',
        'jenispangkatkecil',
        'pilihan',
        'reguler',
        'header'];
}
