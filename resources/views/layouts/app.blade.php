<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental App</title>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    {{-- Bootstrap --}}
    <link href="{{ asset('css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">

    {{-- jQuery UI --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.0/themes/base/jquery-ui.min.css" rel="stylesheet" />


    <!-- Libraries Stylesheet -->
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
<!-- Topbar Start -->
<div class="container-fluid bg-light pt-3 d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <p><i class="fa fa-envelope mr-2"></i>bimal2ghosh@gmail.com</p>
                    <p class="text-body px-3">|</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+91 760 2047 578</p>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-primary px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-primary px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-primary px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-primary px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-primary pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
    <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
        <a href="" class="navbar-brand">
            <h1 class="m-0 text-primary"><span class="text-dark">RENT</span>ER</h1>
        </a>
        <a class="navbar-brand text-dark" href="/">Home</a>
        @if (Auth::user() && Auth::user()->role == 'admin')
            <a class="navbar-brand text-dark" href="/admin"><span class="text-warning">Admin</span></a>
        @endif
        <button class="navbar-toggler btn btn-outline-success" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" type="button" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-success"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mb-lg-0 mb-2 ms-auto">
                <li class="nav-item"><a class="nav-link text-dark" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="{{ route('contact') }}">Contact</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="{{ route('frontend.cars.index') }}">Browse Cars</a></li>
                @guest
                    <li class="nav-item"><a class="nav-link text-dark" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="{{ route('register') }}">Register</a></li>
                @endguest
                @auth
                    <li class="nav-item"><a class="nav-link text-dark" href="{{ route('frontend.rentals.index') }}">Bookings</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" href="{{ route('logout') }}">Logout</a></li>
                @endauth
            </ul>
        </div>
    </nav>
</div>
<!-- Navbar End -->


        @yield('content')

<!-- Footer Start -->
<div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
    <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
            <p class="m-0 text-white-50">Copyright © <a href="#">2024</a>. All Rights Reserved.
            </p>
        </div>
        <div class="col-lg-6 text-center text-md-right">
            <p class="m-0 text-white-50">Designed by <a href="#">Bimal Ghosh</a>
            </p>
        </div>
    </div>
</div>
<!-- Footer End -->


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
{{-- jQuery UI --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.0/jquery-ui.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/easing.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/moment-timezone.min.js') }}"></script>
<script src="{{ asset('js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Template Javascript -->
<script src="{{ asset('js/main.js') }}"></script>
    {{-- Custom Script --}}
    @yield('scripts')
</body>
</html>
