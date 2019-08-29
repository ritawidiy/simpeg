<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORMULIR ISIAN PEGAWAI</title>
    <style>
        @media print {
            a[href]:after {
                content: none !important;
            }
        }
        @page {
            size: 'A4';
        }
        #cover {
            border: double thick #000000;
            width: 900px;
            height: 1200px;
        }

        #garuda {
            margin-left: 40%;
            margin-right: 40%;
            margin-top: 50px;
        }

        #kutim {
            margin-left: 25%;
            margin-right: 25%;
            margin-top: 5px;
            font-size: 21px;
            font-family: Arial, Helvetica, sans-serif;
        }

        #formulir {
            margin-left: 13%;
            margin-right: 13%;
            margin-top: 100px;
            font-size: 48px;
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: underline;
        }

        #foto {
            margin-left: 41%;
            margin-right: 41%;
            margin-top: 120px;
            padding: 5px;
            border: 1px solid #000;
            width: 100px;
            height: 140px;
        }

        #identitas {
            margin-left: 5%;
            margin-right: 5%;
            margin-top: 150px;
            padding: 5px;
            font-size: 21px;
            font-family: Arial, Helvetica, sans-serif;
        }

        #formulir2 {
            margin-left: 20%;
            margin-right: 20%;
            margin-top: 40px;
            text-align: center;
            font-weight: bold;
            font-size: 24px;
            font-family: Arial, Helvetica, sans-serif;
            border-bottom: 1px solid #000;
            width: 500px;
        }

        #khususuntuk {
            margin-left: 10%;
            margin-right: 10%;
            margin-top: 4px;
            text-align: center;
            font-size: 18px;
            font-family: Arial, Helvetica, sans-serif;
            width: 700px;
        }

        .judul {
            text-align: center;
            font-size: 18px;
            font-family: Arial, Helvetica, sans-serif;
            width: 900px;
            border: 1px solid #000;
            background-color: #ddd;
        }

        .isi {
            text-align: left;
            font-size: 12px;
            font-family: Arial, Helvetica, sans-serif;
            width: 900px;
            border: 1px solid #000;
        }
    </style>
</head>

