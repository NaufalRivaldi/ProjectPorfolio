@extends('admin')

@section('title', 'Admin | Edit - User Admin')

@section('konten')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit User Admin
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li></i> Pengaturan</li>
        <li class="active">User Admin</li>
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
                <form  method="post" action="{{URL::to('admin/user/update/'.$user->id)}}">
                  {{csrf_field()}}
                  <input type="hidden" name="_token" value="{{csrf_token()}}">

                  <div class="form-group">
                    <label for="nama">Nama User :</label>
                    <input type="text" name="name" class="form-control" value="{{$user->name}}">
                  </div>
                  <div class="form-group">
                    <label for="nama">Email :</label>
                    <input type="email" name="email" class="form-control" value="{{$user->email}}">
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