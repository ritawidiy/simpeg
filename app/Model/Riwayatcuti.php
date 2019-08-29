<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Riwayatcuti extends Model
{
    public $timestamps = false;
    protected $table = 'riwayatcuti';
    public $guarded = ['id'];

    public function getBiodata()
    {
        return $this->hasMany(Biodata::class, 'nip');
    }
}
