<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{url('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('css/main.css')}}">
  <link rel="icon" href="{{url('dist/img/logo-trans.png')}}">
</head>
<body>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <img src="{{url('dist/img/logo-trans.png')}}" id="img-brand">
          </a>
          <a class="navbar-brand" href="#">
            <strong id="brand-text">Putu Tailor and Leather</strong>
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <form class="navbar-form navbar-left" role="search" id="find">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Find Something.." id="search">
            </div>
            <button type="submit" class="btn btn-primary">
              <span class="glyphicon glyphicon-search"></span> Find
            </button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('about')}}">About</a></li>
            <li><a href="{{url('product')}}">Product</a></li>
            <li><a href="{{url('contact')}}">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>

  @yield('konten')


  <!-- jQuery 3 -->
  <script src="{{url('bower_components/jquery/dist/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{url('bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{url('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
</body>
</html>