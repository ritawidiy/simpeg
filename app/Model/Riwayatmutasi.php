<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Riwayatmutasi extends Model
{
    public $timestamps = false;
    protected $table = 'riwayatmutasi';
    public $fillable = ['nip',
        'jabatanlama',
        'jabatanbaru',
        'unitkerjalama',
        'unitkerjabaru',
        'pangkatlama',
        'pangkatbaru',
        'gajilama',
        'gajibaru',
        'tmtlama',
        'tmtbaru',
        'masakerjatahunlama',
        'masakerjabulanlama',
        'masakerjatahunbaru',
        'masakerjabulanbaru',
        'nipatasan',
        'alasanmutasi',
        'pertimbangan',
        'jeniskenaikan',
        'nobkn',
        'tglbkn',
        'nosk',
        'tglsk',
        'tglditetapkan',
        'kodeusulan',
        'minit',
        'koderiwayat',
        'id'];

    public function getBiodata()
    {
        return $this->hasMany(Biodata::class, 'nip');
    }
}
