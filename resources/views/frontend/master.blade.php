<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset ('frontend/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset ('frontend/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset ('frontend/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset ('frontend/css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset ('frontend/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset ('frontend/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset ('frontend/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset ('frontend/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset ('frontend/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset ('frontend/css/style.css') }}" type="text/css">
</head>

<body>

    <div id="preloder">
        <div class="loader"></div>
    </div>

    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>

    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon  search-switch">
            <i class="icon_search"></i>
        </div>
        <div class="header-configure-area">
            <div class="language-option">
                <img src="img/flag.jpg" alt="">
                <span>EN <i class="fa fa-angle-down"></i></span>
                <div class="flag-dropdown">
                    <ul>
                        <li><a href="#">Zi</a></li>
                        <li><a href="#">Fr</a></li>
                    </ul>
                </div>
            </div>
            <a href="#" class="bk-btn">Booking Now</a>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./rooms.html">Rooms</a></li>
                <li><a href="./about-us.html">About Us</a></li>
                <li><a href="./pages.html">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./room-details.html">Room Details</a></li>
                        <li><a href="#">Deluxe Room</a></li>
                        <li><a href="#">Family Room</a></li>
                        <li><a href="#">Premium Room</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">News</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> (12) 345 67890</li>
            <li><i class="fa fa-envelope"></i> info.colorlib@gmail.com</li>
        </ul>
    </div>

    <!--Header -->
    <header class="header-section">
        @include('frontend.inc.navbar')
    </header>

    <!-- Slider -->
    <section class="hero-section">
        @include('frontend.inc.slider')
    </section>
    <!-- Hero Section End -->

    <!-- Services Section End -->
    <section class="services-section spad">
        @yield('content')
    </section>
    <!-- Services Section End -->

    <!-- Footer -->
    <footer class="footer-section">
        @include('frontend.inc.footer')
    </footer>
    <!-- Js Plugins -->
    <script src="{{asset ('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{asset ('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{asset ('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{asset ('frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{asset ('frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{asset ('frontend/js/jquery.slicknav.js') }}"></script>
    <script src="{{asset ('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{asset ('frontend/js/main.js') }}"></script>
</body>

</html>
