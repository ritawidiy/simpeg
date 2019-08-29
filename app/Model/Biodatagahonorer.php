<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodatagahonorer extends Model
{
    public $timestamps = false;
    protected $table = 'biodata_honorer';
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
        'nama_jtf',
        'tempat_tugas',
        'tgl_masuk_kerja',
        'zona',
        'lokasi_bagian',
        'jabatan_asli',
        'pangkat_asli',
        'ptt_tk2d',
        'id'];
}
