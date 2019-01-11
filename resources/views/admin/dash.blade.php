@extends('layout.master')
@section('konten')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Beranda
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> dashboard</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">

    <!-- /.box-header -->
    <div class="box-body">

      <table id="tab1" class="table table-bordered table-hover text-center">
        <thead>
          <tr>
            <!--<th class="text-center" style="width:1px;">NO</th>-->
            <th class="text-center">NIM</th>
            <th class="text-center">NAMA</th>
            <th class="text-center">FAKULTAS</th>
            <th class="text-center">PRODI</th>
            <th class="text-center">ANGKATAN</th>
            <th class="text-center">AKSI</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data_mhs as $d)
          <tr>
            <td>{{ $d->nim }}</td>
            <td>{{ $d->nama_mhs }}</td>
            <td>{{ $d->fakultas }}</td>
            <td>{{ $d->prodi }}</td>
            <td>{{ $d->thn_masuk }}</td>
            <td class="text-center">
              @if(auth()->user()->role == 'admin')
              <a href="/datamhs/{{$d->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
              <a href="/datamhs/{{$d->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data {{$d->nama_mhs}} ?')">Hapus</a>
              @endif
              <a href="#" class="btn btn-success btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ')">Detail</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <!-- /.box-body -->

  <!-- /.box-footer-->
</div>
<!-- /.box -->

</section>
<!-- /.content -->

<!-- DataTables -->
@endsection
@section('jskonten')
<script src="/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- page script -->
<script>
  $(function () {
    $('#tab1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

@endsection