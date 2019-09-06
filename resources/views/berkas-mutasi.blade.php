@extends('layouts.master_user')
@section('tittle', 'Berkas Mutasi: '.$data->nip.' | SIMPEG (Sistem Informasi Kepegawaian)')
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
                            <h2 id="panel_title">Berkas Mutasi<small>{{$data->nip}}</small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form id="form-berkas-mutasi" action="{{$level == 7 ? route('unggah.berkas-mutasi') :
                            route('verify.berkas-mutasi')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="hidden" name="riwayatmutasi_id" value="{{$data->id}}">
                                <input type="hidden" name="_method" value="{{$level == 7 ? '' : 'PUT'}}">
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
                                        <td style="vertical-align: middle">Foto berwarna 4R (full-body)</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->foto_berwarna != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas mutasi!"
                                                   href="{{route('unduh.berkas-mutasi', ['nip' => $data->nip, 'berkas' => $berkas->foto_berwarna])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->foto_berwarna}}"
                                                         src="{{asset('storage/berkas-mutasi/'.$data->nip.'/'.$berkas->foto_berwarna)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_foto_berwarna == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_foto_berwarna == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_foto_berwarna == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="foto_berwarna" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="foto_berwarna" class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->foto_berwarna != "" ? $berkas->foto_berwarna : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                                        <button onclick="btnUnggah('foto_berwarna', '{{!is_null($berkas) && $berkas->status_foto_berwarna == 3 ? 0 : 1}}')"
                                                                class="btn btn-primary" type="button">
                                                            <i class="fa fa-upload"></i></button>
                                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_foto_berwarna == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_foto_berwarna" value="2">
                                                <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_foto_berwarna == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_foto_berwarna" value="3">
                                                <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">2</td>
                                        <td style="vertical-align: middle">Surat persetujuan instansi</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->suratpersetujuan_instansi != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas mutasi!"
                                                   href="{{route('unduh.berkas-mutasi', ['nip' => $data->nip, 'berkas' => $berkas->suratpersetujuan_instansi])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->suratpersetujuan_instansi}}"
                                                         src="{{asset('storage/berkas-mutasi/'.$data->nip.'/'.$berkas->suratpersetujuan_instansi)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_suratpersetujuan_instansi == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_suratpersetujuan_instansi == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_suratpersetujuan_instansi == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="suratpersetujuan_instansi"
                                                       style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="suratpersetujuan_instansi"
                                                           class="form-control" placeholder="Unggah berkas disini..."
                                                           readonly style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->suratpersetujuan_instansi != "" ? $berkas->suratpersetujuan_instansi : ""}}"
                                                           data-toggle="tooltip"
                                                           data-placement="left" title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                                    <button onclick="btnUnggah('suratpersetujuan_instansi', '{{!is_null($berkas) && $berkas->status_suratpersetujuan_instansi == 3 ? 0 : 1}}')"
                                                            class="btn btn-primary" type="button">
                                                        <i class="fa fa-upload"></i></button></span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_suratpersetujuan_instansi == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_suratpersetujuan_instansi"
                                                       value="2"> <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_suratpersetujuan_instansi == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_suratpersetujuan_instansi"
                                                       value="3"> <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">3</td>
                                        <td style="vertical-align: middle">Surat permohonan mutasi</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->suratpermohonan_mutasi != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas mutasi!"
                                                   href="{{route('unduh.berkas-mutasi', ['nip' => $data->nip, 'berkas' => $berkas->suratpermohonan_mutasi])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->suratpermohonan_mutasi}}"
                                                         src="{{asset('storage/berkas-mutasi/'.$data->nip.'/'.$berkas->suratpermohonan_mutasi)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_suratpermohonan_mutasi == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_suratpermohonan_mutasi == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_suratpermohonan_mutasi == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="suratpermohonan_mutasi" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="suratpermohonan_mutasi"
                                                           class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->suratpermohonan_mutasi != "" ? $berkas->suratpermohonan_mutasi : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                        <button onclick="btnUnggah('suratpermohonan_mutasi', '{{!is_null($berkas) && $berkas->status_suratpermohonan_mutasi == 3 ? 0 : 1}}')"
                                                class="btn btn-primary"
                                                type="button">
                                            <i class="fa fa-upload"></i>
                                        </button>
                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_suratpermohonan_mutasi == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_suratpermohonan_mutasi"
                                                       value="2"> <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_suratpermohonan_mutasi == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_suratpermohonan_mutasi"
                                                       value="3"> <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">4</td>
                                        <td style="vertical-align: middle">Fotocopy legalisir SKCPNS</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->fcl_skcpns != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas mutasi!"
                                                   href="{{route('unduh.berkas-mutasi', ['nip' => $data->nip, 'berkas' => $berkas->fcl_skcpns])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->fcl_skcpns}}"
                                                         src="{{asset('storage/berkas-mutasi/'.$data->nip.'/'.$berkas->fcl_skcpns)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_fcl_skcpns == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_fcl_skcpns == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_fcl_skcpns == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="fcl_skcpns" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="fcl_skcpns" class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->fcl_skcpns != "" ? $berkas->fcl_skcpns : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                        <button onclick="btnUnggah('fcl_skcpns', '{{!is_null($berkas) && $berkas->status_fcl_skcpns == 3 ? 0 : 1}}')"
                                                class="btn btn-primary" type="button">
                                            <i class="fa fa-upload"></i>
                                        </button>
                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_fcl_skcpns == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_fcl_skcpns" value="2"> <b>INVALID</b>
                                                <br>
                                                <input {{!is_null($berkas) && $berkas->status_fcl_skcpns == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_fcl_skcpns" value="3"> <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">5</td>
                                        <td style="vertical-align: middle">Fotocopy legalisir SKPNS</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->fcl_skpns != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas mutasi!"
                                                   href="{{route('unduh.berkas-mutasi', ['nip' => $data->nip, 'berkas' => $berkas->fcl_skpns])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->fcl_skpns}}"
                                                         src="{{asset('storage/berkas-mutasi/'.$data->nip.'/'.$berkas->fcl_skpns)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_fcl_skpns == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_fcl_skpns == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_fcl_skpns == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="fcl_skpns" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="fcl_skpns" class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->fcl_skpns != "" ? $berkas->fcl_skpns : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                        <button onclick="btnUnggah('fcl_skpns', '{{!is_null($berkas) && $berkas->status_fcl_skpns == 3 ? 0 : 1}}')"
                                                class="btn btn-primary" type="button">
                                            <i class="fa fa-upload"></i>
                                        </button>
                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_fcl_skpns == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_fcl_skpns" value="2"> <b>INVALID</b>
                                                <br>
                                                <input {{!is_null($berkas) && $berkas->status_fcl_skpns == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_fcl_skpns" value="3"> <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">6</td>
                                        <td style="vertical-align: middle">Fotocopy legalisir SK Pangkat Terakhir</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->fcl_skpangkatakhir != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas mutasi!"
                                                   href="{{route('unduh.berkas-mutasi', ['nip' => $data->nip, 'berkas' => $berkas->fcl_skpangkatakhir])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->fcl_skpangkatakhir}}"
                                                         src="{{asset('storage/berkas-mutasi/'.$data->nip.'/'.$berkas->fcl_skpangkatakhir)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_fcl_skpangkatakhir == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_fcl_skpangkatakhir == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_fcl_skpangkatakhir == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="fcl_skpangkatakhir" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="fcl_skpangkatakhir" class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->fcl_skpangkatakhir != "" ? $berkas->fcl_skpangkatakhir : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                        <button onclick="btnUnggah('fcl_skpangkatakhir', '{{!is_null($berkas) && $berkas->status_fcl_skpangkatakhir == 3 ? 0 : 1}}')"
                                                class="btn btn-primary"
                                                type="button">
                                            <i class="fa fa-upload"></i>
                                        </button>
                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_fcl_skpangkatakhir == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_fcl_skpangkatakhir"
                                                       value="2"> <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_fcl_skpangkatakhir == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_fcl_skpangkatakhir"
                                                       value="3"> <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">7</td>
                                        <td style="vertical-align: middle">Surat keterangan bebas indisipliner dari BKD
                                            / Inspektorat
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->skb_indisipliner != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas mutasi!"
                                                   href="{{route('unduh.berkas-mutasi', ['nip' => $data->nip, 'berkas' => $berkas->skb_indisipliner])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->skb_indisipliner}}"
                                                         src="{{asset('storage/berkas-mutasi/'.$data->nip.'/'.$berkas->skb_indisipliner)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_skb_indisipliner == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_skb_indisipliner == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_skb_indisipliner == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="skb_indisipliner" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="skb_indisipliner" class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->skb_indisipliner != "" ? $berkas->skb_indisipliner : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                        <button onclick="btnUnggah('skb_indisipliner', '{{!is_null($berkas) && $berkas->status_skb_indisipliner == 3 ? 0 : 1}}')"
                                                class="btn btn-primary"
                                                type="button">
                                            <i class="fa fa-upload"></i>
                                        </button>
                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_skb_indisipliner == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_skb_indisipliner"
                                                       value="2"> <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_skb_indisipliner == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_skb_indisipliner"
                                                       value="3"> <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">8</td>
                                        <td style="vertical-align: middle">Surat keterangan bebas tugas belajar</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->skb_tugasbelajar != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas mutasi!"
                                                   href="{{route('unduh.berkas-mutasi', ['nip' => $data->nip, 'berkas' => $berkas->skb_tugasbelajar])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->skb_tugasbelajar}}"
                                                         src="{{asset('storage/berkas-mutasi/'.$data->nip.'/'.$berkas->skb_tugasbelajar)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_skb_tugasbelajar == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_skb_tugasbelajar == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_skb_tugasbelajar == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="skb_tugasbelajar" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="skb_tugasbelajar" class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->skb_tugasbelajar != "" ? $berkas->skb_tugasbelajar : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                        <button onclick="btnUnggah('skb_tugasbelajar', '{{!is_null($berkas) && $berkas->status_skb_tugasbelajar == 3 ? 0 : 1}}')"
                                                class="btn btn-primary"
                                                type="button">
                                            <i class="fa fa-upload"></i>
                                        </button>
                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_skb_tugasbelajar == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_skb_tugasbelajar"
                                                       value="2"> <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_skb_tugasbelajar == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_skb_tugasbelajar"
                                                       value="3"> <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">9</td>
                                        <td style="vertical-align: middle">Surat keterangan bebas tanggungan hutang
                                            keuangan dengan lembaga / bank disertai Surat Pernyataan pejabat membayar
                                            gaji di atas materai
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->skb_tanggunganhutang != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas mutasi!"
                                                   href="{{route('unduh.berkas-mutasi', ['nip' => $data->nip, 'berkas' => $berkas->skb_tanggunganhutang])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->skb_tanggunganhutang}}"
                                                         src="{{asset('storage/berkas-mutasi/'.$data->nip.'/'.$berkas->skb_tanggunganhutang)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_skb_tanggunganhutang == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_skb_tanggunganhutang == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_skb_tanggunganhutang == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="skb_tanggunganhutang" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="skb_tanggunganhutang"
                                                           class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->skb_tanggunganhutang != "" ? $berkas->skb_tanggunganhutang : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                        <button onclick="btnUnggah('skb_tanggunganhutang', '{{!is_null($berkas) && $berkas->status_skb_tanggunganhutang == 3 ? 0 : 1}}')"
                                                class="btn btn-primary"
                                                type="button">
                                            <i class="fa fa-upload"></i>
                                        </button>
                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_skb_tanggunganhutang == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_skb_tanggunganhutang"
                                                       value="2"> <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_skb_tanggunganhutang == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_skb_tanggunganhutang"
                                                       value="3"> <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">10</td>
                                        <td style="vertical-align: middle">Fotocopy legalisir DP3 / SKP 2 tahun
                                            terakhir
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->fcl_dp3_skp != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas mutasi!"
                                                   href="{{route('unduh.berkas-mutasi', ['nip' => $data->nip, 'berkas' => $berkas->fcl_dp3_skp])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->fcl_dp3_skp}}"
                                                         src="{{asset('storage/berkas-mutasi/'.$data->nip.'/'.$berkas->fcl_dp3_skp)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_fcl_dp3_skp == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_fcl_dp3_skp == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_fcl_dp3_skp == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="fcl_dp3_skp" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="fcl_dp3_skp" class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->fcl_dp3_skp != "" ? $berkas->fcl_dp3_skp : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                        <button onclick="btnUnggah('fcl_dp3_skp', '{{!is_null($berkas) && $berkas->status_fcl_dp3_skp == 3 ? 0 : 1}}')"
                                                class="btn btn-primary"
                                                type="button">
                                            <i class="fa fa-upload"></i>
                                        </button>
                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_fcl_dp3_skp == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_fcl_dp3_skp" value="2">
                                                <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_fcl_dp3_skp == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_fcl_dp3_skp" value="3">
                                                <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">11</td>
                                        <td style="vertical-align: middle">Fotocopy legalisir Ijazah dan Transkrip
                                            Nilai
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->fcl_ijazah_transkripnilai != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas mutasi!"
                                                   href="{{route('unduh.berkas-mutasi', ['nip' => $data->nip, 'berkas' => $berkas->fcl_ijazah_transkripnilai])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->fcl_ijazah_transkripnilai}}"
                                                         src="{{asset('storage/berkas-mutasi/'.$data->nip.'/'.$berkas->fcl_ijazah_transkripnilai)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_fcl_ijazah_transkripnilai == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_fcl_ijazah_transkripnilai == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_fcl_ijazah_transkripnilai == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="fcl_ijazah_transkripnilai"
                                                       style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="fcl_ijazah_transkripnilai"
                                                           class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->fcl_ijazah_transkripnilai != "" ? $berkas->fcl_ijazah_transkripnilai : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                        <button onclick="btnUnggah('fcl_ijazah_transkripnilai', '{{!is_null($berkas) && $berkas->status_fcl_ijazah_transkripnilai == 3 ? 0 : 1}}')"
                                                class="btn btn-primary"
                                                type="button">
                                            <i class="fa fa-upload"></i>
                                        </button>
                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_fcl_ijazah_transkripnilai == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_fcl_ijazah_transkripnilai"
                                                       value="2"> <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_fcl_ijazah_transkripnilai == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_fcl_ijazah_transkripnilai"
                                                       value="3"> <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">12</td>
                                        <td style="vertical-align: middle">Daftar riwayat hidup (disertai hobi, format
                                            sesuai MENPAN)
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->daftar_riwayathidup != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas mutasi!"
                                                   href="{{route('unduh.berkas-mutasi', ['nip' => $data->nip, 'berkas' => $berkas->daftar_riwayathidup])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->daftar_riwayathidup}}"
                                                         src="{{asset('storage/berkas-mutasi/'.$data->nip.'/'.$berkas->daftar_riwayathidup)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_daftar_riwayathidup == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_daftar_riwayathidup == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_daftar_riwayathidup == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="daftar_riwayathidup" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="daftar_riwayathidup"
                                                           class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->daftar_riwayathidup != "" ? $berkas->daftar_riwayathidup : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                        <button onclick="btnUnggah('daftar_riwayathidup', '{{!is_null($berkas) && $berkas->status_daftar_riwayathidup == 3 ? 0 : 1}}')"
                                                class="btn btn-primary"
                                                type="button">
                                            <i class="fa fa-upload"></i>
                                        </button>
                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_daftar_riwayathidup == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_daftar_riwayathidup"
                                                       value="2"> <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_daftar_riwayathidup == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_daftar_riwayathidup"
                                                       value="3"> <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">13</td>
                                        <td style="vertical-align: middle">Fotocopy legalisir KTP</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->fcl_ktp != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas mutasi!"
                                                   href="{{route('unduh.berkas-mutasi', ['nip' => $data->nip, 'berkas' => $berkas->fcl_ktp])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->fcl_ktp}}"
                                                         src="{{asset('storage/berkas-mutasi/'.$data->nip.'/'.$berkas->fcl_ktp)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_fcl_ktp == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_fcl_ktp == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_fcl_ktp == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="fcl_ktp" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="fcl_ktp" class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->fcl_ktp != "" ? $berkas->fcl_ktp : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                        <button onclick="btnUnggah('fcl_ktp', '{{!is_null($berkas) && $berkas->status_fcl_ktp == 3 ? 0 : 1}}')"
                                                class="btn btn-primary" type="button">
                                            <i class="fa fa-upload"></i>
                                        </button>
                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_fcl_ktp == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_fcl_ktp" value="2"> <b>INVALID</b>
                                                <br>
                                                <input {{!is_null($berkas) && $berkas->status_fcl_ktp == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_fcl_ktp" value="3"> <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">14</td>
                                        <td style="vertical-align: middle">Fotocopy legalisir Kartu Pegawai</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->fcl_kartupegawai != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas mutasi!"
                                                   href="{{route('unduh.berkas-mutasi', ['nip' => $data->nip, 'berkas' => $berkas->fcl_kartupegawai])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->fcl_kartupegawai}}"
                                                         src="{{asset('storage/berkas-mutasi/'.$data->nip.'/'.$berkas->fcl_kartupegawai)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_fcl_kartupegawai == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_fcl_kartupegawai == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_fcl_kartupegawai == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="fcl_kartupegawai" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="fcl_kartupegawai" class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->fcl_kartupegawai != "" ? $berkas->fcl_kartupegawai : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                        <button onclick="btnUnggah('fcl_kartupegawai', '{{!is_null($berkas) && $berkas->status_fcl_kartupegawai == 3 ? 0 : 1}}')"
                                                class="btn btn-primary"
                                                type="button">
                                            <i class="fa fa-upload"></i>
                                        </button>
                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_fcl_kartupegawai == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_fcl_kartupegawai"
                                                       value="2"> <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_fcl_kartupegawai == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_fcl_kartupegawai"
                                                       value="3"> <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">15</td>
                                        <td style="vertical-align: middle">Fotocopy legalisir Surat Nikah</td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->fcl_suratnikah != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas mutasi!"
                                                   href="{{route('unduh.berkas-mutasi', ['nip' => $data->nip, 'berkas' => $berkas->fcl_suratnikah])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->fcl_suratnikah}}"
                                                         src="{{asset('storage/berkas-mutasi/'.$data->nip.'/'.$berkas->fcl_suratnikah)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_fcl_suratnikah == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_fcl_suratnikah == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_fcl_suratnikah == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="fcl_suratnikah" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="fcl_suratnikah" class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->fcl_suratnikah != "" ? $berkas->fcl_suratnikah : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                        <button onclick="btnUnggah('fcl_suratnikah', '{{!is_null($berkas) && $berkas->status_fcl_suratnikah == 3 ? 0 : 1}}')"
                                                class="btn btn-primary"
                                                type="button">
                                            <i class="fa fa-upload"></i>
                                        </button>
                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_fcl_suratnikah == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_fcl_suratnikah" value="2">
                                                <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_fcl_suratnikah == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_fcl_suratnikah" value="3">
                                                <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">16</td>
                                        <td style="vertical-align: middle">Surat pernyataan satu istri / istri pertama
                                            (untuk PNS Wanita)
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->sp_satuistri_istripertama != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas mutasi!"
                                                   href="{{route('unduh.berkas-mutasi', ['nip' => $data->nip, 'berkas' => $berkas->sp_satuistri_istripertama])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->sp_satuistri_istripertama}}"
                                                         src="{{asset('storage/berkas-mutasi/'.$data->nip.'/'.$berkas->sp_satuistri_istripertama)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_sp_satuistri_istripertama == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_sp_satuistri_istripertama == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_sp_satuistri_istripertama == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="sp_satuistri_istripertama"
                                                       style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="sp_satuistri_istripertama"
                                                           class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->sp_satuistri_istripertama != "" ? $berkas->sp_satuistri_istripertama : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                        <button onclick="btnUnggah('sp_satuistri_istripertama', '{{!is_null($berkas) && $berkas->status_sp_satuistri_istripertama == 3 ? 0 : 1}}')"
                                                class="btn btn-primary"
                                                type="button">
                                            <i class="fa fa-upload"></i>
                                        </button>
                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_sp_satuistri_istripertama == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_sp_satuistri_istripertama"
                                                       value="2"> <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_sp_satuistri_istripertama == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_sp_satuistri_istripertama"
                                                       value="3"> <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">17</td>
                                        <td style="vertical-align: middle">Surat pernyataan bersedia ditempatkan di
                                            seluruh wilayah
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->sp_bersediaditempatkan != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas mutasi!"
                                                   href="{{route('unduh.berkas-mutasi', ['nip' => $data->nip, 'berkas' => $berkas->sp_bersediaditempatkan])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->sp_bersediaditempatkan}}"
                                                         src="{{asset('storage/berkas-mutasi/'.$data->nip.'/'.$berkas->sp_bersediaditempatkan)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_sp_bersediaditempatkan == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_sp_bersediaditempatkan == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_sp_bersediaditempatkan == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="sp_bersediaditempatkan" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="sp_bersediaditempatkan"
                                                           class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->sp_bersediaditempatkan != "" ? $berkas->sp_bersediaditempatkan : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                        <button onclick="btnUnggah('sp_bersediaditempatkan', '{{!is_null($berkas) && $berkas->status_sp_bersediaditempatkan == 3 ? 0 : 1}}')"
                                                class="btn btn-primary"
                                                type="button">
                                            <i class="fa fa-upload"></i>
                                        </button>
                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_sp_bersediaditempatkan == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_sp_bersediaditempatkan"
                                                       value="2"> <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_sp_bersediaditempatkan == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_sp_bersediaditempatkan"
                                                       value="3"> <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">18</td>
                                        <td style="vertical-align: middle">Surat keterangan sehat jasmani dari RSUD
                                            Pemerintah
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->sk_sehatjasmani != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas mutasi!"
                                                   href="{{route('unduh.berkas-mutasi', ['nip' => $data->nip, 'berkas' => $berkas->sk_sehatjasmani])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->sk_sehatjasmani}}"
                                                         src="{{asset('storage/berkas-mutasi/'.$data->nip.'/'.$berkas->sk_sehatjasmani)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_sk_sehatjasmani == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_sk_sehatjasmani == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_sk_sehatjasmani == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="sk_sehatjasmani" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="sk_sehatjasmani" class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->sk_sehatjasmani != "" ? $berkas->sk_sehatjasmani : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                        <button onclick="btnUnggah('sk_sehatjasmani', '{{!is_null($berkas) && $berkas->status_sk_sehatjasmani == 3 ? 0 : 1}}')"
                                                class="btn btn-primary"
                                                type="button">
                                            <i class="fa fa-upload"></i>
                                        </button>
                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_sk_sehatjasmani == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_sk_sehatjasmani"
                                                       value="2"> <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_sk_sehatjasmani == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_sk_sehatjasmani"
                                                       value="3"> <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">19</td>
                                        <td style="vertical-align: middle">Uraian tugas / TUPOKSI (TTD yang bersangkutan
                                            dan atasan langsung)
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->tupoksi != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas mutasi!"
                                                   href="{{route('unduh.berkas-mutasi', ['nip' => $data->nip, 'berkas' => $berkas->tupoksi])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->tupoksi}}"
                                                         src="{{asset('storage/berkas-mutasi/'.$data->nip.'/'.$berkas->tupoksi)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_tupoksi == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_tupoksi == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_tupoksi == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="tupoksi" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="tupoksi" class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->tupoksi != "" ? $berkas->tupoksi : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                        <button onclick="btnUnggah('tupoksi', '{{!is_null($berkas) && $berkas->status_tupoksi == 3 ? 0 : 1}}')"
                                                class="btn btn-primary" type="button">
                                            <i class="fa fa-upload"></i>
                                        </button>
                                    </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_tupoksi == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_tupoksi" value="2"> <b>INVALID</b>
                                                <br>
                                                <input {{!is_null($berkas) && $berkas->status_tupoksi == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_tupoksi" value="3"> <b>VALID</b>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center">20</td>
                                        <td style="vertical-align: middle">Sertifikat keahlian untuk tenaga kesehatan
                                            teknis
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(!is_null($berkas) && $berkas->sertifikat_keahlian != "")
                                                <a title="Klik disini untuk melihat/mengunduh berkas mutasi!"
                                                   href="{{route('unduh.berkas-mutasi', ['nip' => $data->nip, 'berkas' => $berkas->sertifikat_keahlian])}}"
                                                   data-toggle="tooltip" data-placement="left">
                                                    <img width="128" class="img-preview"
                                                         alt="{{$berkas->sertifikat_keahlian}}"
                                                         src="{{asset('storage/berkas-mutasi/'.$data->nip.'/'.$berkas->sertifikat_keahlian)}}">
                                                </a>
                                            @else
                                                <strong>&ndash;</strong>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle; text-align: center">
                                            @if(is_null($berkas))
                                                <span class="label label-default">BELUM DIUNGGAH</span>
                                            @else
                                                @if($berkas->status_sertifikat_keahlian == 0)
                                                    <span class="label label-default">BELUM DIUNGGAH</span>
                                                @elseif($berkas->status_sertifikat_keahlian == 1)
                                                    <span class="label label-warning">MENUNGGU VALIDASI</span>
                                                @elseif($berkas->status_sertifikat_keahlian == 2)
                                                    <span class="label label-danger">INVALID</span>
                                                @else
                                                    <span class="label label-success">VALID</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle">
                                            @if($level == 7)
                                                <input type="file" name="sertifikat_keahlian" style="display: none;">
                                                <div class="input-group">
                                                    <input type="text" data-id="sertifikat_keahlian"
                                                           class="form-control"
                                                           placeholder="Unggah berkas disini..." readonly
                                                           style="cursor: pointer"
                                                           value="{{!is_null($berkas) && $berkas->sertifikat_keahlian != "" ? $berkas->sertifikat_keahlian : ""}}"
                                                           data-toggle="tooltip" data-placement="left"
                                                           title="Ukuran file max. 2 MB">
                                                    <span class="input-group-btn">
                                                    <button onclick="btnUnggah('sertifikat_keahlian', '{{!is_null($berkas) && $berkas->status_sertifikat_keahlian == 3 ? 0 : 1}}')"
                                                            class="btn btn-primary"
                                                            type="button">
                                                        <i class="fa fa-upload"></i>
                                                    </button>
                                                </span>
                                                </div>
                                            @else
                                                <input {{!is_null($berkas) && $berkas->status_sertifikat_keahlian == 2 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_sertifikat_keahlian"
                                                       value="2"> <b>INVALID</b><br>
                                                <input {{!is_null($berkas) && $berkas->status_sertifikat_keahlian == 3 ? 'checked' : ''}} type="radio"
                                                       class="flat" name="status_sertifikat_keahlian"
                                                       value="3"> <b>VALID</b>
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
                                $("#form-berkas-mutasi button[type=submit]").removeAttr('disabled');
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
        $("#form-berkas-mutasi input[type=radio]").on('ifChecked', function (event) {
            $("#form-berkas-mutasi button[type=submit]").removeAttr('disabled');
        });
        @endif
    </script>
@endpush