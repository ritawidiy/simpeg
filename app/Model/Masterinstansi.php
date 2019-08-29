<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterinstansi extends Model
{
    public $timestamps = false;
    protected $table = 'masterinstansi';
    public $fillable = ['kode', 'namainstansi'];
}
