<!-- dashboard.blade.php -->
@extends('layouts.app')
<title>Dashboard</title>
<link rel="icon" type="image/x-icon" href="assets/img/fashion.png">
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="assets/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="asset/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="assets/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="assets/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="assets/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="assets/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href=assets/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="assets/summernote-bs4.min.css">

<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">


<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="assets/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="asset/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="assets/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="assets/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="assets/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="assets/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href=assets/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="assets/summernote-bs4.min.css">
</head>

</head>
@section('content')
@include('partials.sidebar')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>{{$totalReservation}}</h3>
                            <p>Total Reservations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{url('reservations')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- Add more col-md-3 for other cards -->
                <div class="col-md-4">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$todayReservation}}</h3>
                            <p>Today Reservations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{url('reservations')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{$thisMonthReservation}}</h3>
                            <p>Month Reservation</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="{{url('reservations')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <hr>
                <div class="col-md-4">
                  <!-- small box -->
                  <div class="small-box bg-warning">
                      <div class="inner">
                          <h3>{{$totalAllUser}}</h3>
                          <p>Regsitered Users</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-person-add "></i>
                      </div>
                      <a href="{{url('customer')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>
              <!-- Add more col-md-3 for other cards -->
              <div class="col-md-4">
                  <div class="small-box bg-secondary">
                      <div class="inner">
                          <h3>{{$totalUser}}</h3>
                          <p>No Of Customers</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-person"></i>
                      </div>
                      <a href="{{url('customer')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="small-box bg-danger">
                      <div class="inner">
                          <h3>{{$totalAdmin}}</h3>
                          <p>No Of Admins</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-person-stalker"></i>
                      </div>
                      <a href="{{url('customer')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>
                <!-- Additional cards go here -->

            </div>
        </div>
</section>


</div>
{{--          
                <div class="col-md-4">
                  <div class="card card-body bg-primary text-white mb-3">
                    <label>No Of Total Users</label>
                    <h1>{{  $totalAllUser}}</h1>
                    <a href="{{url('customer')}}" class="text-white">view</a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card card-body bg-success text-white mb-3">
                    <label>No Of Customers </label>
                    <h1>{{  $totalUser}}</h1>
                    <a href="{{url('customer')}}" class="text-white">view</a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card card-body bg-danger text-white mb-3">
                    <label>No Of Admin</label>
                    <h1>{{  $totalAdmin}}</h1>
                    <a href="{{url('customer')}}" class="text-white">view</a>
                  </div>
                </div>
                
               </div> --}}

               
            
           @include('partials.footer')
@endsection
