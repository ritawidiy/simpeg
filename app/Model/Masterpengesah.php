<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterpengesah extends Model
{
    public $timestamps = false;
    protected $table = 'masterpengesah';
    public $fillable = ['kode', 'pengesah'];
}
