<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class riwayatpendidikan extends Model
{
    public $timestamps = false;
    protected $table = 'riwayatpendidikann';
    public $fillable = [
        'nip',
        'tingkatpendidikan',
        'jurusan',
        'noijazah',
        'tanggalijazah',
        'namasekolah',
        'alamatsekolah',
        'kodeusulan',
        'tahunmasuk',
        'tahunlulus',
        'ijazahsertifikat',
        'kepalasekolah',
        'id'
    ];

    public function getBiodata()
    {
        return $this->hasMany(Biodata::class, 'nip');
    }
}
