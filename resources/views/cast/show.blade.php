@extends('template.master')

@section('title','AdminLTE 3 | Show-Data')

@push('css')
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('atmint/plugins/fontawesome-free/css/all.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('atmint/dist/css/adminlte.min.css') }}">
@endpush

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('cast.store') }}" method="POST">
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nama">Nama Pemeran</label>
                <input name="nama" type="text" class="form-control" id="nama"  placeholder="Nama Pemeran" value="{{ $cast['name'] }}" @disabled(true)>
              </div>

              <div class="form-group">
                <label for="nama">Umur</label>
                <input name="umur" type="number" class="form-control" id="nama"  placeholder="Umur Pemeran" value="{{ $cast['umur']}}" @disabled(true)>
              </div>

            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="nama">Biografi Pemeran</label>
                <textarea name="bio" id="bio" class="form-control" cols="30" rows="5" placeholder="Biografi Pemeran" @disabled(true)>{{ $cast['bio'] }}</textarea>
              </div>

            </div>
          </div>
          <div class="px-3 d-flex justify-content-between align-items-center">
            <a href="{{ route('cast.index') }}" class="btn btn-primary">Kembali</a>
          </div>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
</div>
@endsection

@push('js')
<!-- jQuery -->
<script src="{{ asset('atmint/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('atmint/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables & Plugins -->
<script src="{{ asset('atmint/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('atmint/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('atmint/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('atmint/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('atmint/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('atmint/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('atmint/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('atmint/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('atmint/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('atmint/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('atmint/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('atmint/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- atmint App -->
<script src="{{ asset('atmint/dist/js/adminlte.min.js') }}"></script>
<!-- atmint for demo purposes -->
<script src="{{ asset('atmint/dist/js/demo.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endpush