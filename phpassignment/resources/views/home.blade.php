@extends('layouts.app')
<title>Menu</title>
<link rel="icon" type="image/x-icon" href="assets/img/fashion.png">
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

<!-- Google Font: Source Sans Pro -->
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
<link rel="stylesheet" href=assets/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="assets/summernote-bs4.min.css">

<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">



<style>
    .card {
        border: 1px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s ease-in-out;
        height: 100%;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card img {
        height: 200px;
        object-fit: cover;
    }

    .card-body {
        padding: 20px;
        height: 250px; /* Set a fixed height for the card body */
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .card-text {
        color: #666;
    }

    .card-rating {
        margin-top: 10px;
        color: #ffc107; /* Yellow color for star rating */
    }

    .card-price {
        font-size: 1.25rem;
        font-weight: bold;
        margin-top: 10px;
        color: #28a745; /* Green color for price */
    }
</style>
</head>
@section('content')

<aside class="main-sidebar sidebar-dark-primary elevation-4" style="height: 1650px " >
  <!-- Brand Logo -->
  <b class="brand-link">
    <img src="../../assets/img/aa.avif" alt="AdminLTE Logo" class="brand-image img-circle elevation-1" style="opacity: .8">
    <a style="color:rgb(215, 220, 228)">ReserviQ</a>
  </b>

  <!-- Sidebar -->
  @include('partials.sidebar')
  
  <div class="container" style="margin-left:224px">
    @if(Auth::user('')->role==0)
    <div class="container-fluid" >
      <!-- Info boxes -->
      <div class="d-flex">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Bounce Rate</span>
              <span class="info-box-number">
               35
                <small>%</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Accepted Reservations</span>
              <span class="info-box-number">{{ $acceptedReservations}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
         <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Reservations </span>
                <span class="info-box-number">{{$totalReservation}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Customers</span>
                <span class="info-box-number">{{$totalUser}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        @endif
    <div class="row justify-content-center">
      <div class="col-md-11">
        <div class="container mt-5">
          <div class="row">
            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <img src="../../assets/img/tacos.jpeg" class="card-img-top" alt="Food 4">
                <div class="card-body">
                  <h5 class="card-title">Beef Tacos</h5>
                  <p class="card-text">
                    Beef Tacos are a popular Mexican dish made with seasoned ground beef, taco shells, and a variety of toppings, including lettuce, cheese, salsa, and sour cream.
                  </p>
                  <div class="card-rating">
                    ⭐⭐⭐⭐
                  </div>
                  <div class="card-price">
                    1399 LKR
                  </div>
                </div>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <img src="../../assets/img/spagetti.jpeg" class="card-img-top" alt="Food 1">
                <div class="card-body">
                  <h5 class="card-title">Spaghetti Carbonara</h5>
                  <p class="card-text">
                    Enjoy our classic Italian Spaghetti Carbonara, a creamy delight featuring eggs, cheese, pancetta, and black pepper. Rich and satisfying.
                  </p>
                  <div class="card-rating">
                    ⭐⭐⭐⭐⭐
                  </div>
                  <div class="card-price">
                    1199 LKR
                  </div>
                </div>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <img src="../../assets/img/pasta.jpeg" class="card-img-top" alt="Food 2">
                <div class="card-body">
                  <h5 class="card-title">Chicken Alfredo</h5>
                  <p class="card-text">
                    Indulge in our creamy Chicken Alfredo, a pasta masterpiece with tender chicken, fettuccine noodles, and a luscious Alfredo sauce made from butter, cream, and Parmesan cheese.
                  </p>
                  <div class="card-rating">
                    ⭐⭐⭐⭐
                  </div>
                  <div class="card-price">
                    1699 LKR
                  </div>
                </div>
              </div>
            </div>

            <!-- Add more cards here -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="../../assets/img/sushi.webp" class="card-img-top" alt="Food 5">
                    <div class="card-body">
                        <h5 class="card-title">Sushi Platter</h5>
                        <p class="card-text">
                            Sushi Platter features a variety of sushi rolls, including California rolls, spicy tuna rolls, and salmon avocado rolls, served with soy sauce and pickled ginger.
                        </p>
                        <div class="card-rating">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <div class="card-price">
                            1099 LKR
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Card 5 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="../../assets/img/pizza.jpg" class="card-img-top" alt="Food 3">
                    <div class="card-body">
                        <h5 class="card-title">Margherita Pizza</h5>
                        <p class="card-text">
                            Experience the simplicity and flavor of our Margherita Pizza. Topped with fresh tomatoes, mozzarella cheese, basil leaves, and a drizzle of olive oil.
                        </p>
                        <div class="card-rating">
                            ⭐⭐⭐⭐
                        </div>
                        <div class="card-price">
                            1799 LKR
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Card 6 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="../../assets/img/download.jpeg" class="card-img-top" alt="Food 6">
                    <div class="card-body">
                        <h5 class="card-title">Vegetable Stir-Fry</h5>
                        <p class="card-text">
                            Vegetable Stir-Fry is a healthy dish made with an assortment of colorful vegetables, stir-fried in a savory sauce and served over steamed rice or noodles.
                        </p>
                        <div class="card-rating">
                            ⭐⭐⭐
                        </div>
                        <div class="card-price">
                            999 LKR
                        </div>
                    </div>
                </div>
            </div>
            </div> <!-- Closing tag for the row -->
            <!-- /.content-wrapper -->
          
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
            </div>
            <!-- ./wrapper -->
          
            </div>
           
            </div>
  </div>
            @include('partials.footer')
       
            @endsection