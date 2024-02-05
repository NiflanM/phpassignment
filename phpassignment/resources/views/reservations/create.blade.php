@extends('layouts.app')

@section('content')

<div class="container">
    <div class="d-flex justify-content-start mb-3">
        <a href="{{ route('reservations.index') }}" class="btn btn-dark">Back to Reservations</a>
    </div>   
    <div class="card">
        <div class="card-header">
            <h3 class>Create New Reservation</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('reservations.store') }}">
                @csrf
                <div class="form-group">
                    <label for="customer_name">Customer Name:</label>
                    <input type="text" class="form-control" id="customer_name" name="customer_name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="reservation_date">Reservation Date:</label>
                    <input type="date" class="form-control" id="reservation_date" name="reservation_date" min="{{ now()->format('Y-m-d') }}" required>
                </div>
                <div class="form-group">
                    <label for="reservation_time">Reservation Time:</label>
                    <input type="time" class="form-control" id="reservation_time" name="reservation_time" required min="09:00" max="23:59">
                </div>
                <div class="form-group">
                    <label for="guests">Number of Guests:</label>
                    <input type="number" class="form-control" id="guests" name="guests" required min="1" max="100">
                </div>
                <br>
                <button type="submit" class="btn btn-success btn-block">Proceed to Checkout</button>
            </form>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark text-white footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-warning fw-normal mb-4">Links</h4>
                <p class="text-white">About Us</p>
                <p class="text-white" >Contact Us</p>
                <p class="text-white" >Reservation</p>
                <p class="text-white" >Privacy Policy</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-warning fw-normal mb-4">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, Colombo 5</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>077 873 3075</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@reserve.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-warning fw-normal mb-4">Opening</h4>
                <h5 class="text-light fw-normal">Monday - Saturday</h5>
                <p>11AM - 12PM</p>
                <h5 class="text-light fw-normal">Sunday</h5>
                <p>10AM - 12PM</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-warning fw-normal mb-4">Newsletter</h4>
                <p>Signup for Reserve.Lk NewsLetter.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-dark py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 text-white">
                    &copy; <a >Reserve , All Right Reserved.</a>
                   
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a class="text-white" href="">Home</a>
                        <a class="text-white" href="">Cookies</a>
                        <a class="text-white" href="">Help</a>
                        <a class="text-white" href="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -

@endsection
