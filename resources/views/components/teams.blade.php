<div class="rts-team-area rts-section-gap bg-team">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="rts-title-area team text-center">
                    <p class="pre-title">Professionals Team</p>
                    <h2 class="title">Professionals Team</h2>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--0">
            <div class="swiper mySwiperh1_team">
                <div class="swiper-wrapper">
                    @foreach ($teams as $i => $team)
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="{{ route('teams.details', $team['slug']) }}">
                                        <img src="{{ asset($team['avatar']) }}" class="img-fluid"
                                            alt="Business_Team_single" />
                                        <div class="team-social">
                                            <div class="main">
                                                <i class="fal fa-plus"></i>
                                            </div>
                                            <div class="team-social-one">
                                                <i class="fab fa-youtube"></i>
                                                <i class="fab fa-twitter"></i>
                                                <i class="fab fa-instagram"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-details">
                                    <a href="{{ route('teams.details', $team['slug']) }}">
                                        <h5 class="title">{{ $team['full_name'] }}</h5>
                                    </a>
                                    <p>{{ $team['role'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
