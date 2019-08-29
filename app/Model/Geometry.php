<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Geometry extends Model
{
    public $timestamps = false;
    protected $table = ‘geometry_columns’;
    public $fillable = ['f_table_catalog',
        'f_table_schema',
        'f_table_name',
        'f_geometry_column',
        'coord_dimension',
        'srid',
        'type'];
}
