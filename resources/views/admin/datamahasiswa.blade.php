@extends('layout.master')
@section('konten')
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Daftar Mahasiswa 
    </h1>
    <ol class="breadcrumb">
        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambahdata">
          <i class="fa fa-user-plus">
            Tambah Mahasiswa
          </i>
        </button>          
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
                                <a href="/datamhs/{{$d->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/datamhs/{{$d->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data {{$d->nama_mhs}} ?')">Hapus</a>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
      </div>
<!-- /.box -->
  </section>
<!-- /.content -->

<!-- Modal -->
<div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="tambahdataLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Tambah Data Mahasiswa</h3>
      </div>
      <div class="modal-body">
          <form action="/datamhs/create" method="POST" class="form-horizontal">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">NIM</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nim">
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">NAMA</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_mhs">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">EMAIL</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">GENDER</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="jk">
                            <option selected="selected" value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>

                    <label class="col-sm-2 control-label">ANGKATAN</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="thn_masuk">
                            @for ($i = 2010; $i <= 2019; $i++)
                            <option selected="selected">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">FAKULTAS</label>
                  <div class="col-sm-4">
                      <select class="form-control" name="fakultas">
                          <option selected="selected">Pendidikan</option>
                          <option>Ilmu Sosial & Politik</option>
                          <option>Teknik</option>
                          <option>Kedokteran</option>
                          <option>Pertanian</option>
                          <option>Ekonomi</option>
                          <option>Hukum</option>
                      </select>
                  </div>
                  <label class="col-sm-2 control-label">PRODI</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" name="prodi">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">KONTAK</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-phone"></i>
                            </div>
                            <input type="text" name="notelp" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">ALAMAT</label>
                  <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control">                      
                    </div>
                  </div>
                  
                </div>
              </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
      </div>
    <!-- /.modal-content -->
    </div>
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection


@section('jskonten')
<!-- DataTables -->
  <script src="/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script>
    $(function () {
      $('#tab1').DataTable()
      $('#tab2').DataTable({
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