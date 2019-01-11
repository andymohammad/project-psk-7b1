@extends('layout.master')
@section('konten')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>Edit Data Mahasiswa 
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <!-- Default box -->
  <div class="box">
    <!-- /.box-header -->
    <div class="box-body">

      <form action="/datamhs/{{$d->id}}/update" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">NIM</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" disabled="true" name="nim" value="{{$d->nim}}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">NAMA</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_mhs" value="{{$d->nama_mhs}}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">GENDER</label>
            <div class="col-sm-4">
              <select class="form-control" name="jk">
                <option value="L" @if($d->jk == 'L') selected @endif>Laki-Laki</option>
                <option value="P" @if($d->jk == 'P') selected @endif>Perempuan</option>
              </select>
            </div>

            <label class="col-sm-2 control-label">ANGKATAN</label>
            <div class="col-sm-4">
              <select class="form-control" name="thn_masuk" value="{{$d->thn_masuk}}">
                <option @if($d->thn_masuk == '2018') selected @endif>2018</option>
                <option @if($d->thn_masuk == '2017') selected @endif>2017</option>
                <option @if($d->thn_masuk == '2016') selected @endif>2016</option>
                <option @if($d->thn_masuk == '2015') selected @endif>2015</option>
                <option @if($d->thn_masuk == '2014') selected @endif>2014</option>
              </select>
            </div>

          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">FAKULTAS</label>
            <div class="col-sm-4">
              <select class="form-control" name="fakultas" value="{{$d->fakultas}}">
                <option @if($d->fakultas == 'Pendidikan') selected @endif>Pendidikan</option>
                <option @if($d->fakultas == 'Ilmu Sosial & Politik') selected @endif>Ilmu Sosial & Politik</option>
                <option @if($d->fakultas == 'Teknik') selected @endif>Teknik</option>
                <option @if($d->fakultas == 'Kedokteran') selected @endif>Kedokteran</option>
                <option @if($d->fakultas == 'Pertanian') selected @endif>Pertanian</option>
                <option @if($d->fakultas == 'Ekonomi') selected @endif>Ekonomi</option>
                <option @if($d->fakultas == 'Hukum') selected @endif>Hukum</option>
              </select>
            </div>
            <label class="col-sm-2 control-label">PRODI</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="prodi" value="{{$d->prodi}}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">KONTAK</label>
            <div class="col-sm-10">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-phone"></i>
                </div>
                <input type="text" name="notelp" class="form-control" value="{{$d->notelp}}">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">ALAMAT</label>
            <div class="col-sm-10">
              <input type="text" name="alamat" class="form-control" value="{{$d->alamat}}">                      
            </div>
          </div>


          <button type="submit" class="btn btn-warning">Update</button>

        </div>
      </form>

    </div>
  </div>
  <!-- /.box -->
</section>
<!-- /.content -->
@endsection


@section('jskonten')
<!-- DataTables -->
<script src="/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
@endsection