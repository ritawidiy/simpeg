<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\unitkerja;

class Biodata extends Model
{

    public $timestamps = false;
    protected $table = 'biodata';
    protected $primaryKey = 'nip'; // or null
// protected $incrementing=false;

    public $incrementing = false;
    public $fillable = ['nip',
        'nama',
        'tgl_lahir',
        'alamat',
        'urtgol',
        'golongan',
        'statpeg',
        'statkel',
        'unit_id',
        'eselon',
        'masakerja_tahun',
        'tglsk_jabatan',
        'tmt_jabatan',
        'nosk_jabatan',
        'penerbit',
        'kd_fungsi',
        'kd_guru',
        'status_perkawinan',
        'no_npwp',
        'no_karpeg',
        'no_tespen',
        'tempat_lahir',
        'kota_lahir',
        'propinsi_lahir',
        'jenis_kelamin',
        'agama',
        'pendidikan',
        'tahun_pendidikan',
        'kota',
        'propinsi',
        'nama_pasangan',
        'pekerjaan_pasangan',
        'jumlah_anaklakilaki',
        'jumlah_anakperempuan',
        'instansi',
        'nosk_cpns',
        'tglsk_cpns',
        'nosk_pns',
        'tglsk_pns',
        'tmt_golongan',
        'masakerja_bulan',
        'jabatan',
        'keterangan',
        'penjagaan_pensiun',
        'penjagaan_pangkat',
        'penjagaan_gaji',
        'user_id',
        'skpd',
        'gelar_depan',
        'gelar_belakang',
        'satker',
        'nip_baru',
        'pangkat',
        'nosk_pangkat',
        'tmt_pangkat',
        'tglsk_pangkat',
        'jenis_kepegawaian',
        'kedudukan_kepegawaian',
        'golongan_darah',
        'nota_bakn_no',
        'nota_bakn_tgl',
        'pejabat_penetap_cpns',
        'pangkat_cpns',
        'golongan_cpns',
        'pejabat_penetap_pns',
        'pangkat_pns',
        'golongan_pns',
        'sumpah_pns',
        'pejabat_penetap_pangkat',
        'pejabat_penetap_gaji',
        'skgaji_no',
        'skgaji_tgl',
        'skgaji_masakerja',
        'tmt_kgb',
        'pejabat_penetap_jabatan',
        'jenis_jabatan',
        'skpelantikan_no',
        'skpelantikan_tgl',
        'sumpah_jabatan',
        'ayah_nama',
        'ayah_tempat_lahir',
        'ayah_tgl_lahir',
        'ayah_pekerjaan',
        'ayah_alamat',
        'ayah_kecamatan',
        'ayah_kabupaten',
        'ayah_propinsi',
        'ayah_kodepos',
        'ibu_nama',
        'ibu_tempat_lahir',
        'ibu_tgl_lahir',
        'ibu_pekerjaan',
        'ibu_alamat',
        'ibu_kecamatan',
        'ibu_kabupaten',
        'ibu_propinsi',
        'ibu_kodepos',
        'pasangan_nama',
        'pasangan_tempat_lahir',
        'pasangan_tgl_lahir',
        'pasangan_pekerjaan',
        'pasangan_pendidikan',
        'tgl_kawin',
        'pasangan_status_tunjangan',
        'no_askes',
        'no_kariskarsu',
        'nip_lama',
        'fromfile',
        'no_bkn',
        'jurusan',
        'tgl_lulus',
        'cek_sk',
        'nobkn_cpns',
        'tglbkn_cpns',
        'pasangan_nip',
        'tmt_cpns',
        'tmt_pns',
        'tk2d',
        'id',
        'nama_jtf',
        'tempat_tugas',
        'tgl_masuk_kerja',
        'zona',
        'lokasi_bagian',
        'jabatan_asli',
        'pangkat_asli',
        'ptt_tk2d',
        'no_rekening',
        'absen',
        'honorer',
        'tugas_pokok',
        'created_at',
        'updated_at'];

    public function getDataAnak()
    {
        return $this->hasMany(Dataanak::class, 'nip');
    }

    public function getRiwayatbahasa()
    {
        return $this->hasMany(Riwayatbahasa::class, 'nip');
    }

    public function getRiwayatcuti()
    {
        return $this->hasMany(Riwayatcuti::class, 'nip');
    }

    public function getRiwayatdiklat()
    {
        return $this->hasMany(Riwayatdiklat::class, 'nip');
    }

    public function getRiwayatgaji()
    {
        return $this->hasMany(Riwayatgaji::class, 'nip');
    }

    public function getRiwayathukuman()
    {
        return $this->hasMany(Riwayathukuman::class, 'nip');
    }

    public function getRiwayatjabatan()
    {
        return $this->hasMany(Riwayatjabatan::class, 'nip');
    }

    public function getRiwayatmutasi()
    {
        return $this->hasMany(Riwayatmutasi::class, 'nip');
    }

    public function getRiwayatkursus()
    {
        return $this->hasMany(Riwayatkursus::class, 'nip');
    }

    public function getRiwayatorganisasi()
    {
        return $this->hasMany(Riwayatorganisasi::class, 'nip');
    }

    public function getRiwayatpangkat()
    {
        return $this->hasMany(Riwayatpangkat::class, 'nip');
    }

    public function getRiwayatpenataran()
    {
        return $this->hasMany(riwayatpenataran::class, 'nip');
    }

    public function getRiwayatpendidikan()
    {
        return $this->hasMany(riwayatpendidikan::class, 'nip');
    }

    public function getRiwayatpenghargaan()
    {
        return $this->hasMany(Riwayatpenghargaan::class, 'nip');
    }

    public function getRiwayatpenugasan()
    {
        return $this->hasMany(Riwayatpenugasan::class, 'nip');
    }

    public function getRiwayatseminar()
    {
        return $this->hasMany(Riwayatseminar::class, 'nip');
    }


    public function getUnitKerja()
    {
        return $this->belongsTo(Masterunitkerja::class, 'lokasi_bagian');
    }

    public function getMastergolonganpangkat()
    {
        return $this->hasMany(Mastergolonganpangkat::class, 'nip');
    }

    public function getBerkasPegawai()
    {
        return $this->hasOne(BerkasPegawai::class, 'nip');
    }
}