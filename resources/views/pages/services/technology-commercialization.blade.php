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
                        <a href="#" class="active">Technology Commercialization</a>
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
                            <img src="{{ asset('assets/images/service/business-people-working-using-technology-connect-with-others.jpg') }}"
                                alt="business-area">
                        </div>
                        <h4 class="title">Technology Commercialization</h4>
                        <p class="disc">
                            Align your innovation with the greatest market potential to make inspired business choices.
                            Vision & Execution identifies what drives customer purchase behavior. This arms you with the
                            knowledge to make your scientific discovery or newly envisioned product succeed in the
                            marketplace. We work with you to create a sustainable technology roadmap aligned with your
                            vision to establish your company and grow market share.



                        </p>
                        <p class="disc">
                            Turning innovative ideas into profitable products or services requires a strategic and
                            comprehensive approach. Our team of seasoned experts will work closely with you throughout every
                            stage of the technology commercialization process, ensuring that your innovation reaches its
                            full potential. Here's how we can assist you:
                        </p>
                        <div class="row g-5 mt--30 mb--40">
                            <div class="col-lg-12">
                                <h5>
                                    Our Services
                                </h5>
                                <p class="disc">
                                    Our team of experts will conduct a comprehensive evaluation of your readiness for
                                    commercialization. The assessment process includes the following key steps:


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
                                            Market Validation
                                        </h6>
                                        <p class="disc">
                                            We ensure your business investments are aligned with promising market trends and
                                            customer needs.
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
                                            Business Plan Audits
                                        </h6>
                                        <p class="disc">
                                            We ensure periodically review & assess your
                                            plan's relevance, & alignment with your objectives.
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
                                            Go-to-Market Plans
                                        </h6>
                                        <p class="disc">
                                            Our Go-to-Market (GTM) Plans ensures that your product reaches the
                                            right audience through the right channels.
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
                                            Readiness Assessment
                                        </h6>
                                        <p class="disc">
                                            Bringing an service or product to market is a significant
                                            undertaking that requires preparation & planning.
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
                                            GTM Program Execution
                                        </h6>
                                        <p class="disc">
                                            Our expertise and resources ensure your product reaches its target audience
                                            effectively and efficiently.
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
                                        How we help you solve Technology Commercialization challenges:
                                    </h5>
                                    <p class="disc">
                                        Bringing a technological innovation to market is a complex and multifaceted process
                                        that comes with its unique set of challenges. At Vision & Execution, we understand
                                        these challenges and are dedicated to guiding you through each stage of technology
                                        commercialization. Here's how our expertise and services can help you overcome these
                                        obstacles:
                                    </p>
                                    <div class="single-banifits">
                                        <i class="far fa-check-circle"></i>
                                        <span>
                                            Ensure your target market is large enough to justify pursuing
                                        </span>
                                    </div>
                                    <div class="single-banifits">
                                        <i class="far fa-check-circle"></i>
                                        <span>
                                            Identify real, often unstated, customer needs your technology can
                                            address
                                        </span>
                                    </div>
                                    <div class="single-banifits">
                                        <i class="far fa-check-circle"></i>
                                        <span>
                                            Determine the solutions customers want and at what price points
                                        </span>
                                    </div>
                                    <div class="single-banifits">
                                        <i class="far fa-check-circle"></i>
                                        <span>
                                            Design products that are easy to sell and support
                                        </span>
                                    </div>
                                    <div class="single-banifits">
                                        <i class="far fa-check-circle"></i>
                                        <span>
                                            Identify the optimal organization for launching your business
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="disc">
                            By partnering with {{ env('APP_NAME') }}, you gain a dedicated team of experts who are committed
                            to helping you navigate the complexities of technology commercialization. Our comprehensive
                            approach and tailored solutions ensure that you are well-equipped to bring your innovation to
                            market successfully. Contact us today to discuss how we can collaborate on your technology
                            commercialization journey.





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
