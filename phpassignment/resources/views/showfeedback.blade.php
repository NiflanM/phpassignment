@extends('layouts.app')
<title>View Feedback</title>
<link rel="icon" type="image/x-icon" href="assets/img/fashion.png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

@section('content')
@include('partials.sidebar')
{{-- <button type="button" class="btn btn-dark" style="margin-left: 250px; margin-top: 15px;" onclick="window.location='{{ url('/feedback') }}'">Create Feedback</button> --}}
<div class="content-wrapper" style="margin-left: 250px; padding: 15px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Feedback (All)</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-lg">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        @if (Auth::user('')->role==1)
                                        <th>Customer Name</th>
                                        @endif
                                        <th>Feedback Type</th>
                                        <th>Feedback</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($feedback as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        @if (Auth::user('')->role==1)
                                        <td>{{ $item->customer_name }}</td>
                                        @endif
                                        <td>{{ $item->subject }}</td>
                                        <td>{{ $item->message }}</td>
                                        <td>
                                            @if(Auth::user('')->role==1)
                                            <form method="POST" action="{{ route('feedback.destroy', $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Feedback" onclick="return confirm('Confirm delete?')">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>Delete
                                                </button>
                                            </form>
                                        @endif
                                        </td>
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
</div>
@include('partials.footer')
@endsection