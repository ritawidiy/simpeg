<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Riwayatmutasi extends Model
{
    protected $table = 'riwayatmutasi';
    protected $guarded = ['id'];

    public function getBiodata()
    {
        return $this->hasMany(Biodata::class, 'nip');
    }

    public function getBerkasMutasi()
    {
        return $this->hasOne(BerkasMutasi::class, 'riwayatmutasi_id');
    }
}
