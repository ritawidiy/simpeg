<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mastereselon extends Model
{
    public $timestamps = false;
    protected $table = 'mastereselon';
    public $fillable = ['kode',
        'eselon',
        'tunjungan',
        'neoeselon',
        'nosubeselon',
        'pakai',
        'pangkatterendah',
        'pangkattertinggi'];
}
