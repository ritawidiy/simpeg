<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Riwayatgaji extends Model
{
    public $timestamps = false;
    protected $table = 'riwayatgaji';
    public $guarded = ['id'];

    public function getBiodata()
    {
        return $this->hasMany(Biodata::class, 'nip');
    }
}
