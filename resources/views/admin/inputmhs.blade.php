@extends('layout.master')
@section('konten')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Daftar Mahasiswa
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
              
              <table id="tab1" class="table table-bordered table-striped width="100%" cellspacing="0"">
                <thead>
                <tr>
                  <th class="text-center" style="width:1px;">NO</th>
                  <th class="text-center">NIM</th>
                  <th class="text-center">NAMA</th>
                  <th class="text-center">FAKULTAS</th>
                  <th class="text-center">PRODI</th>
                  <th class="text-center">STATUS</th>
                  <th class="text-center">AKSI</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data_mhs as $d)
                    <tr>
                            <td class="text-center">{{ $d->id }}</td>
                            <td>{{ $d->nim }}</td>
                            <td>{{ $d->nama_mhs }}</td>
                            <td>{{ $d->fakultas }}</td>
                            <td>{{ $d->prodi }}</td>
                            <td>{{ $d->thn_masuk }}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-info btn-sm">Edit</button>
                                <button type="button" class="btn btn-danger btn-sm">Hapus</button>
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