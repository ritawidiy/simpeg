<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mastertingkatpendidikan extends Model
{
    public $timestamps = false;
    protected $table = 'mastertingkatpendidikan';
    public $fillable = ['kode',
        'tingkatpendidikan',
        'xtingkatpendidikan',
        'pangkattertinggi',
        'ket1',
        'ket2',
        'ket3',
        'ket4',
        'kodetki'];
}
