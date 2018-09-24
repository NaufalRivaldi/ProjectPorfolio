@extends('admin')

@section('title', 'Admin | Edit - Options')

@section('konten')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Options
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li></i> Settings</li>
        <li class="active">Options</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- /.row -->
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="container-fluid">
              <br>
                <form  method="post" action="{{URL::to('admin/options/update/'.$toko->id)}}">
                  {{csrf_field()}}
                  <input type="hidden" name="_token" value="{{csrf_token()}}">

                  <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{$toko->email}}">
                  </div>
                  <div class="form-group">
                    <label for="no_telp">Telepon :</label>
                    <input type="text" name="no_telp" class="form-control" id="no_telp" value="{{$toko->no_telp}}">
                  </div>
                  <div class="form-group">
                    <label for="sosmed">Sosmed :</label>
                    <input type="text" name="sosmed" class="form-control" id="sosmed" value="{{$toko->sosmed}}">
                  </div>
                  <div class="form-group">
                    <label for="info">info :</label>
                    <textarea name="info" id="info" class="form-control">{{$toko->info}}</textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Update Data</button>
                </form>
              <br>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
@stop