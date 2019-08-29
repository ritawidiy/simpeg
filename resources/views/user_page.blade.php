@extends('layouts.master_user')
@section('tittle', 'User Page') 


@section('content')
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row ">
      
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph">

              <div class="row x_title">
                <div class="col-md-6">
                  <h3>Kepegawaian</h3>
                </div>
              </div>
              <div class="col-md-10 col-sm-10 col-xs-20">
                  <h2>Anda masuk sebagai Kepegawaian. Dalam halaman ini anda berhak </h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <div class="dashboard-widget-content">
    
                        <ul class="list-unstyled timeline widget">
                          <li>
                            <div class="block">
                              <div class="block_content">
                                <h2 class="title">
                                  <a>Membuat dan mengubah semua data Pegawai pada UPT Anda</a>
                                </h2>
                                <div class="byline"></div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>                
              <div class="clearfix"></div>
            </div>
          </div>
      



    </div>
  </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
