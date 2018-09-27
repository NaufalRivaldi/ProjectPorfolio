@extends('admin')

@section('title', 'Admin | Options')

@section('konten')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Opsi
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li></i> Pengaturan</li>
        <li class="active">Opsi</li>
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
                  @if(!empty($toko))
                    <a href="#" class="btn btn-primary" disabled="disabled"><i class="fa fa-plus"></i> Insert Data</a> 
                    <a href="{{url('admin/options/'.$toko->id.'/edit')}}" class="btn btn-success"><i class="fa fa-gear"></i> Edit Data</a>
                  @else
                    <a href="#" class="btn btn-primary btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Insert Data</a> 
                    <a href="#" class="btn btn-success" disabled="disabled"><i class="fa fa-gear"></i> Edit Data</a>
                  @endif
                </div>
              </p>
              <table class="table table-striped" style="margin-top: 6%">
                @if(!empty($toko))
                  <tr>
                    <td align="right" width="10%">Email :</td>
                    <td>{{$toko->email}}</td>
                  </tr>
                  <tr>
                    <td align="right">Telepon :</td>
                    <td>{{$toko->no_telp}}</td>
                  </tr>
                  <tr>
                    <td align="right">Sosmed :</td>
                    <td>{{$toko->sosmed}} (FB, IG)</td>
                  </tr>
                  <tr>
                    <td align="right">Info :</td>
                    <td>{{$toko->info}}</td>
                  </tr>
                @else
                  <tr>
                    <td align="right" width="10%">Email :</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td align="right">Telepon :</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td align="right">Sosmed :</td>
                    <td>- (FB, IG)</td>
                  </tr>
                  <tr>
                    <td align="right">Info :</td>
                    <td>-</td>
                  </tr>
                @endif
              </table>
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
        <h4 class="modal-title" id="myModalLabel">Opsi</h4>
      </div>
      <div class="modal-body">
        <form  method="post" action="{{URL::to('admin/options/')}}">
          {{csrf_field()}}
          <input type="hidden" name="_token" value="{{csrf_token()}}">

          <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="example@mail.com">
          </div>
          <div class="form-group">
            <label for="no_telp">Telepon :</label>
            <input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="081xxxxxxxxx">
          </div>
          <div class="form-group">
            <label for="sosmed">Sosmed :</label>
            <input type="text" name="sosmed" class="form-control" id="sosmed" placeholder="FB or IG">
          </div>
          <div class="form-group">
            <label for="info">info :</label>
            <textarea name="info" id="info" class="form-control" placeholder="Descriptions about online shop"></textarea>
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