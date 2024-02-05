<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Now</title>
  <link rel="icon" type="image/x-icon" href="assets/img/fashion.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../assets//icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,600&display=swap" rel="stylesheet">
  <style>
    body {
      background-image: url('assets/img/images.jpeg');

    }
    .login-box {
      background: rgba(0, 0, 0, 0.15);
    
    }
    .login-card-body {
      background: rgba(0, 0, 0, 0.05);
   
    }
   
    .card {
      background: rgba(0, 0, 0, 0.05);
 
    }
    .login-box-msg {
      color: white;
    }
    .col-8{
      color:white;
    }
  </style>

</head>

<body class="hold-transition login-page">
<div class="login-box">
  {{-- <div class="login-logo" >
    <a href=""><b style="color:white ">Registration</b></a>
  </div> --}}
  <!-- /.login-logo -->
  <div class="card"  >
    <div class="card-body login-card-body">
    <b><p class="login-box-msg" style="font-size: 25px" style="font-family:Bricolage Grotesque">REGISTER<a style="color:rgb(80, 130, 204)"></a></p></b>

    @if(Session::has('error'))
    <div class="alert alert-success" role="alert">
     {{Session::get('error')}}
    </div>
    @endif
      <form action="{{route('register')}}" method="POST">
        @csrf
        @method('POST')
        <div class="input-group mb-3">
          <input type="name" name="name" class="form-control" placeholder="Full Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @if($errors->has('name'))
        <p class="text-danger">{{$errors->first('name')}}</p>
        @endif

        <div class="input-group mb-3">
          <input type="email"  name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @if($errors->has('email'))
        <p class="text-danger">{{$errors->first('email')}}</p>
        @endif

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
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-dark btn-block" >Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>

      
      <!-- /.social-auth-links -->
<br>
      <p class="mb-0">
        
        <button class="btn btn-dark btn-block"><b><a href="{{route('login')}}" class="text-center" style="color:white" >Already a Member ?</a></b></button>
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
