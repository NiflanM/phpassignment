
@extends('layouts.app')

<title>Manage User</title>
<link rel="icon" type="image/x-icon" href="assets/img/fashion.png">
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
@section('content')
</head>
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="height: 640px">
    <!-- Brand Logo -->
    <b class="brand-link">
      <img src="../../assets/img/dds4.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-1" style="opacity: .8">
      <a style="color:rgb(215, 220, 228)">ReserviQ</a>
    </b>
@include('partials.sidebar')

  
<div class="row" style="margin-left: 210px;">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="card">
                <div class="card-header">
                    <h2>Users List</h2>
                    <a href="{{ url('/customer/create') }}" class="btn btn-success float-left" title="Add New Customer">
                        Add New User
                    </a>
                </div>
                <div class="card-body">
                    <style>
                     

                        .custom-table th,
                        .custom-table td {
                            border-color: #f8f8f8; /* Change border color to grey */
                        }
                    </style>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped custom-table">
                            <thead style="border-color:#ccc1c1">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody style="border-color: #ccc1c1">
                                @foreach ($customer as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->role }}</td>
                                    <td>
                                        <a href="{{ url('/customer/'.$item->id) }}" title="View Customer" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</a>
                                        <a href="{{ url('/customer/'.$item->id.'/edit') }}" title="Edit Customer" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-sm"></i>Edit</a>
                                        <form method="POST" action="{{ route('customer.destroy', $item) }}" accept-charset="UTF-8" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" title=" Delete Customer" onclick="return confirm('Confirm delete?')">
                                                <i class="fa fa-trash" aria-hidden="true"></i>Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$customer->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials.footer')
@endsection