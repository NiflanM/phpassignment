@extends('layouts.app')
<title>Home</title>
<link rel="icon" type="image/x-icon" href="assets/img/dds4.jpg">
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

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
@section('content')

<aside class="main-sidebar sidebar-dark-primary elevation-4" style="height: 1050px">
  <!-- Brand Logo -->
  <b  class="brand-link">
    <img src="../../assets/img/dds4.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-1" style="opacity: .8">
    <a style="color:rgb(215, 220, 228)">ReserviQ</a>
  </b>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../../assets/img/download1.jpg" class="img-circle elevation-2" style="height: 80%" alt="User Image">
      </div>
      <div class="info" style="color: white;font-size:20px">
    {{ Auth::user('')->name }} 
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline"  style="color: white">
      <div class="input-group" data-widget="sidebar-search" >
        <input class="form-control form-control-sidebar" style="background-color: white" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append" >
          <button class="btn btn-sidebar" >
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-home"></i>
            <p>
             Home
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../widgets.html" class="nav-link">
            <i class="fa fa-table nav-icon "></i>
            <p>
            Reservation
             
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../widgets.html" class="nav-link">
            <i class="fas fa-hamburger nav-icon  "></i>
            <p>
            Menu 
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="../widgets.html" class="nav-link">
            <i class="fas fa-bullhorn nav-icon "></i>
            <p>
            Promotions
            </p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="../widgets.html" class="nav-link">
            <i class="fas fa-pen-square nav-icon "></i>
            <p>
            Feedbacks
            </p>
          </a>
        </li>
     

        <li class="nav-item">
          <a href="../widgets.html" class="nav-link">
            <i class="fa fa-user nav-icon "></i>
            <p>
            Profile
            </p>
          </a>
        </li>

        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->
    </div>
    <div class="container" style="margin-left:190px" >
 
      <div class="row justify-content-center" >
          <div class="col-md-8">
              <div class="card">
  
                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif
                    
                      <h4>Welcome {{ Auth::user('')->name }}</h4>
                     
                  </div>
          
                  <div class="card-header">{{ __('Dashboard') }}</div>
               
              </div>
              <div class="row" >
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3>150</h3>
             
                      <p>New Orders</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3>53<sup style="font-size: 20px">%</sup></h3>
             
                      <p>Occupancy</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h3>44</h3>
             
                      <p>User Registrations</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3>65</h3>
             
                      <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
              <!-- Main row --> 
             
    
</div>
        </div>
        
    </div>
    
</div>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-body row">
        <div class="col-5 text-center d-flex align-items-center justify-content-center">
          <div class="">
            <h2><strong>Contact Us</strong></h2>
            <p class="lead mb-5">123 Testing Ave, Testtown, 9876 NA<br>
              Phone: +1 234 56789012
            </p>
          </div>
        </div>
        <div class="col-7">
          <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" id="inputName" class="form-control" />
          </div>
          <div class="form-group">
            <label for="inputEmail">E-Mail</label>
            <input type="email" id="inputEmail" class="form-control" />
          </div>
          <div class="form-group">
            <label for="inputSubject">Subject</label>
            <input type="text" id="inputSubject" class="form-control" />
          </div>
          <div class="form-group">
            <label for="inputMessage">Message</label>
            <textarea id="inputMessage" class="form-control" rows="4"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Send message">
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- /.content -->
  
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 3.2.0
  </div>
  <strong>Copyright &copy; 2023 <a href="https://TableTrove.lk">TableTrove</a>.</strong> All rights reserved.
</footer>



<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
        </div>
    </div>

@endsection