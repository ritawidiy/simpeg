@extends('layouts.master_user')
@section('tittle', 'Biodata TK2D') 
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
            <h2>Daftar {{ count($data) }} Pegawai TK2D</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            </ul>
                    <h2>Biodata </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      
                      
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama - NRTK2D</th>
                          <th>Tmpat Lahi, Tgl. Lahi</th>
                          <th>Jenis Kelamin</th>
                          <th>Pendidikan / Juusan Pendidikan</th>
                          <th>Tmpat Tugas</th>
                          <th>Kcamatan</th>
                          <th>Jabatan</th>
                          <th>PTT / TK2D</th>
                          <th>TMT TK2D</th>
                          <th>SPMT TK2D</th>
                          <th><i class="fa fa-print"></i>	Cetak</th>
                        </tr>
                      </thead>
                      
                    </table>

                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
</div>

@endsection