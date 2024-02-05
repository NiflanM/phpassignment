@extends('customer.layout')
@section('content')
    <link rel="icon" type="image/x-icon" href="assets/img/fashion.png">

    <div class="card" style="margin:20px;">
        <div class="card-header">Create New User</div>
        <div class="card-body">
            <form action="{{ url('/customer') }}" method="post">
                {!! csrf_field() !!}
                <label>Name</label><br>
                <input type="text" name="name" id="name" class="form-control"><br>
                <label>Email</label><br>
                <input type="text" name="email" id="email" class="form-control"><br>
                <label>Password</label><br>
                <input type="text" name="password" id="password" class="form-control"><br>
                <label>Role</label><br>
                <select name="role" id="role" class="form-control">
                    <option value="">Select Role</option>
                    <option value="0">Customer</option>
                    <option value="1">Admin</option>
                    <option value="2">Staff</option>
                </select><br> <!-- Move the closing </select> tag here -->
                <input type="submit" value="Save" class="btn btn-success"><br>
            </form>
        </div>
    </div>
    <a href="{{ url('/customer') }}" class="btn btn-dark" title="Go Back">Go Back</a>
@stop
