@extends('customer.layout')
@section('content')
 
<div class="card" style="margin:20px;">
    <div class="card-header">Customers</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name : {{$customer->name}}</h5>
            <p class="card-text">Address : {{$customer->address}}</p>
            <p class="card-text">Mobile : {{$customer->mobile}}</p>
</div>
