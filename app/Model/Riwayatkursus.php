<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Riwayatkursus extends Model
{
    public $timestamps = false;
    protected $table = 'riwayatkursus';
    public $guarded = ['id'];

    public function getBiodata()
    {
        return $this->hasMany(Biodata::class, 'nip');
    }
}
