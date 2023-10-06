@extends('layouts.app')
<title>Profile</title>
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

@include('partials.sidebar')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">{{ __('Profile') }}</div>

                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="../../assets/img/dds4.jpg" alt="Profile Picture" class="img-fluid rounded-circle" style="max-width: 150px;">
                    </div>

                    <!-- Add more profile information here -->
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="font-weight-bold">Name:</p>
                            <h4 class="card-title">{{ Auth::user()->name }}</h4>
                        </div>
                        <div class="col-md-6">
                            <p class="font-weight-bold">Email:</p>
                            <p class="card-text">{{ Auth::user()->email }}</p>
                        </div>
                    </div>

                    <hr>

                    
                   
                    
                    <!-- Add more content here -->
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="font-weight-bold">Additional Information:</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac justo sit amet nunc malesuada lacinia.</p>
                        </div>
                    </div>

                    <a href="{{url('/customer/edit')}}" class="btn btn-success mt-3">Edit Profile</a> 
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
