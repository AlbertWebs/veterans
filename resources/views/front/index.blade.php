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



    </div>
</section>
<!-- Main Sllider Start -->
@endsection
