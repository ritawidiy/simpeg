@extends('layouts.master_admin')
@section('tittle', 'EDIT BIODATA')

@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Form Elements</h3>
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
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Identitas</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form method="post" action="{{ route('save.editpegawai') }}" id="demo-form2"
                            data-parsley-validate class="form-horizontal form-label-left">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NIP <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="nip" value="{{ $data->nip }}" required="required" class="form-control col-md-7 col-xs-12"
                                        readonly>
                                    <input type="hidden" name="obj_nip" value="{{ $data->id }}" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                    <input type="hidden" name="_method" value="put" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NIP Lama
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="nip_lama" value="{{ $data->nip_lama }}" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Name Lengkap<span
                                        class="required">*</span>
                                    <br>
                                    <small class="text-navy">Gelar Depan - Nama - Gelar Belakang</small>
                                </label>
                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" name="gelar_depan" value="{{ $data->gelar_depan }}" required="required"
                                        class="form-control">
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                    <input type="text" name="nama" value="{{ $data->nama }}" required="required" class="form-control col-md-7 col-xs-12"
                                        readonly>
                                </div>
                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" name="gelar_belakang" value="{{ $data->gelar_belakang }}"
                                        required="required" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jabatan <span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="jabatan" value="{{ $data->jabatan }}" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Tempat
                                    Tanggal Lahir
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <input type="text" name="tempat_lahir" value="{{ $data->tempat_lahir }}" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <input type="date" name="tgl_lahir" value="{{ $data->tgl_lahir }}" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Pernikahan</label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <select class="form-control" name="status_perkawinan" value="">
                                        <option>{{ $data->status_perkawinan }}</option>
                                        <option value="Belum Menikah">Belum Menikah</option>
                                        <option value="Sudah Menikah">Sudah Menikah</option>
                                        <option value="Duda/Janda">Duda/Janda</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <select class="form-control" name="jenis_kelamin" value="">
                                        <option>{{ $data->jenis_kelamin }}</option>
                                        <option value="Laki-laki">Laki - Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Golongan Darah</label>
                                <div class="col-md-1 col-sm-1 col-xs-6">
                                    <select class="form-control" name="golongan_darah" value="">
                                        <option>{{ $data->golongan_darah }}</option>
                                        <option></option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                        <option value="O">O</option>
                                    </select>
                                </div>
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Agama</label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <select class="form-control" name="agama" value="">
                                        <option>{{ $data->agama }}</option>
                                        <option></option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="x_title">
                                <h2>Form Pendidikan</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Pendidikan</label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <select class="form-control" name="pendidikan" value="">
                                        <option>{{ $data->pendidikan }}</option>
                                        <option value="SLTA">SLTA</option>
                                        <option value="D-2">D-2</option>
                                        <option value="D-3">D-3</option>
                                        <option value="S-1">S-1</option>
                                        <option value="S-2">S-2</option>
                                    </select>
                                </div>
                                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Tanggal Lulus
                                    <span class="required">*</span></label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <input type="date" name="tgl_lulus" value="{{ $data->tgl_lulus }}" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jurusan <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="jurusan" value="{{ $data->jurusan }}" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="x_title">
                                <h2>Form Kepegawaian</small></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tugas Pokok
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="tugas_pokok" value="{{ $data->tempat_pokok }}" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Kedudukan Kepegawaian</label>
                                <div class="col-md-1 col-sm-1 col-xs-6">
                                    <select class="form-control" name="statpeg" value="{{ $data->statpeg }}">
                                        <option></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat Tugas
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="tempat_tugas" value="{{ $data->tempat_tugas }}" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Absen <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="absen" value="{{ $data->absen }}" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="x_title">
                                <h2>Form Jabatan</small></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis Jabatan
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="jenisjabatan" value="{{ $data->jenisjabatan }}" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Jabatan
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="namajabatan" value="{{ $data->namajabatan }}" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No Surat
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="nosurat" value="{{ $data->nosurat }}" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> TMT Jabatan
                                    <span class="required">*</span></label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <input type="date" name="tmt" value="{{ $data->tmt }}" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Pejabat
                                    Pengesah <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="pejabat" value="{{ $data->pejabat }}" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Eselon</label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <select class="form-control" name="eselon" value="{{ $data->eselon }}">
                                        <option></option>
                                        <option value="2A">2A</option>
                                        <option value="2B">2B</option>
                                        <option value="3A">3A</option>
                                        <option value="4A">4A</option>
                                        <option value="N/E">N/E</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Mutasi</label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <select class="form-control" name="jenismutasi" value="{{ $data->jenismutasi }}">
                                        <option></option>
                                        <option value="dalamdaerah">Dalam Daerah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"> Unit Kerja</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="unitkerja" value="{{ $data->unitkerja }}">
                                        <option></option>
                                        <option value="badanlingkunganhidup"> Badan Lingkungan Hidup</option>
                                        <option value="dinaspekerjaanumum"> Dinas Pekerjaan Umum</option>
                                        <option value="dinasmudaolahraga">Dinas Pemuda, Olahraga</option>
                                        <option value="sekretariatdaerah"> Sekretariat Daerah</option>
                                        <option value="sekretariatdprd"> Sekretariat DPRD</option>
                                        <option value="kantorsatuanpolisipamongpraja"> Kantor Satuan Polisi Pamong
                                            Praja</option>
                                        <option value="badanperencaanpembangunandaerah"> Badan Perencanaan Pembangunan
                                            Daerah</option>
                                        <option value="inspektoratwilayahdaerah"> Inspektorat Wilayah Daerah</option>
                                        <option value="dinasperindustriandanperdagangan"> Dinas Perindustrian dan
                                            Perdagangan</option>
                                        <option value="dinaskelautandanperikanan"> Dinas Kelautan dan Perikanan</option>
                                        <option value="badandiklatdanlitbang"> Badan Diklat dan Litbang</option>
                                        <option value="dinasperhubungankomunikasidaninformasi"> Dinas Perhubungan,
                                            Komunikasi dan Informasi</option>
                                        <option value="badanpenanamanmodaldaerah"> Badan Penanaman Modal Daerah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="x_title">
                                <h2>Form Data Anak</small></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Anak
                                    <span class="required"></span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="namaanak" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat
                                    Tanggal Anak <span class="required"></span>
                                </label>
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                    <input type="text" name="tempatlahiranak" id="first-name" required="required" class="form-control">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <input type="date" name="tgllahiranak" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin Anak</label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <select class="form-control" name="jeniskelaminanak">
                                        <option></option>
                                        <option value="Laki-laki">Laki - Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Keluarga</label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <select class="form-control" name="statuskeluargaanak">
                                        <option></option>
                                        <option value="anakkandung">Anak Kandung</option>
                                        <option value="anaktiri">Anak Tiri</option>
                                        <option value="belummenikah">Belum Menikah</option>
                                        <option value="menikah">Menikah</option>
                                    </select>
                                </div>
                                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Status
                                    Tunjangan <span class="required">*</span></label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <select class="form-control" name="statustunjangananak">
                                        <option></option>
                                        <option value="tidakditanggung">Tidak Ditanggung</option>
                                        <option value="ditanggung">Ditanggung</option>
                                        <option value="ada">Ada</option>
                                        <option value="tidakada">Tidak Ada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Pendidikan Umum</label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <select class="form-control" name="pendidikanumumanak">
                                        <option></option>
                                        <option value="tidakjelas">Tidak Jelas</option>
                                        <option value="tk">TK</option>
                                        <option value="sd">SD</option>
                                        <option value="smp">SMP</option>
                                        <option value="sltp">SLTP</option>
                                        <option value="sma">SMA</option>
                                        <option value="slta">SLTA</option>
                                        <option value="dimplomaIII">Diploma III</option>
                                        <option value="sarjana">Sarjana</option>
                                        <option value="s-1">S-1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pekerjaan
                                    Anak <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="pekerjaananak" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            
















                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button class="btn btn-primary" type="button">Cancel</button>
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-15 col-sm-15 col-xs-15">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Bahasa</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form method="POST" action="{{ route('save.biodata_pegawai') }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Bahasa <span class="required">*</span>
                                </label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                  <input type="text" name="namabahasa_daerah" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Kemampuan Bicara</label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                  <select class="form-control" name="kemampuanbicara_bahasa">
                                    <option></option>
                                    <option value="sangatbaik">Sangat Baik</option>
                                    <option value="baik">Baik</option>
                                    <option value="sedang">Sedang</option>
                                  </select>
                                </div>
                              </div>
                  
                              <div class="x_title">
                                <h2>Form Bahasa Asing</h2>
                                <div class="clearfix"></div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Bahasa <span class="required">*</span>
                                </label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                  <input type="text" name="namabahasa_asing" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Kemampuan Bicara</label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                  <select class="form-control" name="kemampuanbicara_asing">
                                    <option></option>
                                    <option value="sangatbaik">Sangat Baik</option>
                                    <option value="baik">Baik</option>
                                    <option value="sedang">Sedang</option>
                                    <option value="kurang">Kurang</option>
                                  </select>
                                </div>
                              </div>
                              <div class="x_title">
                                <h2>Form Cuti</small></h2>
                                <div class="clearfix"></div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis Cuti <span class="required">*</span>
                                </label>
                                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                  <input type="text" name="jeniscuti" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alasan Cuti <span class="required">*</span>
                                </label>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                  <input type="text" name="alasancuti" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat Cuti <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="alamatcuti" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No. Telepon <span class="required"></span>
                                </label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                  <input type="text" name="telpcuti" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="contropl-label col-md-3 col-sm-3 col-xs-12">Tanggal Mulai</label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                  <input type="date" name="tglmulai" id="first-name" required="required" class="form-control col-md-7 col-xs-12">                
                                </div>
                                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Tanggal Selesai <span class="required"></span></label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                  <input type="date" name="tglselesai" id="first-name" required="required" class="form-control col-md-7 col-xs-12">   
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NO. SK <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="nosk" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal SK<span class="required">*</span></label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                  <input type="date" name="tglsk" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pangkat Saat Cuti <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="pangkatsaatitu" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jabatan Saat Cuti <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="jabatansaatitu" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Eselon Saat Cuti <span class="required"></span>
                                </label>
                                <div class="col-md-2 col-sm-2 col-xs-10">
                                  <input type="text" name="eselonsaatitu" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Unit Kerja Saat Cuti <span
                                    class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="unitkerjasaatitu" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                  
                              <div class="x_title">
                                <h2>Form Diklat</small></h2>
                                <div class="clearfix"></div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Diklat</label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                  <select class="form-control" name="jenisdiklat">
                                    <option></option>
                                    <option value="teknis">Teknis</option>
                                    <option value="fungsional">Fungsional</option>
                                    <option value="struktural">Struktural</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Diklat <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="namadiklat" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat Diklat <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="tempatdiklat" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Penyelenggara <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="penyelenggara" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Angkatan <span class="required"></span>
                                </label>
                                <div class="col-md-1 col-sm-1 col-xs-6">
                                  <input type="text" name="angkatan" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Mulai</label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                  <input type="date" name="tglmulai" id="first-name" required="required" class="form-control col-md-7 col-xs-12">                
                                </div>
                                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Tanggal Selesai <span class="required"></span></label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                  <input type="date" name="tglselesai" id="first-name" required="required" class="form-control col-md-7 col-xs-12">   
                                </div>
                              </div>         
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Lama Diklat <span class="required"></span>
                                </label>
                                <div class="col-md-1 col-sm-1 col-xs-6">
                                  <input type="text" name="lamajamdiklat" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NOSK <span class="required"></span>
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                  <input type="text" name="nosk" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal SK<span class="required">*</span></label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                  <input type="date" name="tglsk" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No. Sertifikat <span class="required"></span>
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                  <input type="text" name="nosertifikat" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Sertifikat<span class="required">*</span></label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                  <input type="date" name="tglsertifikat" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Pangkat Saat Diklat</label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                  <select class="form-control" name="pangkatsaatitu">
                                    <option></option>
                                    <option value="pengaturmuda2/a">Pengatur Muda II/a</option>
                                    <option value="penatamuda3/a">Penata Muda III/a</option>
                                    <option value="pengaturtkI2/d">Pengatur Tk.I II/d</option>
                                    <option value="penatatkI3/d">Penata Tk.I III/d</option>
                                    <option value="penatur2/c">Pengatur II/c</option>
                                    <option value="penata3/c">Penata III/c</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jabatan Saat Diklat <span class="required"></span>
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                  <input type="text" name="jabatansaatitu" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Eselon Saat Diklat</label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                  <select class="form-control" name="eselonsaatitu">
                                    <option></option>
                                    <option value="0">0</option>
                                    <option value="3A">3A</option>
                                    <option value="n/e">N/E</option>
                                    <option value="3A">4A</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Unit Kerja Saat Diklat <span
                                    class="required"></span>
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                  <input type="text" name="unitkerjasaatitu" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="ln_solid"></div>
                            </form>
                          </div>







                </div>
            </div>
        </div>
        <div class="row">
        </div>
    </div>
</div>
@endsection