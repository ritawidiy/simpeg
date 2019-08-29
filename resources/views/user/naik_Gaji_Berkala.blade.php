@extends('layouts.master_user')
@section('tittle', 'Naik Gaji Berkala')
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
                        <h2>Daftar Pegawai yang sudah waktunya diberikan Kenaikan Gaji Berkala</h2>
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
                                <th>Kenaikan Gaji Berkala Terakhir (TMT/Masa Kerja)</th>
                                <th>Kenaikan Gaji Berkala Usulan (TMT/Masa Kerja)</th>
                                <th>Bagian</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($data as $i => $value)
                                    @php $bagian = \App\Model\Masterunitkerja::where('lokasi_bagian', $value->lokasi_bagian)->first(); @endphp
                                    @if(\Carbon\Carbon::parse($value->tmt_kgb)->addYears(2)->format('Y') == now()->format('Y'))
                                    <tr>
                                        <td class="a-center" style="vertical-align: middle" align="center">{{ $i+1 }}</td>
                                        <td style="vertical-align: middle"> {{ $value->gelar_depan.' '.$value->nama.'
                                        '.$value->gelar_belakang }}<br>{{ $value->nip }}</td>
                                        <td style="vertical-align: middle">2</td>
                                        <td style="vertical-align: middle"> {{ $value->tmt_kgb }}<br>{{ $value->masakerja_tahun != "" ? $value->masakerja_tahun : 0}} tahun {{ $value->masakerja_bulan != "" ? $value->masakerja_bulan : 0 }} bulan </td>
                                        <td style="vertical-align: middle"> {{ \Carbon\Carbon::parse($value->tmt_kgb)->addYears(2) }}<br>{{ ($value->masakerja_tahun+2).' tahun '.$value->masakerja_bulan.' bulan' }} </td>
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
    
@endsection