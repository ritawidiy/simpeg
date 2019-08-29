<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Riwayatpangkat extends Model
{
    public $timestamps = false;
    protected $table = 'riwayatpangkat';
    public $guarded = ['id'];

    public function getBiodata()
    {
        return $this->hasMany(Biodata::class, 'nip');
    }
}
