<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterjenisguru extends Model
{
    public $timestamps = false;
    protected $table = 'masterjenisguru';
    public $fillable = ['kode', 'jenisguru'];
}
