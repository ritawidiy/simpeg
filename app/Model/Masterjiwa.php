<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterjiwa extends Model
{
    public $timestamps = false;
    protected $table = 'master_jiwa';
    public $fillable = ['jiwa', 'jumlah_keluarga'];
}
