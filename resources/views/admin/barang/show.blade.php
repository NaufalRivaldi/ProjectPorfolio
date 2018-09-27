@extends('admin')

@section('title', 'Admin | Barang')

@section('konten')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Lihat Barang
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
            <div class="container-fluid"><br>
              <div class="col-md-4" style="text-align: center;">
                <img src="{{url('dist/img/fotoupload/'.$barang->foto)}}" width="90%" style="box-shadow: 0 0 5px;">
              </div>
              <div class="col-md-8">
                <table class="table table-striped">
                  <tr>
                    <td align="right" width="30%">ID Barang :</td>
                    <td>{{$barang->id}}</td>
                  </tr>
                  <tr>
                    <td align="right">Nama Barang :</td>
                    <td>{{$barang->nama_barang}}</td>
                  </tr>
                  <tr>
                    <td align="right">Kategori :</td>
                    <td>{{$barang->barang->nama_kategori}}</td>
                  </tr>
                  <tr>
                    <td align="right">Bahan :</td>
                    <td>{{$barang->bahan}}</td>
                  </tr>
                  <tr>
                    <td align="right">Jumlah :</td>
                    <td>{{$barang->jumlah}} Pcs</td>
                  </tr>
                  <tr>
                    <td align="right">Harga :</td>
                    <td>Rp. {{$barang->harga}}</td>
                  </tr>
                  <tr>
                    <td align="right">Keterangan :</td>
                    <td>{{$barang->keterangan}}</td>
                  </tr>
                </table>
                <br>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
@stop