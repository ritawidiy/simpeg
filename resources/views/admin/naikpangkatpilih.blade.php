@extends('layouts.master_admin')
@section('tittle', 'Naik Pangkat Pilih')
@section('content')

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Daftar Pegawai yang sudah waktunya diberikan Kenaikan Pangkat Pilihan</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              <li data-toggle="tooltip" title="Tambah Data"><a href="{{ route('tambah.pegawai') }}"><i class="fa fa-plus"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row form-group"></div>
            <table id="datatable-buttons" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama - NIP</th>
                  <th>Waktu</th>
                  <th>Pangkat (GOL/TMT)</th>
                  <th>Jabatan</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Pendidikan</th>
                  <th>TTL</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($data as $i => $value)
                  @php
                  $golongan = \App\Model\Mastergolonganpangkat::where('namagolongan', $value->pangkat)->first();
                  if($value->pendidikan =='10'){ $pendidikan = 'SD'; }
                  elseif($value->pendidikan =='20'){ $pendidikan = 'SMP'; }
                  elseif($value->pendidikan =='23'){ $pendidikan = 'MTS'; }
                  elseif($value->pendidikan =='24'){ $pendidikan = 'SR'; }
                  elseif($value->pendidikan =='28'){ $pendidikan = 'Paket C'; }
                  elseif($value->pendidikan =='29'){ $pendidikan = 'MA'; }
                  elseif($value->pendidikan =='30'){ $pendidikan = 'SMA'; }
                  elseif($value->pendidikan =='31'){ $pendidikan = 'SMK'; }
                  elseif($value->pendidikan =='34'){ $pendidikan = 'D1'; }
                  elseif($value->pendidikan =='40'){ $pendidikan = 'D2'; }
                  elseif($value->pendidikan =='44'){ $pendidikan = 'D3'; }
                  elseif($value->pendidikan =='51'){ $pendidikan = 'S1'; }
                  elseif($value->pendidikan =='71'){ $pendidikan = 'S2'; }
                  elseif($value->pendidikan =='72'){ $pendidikan = 'S3'; }
                  @endphp
                <tr>
                  <td class="a-center" style="vertical-align: middle" align="center">{{ $i+1 }}</td>
                  <td style="vertical-align: middle"> {{ $value->gelar_depan.' '.$value->nama.'
                  '.$value->gelar_belakang }}<br>{{ $value->nip }}</td>
                  <td style="vertical-align: middle">{{ \Carbon\Carbon::parse($value->tmt_jabatan)->diffInYears(now()) }}</td>
                  <td style="vertical-align: middle"> {{ $golongan != null ? $golongan->namapangkat : '-' }}<br>{{ \Carbon\Carbon::parse($value->tmt_pangkat)->format('j F Y') }} </td>
                  <td style="vertical-align: middle"> {{ $value->jabatan }} </td>
                  <td style="vertical-align: middle"> {{ $value->jenis_kelamin != "" ? $value->jenis_kelamin : '-' }} </td>
                  <td style="vertical-align: middle"> {{ $value->agama != "" ? $value->agama : '-'}} </td>
                  <td style="vertical-align: middle"> {{ $pendidikan }} </td>
                  <td style="vertical-align: middle"> {{ $value->tempat_lahir.', '.\Carbon\Carbon::parse($value->tgl_lahir)->format('d-m-Y') }} </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection