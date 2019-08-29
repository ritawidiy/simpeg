<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master_unitkerja extends Model
{
    public $timestamps = false;
    protected $table = ‘masterunitkerja’;
    public $fillable = ['kode',
        'namaunitkerja',
        'header',
        'kodeinstansi',
        'tidakaktif',
        'namaunitkerjask',
        'kode2',
        'kode3',
        'id',
        'urut'];
}
