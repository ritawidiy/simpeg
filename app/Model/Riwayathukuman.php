<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Riwayathukuman extends Model
{
    public $timestamps = false;
    protected $table = 'riwayathukuman';
    public $guarded = ['id'];

    public function getBiodata()
    {
        return $this->hasMany(Biodata::class, 'nip');
    }
}
