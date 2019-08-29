<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/kutaitimur.png" type="image/ico" />

    <title>@yield('tittle')</title>

    <!-- Bootstrap -->
    <link href="{{ asset('/vendors/bootstrap/dist/css/bootstrap.min.css') }}"  rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{ asset('/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
    <!-- Sweet Alert v2 -->
    <link rel="stylesheet" href="{{ asset('/vendors/sweetalert2/sweetalert2.min.css') }}">
    <script src="{{ asset('/vendors/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- bootstrap-select -->
    <link href="{{ asset('/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('/build/css/custom.min.css') }}" rel="stylesheet">
    <style>
        #datatable-buttons_wrapper .dataTables_filter {
            width: 40%;
        }
    </style>
    @stack('style')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="admin_page" class="site_title">
                <i class="fa fa-paw" href="images/kutaitimur.png"></i>
                <span>SIMPEG</span></a>
            </div>
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->username }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>List Menu</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-user"></i> Pegawai <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('data.pegawai')}}">Biodata Pegawai</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Penjagaan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route ('naikpangkatreg') }}">Kenaikan Pangkat Reguler</a></li>
                      <li><a href="{{ route ('naikpangkatpil') }}">Kenaikan Pangkat Pilihan</a></li>
                      <li><a href="{{ route ('naikgajiberkala')}}">Kenaikan Gaji Berkala</a></li>
                      <li><a href="{{ route ('sks10thn')}}">Satylancana Karya Satya 10 Tahun</a></li>
                      <li><a href="{{ route ('sks20thn')}}">Satylancana Karya Satya 20 Tahun</a></li>
                      <li><a href="{{ route ('sks30thn')}}">Satylancana Karya Satya 30 Tahun</a></li>
                      <li><a href="{{ route ('usiapensiun')}}">Usia Pensiun</a></li>
                      <li><a href="{{ route ('naiktk2d')}}">TK2D</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Filter <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('data.pegawai.Agama') }}">Filter Agama</a></li>
                      <li><a href="{{ route('data.pegawai.Golongan') }}">Filter Golongan</a></li>
                      <li><a href="{{ route('data.pegawai.Pangkat') }}">Filter Pangkat</a></li>
                      <li><a href="{{ route('data.pegawai.Kelamin') }}">Filter Kelamin</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clipboard"></i> Proses <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('show.usulan-mutasi')}}">Proses Mutasi</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-asterisk"></i>Password <span class="fa fa-chevron-down"></span></a>
                  </li>n
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">{{ Auth::user()->username }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <li><a class="btn_signOut2">
                          <i class="fa fa-sign-out-alt pull-right"></i> Logout</a>
                      <form id="logout-form2" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        @yield('content')
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('/vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Datatables -->
    <script src="{{ asset('/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ asset('/vendors/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{ asset('/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ asset('/vendors/DateJS/build/date.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ asset('/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- boostrap-select -->
    <script src="{{ asset('/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('/build/js/custom.min.js') }}"></script>  
    @include('layouts.partials._pnotify')
    @include('layouts.partials._confirm')
    @stack('script')
  </body>
</html>
