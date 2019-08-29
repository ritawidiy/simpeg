<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gabung extends Model
{
    public $timestamps = false;
    protected $table = 'gabung';
    public $fillable = ['NIP',
        'NIPBARU',
        'NAMA',
        'SEX',
        'TGLLHR',
        'URTGOL',
        'GOLONGAN',
        'STATPEG',
        'STATKEL',
        'REK_BANK',
        'NO_KARTU',
        'STATDATA',
        'SATKER',
        'KD_LOK',
        'ESELON',
        'MASKER',
        'TMTSKEP',
        'TMTMULAI',
        'NOSKEP',
        'PENERBIT',
        'KD_FUNGSI',
        'KD_GURU',
        'STATUS',
        'JIWA',
        'GAPOK',
        'TISTRI',
        'TANAK',
        'TLAIN',
        'TJABAT',
        'TNONJAB',
        'TFUNGSI',
        'TBERAS',
        'TKHUSUS',
        'BULAT',
        'KOTOR',
        'IWP10',
        'PPAJAK',
        'PSEWA_RMH',
        'PHUT_LEBIH',
        'PTAB_RMH',
        'PLAIN',
        'POTONG',
        'BERSIH',
        'ALAMAT',
        'TGLUPD',
        'BLTHGAJI',
        'KETERANGAN'];
}
