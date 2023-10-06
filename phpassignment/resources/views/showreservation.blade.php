@extends('layouts.app')
<title>Show Reservation</title>
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
  
    <div class="row">
        <div class="col-md-4">
            <!-- Include the sidebar here -->
          
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Show Reservation</h2>
                </div>  
                <div class="card-body">
                    <br>
                    <div class="table-responsive-lg"> <!-- Add the "table-responsive-lg" class here -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Customer Name</th>
                                    <th>email</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th>time</th>
                                    <th>Guests</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($feedback as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->customer_name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->date }}</td>
                                    <td>{{ $item->time }}</td>
                                    <td>{{ $item->guests }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
