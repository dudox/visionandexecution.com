@extends('layouts.app')

@section('content')
    <br /><br />
    <div class="rts-breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bread-tag">
                        <a href="{{ route('welcome') }}">Home</a>
                        <span> /&nbsp;</span>
                        <a href="{{ route('services.index') }}" class="active">Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- latest service area -->
    <div class="rts-service-area rts-section-gap bg-service-h2 ptb--0 mt--0">
        <div class="container">
            <div class="row">
                <div class="title-area service-h2">
                    <span>Our Latest Services</span>
                    <h2 class="title">Service We Provide</h2>
                </div>
            </div>
            <div class="row g-5 mt--10">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single service start -->
                    <div class="rts-single-service-h2 inner">
                        <a href="service-details.html" class="thumbnail">
                            <img src="assets/images/service/10.jpg" alt="Service_image">
                        </a>
                        <div class="body">
                            <a href="service-details.html">
                                <h5 class="title">Business Solution</h5>
                            </a>
                            <p class="disc">
                                Fusce dignissim erat dis proin ornare class sem nibh
                            </p>
                            <a href="service-details.html" class="btn-red-more">Learn More<i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- single service End -->
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single service start -->
                    <div class="rts-single-service-h2 inner">
                        <a href="service-details.html" class="thumbnail">
                            <img src="assets/images/service/11.jpg" alt="Service_image">
                        </a>
                        <div class="body">
                            <a href="service-details.html">
                                <h5 class="title">Creative Ideas</h5>
                            </a>
                            <p class="disc">
                                Fusce dignissim erat dis proin ornare class sem nibh
                            </p>
                            <a href="service-details.html" class="btn-red-more">Learn More<i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- single service End -->
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single service start -->
                    <div class="rts-single-service-h2 inner">
                        <a href="service-details.html" class="thumbnail">
                            <img src="assets/images/service/12.jpg" alt="Service_image">
                        </a>
                        <div class="body">
                            <a href="service-details.html">
                                <h5 class="title">Market Research</h5>
                            </a>
                            <p class="disc">
                                Fusce dignissim erat dis proin ornare class sem nibh
                            </p>
                            <a href="service-details.html" class="btn-red-more">Learn More<i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- single service End -->
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single service start -->
                    <div class="rts-single-service-h2 inner">
                        <a href="service-details.html" class="thumbnail">
                            <img src="assets/images/service/13.jpg" alt="Service_image">
                        </a>
                        <div class="body">
                            <a href="service-details.html">
                                <h5 class="title">Best Solution</h5>
                            </a>
                            <p class="disc">
                                Fusce dignissim erat dis proin ornare class sem nibh
                            </p>
                            <a href="service-details.html" class="btn-red-more">Learn More<i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- single service End -->
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single service start -->
                    <div class="rts-single-service-h2 inner">
                        <a href="service-details.html" class="thumbnail">
                            <img src="assets/images/service/13.jpg" alt="Service_image">
                        </a>
                        <div class="body">
                            <a href="service-details.html">
                                <h5 class="title">Best Solution</h5>
                            </a>
                            <p class="disc">
                                Fusce dignissim erat dis proin ornare class sem nibh
                            </p>
                            <a href="service-details.html" class="btn-red-more">Learn More<i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- single service End -->
                </div>
            </div>
        </div>
    </div>
@endsection
