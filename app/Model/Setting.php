<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public $timestamps = false;
    protected $table = 'setting';
    public $fillable = [
        'jiwa',
        'tberas'
    ];
}
