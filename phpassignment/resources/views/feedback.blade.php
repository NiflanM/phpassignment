@extends('layouts.app')
<title>Feedback</title>
<link rel="icon" type="image/x-icon" href="assets/img/fashion.png">
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
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="height: -250px " >
    <!-- Brand Logo -->
    <b class="brand-link">
      <img src="../../assets/img/aa.avif" alt="AdminLTE Logo" class="brand-image img-circle elevation-1" style="opacity: .8">
 
    </b>
  
@include('partials.sidebar')
<div class="row justify-content-center" >
    <div class="col-md-7">
<div class="container">
    <h3>Submit feedback</h3>
    
    <form action="{{url('feedback')}}" method="POST">
      @csrf

        <div class="form-group">
            <label for="subject">Feedback Type</label>
        <Select input type="subject" name="subject" id="subject" class="form-select"   required>
            <option value="" disabled selected>Select Feedback Type</option>
            <option value="Complaint">Complaint</option>
            <option value="Suggestion">Suggestion</option>
            <option value="Inquiry">Inquiry</option>
            <option value="Others">Others</option>
        </Select>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <input type="text" name="message" id="message" class="form-control" required>
        </div>
        <div class="form-group">
    <button class="btn btn-success" type="submit">Submit</button>
    <button class="btn btn-danger" type="reset">Reset</button>
</div>
    </form>
</div>
    </div>
</div>
</body>
@include('partials.footer')
@endsection
