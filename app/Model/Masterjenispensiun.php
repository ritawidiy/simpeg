<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterjenispensiun extends Model
{
    public $timestamps = false;
    protected $table = 'masterjenispensiun';
    public $fillable = ['kode',
        'jenispensiun',
        'kodekedudukan',
        'keterangan',
        'kodestatuspegawai',
        'hal'];
}
