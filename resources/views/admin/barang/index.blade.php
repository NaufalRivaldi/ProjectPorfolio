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
              <br>
              <form action="{{URL::to('admin/barang/')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="form-group">
                  <label>Nama Barang</label>
                  <input type="text" name="nama_barang" class="form-control" style="width: 70%">
                </div>
                <div class="form-group">
                  <label>Foto</label>
                  <input type="file" name="foto" class="form-control" style="width: 55%">
                </div>
                <div class="form-group">
                  <label>Kategori Barang</label>
                  <select name="id_kategori_barang" class="form-control" style="width: 50%">
                    @if(!empty($kategori))
                      <option value="">Pilih Kategori</option>
                      @foreach($kategori as $data)
                        <option value="{{$data->id}}">{{$data->nama_kategori}}</option>
                      @endforeach
                    @else
                      <option value="">Pilih Kategori</option>
                    @endif
                  </select>
                </div>
                <div class="form-group">
                  <label>Bahan</label>
                  <select name="bahan" class="form-control" style="width: 50%">
                    <option value="">Pilih Bahan Barang</option>
                    <option value="leather">Leather</option>
                    <option value="tailor">Tailor</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Input Data</button>
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