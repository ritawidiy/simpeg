<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usulankenaikanpangkat extends Model
{
    public $timestamps = false;
    protected $table = 'usulankenaikanpangkat';
    public $fillable = [
        'nip',
        'status',
        'tglpengajuan',
        'userpengusul',
        'kodeusulan'
    ];
}
