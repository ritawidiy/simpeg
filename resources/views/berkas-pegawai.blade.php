@extends($level == 45 ? 'layouts.master_admin' : 'layouts.master_user')
@section('tittle', 'Berkas Pegawai: '.$data->nip.' | SIMPEG (Sistem Informasi Kepegawaian)')
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
                            <h2 id="panel_title">Berkas Pegawai
                                <small>{{$data->nip}}</small>
                            </h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form id="form-berkas-pegawai" action="{{$level == 7 ? route('unggah.berkas-pegawai') :
                            route('verify.berkas-pegawai')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="hidden" name="nip" value="{{$data->nip}}">
                                <input type="hidden" name="_method" value="{{$level == 7 ? 'POST' : 'PUT'}}">
                                <table style="border-bottom: 1px solid #ddd"
                                       class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th style="width: 5%;vertical-align: middle; text-align: center">No</th>
                                        <th style="width: {{$level == 7 ? '50%' : '60%'}};vertical-align: middle">
                                            Berkas
                                        </th>
                                        <th style="width: 15%;vertical-align: middle; text-align: center">Preview</th>
                                        <th style="width: 10%;vertical-align: middle; text-align: center">Status</th>
                                        <th style="width: {{$level == 7 ? '20%' : '10%'}};vertical-align: middle; text-align: center">
                                            Aksi
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">1</td>
                                        <td style="vertical-align: middle">Sertifikat Diklat</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->sertifikatdiklat != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas pegawai!"
                                                   href="{{route('unduh.berkas-pegawai', ['nip' => $data->nip, 'berkas' => $berkas->sertifikatdiklat])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->sertifikatdiklat}}"
                                                         src="{{asset('storage/berkas-pegawai/'.$data->nip.'/'.$berkas->sertifikatdiklat)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_sertifikatdiklat == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_sertifikatdiklat == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_sertifikatdiklat == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="sertifikatdiklat" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="sertifikatdiklat" class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->sertifikatdiklat != "" ? $berkas->sertifikatdiklat : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                                        <button onclick="btnUnggah('sertifikatdiklat', '{{!is_null($berkas) && $berkas->status_sertifikatdiklat == 3 ? 0 : 1}}')"
                                                                class="btn btn-primary" type="button">
                                                            <i class="fa fa-upload"></i></button>
                                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_sertifikatdiklat == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_sertifikatdiklat" value="2">
                                                <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_sertifikatdiklat == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_sertifikatdiklat" value="3">
                                                <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">2</td>
                                        <td style="vertical-align: middle">Sertifikat Kursus</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->sertifikatkursus != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas pegawai!"
                                                   href="{{route('unduh.berkas-pegawai', ['nip' => $data->nip, 'berkas' => $berkas->sertifikatkursus])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->sertifikatkursus}}"
                                                         src="{{asset('storage/berkas-pegawai/'.$data->nip.'/'.$berkas->sertifikatkursus)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_sertifikatkursus == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_sertifikatkursus == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_sertifikatkursus == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="sertifikatkursus" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="sertifikatkursus" class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->sertifikatkursus != "" ? $berkas->sertifikatkursus : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                                        <button onclick="btnUnggah('sertifikatkursus', '{{!is_null($berkas) && $berkas->status_sertifikatkursus == 3 ? 0 : 1}}')"
                                                                class="btn btn-primary" type="button">
                                                            <i class="fa fa-upload"></i></button>
                                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_sertifikatkursus == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_sertifikatkursus" value="2">
                                                <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_sertifikatkursus == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_sertifikatkursus" value="3">
                                                <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">3</td>
                                        <td style="vertical-align: middle">Sertifikat Penataran</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->sertifikatpenataran != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas pegawai!"
                                                   href="{{route('unduh.berkas-pegawai', ['nip' => $data->nip, 'berkas' => $berkas->sertifikatpenataran])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->sertifikatpenataran}}"
                                                         src="{{asset('storage/berkas-pegawai/'.$data->nip.'/'.$berkas->sertifikatpenataran)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_sertifikatpenataran == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_sertifikatpenataran == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_sertifikatpenataran == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="sertifikatpenataran" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="sertifikatpenataran"
                                                           class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->sertifikatpenataran != "" ? $berkas->sertifikatpenataran : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                                        <button onclick="btnUnggah('sertifikatpenataran', '{{!is_null($berkas) && $berkas->status_sertifikatpenataran == 3 ? 0 : 1}}')"
                                                                class="btn btn-primary" type="button">
                                                            <i class="fa fa-upload"></i></button>
                                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_sertifikatpenataran == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_sertifikatpenataran" value="2">
                                                <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_sertifikatpenataran == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_sertifikatpenataran" value="3">
                                                <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">4</td>
                                        <td style="vertical-align: middle">Scan Ijazah</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->scanijazah != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas pegawai!"
                                                   href="{{route('unduh.berkas-pegawai', ['nip' => $data->nip, 'berkas' => $berkas->scanijazah])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->scanijazah}}"
                                                         src="{{asset('storage/berkas-pegawai/'.$data->nip.'/'.$berkas->scanijazah)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_scanijazah == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_scanijazah == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_scanijazah == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="scanijazah" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="scanijazah" class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->scanijazah != "" ? $berkas->scanijazah : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                                        <button onclick="btnUnggah('scanijazah', '{{!is_null($berkas) && $berkas->status_scanijazah == 3 ? 0 : 1}}')"
                                                                class="btn btn-primary" type="button">
                                                            <i class="fa fa-upload"></i></button>
                                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_scanijazah == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_scanijazah" value="2">
                                                <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_scanijazah == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_scanijazah" value="3">
                                                <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">5</td>
                                        <td style="vertical-align: middle">Sertifikat Seminar</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->sertifikatseminar != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas pegawai!"
                                                   href="{{route('unduh.berkas-pegawai', ['nip' => $data->nip, 'berkas' => $berkas->sertifikatseminar])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->sertifikatseminar}}"
                                                         src="{{asset('storage/berkas-pegawai/'.$data->nip.'/'.$berkas->sertifikatseminar)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_sertifikatseminar == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_sertifikatseminar == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_sertifikatseminar == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="sertifikatseminar" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="sertifikatseminar" class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->sertifikatseminar != "" ? $berkas->sertifikatseminar : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                                        <button onclick="btnUnggah('sertifikatseminar', '{{!is_null($berkas) && $berkas->status_sertifikatseminar == 3 ? 0 : 1}}')"
                                                                class="btn btn-primary" type="button">
                                                            <i class="fa fa-upload"></i></button>
                                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_sertifikatseminar == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_sertifikatseminar" value="2">
                                                <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_sertifikatseminar == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_sertifikatseminar" value="3">
                                                <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">6</td>
                                        <td style="vertical-align: middle">KTP</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->ktp != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas pegawai!"
                                                   href="{{route('unduh.berkas-pegawai', ['nip' => $data->nip, 'berkas' => $berkas->ktp])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->ktp}}"
                                                         src="{{asset('storage/berkas-pegawai/'.$data->nip.'/'.$berkas->ktp)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_ktp == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_ktp == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_ktp == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="ktp" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="ktp" class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->ktp != "" ? $berkas->ktp : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                                        <button onclick="btnUnggah('ktp', '{{!is_null($berkas) && $berkas->status_ktp == 3 ? 0 : 1}}')"
                                                                class="btn btn-primary" type="button">
                                                            <i class="fa fa-upload"></i></button>
                                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_ktp == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_ktp" value="2">
                                                <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_ktp == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_ktp" value="3">
                                                <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">7</td>
                                        <td style="vertical-align: middle">SIM</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->sim != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas pegawai!"
                                                   href="{{route('unduh.berkas-pegawai', ['nip' => $data->nip, 'berkas' => $berkas->sim])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->sim}}"
                                                         src="{{asset('storage/berkas-pegawai/'.$data->nip.'/'.$berkas->sim)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_sim == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_sim == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_sim == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="sim" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="sim" class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->sim != "" ? $berkas->sim : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                                        <button onclick="btnUnggah('sim', '{{!is_null($berkas) && $berkas->status_sim == 3 ? 0 : 1}}')"
                                                                class="btn btn-primary" type="button">
                                                            <i class="fa fa-upload"></i></button>
                                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_sim == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_sim" value="2">
                                                <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_sim == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_sim" value="3">
                                                <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">8</td>
                                        <td style="vertical-align: middle">Transkrip Nilai</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->transkripnilai != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas pegawai!"
                                                   href="{{route('unduh.berkas-pegawai', ['nip' => $data->nip, 'berkas' => $berkas->transkripnilai])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->transkripnilai}}"
                                                         src="{{asset('storage/berkas-pegawai/'.$data->nip.'/'.$berkas->transkripnilai)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_transkripnilai == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_transkripnilai == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_transkripnilai == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="transkripnilai" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="transkripnilai" class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->transkripnilai != "" ? $berkas->transkripnilai : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                                        <button onclick="btnUnggah('transkripnilai', '{{!is_null($berkas) && $berkas->status_transkripnilai == 3 ? 0 : 1}}')"
                                                                class="btn btn-primary" type="button">
                                                            <i class="fa fa-upload"></i></button>
                                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_transkripnilai == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_transkripnilai" value="2">
                                                <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_transkripnilai == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_transkripnilai" value="3">
                                                <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">9</td>
                                        <td style="vertical-align: middle">Surat Lamaran</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->suratlamaran != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas pegawai!"
                                                   href="{{route('unduh.berkas-pegawai', ['nip' => $data->nip, 'berkas' => $berkas->suratlamaran])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->suratlamaran}}"
                                                         src="{{asset('storage/berkas-pegawai/'.$data->nip.'/'.$berkas->suratlamaran)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_suratlamaran == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_suratlamaran == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_suratlamaran == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="suratlamaran" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="suratlamaran" class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->suratlamaran != "" ? $berkas->suratlamaran : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                                        <button onclick="btnUnggah('suratlamaran', '{{!is_null($berkas) && $berkas->status_suratlamaran == 3 ? 0 : 1}}')"
                                                                class="btn btn-primary" type="button">
                                                            <i class="fa fa-upload"></i></button>
                                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_suratlamaran == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_suratlamaran" value="2">
                                                <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_suratlamaran == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_suratlamaran" value="3">
                                                <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">10</td>
                                        <td style="vertical-align: middle">Foto Pegang KTP</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->fotopegangktp_akunscn != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas pegawai!"
                                                   href="{{route('unduh.berkas-pegawai', ['nip' => $data->nip, 'berkas' => $berkas->fotopegangktp_akunscn])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->fotopegangktp_akunscn}}"
                                                         src="{{asset('storage/berkas-pegawai/'.$data->nip.'/'.$berkas->fotopegangktp_akunscn)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_fotopegangktp_akunscn == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_fotopegangktp_akunscn == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_fotopegangktp_akunscn == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="fotopegangktp_akunscn" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="fotopegangktp_akunscn"
                                                           class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->fotopegangktp_akunscn != "" ? $berkas->fotopegangktp_akunscn : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                                        <button onclick="btnUnggah('fotopegangktp_akunscn', '{{!is_null($berkas) && $berkas->status_fotopegangktp_akunscn == 3 ? 0 : 1}}')"
                                                                class="btn btn-primary" type="button">
                                                            <i class="fa fa-upload"></i></button>
                                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_fotopegangktp_akunscn == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_fotopegangktp_akunscn" value="2">
                                                <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_fotopegangktp_akunscn == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_fotopegangktp_akunscn" value="3">
                                                <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">11</td>
                                        <td style="vertical-align: middle">Akte Kelahiran</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->aktelahir != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas pegawai!"
                                                   href="{{route('unduh.berkas-pegawai', ['nip' => $data->nip, 'berkas' => $berkas->aktelahir])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->aktelahir}}"
                                                         src="{{asset('storage/berkas-pegawai/'.$data->nip.'/'.$berkas->aktelahir)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_aktelahir == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_aktelahir == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_aktelahir == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="aktelahir" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="aktelahir" class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->aktelahir != "" ? $berkas->aktelahir : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                                        <button onclick="btnUnggah('aktelahir', '{{!is_null($berkas) && $berkas->status_aktelahir == 3 ? 0 : 1}}')"
                                                                class="btn btn-primary" type="button">
                                                            <i class="fa fa-upload"></i></button>
                                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_aktelahir == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_aktelahir" value="2">
                                                <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_aktelahir == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_aktelahir" value="3">
                                                <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">12</td>
                                        <td style="vertical-align: middle">Bukti Akreditasi Prodi</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->bukti_akreditasiprodi != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas pegawai!"
                                                   href="{{route('unduh.berkas-pegawai', ['nip' => $data->nip, 'berkas' => $berkas->bukti_akreditasiprodi])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->bukti_akreditasiprodi}}"
                                                         src="{{asset('storage/berkas-pegawai/'.$data->nip.'/'.$berkas->bukti_akreditasiprodi)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_bukti_akreditasiprodi == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_bukti_akreditasiprodi == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_bukti_akreditasiprodi == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="bukti_akreditasiprodi" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="bukti_akreditasiprodi"
                                                           class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->bukti_akreditasiprodi != "" ? $berkas->bukti_akreditasiprodi : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                                        <button onclick="btnUnggah('bukti_akreditasiprodi', '{{!is_null($berkas) && $berkas->status_bukti_akreditasiprodi == 3 ? 0 : 1}}')"
                                                                class="btn btn-primary" type="button">
                                                            <i class="fa fa-upload"></i></button>
                                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_bukti_akreditasiprodi == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_bukti_akreditasiprodi" value="2">
                                                <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_bukti_akreditasiprodi == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_bukti_akreditasiprodi" value="3">
                                                <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">13</td>
                                        <td style="vertical-align: middle">Bukti Akreditasi Universitas</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->bukti_akreditasiuniv != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas pegawai!"
                                                   href="{{route('unduh.berkas-pegawai', ['nip' => $data->nip, 'berkas' => $berkas->bukti_akreditasiuniv])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->bukti_akreditasiuniv}}"
                                                         src="{{asset('storage/berkas-pegawai/'.$data->nip.'/'.$berkas->bukti_akreditasiuniv)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_bukti_akreditasiuniv == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_bukti_akreditasiuniv == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_bukti_akreditasiuniv == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="bukti_akreditasiuniv" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="bukti_akreditasiuniv"
                                                           class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->bukti_akreditasiuniv != "" ? $berkas->bukti_akreditasiuniv : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                                        <button onclick="btnUnggah('bukti_akreditasiuniv', '{{!is_null($berkas) && $berkas->status_bukti_akreditasiuniv == 3 ? 0 : 1}}')"
                                                                class="btn btn-primary" type="button">
                                                            <i class="fa fa-upload"></i></button>
                                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_bukti_akreditasiuniv == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_bukti_akreditasiuniv" value="2">
                                                <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_bukti_akreditasiuniv == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_bukti_akreditasiuniv" value="3">
                                                <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">14</td>
                                        <td style="vertical-align: middle">Kartu Keluarga</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->kartukeluarga != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas pegawai!"
                                                   href="{{route('unduh.berkas-pegawai', ['nip' => $data->nip, 'berkas' => $berkas->kartukeluarga])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->kartukeluarga}}"
                                                         src="{{asset('storage/berkas-pegawai/'.$data->nip.'/'.$berkas->kartukeluarga)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_kartukeluarga == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_kartukeluarga == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_kartukeluarga == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="kartukeluarga" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="kartukeluarga" class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->kartukeluarga != "" ? $berkas->kartukeluarga : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                                        <button onclick="btnUnggah('kartukeluarga', '{{!is_null($berkas) && $berkas->status_kartukeluarga == 3 ? 0 : 1}}')"
                                                                class="btn btn-primary" type="button">
                                                            <i class="fa fa-upload"></i></button>
                                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_kartukeluarga == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_kartukeluarga" value="2">
                                                <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_kartukeluarga == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_kartukeluarga" value="3">
                                                <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">15</td>
                                        <td style="vertical-align: middle">Pasfoto Merah</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->pasfoto_merah != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas pegawai!"
                                                   href="{{route('unduh.berkas-pegawai', ['nip' => $data->nip, 'berkas' => $berkas->pasfoto_merah])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->pasfoto_merah}}"
                                                         src="{{asset('storage/berkas-pegawai/'.$data->nip.'/'.$berkas->pasfoto_merah)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_pasfoto_merah == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_pasfoto_merah == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_pasfoto_merah == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="pasfoto_merah" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="pasfoto_merah" class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->pasfoto_merah != "" ? $berkas->pasfoto_merah : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                                        <button onclick="btnUnggah('pasfoto_merah', '{{!is_null($berkas) && $berkas->status_pasfoto_merah == 3 ? 0 : 1}}')"
                                                                class="btn btn-primary" type="button">
                                                            <i class="fa fa-upload"></i></button>
                                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_pasfoto_merah == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_pasfoto_merah" value="2">
                                                <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_pasfoto_merah == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_pasfoto_merah" value="3">
                                                <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">16</td>
                                        <td style="vertical-align: middle">Fotocopy Ijazah SD</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->fotokopiijazah_sd != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas pegawai!"
                                                   href="{{route('unduh.berkas-pegawai', ['nip' => $data->nip, 'berkas' => $berkas->fotokopiijazah_sd])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->fotokopiijazah_sd}}"
                                                         src="{{asset('storage/berkas-pegawai/'.$data->nip.'/'.$berkas->fotokopiijazah_sd)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_fotokopiijazah_sd == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_fotokopiijazah_sd == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_fotokopiijazah_sd == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="fotokopiijazah_sd" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="fotokopiijazah_sd" class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->fotokopiijazah_sd != "" ? $berkas->fotokopiijazah_sd : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                                        <button onclick="btnUnggah('fotokopiijazah_sd', '{{!is_null($berkas) && $berkas->status_fotokopiijazah_sd == 3 ? 0 : 1}}')"
                                                                class="btn btn-primary" type="button">
                                                            <i class="fa fa-upload"></i></button>
                                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_fotokopiijazah_sd == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_fotokopiijazah_sd" value="2">
                                                <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_fotokopiijazah_sd == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_fotokopiijazah_sd" value="3">
                                                <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">17</td>
                                        <td style="vertical-align: middle">Fotocopy Ijazah SMP</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->fotokopiijazah_smp != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas pegawai!"
                                                   href="{{route('unduh.berkas-pegawai', ['nip' => $data->nip, 'berkas' => $berkas->fotokopiijazah_smp])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->fotokopiijazah_smp}}"
                                                         src="{{asset('storage/berkas-pegawai/'.$data->nip.'/'.$berkas->fotokopiijazah_smp)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_fotokopiijazah_smp == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_fotokopiijazah_smp == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_fotokopiijazah_smp == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="fotokopiijazah_smp" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="fotokopiijazah_smp" class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->fotokopiijazah_smp != "" ? $berkas->fotokopiijazah_smp : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                                        <button onclick="btnUnggah('fotokopiijazah_smp', '{{!is_null($berkas) && $berkas->status_fotokopiijazah_smp == 3 ? 0 : 1}}')"
                                                                class="btn btn-primary" type="button">
                                                            <i class="fa fa-upload"></i></button>
                                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_fotokopiijazah_smp == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_fotokopiijazah_smp" value="2">
                                                <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_fotokopiijazah_smp == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_fotokopiijazah_smp" value="3">
                                                <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">18</td>
                                        <td style="vertical-align: middle">Fotocopy Ijazah SMA/SMK</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->fotokopiijazah_sma_smk != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas pegawai!"
                                                   href="{{route('unduh.berkas-pegawai', ['nip' => $data->nip, 'berkas' => $berkas->fotokopiijazah_sma_smk])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->fotokopiijazah_sma_smk}}"
                                                         src="{{asset('storage/berkas-pegawai/'.$data->nip.'/'.$berkas->fotokopiijazah_sma_smk)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_fotokopiijazah_sma_smk == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_fotokopiijazah_sma_smk == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_fotokopiijazah_sma_smk == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="fotokopiijazah_sma_smk" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="fotokopiijazah_sma_smk"
                                                           class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->fotokopiijazah_sma_smk != "" ? $berkas->fotokopiijazah_sma_smk : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                                        <button onclick="btnUnggah('fotokopiijazah_sma_smk', '{{!is_null($berkas) && $berkas->status_fotokopiijazah_sma_smk == 3 ? 0 : 1}}')"
                                                                class="btn btn-primary" type="button">
                                                            <i class="fa fa-upload"></i></button>
                                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_fotokopiijazah_sma_smk == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_fotokopiijazah_sma_smk" value="2">
                                                <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_fotokopiijazah_sma_smk == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_fotokopiijazah_sma_smk" value="3">
                                                <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-block btn-primary" disabled>
                                            <strong><i class="fa fa-archive"></i>&ensp;SAVE CHANGES</strong>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        @if($level == 7)
        function btnUnggah(berkas, check) {
            var input = $("input[name=" + berkas + "]");

            if (check == 1) {
                input.trigger('click');
            } else {
                swal('PERHATIAN!', 'Berkas tidak dapat diubah karena sudah divalidasi.', 'warning');
            }

            input.on('change', function () {
                var files = $(this).prop("files"), names = $.map(files, function (val) {
                        return val.name;
                    }),
                    txt = $("input[data-id=" + berkas + "]"), files_size = this.files[0].size, max_file_size = 2097152,
                    progress_bar_id = $("#pb-" + berkas + " .progress-bar");

                if (!window.File && window.FileReader && window.FileList && window.Blob) {
                    swal('PERHATIAN!', "Browser yang Anda gunakan tidak support! Silahkan perbarui atau gunakan browser yang lainnya.", 'warning');

                } else {
                    if (files_size > max_file_size) {
                        swal('ERROR!', "Ukuran total " + names + " adalah " + humanFileSize(files_size) +
                            ", ukuran file maksimal yang diperbolehkan adalah " + humanFileSize(max_file_size) +
                            ", coba unggah file yang ukurannya lebih kecil!", 'error');

                    } else {
                        $(this.files).each(function (i, ifile) {
                            if (ifile.value !== "") {
                                $("#form-berkas-pegawai button[type=submit]").removeAttr('disabled');
                                txt.val(names);
                                $("input[data-id=" + berkas + "][data-toggle=tooltip]").attr('data-original-title', names);

                            } else {
                                swal('Oops...', 'Tidak ada file yang dipilih!', 'error');
                            }
                        });
                    }
                }
            });
        }

        function humanFileSize(size) {
            var i = Math.floor(Math.log(size) / Math.log(1024));
            return (size / Math.pow(1024, i)).toFixed(2) * 1 + ' ' + ['B', 'kB', 'MB', 'GB', 'TB'][i];
        }

        @else
        $("#form-berkas-pegawai input[type=radio]").on('ifChecked', function (event) {
            $("#form-berkas-pegawai button[type=submit]").removeAttr('disabled');
        });
        @endif
    </script>
@endpush