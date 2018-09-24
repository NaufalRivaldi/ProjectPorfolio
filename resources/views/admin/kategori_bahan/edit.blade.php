@extends('admin')

@section('title', 'Admin | Edit - Kategori Bahan')

@section('konten')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Material Category
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li></i> Settings</li>
        <li class="active">Material Category</li>
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
                <form  method="post" action="{{URL::to('admin/kategoribahan/update/'.$kategori->id)}}">
                  {{csrf_field()}}
                  <input type="hidden" name="_token" value="{{csrf_token()}}">

                  <div class="form-group">
                    <label for="nama">Nama Kategori :</label>
                    <input type="text" name="nama_kategori" class="form-control" value="{{$kategori->nama_kategori}}">
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