<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spatialrefsys extends Model
{
    public $timestamps = false;
    protected $table = 'spatial_ref_sys';
    public $fillable = [
        'srid',
        'auth_name',
        'auth_srid',
        'srtext',
        'proj4text'
    ];
}
