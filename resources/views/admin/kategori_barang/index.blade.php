@extends('admin')

@section('title', 'Admin | Kategori Barang')

@section('konten')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kategori Barang
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li></i> Pengaturan</li>
        <li class="active">Kategori Barang</li>
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
                  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Insert Data</a>
                </div>
              </p>
              @if(!empty('$kategori'))
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                  @foreach($kategori as $data)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$data->nama_kategori}}</td>
                      <td>
                        <a href="{{url('admin/kategoribarang/'.$data->id.'/edit')}}"><i class="fa fa-gear text-primary"></i></a>
                        &nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="{{url('admin/kategoribarang/delete/'.$data->id)}}" onclick="return valDelete();"><i class="fa fa-trash text-danger"></i></a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              @else
                <p>Empty Data</p>
              @endif
              <div class="pull-right">{{$kategori->links()}}</div>
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
        <h4 class="modal-title" id="myModalLabel">Tambah Kategori Barang</h4>
      </div>
      <div class="modal-body">
        <form  method="post" action="{{URL::to('admin/kategoribarang/')}}">
          {{csrf_field()}}
          <input type="hidden" name="_token" value="{{csrf_token()}}">

          <div class="form-group">
            <label for="nama">Nama Kategori :</label>
            <input type="text" name="nama_kategori" class="form-control">
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