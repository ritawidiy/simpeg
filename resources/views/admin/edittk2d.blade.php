@extends('layouts.master_admin')
@section('tittle', 'EDIT BIODATA')

@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Form Elements</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-15 col-sm-15 col-xs-15">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Identitas</h2>
                        
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
                                    <input type="text" name="nip" value="{{ $data->nip }}" required="required" class="form-control col-md-7 col-xs-12" readonly>
                                    <input type="hidden" name="obj_nip" value="{{ $data->id }}" required="required" class="form-control col-md-7 col-xs-12">
                                    <input type="hidden" name="_method" value="put" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NIP Lama
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="nip_lama" value="{{ $data->nip_lama }}" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Name Lengkap<span
                                        class="required">*</span>
                                    <br>
                                    <small class="text-navy">Gelar Depan - Nama - Gelar Belakang</small>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="nama" value="{{ $data->nama }}" name="last-name" required="required"
                                        class="form-control col-md-7 col-xs-12" readonly>
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Lahir
                                    <span class="required">*</span></label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <input type="date" name="tgl_lahir" value="{{ $data->tgl_lahir }}" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat Lahir
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="tempat_lahir" value="{{ $data->tempat_lahir }}" required="required" class="form-control col-md-7 col-xs-12">
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
                                    <input type="date" name="tgl_lulus" value="{{ $data->tgl_lulus }}" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jurusan <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="jurusan" value="{{ $data->jurusan }}" required="required" class="form-control col-md-7 col-xs-12">
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
                                    <input type="text" name="tugas_pokok" value="{{ $data->tempat_pokok }}" required="required" class="form-control col-md-7 col-xs-12">
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
    </div>
</div>
@endsection      
