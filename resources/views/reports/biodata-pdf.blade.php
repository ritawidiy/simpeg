<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Biodata Pegawai</title>
    <style>
        h1, h2, h3, h4, h5, h6 {
            text-align: center;
        }
        #data-table {
            width: auto;
            border-collapse: collapse;
            margin: 0 auto;
        }
        #data-table td, th {
            border: 1px solid #ddd;
            text-align: left;
            padding: 8px;
        }
        #data-table tr:nth-child(even) {
            background-color: #eee;
        }
    </style>
</head>
<body onload="window.print()">
<h1 style="margin-bottom: 5px">Daftar Biodata Pegawai</h1>
<h2 style="margin-top: 0;margin-bottom: 5px">Pemerintah Kabupaten Kutai Timur</h2>
<hr style="margin-bottom: .5em">
<table border="0" cellpadding="0" cellspacing="0" align="center" id="data-table">
    <tr>
        <th>No</th>
        <th>Nama Pegawai - NIP</th>
        <th>Jabatan</th>
        <th>Jenis Kelamin</th>
        <th>Pendidikan</th>
        <th>Tgl Lahir</th>
        <th>Tempat Tugas</th>
    </tr>
    @php $no = 1; @endphp
    @foreach($data as $value)
        <tr>
            <td style="vertical-align: middle" align="center">{{ $no++ }}</td>
            <td style="vertical-align: middle"> {{ $value->gelar_depan.' '.$value->nama.' '.$value->gelar_belakang }}<br>{{ $value->nip }}</td>
            <td style="vertical-align: middle"> {{ $value->jabatan }} </td>
            <td style="vertical-align: middle"> {{ $value->jenis_kelamin }} </td>
            <td style="vertical-align: middle"> {{ $value->pendidikan }} </td>
            <td style="vertical-align: middle"> {{ $value->tgl_lahir }} </td>
            <td style="vertical-align: middle"> {{ $value->tempat_tugas }} </td>
        </tr>
    @endforeach
</table>
</body>
</html>