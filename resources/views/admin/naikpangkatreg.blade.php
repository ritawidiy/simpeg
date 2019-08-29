@extends('layouts.master_admin')
@section('tittle', 'Naik Pangkat Reguler')
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
                        <h2>Daftar Pegawai yang sudah waktunya diberikan Kenaikan Pangkat Reguler</h2>
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
                                    <th>Pangkat Terakhir (GOL/TMT)</th>
                                    <th>Pangkat Usulan (GOL/TMT)</th>
                                    <th>Bagian</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($data as $value)
                                @php
                                $diff = now()->diffInYears(\Carbon\Carbon::parse($value->tgl_masuk_kerja));
                                $diff2 = now()->diffInYears(\Carbon\Carbon::parse($value->tmt_pangkat));
                                $golongan = \App\Model\Mastergolonganpangkat::where('namagolongan', $value->pangkat)->first();
                                $next = \App\Model\Mastergolonganpangkat::where('kode', $golongan->kode + 1)->first();
                                $tmt_next = \Carbon\Carbon::parse($value->tmt_pangkat)->addYears(4)->format('j F Y');
                                $bagian = \App\Model\Masterunitkerja::where('lokasi_bagian', $value->lokasi_bagian)->first();
                                @endphp
                                @if($diff == 4 && $diff2 == 4)
                                <tr>
                                    <td class="a-center" style="vertical-align: middle" align="center">{{ $no++ }}</td>
                                    <td style="vertical-align: middle"> {{ $value->gelar_depan.' '.$value->nama.'
                                    '.$value->gelar_belakang }}<br>{{ $value->nip }}</td>
                                    <td style="vertical-align: middle">4</td>
                                    <td style="vertical-align: middle"> {{ $golongan->namapangkat }}<br>{{ \Carbon\Carbon::parse($value->tmt_pangkat)->format('j F Y') }} </td>
                                    <td style="vertical-align: middle"> {{ $next->namapangkat }}<br>{{ $tmt_next }}  </td>
                                    <td style="vertical-align: middle"> {{ $bagian->namaunitkerja }} </td>
                                </tr>
                                @endif
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