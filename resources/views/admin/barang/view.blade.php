@extends('admin')

@section('title', 'Admin | Barang')

@section('konten')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Barang
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"></i> Product</li>
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
                  <a href="{{url('admin/barang')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
              </p>
              @if(!empty('$barang'))
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Foto</th>
                    <th>Bahan</th>
                    <th>Harga</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                  @foreach($barang as $data)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$data->nama_barang}}</td>
                      <td><img src="{{url('dist/img/fotoupload/'.$data->foto)}}" width="80px"></td>
                      <td>{{$data->bahan}}</td>
                      <td>Rp. {{$data->harga}}</td>
                      <td>
                        <a href="{{url('admin/barang/show/'.$data->id)}}"><i class="fa fa-eye text-success"></i></a>
                        &nbsp;&nbsp;
                        <a href="{{url('admin/barang/'.$data->id.'/edit')}}"><i class="fa fa-gear text-primary"></i></a>
                        &nbsp;&nbsp;
                        <a href="{{url('admin/barang/delete/'.$data->id)}}" onclick="return valDelete();"><i class="fa fa-trash text-danger"></i></a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              @else
                <p>Empty Data</p>
              @endif
              <div class="pull-right">{{$barang->links()}}</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
@stop