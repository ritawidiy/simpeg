<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterjenisjabatan extends Model
{
    public $timestamps = false;
    protected $table = ‘masterjenisjabatan’;
    public $fillable = ['kode', 'namajenis'];
}
