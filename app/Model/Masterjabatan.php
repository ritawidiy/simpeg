<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterjabatan extends Model
{
    public $timestamps = false;
    protected $table = 'masterjabatan';
    public $fillable = ['kode',
        'namajabatan',
        'jenisjabatan',
        'kodeunitkerja',
        'kodeeselon',
        'kodegolbawah',
        'kodegolatas',
        'tidakaktif',
        'namajabatansk',
        'atasan',
        'kodepensiun',
        'nip',
        'niplama',
        'keadaan',
        'kodeuk',
        'kodeinstansi',
        'unitkerja',
        'instansi',
        'pengantarpensiun',
        'header',
        'plt',
        'kelompok',
        'kodegol'];
}
