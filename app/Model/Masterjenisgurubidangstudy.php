<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterjenisgurubidangstudy extends Model
{
    public $timestamps = false;
    protected $table = 'masterjenisgurubidangstudy';
    public $fillable = ['kode', 'guru', 'bidangstudy'];
}
