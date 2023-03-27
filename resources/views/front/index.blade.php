@extends('front.master')

@section('content')
 <!-- Main Sllider Start -->
 <section class="main-slider">
    <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel"
        data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": true, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

        <div class="item main-slider__slide-1">
            <div class="main-slider__bg"
                style="background-image: url('{{asset('uploads/slider/index-1.jpeg')}}');">
            </div><!-- /.slider-one__bg -->
            <div class="main-slider__shape-1">
                <img src="{{asset('theme/assets/images/shapes/main-slider-shape-1.png')}}" alt="">
            </div>
            <div class="main-slider__shape-2">
                <img src="{{asset('theme/assets/images/shapes/main-slider-shape-2.png')}}" alt="">
            </div>
            <div class="main-slider__shape-3">
                <img src="{{asset('theme/assets/images/shapes/main-slider-shape-3.png')}}" alt="">
            </div>
            <div class="main-slider__shape-4">
                <img src="{{asset('theme/assets/images/shapes/main-slider-shape-3.png')}}" alt="">
            </div>
            <div class="main-slider__meta-box">
                <ul class="main-slider__meta list-unstyled">
                    <li>
                        <div class="icon">
                            <span class="fas fa-calendar"></span>
                        </div>
                        <div class="text">
                            <p>Date: {{date('D-M-Y')}}</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="fas fa-clock"></span>
                        </div>
                        <div class="text">
                            <p>Time: {{date('H:i:s')}}</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="container">
                <div class="main-slider__content">
                    {{-- <p class="main-slider__sub-title">2 Millions Visitors Every Year</p> --}}
                    <h2 class="main-slider__title">Kenya Veterans
                        <br> For Peace.</h2>
                    <div class="main-slider__btn-box">
                        <a href="about#" class="main-slider__btn thm-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="item main-slider__slide-1">
            <div class="main-slider__bg"
                style="background-image: url('{{asset('uploads/slider/index-3.jpeg')}}');">
            </div><!-- /.slider-one__bg -->
            <div class="main-slider__shape-1">
                <img src="{{asset('theme/assets/images/shapes/main-slider-shape-1.png')}}" alt="">
            </div>
            <div class="main-slider__shape-2">
                <img src="{{asset('theme/assets/images/shapes/main-slider-shape-2.png')}}" alt="">
            </div>
            <div class="main-slider__shape-3">
                <img src="{{asset('theme/assets/images/shapes/main-slider-shape-3.png')}}" alt="">
            </div>
            <div class="main-slider__shape-4">
                <img src="{{asset('theme/assets/images/shapes/main-slider-shape-3.png')}}" alt="">
            </div>
            <div class="main-slider__meta-box">
                <ul class="main-slider__meta list-unstyled">
                    <li>
                        <div class="icon">
                            <span class="fas fa-calendar"></span>
                        </div>
                        <div class="text">
                            <p>Date: {{date('D-M-Y')}}</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="fas fa-clock"></span>
                        </div>
                        <div class="text">
                            <p>Time: {{date('H:i:s')}}</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="container">
                <div class="main-slider__content">
                    {{-- <p class="main-slider__sub-title">2 Millions Visitors Every Year</p> --}}
                    <h2 class="main-slider__title">Kenya Veterans
                        <br> For Peace.</h2>
                    <div class="main-slider__btn-box">
                        <a href="about#" class="main-slider__btn thm-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="item main-slider__slide-1">
            <div class="main-slider__bg"
                style="background-image: url('{{asset('uploads/slider/index-2.jpeg')}}');">
            </div><!-- /.slider-one__bg -->
            <div class="main-slider__shape-1">
                <img src="{{asset('theme/assets/images/shapes/main-slider-shape-1.png')}}" alt="">
            </div>
            <div class="main-slider__shape-2">
                <img src="{{asset('theme/assets/images/shapes/main-slider-shape-2.png')}}" alt="">
            </div>
            <div class="main-slider__shape-3">
                <img src="{{asset('theme/assets/images/shapes/main-slider-shape-3.png')}}" alt="">
            </div>
            <div class="main-slider__shape-4">
                <img src="{{asset('theme/assets/images/shapes/main-slider-shape-3.png')}}" alt="">
            </div>
            <div class="main-slider__meta-box">
                <ul class="main-slider__meta list-unstyled">
                    <li>
                        <div class="icon">
                            <span class="fas fa-calendar"></span>
                        </div>
                        <div class="text">
                            <p>Date: {{date('D-M-Y')}}</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="fas fa-clock"></span>
                        </div>
                        <div class="text">
                            <p>Time: {{date('H:i:s')}}</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="container">
                <div class="main-slider__content">
                    {{-- <p class="main-slider__sub-title">2 Millions Visitors Every Year</p> --}}
                    <h2 class="main-slider__title">Kenya Veterans
                        <br> For Peace.</h2>
                    <div class="main-slider__btn-box">
                        <a href="about#" class="main-slider__btn thm-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<!-- Main Sllider Start -->


 <!--About Two Start-->
 <section class="about-two">
    <div class="about-two__shape-3 float-bob-x"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-one__img">
                    <br><br>
                    <img style="border-radius:10px;" src="{{asset('uploads/images/SFax6fl6duKICC_nairobi_kenya.jpg')}}" alt="Kenya Veterans For Peace">
                </div>
                {{-- <div class="about-two__left">
                    <div class="about-two__img-box">
                        <div class="about-two__img">
                            <img src="{{asset('uploads/images/index.jpeg')}}" alt="">
                        </div>
                        <div class="about-two__img-2">
                            <img src="{{asset('theme/assets/images/resources/about-two-img-2.jpg')}}" alt="">
                        </div>
                        <div class="about-two__shape-1"></div>
                        <div class="about-two__shape-2 img-bounce">
                            <img src="{{asset('theme/assets/images/shapes/about-two-shape-1.png')}}" alt="">
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="col-xl-6">
                <div class="about-two__right">
                    <div class="section-title text-left">
                        <div class="section-title__icon">
                            <span class="fa fa-star"></span>
                        </div>
                        <span class="section-title__tagline">Welcome to KVP</span>
                        <h2 class="section-title__title">Peace  • Security  • Development</h2>
                    </div>
                    <p class="about-two__text-1">AMANI KWA WOTE</p>
                    <p class="about-two__text-2">Kenya Veterans for Peace (KVP) is a Kenya Defense Forces (KDF) Military Veterans
                        Organization Registered In Kenya Under The Society Acts Cap 108 Of The Laws Of Kenya
                        With Headquarters At Nairobi; Nyayo House. The Organization Draws Membership From
                        The Retired Military Personnel In All Sister Services Of Kenya Defense Forces.
                        <strong>
                            We Have
                                Played A Major Role In United Nations (UN)/Africa Union (AU) Peace Keeping, Peace
                                Building, Security Operations, Anti-Human Trafficking Operations, Climate Change And
                                Development Programs In Various Areas Across The Country, Regionally And Globally In
                                And Out Of Active Service With Tangible Outcomes Of Restoring Peace, Security,
                                Restoring Human Dignity, Empowering Communities And Developmental Agenda For A
                                Prosperous Kenya And The World At Large In Line With Millennium Development
                                Goals(MDGs) And Sustainable Development Goals(SDGs).
                        </strong>
                    </p>
                    {{-- <div class="about-two__progress">
                        <div class="about-two__progress-single">
                            <h4 class="about-two__progress-title">Consultation</h4>
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="90%">
                                    <div class="count-text">90%</div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <ul class="about-two__points list-unstyled">
                        <li>
                            <div class="about-two__points-title-box">
                                <div class="icon">
                                    <span class="fa fa-arrow-right"></span>
                                </div>
                                <div class="title">
                                    <h3>Goverment agencies</h3>
                                </div>
                            </div>
                            <p class="about-two__points-text">Lorem ipsum dolor sit amet not is consectetur
                                notted.</p>
                        </li>
                        <li>
                            <div class="about-two__points-title-box">
                                <div class="icon">
                                    <span class="fa fa-arrow-right"></span>
                                </div>
                                <div class="title">
                                    <h3>Just explore city</h3>
                                </div>
                            </div>
                            <p class="about-two__points-text">Lorem ipsum dolor sit amet not is consectetur
                                notted.</p>
                        </li>
                    </ul> --}}

                    <div class="event-two__btn-box">
                        <a href="{{url('/')}}/who-we-are" class="event-two__btns thm-btn">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Two End-->

<section class="testimonial-three">
    <div class="testimonial-three__bg" style="background-image: url({{asset('theme/assets/images/backgrounds/fd.jpg')}});"></div>
    <div class="containers" style="padding:10px">
        <div class="row text-center">
            <div class="col-xl-3">
                <div class="testimonial-three__left">
                    <div class="section-title text-left">
                        <h5 style="color:#dd3333; font-weight:900">OUR VISION</h5>
                    </div>
                    <p class="testimonial-three-left__text">
                        Engage And Involve The Retired Members Of The Kenya Defense Forces In Out Of Service,
                        To Active Service To The Nation.
                    </p>
                </div>
            </div>



            <div class="col-xl-6">
                <div class="testimonial-three__left">
                    <div class="section-title text-left">
                        <h5 style="color:#dd3333; font-weight:900">Mission</h5>
                    </div>
                    <p class="testimonial-three-left__text">
                        Support And Compliment The Government Using Skills And Expertise Of The Members Of The Kenya Defense Forces Military Veterans In Peace Building, Security, Anti Human Trafficking, Climate Change And Development Through Undercover Security Services, Anti- Terrorism, Conflict And Disaster Management, Reduction Of Small Arms Through Non- Violence Process And Community Policing For Peaceful Coexistence Across, Within And Without Kenya Boarder, Contact Anti-Human Trafficking, Counter-Human Trafficking, And Intelligence Human Trafficking Operations To Restore Human Dignity And Participate In Development Programs In Retirement,
                    </p>
                </div>
            </div>

            <div class="col-xl-3">
                <div class="testimonial-three__left">
                    <div class="section-title text-left">
                        <h5 style="color:#dd3333; font-weight:900">Our Goals</h5>
                    </div>
                    <p class="testimonial-three-left__text">
                        Have A Peaceful, United, Reconciled And Prosperous Kenya, Region And The World To Live
                        In And Achieve Personal, Collective, National And Global Goals, Mandates, Vision And
                        Missions For Development In Retirement.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="news-one">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__icon">
                <span class="fa fa-star"></span>
            </div>
            <span class="section-title__tagline">News & Press Releases</span>
            <h2 class="section-title__title">Latest news &amp; articles
                </h2>
        </div>
        <?php
            $Blog = DB::table('blogs')->limit('3')->get();
        ?>
        <div class="row">
            @foreach ($Blog as $blog)
            <!--News One Single Start-->
            <div class="col-xl-6 col-lg-6 wow fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                <div class="news-one__single">
                    <div class="news-one__img-box">
                        <div class="news-one__img">
                            <img style="min-height:428px" src="{{url('/')}}/uploads/blogs/{{$blog->image}}" alt="">
                        </div>
                        <div class="news-one__date">
                            <p>{{date('d',strtotime($blog->created_at))}} <br> {{date('M',strtotime($blog->created_at))}}</p>
                        </div>
                    </div>
                    <div class="news-one__content">
                        <div class="news-one__user-and-meta">
                            <div class="news-one__user">
                                <div class="news-one__user-img">
                                    <img src="assets/images/blog/news-one-user-img.jpg" alt="">
                                </div>
                                <div class="news-one__user-text">
                                    <p>Source {{$blog->source}}</p>
                                </div>
                            </div>
                            <div class="news-one__meta">
                                <div class="icon">
                                    <span class="fas fa-comments"></span>
                                </div>
                                <div class="text">
                                    <p>2 Comments</p>
                                </div>
                            </div>
                        </div>
                        <h3 class="news-one__title"><a target="new" href="{{$blog->link}}">{{$blog->title}}</a>
                        </h3>
                        <div class="news-one__btn">
                            <a target="new" href="{{$blog->link}}">Read More<i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--News One Single End-->
            @endforeach
        </div>
    </div>
</section>
@endsection
