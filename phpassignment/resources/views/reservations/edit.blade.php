@extends('layouts.app')
<link rel="icon" type="image/x-icon" href="assets/img/fashion.png">
@section('content')
<div class="container">
    <h2>Edit Reservation</h2>
    <form action= "{{url('reservations/'.$reservation->id)}}" method="post">

        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="customer_name">Customer Name:</label>
            <input type="text" class="form-control" id="customer_name" name="customer_name" value="{{ $reservation->customer_name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $reservation->email }}" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $reservation->phone }}" required>
        </div>
        <div class="form-group">
            <label for="reservation_date">Reservation Date:</label>
            <input type="date" class="form-control" id="reservation_date" name="reservation_date" value="{{ $reservation->reservation_date }}" required>
        </div>
        <div class="form-group">
            <label for="reservation_time">Reservation Time:</label>
            <input type="time" class="form-control" id="reservation_time" name="reservation_time" value="{{ $reservation->reservation_time }}" required>
        </div>
        <div class="form-group">
            <label for="guests">Number of Guests:</label>
            <input type="number" class="form-control" id="guests" name="guests" value="{{ $reservation->guests }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Reservation</button>
    </form>
</div>
@endsection
