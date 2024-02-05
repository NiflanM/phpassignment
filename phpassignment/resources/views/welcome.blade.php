<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Reserve.lk</title>
    <link rel="icon" type="image/x-icon" href="assets/img/fashion.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <!-- Quicksand Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cute+Font&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap">
    <!-- Your custom styles can be added here -->
    <style>
        /* Custom Styles */
   
        body {
          
            font-family: 'Quicksand', sans-serif; 
        }

        .navbar {
            position: absolute;
            width: 100%;
            z-index: 1000;
        }

        .carousel {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .carousel-inner {
            position: relative;
        }

        .carousel-inner img {
            width: 100%;
            height: 100vh; /* Adjust the height as needed */
            object-fit: cover;
        }

        .carousel-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-family: Bricolage Grotesque ;
        }

        .carousel-overlay h2,
        .carousel-overlay p,
        {
            font-size: 1.5em; 
            margin: 0;
            font-family: 'Quicksand', sans-serif; 
        }
        .carousel-overlay a {
            margin: 0;
            font-size: 30px
            font-family: Cute Font;
        }

        .carousel-overlay h2 {
            font-size: 2.5em; /* Increase font size */
            margin-bottom: 10px;
        }

        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        /* Other existing styles remain unchanged */

        /* Adjustments for small screens */
        @media (max-width: 768px) {
            .carousel-inner img {
                height: auto; /* Adjust the height for smaller screens */
            }

            .carousel-caption {
                position: static;
                transform: none;
            }
        }
  

      
        .jumbotron {
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 60px;
            margin-bottom: 0; /* Remove margin to make it flush with the carousel */
        }

        .section {
            padding: 10px 0;
            
        }
        .section1 {
            padding: 80px 0;
            background-color: #EFF0F0   ; /* Replace with your desired black color */

        }

        .footer {
            background-color: #383c47;
            color: #fff;
            padding: 20px 0;
        }

        .contact-section-bg {
    background-color: #EFF0F0; /* Replace with your desired black color */
    color: #000000;/* Set text color to white or a contrasting color */
    
}
.back-to-top {
            width: 50px;
            height: 50px;
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: flex;
            background: #000000;
        }
        .section1 {
    background-color: #f8f9fa; /* Light background color */
    padding: 50px 0; /* Adjust the padding as needed */
}

.creative-card {
    transition: transform 0.3s ease-in-out; /* Add a smooth transition effect on hover */
}

.creative-card:hover {
    transform: scale(1.05); /* Enlarge the card on hover for a subtle interactive effect */
}

.card-title {
    color: #000000; /* Change the card title color to a vibrant blue */
}

.card-text {
    color: #495057; /* Set the card text color to a dark shade for better readability */
}
.explore-button {
    width: 100%; /* Ensure the button takes up 100% width of its container */
}
#contact {
    height: 100%;
}

.container {
    height: 100%;
}

.map-container {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
}
.navbar-black {
    background-color: #000000be; /* Black background color */
    transition: background-color 0.3s ease; /* Add a smooth transition effect */
}
.navbar-fixed {
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
}
    </style>
   
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-fixed">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/R.png" alt="Logo" height="65">
            </a>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav" >
                    <li class="nav-item">
                        <a class="nav-link" style="color: #ffffff" href="#menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #ffffff" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #ffffff" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        <div class="navbar-nav ml-auto">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}" class="btn btn-outline-light">Home</a>
                @else
                    <div class="btn-group">
                        <a href="{{ route('login') }}" class="btn btn-outline-light">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-light ml-2">Register</a>
                        @endif
                    </div>
                @endauth
            @endif
        </div>
    </div>
