@extends('customer.layout')
@section('content')
<div class="card" style="margin:20px">
    <div class="card-header">Edit Customer Profile</div>
    <div class="card-body">
        <form action= "{{url('customer/'.$customer->id)}}" method="post">
            {!! csrf_field()!!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$customer->id}}" id="id">
            <label>Name</label><br>
            <input type="text" name="id" id="name" value="{{$customer->name}}" class="form-control"><br>
            <label>Address</label><br>
            <input type="text" name="address" id="address" value="{{$customer->address}}" class="form-control"><br>
            <label>Mobile</label><br>
            <input type="text" name="mobile" id="mobile" value="{{$customer->mobile}}" class="form-control"><br>
    
            <input type="submit" value="Update" class="btn btn-success"><br>
    </form>
    </div>
    @stop