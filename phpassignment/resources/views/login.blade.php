<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>
  <link rel="icon" type="image/x-icon" href="assets/img/dds4.jpg">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../assets//icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
</head>
<p >

<body class="hold-transition login-page" style="background-image: url('assets/img/bg.webp');" >
<div class="login-box">
  
  <!-- /.login-logo -->
  <div class="card" style="height:395px">
    <div class="card-body login-card-body">

    <b><p class="login-box-msg" style="font-size: 29px">Sign in with <a style="color:rgb(80, 130, 204)">ReserviQ</a></p></b>

      @if(Session::has('error'))
      <div class="alert alert-danger" style="margin-bottom: -10px" role="alert">
       {{Session::get('error')}}
      </div>
      @endif
      <br>
      <form action="{{route('login')}}" method="POST">
        @csrf
        <div class="input-group mb-3">
          <input type="email"  name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <input type="password"  name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
       
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
       
      </form>
      <br>
      <div class="social-auth-links text-center mb-3" >
        <p->----------------------------- OR ------------------------------</p>
    </div>
    
    </div>
    
      
    
      
      <!-- /.social-auth-links -->

      <p class="mb-0">
       
       
      
        <button class="btn btn-primary btn-block"><b><a href="{{route('register')}}" class="text-center" style="color:white" >Create new account</a></b></button>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../assets/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/js/adminlte.min.js"></script>
</body>
</html>
