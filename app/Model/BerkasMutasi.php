<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BerkasMutasi extends Model
{
    protected $table = 'berkasmutasi';

    protected $fillable = [
        'id',
        'riwayatmutasi_id',
        'foto_berwarna',
        'status_foto_berwarna',
        'suratpersetujuan_instansi',
        'status_suratpersetujuan_instansi',
        'suratpermohonan_mutasi',
        'status_suratpermohonan_mutasi',
        'fcl_skcpns',
        'status_fcl_skcpns',
        'fcl_skpns',
        'status_fcl_skpns',
        'fcl_skpangkatakhir',
        'status_fcl_skpangkatakhir',
        'skb_indisipliner',
        'status_skb_indisipliner',
        'skb_tugasbelajar',
        'status_skb_tugasbelajar',
        'skb_tanggunganhutang',
        'status_skb_tanggunganhutang',
        'fcl_dp3_skp',
        'status_fcl_dp3_skp',
        'fcl_ijazah_transkripnilai',
        'status_fcl_ijazah_transkripnilai',
        'daftar_riwayathidup',
        'status_daftar_riwayathidup',
        'fcl_ktp',
        'status_fcl_ktp',
        'fcl_kartupegawai',
        'status_fcl_kartupegawai',
        'fcl_suratnikah',
        'status_fcl_suratnikah',
        'sp_satuistri_istripertama',
        'status_sp_satuistri_istripertama',
        'sp_bersediaditempatkan',
        'status_sp_bersediaditempatkan',
        'sk_sehatjasmani',
        'status_sk_sehatjasmani',
        'tupoksi',
        'status_tupoksi',
        'sertifikat_keahlian',
        'status_sertifikat_keahlian',
    ];

    public function getRiwayatMutasi()
    {
        return $this->belongsTo(Riwayatmutasi::class, 'riwayatmutasi_id');
    }
}
