<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="description" content="Unica University Template">
    <meta name="keywords" content="event, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="/assets/img/favicon.ico" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/assets/css/bootstrap5.min.css" />
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/assets/css/themify-icons.css" />
    <link rel="stylesheet" href="/assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="/assets/css/animate.css" />
    <link rel="stylesheet" href="/assets/css/owl.carousel.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />


    <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- header section -->
    <header class="header-section">
        <div class="container">
            <!-- logo -->
            <a href="{{ route('/') }}" class="site-logo"><img src="/assets/img/logo.png" width="400px" alt=""></a>
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
            <div class="header-info">
                <div class="hf-item">
                    <i class="fa fa-clock-o"></i>
                    <p><span>Working time:</span>Monday - Friday: 08 AM - 06 PM</p>
                </div>
                <div class="hf-item">
                    <i class="fa fa-map-marker"></i>
                    <p><span>Find us:</span>40 Baria Street 133/2, New York City, US</p>
                </div>
            </div>
        </div>
    </header>
    <!-- header section end-->


    <!-- Header section  -->
    <nav class="nav-section">
        <div class="container">
            <div class="nav-right">
                <a href=""><i class="fa fa-search"></i></a>
                <a href=""><i class="fa fa-shopping-cart"></i></a>
            </div>
            <ul class="main-menu">
                <li class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-link {{ request()->is('about') ? 'active' : '' }}">
                    <a href="about.html">About Us</a>
                </li>
                <li class="nav-link {{ request()->is('event') ? 'active' : '' }}">
                    <a href="#">Event</a>
                </li>
                <li class="nav-link {{ request()->routeIs('course') ? 'active' : '' }}">
                    <a href="{{ route('course') }}">COURSES</a>
                </li>
                <li class="nav-link {{ request()->is('contact') ? 'active' : '' }}">
                    <a href="{{ route('contact.index') }}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Header section end -->
    @yield('content')
     <!-- Footer section -->
     <footer class="footer-section">
        <div class="container footer-top">
            <div class="row">
                <!-- widget -->
                <div class="col-sm-6 col-lg-3 footer-widget">
                    <div class="about-widget">
                        <img src="img/logo-light.png" alt="">
                        <p>orem ipsum dolor sit amet, consecter adipiscing elite. Donec minos varius, viverra justo ut,
                            aliquet nisl.</p>
                        <div class="social pt-1">
                            <a href=""><i class="fa fa-twitter-square"></i></a>
                            <a href=""><i class="fa fa-facebook-square"></i></a>
                            <a href=""><i class="fa fa-google-plus-square"></i></a>
                            <a href=""><i class="fa fa-linkedin-square"></i></a>
                            <a href=""><i class="fa fa-rss-square"></i></a>
                        </div>
                    </div>
                </div>
                <!-- widget -->
                <div class="col-sm-6 col-lg-3 footer-widget">
                    <h6 class="fw-title">USEFUL LINK</h6>
                    <div class="dobule-link">
                        <ul>
                            <li><a href="{{ route('/') }}">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="{{ route('course') }}">Courses</a></li>
                        </ul>
                        <ul>
                            <li><a href="">Policy</a></li>
                            <li><a href="">Term</a></li>
                            <li><a href="">Help</a></li>
                            <li><a href="">FAQs</a></li>
                            <li><a href="">Site map</a></li>
                        </ul>
                    </div>
                </div>
                <!-- widget -->
                <div class="col-sm-6 col-lg-3 footer-widget">
                    <h6 class="fw-title">RECENT POST</h6>
                    <ul class="recent-post">
                        <li>
                            <p>Snackable study:How to break <br> up your master's degree</p>
                            <span><i class="fa fa-clock-o"></i>24 Mar 2018</span>
                        </li>
                        <li>
                            <p>Open University plans major <br> cuts to number of staff</p>
                            <span><i class="fa fa-clock-o"></i>24 Mar 2018</span>
                        </li>
                    </ul>
                </div>
                <!-- widget -->
                <div class="col-sm-6 col-lg-3 footer-widget">
                    <h6 class="fw-title">CONTACT</h6>
                    <ul class="contact">
                        <li>
                            <p><i class="fa fa-map-marker"></i> Myanmar , Yangon , Thaketa Township</p>
                        </li>
                        <li>
                            <p><i class="fa fa-phone"></i> 09403056829</p>
                        </li>
                        <li>
                            <p><i class="fa fa-envelope"></i> support@technologylearn.info</p>
                        </li>
                        <li>
                            <p><i class="fa fa-clock-o"></i> Monday - Friday, 09:00AM - 10:00 PM</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <div class="copyright">
            <div class="container">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </footer>
    <!-- Footer section end-->
    <!--====== Javascripts & Jquery ======-->
    <script src="/assets/js/jquery-3.2.1.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/jquery.countdown.js"></script>
    <script src="/assets/js/masonry.pkgd.min.js"></script>
    <script src="/assets/js/magnific-popup.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/bootstrap5.bundle.min.js"></script>

    	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="assets/js/map.js"></script>

</body>

</html>
