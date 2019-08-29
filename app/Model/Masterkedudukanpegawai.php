<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterkedudukanpegawai extends Model
{
    public $timestamps = false;
    protected $table = 'masterkedudukanpegawai';
    public $fillable = ['kode',
        'namakedudukan',
        'nominatif'];
}
