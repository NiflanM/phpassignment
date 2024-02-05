@extends('customer.layout')
@section('content')
<link rel="icon" type="image/x-icon" href="assets/img/fashion.png">
<div class="card" style="margin:20px;">
    <div class="card-header">Users</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name : {{$customer->name}}</h5>
            <p class="card-text">Email : {{$customer->email}}</p>
            <p class="card-text">Password : {{$customer->password}}</p>
            <p class="card-text">Role : {{$customer->role}}</p>
</div>
  <!-- Button to direct to homepage -->
  <a href="{{url('/customer')}}" class="btn btn-secondary" title="Go Back">Go Back</a>
