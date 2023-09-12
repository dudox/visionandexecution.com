@extends('layouts.app')

@section('content')
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Team Details</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('welcome') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Our Teams</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- rts-team details area Start-->
    <div class="rts-team-details rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="details-thumb">
                        <img class="img-fluid" src="{{ asset($details['avatar']) }}" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 pl--35 pl_sm--15">
                    <div class="details-right-inner">
                        <div class="title-area">
                            <span class="pre-title">
                                {{ $details['role'] }}
                            </span>
                            <h3 class="title">{{ $details['full_name'] }}</h3>
                        </div>
                        <p class="disc">
                            {!! $details['biography'] !!}
                        </p>

                        <a href="{{ route('contact-us') }}" class="rts-btn btn-primary"> Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <x-service-action /> --}}
@endsection
