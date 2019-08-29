<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterhukuman extends Model
{
    public $timestamps = false;
    protected $table = 'masterhukuman';
    public $fillable = ['kode_tingkat',
        'kode_hukuman',
        'hukuman',
        'keterangan'];
}
