<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Masterunitkerja extends Model
{
    public $timestamps = false;
    protected $table = "master_unitkerja";
    public $fillable = ['id',
        'namaunitkerja',
        'lokasi_bagian',
        'jml_tpp_pendidikan',
        'jml_tpp_kependidikan',
        'jml_tpp_honorer',
        'urut'];

    public function getBiodata()
    {
        return $this->hasMany(Biodata::class, 'lokasi_bagian');
    }
}
