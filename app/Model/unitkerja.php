<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Biodata;

class unitkerja extends Model
{
    public $timestamps = false;
    protected $table = 'unit_kerja';

    protected $primaryKey = 'unit_id'; // or null

    public $incrementing = false;

    public $fillable = [
        'unit_id',
        'kelompok_id',
        'unit_name',
        'unit_address',
        'kepala_name',
        'kepala_pangkat',
        'kepala_nip',
        'kode_permen',
        'sigkatan',
        'tapd',
        'dpalock'
    ];
}
