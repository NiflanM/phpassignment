<!-- resources/views/payment-success.blade.php -->

@extends('layouts.app')
<link rel="icon" type="image/x-icon" href="assets/img/fashion.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<!-- Quicksand Font -->
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap">
@section('content')
<div class="container">
    <h2>Payment Successful</h2>
    <h4>Your payment was successful. Thank you for your reservation. If Reservation is Accepted ,you will receive an confirmation of the reservation through given Email</h4>
    <a  href="{{route('reservations.index')}}"  class="btn btn-success"> Back To Reservation</a>
</div>

@endsection
