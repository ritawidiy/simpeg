<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Riwayatmutasi extends Model
{
    protected $table = 'riwayatmutasi';
    protected $fillable = [
        'id',
        'nip',
        'nama',
        'jeniskenaikan',
        'alasanmutasi',
        'pertimbangan',
        'nipatasan',
        'minit',
        'tglditetapkan',
        'nosk',
        'tglsk',
        'nobkn',
        'tglbkn',
        'jabatanlama',
        'jabatanbaru',
        'tmtlama',
        'tmtbaru',
        'gajilama',
        'gajibaru',
        'masakerjatahunlama',
        'masakerjabulanlama',
        'masakerjatahunbaru',
        'masakerjabulanbaru',
        'pangkatgolonganlama',
        'pangkatgolonganbaru',
        'eselonlama',
        'eselonbaru',
        'unitkerjalama',
        'unitkerjabaru',
        'tglpengajuan',
        'status',
        'userpengusul'
    ];

    public function getBiodata()
    {
        return $this->hasMany(Biodata::class, 'nip');
    }

    public function getBerkasMutasi()
    {
        return $this->hasOne(BerkasMutasi::class, 'riwayatmutasi_id');
    }
}
