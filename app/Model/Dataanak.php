<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Dataanak extends Model
{
    public $timestamps = false;
    protected $table = 'dataanak';
    public $fillable = ['nip',
        'namaanak',
        'tempatlahiranak',
        'tgllahiranak',
        'jeniskelaminanak',
        'statuskeluargaanak',
        'statustunjangananak',
        'pendidikanumumanak',
        'pekerjaananak',
        'kodeusulan'];

    public function getBiodata()
    {
        return $this->belongsTo(Biodata::class, 'nip');
    }
}
