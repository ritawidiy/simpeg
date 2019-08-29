<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterstatuspegawai extends Model
{
    public $timestamps = false;
    protected $table = 'masterstatuspegawai';
    public $fillable = ['kode', 'namastatus'];
}