</nav>

    <!-- Carousel -->
    <div id="restaurantCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="../../assets/img/aa.avif" class="d-block w-100" alt="Food Image 1">
                <div class="carousel-overlay">
                   
                    <h1 class="display-4">Dive into a Culinary Odyssey</h1>
                    <p>Indulge in a culinary odyssey where each dish narrates a tale of culinary mastery, innovation, and unforgettable dining moments.</p>
                    <p>Book your table now at Reserve.lk and relish the harmonious fusion of delectable cuisines and gracious service.</p>
                    <hr class="my-10">
                    <a href="{{route("reservations.create")}}" class="btn btn-outline-light btn-lg"  role="button">RESERVE NOW</a>
                </div>
            </div>
            <!-- Slide 2 -->
            {{-- <div class="carousel-item">
                <img src="../../assets/img/aa.avif" class="d-block w-100" alt="Food Image 2">
                <div class="carousel-overlay">
                    <h1 class="display-4">Unforgettable Moments</h1>
                    <p class="lead">Create memories with our delightful dishes and charming ambiance.</p>
                    <br><br>
                    <a class="btn btn-warning btn-lg" href="#" role="button">Special Offers</a>
                </div>
            </div>
            <!-- Add more slides as needed -->
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    // Initialize the carousel
                    var restaurantCarousel = new bootstrap.Carousel(document.getElementById('restaurantCarousel'), {
                        interval: 2500, // Set the interval between slides in milliseconds (e.g., 5000 for 5 seconds)
                        pause: 'hover', // Pause on hover
                        wrap: true // Enable looping
                    });
                });
            </script> --}}
        </div>
    </div>
    <button class="back-to-top btn btn-success" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>

    <!-- Featured Dishes Section -->
    <div id="menu" class="section1">
        <div class="container">
            <h2 class="text-center mb-4">Discover Our Culinary Masterpieces</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card creative-card h-100 border-0 rounded-3 d-flex flex-column">
                        <img src="../../assets/img/pasta.jpeg" class="card-img-top rounded-top img-fluid" alt="Dish 1">
                        <div class="card-body flex-fill">
                            <h5 class="card-title">Truffle Infused Delight</h5>
                            <p class="card-text">Indulge in the rich flavors of our Truffle Infused Delight, a pasta creation that tantalizes your taste buds with every bite.</p>
                        </div>
                        <div class="mt-auto">
                            <a href="#" class="btn btn-dark explore-button">Explore</a>
                        </div>
                    </div>
                </div>
                <!-- Repeat the same structure for other cards -->
                <div class="col-md-4 mb-4">
                    <div class="card creative-card h-100 border-0 rounded-3 d-flex flex-column">
                        <img src="../../assets/img/pizza.jpg" class="card-img-top rounded-top img-fluid" alt="Dish 2">
                        <div class="card-body flex-fill">
                            <h5 class="card-title">Mediterranean Bliss Pizza</h5>
                            <p class="card-text">Experience the taste of the Mediterranean with our Bliss Pizza, a perfect blend of fresh ingredients and savory delights.</p>
                        </div>
                        <div class="mt-auto">
                            <a href="#" class="btn btn-dark explore-button">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card creative-card h-100 border-0 rounded-3 d-flex flex-column">
                        <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top rounded-top img-fluid" alt="Dish 3">
                        <div class="card-body flex-fill">
                            <h5 class="card-title">Savor of the Sea</h5>
                            <p class="card-text">Embark on a culinary journey with our Savor of the Sea, a masterpiece that captures the essence of gastronomic excellence.</p>
                        </div>
                        <div class="mt-auto">
                            <a href="#" class="btn btn-dark explore-button">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
   
    <div id="about" class="section">
        <div class="container">
            <h2 class="text-center mb-4">About Us</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card about-card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Our Vision</h5>
                            <p class="card-text">To be the leading innovator in restaurant reservation technology, connecting diners with their favorite establishments effortlessly. We envision a world where diners can discover, reserve, and enjoy exceptional dining moments, while restaurants optimize their operations through our intuitive and reliable reservation system. Our vision is to set new standards for hospitality technology, making every dining experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card about-card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Our Mission</h5>
                            <p class="card-text">To revolutionize the dining experience by providing a seamless and efficient restaurant reservation system that empowers both diners and restaurateurs. We are committed to creating a platform that enhances accessibility, convenience, and joy in the process of making and managing restaurant reservations. Our mission is to bring people together through the love of good food and delightful dining experiences.</p>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Vision and Mission Images Carousel -->
            <div id="visionMissionCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Vision Image 1" style="width: 100%; height: auto;">
                            </div>
                            <div class="col-md-4 mb-4">
                                <img src="https://images.unsplash.com/photo-1544148103-0773bf10d330?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Vision Image 2" style="width: 100%; height: auto;">
                            </div>
                            <div class="col-md-4 mb-4">
                                <img src="https://images.unsplash.com/photo-1515669097368-22e68427d265?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Vision Image 3" style="width: 100%; height: auto;">
                            </div>
                           
                        </div>
                    </div>
                
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <img src="https://images.unsplash.com/photo-1424847651672-bf20a4b0982b?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Additional Image 1" style="width: 100%; height: auto;">
                            </div>
                            <div class="col-md-4 mb-4">
                                <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Additional Image 2" style="width: 100%; height: auto;">
                            </div>
                            <div class="col-md-4 mb-4">
                                <img src="https://images.unsplash.com/photo-1587899897387-091ebd01a6b2?q=80&w=1513&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Vision Image 3" style="width: 100%; height: auto;">
                            </div>
                           
                            ...
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Initialize the carousel for vision and mission images
        document.addEventListener('DOMContentLoaded', function () {
    var navbar = document.querySelector('.navbar');
    var navbarHeight = navbar.offsetHeight;
    var lastScrollTop = 0;

    window.addEventListener('scroll', function () {
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > navbarHeight) {
            // Scrolling down
            navbar.classList.add('navbar-fixed', 'navbar-black');
        } else {
            // Scrolling up
            navbar.classList.remove('navbar-fixed', 'navbar-black');
        }

        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    });

    // Additional code for initializing other components (e.g., carousels)
});
    </script>
   



   
   <!-- Contact Section -->
   <div id="contact" class="section contact-section-bg">
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.897737783242!2d79.855287!3d6.8936613!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bde85d9645f%3A0xea1ae792f1aaf0e1!2sUnity%20Plaza!5e0!3m2!1sen!2slk!4v1706124398635!5m2!1sen!2slk" width="1340" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>

      
  

@include('partials.footer')
    <!-- Footer End -


    
    

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <!-- Smooth scrolling script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var scrollSpy = new bootstrap.ScrollSpy(document.body, {
                target: '#navbarNav'
            });
            var scroll = new SmoothScroll('a[href*="#"]');
        });
    </script>
</body>
</html>
