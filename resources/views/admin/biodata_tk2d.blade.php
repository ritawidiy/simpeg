@extends('layouts.master_admin')
@section('tittle', 'BIODATA TK2D')
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
                  <li data-toggle="tooltip" title="Tambah Data"><a href="{{ route('tambah.pegawai') }}"><i class="fa fa-plus"></i></a></li>
                </ul>
                <div class="clearfix"></div>
              </div>
          <div class="x_content">
              <div class="row form-group">
                  <div class="col-lg-6">
                      <label for="unitKerja" class="control-label">Filter Unit Kerja</label>
                      <select id="unitKerja" data-live-search="true" class="form-control selectpicker" name="unitkerja" title="-- Pilih Unit Kerja --" data-max-options="1" multiple>
                          @foreach( App\Model\Masterunitkerja::all() as $item)
                          <option value="{{ $item->lokasi_bagian }}">{{ $item->namaunitkerja }}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="col-lg-6">
                    <label for="nama_pegawai" class="control-label">Filter Nama Pegawai</label>
                    <select id="nama_pegawai" data-live-search="true" class="form-control selectpicker" name="nama_pegawai" title="-- Pilih Nama Pegawai --"
                      data-max-options="1" multiple>
                      @foreach( $data as $value)
                      <option value="{{ $value->gelar_depan.' '.$value->nama.' '.$value->gelar_belakang }}">
                        {{ $value->gelar_depan.' '.$value->nama.' '.$value->gelar_belakang }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <table id="myDataTable" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th><input type="checkbox" id="check-all" class="flat"></th>
                      <th>NRTK2D</th>                      
                      <th>Lokasi Bagian</th>
                      <th>Nama - NRTK2D</th>
                      <th>TTL</th>
                      <th>Jenis Kelamin</th>
                      <th>Pendidikan / Jurusan Pendidikan</th>
                      <th>Tempat Tugas</th>
                      <th>Kecamatan</th>
                      <th>Jabatan</th>
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
                      <td style="vertical-align: middle"> {{ $value->tempat_lahir }}, {{ $value->tgl_lahir }} </td>
                      <td style="vertical-align: middle"> {{ $value->jenis_kelamin }} </td>
                      <td style="vertical-align: middle"> {{ $value->pendidikan }} {{ $value->jurusan }}</td>
                      <td style="vertical-align: middle"> {{ $value->tempat_tugas }} </td> 
                      <td style="vertical-align: middle"> {{ $value->kecamatan }} </td> 
                      <td style="vertical-align: middle"> {{ $value->jabatan }} </td>
                      <td style="vertical-align: middle">
                        <a href="{{ route('showpegawai',$id=$value->nip) }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i>
                          View </a>
                        <a type="submit" href="{{ route('editpegawai',$id=$value->id) }}" class="btn btn-info btn-xs"><i
                          class="fa fa-pencil"></i> Edit </a>
                        <a href="{{ route('printpegawai',$id=$value->nip) }}" class="btn btn-success btn-xs" target="_blank"><i
                          class="fa fa-print"></i> Print </a>
                      </td>      
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="row form-group">
                  <div class="col-sm-4" id="action-btn">
                    <div class="btn-group" style="float: right">
                      <button id="btn_pdf" type="button" class="btn btn-primary btn-sm" style="font-weight: 600">
                        <i class="fa fa-print"></i>&ensp;CETAK
                      </button>
                      <button id="btn_remove_app" type="button" class="btn btn-danger btn-sm" style="font-weight: 600">
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
                window.open('{{ route('pdfpegawai', ['id' => '']) }}/'+ids, '_blank');
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
</script>
    // <script>
    //   $("#unitKerja").on("change", function () {
    //         $(".dataTables_filter input[type=search]").val($(this).val()).trigger('keyup');
    //     });
    // </script>
@endpush