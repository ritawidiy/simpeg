<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterjurusanpendidikan extends Model
{
    public $timestamps = false;
    protected $table = 'masterjurusanpendidikan';
    public $fillable = ['kode',
        'namajurusan',
        'low_rank',
        'high_rank',
        'strata',
        'status',
        'kode_pendidikan',
        'kode_jurusan',
        'namajurusansk'];
}
