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
                        <a href="{{ route('services.index') }}" class="">Services</a>
                        <span> /</span>
                        <a href="#" class="active">Voice of the Customer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- start service details area -->
    <div class="rts-service-details-area   mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                    <!-- service details left area start -->
                    <div class="service-detials-step-1">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/impressed-young-handsome-man-standing-profile-view-looking-side-talking-by-loudspeaker-isolated-white-background.jpg') }}"
                                alt="business-area">
                        </div>
                        <h4 class="title">Voice of the Customer</h4>
                        <p class="disc">
                            Increase customer loyalty and build better products with a highly tuned ear to customer wants
                            and needs. Vision & Execution helps you capture how customer really feel about your brand and
                            the products or services you sell. With that insight we help you tailor what you offer and how
                            you offer it to the customers who care most about what you do so you can grow your business.
                        </p>
                        <p class="disc">
                            Understanding your customers' needs, preferences, and expectations is paramount to creating
                            products and services that resonate and excel in the market. At Vision & Execution, our Voice of
                            the Customer (VoC) Analysis service is designed to help you gain valuable insights directly from
                            your customers. By harnessing the power of their voices, you can make data-driven decisions that
                            drive customer satisfaction and business success.
                        </p>
                        <div class="row g-5 mt--30 mb--40">
                            <div class="col-lg-12">
                                <h5>
                                    Our Services
                                </h5>
                                <p class="disc">
                                    We utilize a structured and comprehensive approach to gather, analyze, and leverage the
                                    voice of your customers. Here's how our VoC Analysis service works:
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="{{ asset('assets/images/service/icon/09.svg') }}" alt=""
                                            class="icon">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">
                                            Focus group research
                                        </h6>
                                        <p class="disc">
                                            We help your company streamline innovation, allocate resources, &
                                            maximize its product portfolio.
                                        </p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-lg-6">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="{{ asset('assets/images/service/icon/10.svg') }}" alt=""
                                            class="icon">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">
                                            Online Quantitative Surveys
                                        </h6>
                                        <p class="disc">
                                            We leverage Agile methodology to enhance the planning &
                                            execution of business & product development.
                                        </p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-lg-6">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="{{ asset('assets/images/service/icon/11.svg') }}" alt=""
                                            class="icon">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">
                                            In-person/video UX feedback
                                        </h6>
                                        <p class="disc">
                                            We offer technology infrastructure or platform to support an organization's
                                            business
                                            goals and objectives.
                                        </p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-lg-6">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="{{ asset('assets/images/service/icon/12.svg') }}" alt=""
                                            class="icon">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">
                                            Social media analysis
                                        </h6>
                                        <p class="disc">
                                            We break down innovation boundaries, tap into external
                                            expertise, and access new ideas, technologies, and markets.
                                        </p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-lg-6">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="{{ asset('assets/images/service/icon/13.svg') }}" alt=""
                                            class="icon">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">
                                            Customer reviews analysis
                                        </h6>
                                        <p class="disc">
                                            We offer an overview of features & milestones, helping align
                                            stakeholders & guide development efforts.
                                        </p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                        </div>
                        <div class="service-detials-step-3 mt--70 mt_md--50">
                            <div class="row g-5 align-items-center">

                                <div class=" col-lg-12 col-md-12 col-sm-12 col-12 mb_md--20 mb_sm--20">
                                    <h5 class="title">
                                        How we help you solve Voice of the Customer challenges:
                                    </h5>
                                    <p class="disc">
                                        In today's customer-centric business landscape, listening to the voice of your
                                        customers is not optional—it's a strategic imperative. Here's why VoC analysis is
                                        crucial:
                                    </p>
                                    <div class="single-banifits">
                                        <i class="far fa-check-circle"></i>
                                        <span>
                                            Diagnose root causes of issues impacting revenues and/or customer satisfaction.
                                        </span>
                                    </div>
                                    <div class="single-banifits">
                                        <i class="far fa-check-circle"></i>
                                        <span>
                                            Measure the impact of customer experience initiatives such as product
                                            enhancements or new service processes.
                                        </span>
                                    </div>
                                    <div class="single-banifits">
                                        <i class="far fa-check-circle"></i>
                                        <span>
                                            Identify how to improve operational efficiency reducing impediments to customer
                                            adoption and optimal usage levels
                                        </span>
                                    </div>
                                    <div class="single-banifits">
                                        <i class="far fa-check-circle"></i>
                                        <span>
                                            Enhance your brand equity with an improved net promotor score
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="disc">
                            Unlock the power of your customers' voices with Vision & Execution's VoC Analysis service.
                            Contact us today to explore how we can help you gain valuable customer insights, enhance your
                            offerings, and build stronger, more meaningful relationships with your customers.
                        </p>
                    </div>

                </div>
                <!--rts blog wizered area -->
                <x-service-action />
                <!-- rts- blog wizered end area -->
            </div>
        </div>
    </div>
@endsection
