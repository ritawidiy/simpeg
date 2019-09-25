@extends('layouts.master_user')
@section('tittle', $level == 45 ? 'Usulan Mutasi | SIMPEG (Sistem Informasi Kepegawaian)' :
'Riwayat Mutasi | SIMPEG (Sistem Informasi Kepegawaian)')
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
                            <h2 id="panel_title">{{$level == 45 ? 'Usulan' : 'Riwayat'}} Mutasi</h2>
                            @if($level == 7)
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="btn_mutasi" data-toggle="tooltip" title="Ajukan Mutasi"
                                           data-placement="right"><i class="fa fa-plus"></i></a></li>
                                </ul>
                            @endif
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kegiatan</th>
                                    <th>Data Lama</th>
                                    <th>Data Baru</th>
                                    <th>Surat</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $no = 1; @endphp
                                @foreach ($data as $d)
                                    <tr>
                                        <td style="vertical-align: middle" align="center">{{$no++}}</td>
                                        <td style="vertical-align: middle">
                                            <table>
                                                <tr>
                                                    <th>NIP</th>
                                                    <th>&nbsp;:&nbsp;</th>
                                                    <th>{{$d->nip}}</th>
                                                </tr>
                                                <tr style="margin-bottom: .5em">
                                                    <th>Nama</th>
                                                    <th>&nbsp;:&nbsp;</th>
                                                    <th>{{$d->nama}}</th>
                                                </tr>
                                                <tr>
                                                    <td>NIP Atasan</td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>{{$d->nipatasan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Alasan</td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>{{$d->alasanmutasi}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Pertimbangan</td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>{{$d->pertimbangan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenis Kenaikan</td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>{{$d->jeniskenaikan}}</td>
                                                </tr>
                                                <tr style="margin-bottom: .5em">
                                                    <td>Tgl. Ditetapkan</td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>{{$d->tglditetapkan}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Tgl. Pengajuan</th>
                                                    <th>&nbsp;:&nbsp;</th>
                                                    <th>{{$d->tglpengajuan}}</th>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="vertical-align: middle">
                                            <table>
                                                <tr>
                                                    <td>Jabatan Lama</td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>{{$d->jabatanlama}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Unit Kerja Lama</td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>{{$d->unitkerjalama}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Pangkat/Gol. Ruang Lama</td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>{{$d->pangkatgolonganlama}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Gaji Lama</td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>{{$d->gajilama}}</td>
                                                </tr>
                                                <tr>
                                                    <td>TMT Lama</td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>{{$d->tmtlama}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Masa Kerja Lama</td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>{{$d->masakerjatahunlama.' tahun '.$d->masakerjabulanlama.' bulan'}}</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="vertical-align: middle">
                                            <table>
                                                <tr>
                                                    <td>Jabatan Baru</td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>{{$d->jabatanbaru}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Unit Kerja Baru</td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>{{$d->unitkerjabaru}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Pangkat/Gol. Ruang Baru</td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>{{$d->pangkatgolonganbaru}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Gaji Baru</td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>{{$d->gajibaru}}</td>
                                                </tr>
                                                <tr>
                                                    <td>TMT Baru</td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>{{$d->tmtbaru}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Masa Kerja Baru</td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>{{$d->masakerjatahunbaru.' tahun '.$d->masakerjabulanbaru.' bulan'}}</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="vertical-align: middle">
                                            <table>
                                                <tr>
                                                    <td>No. SK</td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>{{$d->nosk}}</td>
                                                </tr>
                                                <tr style="margin-bottom:.5em">
                                                    <td>Tgl. SK</td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>{{$d->tglsk}}</td>
                                                </tr>
                                                <tr>
                                                    <td>No. BKN</td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>{{$d->nobkn}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tgl. BKN</td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>{{$d->tglbkn}}</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="vertical-align: middle" align="center">
                                            @if($d->status == "DITOLAK")
                                                <span class="label label-danger">{{$d->status}}</span>
                                            @elseif($d->status == "DISETUJUI")
                                                <span class="label label-success">{{$d->status}}</span>
                                            @else
                                                <span class="label label-warning">DIPROSES</span>
                                            @endif
                                        </td>
                                        <td style="vertical-align: middle" align="center">
                                            <div class="btn-group">
                                                @if($level == 7)
                                                    <button onclick="editRiwayatMutasi('{{$d->id}}','{{$d->nip}}','{{$d->nama}}','{{$d->jeniskenaikan}}','{{$d->alasanmutasi}}','{{$d->pertimbangan}}','{{$d->nipatasan}}','{{$d->minit}}','{{$d->tglditetapkan}}','{{$d->nosk}}','{{$d->tglsk}}','{{$d->nobkn}}','{{$d->tglbkn}}','{{$d->jabatanlama}}','{{$d->jabatanbaru}}','{{$d->tmtlama}}','{{$d->tmtbaru}}','{{$d->gajilama}}','{{$d->gajibaru}}','{{$d->masakerjatahunlama}}','{{$d->masakerjabulanlama}}','{{$d->masakerjatahunbaru}}','{{$d->masakerjabulanbaru}}','{{$d->pangkatgolonganlama}}','{{$d->pangkatgolonganbaru}}','{{$d->eselonlama}}','{{$d->eselonbaru}}','{{$d->unitkerjalama}}','{{$d->unitkerjabaru}}')"
                                                            class="btn btn-warning btn-sm" data-toggle="tooltip"
                                                            title="Edit"><i class="fa fa-edit"></i></button>
                                                    <a href="{{route('delete.riwayat-mutasi', ['id' => encrypt($d->id)])}}"
                                                       class="btn btn-danger btn-sm delete-data" data-toggle="tooltip"
                                                       title="Hapus"><i class="fa fa-trash"></i></a>
                                                @else
                                                    <button type="button" class="btn btn-success btn-sm"
                                                            title="DISETUJUI" data-toggle="tooltip"
                                                            onclick="verifyMutasi('{{$d->id}}','{{$d->nip}}','DISETUJUI')"
                                                            {{$d->status == 'DISETUJUI' || $d->status == 'DITOLAK' ? 'disabled' : ''}}>
                                                        <i class="fa fa-check-circle"></i></button>
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                            title="DITOLAK" data-toggle="tooltip"
                                                            onclick="verifyMutasi('{{$d->id}}','{{$d->nip}}','DITOLAK')"
                                                            {{$d->status == 'DITOLAK' || $d->status == 'DISETUJUI' ? 'disabled' : ''}}>
                                                        <i class="fa fa-ban"></i></button>
                                                @endif
                                            </div>
                                            <hr style="margin: .5em 0">
                                            <button onclick="berkasMutasi('{{$d->id}}', '{{$d->nip}}', '{{$d->status}}',
                                                    '{{!$d->getBerkasMutasi ? 0 : 1}}','{{route('show.berkas-mutasi', ['id' => encrypt($d->id)])}}')"
                                                    class="btn btn-primary btn-sm">
                                                <i class="fa fa-archive"></i>&ensp;Berkas Mutasi
                                            </button>
                                        </td>
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

    @if($level == 7)
        <div id="riwayatMutasiModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width: 80%">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title">Form Pengajuan Mutasi</h4>
                    </div>
                    <form method="post" action="{{route('create.riwayat-mutasi')}}" id="form-riwayat-mutasi">
                        {{csrf_field()}}
                        <div class="modal-body">
                            <input id="method" type="hidden" name="_method">
                            <input id="id" type="hidden" name="id">
                            <div class="row form-group">
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <label class="control-label" for="nip">NIP</label>
                                    <input type="text" name="nip" id="nip" class="form-control" placeholder="NIP"
                                           readonly>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <label class="control-label" for="nama">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama"
                                           required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-12">
                                    <label class="control-label" for="jeniskenaikan">Jenis Kenaikan</label>
                                    <input type="text" name="jeniskenaikan" id="jeniskenaikan" class="form-control"
                                           placeholder="Jenis kenaikan" maxlength="100" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="control-label" for="alasanmutasi">Alasan Mutasi</label>
                                    <textarea name="alasanmutasi" id="alasanmutasi" class="form-control" required
                                              style="resize: vertical" placeholder="Alasan mutasi"></textarea>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="control-label" for="pertimbangan">Pertimbangan</label>
                                    <textarea name="pertimbangan" id="pertimbangan" class="form-control" required
                                              style="resize: vertical" placeholder="Pertimbangan"></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <label class="control-label" for="nipatasan">NIP Atasan</label>
                                    <input type="text" name="nipatasan" id="nipatasan" class="form-control"
                                           placeholder="NIP atasan" maxlength="100" required>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label class="control-label" for="minit">Minit</label>
                                    <input type="text" name="minit" id="minit" class="form-control"
                                           placeholder="Minit" maxlength="10" required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <label class="control-label" for="tglditetapkan">Tanggal Ditetapkan</label>
                                    <input type="date" name="tglditetapkan" id="tglditetapkan" class="form-control"
                                           placeholder="yyyy-mm-dd" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label class="control-label" for="nosk">No. SK</label>
                                    <input type="text" name="nosk" id="nosk" class="form-control"
                                           placeholder="nosk" maxlength="30" required>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <label class="control-label" for="tglsk">Tanggal SK</label>
                                    <input type="date" name="tglsk" id="tglsk" class="form-control"
                                           placeholder="yyyy-mm-dd" required>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label class="control-label" for="nobkn">No. BKN</label>
                                    <input type="text" name="nobkn" id="nobkn" class="form-control"
                                           placeholder="nobkn" maxlength="30" required>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <label class="control-label" for="tglbkn">Tanggal BKN</label>
                                    <input type="date" name="tglbkn" id="tglbkn" class="form-control"
                                           placeholder="yyyy-mm-dd" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="control-label" for="pangkatgolonganlama">Pangkat/Gol. Ruang
                                        Lama</label>
                                    <select id="pangkatgolonganlama" name="pangkatgolonganlama"
                                            data-live-search="true"
                                            class="form-control selectpicker" title="-- Pilih --" required>
                                        <option value="Juru Muda I/a">Juru Muda I/a</option>
                                        <option value="Juru Muda TK.I I/b">Juru Muda TK.I I/b</option>
                                        <option value="Juru I/c">Juru I/c</option>
                                        <option value="Juru TK.I I/d">Juru TK.I I/d</option>
                                        <option value="Pengatur Muda II/a">Pengatur Muda II/a</option>
                                        <option value="Pengatur Muda Tk.I II/b">Pengatur Muda Tk.I II/b</option>
                                        <option value="Pengatur II/c">Pengatur II/c</option>
                                        <option value="Pengatur Tk.I II/d">Pengatur Tk.I II/d</option>
                                        <option value="Penata Muda III/a">Penata Muda III/a</option>
                                        <option value="Penata Muda Tk.I III/b">Penata Muda Tk.I III/b</option>
                                        <option value="Penata III/c">Penata III/c</option>
                                        <option value="Penata TK.I III/d">Penata TK.I III/d</option>
                                        <option value="Pembina IV/a">Pembina IV/a</option>
                                        <option value="Pembina Tk.I IV/b">Pembina Tk.I IV/b</option>
                                        <option value="Pembina Utama Muda IV/c">Pembina Utama Muda IV/c</option>
                                        <option value="Pembina Utama Madya IV/d">Pembina Utama Madya IV/d</option>
                                        <option value="Pembina Utama IV/e">Pembina Utama IV/e</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="control-label" for="pangkatgolonganbaru">Pangkat/Gol. Ruang
                                        Baru</label>
                                    <select id="pangkatgolonganbaru" name="pangkatgolonganbaru"
                                            data-live-search="true"
                                            class="form-control selectpicker" title="-- Pilih --" required>
                                        <option value="Juru Muda I/a">Juru Muda I/a</option>
                                        <option value="Juru Muda TK.I I/b">Juru Muda TK.I I/b</option>
                                        <option value="Juru I/c">Juru I/c</option>
                                        <option value="Juru TK.I I/d">Juru TK.I I/d</option>
                                        <option value="Pengatur Muda II/a">Pengatur Muda II/a</option>
                                        <option value="Pengatur Muda Tk.I II/b">Pengatur Muda Tk.I II/b</option>
                                        <option value="Pengatur II/c">Pengatur II/c</option>
                                        <option value="Pengatur Tk.I II/d">Pengatur Tk.I II/d</option>
                                        <option value="Penata Muda III/a">Penata Muda III/a</option>
                                        <option value="Penata Muda Tk.I III/b">Penata Muda Tk.I III/b</option>
                                        <option value="Penata III/c">Penata III/c</option>
                                        <option value="Penata TK.I III/d">Penata TK.I III/d</option>
                                        <option value="Pembina IV/a">Pembina IV/a</option>
                                        <option value="Pembina Tk.I IV/b">Pembina Tk.I IV/b</option>
                                        <option value="Pembina Utama Muda IV/c">Pembina Utama Muda IV/c</option>
                                        <option value="Pembina Utama Madya IV/d">Pembina Utama Madya IV/d</option>
                                        <option value="Pembina Utama IV/e">Pembina Utama IV/e</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="control-label" for="jabatanlama">Jabatan Lama</label>
                                    <input class="form-control" type="text" id="jabatanlama" name="jabatanlama"
                                           placeholder="Jabatan lama" maxlength="100" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="control-label" for="jabatanbaru">Jabatan Baru</label>
                                    <input class="form-control" type="text" id="jabatanbaru" name="jabatanbaru"
                                           placeholder="Jabatan baru" maxlength="100" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <label class="control-label" for="eselonlama">Eselon Lama</label>
                                    <select id="eselonlama" name="eselonlama" data-live-search="true"
                                            class="form-control selectpicker" title="-- Pilih --" required>
                                        <option value="2A">2A</option>
                                        <option value="2B">2B</option>
                                        <option value="3A">3A</option>
                                        <option value="3B">3B</option>
                                        <option value="4A">4A</option>
                                        <option value="4B">4B</option>
                                        <option value="N/E">N/E</option>
                                        <option value="F/G">F/G</option>
                                        <option value="F/M">F/M</option>
                                        <option value="F/T">F/T</option>
                                        <option value="S/A">S/A</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <label class="control-label" for="tmtlama">TMT Lama</label>
                                    <input type="date" name="tmtlama" id="tmtlama" class="form-control"
                                           placeholder="yyyy-mm-dd" required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <label class="control-label" for="eselonbaru">Eselon Baru</label>
                                    <select id="eselonbaru" name="eselonbaru" data-live-search="true"
                                            class="form-control selectpicker" title="-- Pilih --" required>
                                        <option value="2A">2A</option>
                                        <option value="2B">2B</option>
                                        <option value="3A">3A</option>
                                        <option value="3B">3B</option>
                                        <option value="4A">4A</option>
                                        <option value="4B">4B</option>
                                        <option value="N/E">N/E</option>
                                        <option value="F/G">F/G</option>
                                        <option value="F/M">F/M</option>
                                        <option value="F/T">F/T</option>
                                        <option value="S/A">S/A</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <label class="control-label" for="tmtbaru">TMT Baru</label>
                                    <input type="date" name="tmtbaru" id="tmtbaru" class="form-control"
                                           placeholder="yyyy-mm-dd" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="control-label" for="gajilama">Gaji Lama</label>
                                    <input class="form-control" type="number" id="gajilama" name="gajilama"
                                           placeholder="0" min="0" max="99999999999999999999" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="control-label" for="gajibaru">Gaji Baru</label>
                                    <input class="form-control" type="number" id="gajibaru" name="gajibaru"
                                           placeholder="0" min="0" max="99999999999999999999" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <label class="control-label" for="masakerjatahunlama">Masa Kerja Tahun
                                        Lama</label>
                                    <input class="form-control" type="number" id="masakerjatahunlama"
                                           name="masakerjatahunlama" placeholder="0" min="0" required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <label class="control-label" for="masakerjabulanlama">Masa Kerja Bulan
                                        Lama</label>
                                    <input class="form-control" type="number" id="masakerjabulanlama"
                                           name="masakerjabulanlama" placeholder="0" min="0" required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <label class="control-label" for="masakerjatahunbaru">Masa Kerja Tahun
                                        Baru</label>
                                    <input class="form-control" type="number" id="masakerjatahunbaru"
                                           name="masakerjatahunbaru" placeholder="0" min="0" required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <label class="control-label" for="masakerjabulanbaru">Masa Kerja Bulan
                                        Baru</label>
                                    <input class="form-control" type="number" id="masakerjabulanbaru"
                                           name="masakerjabulanbaru" placeholder="0" min="0" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="control-label" for="unitkerjalama">Unit Kerja Lama</label>
                                    <select id="unitkerjalama" name="unitkerjalama" data-live-search="true"
                                            class="form-control selectpicker" title="-- Pilih --" required>
                                        @foreach( App\Model\Masterunitkerja::all() as $item)
                                            <option value="{{ $item->lokasi_bagian }}">{{ $item->namaunitkerja }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="control-label" for="unitkerjabaru">Unit Kerja Baru</label>
                                    <select id="unitkerjabaru" name="unitkerjabaru" data-live-search="true"
                                            class="form-control selectpicker" title="-- Pilih --" required>
                                        @foreach( App\Model\Masterunitkerja::all() as $item)
                                            <option value="{{ $item->lokasi_bagian }}">{{ $item->namaunitkerja }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @else
        <form method="post" id="form-verify-mutasi" action="{{route('verify.riwayat-mutasi')}}">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <input type="hidden" name="id">
            <input type="hidden" name="status">
            <input type="hidden" name="userpengusul" value="{{Auth::user()->username}}">
        </form>
    @endif
@endsection
@push('script')
    <script>
        @if($level == 7)
        $('.btn_mutasi').on('click', function () {
            $("#riwayatMutasiModal .modal-title").text('Form Pengajuan Mutasi');
            $("#form-riwayat-mutasi button[type=submit]").text('Submit');
            $("#form-riwayat-mutasi").attr('action', '{{route('create.riwayat-mutasi')}}');

            $("#nip").val('{{Auth::user()->username}}');
            $("#nama").val('{{$bio != "" ? $bio->nama : ''}}');
            $("#method").val('POST');
            $("#id, #jeniskenaikan, #alasanmutasi, #pertimbangan, #nipatasan, #minit, #tglditetapkan, #nosk, #tglsk, #nobkn, #tglbkn, #jabatanlama, #jabatanbaru, #tmtlama, #tmtbaru, #gajilama, #gajibaru, #masakerjatahunlama, #masakerjabulanlama, #masakerjatahunbaru, #masakerjabulanbaru").val('');
            $("#pangkatgolonganlama, #pangkatgolonganbaru, #eselonlama, #eselonbaru, #unitkerjalama, #unitkerjabaru").val('').selectpicker('refresh');

            $("#riwayatMutasiModal").modal('show');
        });

        function editRiwayatMutasi(id, nip, nama, jeniskenaikan, alasanmutasi, pertimbangan, nipatasan, minit, tglditetapkan, nosk, tglsk, nobkn, tglbkn, jabatanlama, jabatanbaru, tmtlama, tmtbaru, gajilama, gajibaru, masakerjatahunlama, masakerjabulanlama, masakerjatahunbaru, masakerjabulanbaru, pangkatgolonganlama, pangkatgolonganbaru, eselonlama, eselonbaru, unitkerjalama, unitkerjabaru) {
            $("#riwayatMutasiModal .modal-title").text('Edit Data Mutasi');
            $("#form-riwayat-mutasi button[type=submit]").text('Save Changes');
            $("#form-riwayat-mutasi").attr('action', '{{route('update.riwayat-mutasi')}}');

            $("#method").val('PUT');
            $("#id").val(id);
            $("#nip").val(nip);
            $("#nama").val(nama);
            $("#jeniskenaikan").val(jeniskenaikan);
            $("#alasanmutasi").val(alasanmutasi);
            $("#pertimbangan").val(pertimbangan);
            $("#nipatasan").val(nipatasan);
            $("#minit").val(minit);
            $("#tglditetapkan").val(tglditetapkan);
            $("#nosk").val(nosk);
            $("#tglsk").val(tglsk);
            $("#nobkn").val(nobkn);
            $("#tglbkn").val(tglbkn);
            $("#jabatanlama").val(jabatanlama);
            $("#jabatanbaru").val(jabatanbaru);
            $("#tmtlama").val(tmtlama);
            $("#tmtbaru").val(tmtbaru);
            $("#gajilama").val(gajilama);
            $("#gajibaru").val(gajibaru);
            $("#masakerjatahunlama").val(masakerjatahunlama);
            $("#masakerjabulanlama").val(masakerjabulanlama);
            $("#masakerjatahunbaru").val(masakerjatahunbaru);
            $("#masakerjabulanbaru").val(masakerjabulanbaru);
            $("#pangkatgolonganlama").val(pangkatgolonganlama).selectpicker('refresh');
            $("#pangkatgolonganbaru").val(pangkatgolonganbaru).selectpicker('refresh');
            $("#eselonlama").val(eselonlama).selectpicker('refresh');
            $("#eselonbaru").val(eselonbaru).selectpicker('refresh');
            $("#unitkerjalama").val(unitkerjalama).selectpicker('refresh');
            $("#unitkerjabaru").val(unitkerjabaru).selectpicker('refresh');

            $("#riwayatMutasiModal").modal('show');
        }

        @else
        function verifyMutasi(id, nip, status) {
            var color = status == 'DISETUJUI' ? '#26B99A' : '#fa5555',
                string = status == 'DISETUJUI' ? 'MENYETUJUI' : 'MENOLAK';

            swal({
                title: 'Verifikasi Mutasi',
                text: "Apakah Anda yakin " + string + " usulan mutasi [" + nip + "]? Anda tidak dapat mengembalikannya!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: color,
                confirmButtonText: 'Ya, saya yakin!',
                showLoaderOnConfirm: true,

                preConfirm: function () {
                    return new Promise(function (resolve) {
                        $("#form-verify-mutasi input[name=id]").val(id);
                        $("#form-verify-mutasi input[name=status]").val(status);
                        $("#form-verify-mutasi")[0].submit();
                    });
                },
                allowOutsideClick: false
            });
        }
        @endif

        function berkasMutasi(id, nip, status, check, url) {
            @if($level == 7)
            if (status == "DISETUJUI") {
                window.location.href = url;
            } else if (status == "DITOLAK") {
                swal('PERHATIAN!', 'Tidak dapat mengunggah berkas mutasi karena status usulan mutasi Anda DITOLAK.', 'warning');
            } else {
                swal('PERHATIAN!', 'Tidak dapat mengunggah berkas mutasi karena status usulan mutasi Anda saat ini sedang diproses.', 'warning');
            }

            @else
            if (status == "DISETUJUI") {
                if (check == 1) {
                    window.location.href = url;
                } else {
                    swal('PERHATIAN!', 'User [' + nip + '] belum mengunggah berkas mutasi.', 'warning');
                }
            } else if (status == "DITOLAK") {
                swal('PERHATIAN!', 'User [' + nip + '] tidak dapat mengunggah berkas mutasi karena status usulan mutasinya DITOLAK.', 'warning');
            } else {
                swal('PERHATIAN!', 'User [' + nip + '] tidak dapat mengunggah berkas mutasi karena status usulan mutasinya saat ini sedang diproses.', 'warning');
            }
            @endif
        }
    </script>
@endpush