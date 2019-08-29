<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Riwayatjabatan extends Model
{
    public $timestamps = false;
    protected $table = 'riwayatjabatan';
    public $guarded = ['id'];

    public function getBiodata()
    {
        return $this->hasMany(Biodata::class, 'nip');
    }
}
