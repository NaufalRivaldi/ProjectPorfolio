@extends('admin')

@section('title', 'Admin | User Admin')

@section('konten')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Admin
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

              @include('plugin.error_list')

              <p>
                <div class="pull-left">
                  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
              </p>
              @if(!empty('$user'))
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                  @foreach($user as $data)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$data->name}}</td>
                      <td>{{$data->email}}</td>
                      <td>
                        <a href="{{url('admin/user/'.$data->id.'/edit')}}"><i class="fa fa-gear text-primary"></i></a>
                        &nbsp;&nbsp;|&nbsp;&nbsp;
                        @if(Auth::user()->id == $data->id)
                            <a href="{{url('#')}}"><i class="fa fa-trash text-danger"></i></a>
                        @else
                            <a href="{{url('admin/user/delete/'.$data->id)}}" onclick="return valDelete();"><i class="fa fa-trash text-danger"></i></a>
                        @endif
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              @else
                <p>Empty Data</p>
              @endif
              <div class="pull-right">{{$user->links()}}</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah User Admin</h4>
      </div>
      <div class="modal-body">
        <form  method="post" action="{{route('register')}}">
          {{csrf_field()}}
          <input type="hidden" name="_token" value="{{csrf_token()}}">

          <div class="form-group">
            <label for="nama">Nama User :</label>
            <input type="text" name="name" class="form-control" placeholder="Masukkan Nama User..">
          </div>
          <div class="form-group">
            <label for="nama">Email :</label>
            <input type="email" name="email" class="form-control" placeholder="example@mail.com..">
          </div>
          <div class="form-group">
            <label for="nama">Password :</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan Password..">
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Insert Data</button>
        </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@stop