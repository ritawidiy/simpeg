@extends('layouts.master_admin')
@section('tittle', 'INPUT DATA PEGAWAI BARU')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Pegawai Baru</h3>
                </div>
                <div class="ln_solid"></div>
                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-15 col-sm-15 col-xs-15">
                    <form method="POST" action="{{ route('save.biodata_pegawai') }}" id="demo-form2"
                          data-parsley-validate class="form-horizontal form-label-left">
                        {{ csrf_field() }}

                        {{--IDENTITAS--}}
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>IDENTITAS</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nip">NIP <span
                                                class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="nip" id="nip" required="required"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nip_lama">NIP Lama
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="nip_lama" id="nip_lama" required="required"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama
                                        Lengkap<span class="required">*</span>
                                        <br>
                                        <small class="text-navy">Gelar Depan - Nama - Gelar Belakang</small>
                                    </label>
                                    <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                        <input type="text" name="gelar_depan" required="required" class="form-control">
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                        <input type="text" name="nama" required="required" class="form-control">
                                    </div>
                                    <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                        <input type="text" name="gelar_belakang" required="required"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat_lahir">Tempat/Tanggal
                                        Lahir <span class="required"></span></label>
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                        <input type="text" name="tempat_lahir" id="tempat_lahir" required="required"
                                               class="form-control">
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-6">
                                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" required="required"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="status_perkawinan" class="control-label col-md-3 col-sm-3 col-xs-12">Status
                                        Perkawinan</label>
                                    <div class="col-md-2 col-sm-2 col-xs-6">
                                        <select id="status_perkawinan" class="form-control selectpicker" name="status_perkawinan"
                                                data-live-search="true" title="-- Pilih --">
                                            <option value="1">Belum Menikah</option>
                                            <option value="2">Sudah Menikah</option>
                                            <option value="3">Duda/Janda</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis_kelamin">Jenis
                                        Kelamin</label>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <p id="jenis_kelamin">
                                            Laki-laki:
                                            <input type="radio" class="flat" name="jenis_kelamin" value="Laki-laki"
                                                   required> Perempuan:
                                            <input type="radio" class="flat" name="jenis_kelamin" value="Perempuan">
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="golongan_darah">Golongan
                                        Darah</label>
                                    <div class="col-md-2 col-sm-2 col-xs-6">
                                        <select id="golongan_darah" class="form-control selectpicker"
                                                data-live-search="true" title="-- Pilih --" name="golongan_darah">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="AB">AB</option>
                                            <option value="O">O</option>
                                        </select>
                                    </div>
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="agama">Agama</label>
                                    <div class="col-md-2 col-sm-2 col-xs-6">
                                        <select id="agama" class="form-control selectpicker" data-live-search="true"
                                                title="-- Pilih --" name="agama">
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen Protestan">Kristen Protestan</option>
                                            <option value="Kristen Katolik">Kristen Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--PENDIDIKAN--}}
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>PENDIDIKAN</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pendidikan">Pendidikan
                                        Terakhir</label>
                                    <div class="col-md-2 col-sm-2 col-xs-6">
                                        <select id="pendidikan" class="form-control selectpicker" name="pendidikan"
                                                data-live-search="true" title="-- Pilih --">
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="MTS">MTS</option>
                                            <option value="SR">SR</option>
                                            <option value="Paket C">Paket C</option>
                                            <option value="MA">MA</option>
                                            <option value="SMA">SMA</option>
                                            <option value="SMK">SMK</option>
                                            <option value="D1">D1</option>
                                            <option value="D2">D2</option>
                                            <option value="D3">D3</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="tgl_lulus">Tanggal
                                        Lulus <span class="required">*</span></label>
                                    <div class="col-md-2 col-sm-2 col-xs-6">
                                        <input type="date" name="tgl_lulus" id="tgl_lulus" required="required"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jurusan">Jurusan <span
                                                class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="jurusan" id="jurusan" required="required"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--KEPEGAWAIAN--}}
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>KEPEGAWAIAN</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tugas_pokok">Tugas
                                        Pokok <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <p id="tugas_pokok">
                                            Pendidik:
                                            <input type="radio" class="flat" name="tugas_pokok" value="Pendidik"
                                                   required> Tenaga Kependidikan:
                                            <input type="radio" class="flat" name="tugas_pokok" value="Tenaga Kependidikan">
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="statpeg">
                                        Status Kepegawaian <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <p id="statpeg">
                                            PNS:
                                            <input type="radio" class="flat" name="statpeg" value="PNS"
                                                   required> CPNS:
                                            <input type="radio" class="flat" name="statpeg" value="CPNS">
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kedudukan_kepegawaian">Kedudukan
                                        Kepegawaian</label>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <select id="kedudukan_kepegawaian" class="form-control selectpicker" title="-- Pilih --"
                                                name="kedudukan_kepegawaian" data-live-search="true">
                                            <option value="Aktif">Aktif</option>
                                            <option value="CLTN">CLTN</option>
                                            <option value="Tugas Belajar">Tugas Belajar</option>
                                            <option value="Pemberhentian Sementara">Pemberhentian Sementara</option>
                                            <option value="Penerima Uang Tunggu">Penerima Uang Tunggu</option>
                                            <option value="Masa Persiapan Pensiun">Masa Persiapan Pensiun</option>
                                            <option value="Menunggu Tugas">Menunggu Tugas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat_tugas">Tempat
                                        Tugas <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea name="tempat_tugas" id="tempat_tugas" required
                                                  class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="absen">Absen <span
                                                class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="absen" id="absen" required="required"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--PENGANGKATAN SEBAGAI CPNS--}}
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>PENGANGKATAN SEBAGAI CPNS</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nosk_cpns">SK CPNS
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <input type="text" name="nosk_cpns" id="nosk_cpns" required="required"
                                               class="form-control">
                                    </div>
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="tglsk_cpns">Tanggal
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <input type="date" name="tglsk_cpns" id="tglsk_cpns" required="required"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pangkat_cpns">
                                        Pangkat/Gol. Ruang <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <select id="pangkat_cpns" data-live-search="true" class="form-control selectpicker"
                                                name="pangkat_cpns" title="-- Pilih --" required>
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
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="tmt_cpns">TMT CPNS
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <input type="date" name="tmt_cpns" id="tmt_cpns" required="required"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--PENGANGKATAN SEBAGAI PNS--}}
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>PENGANGKATAN SEBAGAI PNS</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pejabat_penetap_pns">
                                        Pejabat yang Menetapkan <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="pejabat_penetap_pns" id="pejabat_penetap_pns" required
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nosk_pns">SK PNS
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <input type="text" name="nosk_pns" id="nosk_pns" required="required"
                                               class="form-control">
                                    </div>
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="tglsk_pns">Tanggal
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <input type="date" name="tglsk_pns" id="tglsk_pns" required="required"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pangkat_pns">
                                        Pangkat/Gol. Ruang <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <select id="pangkat_pns" data-live-search="true" class="form-control selectpicker"
                                                name="pangkat_pns" title="-- Pilih --" required>
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
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="tmt_pns">TMT PNS
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <input type="date" name="tmt_pns" id="tmt_pns" required="required"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sumpah_pns">
                                        Sumpah/Janji PNS <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <p id="sumpah_pns">
                                            Sudah:
                                            <input type="radio" class="flat" name="sumpah_pns" value="Sudah"
                                                   required> Belum:
                                            <input type="radio" class="flat" name="sumpah_pns" value="Belum">
                                        </p>
                                    </div>
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="tmt_spmt">SPMT PTT
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <input type="date" name="tmt_spmt" id="tmt_spmt" required="required"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--PANGKAT TERAKHIR--}}
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>PANGKAT TERAKHIR</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pejabat_penetap_pangkat">
                                        Pejabat yang Menetapkan <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="pejabat_penetap_pangkat" id="pejabat_penetap_pangkat" required
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nosk_pangkat">SK Pangkat
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <input type="text" name="nosk_pangkat" id="nosk_pangkat" required="required"
                                               class="form-control">
                                    </div>
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="tglsk_pangkat">Tanggal
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <input type="date" name="tglsk_pangkat" id="tglsk_pangkat" required="required"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pangkat">
                                        Pangkat/Gol. Ruang <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <select id="pangkat" data-live-search="true" class="form-control selectpicker"
                                                name="pangkat" title="-- Pilih --" required>
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
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="tmt_pangkat">TMT Pangkat
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <input type="date" name="tmt_pangkat" id="tmt_pangkat" required="required"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="masatahun">
                                        Masa Kerja Gol. Ruang <span class="required">*</span>
                                    </label>
                                    <div class="col-md-1 col-sm-1 col-xs-12">
                                        <input type="text" class="form-control" id="masatahun" name="masatahun"
                                               placeholder="Thn" required>Tahun
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-xs-12">
                                        <input type="text" class="form-control" id="masabulan" name="masabulan"
                                               placeholder="Bln" required>Bulan
                                    </div>
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="kenaikan_pangkat_usulan">
                                        Kenaikan Pangkat Usulan
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <input type="text" name="kenaikan_pangkat_usulan" id="kenaikan_pangkat_usulan" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--KENAIKAN GAJI BERKALA TERAKHIR--}}
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>KENAIKAN GAJI BERKALA TERAKHIR</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pejabat_penetap_gaji">
                                        Pejabat yang Menetapkan <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="pejabat_penetap_gaji" id="pejabat_penetap_gaji" required
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="skgaji_no">Surat Kenaikan Gaji
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <input type="text" name="skgaji_no" id="skgaji_no" required="required"
                                               class="form-control">
                                    </div>
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="skgaji_tgl">Tanggal
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <input type="date" name="skgaji_tgl" id="skgaji_tgl" required="required"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="skgaji_masakerja">
                                        Masa Kerja Gol. Ruang <span class="required">*</span>
                                    </label>
                                    <div class="col-md-1 col-sm-1 col-xs-12">
                                        <input type="text" class="form-control" id="skgaji_masakerja" name="skgaji_masakerja"
                                               placeholder="Thn" required>Tahun
                                    </div>
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="tmt_kgb">TMT KGB
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <input type="date" name="tmt_kgb" id="tmt_kgb" required="required"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--JABATAN SAAT INI--}}
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>JABATAN SAAT INI</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="unit_id">
                                        Sub-Unit <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="unit_id" data-live-search="true" class="form-control selectpicker"
                                                name="unit_id" title="-- Pilih --">
                                            @foreach( App\Model\Masterunitkerja::all() as $item)
                                                <option value="{{ $item->lokasi_bagian }}">{{ $item->namaunitkerja }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pejabat_penetap_jabatan">
                                        Pejabat yang Menetapkan <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="pejabat_penetap_jabatan" id="pejabat_penetap_jabatan" required
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nosk_jabatan">SK Jabatan
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <input type="text" name="nosk_jabatan" id="nosk_jabatan" required="required"
                                               class="form-control">
                                    </div>
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="tglsk_jabatan">Tanggal
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <input type="date" name="tglsk_jabatan" id="tglsk_jabatan" required="required"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="skpelantikan_no">SK Pelantikan
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <input type="text" name="skpelantikan_no" id="skpelantikan_no" required="required"
                                               class="form-control">
                                    </div>
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="skpelantikan_tgl">Tanggal
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <input type="date" name="skpelantikan_tgl" id="skpelantikan_tgl" required="required"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis_jabatan">Jenis Jabatan
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <select id="jenis_jabatan" data-live-search="true" class="form-control selectpicker"
                                                name="jenis_jabatan" title="-- Pilih --" required>
                                            <option value="Struktural">Struktural</option>
                                            <option value="Fungsional">Fungsional</option>
                                            <option value="Pejabat Negara">Pejabat Negara</option>
                                            <option value="Non Struktural">Non Struktural</option>
                                            <option value="KORPRI">KORPRI</option>
                                        </select>
                                    </div>
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="eselon">Eselon
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
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
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jabatan">
                                        Nama Jabatan <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="jabatan" id="jabatan" required class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sumpah_jabatan">
                                        Sumpah Jabatan <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <p id="sumpah_jabatan">
                                            Sudah:
                                            <input type="radio" class="flat" name="sumpah_jabatan" value="Sudah"
                                                   required> Belum:
                                            <input type="radio" class="flat" name="sumpah_jabatan" value="Belum">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 1em;margin-bottom: 1em">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-block btn-primary">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection