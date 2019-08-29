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