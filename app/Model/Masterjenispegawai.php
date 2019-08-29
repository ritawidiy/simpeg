<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterjenispegawai extends Model
{
    public $timestamps = false;
    protected $table = ‘masterjenispegawai’;
    public $fillable = ['kode', 'namajenis'];
}
