@extends('layouts.admin')

@php

  function viewMessage($msg){
    $pesan = "";

    if($msg==1)
    {
      $pesan = "Proses tambah data berhasil dilakukan!";
    }elseif($msg==2){
      $pesan = "Error! Proses tambah data gagal dilakukan!";
    }elseif($msg==3){
      $pesan = "Proses edit data berhasil dilakukan!";
    }elseif($msg==4){
      $pesan = "Error! Proses edit data gagal dilakukan!";
    }elseif($msg==5){
      $pesan = "Proses hapus data berhasil dilakukan!";
    }elseif($msg==6){
      $pesan = "Error! Proses hapus data gagal dilakukan!";
    }

    $view = "
      <div class=\"alert alert-info alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <h4><i class=\"icon fa fa-info\"></i> Informasi!</h4>
                <strong>".$pesan."</strong>
              </div>

    ";

    return $view;
  }
  
@endphp
@section('content')

  @if($act=="ViewTambahMahasiswa")
  	<div class="row">
  	<div class="col-md-12">
  		<div class="box box-info">
  	            <div class="box-header with-border">
  	              <h3 class="box-title">Tambah Mahasiswa</h3>
  	            </div>
  	            <!-- /.box-header -->
  	            <!-- form start -->
  	            <form class="form-horizontal" action="{{ asset('mhs/prosestambahmahasiswa') }}" method="post">
                  {!! csrf_field() !!}
  	              <div class="box-body">
  	                <div class="form-group">
  	                  <label for="nim" class="col-sm-2 control-label">NIM</label>
  	                  <div class="col-sm-8">
  	                    <input type="text" class="form-control" id="nim" name="nim" placeholder="Nim">
  	                  </div>
  	                </div>
  	                <div class="form-group">
  	                  <label for="nama" class="col-sm-2 control-label">Nama</label>
  	                  <div class="col-sm-8">
  	                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
  	                  </div>
  	                </div>
                    <div class="form-group">
                      <label for="jurusan" class="col-sm-2 control-label">Jurusan</label>
                      <div class="col-sm-8 control-label">
                         <select class="col-sm-12 control-label" name="jurusan">
                            <option value="">None</option>
                            <option value="Pendidikan Teknik Informatika">Pendidikan Teknik Informatika</option>
                            <option value="Pendidikan Teknik Mesin">Pendidikan Teknik Mesin</option>
                            <option value="Pendidikan Teknik Elektro">Pendidikan Teknik Elektro</option>
                            <option value="Pendidikan Kesejahteraan Keluarga">Pendidikan Kesejahteraan Keluarga</option>
                          </select>
                      </div>
                    </div>
                    <div class="form-group">
  	                  <label for="judulskripsi" class="col-sm-2 control-label">Judul Skripsi</label>
  	                  <div class="col-sm-8">
  	                    <input type="text" class="form-control" id="judulskripsi" name="judulskripsi" placeholder="judulskripsi">
  	                  </div>
  	                </div>
                    <div class="form-group">
                      <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                      </div>
                    </div>
                    

  	              </div>
  	              <!-- /.box-body -->
  	              <div class="box-footer">
  	                <a href="{{ asset('/mhs') }}" class="btn btn-default">Cancel</a>
  	                <button type="submit" class="btn btn-info pull-right">Simpan</button>
  	              </div>
  	              <!-- /.box-footer -->
  	            </form>
  	          </div>
  	    </div>
  	</div>
  @endif


  @if($act=="ViewEditMahasiswa")
    <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Mahasiswa</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <form class="form-horizontal" action="{{ asset('mhs/proseseditmahasiswa') }}" method="post">
                  {!! csrf_field() !!}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="nim" class="col-sm-2 control-label">NIM</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="nim" name="nim" value="{{ $mhs->nim }}">
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $mhs->id }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nama" class="col-sm-2 control-label">Nama</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $mhs->nama }}">
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="jurusan" class="col-sm-2 control-label">Jurusan</label>
                      <div class="col-sm-8 control-label">
                         <select class="col-sm-12 control-label" name="jurusan" id="jurusan" name="jurusan" value="{{ $mhs->jurusan }}">
                            <option value="">None</option>
                            <option value="Pendidikan Teknik Informatika">Pendidikan Teknik Informatika</option>
                            <option value="Pendidikan Teknik Mesin">Pendidikan Teknik Mesin</option>
                            <option value="Pendidikan Teknik Elektro">Pendidikan Teknik Elektro</option>
                            <option value="Pendidikan Kesejahteraan Keluarga">Pendidikan Kesejahteraan Keluarga</option>
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="judulskripsi" class="col-sm-2 control-label">Judul Skripsi</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="" name="judulskripsi" value="{{ $mhs->judulskripsi }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $mhs->alamat }}">
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <a href="{{ asset('/mhs') }}" class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-info pull-right">Update</button>
                  </div>
                  <!-- /.box-footer -->
                </form>
              </div>
        </div>
    </div>
  @endif

  @if($act=="viewMahasiswa" || $act=="ViewDeleteMahasiswa")

  
    @if (isset($msg))
      <?php  echo viewMessage($msg); ?>
    @endif

    @if ($act=="ViewDeleteMahasiswa")

        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-warning"></i> Info!</h4>
          Hapus Mahasiswa <strong> {{ $mhs_del->nama }} </strong> ?
            <a href="{{ asset('/mhs') }}" class="btn-sm btn-primary">Cancel</a>
            <a href="{{ url('/mhs/prosesdeletemahasiswa',$mhs_del->id) }}" class="btn-sm btn-danger">Hapus</a>
        </div>


    @endif



  	<div class="row">
  	<div class="col-md-12">
  		<div class="box box-info">
  	            <div class="box-header with-border">
  	              <h3 class="box-title">Data Mahasiswa</h3>
                  <a href="{{ asset('mhs/viewtambahmahasiswa') }}" class="btn btn-info pull-right">Tambah</a>
  	            </div>
  	            <!-- /.box-header -->
  	            <!-- form start -->
  	            <form class="form-horizontal">
  	              <div class="box-body">
  	                <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Mahasiswa</th>
                    <th>Jurusan</th>
                    <th>Judul Skripsi</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                      $i = 1;
                    @endphp

                  @foreach ($mhs as $m)
                     <tr>
                      <td>{{ $i }}</td>
                      <td>{{ $m->nim }}</td>
                      <td>{{ $m->nama }}</td>
                      <td>{{ $m->jurusan }}</td>
                      <td>{{ $m->judulskripsi }}</td>
                      <td>{{ $m->alamat }}</td>
                      
                      <td>
                        <a href="{{ url('mhs/vieweditmahasiswa',$m->id) }}" class="btn-sm btn-warning ">Edit</a> &nbsp;
                        <a href="{{ url('mhs/viewdeletemahasiswa',$m->id) }}" class="btn-sm btn-danger ">Hapus</a>   
                      </td>
                    </tr>

                    @php
                      $i++;
                    @endphp
                  @endforeach
                  
  	              <!-- /.box-body -->
  	             </tbody>
                  
                </table>
  	            </form>
  	          </div>
  	    </div>
  	</div>
  @endif

@endsection



