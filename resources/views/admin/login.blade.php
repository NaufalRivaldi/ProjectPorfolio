<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Putu Tailor and Leather</title>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{url('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/style-login.css')}}">
    <link rel="icon" type="text/css" href="{{url('dist/img/logo-trans.png')}}">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <div class="posLogin">
            <img src="{{url('dist/img/logo-trans.png')}}" width="30%">
            <div class="halLogin">
              <h3>Putu Tailor and Leather</h3>
              <hr>
              <form action="{{route('login')}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                
                <div class="input-group">
                  <span class="input-group-addon" id="email"><i class="fa fa-user"></i></span>
                  <input type="email" name="email" class="form-control" aria-describedby="email" placeholder="Email">
                </div><br>
                <div class="input-group">
                  <span class="input-group-addon" id="password"><i class="fa fa-unlock-alt"></i></span>
                  <input type="password" name="password" class="form-control" aria-describedby="password" placeholder="Password">
                </div><br>
                <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
              </form>
              <p class="footer">
                <strong>Copyright &copy; 2018 <a href="#">PutuTailorandLeather</a>.</strong> All rights reserved.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>

    <!-- jQuery 3 -->
    <script src="{{url('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{url('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  </body>
</html>