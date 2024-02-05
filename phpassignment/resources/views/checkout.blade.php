<!-- resources/views/checkout.blade.php -->

@extends('layouts.app')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<!-- Quicksand Font -->
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="mb-0">Checkout</h2>
                </div>

                <div class="card-body">
                    <div class="reservation-details">
                        <h3 class="mb-4">Reservation Details</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Customer Name:</strong> {{ $reservation->customer_name }}</p>
                                <p><strong>Email:</strong> {{ $reservation->email }}</p>
                                <p><strong>Phone:</strong> {{ $reservation->phone }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Reservation Date:</strong> {{ $reservation->reservation_date }}</p>
                                <p><strong>Reservation Time:</strong> {{ $reservation->reservation_time }}</p>
                                <p><strong>Number of Guests:</strong> {{ $reservation->guests }}</p>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <p class="lead">Total Reservation Fee: Rs {{ $totalPrice }}</p>
                    <hr>

                 <!-- Card Details Form -->
<form action="{{ route('process-payment') }}" method="post" id="payment-form">
    @csrf
    <div class="form-group">
        <label for="card-number">Card Number:</label>
        <input type="text" id="card-number" name="card-number" class="form-control" required
            pattern="\d{16}" title="Enter a 16-digit card number"  maxlength="16">
        <small class="text-muted">Enter a 16-digit card number.</small>
    </div>
    <div class="form-group">
        <label for="card-cvc">CVC:</label>
        <input type="text" id="card-cvc" name="card-cvc" class="form-control" required
            pattern="\d{3}" title="Enter a 3-digit CVC">
        <small class="text-muted">Enter a 3-digit CVC.</small>
    </div>
    <div class="form-group">
        <label for="card-expiry">Expiry Date (MM/YY):</label>
        <input type="text" id="card-expiry" name="card-expiry" class="form-control" required
            pattern="(0[1-9]|1[0-2])\/\d{2}" title="Enter a valid expiry date (MM/YY)"
            oninput="formatExpiryDate(this)">
        <small class="text-muted">Enter a valid expiry date (MM/YY).</small>
    </div>
    <button type="submit" class="btn btn-primary">Pay Now</button>
</form>

<script>
    // Validate the form using JavaScript
    document.getElementById('payment-form').addEventListener('submit', function (event) {
        var isValid = true;

        // Check card number
        var cardNumber = document.getElementById('card-number');
        if (!/^\d{16}$/.test(cardNumber.value)) {
            isValid = false;
            alert('Please enter a valid 16-digit card number.');
        }

        // Check CVC
        var cardCvc = document.getElementById('card-cvc');
        if (!/^\d{3}$/.test(cardCvc.value)) {
            isValid = false;
            alert('Please enter a valid 3-digit CVC.');
        }

        // Check expiry date
        var cardExpiry = document.getElementById('card-expiry');
        if (!/^(0[1-9]|1[0-2])\/\d{2}$/.test(cardExpiry.value)) {
            isValid = false;
            alert('Please enter a valid expiry date (MM/YY).');
        }

        if (!isValid) {
            event.preventDefault(); // Prevent form submission if not valid
        }
    });

    // Format Expiry Date with a slash as the user types
    function formatExpiryDate(input) {
        let value = input.value.replace(/\D/g, ''); // Remove non-numeric characters
        if (value.length > 2) {
            value = value.substring(0, 2) + '/' + value.substring(2);
        }
        input.value = value;
    }
</script>

                </div>
            </div>
        </div>
    </div>
</div>
@include('partials.footer')
@endsection
