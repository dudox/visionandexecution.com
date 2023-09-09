@extends('layouts.app')

@section('content')
    <div class="rts-banner-area banner-three">
        <div class="swiper mySwiperh3_banner">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class=" bg_banner-three bg_image rts-section-gap">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="banner-three-inner">

                                        <!-- type headline start-->
                                        <h3 class="title cd-headline clip is-full-width">
                                            Tech Commercialisation
                                        </h3>
                                        <p class="disc">
                                            You build innovative technology by challenging the ordinary. Our job, formulate
                                            inspired market entry strategies. Together we take you from raw inspiration and
                                            domain expertise to well executed business strategies.
                                        </p>
                                        <div class="button-group">
                                            <a href="{{ route('services.technology-commercialization') }}"
                                                class="rts-btn btn-primary-3">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class=" bg_banner-three slide-2 bg_image rts-section-gap">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="banner-three-inner">
                                        <!-- type headline start-->
                                        <h1 class="title cd-headline clip is-full-width">
                                            Strategic Growth
                                        </h1>
                                        <p class="disc">
                                            Your vision is to be the market leader. Our job, create breakthrough results
                                            that leverage our business acumen with your market dynamics. Together we take
                                            you from innovation to market leadership.
                                        </p>
                                        <div class="button-group">
                                            <a href="{{ route('services.strategic-growth') }}"
                                                class="rts-btn btn-primary-3">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class=" bg_banner-three slide-3 bg_image rts-section-gap">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="banner-three-inner">
                                        <!-- type headline start-->
                                        <h1 class="title cd-headline clip is-full-width">
                                            Innovation Management
                                        </h1>
                                        <p class="disc">
                                            You conceive fresh product ideas by challenging the status quo. Our job, provide
                                            the discipline to transform your inspiration into sustainable growth. Together
                                            we optimize your product development process.
                                        </p>
                                        <div class="button-group">
                                            <a href="{{ route('services.innovation-management') }}"
                                                class="rts-btn btn-primary-3">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-about-area rts-section-gap bg-about-sm-shape">
        <div class="container">
            <div class="row g-5 align-items-center">
                <!-- about left -->
                <div
                    class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-sm-2 order-2 mt_md--50 mt_sm--50">
                    <div class="rts-title-area">
                        <p class="pre-title">More About Us</p>
                        <h2 class="title">
                            We Provide Best Business Solution in Town
                        </h2>
                    </div>
                    <div class="about-inner">
                        <p class="disc">
                            Vision & Execution, Inc is a team of industry experts and business strategists who thrive on
                            challenging the accepted, asking the tough questions and solving the difficult problems. We
                            specialize in turning your innovative ideas into success and identifying the most cost effective
                            avenues for building your global business. International companies also rely on us to establish
                            or increase their U.S. presence.


                        </p>
                        <!-- start about success area -->
                        <div class="row about-success-wrapper">
                            <!-- left wrapper start -->
                            <div class="col-lg-6 col-md-6">
                                <div class="single">
                                    <i class="far fa-check"></i>
                                    <p class="details">
                                        24/7 Call Services Avilable
                                    </p>
                                </div>
                                <div class="single">
                                    <i class="far fa-check"></i>
                                    <p class="details">Great Skilled Consultant</p>
                                </div>
                                <div class="single">
                                    <i class="far fa-check"></i>
                                    <p class="details">Expert Team Members</p>
                                </div>
                            </div>
                            <!-- left wrapper end -->
                            <div class="col-lg-6 col-md-6">
                                <div class="single">
                                    <i class="far fa-check"></i>
                                    <p class="details">How to improve business</p>
                                </div>
                                <div class="single">
                                    <i class="far fa-check"></i>
                                    <p class="details">Business is the best plan</p>
                                </div>
                                <div class="single">
                                    <i class="far fa-check"></i>
                                    <p class="details">Services we provide</p>
                                </div>
                            </div>
                        </div>
                        <!-- start about success area -->

                        <!-- about founder & get in touch start -->
                        <div class="row about-founder-wrapper align-items-center mt--40">
                            <!-- left area start -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="author-inner">
                                    <a class="thumbnail" href="#"><img width="50"
                                            src="{{ asset('pic_patrina.jpg') }}" alt="finbiz_founder" /></a>
                                    <div class="founder-details">
                                        <a href="team-details.html">
                                            <h6 class="title">Patrina Mack</h6>
                                        </a>
                                        <span>CEO & Founder</span>
                                    </div>
                                </div>
                            </div>
                            <!-- left area end -->
                            <!-- right founder area -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt_sm--20">
                                <div class="author-call-option">
                                    <img class="authore-call" src="assets/images/about/call.svg" alt="call_founder" />
                                    <div class="call-details">
                                        <span>Call us anytime</span>
                                        <a href="tel:{{ env('CELL_PHONE') }}">
                                            <h6 class="title">{{ env('CELL_PHONE') }}</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- left founder area -->
                        </div>
                        <!-- about founder & get in touch end -->
                    </div>
                </div>
                <!-- about right -->

                <!-- about-right Start-->
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-md-1 order-sm-1 order-1">
                    <div class="about-one-thumbnail">
                        <img src="assets/images/about/main/about-01.png" alt="about-finbiz" />
                        <img class="small-img" src="assets/images/about/main/about-02.png" alt="finbiz-small" />
                        <div class="experience">
                            <div class="left single">
                                <h2 class="title">25+</h2>
                                <p class="time">Years</p>
                            </div>
                            <div class="right single">
                                <p class="disc">
                                    Of experience in consulting service
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- about-right end -->
            </div>
        </div>
    </div>

    <div class="rts-service-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-title-area service text-center">
                        <p class="pre-title">Our Services</p>
                        <h2 class="title">High Quality Services</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid service-main plr--120-service mt--50 plr_md--0 pl_sm--0 pr_sm--0">
            <div class="background-service row">
                <!-- start single Service -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-one-inner one">
                        <div class="thumbnail">
                            <img src="assets/images/service/icon/01.svg" alt="finbiz_service" />
                        </div>
                        <div class="service-details">
                            <a href="{{ route('services.technology-commercialization') }}">
                                <h5 class="title">
                                    Tech Commercialization
                                </h5>
                            </a>
                            <p class="disc">
                                Merging Inspiration with the Science of Business Strategy
                            </p>
                            <a class="rts-read-more btn-primary"
                                href="{{ route('services.technology-commercialization') }}"><i
                                    class="far fa-arrow-right"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <!-- end single Services -->
                <!-- start single Service -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-one-inner two">
                        <div class="thumbnail">
                            <img src="assets/images/service/icon/02.svg" alt="finbiz_service" />
                        </div>
                        <div class="service-details">
                            <a href="{{ route('services.strategic-growth') }}">
                                <h5 class="title">Strategic Growth</h5>
                            </a>
                            <p class="disc">
                                Tapping Market Dynamics to Fulfill Your True Revenue Potential
                            </p>
                            <a class="rts-read-more btn-primary" href="{{ route('services.strategic-growth') }}"><i
                                    class="far fa-arrow-right"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <!-- end single Services -->
                <!-- start single Service -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-one-inner three">
                        <div class="thumbnail">
                            <img src="assets/images/service/icon/03.svg" alt="finbiz_service" />
                        </div>
                        <div class="service-details">
                            <a href="{{ route('services.innovation-management') }}">
                                <h5 class="title">Innovation Management</h5>
                            </a>
                            <p class="disc">
                                Translating Inspiration to Sustainable Business Practices
                            </p>
                            <a class="rts-read-more btn-primary" href="{{ route('services.innovation-management') }}"><i
                                    class="far fa-arrow-right"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <!-- end single Services -->
                <!-- start single Service -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-one-inner four">
                        <div class="thumbnail">
                            <img src="assets/images/service/icon/04.svg" alt="finbiz_service" />
                        </div>
                        <div class="service-details">
                            <a href="{{ route('services.voice-of-the-customer') }}">
                                <h5 class="title">Voice of the Customer</h5>
                            </a>
                            <p class="disc">
                                Increase customer loyalty, trust and build better products
                            </p>
                            <a class="rts-read-more btn-primary" href="{{ route('services.voice-of-the-customer') }}"><i
                                    class="far fa-arrow-right"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <!-- end single Services -->
                <!-- start single Service -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-one-inner five">
                        <div class="thumbnail">
                            <img src="assets/images/service/icon/05.svg" alt="finbiz_service" />
                        </div>
                        <div class="service-details">
                            <a href="{{ route('services.software-development') }}">
                                <h5 class="title">Software Development</h5>
                            </a>
                            <p class="disc">
                                Transforming ideas into seamless software applications
                            </p>
                            <a class="rts-read-more btn-primary" href="{{ route('services.software-development') }}"><i
                                    class="far fa-arrow-right"></i>Read More</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="cta-one-bg col-12">
                    <div class="cta-one-inner">
                        <div class="cta-left">
                            <h3 class="title">
                                Let’s discuss about how we can help make your
                                business better
                            </h3>
                        </div>
                        <div class="cta-right">
                            <a class="rts-btn btn-white" href="{{ route('contact-us') }}">Lets Work Together</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-business-goal mt--0 rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <!-- business goal left -->
                <div class="col-lg-6">
                    <div class="business-goal-one">
                        <img src="assets/images/business-goal/01.jpg" alt="Business_Goal" />
                        <img class="small" src="assets/images/business-goal/sm-01.jpg" alt="Business_Goal" />
                    </div>
                </div>
                <!-- business goal right -->

                <!-- right area business -->
                <div class="col-lg-6 mt--35 mt_md--70 mt_sm--70">
                    <div class="business-goal-right">
                        <div class="rts-title-area business text-start pl--30">
                            <p class="pre-title">JUST A CONSULTANCY</p>
                            <h2 class="title">
                                We know how to manage business globally
                            </h2>
                        </div>
                        <div class="rts-business-goal pl--30">
                            <div class="single-goal">
                                <img src="assets/images/business-goal/icon/01.svg" alt="business_Icone" class="thumb" />
                                <div class="goal-wrapper">
                                    <h6 class="title">Best Business Consulting</h6>
                                    <p class="disc">
                                        Fusce condimentum mattis placerat odio donec
                                        lacus porta torquent, mauris gravida rutrum
                                    </p>
                                </div>
                            </div>
                            <div class="single-goal">
                                <img src="assets/images/business-goal/icon/02.svg" alt="business_Icone" class="thumb" />
                                <div class="goal-wrapper">
                                    <h6 class="title">24/7 Customer Support</h6>
                                    <p class="disc">
                                        Fusce condimentum mattis placerat odio donec
                                        lacus porta torquent, mauris gravida rutrum
                                    </p>
                                </div>
                            </div>
                            <div class="goal-button-wrapper mt--70">
                                <a href="contactus.html" class="rts-btn btn-primary color-h-black">Contact Us</a>
                                <div class="vedio-icone">
                                    <a id="play-video" class="video-play-button" href="#">
                                        <span></span>
                                        <span class="outer-text">Watch Video</span>
                                    </a>
                                    <div id="video-overlay" class="video-overlay">
                                        <a class="video-overlay-close">×</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- right area business ENd -->
            </div>
        </div>
    </div>

    <div class="rts-counter-up-area rts-section-gap counter-bg">
        <div class="container">
            <div class="row">
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter">
                        <img src="assets/images/counterup/icon/01.svg" alt="Business_counter" />
                        <div class="counter-details">
                            <h2 class="title">
                                <span class="counter animated fadeInDownBig">858</span>
                            </h2>
                            <p class="disc">Successful Projects</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 justify-content-center two pl--30">
                        <img src="assets/images/counterup/icon/02.svg" alt="Business_counter" />
                        <div class="counter-details">
                            <h2 class="title">
                                <span class="counter animated fadeInDownBig">650</span>
                            </h2>
                            <p class="disc">Media Activities</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 justify-content-center three pl--50">
                        <img src="assets/images/counterup/icon/03.svg" alt="Business_counter" />
                        <div class="counter-details">
                            <h2 class="title">
                                <span class="counter animated fadeInDownBig">567</span>
                            </h2>
                            <p class="disc">Skilled Experts</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 justify-content-end four">
                        <img src="assets/images/counterup/icon/04.svg" alt="Business_counter" />
                        <div class="counter-details">
                            <h2 class="title happy">
                                <span class="counter animated fadeInDownBig">28</span>
                            </h2>
                            <p class="disc">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
            </div>
        </div>
    </div>

    <div class="rts-gallery-area rts-section-gap gallery-bg bg_image">
        <div class="container">
            <div class="row">
                <div class="rts-title-area gallery text-start pl_sm--20">
                    <p class="pre-title">Popular Projects</p>
                    <h2 class="title">Our Completed Projects</h2>
                </div>
            </div>
            <div class="row mt--45">
                <div class="col-12">
                    <div class="swiper mygallery mySwipers">
                        <div class="swiper-wrapper gallery">
                            <div class="swiper-slide">
                                <div class="row g-5 w-g-100">
                                    <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                        <div class="thumbnail-gallery">
                                            <img src="assets/images/gallery/gallery-01.jpg" alt="business-images" />
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                        <div class="bg-right-gallery">
                                            <div class="icon">
                                                <img src="assets/images/gallery/icon/01.svg" alt="Business-gallery" />
                                            </div>
                                            <a href="#">
                                                <h4 class="title">
                                                    U.S. Market Launch
                                                </h4>
                                            </a>
                                            <span>Case Study, Growth</span>
                                            <p class="disc">
                                                U.S. Market Launch for International SLA Management Tool
                                                Guided strategy and implemented tactical plans for complex marketplace.
                                            </p>
                                            <a class="rts-btn btn-primary" href="project-details.html">View Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row g-5 w-g-100">
                                    <div class="col-lg-7">
                                        <div class="thumbnail-gallery">
                                            <img src="{{ asset('assets/images/refocus.png') }}" class="img-fluid"
                                                alt="business-images" />
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="bg-right-gallery">
                                            <div class="icon">
                                                <img src="assets/images/gallery/icon/01.svg" alt="Business-gallery" />
                                            </div>
                                            <a href="#">
                                                <h4 class="title">
                                                    Refocus
                                                </h4>
                                            </a>
                                            <span>Case Study, Growth</span>
                                            <p class="disc">
                                                Refocus of Major Credit Card Company Team to Meet Key Milestone
                                                Guided a disparate, cross-functional team to meet deadline for government
                                                reporting requirements.
                                            </p>
                                            <a class="rts-btn btn-primary" href="project-details.html">View Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row g-5 w-g-100">
                                    <div class="col-lg-7">
                                        <div class="thumbnail-gallery">
                                            <img src="assets/images/gallery/gallery-03.jpg" alt="business-images" />
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="bg-right-gallery">
                                            <div class="icon">
                                                <img src="assets/images/gallery/icon/01.svg" alt="Business-gallery" />
                                            </div>
                                            <a href="#">
                                                <h4 class="title">
                                                    Pro Solution Business
                                                </h4>
                                            </a>
                                            <span>Case Study, Growth</span>
                                            <p class="disc">
                                                But a very wide of business because
                                                it covers every human activity.
                                                Business is really concerned with
                                                the production.
                                            </p>
                                            <a class="rts-btn btn-primary" href="project-details.html">View Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <x-teams />



    <div class="rts-client-feedback">
        <div class="container">
            <div class="row">
                <!-- start testimonials area -->
                <div class="col-lg-7">
                    <div class="rts-title-area reviews text-start pl--30 pt--70">
                        <p class="pre-title">Our Testimonials</p>
                        <h2 class="title">Client’s Feedbacks</h2>

                        <!-- swiper area start -->
                        <div class="swiper mySwipertestimonial">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-inner">
                                        <p class="disc text-start">
                                            “Consectetur adipiscing elit velit porta
                                            sapien purus erat nec, a ornare laoreet
                                            sem gravida accumsan in commodo aliquet
                                            nascetur maecenas. Sem tempus hendrerit
                                            diam mauris leo magna sociosqu viverra,
                                            accumsan massa tristique egestas cum
                                            sodales hac lacinia feugiat scelerisque
                                            porttitor”
                                        </p>
                                        <div class="testimonial-bottom-one">
                                            <div class="thumbnail">
                                                <img src="assets/images/testimonials/02.png"
                                                    alt="business-testimonials" />
                                            </div>
                                            <div class="details">
                                                <a href="#">
                                                    <h5 class="title">
                                                        David Smith
                                                    </h5>
                                                </a>
                                                <span>JHKL Owner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-inner">
                                        <p class="disc text-start">
                                            “Consectetur adipiscing elit velit porta
                                            sapien purus erat nec, a ornare laoreet
                                            sem gravida accumsan in commodo aliquet
                                            nascetur maecenas. Sem tempus hendrerit
                                            diam mauris leo magna sociosqu viverra,
                                            accumsan massa tristique egestas cum
                                            sodales hac lacinia feugiat scelerisque
                                            porttitor”
                                        </p>
                                        <div class="testimonial-bottom-one">
                                            <div class="thumbnail">
                                                <img src="assets/images/testimonials/02.png"
                                                    alt="business-testimonials" />
                                            </div>
                                            <div class="details">
                                                <a href="#">
                                                    <h5 class="title">
                                                        David Smith
                                                    </h5>
                                                </a>
                                                <span>JHKL Owner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-inner">
                                        <p class="disc text-start">
                                            “Consectetur adipiscing elit velit porta
                                            sapien purus erat nec, a ornare laoreet
                                            sem gravida accumsan in commodo aliquet
                                            nascetur maecenas. Sem tempus hendrerit
                                            diam mauris leo magna sociosqu viverra,
                                            accumsan massa tristique egestas cum
                                            sodales hac lacinia feugiat scelerisque
                                            porttitor”
                                        </p>
                                        <div class="testimonial-bottom-one">
                                            <div class="thumbnail">
                                                <img src="assets/images/testimonials/02.png"
                                                    alt="business-testimonials" />
                                            </div>
                                            <div class="details">
                                                <a href="#">
                                                    <h5 class="title">
                                                        David Smith
                                                    </h5>
                                                </a>
                                                <span>JHKL Owner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <!-- swiper area end -->
                    </div>
                </div>
                <!-- end testimonials are -->
                <!-- images area -->
                <div class="col-lg-5">
                    <div class="rts-test-one-image-inner d-none d-lg-block">
                        <img src="assets/images/testimonials/01.png" alt="business_testimobials" />
                    </div>
                </div>
                <!-- image area end -->
            </div>
        </div>
    </div>
@endsection
