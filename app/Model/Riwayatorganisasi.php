<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Riwayatorganisasi extends Model
{
    public $timestamps = false;
    protected $table = 'riwayatorganisasi';
    public $guarded = ['id'];

    public function getBiodata()
    {
        return $this->hasMany(Biodata::class, 'nip');
    }
}
