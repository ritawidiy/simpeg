@extends('layouts.master_admin')
@section('tittle', 'DETAIL BIODATA')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title"></div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Biodata Pegawai</h2>
                            <ul class="nav navbar-right panel_toolbox"></ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                                <h3>{{ $data->nama }}</h3>
                                <ul class="list-unstyled user_data">
                                    <li><i class="fa fa-briefcase user-profile-icon"></i> {{ $data->jabatan }}</li>
                                </ul>
                                <a href="{{ url('admin/printindividu_peg') }}" class="btn btn-success">
                                    <i class="fa fa-print m-right-xs"></i>Print Profile
                                </a><br/>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab"
                                                                                  role="tab"
                                                                                  data-toggle="tab"
                                                                                  aria-expanded="true">Data Pribadi</a>
                                        </li>
                                        <li role="presentation" class=""><a href="#tab_content2" role="tab"
                                                                            id="profile-tab"
                                                                            data-toggle="tab" aria-expanded="false">Data
                                                Anak</a>
                                        </li>
                                        <li role="presentation" class=""><a href="#tab_content3" role="tab"
                                                                            id="profile-tab2"
                                                                            data-toggle="tab"
                                                                            aria-expanded="false">Data </a>
                                        </li>
                                    </ul>
                                    <div id="myTabContent" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1"
                                             aria-labelledby="home-tab">
                                            <!-- start recent activity -->
                                            <table class="data table table-striped no-margin">
                                                <thead>
                                                <tr>
                                                    <th>NIP</th>
                                                    <th>{{ $data->nip }}</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Nama Lengkap</td>
                                                    <td>{{ $data->gelar_depan }} {{ $data->nama }} {{
                                                        $data->gelar_belakang }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenis Kelamin</td>
                                                    <td>{{ $data->jenis_kelamin }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td>{{ $data->alamat }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat Tanggal Lahir (TTL)</td>
                                                    <td>{{ $data->tempat_lahir }}
                                                        {{date('d-m-Y',strtotime($data->tgl_lahir))}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Agama</td>
                                                    <td>{{ $data->agama }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Status Pernikahan</td>
                                                    <td>{{ $data->status_perkawinan }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Pendidikan</td>
                                                    <td>{{ $data->pendidikan }} {{ $data->jurusan }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Lulus</td>
                                                    <td>{{date('d-m-Y',strtotime($data->tgl_lulus))}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jabatan</td>
                                                    <td>{{ $data->jabatan }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat Tugas</td>
                                                    <td>{{$data->tempat_tugas}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Lokasi Bagian</td>
                                                    <td>{{$data->lokasi_bagian}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_content2"
                                             aria-labelledby="profile-tab">
                                            <table class="data table table-striped no-margin">
                                                <thead>
                                                <tr>
                                                    <th>NIP</th>
                                                    <th>{{ $data->nip }}</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Nama Lengkap</td>
                                                    <td>{{ $data->gelar_depan }} {{ $data->nama }} {{
                                                        $data->gelar_belakang }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenis Kelamin</td>
                                                    <td>{{ $data->jenis_kelamin }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td>{{ $data->alamat }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat Tanggal Lahir (TTL)</td>
                                                    <td>{{ $data->tempat_lahir }}
                                                        {{date('d-m-Y',strtotime($data->tgl_lahir))}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Agama</td>
                                                    <td>{{ $data->agama }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Status Pernikahan</td>
                                                    <td>{{ $data->status_perkawinan }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Pendidikan</td>
                                                    <td>{{ $data->pendidikan }} {{ $data->jurusan }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Lulus</td>
                                                    <td>{{date('d-m-Y',strtotime($data->tgl_lulus))}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jabatan</td>
                                                    <td>{{ $data->jabatan }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat Tugas</td>
                                                    <td>{{$data->tempat_tugas}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Lokasi Bagian</td>
                                                    <td>{{$data->lokasi_bagian}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <!-- end user projects -->
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_content3"
                                             aria-labelledby="profile-tab">
                                            <!-- start recent activity -->
                                            <table class="data table table-striped no-margin">
                                                <thead>

                                                <tr>
                                                    <th>NIP</th>
                                                    <th>{{ $data->nip }}</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Nama Lengkap</td>
                                                    <td>{{ $data->gelar_depan }} {{ $data->nama }} {{
                                                        $data->gelar_belakang }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenis Kelamin</td>
                                                    <td>{{ $data->jenis_kelamin }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td>{{ $data->alamat }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat Tanggal Lahir (TTL)</td>
                                                    <td>{{ $data->tempat_lahir }}
                                                        {{date('d-m-Y',strtotime($data->tgl_lahir))}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Agama</td>
                                                    <td>{{ $data->agama }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Status Pernikahan</td>
                                                    <td>{{ $data->status_perkawinan }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Pendidikan</td>
                                                    <td>{{ $data->pendidikan }} {{ $data->jurusan }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Lulus</td>
                                                    <td>{{date('d-m-Y',strtotime($data->tgl_lulus))}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jabatan</td>
                                                    <td>{{ $data->jabatan }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat Tugas</td>
                                                    <td>{{$data->tempat_tugas}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Lokasi Bagian</td>
                                                    <td>{{$data->lokasi_bagian}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection