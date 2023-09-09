<div id="side-bar" class="side-bar">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="rts-sidebar-menu-desktop">
        {{-- <a class="logo-1" href="index.html"><img class="logo" src="{{ asset('assets/images/logo/logo-1.svg') }}"
                alt="finbiz_logo"></a>
        <a class="logo-2" href="index.html"><img class="logo" src="{{ asset('assets/images/logo/logo-4.svg') }}"
                alt="finbiz_logo"></a>
        <a class="logo-3" href="index.html"><img class="logo" src="{{ asset('assets/images/logo/logo-3.svg') }}"
                alt="finbiz_logo"></a>
        <a class="logo-4" href="index.html"><img class="logo" src="{{ asset('assets/images/logo/logo-5.svg') }}"
                alt="finbiz_logo"></a> --}}
        <div class="body d-none d-xl-block">
            <p class="disc">
                Vision & Execution, Inc. helps companies turn innovative ideas into global success. We specialize in
                identifying the most cost effective route to building a global business.
            </p>
            <div class="get-in-touch">
                <!-- title -->
                <div class="h6 title">Get In Touch</div>
                <!-- title End -->
                <div class="wrapper">
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-phone-alt"></i>
                        <a href="#">+{{ env('CELL_PHONE') }}</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-envelope"></i>
                        <a href="{{ env('MAIL_FROM_ADDRESS') }}">{{ env('MAIL_FROM_ADDRESS') }}</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-globe"></i>
                        <a href="#">{{ env('APP_URL') }}</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="#">Menlo Park, CA 94025</a>
                    </div>
                    <!-- single ENd -->
                </div>
                <div class="social-wrapper-two menu">
                    <a href="{{ env('HANDLE_FACEBOOK') }}"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ env('HANDLE_TWITTER') }}"><i class="fab fa-twitter"></i></a>
                    <a href="{{ env('HANDLE_LINKEDIN') }}"><i class="fab fa-linkedin"></i></a>
                    {{-- <a href="#"><i class="fab fa-whatsapp"></i></a> --}}
                    <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                </div>
            </div>
        </div>
        <div class="body-mobile d-block d-xl-none">
            <nav class="nav-main mainmenu-nav">
                <ul class="mainmenu">
                    <li class=" menu-item">
                        <a class="nav-link" href="{{ route('welcome') }}">Home</a>

                    </li>
                    <li class="menu-item"><a class="menu-link" href="{{ route('about-us') }}l">About Us</a></li>
                    <li class="has-droupdown menu-item">
                        <a class="menu-link" href="#">Services</a>
                        <ul class="submenu">
                            <li class="has-droupdown sub-droupdown">
                                <a href="#">Our Service</a>
                                <ul class="submenu third-lvl mobile-menu">
                                    <li><a href="our-service.html">Service 1</a></li>
                                    <li><a href="service-2.html">Service 2</a></li>
                                    <li><a href="service-3.html">Service 3</a></li>
                                </ul>
                            </li>
                            <li class="mobile-menu-link"><a href="service-details.html">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown menu-item">
                        <a class="menu-link" href="#">Pages</a>
                        <ul class="submenu">
                            <li class="mobile-menu-link"><a href="project.html">Project</a></li>
                            <li class="mobile-menu-link"><a href="project-details.html">Project Details</a></li>
                            <li class="mobile-menu-link"><a href="team.html">Team</a></li>
                            <li class="mobile-menu-link"><a href="team-details.html">Team Details</a></li>
                            <li class="mobile-menu-link"><a href="appoinment.html">appoinment</a></li>
                            <li class="mobile-menu-link"><a href="price-plan.html">Price Plan</a></li>
                            <li class="mobile-menu-link"><a href="404.html">404 Page</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown menu-item">
                        <a class="menu-link" href="#">Blog</a>
                        <ul class="submenu">
                            <li class="mobile-menu-link"><a href="blog-list.html">Blog List</a></li>
                            <li class="mobile-menu-link"><a href="blog-grid.html">Blog Grid</a></li>
                            <li class="mobile-menu-link"><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="social-wrapper-two menu mobile-menu">
                <a href="{{ env('HANDLE_FACEBOOK') }}"><i class="fab fa-facebook-f"></i></a>
                <a href="{{ env('HANDLE_TWITTER') }}"><i class="fab fa-twitter"></i></a>
                <a href="{{ env('HANDLE_LINKEDIN') }}"><i class="fab fa-linkedin"></i></a>
                {{-- <a href="#"><i class="fab fa-whatsapp"></i></a> --}}
                <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
            </div>
            <a href="{{ route('contact-us') }}"
                class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">
                Speak to an Expert
            </a>
        </div>
    </div>
    <!-- inner menu area desktop End -->
</div>
