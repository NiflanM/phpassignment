@extends('customer.layout')
@section('content')
<link rel="icon" type="image/x-icon" href="assets/img/fashion.png">
<div class="card" style="margin:20px">
    <div class="card-header">Edit User Profile</div>
    <div class="card-body">
        <form action= "{{url('customer/'.$customer->id)}}" method="post">
            {!! csrf_field()!!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$customer->id}}" id="id">
            <label>Name</label><br>
            <input type="text" name="id" id="name" value="{{$customer->name}}" class="form-control"><br>
            <label>Email</label><br>
            <input type="text" name="email" id="email" value="{{$customer->email}}" class="form-control"><br>
            <label>Password</label><br>
            <input type="text" name="password" id="password" value="{{$customer->password}}" class="form-control"><br>
            <label>Role</label><br>
            <input type="text" name="role" id="role" value="{{$customer->role}}" class="form-control"><br>
    
            <input type="submit" value="Update" class="btn btn-success"><br>
    </form>
    </div>
    @stop