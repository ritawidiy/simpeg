<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Riwayatdiklat extends Model
{
    public $timestamps = false;
    protected $table = 'riwayatdiklat';
    public $guarded = ['id'];

    public function getBiodata()
    {
        return $this->hasMany(Biodata::class, 'nip');
    }
}