<body onload="window.print()">
    <div id="cover">
        <div id="garuda">
            <img src="{{ asset('images/garudabw.png') }}" width="120px">
        </div>
        <!-- <div id="garuda"><img src="../img/logo_kutim.png"  width="120px"/></div> -->
        <div id="kutim">PEMERINTAH KABUPATEN KUTAI TIMUR</div>
        <div id="formulir">FORMULIR ISIAN PEGAWAI</div>
        <div id="foto"><img src="{{asset('images/picture.jpg')}}" width="100px" /></div>
        <div id="identitas">
            <table>
                <tr>
                    <td>NIP</td>
                    <td>:</td>
                    <td>{{ $data->nip }}</td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td>:</td>
                    <td>{{ $data->gelar_depan }}{{ $data->nama }}{{ $data->gelar_belakang }}</td>
                </tr>
                <tr>
                    <td>UNIT KERJA</td>
                    <td>:</td>
                    <td>DINAS PENDIDIKAN</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td></td>
                </tr>
                <tr>
                    <td>INSTANSI KERJA</td>
                    <td>:</td>
                    <td>PEMERINTAH KABUPATEN KUTAI TIMUR</td>
                </tr>
            </table>
        </div>
    </div>
    <div id="halaman1">
        <div id="garuda"><img src="{{asset('images/garudabw.png')}}" width="120px" /></div>
        <!-- <div id="garuda"><img src="../img/logo_kutim.png"  width="120px"/></div> -->
        <div id="kutim">PEMERINTAH KABUPATEN KUTAI TIMUR</div>
        <div id="formulir2">FORMULIR ISIAN PEGAWAI</div>
        <div id="khususuntuk">(KHUSUS UNTUK PNS & ABRI YANG DITUGAS KARYAWAN)</div>
        <br />
        <div class='judul'>A. IDENTITAS PEGAWAI</div>
        <div class='isi'>
            <table>
                <tr>
                    <td width="17">1.</td>
                    <td width="127" nowrap="nowrap">NIP</td>
                    <td width="3">:</td>
                    <td colspan="2">{{ $data->nip }}</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td colspan="2">{{ $data->nama }}</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Gelar Kesarjanaan</td>
                    <td>:</td>
                    <td colspan="2"> {{ $data->gelar_depan }} (Di depan nama) {{ $data->gelar_belakang }} (Di Belakang nama) </td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Tempat/Tgl Lahir</td>
                    <td>:</td>
                    <td colspan="2"> {{ $data->tempat_lahir }} / {{ $data->tgl_lahir }} </td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td colspan="2">{{ $data->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Agama</td>
                    <td>:</td>
                    <td colspan="2">{{ $data->agama }}</td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>Status Kepegawaian</td>
                    <td>:</td>
                    <td colspan="2"> {{ $data->statpeg }}PNS CPNS </td>
                </tr>
                <tr>
                    <td>8.</td>
                    <td>Jenis Kepegawaian</td>
                    <td>:</td>
                    <td colspan="2">PNS Daerah Otonomi </td>
                </tr>
                <tr>
                    <td>9.</td>
                    <td>Kedudukan Pegawai</td>
                    <td>:</td>
                    <td colspan="2">Aktif</td>
                </tr>
                <tr>
                    <td>10.</td>
                    <td>Status Perkawinan</td>
                    <td>:</td>
                    <td colspan="2">{{ $data->status_perkawinan }}</td>
                </tr>
                <tr>
                    <td>11.</td>
                    <td nowrap="nowrap">Alamat Tempat Tinggal</td>
                    <td>:</td>
                    <td colspan="2">{{ $data->alamat }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td colspan="2">
                        <table width="555" border="0" cellspacing="2" cellpadding="0">
                            <tr>
                                <td width="520" colspan="4">Kabupaten/Kota</td>
                                <td width="11">:</td>
                                <td width="780" colspan="4">{{ $data->kota }}</td>
                                <td width="58">Propinsi</td>
                                <td width="11">:</td>
                                <td width="124">{{ $data->propinsi }}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>12.</td>
                    <td>Golongan Darah</td>
                    <td>:</td>
                    <td colspan="2">{{ $data->golongan_darah }}</td>
                </tr>
                <tr>
                    <td>13.</td>
                    <td>Nomor KARPEG</td>
                    <td>:</td>
                    <td width="235">{{ $data->no_karpeg }}</td>
                    <td width="348">Nomor kartu ASKES : {{ $data->no_askes }}</td>
                </tr>
                <tr>
                    <td>14.</td>
                    <td>Nomor Kartu TASPEN</td>
                    <td>:</td>
                    <td>{{ $data->no_taspen }}</td>
                    <td>Nomor KARIS/KARSU: {{ $data->no_kariskarsu }}</td>
                </tr>
                <tr>
                    <td>15.</td>
                    <td>NPWP</td>
                    <td>:</td>
                    <td colspan="2">{{ $data->no_npwp }}</td>
                </tr>
            </table>
        </div>
    </div>


    <div class='judul'>B. PENGANGKATAN SEBAGAI CPNS</div>
    <div class='isi'>
        <table width="897">
            <tr>
                <td width="10">1.</td>
                <td width="142" nowrap="nowrap">Nota Persetujuan BAKN </td>
                <td width="4">:</td>
                <td width="206">Nomor {{ $data->no_bkn }}</td>
                <td width="119"></td>
                <td width="120">Tanggal</td>
                <td width="6">:</td>
                <td width="254">{{ $data->nota_bakn_tgl }}</td>
            </tr>
            <tr>
                <td>2.</td>
                <td nowrap="nowrap">Pejabat yang Menetapkan</td>
                <td>:</td>
                <td colspan="5">{{ $data->pejabat_penetap_cpns }}</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Surat Keputusan CPNS</td>
                <td>:</td>
                <td>Nomor {{ $data->nosk_cpns }}</td>
                <td></td>
                <td>Tanggal</td>
                <td>:</td>
                <td>{{ $data->tglsk_cpns }}</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Pangkat/Gol. Ruang</td>
                <td>:</td>
                <td colspan="5">{{ $data->pangkat_cpns }}</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>TMT CPNS</td>
                <td>:</td>
                <td colspan="5">{{ $data->tmt_cpns }}</td>
            </tr>
        </table>
    </div>
    </div>


    <div class='judul'>C. PENGANGKATAN SEBAGAI PNS</div>
    <div class='isi'>
        <table width="894">
            <tr>
                <td width="13">1.</td>
                <td width="145" nowrap="nowrap">Pejabat yang Menetapkan </td>
                <td width="10">:</td>
                <td width="706" colspan="5">{{ $data->pejabat_penetap_pns }}</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Surat Keputusan PNS</td>
                <td>:</td>
                <td>Nomor {{ $data->nosk_pns }}</td>
                <td></td>
                <td>Tanggal</td>
                <td>:</td>
                <td>{{ $data->tgsk_pns }}</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Pangkat/Gol. Ruang</td>
                <td>:</td>
                <td colspan="5">{{ $data->pangkat_pns }}</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>TMT CPNS</td>
                <td>:</td>
                <td colspan="5">{{ $data->tmt_pns }}</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Sumpah/Janji PNS</td>
                <td>:</td>
                <td colspan="5">{{ $data->sumpah_pns }}</td>
            </tr>
        </table>
    </div>
    </div>


    <div class='judul'>D. PANGKAT TERAKHIR</div>
    <div class='isi'>
        <table>
            <tr>
                <td width="10">1.</td>
                <td width="144" nowrap="nowrap">Pejabat yang Menetapkan </td>
                <td width="3">:</td>
                <td colspan="5">{{ $data->pejabat_penetap_pangkat }}</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Surat Keputusan Pangkat</td>
                <td>:</td>
                <td width="256">Nomor {{ $data->nosk_pangkat }}</td>
                <td width="2"></td>
                <td width="172">Tanggal</td>
                <td width="5">:</td>
                <td width="256">{{ $data->tglskpangkat }}</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Pangkat/Gol. Ruang</td>
                <td>:</td>
                <td colspan="5">{{ $data->pangkat }}</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Masa Kerja Gol. Ruang</td>
                <td>:</td>
                <td> {{ $data->masakerja_tahun }} tahun </td>
                <td></td>
                <td> {{ $data->masakerja_bulan }} bulan </td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
    </div>


    <div class='judul'>E. KENAIKAN GAJI BERKALA TERAKHIR</div>
    <div class='isi'>
        <table width="897">
            <tr>
                <td width="12">1.</td>
                <td width="145" nowrap="nowrap">Pejabat yang Menetapkan </td>
                <td width="10">:</td>
                <td colspan="5">{{ $data->pejabat_penetap_gaji }}</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Surat Kenaikan Gaji</td>
                <td>:</td>
                <td width="323">Nomor {{ $data->skgaji_no }}</td>
                <td width="6"></td>
                <td width="115">Tanggal</td>
                <td width="13">:</td>
                <td width="221">{{ $data->skgaji_tgl }}</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>TMT KGB</td>
                <td>:</td>
                <td>{{ $data->tmt_kgb }}</td>
                <td></td>
                <td>Masa Kerja Gaji </td>
                <td>:</td>
                <td width="221">{{ $data->skgaji_masakerja }}</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Kantor Pembayaran Gaji</td>
                <td>:</td>
                <td colspan="5">Sekretariat Kabupaten Kutai Timur</td>
            </tr>
        </table>
    </div>
    </div>

    <div class='judul'>F. TEMPAT BEKERJA</div>
    <div class='isi'>
        <table>
            <tr>
                <td width="10">1.</td>
                <td width="183" nowrap="nowrap">Istansi Induk </td>
                <td width="10">:</td>
                <td width="670">Pemerintah Daerah Kabupaten Kutai Timur </td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Instansi Tempat Bekerja</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>a. Department/Prop</td>
                <td>:</td>
                <td>Kalimantan Timur </td>
            </tr>
            <tr>
                <td></td>
                <td>b. Kabupaten/Kota</td>
                <td>:</td>
                <td>Kutai Timur </td>
            </tr>
            <tr>
                <td></td>
                <td>c. Kecamatan</td>
                <td>:</td>
                <td>Sangatta Utara </td>
            </tr>
            <tr>
                <td></td>
                <td>d. Desa/Kelurahan</td>
                <td>:</td>
                <td>Sangatta Utara </td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Unit Kerja</td>
                <td>:</td>
                <td>Sekretariat Daerah</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Lokasi Kerja</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>a. Propinsi</td>
                <td>:</td>
                <td>Kalimantan Timur </td>
            </tr>
            <tr>
                <td></td>
                <td>b. Kabupaten/Kota</td>
                <td>:</td>
                <td>Kutai Timur </td>
            </tr>
        </table>
    </div>
    </div>


    <div class='judul'>G. JABATAN SAAT INI</div>
    <div class='isi'>
        <table>
            <tr>
                <td width="10">1.</td>
                <td width="144" nowrap="nowrap">Pejabat yang Menetapkan </td>
                <td width="3">:</td>
                <td width="707" colspan="5">{{ $data->pejabat_penetap_jabatan }}</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Surat Keputusan Jabatan</td>
                <td>:</td>
                <td>Nomor {{ $data->nosk_jabatan }}</td>
                <td></td>
                <td>Tanggal</td>
                <td>:</td>
                <td>{{ $data->tglsk_jabatan }}</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Jenis Jabatan </td>
                <td>:</td>
                <td colspan="5">{{ $data->jenis_jabatan }}</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Eselon</td>
                <td>:</td>
                <td colspan="5">{{ $data->eselon }}</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Nama Jabatan</td>
                <td>:</td>
                <td colspan="5">{{ $data->jabatan }}</td>
            </tr>
            <tr>
                <td>6.</td>
                <td>TMT Jabatan</td>
                <td>:</td>
                <td colspan="5">{{ $data->tmt_jabatan }}</td>
            </tr>
            <tr>
                <td>7.</td>
                <td>SK Pelantikan</td>
                <td>:</td>
                <td>Nomor {{ $data->skpelantikan_no }}</td>
                <td></td>
                <td>Tanggal</td>
                <td>:</td>
                <td>{{ $data->skpelantikan_tgl }}</td>
            </tr>
            <tr>
                <td>8.</td>
                <td>Sumpah Jabatan</td>
                <td>:</td>
                <td colspan="5">{{ $data->sumpah_jabatan }}</td>
            </tr>
        </table>
    </div>
    </div>


    <div class='judul'>H. RIWAYAT KEPANGKATAN</div>
    <div class='isi'>
        <table border="1" cellspacing="0" cellpadding="2px" width="100%">

            <tr align="center">
                <td nowrap="nowrap" rowspan="2">PANGKAT/GOL.RUANG</td>
                <td rowspan="2">TMT PANGKAT</td>
                <td colspan="3"> SURAT KEPUTUSAN</td>
            </tr>
            <tr align="center">
                <td height="21" nowrap="nowrap">PEJABAT YANG MENETAPKAN</td>
                <td>NOMOR</td>
                <td> TANGGAL</td>
            </tr>


            <tr align="left">
                <td> {{ $data->pangkat }} / {{ $data->kodegol }}</td>
                <td> {{ $data->tmtpangkat2 }}</td>
                <td> {{ $data->pejabat }}</td>
                <td> {{ $data->nosurat }}</td>
                <td> {{ $data->tglsurat2 }}</td>
            </tr>
            {/foreach}
            <tr align="left">
                <td>&nbsp;</td>
                <td></td>
                <td> </td>
                <td></td>
                <td> </td>
            </tr>

        </table>
    </div>
    </div>



    <div class='judul'>I. RIWAYAT JABATAN</div>
    <div class='isi'>
        <table border="1" cellspacing="0" cellpadding="2px" width="100%">

            <tr align="center">
                <td nowrap="nowrap" rowspan="2">UNIT KERJA</td>
                <td rowspan="2">JENIS JABATAN</td>
                <td rowspan="2">NAMA JABATAN</td>
                <td rowspan="2">ESELON</td>
                <td rowspan="2">TMT</td>
                <td colspan="3"> SURAT KEPUTUSAN</td>
            </tr>
            <tr align="center">
                <td height="21" nowrap="nowrap">PEJABAT YANG MENETAPKAN</td>
                <td>NOMOR</td>
                <td> TANGGAL</td>
            </tr>


            <tr align="left">
                <td>{{ $data->unitkerja }}</td>
                <td>{{ $data->jenisjabatan }}</td>
                <td>{{ $data->namajabatan }}</td>
                <td>{{ $data->eselon }}</td>
                <td>{{ $data->tmt2 }}</td>

                <td>{{ $data->pejabat }}</td>

                <td>{{ $data->nosurat }}</td>

                <td>{{ $data->tglsurat2 }}</td>
            </tr>

            <tr align="left">
                <td>&nbsp;</td>
                <td></td>
                <td> </td>
                <td></td>
                <td></td>
                <td> </td>
                <td></td>
                <td> </td>
            </tr>

        </table>
    </div>
    </div>

    <div class='judul'>J. KEANGGOTAAN ORGANISASI</div>
    <div class='isi'>
        <table border="1" cellspacing="0" cellpadding="2px" width="100%">

            <tr align="center">
                <td nowrap="nowrap" rowspan="2">JENIS ORGANISASI</td>
                <td rowspan="2">NAMA ORGANISASI</td>
                <td rowspan="2">KEDUDUKAN/JABATAN</td>
                <td colspan="2"> LAMA DALAM JABATAN</td>
                <td rowspan="2">NAMA PIMPINAN</td>
                <td rowspan="2">TEMPAT</td>
            </tr>
            <tr align="center">
                <td height="21" nowrap="nowrap">TGL MULAI</td>
                <td>TGL SELESAI</td>
            </tr>

            <tr align="left">
                <td>{{ $data->jenisorganisasi }}</td>
                <td>{{ $data->namaorganisasi }}</td>
                <td>{{ $data->jabatanorganisasi }}</td>
                <td>{{ $data->tglmulai2 }}</td>
                <td>{{ $data->tglselesai2 }}</td>
                <td>{{ $data->nama_pimpinan }}</td>
                <td>{{ $data->tempatorganisasi }}</td>
            </tr>

        </table>
    </div>
    </div>

    <div class='judul'>K. TANDA JASA / PENGHARGAAN / KEHORMATAN</div>
    <div class='isi'>
        <table border="1" cellspacing="0" cellpadding="2px" width="100%">

            <tr align="center">
                <td nowrap="nowrap" rowspan="2">NAMA TANDA JASA/PENGHARGAAN</td>
                <td colspan="2"> SURAT KEPUTUSAN</td>
                <td rowspan="2">TAHUN PEROLEHAN</td>
                <td rowspan="2">ASAL PEROLEHAN</td>
            </tr>
            <tr align="center">
                <td height="21" nowrap="nowrap">NOMOR</td>
                <td>TANGGAL</td>
            </tr>


            <tr align="left">
                <td> {{ $data->namapenghargaan }}</td>
                <td> {{ $data->nosk }}</td>
                <td> {{ $data->tglsk2 }}</td>
                <td> {{ $data->tahun }}</td>
                <td> {{ $data->asal }}</td>

            </tr>


            <tr align="left">
                <td>&nbsp;</td>
                <td></td>
                <td> </td>
                <td></td>
                <td></td>
            </tr>

        </table>
    </div>
    </div>



    <div class='judul'>L. PENUGASAN LUAR NEGERI</div>
    <div class='isi'>
        <table border="1" cellspacing="0" cellpadding="2px" width="100%">

            <tr align="center">
                <td nowrap="nowrap" rowspan="2">NEGARA TUJUAN</td>
                <td nowrap="nowrap" rowspan="2">JENIS PENUGASAN</td>
                <td colspan="3"> SURAT KEPUTUSAN</td>
                <td colspan="2">LAMA PENUGASAN</td>
            </tr>
            <tr align="center">
                <td height="21" nowrap="nowrap">PEJABAT YG MENETAPKAN</td>
                <td>NOMOR</td>
                <td>TANGGAL</td>
                <td>TGL MULAI</td>
                <td>TGL SELESAI</td>
            </tr>


            <tr align="left">
                <td> {{ $data->tempatpenugasan }}</td>
                <td> {{ $data->jenispenugasan }}</td>
                <td> {{ $data->pejabat }}</td>
                <td> {{ $data->nosk }}</td>
                <td> {{ $data->tglsk2 }}</td>

                <td> {{ $data->tglmulai2 }}</td>
                <td> {{ $data->tglselesai2 }}</td>
            </tr>

            <tr align="left">
                <td>&nbsp;</td>
                <td></td>
                <td> </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

        </table>
    </div>
    </div>



    <div class='judul'>M. PENGUASAAN BAHASA</div>
    <div class='isi'>
        <table border="1" cellspacing="0" cellpadding="2px" width="100%">

            <tr align="center">
                <td colspan="2"> BAHASA DAERAH</td>
                <td colspan="2">BAHASA ASING</td>
            </tr>
            <tr align="center">
                <td height="21" nowrap="nowrap">NAMA BAHASA</td>
                <td>KEMAMPUAN BICARA</td>
                <td>NAMA BAHASA</td>
                <td>KEMAMPUAN BICARA</td>
            </tr>

            <tr align="left">
                <td>{{ $data->namabahasa_daerah }}</td>
                <td>{{ $data->kemampuanbicara_daerah }}</td>
                <td>{{ $data->namabahasa_asing }}</td>
                <td>{{ $data->kemampuanbicara_asing }}</td>
        </table>
    </div>
    </div>


    <div class='judul'>N. RIWAYAT PENDIDIKAN UMUM</div>
    <div class='isi'>
        <table border="1" cellspacing="0" cellpadding="2px" width="100%">

            <tr align="center">
                <td nowrap="nowrap" rowspan="2">TINGKAT PENDIDIKAN</td>
                <td rowspan="2">JURUSAN</td>
                <td rowspan="2">NAMA SEKOLAH/PTS/PTN</td>
                <td rowspan="2">TEMPAT</td>
                <td rowspan="2">NAMA KEPSEK/REKTOR</td>
                <td colspan="2"> STTB</td>
            </tr>
            <tr align="center">
                <td>NOMOR</td>
                <td> TANGGAL</td>
            </tr>


            <tr align="left">
                <td> {{ $data->tingkatpendidikan }}</td>
                <td> {{ $data->jurusan }}</td>
                <td> {{ $data->namasekolah }}</td>
                <td> {{ $data->alamatsekolah }}</td>
                <td> {{ $data->kepala }}</td>

                <td> {{ $data->noijazah }}</td>
                <td> {{ $data->tanggalijazah2 }}</td>
            </tr>

            <tr align="left">
                <td>&nbsp;</td>
                <td></td>
                <td> </td>
                <td></td>
                <td></td>
                <td> </td>
                <td></td>
            </tr>

        </table>
    </div>
    </div>


    <div class='judul'>O. RIWAYAT DIKLAT STRUKTURAL</div>
    <div class='isi'>
        <table border="1" cellspacing="0" cellpadding="2px" width="100%">

            <tr align="center">
                <td nowrap="nowrap" rowspan="2">NAMA DIKLAT</td>
                <td rowspan="2">TEMPAT DIKLAT</td>
                <td rowspan="2">PENYELENGGARA</td>
                <td rowspan="2">ANGKATAN</td>
                <td colspan="3"> LAMA PENDIDIKAN</td>
                <td colspan="2">STTPP</td>
            </tr>
            <tr align="center">
                <td height="21" nowrap="nowrap">TGL MULAI</td>
                <td>TGL SELESAI</td>
                <td>JAM</td>
                <td>NOMOR</td>
                <td>TANGGAL</td>
            </tr>


            <tr align="left">
                <td> {{ $data->namadiklat }}</td>
                <td> {{ $data->tempatdiklat }}</td>
                <td> {{ $data->penyelenggara }}</td>
                <td> {{ $data->angkatan }}</td>
                <td> {{ $data->tglmulai2 }}</td>

                <td> {{ $data->tglselesai2 }}</td>
                <td> {{ $data->lamajamdiklat }}</td>

                <td> {{ $data->nosertifikat }}</td>
                <td> {{ $data->tglsertifikat2 }}</td>
            </tr>

            <tr align="left">
                <td>&nbsp;</td>
                <td></td>
                <td> </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

        </table>
    </div>
    </div>



    <div class='judul'>P. RIWAYAT DIKLAT FUNGSIONAL</div>
    <div class='isi'>
        <table border="1" cellspacing="0" cellpadding="2px" width="100%">

            <tr align="center">
                <td nowrap="nowrap" rowspan="2">NAMA DIKLAT</td>
                <td rowspan="2">TEMPAT DIKLAT</td>
                <td rowspan="2">PENYELENGGARA</td>
                <td rowspan="2">ANGKATAN</td>
                <td colspan="3"> LAMA PENDIDIKAN</td>
                <td colspan="2">STTPP</td>
            </tr>
            <tr align="center">
                <td height="21" nowrap="nowrap">TGL MULAI</td>
                <td>TGL SELESAI</td>
                <td>JAM</td>
                <td>NOMOR</td>
                <td>TANGGAL</td>
            </tr>


            <tr align="left">
                <td> {{ $data->namadiklat }}</td>
                <td> {{ $data->tempatdiklat }}</td>
                <td> {{ $data->penyelenggara }}</td>
                <td> {{ $data->angkatan }}</td>
                <td> {{ $data->tglmulai2 }}</td>

                <td> {{ $data->tglselesai2 }}</td>
                <td> {{ $data->lamajamdiklat }}</td>

                <td> {{ $data->nosertifikat }}</td>
                <td> {{ $data->tglsertifikat2 }}</td>
            </tr>


            <tr align="left">
                <td>&nbsp;</td>
                <td></td>
                <td> </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

        </table>
    </div>
    </div>



    <div class='judul'>Q. RIWAYAT DIKLAT TEKNIS</div>
    <div class='isi'>
        <table border="1" cellspacing="0" cellpadding="2px" width="100%">

            <tr align="center">
                <td nowrap="nowrap" rowspan="2">NAMA DIKLAT</td>
                <td rowspan="2">TEMPAT DIKLAT</td>
                <td rowspan="2">PENYELENGGARA</td>
                <td rowspan="2">ANGKATAN</td>
                <td colspan="3"> LAMA PENDIDIKAN</td>
                <td colspan="2">STTPP</td>
            </tr>
            <tr align="center">
                <td height="21" nowrap="nowrap">TGL MULAI</td>
                <td>TGL SELESAI</td>
                <td>JAM</td>
                <td>NOMOR</td>
                <td>TANGGAL</td>
            </tr>


            <tr align="left">
                <td> {{ $data->namadiklat }}</td>
                <td> {{ $data->tempatdiklat }}</td>
                <td> {{ $data->penyelenggara }}</td>
                <td> {{ $data->angkatan }}</td>
                <td> {{ $data->tglmulai2 }}</td>

                <td> {{ $data->tglselesai2 }}</td>
                <td> {{ $data->lamajamdiklat }}</td>

                <td> {{ $data->nosertifikat }}</td>
                <td> {{ $data->tglsertifikat2 }}</td>
            </tr>


            <tr align="left">
                <td>&nbsp;</td>
                <td></td>
                <td> </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

        </table>
    </div>
    </div>



    <div class='judul'>R. RIWAYAT PENATARAN</div>
    <div class='isi'>
        <table border="1" cellspacing="0" cellpadding="2px" width="100%">

            <tr align="center">
                <td nowrap="nowrap" rowspan="2">NAMA PENATARAN</td>
                <td rowspan="2">TEMPAT PENATARAN</td>
                <td rowspan="2">PENYELENGGARA</td>
                <td rowspan="2">ANGKATAN</td>
                <td colspan="3"> LAMA PENATARAN</td>
                <td colspan="2">PIAGAM/SERTIFIKAT</td>
            </tr>
            <tr align="center">
                <td height="21" nowrap="nowrap">TGL MULAI</td>
                <td>TGL SELESAI</td>
                <td>JAM</td>
                <td>NOMOR</td>
                <td>TANGGAL</td>
            </tr>


            <tr align="left">
                <td> {{ $data->namapenataran }}</td>
                <td> {{ $data->tempatpenataran }}</td>
                <td> {{ $data->penyelenggara }}</td>
                <td> {{ $data->angkatan }}</td>
                <td> {{ $data->tglmulai2 }}</td>

                <td> {{ $data->tglselesai2 }}</td>
                <td> {{ $data->lamajampenataran }}</td>

                <td> {{ $data->nosertifikat }}</td>
                <td> {{ $data->tglsertifikat2 }}</td>
            </tr>

            <tr align="left">
                <td>&nbsp;</td>
                <td></td>
                <td> </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

        </table>
    </div>
    </div>


    <div class='judul'>S. RIWAYAT SEMINAR/LOKAKARYA/SIMPOSIUM</div>
    <div class='isi'>
        <table border="1" cellspacing="0" cellpadding="2px" width="100%">

            <tr align="center">
                <td nowrap="nowrap" rowspan="2">NAMA SEMINAR</td>
                <td rowspan="2">TEMPAT SEMINAR</td>
                <td rowspan="2">PENYELENGGARA</td>
                <td rowspan="2">ANGKATAN</td>
                <td colspan="3"> LAMA SEMINAR</td>
                <td colspan="2">PIAGAM/SERTIFIKAT</td>
            </tr>
            <tr align="center">
                <td height="21" nowrap="nowrap">TGL MULAI</td>
                <td>TGL SELESAI</td>
                <td>JAM</td>
                <td>NOMOR</td>
                <td>TANGGAL</td>
            </tr>


            <tr align="left">
                <td> {{ $data->namaseminar }}</td>
                <td> {{ $data->tempatseminar }}</td>
                <td> {{ $data->penyelenggara }}</td>
                <td> {{ $data->angkatan }}</td>
                <td> {{ $data->tglmulai2 }}</td>

                <td> {{ $data->tglselesai2 }}</td>
                <td> {{ $data->lamajamseminar }}</td>

                <td> {{ $data->nosertifikat }}</td>
                <td> {{ $data->tglsertifikat2 }}</td>
            </tr>

            <tr align="left">
                <td>&nbsp;</td>
                <td></td>
                <td> </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

        </table>
    </div>
    </div>

    <div class='judul'>T. RIWAYAT KURSUS DI DALAM/ LUAR NEGERI</div>
    <div class='isi'>
        <table border="1" cellspacing="0" cellpadding="2px" width="100%">

            <tr align="center">
                <td nowrap="nowrap" rowspan="2">NAMA KURSUS</td>
                <td rowspan="2">TEMPAT KURSUS</td>
                <td rowspan="2">ANGKATAN</td>
                <td colspan="3"> LAMA KURSUS</td>
                <td colspan="2">PIAGAM/SERTIFIKAT</td>
            </tr>
            <tr align="center">
                <td height="21" nowrap="nowrap">TGL MULAI</td>
                <td>TGL SELESAI</td>
                <td>JAM</td>
                <td>NOMOR</td>
                <td>TANGGAL</td>
            </tr>

            <tr align="left">
                <td>{{ $data->namakursus }}</td>
                <td>{{ $data->tempatkursus }}</td>
                <td>{{ $data->penyelenggara }}</td>
                <td>{{ $data->angkatan }}</td>
                <td>{{ $data->tglmulai2 }}</td>

                <td> {{ $data->tgl_selesai2 }}</td>
                <td> {{ $data->lamajamkursus }}</td>

                <td>{{ $data->nosertifikat }}</td>
                <td>{{ $data->tglsertifikat2 }}</td>
            </tr>

            <tr align="left">
                <td>&nbsp;</td>
                <td></td>
                <td> </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
    </div>



    <div class='judul'>U. DATA ORANG TUA</div>
    <div class='isi'>
        <table width="877">
            <tr>
                <td width="15">1.</td>
                <td width="140" nowrap="nowrap">Nama Ayah </td>
                <td width="10">:</td>
                <td width="692">{{ $data->ayah_nama }}</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Tempat/Tgl Lahir</td>
                <td>:</td>
                <td>{{ $data->ayah_tempat_lahir }} / {{ $data->ayah_tgl_lahir }}</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>{{ $data->ayah_pekerjaan }}</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Alamat Tempat Tinggal</td>
                <td>:</td>
                <td>{{ $data->ayah_alamat }}</td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td>&nbsp;</td>
                <td>
                    <table width="555" border="0" cellspacing="2" cellpadding="0">

                        <tr>
                            <td width="520" colspan="4">Kabupaten/Kota</td>
                            <td width="11">:</td>
                            <td width="780" colspan="4"> {{ $data->ayah_kabupaten }}</td>
                            <td width="58">Propinsi</td>
                            <td width="11">:</td>
                            <td width="124"> {{ $data->ayah_propinsi }}</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <br />
        <hr />
        <table width="877">
            <tr>
                <td width="15">1.</td>
                <td width="140" nowrap="nowrap">Nama Ibu </td>
                <td width="10">:</td>
                <td width="692">{{ $data->ibu_nama }}</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Tempat/Tgl Lahir</td>
                <td>:</td>
                <td>{{ $data->ibu_tempat_lahir }} / {{ $data->ibu_tgl_lahir }}</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>{{ $data->ibu_pekerjaan }}</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Alamat Tempat Tinggal</td>
                <td>:</td>
                <td>>{{ $data->ibu_alamat }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>&nbsp;</td>
                <td>
                    <table width="555" border="0" cellspacing="2" cellpadding="0">
                        <tr>
                            <td width="520" colspan="4">Kabupaten/Kota</td>
                            <td width="11">:</td>
                            <td width="780" colspan="4">{{ $data->ibu_kabupaten }}</td>
                            <td width="58">Propinsi</td>
                            <td width="11">:</td>
                            <td width="124">{{ $data->ibu_propinsi }}</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    </div>




    <div class='judul'>V. DATA ISTRI / SUAMI</div>
    <div class='isi'>
        <table border="1" cellspacing="0" cellpadding="2px" width="100%">

            <tr align="center">
                <td nowrap="nowrap">NAMA ISTRI/SUAMI</td>
                <td>TEMPAT/TGL LAHIR</td>
                <td>TGL KAWIN</td>
                <td>STATUS TUNJANGAN</td>
                <td>PENDIDIKAN UMUM</td>
                <td> PEKERJAAN</td>
            </tr>
            <tr align="left">
                <td>{{ $data->pasangan_nama }}</td>
                <td>{{ $data->pasangan_tempat_lahir }} / {{ $data->pasangan_tgl_lahir }}</td>
                <td>{{ $data->tgl_kawin }}</td>
                <td>{{ $data->pasangan_status_tunjangan }}</td>
                <td>{{ $data->pasangan_pendidikan }}</td>
                <td>{{ $data->pasnagan_pekerjaan }}</td>
            </tr>

        </table>
    </div>
    </div>

    <div class='judul'>W. DATA ANAK</div>
    <div class='isi'>
        <table border="1" cellspacing="0" cellpadding="2px" width="100%">

            <tr align="center">
                <td nowrap="nowrap" rowspan="2">NAMA ANAK</td>
                <td rowspan="2">TEMPAT/TGL LAHIR</td>
                <td rowspan="2">JENIS KELAMIN</td>
                <td colspan="2"> STATUS</td>
                <td rowspan="2">PENDIDIKAN UMUM</td>
                <td rowspan="2">PEKERJAAN</td>
            </tr>
            <tr align="center">
                <td>KELUARGA</td>
                <td> TUNJANGAN</td>
            </tr>

            <tr align="left">
                <td>{{ $data->namaanak }}</td>
                <td>{{ $data->tempatlahiranak }} / {{ $data->tgllahiranak }}</td>
                <td>{{ $data->jeniskelaminanak }}</td>
                <td>{{ $data->statuskeluargaanak }}</td>
                <td>{{ $data->statustunjangananak }}</td>
                <td>{{ $data->pendidikanumumanak }}</td>
                <td>{{ $data->pekerjaananak }}</td>
            </tr>

        </table>
    </div>
    </div>

    <div class='isi'>
        <p><br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dengan ini Menyatakan bahwa data yang telah diisi atau tercatat
            dalam formulir ini adalah benar, jelas, dan lengkap menurut keadaan yang sebenarnya.</p>
        <table width="100%" border="0" cellspacing="2" cellpadding="0">
            <tr>
                <td width="7%">&nbsp;</td>
                <td width="26%" align="center">Mengetahui</td>
                <td width="30%">&nbsp;</td>
                <td width="30%" align="center">&nbsp;Sangata,</td>
                <td width="7%">&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td align="center">Atasan Langsung </td>
                <td>&nbsp;</td>
                <td align="center">&nbsp;Diisi Oleh,</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp; </td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td height="32">&nbsp;</td>
                <td>&nbsp; </td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td align="center">&nbsp;( . . . . . . . . . . . )</td>
                <td>&nbsp;</td>
                <td align="center">&nbsp;( . . . . . . . . . . . .)</td>
                <td>&nbsp;</td>
            </tr>
        </table>
        <p><br />
        </p>
    </div>
</body>

</html>