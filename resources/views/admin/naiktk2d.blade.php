@extends('layouts.master_admin')
@section('tittle', 'Pengangkatan TK2D')
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
                        <h2>Daftar Urut Pengangkatan TK2D Pegawai</h2>
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
                                <th>Jabatan</th>
                                <th>TMT</th>
                                <th>Masa Kerja</th>
                                <th>Pendidikan</th>
                                <th>Bagian</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                  @foreach ($data as $value)
                  @php
                  $bagian = \App\Model\Masterunitkerja::where('lokasi_bagian', $value->lokasi_bagian)->first();
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
                  <td class="a-center" style="vertical-align: middle" align="center">{{ $no++ }}</td>
                  <td style="vertical-align: middle"> {{ $value->gelar_depan.' '.$value->nama.'
                  '.$value->gelar_belakang }}<br>{{ $value->nip }}</td>
                  <td style="vertical-align: middle">{{ $value->jabatan }}</td>
                  <td style="vertical-align: middle">{{ \Carbon\Carbon::parse($value->tmt_jabatan)->format('j F Y') }} </td>
                  <td style="vertical-align: middle"> {{ $value->masakerja_tahun != "" ? $value->masakerja_tahun : 0}} tahun {{ $value->masakerja_bulan != "" ? $value->masakerja_bulan : 0 }} bulan</td>
                  <td style="vertical-align: middle"> {{ $pendidikan }} </td>
                  <td style="vertical-align: middle"> {{ $bagian != null ? $bagian->namaunitkerja : '-' }} </td>
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


@endsection