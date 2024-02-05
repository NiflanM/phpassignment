@extends('layouts.app')

<title>Reservations</title>
<link rel="icon" type="image/x-icon" href="assets/img/fashion.png">
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="assets/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="asset/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="assets/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="assets/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="assets/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="assets/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href=assets/daterangepicker.css"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="assets/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="asset/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="assets/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="assets/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="assets/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="assets/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="assets/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="assets/summernote-bs4.min.css">

<!-- summernote -->
<link rel="stylesheet" href="assets/summernote-bs4.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

@section('content')

<div class="container">
    <div class="modal" tabindex="-1" role="dialog" id="confirmationModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="confirmationMessage">Are you sure?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmButton">Confirm</button>
                </div>
            </div>
        </div>
    </div>
    <h2>Reservations</h2>
    @if(Auth::user()->role == 1)
        <a href="{{url('/dashboard')}}" class="btn btn-dark" style="float: right" title="Go to Homepage">Go to Homepage</a>
    @else
        <a href="{{url('/home')}}" class="btn btn-dark" style="float: right" title="Go to Homepage">Go to Homepage</a>
    @endif
    
    <a href="{{ route('reservations.create') }}" class="btn btn-primary">Create New Reservation</a>

    @if ($reservations && $reservations->count() != 0)
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Reservation Date</th>
                    <th>Reservation Time</th>
                    <th>Guests</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->customer_name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->reservation_date }}</td>
                        <td>{{ $item->reservation_time }}</td>
                        <td>{{ $item->guests }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <a href="{{ url('/reservations/'.$item->id) }}" title="View Customer" class="btn btn-info btn-sm">
                                <i class="fa fa-eye" aria-hidden="true"></i> View
                            </a>
                
                            @if(Auth::user()->role == 1)
                                <a href="{{ url('/reservations/'.$item->id.'/edit') }}" title="Edit Reservation" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit fa-sm"></i> Edit
                                </a>
                
                                <form id="form-delete-{{ $item->id }}" method="POST" action="{{ url('reservations', $item->id) }}" style="display: inline-block;">
                                    @method('DELETE')
                                    @csrf
                                    <button type="button" class="btn btn-danger btn-sm" onclick="showConfirmation('Delete', 'form-delete-{{ $item->id }}')">Delete</button>
                                </form>
                
                                @if($item->status == 'pending')
                                    <form id="form-accept-{{ $item->id }}" method="POST" action="{{ route('reservations.acceptReservation', $item->id) }}" style="display: inline-block;" class="mr-2">
                                        @method('PUT')
                                        @csrf
                                        <button type="button" class="btn btn-success btn-sm" onclick="showConfirmation('Accept', 'form-accept-{{ $item->id }}')">Accept</button>
                                    </form>
                
                                    <form id="form-decline-{{ $item->id }}" method="POST" action="{{ route('reservations.declineReservation', $item->id) }}" style="display: inline-block;">
                                        @method('PUT')
                                        @csrf         
                                        <button type="button" class="btn btn-danger btn-sm" onclick="showConfirmation('Decline', 'form-decline-{{ $item->id }}')">Decline</button>
                                    </form>
                                @endif
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
<div class="d-flex justify-content-start">
        {{ $reservations->links() }} <!-- Display pagination links -->
</div>
    @else
        <p>No reservations found.</p>
    @endif
</div>
<div class="container mt-3">
    <form action="{{ route('reservations.index') }}" method="get">
        <div class="form-group">
            <div class="me-3">
                <label for="status_filter" class="form-label">Filter by Status:</label>
                <select class="form-select"  id="status_filter" name="status_filter">
                    <option value="">All</option>
                    <option value="Accepted" {{ request('status_filter') == 'Accepted' ? 'selected' : '' }}>Accepted</option>
                    <option value="Declined" {{ request('status_filter') == 'Declined' ? 'selected' : '' }}>Declined</option>
                    <option value="Pending" {{ request('status_filter') == 'Pending' ? 'selected' : '' }}>Pending</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-dark">Apply Filter</button>
    </form>
</div>
<script>
    function showConfirmation(action, formId) {
        var confirmationMessage = 'Are you sure you want to ' + action.toLowerCase() + ' this reservation?';
        $('#confirmationMessage').text(confirmationMessage);

        $('#confirmButton').off('click').on('click', function () {
            // If the user confirms, submit the form
            var form = document.getElementById(formId);
            if (form) {
                form.submit();
            }

            $('#confirmationModal').modal('hide');
        });

        $('#confirmationModal').modal('show');
    }
</script>
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