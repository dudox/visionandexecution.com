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
                        <a href="#" class="active">Innovation Management</a>
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
                            <img src="{{ asset('assets/images/people-with-lightbulb-icon_53876-13664.avif') }}"
                                alt="business-area">
                        </div>
                        <h4 class="title">Innovation Management</h4>
                        <p class="disc">
                            Infuse new life into your current product portfolio and discover new innovation resources.
                            Vision & Execution connects your product direction with your corporate strategy and customer
                            demand. We help you prioritize resources, balance risk versus reward, and identify opportunities
                            for streamlining and reducing portfolio complexity. We formulate strategy to help you maximize
                            revenue and profitability.
                        </p>
                        <p class="disc">
                            Innovation is the lifeblood of forward-thinking businesses, driving competitiveness and
                            long-term sustainability. At Vision & Execution, we offer a dedicated Innovation Management
                            service designed to help you harness the power of innovation to achieve your strategic
                            objectives. Whether you're a startup looking to disrupt the market or an established
                            organization seeking to stay ahead, our service can guide you on your innovation journey.
                        </p>
                        <div class="row g-5 mt--30 mb--40">
                            <div class="col-lg-12">
                                <h5>
                                    Our Services
                                </h5>
                                <p class="disc">
                                    Our dedicated team of innovation experts collaborates closely with your organization to
                                    foster a culture of innovation and drive meaningful outcomes. Here's how our Innovation
                                    Management service works:
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
                                            Product Portfolio Optimization
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
                                            Business & Product Planning
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
                                            Technology Platform Planning
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
                                            Open Innovation Programs
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
                                            Platform & Feature Roadmaps
                                        </h6>
                                        <p class="disc">
                                            We offer an overview of features & milestones, helping align
                                            stakeholders & guide development efforts.
                                        </p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-lg-6">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="{{ asset('assets/images/service/icon/14.svg') }}" alt=""
                                            class="icon">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">
                                            Line/Family Extensions
                                        </h6>
                                        <p class="disc">

                                            We expands a company's existing range of products within a specific
                                            category or product line.
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
                                        How we help you solve Innovation Management challenges:
                                    </h5>
                                    <p class="disc">
                                        In today's rapidly changing business landscape, innovation is not a luxury—it's a
                                        necessity. Here's why effective Innovation Management is crucial for businesses:
                                    </p>
                                    <div class="single-banifits">
                                        <i class="far fa-check-circle"></i>
                                        <span>
                                            Develop strategies to rejuvenate product revenues through enhancements or
                                            adjacencies
                                        </span>
                                    </div>
                                    <div class="single-banifits">
                                        <i class="far fa-check-circle"></i>
                                        <span>
                                            Plan product portfolio for transition to next generation products
                                        </span>
                                    </div>
                                    <div class="single-banifits">
                                        <i class="far fa-check-circle"></i>
                                        <span>
                                            Identify organizational change and/or process improvements to enhance product
                                            development processes
                                        </span>
                                    </div>
                                    <div class="single-banifits">
                                        <i class="far fa-check-circle"></i>
                                        <span>
                                            Leverage external innovation sources through labs, crowdsourcing and other open
                                            innovation resources
                                        </span>
                                    </div>
                                    <div class="single-banifits">
                                        <i class="far fa-check-circle"></i>
                                        <span>
                                            Expand your agile process to product management and business planning
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="disc">
                            Embrace innovation as a catalyst for your organization's success with Vision & Execution's
                            Innovation Management service. Contact us today to explore how we can help you unlock the full
                            potential of innovation and position your business for long-term prosperity.
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
