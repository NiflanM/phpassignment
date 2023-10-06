@extends('layouts.app')
<title>Profile</title>
<link rel="icon" type="image/x-icon" href="assets/img/dds4.jpg">
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">



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
                    <h2>Feedback (All)</h2>
                </div>  
                <div class="card-body">
                    <br>
                    <div class="table-responsive-lg"> <!-- Add the "table-responsive-lg" class here -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Customer Name</th>
                                    <th>Feedback Type</th>
                                    <th>Feedback</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($feedback as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->customer_name }}</td>
                                    <td>{{ $item->subject }}</td>
                                    <td>{{ $item->message }}</td>
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
