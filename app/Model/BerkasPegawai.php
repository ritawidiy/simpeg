<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BerkasPegawai extends Model
{
    protected $table = 'berkas_pegawai';

    protected $guarded = ['id'];

    public function getBiodata()
    {
        return $this->belongsTo(Biodata::class, 'nip');
    }
}
