<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('logo-2.jpeg') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome-5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/unicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="home-yellow">

    <header class="header-three header--sticky">
        <div class="container">
            <div class="row header-top-three">
                <div class="col-lg-6">
                    <p class="top-left">Are you ready to grow up your business? <a
                            href="{{ route('contact-us') }}">Contact Us <i class="far fa-arrow-right"></i></a></p>
                </div>
                <div class="col-lg-6 right-h-three">
                    <div class="header-top-right">
                        <div class="single-right email">
                            <i class="fas fa-envelope"></i>
                            <a href="#">{{ env('MAIL_FROM_ADDRESS') }}</a>
                        </div>
                        <div class="single-right call">
                            <i class="far fa-phone-volume"></i>
                            <span>Hotline:</span>
                            <a href="#">{{ env('CELL_PHONE') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row main-header main-header-three">
                <div class="col-lg-3 col-md-4 col-sm-5 col-5">
                    <a href="{{ route('welcome') }}" class="thumbnail-logo">
                        <img src="{{ asset('logo.gif') }}" alt="{{ env('APP_NAME') }}">
                    </a>
                </div>
                <div class="col-lg-6 d-none d-xl-block">
                    <div class="text-center d-flex justify-content-center">
                        <nav class="nav-main mainmenu-nav d-none d-xl-block">
                            <ul class="mainmenu">
                                <li class="">
                                    <a class="nav-item" href="{{ route('welcome') }}">Home</a>
                                </li>
                                <li class="">
                                    <a class="nav-item" href="{{ route('about-us') }}">About Us</a>

                                </li>
                                <li class="has-droupdown">
                                    <a class="nav-link" href="{{ route('services.index') }}">Services</a>
                                    <ul class="submenu menu-link3">
                                        <li>
                                            <a href="{{ route('services.technology-commercialization') }}">
                                                Technology Commercialization
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services.strategic-growth') }}">
                                                Strategic Growth
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services.innovation-management') }}">
                                                Innovation Management
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services.voice-of-the-customer') }}">
                                                Voice of the Customer
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services.software-development') }}">
                                                Software Development
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a class="nav-item" href="#">Events</a>

                                </li>
                                <li class="">
                                    <a class="nav-item" href="#">Blog</a>

                                </li>
                                <li><a class="nav-item" href="{{ route('contact-us') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-9 col-md-8 col-sm-7 col-7">
                    <div class="right justify-content-end">
                        <a href="{{ env('HANDLE_CALENDLY') }}" class="rts-btn btn-primary-3">Book a Meeting</a>
                        <button id="menu-btn" class="menu rts-btn btn-primary-3-menu ml--20">
                            <img class="menu-dark" src="{{ asset('assets/images/icon/menu.png') }}" alt="Menu-icon">
                            <img class="menu-light" src="{{ asset('assets/images/icon/menu-light.png') }}"
                                alt="Menu-icon">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <x-app-sidebar />

    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>

    <div id="anywhere-home">
    </div>
    @yield('content')


    <div class="rts-footer-area footer-one rts-section-gapTop bg-footer-one">
        <div class="container bg-shape-f1">
            <!-- footer call to action area -->
            <div class="row">
                <div class="col-12">
                    <div class="rts-cta-wrapper">
                        <div class="background-cta">
                            <div class="row">
                                <!-- cta-left -->
                                <div class="col-lg-6">
                                    <div class="cta-left-wrapepr">
                                        <p class="cta-disc">
                                            Latest Business Ideas
                                        </p>
                                        <h3 class="title">Sign Up Newsletter</h3>
                                    </div>
                                </div>
                                <!-- cta left end -->
                                <div class="col-lg-6">
                                    <!-- cta right -->
                                    <form class="cta-input-arae">
                                        <input type="email" name="email" placeholder="Enter Email Address"
                                            required>
                                        <button type="submit" class="rts-btn btn-primary">Subscribe Now</button>
                                    </form>
                                    <!-- cta right End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer call to action area End -->
            <!-- rts footer area -->
            <div class="row pt--120 pt_sm--80 pb--80 pb_sm--40">
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <div class="footer-one-single-wized">
                        <div class="wized-title">
                            <h5 class="title">Quick Links</h5>
                            <img src="{{ asset('assets/images/footer/under-title.png') }}" alt="finbiz_footer">
                        </div>
                        <div class="quick-link-inner">
                            <ul class="links">
                                <li><a href="#"><i class="far fa-arrow-right"></i> Forum Support</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i> Help & FAQ</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i> Contact Us</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i> Pricing & Plans</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i> Cookie Policy</a></li>
                            </ul>
                            <ul class="links margin-left-70">
                                <li><a href="#"><i class="far fa-arrow-right"></i> About Us</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i> My Account</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i>Our Company</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i>Service</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- footer mid area -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <div class="footer-one-single-wized mid-bg">
                        <div class="wized-title">
                            <h5 class="title">Opening Hours</h5>
                            <img src="{{ asset('assets/images/footer/under-title.png') }}" alt="finbiz_footer">
                        </div>
                        <div class="opening-time-inner">
                            <div class="single-opening">
                                <p class="day">Week Days</p>
                                <p class="time">09.00 - 24:00</p>
                            </div>
                            <div class="single-opening">
                                <p class="day">Saturday</p>
                                <p class="time">08:00 - 03.00</p>
                            </div>
                            <div class="single-opening mb--30 mb_sm--10">
                                <p class="day">Sunday</p>
                                <p class="time">Day Off</p>
                            </div>
                            <a href="{{ route('contact-us') }}" class="rts-btn btn-primary contact-us">Contact Us</a>
                        </div>
                    </div>
                </div>
                <!-- footer mid area end -->

                <!-- footer end area post -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <div class="footer-one-single-wized margin-left-65">
                        <div class="wized-title">
                            <h5 class="title">Popular Updates</h5>
                            <img src="{{ asset('assets/images/footer/under-title.png') }}" alt="finbiz_footer">
                        </div>
                        <div class="post-wrapper">
                            <!-- single post -->
                            <div class="single-footer-post mb--30">
                                <div class="left-thumbnail">
                                    <img src="{{ asset('assets/images/footer/post/01.png') }}"
                                        alt="finbiz_business-post">
                                </div>
                                <div class="post-right">
                                    <p> <i class="fal fa-clock"></i> 15th April, 2022</p>
                                    <a href="blog-details.html">
                                        <h6 class="title">Best Business Ideas For
                                            Getting Solution</h6>
                                    </a>
                                    <a class="red-more" href="blog-details.html">Read More<i
                                            class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- single post End -->
                            <!-- single post -->
                            <div class="single-footer-post">
                                <div class="left-thumbnail">
                                    <img src="{{ asset('assets/images/footer/post/02.png') }}"
                                        alt="finbiz_business-post">
                                </div>
                                <div class="post-right">
                                    <p> <i class="fal fa-clock"></i> 15th April, 2022</p>
                                    <a href="blog-details.html">
                                        <h6 class="title">Best Business Ideas For
                                            Getting Solution</h6>
                                    </a>
                                    <a class="red-more" href="blog-details.html">Read More<i
                                            class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- single post End -->
                        </div>
                    </div>
                </div>
                <!-- footer end area post end-->
            </div>
            <!-- rts footer area End -->
        </div>
        <!-- copyright area start -->
        <div class="rts-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <p>Copyright © 1999-2023 Vision & Execution, Inc.
                                Turning Innovative Ideas into Global Success</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright area end -->
    </div>

    <div class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jqueryui.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoint.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/sal.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/contact.form.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>


</html>
