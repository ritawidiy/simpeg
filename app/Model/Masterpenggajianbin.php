<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterpenggajianbin extends Model
{
    public $timestamps = false;
    protected $table = 'master_penggajian_';
    public $fillable = ['nip',
        'bulan',
        'tahun',
        'jiwa',
        'gapok',
        'tistri',
        'tanak',
        'tlain',
        'tjabat',
        'tnonjab',
        'tfungsi',
        'tberas',
        'tkhusus',
        'bulat',
        'kotor',
        'iwp10',
        'ppajak',
        'psewa_rmh',
        'ptung_sewa',
        'pang_rmh',
        'plain',
        'potong',
        'bersih',
        'tglupd',
        'blthgaji',
        'keterangan',
        'satker',
        'satkerx',
        'insentif_upt'];
}
