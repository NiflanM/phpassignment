@extends('layouts.app')
<link rel="icon" type="image/x-icon" href="assets/img/fashion.png">

@section('content')
<div class="container">
    <h2>Reservation Details</h2>
    <table class="table">
        <tr>
            <th>Customer Name:</th>
            <td>{{ $reservation->customer_name }}</td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>{{ $reservation->email }}</td>
        </tr>
        <tr>
            <th>Phone:</th>
            <td>{{ $reservation->phone }}</td>
        </tr>
        <tr>
            <th>Reservation Date:</th>
            <td>{{ $reservation->reservation_date }}</td>
        </tr>
        <tr>
            <th>Reservation Time:</th>
            <td>{{ $reservation->reservation_time }}</td>
        </tr>
        <tr>
            <th>Number of Guests:</th>
            <td>{{ $reservation->guests }}</td>
        </tr>
        <tr>
            <th>Status:</th>
            <td>{{ $reservation->status }}</td>
        </tr>
       
    </table>
    <a href="{{ route('reservations.index') }}" class="btn btn-primary">Back to Reservations</a>
</div>
@endsection
