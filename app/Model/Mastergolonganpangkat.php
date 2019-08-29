<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Mastergolonganpangkat extends Model
{
    public $timestamps = false;
    protected $table = 'mastergolonganpangkat';
    protected $primaryKey = 'nip'; // or null
    // protected $incrementing=false;

    public $incrementing = false;
    public $fillable = ['kode',
        'namagolongan',
        'namapangkat',
        'golongan',
        'ruang',
        'nourut',
        'kodeurutan',
        'potongan',
        'katapotongan',
        'kurang',
        'garis',
        'nokgbdepan',
        'nokgbbelakang',
        'kodegaji',
        'status',
        'romawi',
        'ganjil',
        'tujuanpensiun',
        'tujuankota',
        'maxkgb',
        'fiktif',
        'p1',
        'p2',
        'p3',
        'p4',
        'p5',
        'p6',
        'tujuanpensiun2',
        'tujuankota2',
        'p12',
        'p22',
        'p32',
        'p42',
        'p52',
        'p62',
        'statpeg',
        'id'];

    public function getBiodata()
    {
        return $this->belongsTo(Biodata::class, 'nip');
    }


}
