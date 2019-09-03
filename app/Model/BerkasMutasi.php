<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BerkasMutasi extends Model
{
    protected $table = 'berkasmutasi';

    protected $guarded = ['id'];

    public function getRiwayatMutasi()
    {
        return $this->belongsTo(Riwayatmutasi::class, 'riwayatmutasi_id');
    }
}
