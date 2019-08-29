@extends('layouts.master_admin')
@section('tittle', 'Riwayat Mutasi')
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
                            <h2>Riwayat Mutasi</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table id="myDataTable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th><input type="checkbox" id="check-all" class="flat"></th>
                                    <th>NIP</th>
                                    <th>Lokasi Bagian</th>
                                    <th>Nama Pegawai - NIP</th>
                                    <th>Jabatan</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Pendidikan</th>
                                    <th>Tgl Lahir</th>
                                    <th>Tempat Tugas</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>

                                <tbody>
                                @php $no = 1; @endphp
                                @foreach ($data as $value)
                                    <tr>
                                        <td class="a-center" style="vertical-align: middle" align="center">
                                            <input type="checkbox" class="flat">
                                        </td>
                                        <td style="vertical-align: middle;text-align: center">{{ $value->nip }}</td>
                                        <td style="vertical-align: middle;text-align: center">{{ $value->lokasi_bagian }}</td>
                                        <td style="vertical-align: middle"> {{ $value->gelar_depan.' '.$value->nama.'
                    '.$value->gelar_belakang }}<br>{{ $value->nip }}</td>
                                        <td style="vertical-align: middle"> {{ $value->jabatan }} </td>
                                        <td style="vertical-align: middle"> {{ $value->jenis_kelamin }} </td>
                                        <td style="vertical-align: middle"> {{ $value->pendidikan }} </td>
                                        <td style="vertical-align: middle"> {{ $value->tgl_lahir }} </td>
                                        <td style="vertical-align: middle"> {{ $value->tempat_tugas }} </td>
                                        <td style="vertical-align: middle">
                                            <div class="btn-group">
                                                <a href="{{ route('showpegawai',$id=$value->nip) }}"
                                                   class="btn btn-info btn-sm"
                                                   data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                <a type="submit" href="{{ route('editpegawai',$id=$value->id) }}"
                                                   class="btn btn-warning btn-sm"
                                                   data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                                                <a href="{{ route('printpegawai',$id=$value->nip) }}"
                                                   class="btn btn-success btn-sm" target="_blank"
                                                   data-toggle="tooltip" title="Print"><i class="fa fa-print"></i></a>
                                            </div>
                                            <hr style="margin: .5em 0">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                        data-toggle="dropdown">
                                                    Data Riwayat <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="javascript:void(0)"
                                                           onclick="riwayatModal('{{ $value->getDataAnak }}','Anak','{{ $value->nip }}')">Anak</a>
                                                    </li>
                                                    <li><a href="javascript:void(0)"
                                                           onclick="riwayatModal('{{ $value->getRiwayatbahasa }}','Bahasa','{{ $value->nip }}')">Bahasa</a>
                                                    </li>
                                                    <li><a href="javascript:void(0)"
                                                           onclick="riwayatModal('{{ $value->getRiwayatcuti }}','Cuti','{{ $value->nip }}')">Cuti</a>
                                                    </li>
                                                    <li><a href="javascript:void(0)"
                                                           onclick="riwayatModal('{{ $value->getRiwayatdiklat }}','Diklat','{{ $value->nip }}')">Diklat</a>
                                                    </li>
                                                    <li><a href="javascript:void(0)"
                                                           onclick="riwayatModal('{{ $value->getRiwayatgaji }}','Gaji','{{ $value->nip }}')">Gaji</a>
                                                    </li>
                                                    <li><a href="javascript:void(0)"
                                                           onclick="riwayatModal('{{ $value->getRiwayathukuman }}','Hukuman','{{ $value->nip }}')">Hukuman</a>
                                                    </li>
                                                    <li><a href="javascript:void(0)"
                                                           onclick="riwayatModal('{{ $value->getRiwayatjabatan }}','Jabatan','{{ $value->nip }}')">Jabatan</a>
                                                    </li>
                                                    <li><a href="javascript:void(0)"
                                                           onclick="riwayatModal('{{ $value->getRiwayatkursus }}','Kursus','{{ $value->nip }}')">Kursus</a>
                                                    </li>
                                                    <li><a href="javascript:void(0)"
                                                           onclick="riwayatModal('{{ $value->getRiwayatorganisasi }}','Organisasi','{{ $value->nip }}')">Organisasi</a>
                                                    </li>
                                                    <li><a href="javascript:void(0)"
                                                           onclick="riwayatModal('{{ $value->getRiwayatpangkat }}','Pangkat','{{ $value->nip }}')">Pangkat</a>
                                                    </li>
                                                    <li><a href="javascript:void(0)"
                                                           onclick="riwayatModal('{{ $value->getRiwayatpenataran }}','Penataran','{{ $value->nip }}')">Penataran</a>
                                                    </li>
                                                    <li><a href="javascript:void(0)"
                                                           onclick="riwayatModal('{{ $value->getRiwayatpendidikan }}','Pendidikan','{{ $value->nip }}')">Pendidikan</a>
                                                    </li>
                                                    <li><a href="javascript:void(0)"
                                                           onclick="riwayatModal('{{ $value->getRiwayatpenghargaan }}','Penghargaan','{{ $value->nip }}')">Penghargaan</a>
                                                    </li>
                                                    <li><a href="javascript:void(0)"
                                                           onclick="riwayatModal('{{ $value->getRiwayatpenugasan }}','Penugasan','{{ $value->nip }}')">Penugasan</a>
                                                    </li>
                                                    <li><a href="javascript:void(0)"
                                                           onclick="riwayatModal('{{ $value->getRiwayatseminar }}','Seminar','{{ $value->nip }}')">Seminar</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="row form-group">
                                <div class="col-sm-4" id="action-btn">
                                    <div class="btn-group" style="float: right">
                                        <a href="{{route('tambah.pegawai')}}" class="btn btn-primary btn-sm" style="font-weight: 600">
                                            <i class="fa fa-plus"></i>&ensp;TAMBAH
                                        </a>
                                        <button id="btn_pdf" type="button" class="btn btn-info btn-sm"
                                                style="font-weight: 600">
                                            <i class="fa fa-print"></i>&ensp;CETAK
                                        </button>
                                        <button id="btn_remove_app" type="button" class="btn btn-danger btn-sm"
                                                style="font-weight: 600">
                                            <i class="fa fa-trash"></i>&ensp;HAPUS
                                        </button>
                                    </div>
                                </div>
                                <form method="post" id="form-biodata">
                                    {{csrf_field()}}
                                    <input id="bio_ids" type="hidden" name="bio_ids">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- RIWAYAT MODAL --}}
    <div id="riwayatModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <table class="table table-hover">
                        <thead></thead>
                        <tbody></tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- ANAK MODAL --}}
    <div id="anakModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <form id="form-anak" action="{{ route('create.data-anak') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method">
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col-lg-12">
                                <label for="nip" class="control-label">NIP</label>
                                <input type="text" class="form-control" name="nip" readonly>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-8">
                                <label for="namaanak" class="control-label">Nama Anak</label>
                                <input type="text" class="form-control" id="namaanak" name="namaanak"
                                       placeholder="Nama anak" required>
                            </div>
                            <div class="col-lg-4">
                                <label for="jeniskelaminanak" class="control-label">Jenis Kelamin Anak</label>
                                <p>
                                    Laki-laki:
                                    <input type="radio" class="flat" name="jeniskelaminanak" id="male" value="Laki-laki"
                                           required> Perempuan:
                                    <input type="radio" class="flat" name="jeniskelaminanak" id="female"
                                           value="Perempuan">
                                </p>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-8">
                                <label for="tempatlahiranak" class="control-label">Tempat Lahir Anak</label>
                                <input type="text" class="form-control" id="tempatlahiranak" name="tempatlahiranak"
                                       placeholder="Tempat lahir anak" required>
                            </div>
                            <div class="col-lg-4">
                                <label for="tgllahiranak" class="control-label">Tanggal Lahir Anak</label>
                                <input type="date" class="form-control" id="tgllahiranak" name="tgllahiranak"
                                       placeholder="yyyy-mm-dd" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-4">
                                <label for="pendidikanumumanak" class="control-label">Pendidikan Umum Anak</label>
                                <select id="pendidikanumumanak" data-live-search="true"
                                        class="form-control selectpicker" name="pendidikanumumanak" title="-- Pilih --"
                                        required>
                                    <option value="TK">TK</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SLTA">SLTA</option>
                                    <option value="Diploma I">Diploma I</option>
                                    <option value="Diploma II">Diploma II</option>
                                    <option value="Diploma III">Diploma III</option>
                                    <option value="Diploma IV">Diploma IV</option>
                                    <option value="Sarjana">Sarjana</option>
                                    <option value="Pasca Sarjana">Pasca Sarjana</option>
                                    <option value="Doktor">Doktor</option>
                                    <option value="Tidak Jelas">Tidak Jelas</option>
                                </select>
                            </div>
                            <div class="col-lg-8">
                                <label for="pekerjaananak" class="control-label">Pekerjaan Anak</label>
                                <input type="text" class="form-control" id="pekerjaananak" name="pekerjaananak"
                                       placeholder="Pekerjaan anak" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="statuskeluargaanak" class="control-label">Status Keluarga Anak</label>
                                <p>
                                    Belum Menikah:
                                    <input type="radio" class="flat" name="statuskeluargaanak" id="lajang"
                                           value="Belum Menikah" required> Menikah:
                                    <input type="radio" class="flat" name="statuskeluargaanak" id="menikah"
                                           value="Menikah">
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <label for="statustunjangananak" class="control-label">Status Tunjangan Anak</label>
                                <p>
                                    Tidak Ada:
                                    <input type="radio" class="flat" name="statustunjangananak" id="tidakada"
                                           value="Tidak Ada" required> Ada:
                                    <input type="radio" class="flat" name="statustunjangananak" id="ada" value="Ada">
                                </p>
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

    {{-- BAHASA MODAL --}}
    <div id="bahasaModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <form id="form-bahasa" action="{{ route('create.data-bahasa') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method">
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col-lg-12">
                                <label for="nip" class="control-label">NIP</label>
                                <input type="text" class="form-control" name="nip" readonly>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-8">
                                <label for="namabahasa_daerah" class="control-label">Nama Bahasa Daerah</label>
                                <input type="text" class="form-control" id="namabahasa_daerah" name="namabahasa_daerah"
                                       placeholder="Nama Bahasa Daerah" required>
                            </div>
                            <div class="col-lg-4">
                                <label for="kemampuanbicara_daerah" class="control-label">Kemampuan Bicara</label>
                                <select id="kemampuanbicara_daerah" data-live-search="true"
                                        class="form-control selectpicker" name="kemampuanbicara_daerah"
                                        title="-- Pilih --" required>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Sedang">Sedang</option>
                                    <option value="Kurang">Kurang</option>
                                    <option value="Sangat Kurang">Sangat Kurang</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-8">
                                <label for="namabahasa_asing" class="control-label">Nama Bahasa Asing</label>
                                <input type="text" class="form-control" id="namabahasa_asing" name="namabahasa_asing"
                                       placeholder="Nama Bahasa Asing" required>
                            </div>
                            <div class="col-lg-4">
                                <label for="kemampuanbicara_asing" class="control-label">Kemampuan Bicara</label>
                                <select id="kemampuanbicara_asing" data-live-search="true"
                                        class="form-control selectpicker" name="kemampuanbicara_asing"
                                        title="-- Pilih --" required>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Sedang">Sedang</option>
                                    <option value="Kurang">Kurang</option>
                                    <option value="Sangat Kurang">Sangat Kurang</option>
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

    {{-- CUTI MODAL --}}
    <div id="cutiModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <form id="form-cuti" action="{{ route('create.data-cuti') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method">
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col-lg-12">
                                <label for="nip" class="control-label">NIP</label>
                                <input type="text" class="form-control" name="nip" readonly>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="jeniscuti" class="control-label">Jenis Cuti</label>
                                <input type="text" class="form-control" id="jeniscuti" name="jeniscuti"
                                       placeholder="Jenis Cuti" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="alasancuti" class="control-label">Alasan Cuti</label>
                                <input type="text" class="form-control" id="alasancuti" name="alasancuti"
                                       placeholder="Alasan Cuti" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="alamatcuti" class="control-label">Alamat Cuti</label>
                                <input type="text" class="form-control" id="alamatcuti" name="alamatcuti"
                                       placeholder="Alamat Cuti" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="telpcuti" class="control-label">Telepon</label>
                                <input type="text" class="form-control" id="telpcuti" name="telpcuti"
                                       placeholder="Telepon" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="tglmulai" class="control-label">Tanggal Mulai</label>
                                <input type="date" class="form-control" id="tglmulai" name="tglmulai"
                                       placeholder="yyyy-mm-dd" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="tglselesai" class="control-label">Tanggal Selesai</label>
                                <input type="date" class="form-control" id="tglselesai" name="tglselesai"
                                       placeholder="yyyy-mm-dd" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-8">
                                <label for="nosk" class="control-label">No. SK</label>
                                <input type="text" class="form-control" id="nosk" name="nosk" placeholder="No. SK"
                                       required>
                            </div>
                            <div class="col-lg-4">
                                <label for="tglsk" class="control-label">Tanggal SK</label>
                                <input type="date" class="form-control" id="tglsk" name="tglsk" placeholder="yyyy-mm-dd"
                                       required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="pangkatsaatitu" class="control-label">Pangkat Saat Cuti</label>
                                <select id="pangkatsaatitu" data-live-search="true" class="form-control selectpicker"
                                        name="pangkatsaatitu" title="-- Pilih --" required>
                                    <option value="Juru I/c">Juru I/c</option>
                                    <option value="Juru Muda I/a">Juru Muda I/a</option>
                                    <option value="Juru Muda TK.I I/b">Juru Muda TK.I I/b</option>
                                    <option value="Juru TK.I I/d">Juru TK.I I/d</option>
                                    <option value="Pembina IV/a">Pembina IV/a</option>
                                    <option value="Pembina Tk.I IV/b">Pembina Tk.I IV/b</option>
                                    <option value="Pembina Utama IV/e">Pembina Utama IV/e</option>
                                    <option value="Pembina Utama Madya IV/d">Pembina Utama Madya IV/d</option>
                                    <option value="Pembina Utama Muda IV/c">Pembina Utama Muda IV/c</option>
                                    <option value="Penata III/c">Penata III/c</option>
                                    <option value="Penata Muda III/a">Penata Muda III/a</option>
                                    <option value="Penata Muda Tk.I III/b">Penata Muda Tk.I III/b</option>
                                    <option value="Penata TK.I III/d">Penata TK.I III/d</option>
                                    <option value="Pengatur II/c">Pengatur II/c</option>
                                    <option value="Pengatur Muda II/a">Pengatur Muda II/a</option>
                                    <option value="Pengatur Muda Tk.I II/b">Pengatur Muda Tk.I II/b</option>
                                    <option value="Pengatur Tk.I II/d">Pengatur Tk.I II/d</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="jabatansaatitu" class="control-label">Jabatan Saaat Cuti</label>
                                <input type="text" class="form-control" id="jabatansaatitu" name="jabatansaatitu"
                                       placeholder="Jabatan Saat Cuti" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="eselonsaatitu" class="control-label">Eselon Saat Cuti</label>
                                <select id="eselonsaatitu" data-live-search="true" class="form-control selectpicker"
                                        name="eselonsaatitu" title="-- Pilih --" required>
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
                            <div class="col-lg-6">
                                <label for="unitkerjasaatitu" class="control-label">Unit Kerja Saaat Cuti</label>
                                <input type="text" class="form-control" id="unitkerjasaatitu" name="unitkerjasaatitu"
                                       placeholder="Unit Kerja Saat Cuti" required>
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

    {{-- DIKLAT MODAL  --}}
    <div id="diklatModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <form id="form-diklat" action="{{ route('create.data-diklat') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method">
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col-lg-12">
                                <label for="nip" class="control-label">NIP</label>
                                <input type="text" class="form-control" name="nip" readonly>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="jenisdiklat" class="control-label">Jenis Diklat</label>
                                <select id="jenisdiklat" data-live-search="true" class="form-control selectpicker"
                                        name="jenisdiklat" title="-- Pilih --" required>
                                    <option value="Teknis">Teknis</option>
                                    <option value="Fungsional">Fungsional</option>
                                    <option value="Struktural">Struktural</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="namadiklat" class="control-label">Nama Diklat</label>
                                <input type="text" class="form-control" id="namadiklat" name="namadiklat"
                                       placeholder="Nama Diklat" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="tempatdiklat" class="control-label">Tempat Diklat</label>
                                <input type="text" class="form-control" id="tempatdiklat" name="tempatdiklat"
                                       placeholder="Jenis Diklat" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="penyelenggara" class="control-label">Penyelenggara</label>
                                <input type="text" class="form-control" id="penyelenggara" name="penyelenggara"
                                       placeholder="Penyelenggara" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="angkatan" class="control-label">Angkatan</label>
                                <input type="text" class="form-control" id="angkatan" name="angkatan"
                                       placeholder="Angkatan" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="lamajamdiklat" class="control-label">Lama Jam Diklat</label>
                                <input type="text" class="form-control" id="lamajamdiklat" name="lamajamdiklat"
                                       placeholder="Lama Jam Diklat" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="tglmulai" class="control-label">Tanggal Mulai</label>
                                <input type="date" class="form-control" id="tglmulai" name="tglmulai"
                                       placeholder="yyyy-mm-dd" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="tglselesai" class="control-label">Tanggal Selesai</label>
                                <input type="date" class="form-control" id="tglselesai" name="tglselesai"
                                       placeholder="yyyy-mm-dd" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-8">
                                <label for="nosk" class="control-label">No. SK</label>
                                <input type="text" class="form-control" id="nosk" name="nosk" placeholder="No. SK"
                                       required>
                            </div>
                            <div class="col-lg-4">
                                <label for="tglsk" class="control-label">Tanggal SK</label>
                                <input type="date" class="form-control" id="tglsk" name="tglsk" placeholder="yyyy-mm-dd"
                                       required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-8">
                                <label for="nosertifikat" class="control-label">No. Sertifikat</label>
                                <input type="text" class="form-control" id="nosertifikat" name="nosertifikat"
                                       placeholder="No. SK"
                                       required>
                            </div>
                            <div class="col-lg-4">
                                <label for="tglsertifikat" class="control-label">Tanggal Sertifikat</label>
                                <input type="date" class="form-control" id="tglsertifikat" name="tglsertifikat"
                                       placeholder="yyyy-mm-dd"
                                       required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="pangkatsaatitu" class="control-label">Pangkat Saat Diklat</label>
                                <select data-live-search="true" class="form-control selectpicker"
                                        name="pangkatsaatitu" title="-- Pilih --" required>
                                    <option value="Juru I/c">Juru I/c</option>
                                    <option value="Juru Muda I/a">Juru Muda I/a</option>
                                    <option value="Juru Muda TK.I I/b">Juru Muda TK.I I/b</option>
                                    <option value="Juru TK.I I/d">Juru TK.I I/d</option>
                                    <option value="Pembina IV/a">Pembina IV/a</option>
                                    <option value="Pembina Tk.I IV/b">Pembina Tk.I IV/b</option>
                                    <option value="Pembina Utama IV/e">Pembina Utama IV/e</option>
                                    <option value="Pembina Utama Madya IV/d">Pembina Utama Madya IV/d</option>
                                    <option value="Pembina Utama Muda IV/c">Pembina Utama Muda IV/c</option>
                                    <option value="Penata III/c">Penata III/c</option>
                                    <option value="Penata Muda III/a">Penata Muda III/a</option>
                                    <option value="Penata Muda Tk.I III/b">Penata Muda Tk.I III/b</option>
                                    <option value="Penata TK.I III/d">Penata TK.I III/d</option>
                                    <option value="Pengatur II/c">Pengatur II/c</option>
                                    <option value="Pengatur Muda II/a">Pengatur Muda II/a</option>
                                    <option value="Pengatur Muda Tk.I II/b">Pengatur Muda Tk.I II/b</option>
                                    <option value="Pengatur Tk.I II/d">Pengatur Tk.I II/d</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="jabatansaatitu" class="control-label">Jabatan Saaat Diklat</label>
                                <input type="text" class="form-control" id="jabatansaatitu" name="jabatansaatitu"
                                       placeholder="Jabatan Saat Cuti" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="eselonsaatitu" class="control-label">Eselon Saat Diklat</label>
                                <select data-live-search="true" class="form-control selectpicker"
                                        name="eselonsaatitu" title="-- Pilih --" required>
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
                            <div class="col-lg-6">
                                <label for="unitkerjasaatitu" class="control-label">Unit Kerja Saaat Diklat</label>
                                <input type="text" class="form-control" id="unitkerjasaatitu" name="unitkerjasaatitu"
                                       placeholder="Unit Kerja Saat Cuti" required>
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

    {{-- GAJI MODAL  --}}
    <div id="gajiModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <form id="form-gaji" action="{{ route('create.data-gaji') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method">
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col-lg-12">
                                <label for="nip" class="control-label">NIP</label>
                                <input type="text" class="form-control" name="nip" readonly>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="nosurat" class="control-label">No. Surat</label>
                                <input type="text" class="form-control" name="nosurat"
                                       placeholder="No. Surat" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="tglsurat" class="control-label">Tanggal Surat</label>
                                <input type="date" class="form-control" id="tglsurat" name="tglsurat"
                                       placeholder="yyyy-mm-dd" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="tmtkgb" class="control-label">Tamat KGB</label>
                                <input type="date" class="form-control" id="tmtkgb" name="tmtkgb"
                                       placeholder="yyyy-mm-dd" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="masakerja" class="control-label">Masa Kerja</label>
                                <input type="text" class="form-control" id="masakerja" name="masakerja"
                                       placeholder="Masa Kerja" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="gaji" class="control-label">Gaji</label>
                                <input type="text" class="form-control" id="gaji" name="gaji"
                                       placeholder="Gaji" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="pangkatsaatitu" class="control-label">Pangkat Saat Gaji</label>
                                <select data-live-search="true" class="form-control selectpicker"
                                        name="pangkatsaatitu" title="-- Pilih --" required>
                                    <option value="Juru I/c">Juru I/c</option>
                                    <option value="Juru Muda I/a">Juru Muda I/a</option>
                                    <option value="Juru Muda TK.I I/b">Juru Muda TK.I I/b</option>
                                    <option value="Juru TK.I I/d">Juru TK.I I/d</option>
                                    <option value="Pembina IV/a">Pembina IV/a</option>
                                    <option value="Pembina Tk.I IV/b">Pembina Tk.I IV/b</option>
                                    <option value="Pembina Utama IV/e">Pembina Utama IV/e</option>
                                    <option value="Pembina Utama Madya IV/d">Pembina Utama Madya IV/d</option>
                                    <option value="Pembina Utama Muda IV/c">Pembina Utama Muda IV/c</option>
                                    <option value="Penata III/c">Penata III/c</option>
                                    <option value="Penata Muda III/a">Penata Muda III/a</option>
                                    <option value="Penata Muda Tk.I III/b">Penata Muda Tk.I III/b</option>
                                    <option value="Penata TK.I III/d">Penata TK.I III/d</option>
                                    <option value="Pengatur II/c">Pengatur II/c</option>
                                    <option value="Pengatur Muda II/a">Pengatur Muda II/a</option>
                                    <option value="Pengatur Muda Tk.I II/b">Pengatur Muda Tk.I II/b</option>
                                    <option value="Pengatur Tk.I II/d">Pengatur Tk.I II/d</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="jabatansaatitu" class="control-label">Jabatan Saaat Gaji</label>
                                <input type="text" class="form-control" name="jabatansaatitu"
                                       placeholder="Jabatan Saat Gaji" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="eselonsaatitu" class="control-label">Eselon Saat Gaji</label>
                                <select id="eselonsaatitu" data-live-search="true" class="form-control selectpicker"
                                        name="eselonsaatitu" title="-- Pilih --" required>
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
                            <div class="col-lg-6">
                                <label for="unitkerjasaatitu" class="control-label">Unit Kerja Saaat Gaji</label>
                                <input type="text" class="form-control" name="unitkerjasaatitu"
                                       placeholder="Unit Kerja Saat Gaji" required>
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

    {{-- HUKUMAN MODAL  --}}
    <div id="hukumanModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <form id="form-hukuman" action="{{ route('create.data-hukuman') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method">
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col-lg-12">
                                <label for="nip" class="control-label">NIP</label>
                                <input type="text" class="form-control" name="nip" readonly>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="jenishukuman" class="control-label">Jenis Hukuman</label>
                                <input type="text" class="form-control" id="jenishukuman" name="jenishukuman"
                                       placeholder="Jenis Hukuman" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="namahukuman" class="control-label">Nama Hukuman</label>
                                <input type="text" class="form-control" id="namahukuman" name="namahukuman"
                                       placeholder="Jenis Hukuman" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-4">
                                <label for="sanksi" class="control-label">Sanksi</label>
                                <input type="text" class="form-control" id="sanksi" name="sanksi"
                                       placeholder="Sanksi" required>
                            </div>
                            <div class="col-lg-4">
                                <label for="nosk" class="control-label">No.SK</label>
                                <input type="text" class="form-control" name="nosk"
                                       placeholder="No.SK" required>
                            </div>
                            <div class="col-lg-4">
                                <label for="tglsk" class="control-label">Tanggal SK</label>
                                <input type="date" class="form-control" name="tglsk"
                                       placeholder="yyyy-mm-dd" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="pangkatsaatitu" class="control-label">Pangkat Saat Cuti</label>
                                <select data-live-search="true" class="form-control selectpicker"
                                        name="pangkatsaatitu" title="-- Pilih --" required>
                                    <option value="Juru I/c">Juru I/c</option>
                                    <option value="Juru Muda I/a">Juru Muda I/a</option>
                                    <option value="Juru Muda TK.I I/b">Juru Muda TK.I I/b</option>
                                    <option value="Juru TK.I I/d">Juru TK.I I/d</option>
                                    <option value="Pembina IV/a">Pembina IV/a</option>
                                    <option value="Pembina Tk.I IV/b">Pembina Tk.I IV/b</option>
                                    <option value="Pembina Utama IV/e">Pembina Utama IV/e</option>
                                    <option value="Pembina Utama Madya IV/d">Pembina Utama Madya IV/d</option>
                                    <option value="Pembina Utama Muda IV/c">Pembina Utama Muda IV/c</option>
                                    <option value="Penata III/c">Penata III/c</option>
                                    <option value="Penata Muda III/a">Penata Muda III/a</option>
                                    <option value="Penata Muda Tk.I III/b">Penata Muda Tk.I III/b</option>
                                    <option value="Penata TK.I III/d">Penata TK.I III/d</option>
                                    <option value="Pengatur II/c">Pengatur II/c</option>
                                    <option value="Pengatur Muda II/a">Pengatur Muda II/a</option>
                                    <option value="Pengatur Muda Tk.I II/b">Pengatur Muda Tk.I II/b</option>
                                    <option value="Pengatur Tk.I II/d">Pengatur Tk.I II/d</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="jabatansaatitu" class="control-label">Jabatan Saaat Hukuman</label>
                                <input type="text" class="form-control" name="jabatansaatitu"
                                       placeholder="Jabatan Saat Hukuman" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="eselonsaatitu" class="control-label">Eselon Saat Hukuman</label>
                                <select data-live-search="true" class="form-control selectpicker"
                                        name="eselonsaatitu" title="-- Pilih --" required>
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
                            <div class="col-lg-6">
                                <label for="unitkerjasaatitu" class="control-label">Unit Kerja Saaat Hukuman</label>
                                <input type="text" class="form-control" name="unitkerjasaatitu"
                                       placeholder="Unit Kerja Saat Hukuman" required>
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

    {{-- JABATAN MODAL  --}}
    <div id="jabatanModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <form id="form-jabatan" action="{{ route('create.data-jabatan') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method">
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col-lg-12">
                                <label for="nip" class="control-label">NIP</label>
                                <input type="text" class="form-control" name="nip" readonly>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="jenisjabatan" class="control-label">Jenis Jabatan</label>
                                <input type="text" class="form-control" id="jenisjabatan" name="jenisjabatan"
                                       placeholder="Jenis Jabatan" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="namajabatan" class="control-label">Nama Jabatan</label>
                                <input type="text" class="form-control" id="namajabatan" name="namajabatan"
                                       placeholder="Nama Jabatan" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="nosurat" class="control-label">No. Surat</label>
                                <input type="text" class="form-control" name="nosurat"
                                       placeholder="No. Surat" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="tmt" class="control-label">TMT Jabatan</label>
                                <input type="date" class="form-control" id="tmt" name="tmt"
                                       placeholder="yyyy-mm-dd" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="pejabat" class="control-label">Pejabat Pengesah</label>
                                <input type="text" class="form-control" id="pejabat" name="pejabat"
                                       placeholder="Pejabat Pengesah" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="eselon" class="control-label">Eselon</label>
                                <select id="eselon" data-live-search="true" class="form-control selectpicker"
                                        name="eselon" title="-- Pilih --" required>
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
                        </div>

                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="jenismutasi" class="control-label">Jenis Mutasi</label>
                                <input type="text" class="form-control" id="jenismutasi" name="jenismutasi"
                                       placeholder="Jenis Mutasi" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="unitkerja" class="control-label">Unit Kerja Saaat Jabatan</label>
                                <input type="text" class="form-control" id="unitkerja" name="unitkerja"
                                       placeholder="Unit Kerja Saat Jabatan" required>
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

    {{-- KURSUS MODAL  --}}
    <div id="kursusModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <form id="form-kursus" action="{{ route('create.data-kursus') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method">
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col-lg-12">
                                <label for="nip" class="control-label">NIP</label>
                                <input type="text" class="form-control" name="nip" readonly>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="jeniskursus" class="control-label">Jenis Kursus</label>
                                <input type="text" class="form-control" id="jeniskursus" name="jeniskursus"
                                       placeholder="Jenis Kursus" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="namakursus" class="control-label">Nama Kursus</label>
                                <input type="text" class="form-control" id="namakursus" name="namakursus"
                                       placeholder="Nama Kursus" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="tempatkursus" class="control-label">Tempat Kursus</label>
                                <input type="text" class="form-control" id="tempatkursus" name="tempatkursus"
                                       placeholder="Tempat Kursus" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="penyelenggara" class="control-label">Penyelenggara</label>
                                <input type="text" class="form-control" name="penyelenggara"
                                       placeholder="Penyelenggara" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-4">
                                <label for="angkatan" class="control-label">Angkatan</label>
                                <input type="text" class="form-control" name="angkatan"
                                       placeholder="Angkatan" required>
                            </div>
                            <div class="col-lg-4">
                                <label for="tglmulai" class="control-label">Tanggal Mulai</label>
                                <input type="date" class="form-control" name="tglmulai"
                                       placeholder="yyyy-mm-dd" required>
                            </div>
                            <div class="col-lg-4">
                                <label for="tglselesai" class="control-label">Tanggal Selesai</label>
                                <input type="date" class="form-control" name="tglselesai"
                                       placeholder="yyyy-mm-dd" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-8">
                                <label for="nosk" class="control-label">No. SK</label>
                                <input type="text" class="form-control" name="nosk" placeholder="No. SK"
                                       required>
                            </div>
                            <div class="col-lg-4">
                                <label for="tglsk" class="control-label">Tanggal SK</label>
                                <input type="date" class="form-control" name="tglsk" placeholder="yyyy-mm-dd"
                                       required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-8">
                                <label for="nosk" class="control-label">No. Sertifikat</label>
                                <input type="text" class="form-control" name="nosertifikat"
                                       placeholder="No. Sertifikat"
                                       required>
                            </div>
                            <div class="col-lg-4">
                                <label for="tglsertifikat" class="control-label">Tanggal Sertifikat</label>
                                <input type="date" class="form-control" name="tglsertifikat"
                                       placeholder="yyyy-mm-dd"
                                       required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="pangkatsaatitu" class="control-label">Pangkat Saat Kursus</label>
                                <select data-live-search="true" class="form-control selectpicker"
                                        name="pangkatsaatitu" title="-- Pilih --" required>
                                    <option value="Juru I/c">Juru I/c</option>
                                    <option value="Juru Muda I/a">Juru Muda I/a</option>
                                    <option value="Juru Muda TK.I I/b">Juru Muda TK.I I/b</option>
                                    <option value="Juru TK.I I/d">Juru TK.I I/d</option>
                                    <option value="Pembina IV/a">Pembina IV/a</option>
                                    <option value="Pembina Tk.I IV/b">Pembina Tk.I IV/b</option>
                                    <option value="Pembina Utama IV/e">Pembina Utama IV/e</option>
                                    <option value="Pembina Utama Madya IV/d">Pembina Utama Madya IV/d</option>
                                    <option value="Pembina Utama Muda IV/c">Pembina Utama Muda IV/c</option>
                                    <option value="Penata III/c">Penata III/c</option>
                                    <option value="Penata Muda III/a">Penata Muda III/a</option>
                                    <option value="Penata Muda Tk.I III/b">Penata Muda Tk.I III/b</option>
                                    <option value="Penata TK.I III/d">Penata TK.I III/d</option>
                                    <option value="Pengatur II/c">Pengatur II/c</option>
                                    <option value="Pengatur Muda II/a">Pengatur Muda II/a</option>
                                    <option value="Pengatur Muda Tk.I II/b">Pengatur Muda Tk.I II/b</option>
                                    <option value="Pengatur Tk.I II/d">Pengatur Tk.I II/d</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="jabatansaatitu" class="control-label">Jabatan Saaat Kursus</label>
                                <input type="text" class="form-control" name="jabatansaatitu"
                                       placeholder="Jabatan Saat Cuti" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="eselonsaatitu" class="control-label">Eselon Saat Kursus</label>
                                <select data-live-search="true" class="form-control selectpicker"
                                        name="eselonsaatitu" title="-- Pilih --" required>
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
                            <div class="col-lg-6">
                                <label for="unitkerjasaatitu" class="control-label">Unit Kerja Saaat Kursus</label>
                                <input type="text" class="form-control" name="unitkerjasaatitu"
                                       placeholder="Unit Kerja Saat Cuti" required>
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

    {{-- ORGANISASI MODAL  --}}
    <div id="organisasiModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <form id="form-organisasi" action="{{ route('create.data-organisasi') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method">
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col-lg-12">
                                <label for="nip" class="control-label">NIP</label>
                                <input type="text" class="form-control" name="nip" readonly>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="jenisorganisasi" class="control-label">Jenis Organisasi</label>
                                <input type="text" class="form-control" id="jenisorganisasi" name="jenisorganisasi"
                                       placeholder="Jenis Organisasi" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="namaorganisasi" class="control-label">Nama Organisasi</label>
                                <input type="text" class="form-control" id="namaorganisasi" name="namaorganisasi"
                                       placeholder="Nama Organisasi" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="jabatanorganisasi" class="control-label">Jabatan Organisasi</label>
                                <input type="text" class="form-control" id="jabatanorganisasi" name="jabatanorganisasi"
                                       placeholder="Jabatan Organisasi" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="tglmulai" class="control-label">Tanggal Mulai</label>
                                <input type="date" class="form-control" id="tglmulai" name="tglmulai"
                                       placeholder="yyyy-mm-dd" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="tglselesai" class="control-label">Tanggal Selesai</label>
                                <input type="date" class="form-control" id="tglselesai" name="tglselesai"
                                       placeholder="yyyy-mm-dd" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="nama_pimpinan" class="control-label">Nama Pimpinan</label>
                                <input type="text" class="form-control" id="nama_pimpinan" name="nama_pimpinan"
                                       placeholder="Nama Pimpinan" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="tempatorganisasi" class="control-label">Tempat</label>
                                <input type="text" class="form-control" id="tempatorganisasi" name="tempatorganisasi"
                                       placeholder="Tempat" required>
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

    {{-- PANGKAT MODAL  --}}
    <div id="pangkatModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <form id="form-pangkat" action="{{ route('create.data-pangkat') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method">
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col-lg-12">
                                <label for="nip" class="control-label">NIP</label>
                                <input type="text" class="form-control" name="nip" readonly>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="pangkat" class="control-label">Pangkat</label>
                                <input type="text" class="form-control" id="pangkat" name="pangkat"
                                       placeholder="Pangkat" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="tmtpangkat" class="control-label">TMT Pangkat</label>
                                <input type="date" class="form-control" id="tmtpangkat" name="tmtpangkat"
                                       placeholder="yyyy-mm-dd" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="pejabat" class="control-label">Pejabat</label>
                                <input type="text" class="form-control" name="pejabat"
                                       placeholder="Pejabat" required>
                            </div>
                            <div class="col-lg-3">
                                <label for="masatahun" class="control-label">Masa</label>
                                <input type="text" class="form-control" id="masatahun" name="masatahun"
                                       placeholder="Thn" required>Tahun
                            </div>
                            <div class="col-lg-3">
                                <label for="masabulan" class="control-label"></label>
                                <input type="text" class="form-control" id="masabulan" name="masabulan"
                                       placeholder="Bln" required>Bulan
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-4">
                                <label for="gaji" class="control-label">Gaji</label>
                                <input type="text" class="form-control" name="gaji" placeholder="Gaji"
                                       required>
                            </div>
                            <div class="col-lg-4">
                                <label for="nosurat" class="control-label">No. Surat</label>
                                <input type="text" class="form-control" name="nosurat" placeholder="No. Surat"
                                       required>
                            </div>
                            <div class="col-lg-4">
                                <label for="tglsurat" class="control-label">Tanggal Surat</label>
                                <input type="date" class="form-control"  name="tglsurat" placeholder="yyyy-mm-dd"
                                       required>
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

    {{-- PENATARAN MODAL  --}}
    <div id="penataranModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <form id="form-penataran" action="{{ route('create.data-penataran') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method">
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col-lg-12">
                                <label for="nip" class="control-label">NIP</label>
                                <input type="text" class="form-control" name="nip" readonly>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="jenispenataran" class="control-label">Jenis Penataran</label>
                                <input type="text" class="form-control" id="jenispenataran" name="jenispenataran"
                                       placeholder="Jenis Penataran" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="namapenataran" class="control-label">Nama Penataran</label>
                                <input type="text" class="form-control" id="namapenataran" name="namapenataran"
                                       placeholder="Nama Penataran" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="tempatpenataran" class="control-label">Tempat Penataran</label>
                                <input type="text" class="form-control" id="tempatpenataran" name="tempatpenataran"
                                       placeholder="Tempat Penataran" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="penyelenggara" class="control-label">Penyelenggara</label>
                                <input type="text" class="form-control" id="penyelenggara" name="penyelenggara"
                                       placeholder="Penyelenggara" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-4">
                                <label for="angkatan" class="control-label">Angkatan</label>
                                <input type="text" class="form-control" id="angkatan" name="angkatan"
                                       placeholder="Angkatan" required>
                            </div>
                            <div class="col-lg-4">
                                <label for="lamajampenataran" class="control-label">Lama Penataran</label>
                                <input type="text" class="form-control" id="lamajampenataran" name="lamajampenataran"
                                       placeholder="Lama Penataran" required>Jam
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="tglmulai" class="control-label">Tanggal Mulai</label>
                                <input type="date" class="form-control" id="tglmulai" name="tglmulai"
                                       placeholder="yyyy-mm-dd" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="tglselesai" class="control-label">Tanggal Selesai</label>
                                <input type="date" class="form-control" id="tglselesai" name="tglselesai"
                                       placeholder="yyyy-mm-dd" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-8">
                                <label for="nosk" class="control-label">No. SK</label>
                                <input type="text" class="form-control" id="nosk" name="nosk" placeholder="No. SK"
                                       required>
                            </div>
                            <div class="col-lg-4">
                                <label for="tglsk" class="control-label">Tanggal SK</label>
                                <input type="date" class="form-control" id="tglsk" name="tglsk" placeholder="yyyy-mm-dd"
                                       required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-8">
                                <label for="nosk" class="control-label">No. Sertifikat</label>
                                <input type="text" class="form-control" id="nosertifikat" name="nosertifikat"
                                       placeholder="No. Sertifikat"
                                       required>
                            </div>
                            <div class="col-lg-4">
                                <label for="tglsertifikat" class="control-label">Tanggal Sertifikat</label>
                                <input type="date" class="form-control" id="tglsertifikat" name="tglsertifikat"
                                       placeholder="yyyy-mm-dd"
                                       required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="pangkatsaatitu" class="control-label">Pangkat Saat Penataran</label>
                                <select id="pangkatsaatitu" data-live-search="true" class="form-control selectpicker"
                                        name="pangkatsaatitu" title="-- Pilih --" required>
                                    <option value="Juru I/c">Juru I/c</option>
                                    <option value="Juru Muda I/a">Juru Muda I/a</option>
                                    <option value="Juru Muda TK.I I/b">Juru Muda TK.I I/b</option>
                                    <option value="Juru TK.I I/d">Juru TK.I I/d</option>
                                    <option value="Pembina IV/a">Pembina IV/a</option>
                                    <option value="Pembina Tk.I IV/b">Pembina Tk.I IV/b</option>
                                    <option value="Pembina Utama IV/e">Pembina Utama IV/e</option>
                                    <option value="Pembina Utama Madya IV/d">Pembina Utama Madya IV/d</option>
                                    <option value="Pembina Utama Muda IV/c">Pembina Utama Muda IV/c</option>
                                    <option value="Penata III/c">Penata III/c</option>
                                    <option value="Penata Muda III/a">Penata Muda III/a</option>
                                    <option value="Penata Muda Tk.I III/b">Penata Muda Tk.I III/b</option>
                                    <option value="Penata TK.I III/d">Penata TK.I III/d</option>
                                    <option value="Pengatur II/c">Pengatur II/c</option>
                                    <option value="Pengatur Muda II/a">Pengatur Muda II/a</option>
                                    <option value="Pengatur Muda Tk.I II/b">Pengatur Muda Tk.I II/b</option>
                                    <option value="Pengatur Tk.I II/d">Pengatur Tk.I II/d</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="jabatansaatitu" class="control-label">Jabatan Saaat Penataran</label>
                                <input type="text" class="form-control" id="jabatansaatitu" name="jabatansaatitu"
                                       placeholder="Jabatan Saat Cuti" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="eselonsaatitu" class="control-label">Eselon Saat Penataran</label>
                                <select id="eselonsaatitu" data-live-search="true" class="form-control selectpicker"
                                        name="eselonsaatitu" title="-- Pilih --" required>
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
                            <div class="col-lg-6">
                                <label for="unitkerjasaatitu" class="control-label">Unit Kerja Saaat Penataran</label>
                                <input type="text" class="form-control" id="unitkerjasaatitu" name="unitkerjasaatitu"
                                       placeholder="Unit Kerja Saat Penataran" required>
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

    {{-- PENDIDIKAN MODAL  --}}
    <div id="pendidikanModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <form id="form-pendidikan" action="{{ route('create.data-pendidikan') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method">
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col-lg-12">
                                <label for="nip" class="control-label">NIP</label>
                                <input type="text" class="form-control" name="nip" readonly>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="tingkatpendidikan" class="control-label">Tingkat Pendidikan</label>
                                <select id="tingkatpendidikan" data-live-search="true" class="form-control selectpicker"
                                        name="tingkatpendidikan" title="-- Pilih --" required>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA/b</option>
                                    <option value="SMK">SMK</option>
                                    <option value="D-1">D-1</option>
                                    <option value="D-2">D-2</option>
                                    <option value="D-3">D-3</option>
                                    <option value="S-1">S-1</option>
                                    <option value="S-2">S-2</option>
                                    <option value="S-3">S-3</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="jurusan" class="control-label">Jurusan</label>
                                <input type="text" class="form-control" id="jurusan" name="jurusan"
                                       placeholder="Jurusan" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="namasekolah" class="control-label">Nama Sekolah</label>
                                <input type="text" class="form-control" id="namasekolah" name="namasekolah"
                                       placeholder="Nama Sekolah" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="alamatsekolah" class="control-label">Alamat Sekolah</label>
                                <input type="text" class="form-control" id="alamatsekolah" name="alamatsekolah"
                                       placeholder="Alamat Sekolah" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="noijazah" class="control-label">No. Ijazah</label>
                                <input type="text" class="form-control" name="noijazah"
                                       placeholder="No. Ijazah" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="tglijazah" class="control-label">Tanggal Ijazah</label>
                                <input type="date" class="form-control" name="tglijazah"
                                       placeholder="yyyy-mm-dd" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="tahunmasuk" class="control-label">Tahun Masuk</label>
                                <input type="text" class="form-control" id="tahunmasuk" name="tahunmasuk"
                                       placeholder="Tahun Masuk" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="tahunlulus" class="control-label">Tahun Lulus</label>
                                <input type="text" class="form-control" id="tahunlulus" name="tahunlulus"
                                       placeholder="Tahun Lulus" required>
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

    {{-- PENGHARGAAN MODAL  --}}
    <div id="penghargaanModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <form id="form-penghargaan" action="{{ route('create.data-penghargaan') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method">
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col-lg-12">
                                <label for="nip" class="control-label">NIP</label>
                                <input type="text" class="form-control" name="nip" readonly>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="namapenghargaan" class="control-label">Nama Penghargaan</label>
                                <input type="text" class="form-control" id="namapenghargaan" name="namapenghargaan"
                                       placeholder="Nama Penghargaan" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="asal" class="control-label">Asal</label>
                                <input type="text" class="form-control" id="asal" name="asal"
                                       placeholder="Asal" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-8">
                                <label for="nosk" class="control-label">No. SK</label>
                                <input type="text" class="form-control" id="nosk" name="nosk" placeholder="No. SK"
                                       required>
                            </div>
                            <div class="col-lg-4">
                                <label for="tglsk" class="control-label">Tanggal SK</label>
                                <input type="date" class="form-control" id="tglsk" name="tglsk" placeholder="yyyy-mm-dd"
                                       required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="pangkatsaatitu" class="control-label">Pangkat Saat Penghargaan</label>
                                <select id="pangkatsaatitu" data-live-search="true" class="form-control selectpicker"
                                        name="pangkatsaatitu" title="-- Pilih --" required>
                                    <option value="Juru I/c">Juru I/c</option>
                                    <option value="Juru Muda I/a">Juru Muda I/a</option>
                                    <option value="Juru Muda TK.I I/b">Juru Muda TK.I I/b</option>
                                    <option value="Juru TK.I I/d">Juru TK.I I/d</option>
                                    <option value="Pembina IV/a">Pembina IV/a</option>
                                    <option value="Pembina Tk.I IV/b">Pembina Tk.I IV/b</option>
                                    <option value="Pembina Utama IV/e">Pembina Utama IV/e</option>
                                    <option value="Pembina Utama Madya IV/d">Pembina Utama Madya IV/d</option>
                                    <option value="Pembina Utama Muda IV/c">Pembina Utama Muda IV/c</option>
                                    <option value="Penata III/c">Penata III/c</option>
                                    <option value="Penata Muda III/a">Penata Muda III/a</option>
                                    <option value="Penata Muda Tk.I III/b">Penata Muda Tk.I III/b</option>
                                    <option value="Penata TK.I III/d">Penata TK.I III/d</option>
                                    <option value="Pengatur II/c">Pengatur II/c</option>
                                    <option value="Pengatur Muda II/a">Pengatur Muda II/a</option>
                                    <option value="Pengatur Muda Tk.I II/b">Pengatur Muda Tk.I II/b</option>
                                    <option value="Pengatur Tk.I II/d">Pengatur Tk.I II/d</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="jabatansaatitu" class="control-label">Jabatan Saaat Penghargaan</label>
                                <input type="text" class="form-control" id="jabatansaatitu" name="jabatansaatitu"
                                       placeholder="Jabatan Saat Cuti" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="eselonsaatitu" class="control-label">Eselon Saat Penghargaan</label>
                                <select id="eselonsaatitu" data-live-search="true" class="form-control selectpicker"
                                        name="eselonsaatitu" title="-- Pilih --" required>
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
                            <div class="col-lg-6">
                                <label for="unitkerjasaatitu" class="control-label">Unit Kerja Saaat Penghargaan</label>
                                <input type="text" class="form-control" id="unitkerjasaatitu" name="unitkerjasaatitu"
                                       placeholder="Unit Kerja Saat Cuti" required>
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

    {{-- PENUGASAN MODAL  --}}
    <div id="penugasanModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <form id="form-penugasan" action="{{ route('create.data-penugasan') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method">
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col-lg-12">
                                <label for="nip" class="control-label">NIP</label>
                                <input type="text" class="form-control" name="nip" readonly>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="jeniscuti" class="control-label">Jenis Penugasan</label>
                                <input type="text" class="form-control" id="jenispenugasan" name="jenispenugasan"
                                       placeholder="Jenis Penugasan" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="namapenugasan" class="control-label">Nama Penugasan</label>
                                <input type="text" class="form-control" id="namapenugasan" name="namapenugasan"
                                       placeholder="Nama Penugasan" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="tempatpenugasan" class="control-label">Tempat Penugasan</label>
                                <input type="text" class="form-control" id="tempatpenugasan" name="tempatpenugasan"
                                       placeholder="Tempat Penugasan" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="penyelenggara" class="control-label">Penyelenggara</label>
                                <input type="text" class="form-control" id="penyelenggara" name="penyelenggara"
                                       placeholder="Penyelenggara" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="tglmulai" class="control-label">Tanggal Mulai</label>
                                <input type="date" class="form-control" id="tglmulai" name="tglmulai"
                                       placeholder="yyyy-mm-dd" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="tglselesai" class="control-label">Tanggal Selesai</label>
                                <input type="date" class="form-control" id="tglselesai" name="tglselesai"
                                       placeholder="yyyy-mm-dd" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="lamajampenugasan" class="control-label">Lama Penugasan</label>
                                <input type="text" class="form-control" id="lamajampenugasan" name="lamajampenugasan"
                                       placeholder="Lama Penugasan" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="angkatan" class="control-label">Angkatan</label>
                                <input type="text" class="form-control" id="angkatan" name="angkatan"
                                       placeholder="Angkatan" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-8">
                                <label for="nosk" class="control-label">No. SK</label>
                                <input type="text" class="form-control" id="nosk" name="nosk" placeholder="No. SK"
                                       required>
                            </div>
                            <div class="col-lg-4">
                                <label for="tglsk" class="control-label">Tanggal SK</label>
                                <input type="date" class="form-control" id="tglsk" name="tglsk" placeholder="yyyy-mm-dd"
                                       required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-8">
                                <label for="nosertifikat" class="control-label">No. Sertifikat</label>
                                <input type="text" class="form-control" id="nosertifikat" name="nosertifikat"
                                       placeholder="No. SK"
                                       required>
                            </div>
                            <div class="col-lg-4">
                                <label for="tglsertifikat" class="control-label">Tanggal Sertifikat</label>
                                <input type="date" class="form-control" id="tglsertifikat" name="tglsertifikat"
                                       placeholder="yyyy-mm-dd"
                                       required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="pangkatsaatitu" class="control-label">Pangkat Saat Penugasan</label>
                                <select id="pangkatsaatitu" data-live-search="true" class="form-control selectpicker"
                                        name="pangkatsaatitu" title="-- Pilih --" required>
                                    <option value="Juru I/c">Juru I/c</option>
                                    <option value="Juru Muda I/a">Juru Muda I/a</option>
                                    <option value="Juru Muda TK.I I/b">Juru Muda TK.I I/b</option>
                                    <option value="Juru TK.I I/d">Juru TK.I I/d</option>
                                    <option value="Pembina IV/a">Pembina IV/a</option>
                                    <option value="Pembina Tk.I IV/b">Pembina Tk.I IV/b</option>
                                    <option value="Pembina Utama IV/e">Pembina Utama IV/e</option>
                                    <option value="Pembina Utama Madya IV/d">Pembina Utama Madya IV/d</option>
                                    <option value="Pembina Utama Muda IV/c">Pembina Utama Muda IV/c</option>
                                    <option value="Penata III/c">Penata III/c</option>
                                    <option value="Penata Muda III/a">Penata Muda III/a</option>
                                    <option value="Penata Muda Tk.I III/b">Penata Muda Tk.I III/b</option>
                                    <option value="Penata TK.I III/d">Penata TK.I III/d</option>
                                    <option value="Pengatur II/c">Pengatur II/c</option>
                                    <option value="Pengatur Muda II/a">Pengatur Muda II/a</option>
                                    <option value="Pengatur Muda Tk.I II/b">Pengatur Muda Tk.I II/b</option>
                                    <option value="Pengatur Tk.I II/d">Pengatur Tk.I II/d</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="jabatansaatitu" class="control-label">Jabatan Saaat Penugasan</label>
                                <input type="text" class="form-control" id="jabatansaatitu" name="jabatansaatitu"
                                       placeholder="Jabatan Saat Cuti" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="eselonsaatitu" class="control-label">Eselon Saat Penugasan</label>
                                <select id="eselonsaatitu" data-live-search="true" class="form-control selectpicker"
                                        name="eselonsaatitu" title="-- Pilih --" required>
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
                            <div class="col-lg-6">
                                <label for="unitkerjasaatitu" class="control-label">Unit Kerja Saaat Penugasan</label>
                                <input type="text" class="form-control" id="unitkerjasaatitu" name="unitkerjasaatitu"
                                       placeholder="Unit Kerja Saat Cuti" required>
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

    {{-- SEMINAR MODAL  --}}
    <div id="seminarModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <form id="form-seminar" action="{{ route('create.data-seminar') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method">
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col-lg-12">
                                <label for="nip" class="control-label">NIP</label>
                                <input type="text" class="form-control" name="nip" readonly>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="jenisseminar" class="control-label">Jenis Seminar</label>
                                <input type="text" class="form-control" id="jenisseminar" name="jenisseminar"
                                       placeholder="Jenis Seminar" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="namaseminar" class="control-label">Nama Seminar</label>
                                <input type="text" class="form-control" id="namaseminar" name="namaseminar"
                                       placeholder="Nama Seminar" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="tempatseminar" class="control-label">Tempat Seminar</label>
                                <input type="text" class="form-control" id="tempatseminar" name="tempatseminar"
                                       placeholder="Tempat Seminar" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="penyelenggara" class="control-label">Penyelenggara</label>
                                <input type="text" class="form-control" id="penyelenggara" name="penyelenggara"
                                       placeholder="Penyelenggara" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="tglmulai" class="control-label">Tanggal Mulai</label>
                                <input type="date" class="form-control" id="tglmulai" name="tglmulai"
                                       placeholder="yyyy-mm-dd" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="tglselesai" class="control-label">Tanggal Selesai</label>
                                <input type="date" class="form-control" id="tglselesai" name="tglselesai"
                                       placeholder="yyyy-mm-dd" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="lamajamseminar" class="control-label">Lama Seminar</label>
                                <input type="text" class="form-control" id="lamajamseminar" name="lamajampenugasan"
                                       placeholder="Lama Seminar" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="angkatan" class="control-label">Angkatan</label>
                                <input type="text" class="form-control" id="angkatan" name="angkatan"
                                       placeholder="Angkatan" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-8">
                                <label for="nosk" class="control-label">No. SK</label>
                                <input type="text" class="form-control" id="nosk" name="nosk" placeholder="No. SK"
                                       required>
                            </div>
                            <div class="col-lg-4">
                                <label for="tglsk" class="control-label">Tanggal SK</label>
                                <input type="date" class="form-control" id="tglsk" name="tglsk" placeholder="yyyy-mm-dd"
                                       required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-8">
                                <label for="nosertifikat" class="control-label">No. Sertifikat</label>
                                <input type="text" class="form-control" id="nosertifikat" name="nosertifikat"
                                       placeholder="No. SK"
                                       required>
                            </div>
                            <div class="col-lg-4">
                                <label for="tglsertifikat" class="control-label">Tanggal Sertifikat</label>
                                <input type="date" class="form-control" id="tglsertifikat" name="tglsertifikat"
                                       placeholder="yyyy-mm-dd"
                                       required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="pangkatsaatitu" class="control-label">Pangkat Saat Seminar</label>
                                <select id="pangkatsaatitu" data-live-search="true" class="form-control selectpicker"
                                        name="pangkatsaatitu" title="-- Pilih --" required>
                                    <option value="Juru I/c">Juru I/c</option>
                                    <option value="Juru Muda I/a">Juru Muda I/a</option>
                                    <option value="Juru Muda TK.I I/b">Juru Muda TK.I I/b</option>
                                    <option value="Juru TK.I I/d">Juru TK.I I/d</option>
                                    <option value="Pembina IV/a">Pembina IV/a</option>
                                    <option value="Pembina Tk.I IV/b">Pembina Tk.I IV/b</option>
                                    <option value="Pembina Utama IV/e">Pembina Utama IV/e</option>
                                    <option value="Pembina Utama Madya IV/d">Pembina Utama Madya IV/d</option>
                                    <option value="Pembina Utama Muda IV/c">Pembina Utama Muda IV/c</option>
                                    <option value="Penata III/c">Penata III/c</option>
                                    <option value="Penata Muda III/a">Penata Muda III/a</option>
                                    <option value="Penata Muda Tk.I III/b">Penata Muda Tk.I III/b</option>
                                    <option value="Penata TK.I III/d">Penata TK.I III/d</option>
                                    <option value="Pengatur II/c">Pengatur II/c</option>
                                    <option value="Pengatur Muda II/a">Pengatur Muda II/a</option>
                                    <option value="Pengatur Muda Tk.I II/b">Pengatur Muda Tk.I II/b</option>
                                    <option value="Pengatur Tk.I II/d">Pengatur Tk.I II/d</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="jabatansaatitu" class="control-label">Jabatan Saaat Seminar</label>
                                <input type="text" class="form-control" id="jabatansaatitu" name="jabatansaatitu"
                                       placeholder="Jabatan Saat Seminar" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="eselonsaatitu" class="control-label">Eselon Saat Seminar</label>
                                <select id="eselonsaatitu" data-live-search="true" class="form-control selectpicker"
                                        name="eselonsaatitu" title="-- Pilih --" required>
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
                            <div class="col-lg-6">
                                <label for="unitkerjasaatitu" class="control-label">Unit Kerja Saaat Seminar</label>
                                <input type="text" class="form-control" id="unitkerjasaatitu" name="unitkerjasaatitu"
                                       placeholder="Unit Kerja Saat Seminar" required>
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

@endsection
@push('script')
    <script>
        $(function () {
            var table = $("#myDataTable").DataTable({
                order: [[1, "desc"]],
                columnDefs: [
                    {
                        targets: [0],
                        orderable: false
                    },
                    {
                        targets: [1],
                        visible: false,
                        searchable: false
                    },
                    {
                        targets: [2],
                        visible: false,
                        searchable: true
                    }
                ]
            }), toolbar = $("#myDataTable_wrapper").children().eq(0);
            toolbar.children().toggleClass("col-sm-6 col-sm-4");
            $('#action-btn').appendTo(toolbar);

            $("#unitKerja, #nama_pegawai").on("change", function () {
                $(".dataTables_filter input[type=search]").val($(this).val()).trigger('keyup');
            });

            $("#check-all").on("ifToggled", function () {
                if ($(this).is(":checked")) {
                    $("#myDataTable tbody tr").addClass("selected").find('input[type=checkbox]').iCheck("check");
                } else {
                    $("#myDataTable tbody tr").removeClass("selected").find('input[type=checkbox]').iCheck("uncheck");
                }
            });

            $("#myDataTable tbody").on("click", "tr", function () {
                $(this).toggleClass("selected");
                $(this).find('input[type=checkbox]').iCheck("toggle");
            });

            $('#btn_pdf').on("click", function () {
                var ids = $.map(table.rows('.selected').data(), function (item) {
                    return item[1]
                });

                if (ids.length > 0) {
                    window.open('{{ route('pdfpegawai', ['id' => '']) }}/' + ids, '_blank');
                } else {
                    swal("Error!", "Tidak ada data yang dipilih!", "error");
                }
                return false;
            });

            $('#btn_remove_app').on("click", function () {
                var ids = $.map(table.rows('.selected').data(), function (item) {
                    return item[1]
                });
                $("#bio_ids").val(ids);
                $("#form-biodata").attr("action", "{{ route('massdeletepegawai') }}");
                if (ids.length > 0) {
                    swal({
                        title: 'Hapus Data',
                        text: 'Apakah Anda yakin menghapus ' + ids.length + ' data tersebut? Anda tidak dapat mengembalikannya!',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#fa5555',
                        confirmButtonText: 'Ya',
                        cancelButtonText: 'Tidak',
                        showLoaderOnConfirm: true,
                        preConfirm: function () {
                            return new Promise(function (resolve) {
                                $("#form-biodata")[0].submit();
                            });
                        },
                        allowOutsideClick: false
                    });
                } else {
                    swal("Error!", "Tidak ada file yang dipilih!", "error");
                }
                return false;
            });
        });

        function riwayatModal(data, check, nip) {
            var json = JSON.parse(data), thead = $("#riwayatModal table thead"), tbody = $("#riwayatModal table tbody"),
                content = '';

            $("#riwayatModal .modal-title").html('Data ' + check + ': <strong>' + nip + '</strong>');

            if (check == 'Anak') {
                thead.html(
                    '<tr><th>#</th>' +
                    '<th>Data</th>' +
                    '<th>Status</th>' +
                    '<th><button type="button" class="btn btn-primary btn-sm" onclick="tambahAnak(\'' + nip + '\')"><i class="fa fa-plus"></i>&ensp;Tambah Data</button></th></tr>'
                );

                if (json != null && json != "") {
                    $.each(json, function (i, val) {
                        i = i + 1;
                        var val_anak = val.namaanak != "" && val.namaanak != null ? val.namaanak : "(Kosong)",
                            val_tempat = val.tempatlahiranak != "" && val.tempatlahiranak != null ? val.tempatlahiranak : "(Kosong)",
                            val_tgl = val.tgllahiranak != "" && val.tgllahiranak != null ? val.tgllahiranak : "(Kosong)",
                            val_jk = val.jeniskelaminanak != "" && val.jeniskelaminanak != null ? val.jeniskelaminanak : "(Kosong)",
                            val_pendidikan = val.pendidikanumumanak != "" && val.pendidikanumumanak != null ? val.pendidikanumumanak : "(Kosong)",
                            val_pekerjaan = val.pekerjaananak != "" && val.pekerjaananak != null ? val.pekerjaananak : "(Kosong)",
                            val_keluarga = val.statuskeluargaanak != "" && val.statuskeluargaanak != null ? val.statuskeluargaanak : "(Kosong)",
                            val_tunjangan = val.statustunjangananak != "" && val.statustunjangananak != null ? val.statustunjangananak : "(Kosong)";

                        content +=
                            '<tr><th scope="row">' + i + '</th>' +
                            '<td><table><tr><td>Nama</td><td>&nbsp;:&nbsp;</td><td><strong>' + val_anak + '</strong></td></tr>' +
                            '<tr><td>TTL</td><td>&nbsp;:&nbsp;</td><td>' + val_tempat + ', ' + val_tgl + '</td></tr>' +
                            '<tr><td>Jenis Kelamin</td><td>&nbsp;:&nbsp;</td><td>' + val_jk + '</td></tr>' +
                            '<tr><td>Pendidikan Umum</td><td>&nbsp;:&nbsp;</td><td>' + val_pendidikan + '</td></tr>' +
                            '<tr><td>Pekerjaan</td><td>&nbsp;:&nbsp;</td><td>' + val_pekerjaan + '</td></tr></table></td>' +
                            '<td><table><tr><td>Keluarga</td><td>&nbsp;:&nbsp;</td><td>' + val_keluarga + '</td></tr>' +
                            '<tr><td>Tunjangan</td><td>&nbsp;:&nbsp;</td><td>' + val_tunjangan + '</td></tr></table></td>' +
                            '<td><div class="btn-group">' +
                            '<button type="button" class="btn btn-warning btn-sm" onclick="editAnak(' + val.id + ')">' +
                            '<i class="fa fa-edit"></i>&ensp;Edit</button>' +
                            '<button onclick="hapusData(\'' + val.id + '\',\'' + check + '\')" class="btn btn-danger btn-sm">' +
                            '<i class="fa fa-trash"></i>&ensp;Delete</a></div></td></tr>';
                    });
                    tbody.html(content);
                } else {
                    tbody.html('<tr><td colspan="4"><em>Data ' + check + ' tidak ditemukan&hellip;</em></td></tr>');
                }

            }
            else if (check == 'Bahasa') {
                thead.html(
                    '<tr><th>#</th>' +
                    '<th>Bahasa Daerah</th>' +
                    '<th>Bahasa Asing</th>' +
                    '<th><button type="button" class="btn btn-primary btn-sm" onclick="tambahBahasa(\'' + nip + '\')"><i class="fa fa-plus"></i>&ensp;Tambah Data</button></th></tr>'
                );

                if (json != null && json != "") {
                    $.each(json, function (i, val) {
                        i = i + 1;
                        var bhs_daerah = val.namabahasa_daerah != "" && val.namabahasa_daerah != null ? val.namabahasa_daerah : "(Kosong)",
                            skill_daerah = val.kemampuanbicara_daerah != "" && val.kemampuanbicara_daerah != null ? val.kemampuanbicara_daerah : "(Kosong)",
                            bhs_asing = val.namabahasa_asing != "" && val.namabahasa_asing != null ? val.namabahasa_asing : "(Kosong)",
                            skill_asing = val.kemampuanbicara_asing != "" && val.kemampuanbicara_asing != null ? val.kemampuanbicara_asing : "(Kosong)";
                        content +=
                            '<tr><th scope="row">' + i + '</th>' +
                            '<td><table><tr><td>Nama Bahasa</td><td>&nbsp;:&nbsp;</td><td><strong>' + bhs_daerah + '</strong></td></tr>' +
                            '<tr><td>Kemampuan</td><td>&nbsp;:&nbsp;</td><td>' + skill_daerah + '</td></tr></table></td>' +
                            '<td><table><tr><td>Nama Bahasa</td><td>&nbsp;:&nbsp;</td><td><strong>' + bhs_asing + '</strong></td></tr>' +
                            '<tr><td>Kemampuan</td><td>&nbsp;:&nbsp;</td><td>' + skill_asing + '</td></tr></table></td>' +
                            '<td><div class="btn-group">' +
                            '<button type="button" class="btn btn-warning btn-sm" onclick="editBahasa(' + val.id + ')">' +
                            '<i class="fa fa-edit"></i>&ensp;Edit</button>' +
                            '<button onclick="hapusData(\'' + val.id + '\',\'' + check + '\')" class="btn btn-danger btn-sm">' +
                            '<i class="fa fa-trash"></i>&ensp;Delete</a></div></td></tr>';
                    });
                    tbody.html(content);
                } else {
                    tbody.html('<tr><td colspan="4"><em>Data ' + check + ' tidak ditemukan&hellip;</em></td></tr>');
                }
            }
            else if (check == 'Cuti') {
                thead.html(
                    '<tr><th>#</th>' +
                    '<th>Kegiatan</th>' +
                    '<th>Waktu</th>' +
                    '<th>Surat</th>' +
                    '<th>Posisi</th>' +
                    '<th><button type="button" class="btn btn-primary btn-sm" onclick="tambahCuti(\'' + nip + '\')"><i class="fa fa-plus"></i>&ensp;Tambah Data</button></th></tr>'
                );

                if (json != null && json != "") {
                    $.each(json, function (i, val) {
                        i = i + 1;
                        content +=
                            '<tr><th scope="row">' + i + '</th>' +
                            '<td><table><tr><td>Jenis</td><td>&nbsp;:&nbsp;</td><td><strong>' + val.jeniscuti + '</strong></td></tr>' +
                            '<tr><td>Alasan</td><td>&nbsp;:&nbsp;</td><td><strong>' + val.alasancuti + '</strong></td></tr>' +
                            '<tr><td>Alamat</td><td>&nbsp;:&nbsp;</td><td>' + val.alamatcuti + '</td></tr>' +
                            '<tr><td>Telepon</td><td>&nbsp;:&nbsp;</td><td>' + val.telpcuti + '</td></tr>' +
                            '</table></td>' +
                            '<td><table><tr><td>Tgl. Mulai</td><td>&nbsp;:&nbsp;</td><td>' + val.tglmulai + '</td></tr>' +
                            '<tr><td>Tgl. Selesai</td><td>&nbsp;:&nbsp;</td><td>' + val.tglselesai + '</td></tr>' +
                            '</table></td>' +
                            '<td><table><tr><td>No. S.K.</td><td>&nbsp;:&nbsp;</td><td>' + val.nosk + '</td></tr>' +
                            '<tr><td>Tgl. S.K.</td><td>&nbsp;:&nbsp;</td><td>' + val.tglsk + '</td></tr>' +
                            '</table></td>' +
                            '<td><table><tr><td>Pangkat</td><td>&nbsp;:&nbsp;</td><td>' + val.pangkatsaatitu + '</td></tr>' +
                            '<tr><td>Jabatan</td><td>&nbsp;:&nbsp;</td><td>' + val.jabatansaatitu + '</td></tr>' +
                            '<tr><td>Eselon</td><td>&nbsp;:&nbsp;</td><td>' + val.eselonsaatitu + '</td></tr>' +
                            '<tr><td>Satker</td><td>&nbsp;:&nbsp;</td><td>' + val.unitkerjasaatitu + '</td></tr>' +
                            '</table></td>' +
                            '<td><div class="btn-group">' +
                            '<button type="button" class="btn btn-warning btn-sm" onclick="editCuti(' + val.id + ')">' +
                            '<i class="fa fa-edit"></i>&ensp;Edit</button>' +
                            '<button onclick="hapusData(\'' + val.id + '\',\'' + check + '\')" class="btn btn-danger btn-sm">' +
                            '<i class="fa fa-trash"></i>&ensp;Delete</a></div></td></tr>';
                    });
                    tbody.html(content);
                } else {
                    tbody.html('<tr><td colspan="4"><em>Data ' + check + ' tidak ditemukan&hellip;</em></td></tr>');
                }
            }
            else if (check == 'Diklat') {
                thead.html(
                    '<tr><th>#</th>' +
                    '<th>Kegiatan</th>' +
                    '<th>Waktu</th>' +
                    '<th>Surat</th>' +
                    '<th>Posisi</th>' +
                    '<th><button type="button" class="btn btn-primary btn-sm" onclick="tambahDiklat(\'' + nip + '\')"><i class="fa fa-plus"></i>&ensp;Tambah Data</button></th></tr>'
                );

                if (json != null && json != "") {
                    $.each(json, function (i, val) {
                        i = i + 1;
                        content +=
                            '<tr><th scope="row">' + i + '</th>' +
                            '<td><table><tr><td>Jenis</td><td>&nbsp;:&nbsp;</td><td><strong>' + val.jenisdiklat + '</strong></td></tr>' +
                            '<tr><td>Nama</td><td>&nbsp;:&nbsp;</td><td><strong>' + val.namadiklat + '</strong></td></tr>' +
                            '<tr><td>Di</td><td>&nbsp;:&nbsp;</td><td>' + val.tempatdiklat + '</td></tr>' +
                            '<tr><td>Oleh</td><td>&nbsp;:&nbsp;</td><td>' + val.penyelenggara + '</td></tr>' +
                            '</table></td>' +
                            '<td><table><tr><td>Angkatan</td><td>&nbsp;:&nbsp;</td><td>' + val.angkatan + '</td></tr>' +
                            '<tr><td>Lama </td><td>&nbsp;:&nbsp;</td><td>' + val.lamajamdiklat + '</td></tr>' +
                            '</table></td>' +
                            '<td><table><tr><td>Sertifikat</td><td>&nbsp;:&nbsp;</td><td>' + val.nosertifikat + '</td></tr>' +
                            '<tr><td>Tgl. Sertifikat</td><td>&nbsp;:&nbsp;</td><td>' + val.tglsertifikat + '</td></tr>' +
                            '<tr><td>SK</td><td>&nbsp;:&nbsp;</td><td>' + val.nosk + '</td></tr>' +
                            '<tr><td>Tgl. S.K</td><td>&nbsp;:&nbsp;</td><td>' + val.tglsk + '</td></tr>' +
                            '</table></td>' +
                            '<td><table><tr><td>Pangkat</td><td>&nbsp;:&nbsp;</td><td>' + val.pangkatsaatitu + '</td></tr>' +
                            '<tr><td>Eselon</td><td>&nbsp;:&nbsp;</td><td>' + val.eselonsaatitu + '</td></tr>' +
                            '<tr><td>Satker</td><td>&nbsp;:&nbsp;</td><td>' + val.unitkerjasaatitu + '</td></tr>' +
                            '</table></td>' +
                            '<td><div class="btn-group">' +
                            '<button type="button" class="btn btn-warning btn-sm" onclick="editDiklat(' + val.id + ')">' +
                            '<i class="fa fa-edit"></i>&ensp;Edit</button>' +
                            '<button onclick="hapusData(\'' + val.id + '\',\'' + check + '\')" class="btn btn-danger btn-sm">' +
                            '<i class="fa fa-trash"></i>&ensp;Delete</a></div></td></tr>';
                    });
                    tbody.html(content);
                } else {
                    tbody.html('<tr><td colspan="4"><em>Data ' + check + ' tidak ditemukan&hellip;</em></td></tr>');
                }

            }
            else if (check == 'Gaji') {
                thead.html(
                    '<tr><th>#</th>' +
                    '<th>Waktu</th>' +
                    '<th>Surat</th>' +
                    '<th>Posisi</th>' +
                    '<th><button type="button" class="btn btn-primary btn-sm" onclick="tambahGaji(\'' + nip + '\')"><i class="fa fa-plus"></i>&ensp;Tambah Data</button></th></tr>'
                );

                if (json != null && json != "") {
                    $.each(json, function (i, val) {
                        i = i + 1;
                        content +=
                            '<tr><th scope="row">' + i + '</th>' +
                            '<td><table><tr><td>Tamat KGB</td><td>&nbsp;:&nbsp;</td><td><strong>' + val.tmtkgb + '</strong></td></tr>' +
                            '<tr><td>Masa Kerja</td><td>&nbsp;:&nbsp;</td><td><strong>' + val.masakerja + '</strong></td></tr>' +
                            '<tr><td>Gaji</td><td>&nbsp;:&nbsp;</td><td>' + val.gaji + '</td></tr>' +
                            '</table></td>' +
                            '<td><table><tr><td>S.K.</td><td>&nbsp;:&nbsp;</td><td>' + val.nosurat + '</td></tr>' +
                            '<tr><td>Tgl Surat </td><td>&nbsp;:&nbsp;</td><td>' + val.tglsurat + '</td></tr>' +
                            '</table></td>' +
                            '<td><table><tr><td>Pangkat</td><td>&nbsp;:&nbsp;</td><td>' + val.pangkatsaatitu + '</td></tr>' +
                            '<tr><td>Eselon</td><td>&nbsp;:&nbsp;</td><td>' + val.eselonsaatitu + '</td></tr>' +
                            '<tr><td>Satker</td><td>&nbsp;:&nbsp;</td><td>' + val.unitkerjasaatitu + '</td></tr>' +
                            '</table></td>' +
                            '<td><div class="btn-group">' +
                            '<button type="button" class="btn btn-warning btn-sm" onclick="editGaji(' + val.id + ')">' +
                            '<i class="fa fa-edit"></i>&ensp;Edit</button>' +
                            '<button onclick="hapusData(\'' + val.id + '\',\'' + check + '\')" class="btn btn-danger btn-sm">' +
                            '<i class="fa fa-trash"></i>&ensp;Delete</a></div></td></tr>';
                    });
                    tbody.html(content);
                } else {
                    tbody.html('<tr><td colspan="4"><em>Data ' + check + ' tidak ditemukan&hellip;</em></td></tr>');
                }

            }
            else if (check == 'Hukuman') {
                thead.html(
                    '<tr><th>#</th>' +
                    '<th>Kegiatan</th>' +
                    '<th>Surat</th>' +
                    '<th>Posisi</th>' +
                    '<th><button type="button" class="btn btn-primary btn-sm" onclick="tambahHukuman(\'' + nip + '\')"><i class="fa fa-plus"></i>&ensp;Tambah Data</button></th></tr>'
                );
                if (json != null && json != "") {
                    $.each(json, function (i, val) {
                        i = i + 1;
                        content +=
                            '<tr><th scope="row">' + i + '</th>' +
                            '<td><table><tr><td>Jenis Hukuman</td><td>&nbsp;:&nbsp;</td><td><strong>' + val.jenishukuman + '</strong></td></tr>' +
                            '<tr><td>Nama</td><td>&nbsp;:&nbsp;</td><td><strong>' + val.namahukuman + '</strong></td></tr>' +
                            '<tr><td>Sanksi</td><td>&nbsp;:&nbsp;</td><td>' + val.sanksi + '</td></tr>' +
                            '</table></td>' +
                            '<td><table><tr><td>S.K.</td><td>&nbsp;:&nbsp;</td><td>' + val.nosk + '</td></tr>' +
                            '<tr><td>Tgl S.K </td><td>&nbsp;:&nbsp;</td><td>' + val.tglsk + '</td></tr>' +
                            '</table></td>' +
                            '<td><table><tr><td>Pangkat</td><td>&nbsp;:&nbsp;</td><td>' + val.pangkatsaatitu + '</td></tr>' +
                            '<tr><td>Jabatan</td><td>&nbsp;:&nbsp;</td><td>' + val.jabatansaatitu + '</td></tr>' +
                            '<tr><td>Eselon</td><td>&nbsp;:&nbsp;</td><td>' + val.eselonsaatitu + '</td></tr>' +
                            '<tr><td>Satker</td><td>&nbsp;:&nbsp;</td><td>' + val.unitkerjasaatitu + '</td></tr>' +
                            '</table></td>' +
                            '<td><div class="btn-group">' +
                            '<button type="button" class="btn btn-warning btn-sm" onclick="editHukuman(' + val.id + ')">' +
                            '<i class="fa fa-edit"></i>&ensp;Edit</button>' +
                            '<button onclick="hapusData(\'' + val.id + '\',\'' + check + '\')" class="btn btn-danger btn-sm">' +
                            '<i class="fa fa-trash"></i>&ensp;Delete</a></div></td></tr>';
                    });
                    tbody.html(content);
                } else {
                    tbody.html('<tr><td colspan="4"><em>Data ' + check + ' tidak ditemukan&hellip;</em></td></tr>');
                }

            }
            else if (check == 'Jabatan') {
                thead.html(
                    '<tr><th>#</th>' +
                    '<th>Kegiatan</th>' +
                    '<th>Surat</th>' +
                    '<th><button type="button" class="btn btn-primary btn-sm" onclick="tambahJabatan(\'' + nip + '\')"><i class="fa fa-plus"></i>&ensp;Tambah Data</button></th></tr>'
                );
                if (json != null && json != "") {
                    $.each(json, function (i, val) {
                        i = i + 1;
                        content +=
                            '<tr><th scope="row">' + i + '</th>' +
                            '<td><table><tr><td>Jenis Jabatan</td><td>&nbsp;:&nbsp;</td><td><strong>' + val.jenisjabatan + '</strong></td></tr>' +
                            '<tr><td>Nama Jabatan</td><td>&nbsp;:&nbsp;</td><td><strong>' + val.namajabatan + '</strong></td></tr>' +
                            '<tr><td>Eselon</td><td>&nbsp;:&nbsp;</td><td>' + val.eselon + '</td></tr>' +
                            '<tr><td>Jenis Mutasi</td><td>&nbsp;:&nbsp;</td><td>' + val.jenismutasi + '</td></tr>' +
                            '</table></td>' +
                            '<td><table><tr><td>Tamat</td><td>&nbsp;:&nbsp;</td><td>' + val.tmt + '</td></tr>' +
                            '<tr><td>No. Surat</td><td>&nbsp;:&nbsp;</td><td>' + val.nosurat + '</td></tr>' +
                            '<tr><td>Pejabat</td><td>&nbsp;:&nbsp;</td><td>' + val.pejabat + '</td></tr>' +
                            '</table></td>' +
                            '<td><div class="btn-group">' +
                            '<button type="button" class="btn btn-warning btn-sm" onclick="editJabatan(' + val.id + ')">' +
                            '<i class="fa fa-edit"></i>&ensp;Edit</button>' +
                            '<button onclick="hapusData(\'' + val.id + '\',\'' + check + '\')" class="btn btn-danger btn-sm">' +
                            '<i class="fa fa-trash"></i>&ensp;Delete</a></div></td></tr>';
                    });
                    tbody.html(content);
                } else {
                    tbody.html('<tr><td colspan="4"><em>Data ' + check + ' tidak ditemukan&hellip;</em></td></tr>');
                }
            }
            else if (check == 'Kursus') {
                thead.html(
                    '<tr><th>#</th>' +
                    '<th>Kegiatan</th>' +
                    '<th>Waktu</th>' +
                    '<th>Surat</th>' +
                    '<th>Posisi</th>' +
                    '<th><button type="button" class="btn btn-primary btn-sm" onclick="tambahKursus(\'' + nip + '\')"><i class="fa fa-plus"></i>&ensp;Tambah Data</button></th></tr>'
                );
                if (json != null && json != "") {
                    $.each(json, function (i, val) {
                        i = i + 1;
                        content +=
                            '<tr><th scope="row">' + i + '</th>' +
                            '<td><table><tr><td>Jenis Kursus</td><td>&nbsp;:&nbsp;</td><td><strong>' + val.jeniskursus + '</strong></td></tr>' +
                            '<tr><td>Nama Kursus</td><td>&nbsp;:&nbsp;</td><td><strong>' + val.namakursus + '</strong></td></tr>' +
                            '<tr><td>Tempat Kursus</td><td>&nbsp;:&nbsp;</td><td>' + val.tempatkursus + '</td></tr>' +
                            '<tr><td>Penyelenggara</td><td>&nbsp;:&nbsp;</td><td>' + val.penyelenggara + '</td></tr>' +
                            '</table></td>' +
                            '<td><table><tr><td>Angkatan</td><td>&nbsp;:&nbsp;</td><td>' + val.angkatan + '</td></tr>' +
                            '<tr><td>Lama</td><td>&nbsp;:&nbsp;</td><td>' + val.lamajamkursus + '</td></tr>' +
                            '<tr><td>Tgl Mulai</td><td>&nbsp;:&nbsp;</td><td>' + val.tglmulai + '</td></tr>' +
                            '<tr><td>Tgl Selesai</td><td>&nbsp;:&nbsp;</td><td>' + val.tglselesai + '</td></tr>' +
                            '</table></td>' +
                            '<td><table><tr><td>Sertifikat</td><td>&nbsp;:&nbsp;</td><td>' + val.nosertifikat + '</td></tr>' +
                            '<tr><td>Tgl Sertifikat</td><td>&nbsp;:&nbsp;</td><td>' + val.tglsertifikat + '</td></tr>' +
                            '<tr><td>No S.K.</td><td>&nbsp;:&nbsp;</td><td>' + val.nosk + '</td></tr>' +
                            '<tr><td>Tgl S.K.</td><td>&nbsp;:&nbsp;</td><td>' + val.tglsk + '</td></tr>' +
                            '</table></td>' +
                            '<td><table><tr><td>Pangkat</td><td>&nbsp;:&nbsp;</td><td>' + val.pangkatsaatitu + '</td></tr>' +
                            '<tr><td>Eselon</td><td>&nbsp;:&nbsp;</td><td>' + val.eselonsaatitu + '</td></tr>' +
                            '<tr><td>Satker</td><td>&nbsp;:&nbsp;</td><td>' + val.unitkerjasaatitu + '</td></tr>' +
                            '</table></td>' +
                            '<td><div class="btn-group">' +
                            '<button type="button" class="btn btn-warning btn-sm" onclick="editKursus(' + val.id + ')">' +
                            '<i class="fa fa-edit"></i>&ensp;Edit</button>' +
                            '<button onclick="hapusData(\'' + val.id + '\',\'' + check + '\')" class="btn btn-danger btn-sm">' +
                            '<i class="fa fa-trash"></i>&ensp;Delete</a></div></td></tr>';
                    });
                    tbody.html(content);
                } else {
                    tbody.html('<tr><td colspan="4"><em>Data ' + check + ' tidak ditemukan&hellip;</em></td></tr>');
                }

            }
            else if (check == 'Organisasi') {
                thead.html(
                    '<tr><th>#</th>' +
                    '<th>Organisasi</th>' +
                    '<th>Lama Dalam Jabatan</th>' +
                    '<th><button type="button" class="btn btn-primary btn-sm" onclick="tambahOrganisasi(\'' + nip + '\')"><i class="fa fa-plus"></i>&ensp;Tambah Data</button></th></tr>'
                );
                if (json != null && json != "") {
                    $.each(json, function (i, val) {
                        i = i + 1;
                        content +=
                            '<tr><th scope="row">' + i + '</th>' +
                            '<td><table><tr><td>Jenis Organisasi</td><td>&nbsp;:&nbsp;</td><td><strong>' + val.jenisorganisasi + '</strong></td></tr>' +
                            '<tr><td>Nama Organisasi</td><td>&nbsp;:&nbsp;</td><td><strong>' + val.namaorganisasi + '</strong></td></tr>' +
                            '<tr><td>Kedudukan/Jabatan</td><td>&nbsp;:&nbsp;</td><td>' + val.jabatanorganisasi + '</td></tr>' +
                            '<tr><td>Nama Pimpinan</td><td>&nbsp;:&nbsp;</td><td>' + val.nama_pimpinan + '</td></tr>' +
                            '<tr><td>Tempat Organisasi</td><td>&nbsp;:&nbsp;</td><td>' + val.tempatorganisasi + '</td></tr>' +
                            '</table></td>' +
                            '<td><table><tr><td>Tanggal Mulai</td><td>&nbsp;:&nbsp;</td><td>' + val.tglmulai + '</td></tr>' +
                            '<tr><td>Tanggal Selesai</td><td>&nbsp;:&nbsp;</td><td>' + val.tglselesai + '</td></tr>' +
                            '</table></td>' +
                            '<td><div class="btn-group">' +
                            '<button type="button" class="btn btn-warning btn-sm" onclick="editOrganisasi(' + val.id + ')">' +
                            '<i class="fa fa-edit"></i>&ensp;Edit</button>' +
                            '<button onclick="hapusData(\'' + val.id + '\',\'' + check + '\')" class="btn btn-danger btn-sm">' +
                            '<i class="fa fa-trash"></i>&ensp;Delete</a></div></td></tr>';
                    });
                    tbody.html(content);
                } else {
                    tbody.html('<tr><td colspan="4"><em>Data ' + check + ' tidak ditemukan&hellip;</em></td></tr>');
                }

            }
            else if (check == 'Pangkat') {
                thead.html(
                    '<tr><th>#</th>' +
                    '<th>Kegiatan</th>' +
                    '<th>Surat</th>' +
                    '<th><button type="button" class="btn btn-primary btn-sm" onclick="tambahPangkat(\'' + nip + '\')"><i class="fa fa-plus"></i>&ensp;Tambah Data</button></th></tr>'
                );
                if (json != null && json != "") {
                    $.each(json, function (i, val) {
                        i = i + 1;
                        content +=
                            '<tr><th scope="row">' + i + '</th>' +
                            '<td><table><tr><td>Pangkat</td><td>&nbsp;:&nbsp;</td><td><strong>' + val.pangkat + '</strong></td></tr>' +
                            '<tr><td>TMT Pangkat</td><td>&nbsp;:&nbsp;</td><td><strong>' + val.tmtpangkat + '</strong></td></tr>' +
                            '<tr><td>Pejabat</td><td>&nbsp;:&nbsp;</td><td>' + val.pejabat + '</td></tr>' +
                            '<tr><td>Masa</td><td>&nbsp;:&nbsp;</td><td>' + val.masatahun + ' tahun ' + val.masabulan + ' bulan</td></tr>' +
                            '<tr><td>Gaji</td><td>&nbsp;:&nbsp;</td><td>' + val.gaji + '</td></tr>' +
                            '</table></td>' +
                            '<td><table><tr><td>No. Surat</td><td>&nbsp;:&nbsp;</td><td>' + val.nosurat + '</td></tr>' +
                            '<tr><td>Tgl. Surat</td><td>&nbsp;:&nbsp;</td><td>' + val.tglsurat + '</td></tr>' +
                            '</table></td>' +
                            '<td><div class="btn-group">' +
                            '<button type="button" class="btn btn-warning btn-sm" onclick="editPangkat(' + val.id + ')">' +
                            '<i class="fa fa-edit"></i>&ensp;Edit</button>' +
                            '<button onclick="hapusData(\'' + val.id + '\',\'' + check + '\')" class="btn btn-danger btn-sm">' +
                            '<i class="fa fa-trash"></i>&ensp;Delete</button>' +
                            '<button type="button" class="btn btn-info btn-sm dropdown-toggle" ' +
                            'data-toggle="dropdown"><span class="caret"></span></button>' +
                            '<ul class="dropdown-menu" role="menu">' +
                            '<li><a href="{{route('petikan.fungsional', ['nip' => ''])}}/'+nip+'" ' +
                            'target="_blank">Fungsional</a></li>' +
                            '<li><a href="{{route('petikan.fungsional-struktural', ['nip' => ''])}}/'+nip+'" ' +
                            'target="_blank">Fungsional Struktural</a></li>' +
                            '<li><a href="{{route('petikan.perorangan', ['nip' => ''])}}/'+nip+'" ' +
                            'target="_blank">Perorangan</a></li>' +
                            '<li><a href="{{route('petikan.struktural', ['nip' => ''])}}/'+nip+'" ' +
                            'target="_blank">Struktural</a></li>' +
                            '<li><a href="{{route('petikan.struktural-perorangan', ['nip' => ''])}}/'+nip+'" ' +
                            'target="_blank">Struktural Perorangan</a></li>' +
                            '<li><a href="{{route('petikan.sk-perorangan', ['nip' => ''])}}/'+nip+'" ' +
                            'target="_blank">SK Perorangan</a></li>' +
                            '</ul></div></td></tr>';
                    });
                    tbody.html(content);
                } else {
                    tbody.html('<tr><td colspan="4"><em>Data ' + check + ' tidak ditemukan&hellip;</em></td></tr>');
                }
            }
            else if (check == 'Penataran') {
                thead.html(
                    '<tr><th>#</th>' +
                    '<th>Kegiatan</th>' +
                    '<th>Waktu</th>' +
                    '<th>Surat</th>' +
                    '<th>Posisi</th>' +
                    '<th><button type="button" class="btn btn-primary btn-sm" onclick="tambahPenataran(\'' + nip + '\')"><i class="fa fa-plus"></i>&ensp;Tambah Data</button></th></tr>'
                );
                if (json != null && json != "") {
                    $.each(json, function (i, val) {
                        i = i + 1;
                        content +=
                            '<tr><th scope="row">' + i + '</th>' +
                            '<td><table><tr><td>Jenis Penataran</td><td>&nbsp;:&nbsp;</td><td><strong>' + val.jenispenataran + '</strong></td></tr>' +
                            '<tr><td>Nama Penataran</td><td>&nbsp;:&nbsp;</td><td><strong>' + val.namapenataran + '</strong></td></tr>' +
                            '<tr><td>Tempat Penataran</td><td>&nbsp;:&nbsp;</td><td>' + val.tempatpenataran + '</td></tr>' +
                            '<tr><td>Penyelenggara</td><td>&nbsp;:&nbsp;</td><td>' + val.penyelenggara + '</td></tr>' +
                            '</table></td>' +
                            '<td><table><tr><td>Angkatan</td><td>&nbsp;:&nbsp;</td><td>' + val.angkatan + '</td></tr>' +
                            '<tr><td>Lama Penataran</td><td>&nbsp;:&nbsp;</td><td>' + val.lamapenataran + '</td></tr>' +
                            '<tr><td>Tanggal Mulai</td><td>&nbsp;:&nbsp;</td><td>' + val.tglmulai + '</td></tr>' +
                            '<tr><td>Tanggal Selesai</td><td>&nbsp;:&nbsp;</td><td>' + val.tglselesai + '</td></tr>' +
                            '</table></td>' +
                            '<td><table><tr><td>Sertifikat</td><td>&nbsp;:&nbsp;</td><td>' + val.sertifikat + '</td></tr>' +
                            '<tr><td>Tgl Sertifikat </td><td>&nbsp;:&nbsp;</td><td>' + val.tglsertifikat + '</td></tr>' +
                            '<tr><td>No. S.K</td><td>&nbsp;:&nbsp;</td><td>' + val.nosk + '</td></tr>' +
                            '<tr><td>Tanggal S.K</td><td>&nbsp;:&nbsp;</td><td>' + val.tglsk + '</td></tr>' +
                            '</table></td>' +
                            '<td><table><tr><td>Pangkat</td><td>&nbsp;:&nbsp;</td><td>' + val.pangkataatitu + '</td></tr>' +
                            '<tr><td>Eselon </td><td>&nbsp;:&nbsp;</td><td>' + val.eselonsaatitu + '</td></tr>' +
                            '<tr><td>Satker</td><td>&nbsp;:&nbsp;</td><td>' + val.unitkerjasaatitu + '</td></tr>' +
                            '</table></td>' +
                            '<td><div class="btn-group">' +
                            '<button type="button" class="btn btn-warning btn-sm" onclick="editPenataran(' + val.id + ')">' +
                            '<i class="fa fa-edit"></i>&ensp;Edit</button>' +
                            '<button onclick="hapusData(\'' + val.id + '\',\'' + check + '\')" class="btn btn-danger btn-sm">' +
                            '<i class="fa fa-trash"></i>&ensp;Delete</a></div></td></tr>';
                    });
                    tbody.html(content);
                } else {
                    tbody.html('<tr><td colspan="4"><em>Data ' + check + ' tidak ditemukan&hellip;</em></td></tr>');
                }
            }
            else if (check == 'Pendidikan') {
                thead.html(
                    '<tr><th>#</th>' +
                    '<th>Pendidikan</th>' +
                    '<th>Ijazah</th>' +
                    '<th><button type="button" class="btn btn-primary btn-sm" onclick="tambahPendidikan(\'' + nip + '\')"><i class="fa fa-plus"></i>&ensp;Tambah Data</button></th></tr>'
                );
                if (json != null && json != "") {
                    $.each(json, function (i, val) {
                        i = i + 1;
                        content +=
                            '<tr><th scope="row">' + i + '</th>' +
                            '<td><table><tr><td>Tingkat Pendidikan</td><td>&nbsp;:&nbsp;</td><td><strong>' + val.tingkatpendidikan + '</strong></td></tr>' +
                            '<tr><td>Jurusan</td><td>&nbsp;:&nbsp;</td><td><strong>' + val.jurusan + '</strong></td></tr>' +
                            '<tr><td>Nama Sekolah</td><td>&nbsp;:&nbsp;</td><td>' + val.namasekolah + '</td></tr>' +
                            '<tr><td>Alamat Sekolah</td><td>&nbsp;:&nbsp;</td><td>' + val.alamatsekolah + '</td></tr>' +
                            '</table></td>' +
                            '<td><table><tr><td>No. Ijazah</td><td>&nbsp;:&nbsp;</td><td>' + val.noijazah + '</td></tr>' +
                            '<tr><td>Tgl Ijazah</td><td>&nbsp;:&nbsp;</td><td>' + val.tanggalijazah + '</td></tr>' +
                            '<tr><td>Thn Masuk</td><td>&nbsp;:&nbsp;</td><td>' + val.tahunmasuk + '</td></tr>' +
                            '<tr><td>Thn Lulus</td><td>&nbsp;:&nbsp;</td><td>' + val.tahunlulus + '</td></tr>' +
                            '</table></td>' +
                            '<td><div class="btn-group">' +
                            '<button type="button" class="btn btn-warning btn-sm" onclick="editPendidikan(' + val.id + ')">' +
                            '<i class="fa fa-edit"></i>&ensp;Edit</button>' +
                            '<button onclick="hapusData(\'' + val.id + '\',\'' + check + '\')" class="btn btn-danger btn-sm">' +
                            '<i class="fa fa-trash"></i>&ensp;Delete</a></div></td></tr>';
                    });
                    tbody.html(content);
                } else {
                    tbody.html('<tr><td colspan="4"><em>Data ' + check + ' tidak ditemukan&hellip;</em></td></tr>');
                }
            }
            else if (check == 'Penghargaan') {
                thead.html(
                    '<tr><th>#</th>' +
                    '<th>Kegiatan</th>' +
                    '<th>Surat</th>' +
                    '<th>Posisi</th>' +
                    '<th><button type="button" class="btn btn-primary btn-sm" onclick="tambahPenghargaan(\'' + nip + '\')"><i class="fa fa-plus"></i>&ensp;Tambah Data</button></th></tr>'
                );
                if (json != null && json != "") {
                    $.each(json, function (i, val) {
                        i = i + 1;
                        content +=
                            '<tr><th scope="row">' + i + '</th>' +
                            '<td><table><tr><td>Nama</td><td>&nbsp;:&nbsp;</td><td><strong>' + val.namapenghargaan + '</strong></td></tr>' +
                            '<tr><td>Asal</td><td>&nbsp;:&nbsp;</td><td><strong>' + val.asal + '</strong></td></tr>' +
                            '</table></td>' +
                            '<td><table><tr><td>No. S.K.</td><td>&nbsp;:&nbsp;</td><td>' + val.nosk + '</td></tr>' +
                            '<tr><td>Tgl S.K.</td><td>&nbsp;:&nbsp;</td><td>' + val.tglsk + '</td></tr>' +
                            '</table></td>' +
                            '<td><table><tr><td>Pangkat</td><td>&nbsp;:&nbsp;</td><td>' + val.pangkatsaatitu + '</td></tr>' +
                            '<tr><td>Eselon</td><td>&nbsp;:&nbsp;</td><td>' + val.eselonsaatitu + '</td></tr>' +
                            '<tr><td>Satker</td><td>&nbsp;:&nbsp;</td><td>' + val.unitkerjasaatitu + '</td></tr>' +
                            '</table></td>' +
                            '<td><div class="btn-group">' +
                            '<button type="button" class="btn btn-warning btn-sm" onclick="editPenghargaan(' + val.id + ')">' +
                            '<i class="fa fa-edit"></i>&ensp;Edit</button>' +
                            '<button onclick="hapusData(\'' + val.id + '\',\'' + check + '\')" class="btn btn-danger btn-sm">' +
                            '<i class="fa fa-trash"></i>&ensp;Delete</a></div></td></tr>';
                    });
                    tbody.html(content);
                } else {
                    tbody.html('<tr><td colspan="4"><em>Data ' + check + ' tidak ditemukan&hellip;</em></td></tr>');
                }
            }
            else if (check == 'Penugasan') {
                thead.html(
                    '<tr><th>#</th>' +
                    '<th>Kegiatan</th>' +
                    '<th>Waktu</th>' +
                    '<th>Surat</th>' +
                    '<th>Posisi</th>' +
                    '<th><button type="button" class="btn btn-primary btn-sm" onclick="tambahPenugasan(\'' + nip + '\')"><i class="fa fa-plus"></i>&ensp;Tambah Data</button></th></tr>'
                );

            }
            else if (check == 'Seminar') {
                thead.html(
                    '<tr><th>#</th>' +
                    '<th>Kegiatan</th>' +
                    '<th>Waktu</th>' +
                    '<th>Surat</th>' +
                    '<th>Posisi</th>' +
                    '<th><button type="button" class="btn btn-primary btn-sm" onclick="tambahSeminar(\'' + nip + '\')"><i class="fa fa-plus"></i>&ensp;Tambah Data</button></th></tr>'
                );
            }

            $("#riwayatModal").modal('show');
        }

        //data anak
        function tambahAnak(nip) {
            $("#anakModal .modal-title").html('Tambah Data Anak: <strong>' + nip + '</strong>');
            $("#form-anak").attr('action', '{{ route('create.data-anak') }}');
            $("#form-anak button[type=submit]").text('Submit');
            $("#form-anak input[name=_method]").val('POST');
            $("#form-anak input[name=nip]").val(nip);
            $("#namaanak, #pekerjaananak, #tempatlahiranak, #tgllahiranak").val('');
            $("#male, #female, #lajang, #menikah, #tidakada, #ada").iCheck('uncheck');
            $("#pendidikanumumanak").val('').selectpicker('refresh');

            $("#anakModal").modal('show');
        }

        function editAnak(id) {
            $("#form-anak").attr('action', '{{ route('update.data-anak',['id' => '']) }}/' + id);
            $("#form-anak button[type=submit]").text('Save Changes');

            $.get('{{ route('edit.data-anak', ['id' => '']) }}/' + id, function (data) {
                $("#anakModal .modal-title").html('Edit Data Anak: <strong>' + data.nip + '</strong>');
                $("#form-anak input[name=_method]").val('PUT');
                $("#form-anak input[name=nip]").val(data.nip);

                $("#namaanak").val(data.namaanak);
                $("#pekerjaananak").val(data.pekerjaananak);
                $("#tempatlahiranak").val(data.tempatlahiranak);
                $("#tgllahiranak").val(data.tgllahiranak);
                $("#pendidikanumumanak").val(data.pendidikanumumanak).selectpicker('refresh');

                if (data.jeniskelaminanak == 'Perempuan') {
                    $("#female").iCheck('check');
                } else {
                    $("#male").iCheck('check');
                }

                if (data.statuskeluargaanak == 'Menikah') {
                    $("#menikah").iCheck('check');
                } else {
                    $("#lajang").iCheck('check');
                }

                if (data.statustunjangananak == 'Ada') {
                    $("#ada").iCheck('check');
                } else {
                    $("#tidakada").iCheck('check');
                }
            });

            $("#anakModal").modal('show');
        }

        //data bahasa
        function tambahBahasa(nip) {
            $("#bahasaModal .modal-title").html('Tambah Data Bahasa: <strong>' + nip + '</strong>');
            $("#form-bahasa").attr('action', '{{ route('create.data-bahasa') }}');
            $("#form-bahasa button[type=submit]").text('Submit');
            $("#form-bahasa input[name=_method]").val('POST');
            $("#form-bahasa input[name=nip]").val(nip);
            $("#namabahasa_daerah, #namabahasa_asing").val('');
            $("#kemampuanbicara_daerah, #kemampuanbicara_asing").val('').selectpicker('refresh');

            $("#bahasaModal").modal('show');
        }

        function editBahasa(id) {
            $("#form-bahasa").attr('action', '{{ route('update.data-bahasa',['id' => '']) }}/' + id);
            $("#form-bahasa button[type=submit]").text('Save Changes');

            $.get('{{ route('edit.data-bahasa', ['id' => '']) }}/' + id, function (data) {
                $("#bahasaModal .modal-title").html('Edit Data Bahasa: <strong>' + data.nip + '</strong>');
                $("#form-bahasa input[name=_method]").val('PUT');
                $("#form-bahasa input[name=nip]").val(data.nip);

                $("#namabahasa_daerah").val(data.namabahasa_daerah);
                $("#namabahasa_asing").val(data.namabahasa_asing);
                $("#kemampuanbicara_daerah").val(data.kemampuanbicara_daerah).selectpicker('refresh');
                $("#kemampuanbicara_asing").val(data.kemampuanbicara_asing).selectpicker('refresh');
            });

            $("#bahasaModal").modal('show');
        }

        //data cuti
        function tambahCuti(nip) {
            $("#cutiModal .modal-title").html('Tambah Data Cuti: <strong>' + nip + '</strong>');
            $("#form-cuti").attr('action', '{{ route('create.data-cuti') }}');
            $("#form-cuti button[type=submit]").text('Submit');
            $("#form-cuti input[name=_method]").val('POST');
            $("#form-cuti input[name=nip]").val(nip);
            $("#jeniscuti, #alasancuti, #alamatcuti, #telpcuti #tglmulai, #tglselesai, #nosk, #jabatansaatitu").val('');
            $("#pangkatsaatitu, #eselonsaatitu, #unitkerjasaatitu").val('').selectpicker('refresh');

            $("#cutiModal").modal('show');
        }

        function editCuti(id) {
            $("#form-cuti").attr('action', '{{ route('update.data-cuti',['id' => '']) }}/' + id);
            $("#form-cuti button[type=submit]").text('Save Changes');

            $.get('{{ route('edit.data-cuti', ['id' => '']) }}/' + id, function (data) {
                $("#cutiModal .modal-title").html('Edit Data Cuti: <strong>' + data.nip + '</strong>');
                $("#form-cuti input[name=_method]").val('PUT');
                $("#form-cuti input[name=nip]").val(data.nip);

                $("#jeniscuti").val(data.jeniscuti);
                $("#alasancuti").val(data.alasancuti);
                $("#alamatcuti").val(data.alamatcuti);
                $("#telpcuti").val(data.telpcuti);
                $("#tglmulai").val(data.tglmulai);
                $("#tglselesai").val(data.tglselesai);
                $("#tglsk").val(data.tglsk);
                $("#nosk").val(data.nosk);
                $("#jabatansaatitu").val(data.jabatansaatitu);

                $("#pangkatsaatitu").val(data.pangkatsaatitu).selectpicker('refresh');
                $("#eselonsaatitu").val(data.eselonsaatitu).selectpicker('refresh');
                $("#unitkerjasaatitu").val(data.unitkerjasaatitu).selectpicker('refresh');
            });

            $("#cutiModal").modal('show');
        }

        //data diklat
        function tambahDiklat(nip) {
            $("#diklatModal .modal-title").html('Tambah Data Diklat: <strong>' + nip + '</strong>');
            $("#form-diklat").attr('action', '{{ route('create.data-diklat') }}');
            $("#form-diklat button[type=submit]").text('Submit');
            $("#form-diklat input[name=_method]").val('POST');
            $("#form-diklat input[name=nip]").val(nip);

            $("#namadiklat, #tempatdiklat, #penyelenggara, #angkatan, #tglmulai, #tglselesai, #lamajamdiklat, #nosk").val('');
            $("#tglsk, #nosertifikat, #tglsertifikat, #jabatansaatitu").val('');
            $("#jenisdiklat, #pangkatsaatitu, #eselonsaatitu, #unitkerjasaatitu").val('').selectpicker('refresh');

            $("#diklatModal").modal('show');
        }

        function editDiklat(id) {
            $("#form-diklat").attr('action', '{{ route('update.data-diklat',['id' => '']) }}/' + id);
            $("#form-diklat button[type=submit]").text('Save Changes');

            $.get('{{ route('edit.data-diklat', ['id' => '']) }}/' + id, function (data) {
                $("#diklatModal .modal-title").html('Edit Data Diklat: <strong>' + data.nip + '</strong>');
                $("#form-diklat input[name=_method]").val('PUT');
                $("#form-diklat input[name=nip]").val(data.nip);
                $("#form-diklat input[name=tglmulai]").val(data.tglmulai);
                $("#form-diklat input[name=tglselesai]").val(data.tglselesai);
                $("#form-diklat input[name=nosk]").val(data.nosk);
                $("#form-diklat input[name=tglsk]").val(data.tglsk);
                $("#form-diklat input[name=pangkatsaatitu]").val(data.pangkatsaatitu);
                $("#form-diklat input[name=eselonsaatitu]").val(data.eselonsaatitu);
                $("#form-diklat input[name=jabatansaatitu]").val(data.jabatansaatitu);
                $("#form-diklat input[name=unitkerjasaatitu]").val(data.unitkerjasaatitu);
                $("#form-diklat input[name=jabatansaatitu]").val(data.jabatansaatitu);

                $("#namadiklat").val(data.namadiklat);
                $("#jenisdiklat").val(data.jenisdiklat);
                $("#tempatdiklat").val(data.tempatdiklat);
                $("#penyelenggara").val(data.penyelenggara);
                $("#angkatan").val(data.angkatan);
                $("#tglmulai").val(data.tglmulai);
                $("#tglselesai").val(data.tglselesai);
                $("#lamajamdiklat").val(data.lamajamdiklat);
                $("#nosk").val(data.nosk);
                $("#tglsk").val(data.tglsk);
                $("#nosertifikat").val(data.nosertifikat);
                $("#tglsertifikat").val(data.tglsertifikat);
                $("#jabatansaatitu").val(data.jabatansaatitu);

                $("#unitkerjasaatitu").val(data.unitkerjasaatitu).selectpicker('refresh');
                $("#pangkatsaatitu").val(data.pangkatsaatitu).selectpicker('refresh');
                $("#eselonsaatitu").val(data.eselonsaatitu).selectpicker('refresh');

            });

            $("#diklatModal").modal('show');
        }

        //data gaji
        function tambahGaji(nip) {
            $("#gajiModal .modal-title").html('Tambah Data Gaji: <strong>' + nip + '</strong>');
            $("#form-gaji").attr('action', '{{ route('create.data-gaji') }}');
            $("#form-gaji button[type=submit]").text('Submit');
            $("#form-gaji input[name=_method]").val('POST');
            $("#form-gaji input[name=nip]").val(nip);

            $("#form-gaji input[name=nosurat], #tglsurat, #tglkgb, #masakerja, #gaji, #jabatansaatitu").val('');
            $("#pangkatsaatitu, #eselonsaatitu, #unitkerjasaatitu").val('').selectpicker('refresh');

            $("#gajiModal").modal('show');
        }

        function editGaji(id) {
            $("#form-gaji").attr('action', '{{ route('update.data-gaji',['id' => '']) }}/' + id);
            $("#form-gaji button[type=submit]").text('Save Changes');

            $.get('{{ route('edit.data-gaji', ['id' => '']) }}/' + id, function (data) {
                $("#gajiModal .modal-title").html('Edit Data Gaji: <strong>' + data.nip + '</strong>');
                $("#form-gaji input[name=_method]").val('PUT');
                $("#form-gaji input[name=nip]").val(data.nip);
                $("#form-gaji input[name=pangkatsaatitu]").val(data.pangkatsaatitu);
                $("#form-gaji input[name=eselonsaatitu]").val(data.eselonsaatitu);
                $("#form-gaji input[name=jabatansaatitu]").val(data.jabatansaatitu);
                $("#form-gaji input[name=unitkerjasaatitu]").val(data.unitkerjasaatitu);
                $("#form-gaji input[name=jabatansaatitu]").val(data.jabatansaatitu);

                $("#form-gaji input[name=nosurat]").val(data.nosurat);
                $("#tglsurat").val(data.tglsurat);
                $("#tmtkgb").val(data.tmtkgb);
                $("#masakerja").val(data.masakerja);
                $("#gaji").val(data.gaji);
                $("#jabatansaatitu").val(data.jabatansaatitu);

                $("#unitkerjasaatitu").val(data.unitkerjasaatitu).selectpicker('refresh');
                $("#pangkatsaatitu").val(data.pangkatsaatitu).selectpicker('refresh');
                $("#eselonsaatitu").val(data.eselonsaatitu).selectpicker('refresh');
            });

            $("#gajiModal").modal('show');
        }

        //data hukuman
        function tambahHukuman(nip) {
            $("#hukumanModal .modal-title").html('Tambah Data Hukuman: <strong>' + nip + '</strong>');
            $("#form-hukuman").attr('action', '{{ route('create.data-hukuman') }}');
            $("#form-hukuman button[type=submit]").text('Submit');
            $("#form-hukuman input[name=_method]").val('POST');
            $("#form-hukuman input[name=nip]").val(nip);
            $("#jenishukuman, #namahukuman, #sanksi, #nosk #tglsk, #jabatansaatitu").val('');
            $("#pangkatsaatitu, #eselonsaatitu, #unitkerjasaatitu").val('').selectpicker('refresh');

            $("#hukumanModal").modal('show');
        }

        function editHukuman(id) {
            $("#form-hukuman").attr('action', '{{ route('update.data-hukuman',['id' => '']) }}/' + id);
            $("#form-hukuman button[type=submit]").text('Save Changes');

            $.get('{{ route('edit.data-hukuman', ['id' => '']) }}/' + id, function (data) {
                $("#hukumanModal .modal-title").html('Edit Data Hukuman: <strong>' + data.nip + '</strong>');
                $("#form-hukuman input[name=_method]").val('PUT');
                $("#form-hukuman input[name=nip]").val(data.nip);
                $("#form-hukuman input[name=nosk]").val(data.nosk);
                $("#form-hukuman input[name=tglsk]").val(data.tglsk);
                $("#form-hukuman input[name=pangkatsaatitu]").val(data.pangkatsaatitu);
                $("#form-hukuman input[name=eselonsaatitu]").val(data.eselonsaatitu);
                $("#form-hukuman input[name=jabatansaatitu]").val(data.jabatansaatitu);
                $("#form-hukuman input[name=unitkerjasaatitu]").val(data.unitkerjasaatitu);
                $("#form-hukuman input[name=jabatansaatitu]").val(data.jabatansaatitu);

                $("#jenishukuman").val(data.jenishukuman);
                $("#namahukuman").val(data.namahukuman);
                $("#sanksi").val(data.sanksi);
                $("#nosk").val(data.nosk);
                $("#tglsk").val(data.tglsk);
                $("#jabatansaatitu").val(data.jabatansaatitu);

                $("#pangkatsaatitu").val(data.pangkatsaatitu).selectpicker('refresh');
                $("#eselonsaatitu").val(data.eselonsaatitu).selectpicker('refresh');
                $("#unitkerjasaatitu").val(data.unitkerjasaatitu).selectpicker('refresh');
            });

            $("#hukumanModal").modal('show');
        }

        //data jabatan
        function tambahJabatan(nip) {
            $("#jabatanModal .modal-title").html('Tambah Data Jabatan: <strong>' + nip + '</strong>');
            $("#form-jabatan").attr('action', '{{ route('create.data-jabatan') }}');
            $("#form-jabatan button[type=submit]").text('Submit');
            $("#form-jabatan input[name=_method]").val('POST');
            $("#form-jabatan input[name=nip]").val(nip);
            $("#jenisjabatan, #namajabatan, #form-jabatan input[name=nosurat], #tmt, #pejabat, #jenismutasi").val('');
            $("#eselon, #unitkerja").val('').selectpicker('refresh');

            $("#jabatanModal").modal('show');
        }

        function editJabatan(id) {
            $("#form-jabatan").attr('action', '{{ route('update.data-jabatan',['id' => '']) }}/' + id);
            $("#form-jabatan button[type=submit]").text('Save Changes');

            $.get('{{ route('edit.data-jabatan', ['id' => '']) }}/' + id, function (data) {
                $("#jabatanModal .modal-title").html('Edit Data Jabatan: <strong>' + data.nip + '</strong>');
                $("#form-jabatan input[name=_method]").val('PUT');
                $("#form-jabatan input[name=nip]").val(data.nip);

                $("#jenisjabatan").val(data.jenisjabatan);
                $("#namajabatan").val(data.namajabatan);
                $("#form-jabatan input[name=nosurat]").val(data.nosurat);
                $("#tmt").val(data.tmt);
                $("#pejabat").val(data.pejabat);
                $("#jenismutasi").val(data.jenismutasi);

                $("#eselon").val(data.eselon).selectpicker('refresh');
                $("#unitkerja").val(data.unitkerja).selectpicker('refresh');
            });

            $("#jabatanModal").modal('show');
        }

        //data kursus
        function tambahKursus(nip) {
            $("#kursusModal .modal-title").html('Tambah Data Kursus: <strong>' + nip + '</strong>');
            $("#form-kursus").attr('action', '{{ route('create.data-kursus') }}');
            $("#form-kursus button[type=submit]").text('Submit');
            $("#form-kursus input[name=_method]").val('POST');
            $("#form-kursus input[name=nip]").val(nip);
            $("#jeniskursus, #namakursus, #tempatkursus, #penyelenggara, #angkatan, #tglmulai, #tglselesai").val('');
            $("#lamajamkursus, #nosk, #tglsk, #nosertifikat, #tglsertifikat, #jabatansaatitu").val('');
            $("#pangkatsaatitu, #eselonsaatitu, #unitkerjasaatitu").val('').selectpicker('refresh');

            $("#kursusModal").modal('show');
        }

        function editKursus(id) {
            $("#form-kursus").attr('action', '{{ route('update.data-kursus',['id' => '']) }}/' + id);
            $("#form-kursus button[type=submit]").text('Save Changes');

            $.get('{{ route('edit.data-kursus', ['id' => '']) }}/' + id, function (data) {
                $("#kursusModal .modal-title").html('Edit Data Kursus: <strong>' + data.nip + '</strong>');
                $("#form-kursus input[name=_method]").val('PUT');
                $("#form-kursus input[name=nip]").val(data.nip);

                $("#jeniskursus").val(data.jeniskursus);
                $("#namakursus").val(data.namakursus);
                $("#tempatkursus").val(data.tempatkursus);
                $("#penyelenggara").val(data.penyelenggara);
                $("#angkatan").val(data.angkatan);
                $("#tglmulai").val(data.tglmulai);
                $("#tglselesai").val(data.tglselesai);
                $("#lamajamkursus").val(data.lamajamkursus);
                $("#nosk").val(data.nosk);
                $("#tglsk").val(data.tglsk);
                $("#nosertifikat").val(data.nosertifikat);
                $("#tglsertifikat").val(data.tglsertifikat);
                $("#jabatansaatitu").val(data.jabatansaatitu);

                $("#pangkatsaatitu").val(data.pangkatsaatitu).selectpicker('refresh');
                $("#eselonsaatitu").val(data.eselonsaatitu).selectpicker('refresh');
                $("#unitkerjasaatitu").val(data.unitkerjasaatitu).selectpicker('refresh');
            });

            $("#kursusModal").modal('show');
        }

        //data organisasi
        function tambahOrganisasi(nip) {
            $("#organisasiModal .modal-title").html('Tambah Data Organisasi: <strong>' + nip + '</strong>');
            $("#form-organisasi").attr('action', '{{ route('create.data-organisasi') }}');
            $("#form-organisasi button[type=submit]").text('Submit');
            $("#form-organisasi input[name=_method]").val('POST');
            $("#form-organisasi input[name=nip]").val(nip);
            $("#jenisorganisasi, #namaorganisasi, #jabatanorganisasi, #tglmulai, #tglselesai").val('');
            $("#nama_pimpinan, #tempatorganisasi").val('');

            $("#organisasiModal").modal('show');
        }

        function editOrganisasi(id) {
            $("#form-organisasi").attr('action', '{{ route('update.data-organisasi',['id' => '']) }}/' + id);
            $("#form-organisasi button[type=submit]").text('Save Changes');

            $.get('{{ route('edit.data-organisasi', ['id' => '']) }}/' + id, function (data) {
                $("#organisasiModal .modal-title").html('Edit Data Jabatan: <strong>' + data.nip + '</strong>');
                $("#form-organisasi input[name=_method]").val('PUT');
                $("#form-organisasi input[name=nip]").val(data.nip);
                $("#form-organisasi input[name=tglmulai]").val(data.tglmulai);
                $("#form-organisasi input[name=tglselesai]").val(data.tglselesai);


                $("#jenisorganisasi").val(data.jenisorganisasi);
                $("#namaorganisasi").val(data.namaorganisasi);
                $("#jabatanorganisasi").val(data.jabatanorganisasi);
                $("#tglmulai").val(data.tglmulai);
                $("#tglselesai").val(data.tglselesai);
                $("#nama_pimpinan").val(data.nama_pimpinan);
                $("#tempatorganisasi").val(data.tempatorganisasi);
            });

            $("#organisasiModal").modal('show');
        }

        //data pangkat
        function tambahPangkat(nip) {
            $("#pangkatModal .modal-title").html('Tambah Data Pangkat: <strong>' + nip + '</strong>');
            $("#form-pangkat").attr('action', '{{ route('create.data-pangkat') }}');
            $("#form-pangkat button[type=submit]").text('Submit');
            $("#form-pangkat input[name=_method]").val('POST');
            $("#form-pangkat input[name=nip]").val(nip);
            $("#pangkat, #tmtpangkat, #pejabat, #masatahun, #masabulan, #gaji, #form-pangkat input[name=nosurat], #tglsurat").val('');

            $("#pangkatModal").modal('show');
        }

        function editPangkat(id) {
            $("#form-pangkat").attr('action', '{{ route('update.data-pangkat',['id' => '']) }}/' + id);
            $("#form-pangkat button[type=submit]").text('Save Changes');

            $.get('{{ route('edit.data-pangkat', ['id' => '']) }}/' + id, function (data) {
                $("#pangkatModal .modal-title").html('Edit Data Pangkat: <strong>' + data.nip + '</strong>');
                $("#form-pangkat input[name=_method]").val('PUT');
                $("#form-pangkat input[name=nip]").val(data.nip);
                $("#form-pangkat input[name=pejabat]").val(data.pejabat);
                $("#form-pangkat input[name=gaji]").val(data.gaji);
                $("#form-pangkat input[name=nosurat]").val(data.nosurat);
                $("#form-pangkat input[name=tglsurat]").val(data.tglsurat);

                $("#pangkat").val(data.pangkat);
                $("#tmtpangkat").val(data.tmtpangkat);
                $("#pejabat").val(data.pejabat);
                $("#masatahun").val(data.masatahun);
                $("#masabulan").val(data.masabulan);
                $("#gaji").val(data.gaji);
                $("#tglsurat").val(data.tglsurat);
            });

            $("#pangkatModal").modal('show');
        }

        //data penataran
        function tambahPenataran(nip) {
            $("#penataranModal .modal-title").html('Tambah Data Penataran : <strong>' + nip + '</strong>');
            $("#form-penataran").attr('action', '{{ route('create.data-penataran') }}');
            $("#form-penataran button[type=submit]").text('Submit');
            $("#form-penataran input[name=_method]").val('POST');
            $("#form-penataran input[name=nip]").val(nip);
            $("#jenispenataran, #namapenataran, #tempatpenataran, #penyelenggara, #angkatan").val('');
            $("#tglmulai, #tglselesai, #lamajampenataran, #nosk, #tglsk, #nosertifikat, #tglsertifikat, #jabatansaatitu").val('');
            $("#pangkatsaatitu, #eselonsaatitu, #unitkerjasaatitu").val('').selectpicker('refresh');

            $("#penataranModal").modal('show');
        }

        function editPenataran(id) {
            $("#form-penataran").attr('action', '{{ route('update.data-penataran',['id' => '']) }}/' + id);
            $("#form-penataran button[type=submit]").text('Save Changes');

            $.get('{{ route('edit.data-penataran', ['id' => '']) }}/' + id, function (data) {
                $("#penataranModal .modal-title").html('Edit Data Jabatan: <strong>' + data.nip + '</strong>');
                $("#form-penataran input[name=_method]").val('PUT');
                $("#form-penataran input[name=nip]").val(data.nip);
                $("#form-penataran input[name=penyelenggara]").val(data.penyelenggara);
                $("#form-penataran input[name=angkatan]").val(data.angkatan);
                $("#form-penataran input[name=tglmulai]").val(data.tglmulai);
                $("#form-penataran input[name=tglselesai]").val(data.tglselesai);
                $("#form-penataran input[name=nosk]").val(data.nosk);
                $("#form-penataran input[name=tglsk]").val(data.tglsk);
                $("#form-penataran input[name=nosertifikat]").val(data.nosertifikat);
                $("#form-penataran input[name=tglsertifikat]").val(data.tglsertifikat);
                $("#form-penataran input[name=pangkatsaatitu]").val(data.pangkatsaatitu);
                $("#form-penataran input[name=golongansaatitu]").val(data.golongansaatitu);
                $("#form-penataran input[name=jabatansaatitu]").val(data.jabatansaatitu);
                $("#form-penataran input[name=eselonsaatitu]").val(data.eselonsaatitu);
                $("#form-penataran input[name=unitkerjasaatitu]").val(data.unitkerjasaatitu);

                $("#jenispenataran").val(data.jenispenataran);
                $("#namapenataran").val(data.namapenataran);
                $("#tempatpenataran").val(data.tempatpenataran);
                $("#penyelenggara").val(data.penyelenggara);
                $("#angkatan").val(data.angkatan);
                $("#tglmulai").val(data.tglmulai);
                $("#tglselesai").val(data.tglselesai);
                $("#lamajampenataran").val(data.lamajampenataran);
                $("#nosk").val(data.nosk);
                $("#tglsk").val(data.tglsk);
                $("#nosertifikat").val(data.nosertifikat);
                $("#tglsertifikat").val(data.tglsertifikat);
                $("#jabatansaatitu").val(data.jabatansaatitu);

                $("#pangkatsaatitu").val(data.pangkatsaatitu).selectpicker('refresh');
                $("#eselonsaatitu").val(data.eselonsaatitu).selectpicker('refresh');
                $("#unitkerjasaatitu").val(data.unitkerjasaatitu).selectpicker('refresh');
            });

            $("#penataranModal").modal('show');
        }

        //data pendidikan
        function tambahPendidikan(nip)
        {
            $("#pendidikanModal .modal-title").html('Tambah Data Pendidikan: <strong>' + nip + '</strong>');
            $("#form-pendidikan").attr('action', '{{ route('create.data-pendidikan') }}');
            $("#form-pendidikan button[type=submit]").text('Submit');
            $("#form-pendidikan input[name=_method]").val('POST');
            $("#form-pendidikan input[name=nip]").val(nip);
            $("#jurusan, #namasekolah, #alamatsekolah, #noijazah, #tanggalijazah, #tahunmasuk, #tahunlulus").val('');
            $("#tingkatpendidikan").val('').selectpicker('refresh');

            $("#pendidikanModal").modal('show');
        }
        function editPendidikan(id)
        {
            $("#form-pendidikan").attr('action', '{{ route('update.data-pendidikan',['id' => '']) }}/' + id);
            $("#form-pendidikan button[type=submit]").text('Save Changes');

            $.get('{{ route('edit.data-pendidikan', ['id' => '']) }}/' + id, function (data) {
                $("#pendidikanModal .modal-title").html('Edit Data Pendidikan: <strong>' + data.nip + '</strong>');
                $("#form-pendidikan input[name=_method]").val('PUT');
                $("#form-pendidikan input[name=nip]").val(data.nip);

                $("#jurusan").val(data.jurusan);
                $("#form-pendidikan input[name=noijazah]").val(data.noijazah);
                $("#form-pendidikan input[name=tanggalijazah]").val(data.tanggalijazah);
                $("#namasekolah").val(data.namasekolah);
                $("#alamatsekolah").val(data.alamatsekolah);
                $("#tahunmasuk").val(data.tahunmasuk);
                $("#tahunlulus").val(data.tahunlulus);
                $("#ijazahsertifikat").val(data.ijazahsertifikat);

                $("#tingkatpendidikan").val(data.tingkatpendidikan).selectpicker('refresh');
            });

            $("#pendidikanModal").modal('show');
        }

        //data Penghargaan
        function tambahPenghargaan(nip)
        {
            $("#penghargaanModal .modal-title").html('Tambah Data Penghargaan: <strong>' + nip + '</strong>');
            $("#form-penghargaan").attr('action', '{{ route('create.data-penghargaan') }}');
            $("#form-penghargaan button[type=submit]").text('Submit');
            $("#form-penghargaan input[name=_method]").val('POST');
            $("#form-penghargaan input[name=nip]").val(nip);
            $("#namapenghargaan, #asal, #nosk, #tglsk, #jabatansaatitu").val('');
            $("#pangkatsaatitu, #eselonsaatitu, #unitkerjasaatitu").val('').selectpicker('refresh');

            $("#penghargaanModal").modal('show');
        }
        function editPenghargaan(id)
        {
            $("#form-penghargaan").attr('action', '{{ route('update.data-penghargaan',['id' => '']) }}/' + id);
            $("#form-penghargaan button[type=submit]").text('Save Changes');

            $.get('{{ route('edit.data-penghargaan', ['id' => '']) }}/' + id, function (data) {
                $("#penghargaanModal .modal-title").html('Edit Data Penghargaan: <strong>' + data.nip + '</strong>');
                $("#form-penghargaan input[name=_method]").val('PUT');
                $("#form-penghargaan input[name=nip]").val(data.nip);

                $("#namapenghargaan").val(data.namapenghargaan);
                $("#asal").val(data.asal);
                $("#form-penghargaan input[name=nosk]").val(data.nosk);
                $("#form-penghargaan input[name=tglsk]").val(data.tglsk);
                $("#form-penghargaan input[name=jabatansaatitu]").val(data.jabatansaatitu);

                $("#form-penghargaan input[name=pangkatsaatitu]").val(data.pangkatsaatitu).selectpicker('refresh');
                $("#form-penghargaan input[name=eselonsaatitu]").val(data.eselonsaatitu).selectpicker('refresh');
                $("#form-penghargaan input[name=unitkerjasaatitu]").val(data.unitkerjasaatitu).selectpicker('refresh');
            });

            $("#penghargaanModal").modal('show');
        }

        //data Penugasan
        function tambahPenugasan(nip)
        {
            $("#penugasanModal .modal-title").html('Tambah Data Penugasan: <strong>' + nip + '</strong>');
            $("#form-penugasan").attr('action', '{{ route('create.data-penugasan') }}');
            $("#form-penugasan button[type=submit]").text('Submit');
            $("#form-penugasan input[name=_method]").val('POST');
            $("#form-penugasan input[name=nip]").val(nip);
            $("#jenispenugasan, #namapenugasan, #tempatpenugasan, #penyelenggara, #angkatan").val('');
            $("#lamajampenugasan, #tglmulai, #tglselesai, #nosk, #tglsk, #nosertifikat, #tglsertifikat, #jabatansaatitu").val('');
            $("#pangkatsaatitu, #eselonsaatitu, #unitkerjasaatitu").val('').selectpicker('refresh');

            $("#penugasanModal").modal('show');
        }
        function editPenugasan(id)
        {
            $("#form-penugasan").attr('action', '{{ route('update.data-penugasan',['id' => '']) }}/' + id);
            $("#form-penugasan button[type=submit]").text('Save Changes');

            $.get('{{ route('edit.data-penugasan', ['id' => '']) }}/' + id, function (data) {
                $("#penugasanModal .modal-title").html('Edit Data Penugasan: <strong>' + data.nip + '</strong>');
                $("#form-penugasan input[name=_method]").val('PUT');
                $("#form-penugasan input[name=nip]").val(data.nip);

                $("#jenispengnugasan").val(data.jenispenghargaan);
                $("#namapengnugasan").val(data.namapenghargaan);
                $("#tempatpenugasan").val(data.tempatpenugasan);
                $("#form-penugasan input[name=nosk]").val(data.nosk);
                $("#form-penugasan input[name=tglsk]").val(data.nosk);
                $("#form-penugasan input[name=nosertifikat]").val(data.nosk);
                $("#form-penugasan input[name=tglsertifikat]").val(data.tglsk);
                $("#form-penugasan input[name=jabatansaatitu]").val(data.jabatansaatitu);

                $("#form-pengnugasan input[name=pangkatsaatitu]").val(data.pangkatsaatitu).selectpicker('refresh');
                $("#form-pengnugasan input[name=eselonsaatitu]").val(data.eselonsaatitu).selectpicker('refresh');
                $("#form-pengnugasan input[name=unitkerjasaatitu]").val(data.unitkerjasaatitu).selectpicker('refresh');
            });

            $("#penugasanModal").modal('show');
        }

        //data seminar
        function tambahSeminar(nip)
        {
            $("#seminarModal .modal-title").html('Tambah Data Seminar: <strong>' + nip + '</strong>');
            $("#form-seminar").attr('action', '{{ route('create.data-seminar') }}');
            $("#form-seminar button[type=submit]").text('Submit');
            $("#form-seminar input[name=_method]").val('POST');
            $("#form-seminar input[name=nip]").val(nip);
            $("#jenisseminar, #namaseminar, #tempatseminar, #penyelenggara, #angkatan").val('');
            $("#lamajamseminar, #tglmulai, #tglselesai, #nosk, #tglsk, #nosertifikat, #tglsertifikat, #jabatansaatitu").val('');
            $("#pangkatsaatitu, #eselonsaatitu, #unitkerjasaatitu").val('').selectpicker('refresh');

            $("#seminarModal").modal('show');
        }
        function editSeminar(id)
        {
            $("#form-seminar").attr('action', '{{ route('update.data-seminar',['id' => '']) }}/' + id);
            $("#form-seminar button[type=submit]").text('Save Changes');

            $.get('{{ route('edit.data-penugasan', ['id' => '']) }}/' + id, function (data) {
                $("#seminarModal .modal-title").html('Edit Data Seminar: <strong>' + data.nip + '</strong>');
                $("#form-seminar input[name=_method]").val('PUT');
                $("#form-seminar input[name=nip]").val(data.nip);

                $("#jenisseminar").val(data.jenisseminar);
                $("#namaseminar").val(data.namaseminar);
                $("#tempatsemin").val(data.tempatseminar);
                $("#form-seminar input[name=nosk]").val(data.nosk);
                $("#form-seminar input[name=tglsk]").val(data.nosk);
                $("#form-seminar input[name=nosertifikat]").val(data.nosk);
                $("#form-seminar input[name=tglsertifikat]").val(data.tglsk);
                $("#form-seminar input[name=jabatansaatitu]").val(data.jabatansaatitu);

                $("#form-seminar input[name=pangkatsaatitu]").val(data.pangkatsaatitu).selectpicker('refresh');
                $("#form-seminar input[name=eselonsaatitu]").val(data.eselonsaatitu).selectpicker('refresh');
                $("#form-seminar input[name=unitkerjasaatitu]").val(data.unitkerjasaatitu).selectpicker('refresh');
            });

            $("#seminarModal").modal('show');
        }







        function hapusData(id, check) {
            swal({
                title: 'Hapus Data ' + check,
                text: 'Apakah Anda yakin menghapus data tersebut? Anda tidak dapat mengembalikannya!',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#fa5555',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak',
                showLoaderOnConfirm: true,
                preConfirm: function () {
                    return new Promise(function (resolve) {
                        window.location.href = 'biodata_pegawai/data-' + check.toLowerCase() + '/delete/' + id;
                    });
                },
                allowOutsideClick: false
            });
            return false;

        }

        $(document).on('show.bs.modal', '.modal', function (event) {
            var zIndex = 1040 + (10 * $('.modal:visible').length);
            $(this).css('z-index', zIndex);
            setTimeout(function () {
                $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
            }, 0);
        });
    </script>
@endpush