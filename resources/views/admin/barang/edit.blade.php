@extends('admin')

@section('title', 'Admin | Edit Barang')

@section('konten')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Barang
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
              <form action="{{URL::to('admin/barang/update/'.$barang->id)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="form-group">
                  <label>Nama Barang</label>
                  <input type="text" name="nama_barang" class="form-control" style="width: 70%" value="{{$barang->nama_barang}}">
                </div>
                <div class="form-group">
                  <label>Foto</label>
                  <input type="file" name="foto" class="form-control" style="width: 55%">
                </div>
                <div class="form-group">
                  <label>Kategori Barang</label>
                  <select name="id_kategori_barang" class="form-control" style="width: 50%">
                    @if(!empty($kategori))
                      @foreach($kategori as $data)
                        @if($data->id == $barang->id_kategori_barang)
                        <option value="{{$data->id}}" selected>{{$data->nama_kategori}}</option>
                        @else
                        <option value="{{$data->id}}">{{$data->nama_kategori}}</option>
                        @endif
                      @endforeach
                    @else
                      <option value="">Pilih Kategori</option>
                    @endif
                  </select>
                </div>
                <div class="form-group">
                  <label>Bahan</label>
                  <select name="bahan" class="form-control" style="width: 50%">
                    @if($barang->bahan == 'leather')
                      <option value="">Pilih Bahan Barang</option>
                      <option value="leather" selected>Leather</option>
                      <option value="tailor">Tailor</option>
                    @else
                      <option value="">Pilih Bahan Barang</option>
                      <option value="leather">Leather</option>
                      <option value="tailor" selected>Tailor</option>
                    @endif
                  </select>
                </div>
                <div class="form-group">
                  <label>Jumlah</label>
                  <input type="text" name="jumlah" class="form-control" style="width: 50%" value="{{$barang->jumlah}}"> Pcs
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" name="harga" class="form-control" style="width: 40%" value="{{$barang->harga}}"> (Rp)
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea name="keterangan" class="form-control">{{$barang->keterangan}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
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