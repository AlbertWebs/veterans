@extends('front.master')

@section('content')


        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url('{{url('/')}}/uploads/images/index-2.jpeg')">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Talk to us</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><span>/</span></li>
                        <li>Talk to us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->




        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="contact-page__top">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__left">
                                <div class="contact-page__img-box">
                                    <div class="contact-page__img">
                                        <img src="{{url('uploads/images/index-3.jpeg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__right">
                                <div class="section-title text-left">
                                    <div class="section-title__icon">
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <span class="section-title__tagline">KVP</span>
                                    <h2 class="section-title__title">Get in touch now</h2>
                                </div>
                                <p class="contact-page__text"><q>The More We Sweat In Peace, The Less We Bleed In War</q></p>
                                <ul class="list-unstyled contact-page__contact-list">
                                    {{-- <li>
                                        <div class="icon">
                                            <span class="icon-telephone"></span>
                                        </div>
                                        <div class="content">
                                            <p>Have any Question?</p>
                                            <h4><a href="tel:+254 720882578"><span>Mobile</span> +254 720882578</a></h4>
                                        </div>
                                    </li> --}}
                                    <li>
                                        <div class="icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <div class="content">
                                            <p>Write Email</p>
                                            <h4><a href="mailto:hello@veterans.or.ke">hello@veterans.or.ke</a></h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <div class="content">
                                            <p>Write Email</p>
                                            <h4><a href="mailto:info@veterans.or.ke">info@veterans.or.ke</a></h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pin"></span>
                                        </div>
                                        <div class="content">
                                            <p>Location</p>
                                            <h4>Nyayo House, 6th Floor Office 612.  Nairobi, Kenya</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-page__bottom">
                    <div class="contact-page__bottom-left">
                        <div class="contact-page__bottom-icon">
                            <span class="icon-clock"></span>
                        </div>
                        <ul class="contact-page__bottom-content list-unstyled">
                            <li>
                                <span>Mon - Friday</span>
                                <p>9:00 am to 6:45 pm</p>
                            </li>
                            <li>
                                <span>Saturday</span>
                                <p>10:30 am to 4:35 pm</p>
                            </li>
                        </ul>
                    </div>
                    <div class="contact-page__bottom-right">
                        <div class="contact-page__social">
                            <div class="contact-page__social-shape-1 float-bob-x">
                                <img src="assets/images/shapes/contact-page-shape-1.png" alt="">
                            </div>
                            <span>Social Media</span>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

        <!--Google Map Start-->
        <section class="google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.247923747136!2d36.8181721!3d-1.286893!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f114591f0a8f5%3A0xf10d692eb7105e9a!2sKenya%20Veterans%20for%20Peace%20(KVP)!5e0!3m2!1sen!2ske!4v1679390572280!5m2!1sen!2ske"
                class="google-map__one" allowfullscreen></iframe>

        </section>
        <!--Google Map End-->


@endsection


