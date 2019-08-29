<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterstrukturpegawai extends Model
{
    public $timestamps = false;
    protected $table = 'masterstrukturpegawai';
    public $fillable = ['kode', 'namastruktur'];
}
