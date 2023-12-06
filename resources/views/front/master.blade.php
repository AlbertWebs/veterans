<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Kenya Veterans For Peace || Welcome To Kenya Veterans For Peace </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('theme/assets/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('theme/assets/images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('theme/assets/images/favicons/favicon-16x16.png')}}" />
    <link rel="manifest" href="{{asset('theme/assets/images/favicons/site.webmanifest')}}" />
    <meta name="description" content=" Kenya Veterans For Peace || Welcome To Kenya Veterans For Peace " />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('theme/assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/govity-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/vegas/vegas.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/timepicker/timePicker.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/nice-select/nice-select.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/govity.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/css/govity-responsive.css')}}" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        <header class="main-header">
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__logo">
                            <a href="{{url('/')}}"><img src="{{asset('uploads/logo/logo-trimmed.png')}}" alt=""></a>
                        </div>
                        <div class="main-menu__top">
                            <div class="main-menu__top-inner">
                                <div class="main-menu__top-left">
                                    <div class="main-menu__social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="main-menu__top-right">
                                    <ul class="list-unstyled main-menu__contact-list">
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="text">
                                                <p><a href="mailto:hello@veterans.or.ke">hello@veterans.or.ke</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-clock"></i>
                                            </div>
                                            <div class="text">
                                                <p>    Peace <strong style="font-weight:900"> • </strong> Security <strong> • </strong> Development  </p>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled main-menu__top-menu">
                                        <li><a href="{{url('/')}}/who-we-are/#mission">Mission</a></li>
                                        <li><a href="{{url('/')}}/who-we-are/#vision">Vision</a></li>
                                        <li><a href="{{url('/')}}/who-we-are/#goals">Goals</a></li>
                                        <li><a href="{{url('/')}}/our-history">History</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="main-menu__bottom">
                            <div class="main-menu__bottom-inner">
                                <div class="main-menu__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li>
                                            <a href="{{url('/')}}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/')}}/who-we-are">Who we are</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/')}}/who-we-are/#executives">Leadership</a>
                                        </li>
                                        <li>
                                            <a href="https://mod.go.ke/download/the-military-veterans-act-2022/">Military Veterans ACT</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/')}}/regions">Regions</a>
                                        </li>

                                        <li>
                                            <a href="{{url('/')}}/contact-us">Contact</a>
                                        </li>

                                        <li class="hide-desktop">
                                            <a  href="{{url('/')}}/veterans-register"><span class="fa fa-user"><span> Membership Area </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="main-menu__right">
                                    <div class="main-menu__call">
                                        <div class="main-menu__call-icon">
                                            <span class="icon-telephone"></span>
                                        </div>
                                        <div class="main-menu__call-content">
                                            <p class="main-menu__call-sub-title">Call Anytime</p>
                                            <h5 class="main-menu__call-number"><a href="tel:+254 720882578">+254 720882578</a></h5>
                                        </div>
                                    </div>
                                    <div class="main-menu__search-box">
                                        <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                    </div>
                                    <div class="language-switcher">
                                        <select class="selectpicker">
                                            <option
                                                data-content="<span class='lang-en'><img src='assets/images/lang-flag/en.png' alt=''>English</span>"
                                                value="en" selected>English</option>



                                        </select>

                                    </div>
                                    @if(Auth::User())
                                    <div class="main-menu__btn-box">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" class="thm-btn main-menu__btn">Logout</a>
                                    </div>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    @else
                                    <div class="main-menu__btn-box">
                                        <a href="{{url('/')}}/veterans-register" class="thm-btn main-menu__btn">Members Area</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        @yield('content')


        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer__img">
                {{-- <img width="100" src="{{url('/')}}/uploads/logo/logo-trimmed.png" alt=""> --}}
            </div>
            <div class="container">
                <div class="site-footer__top">
                    <div class="footer-widget__logo">
                        <a href="#"><img width="100" src="{{url('/')}}/uploads/logo/logo-trimmed.png" alt=""></a>
                    </div>
                    <div class="footer-widget__subscribe-box">
                        <div class="footer-widget__subscribe-text">
                            <p>Subscribe to Newsletter</p>
                        </div>
                        <form class="footer-widget__email-box mc-form" data-url="#">
                            <div class="footer-widget__email-input-box">
                                <input type="email" placeholder="Email Address" name="EMAIL">
                            </div>
                            <button type="submit" class="footer-widget__subscribe-btn thm-btn">Subscribe</button>
                        </form>
                        <div class="mc-form__response"></div><!-- /.mc-form__response -->
                    </div>
                </div>
                <div class="site-footer__middle">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__Contact">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Contact</h3>
                                </div>
                                <p class="footer-widget__Contact-text">Nyayo House, 6th Floor Office 612.  Nairobi, Kenya
                                </p>
                                <ul class="footer-widget__Contact-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:needhelp@company.com">hello@veterans.or.ke</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-phone-square"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="tel:+254 720882578">+254 720882578</a></p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="site-footer__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__link">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Quick Links</h3>
                                </div>
                                <ul class="footer-widget__link-list list-unstyled">
                                    <li><a href="{{url('/')}}/who-we-are">About</a></li>
                                    <li><a href="{{url('/')}}/who-we-are/#executives">Leadership</a></li>
                                    <li><a href="{{url('/')}}/membership">Membership</a></li>
                                    <li><a href="{{url('/')}}/regions">Regions</a></li>
                                    <li><a href="{{url('/')}}/contact-us">Contact</a></li>

                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__link">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Related Links Links</h3>
                                </div>
                                <ul class="footer-widget__link-list list-unstyled">
                                    <li><a href="https://www.un.org/en/">United Nations</a></li>
                                    <li><a href="https://www.easfcom.org/index.php/en/">Eastern Africa Standby Force</a></li>
                                    <li><a href="https://mwak.co.ke/">Military Wives Association of Kenya (MWAK)</a></li>
                                    <li><a href="https://au.int/">African Union</a></li>
                                    <li><a href="https://igad.int/">IGAD</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__explore">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Explore</h3>
                                </div>
                                <ul class="footer-widget__link-list list-unstyled">
                                    <li><a href="{{url('/')}}/privacy-policy">Privacy Policy</a></li>
                                    <li><a href="{{url('/')}}/terms-and-conditions">Terms and Conditions</a></li>
                                    <li><a href="{{url('/')}}/copyright">Copyright Statment</a></li>
                                    <li><a href="https://mod.go.ke/">Ministry of Defense</a></li>
                                    <li><a href="{{url('/')}}/press-releases">Press Releases</a></li>
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                            <div class="footer-widget__column footer-widget__gallery">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Gallery</h3>
                                </div>
                                <ul class="footer-widget__gallery-list list-unstyled clearfix">
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="{{asset('theme/assets/images/gallery/footer-widget-gallery-img-1.jpg')}}" alt="">
                                            <a href="{{asset('theme/assets/images/gallery/footer-widget-gallery-img-1.jpg')}}"
                                                class="img-popup"><span class="fab fa-instagram"></span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="{{asset('theme/assets/images/gallery/footer-widget-gallery-img-1.jpg')}}" alt="">
                                            <a href="{{asset('theme/assets/images/gallery/footer-widget-gallery-img-1.jpg')}}"
                                                class="img-popup"><span class="fab fa-instagram"></span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="{{asset('theme/assets/images/gallery/footer-widget-gallery-img-1.jpg')}}" alt="">
                                            <a href="{{asset('theme/assets/images/gallery/footer-widget-gallery-img-1.jpg')}}"
                                                class="img-popup"><span class="fab fa-instagram"></span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="{{asset('theme/assets/images/gallery/footer-widget-gallery-img-1.jpg')}}" alt="">
                                            <a href="{{asset('theme/assets/images/gallery/footer-widget-gallery-img-1.jpg')}}"
                                                class="img-popup"><span class="fab fa-instagram"></span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="{{asset('theme/assets/images/gallery/footer-widget-gallery-img-1.jpg')}}" alt="">
                                            <a href="{{asset('theme/assets/images/gallery/footer-widget-gallery-img-1.jpg')}}"
                                                class="img-popup"><span class="fab fa-instagram"></span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="{{asset('theme/assets/images/gallery/footer-widget-gallery-img-1.jpg')}}" alt="">
                                            <a href="{{asset('theme/assets/images/gallery/footer-widget-gallery-img-1.jpg')}}"
                                                class="img-popup"><span class="fab fa-instagram"></span></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© Copyright {{date('Y')}} by <a href="#">Kenya Veterans For Peace</a> | All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index#" aria-label="logo image"><img src="{{asset('uploads/logo/logo-trimmed.png')}}" width="94"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:hello@veterans.or.ke">hello@veterans.or.ke</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+254 720882578">+254 720882578</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>


    <script src="{{asset('theme/assets/vendors/jquery/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/jarallax/jarallax.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/odometer/odometer.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/swiper/swiper.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/wnumb/wNumb.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/wow/wow.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/isotope/isotope.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/countdown/countdown.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/vegas/vegas.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/timepicker/timePicker.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/circleType/jquery.circleType.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/circleType/jquery.lettering.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/nice-select/jquery.nice-select.min.js')}}"></script>




    <!-- template js -->
    <script src="{{asset('theme/assets/js/govity.js')}}"></script>

    <script>
        $(function() {
            $(document).on("change", ".uploadFile", function() {
                var uploadFile = $(this);
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

                if (/^image/.test(files[0].type)) { // only image file
                    var reader = new FileReader(); // instance of the FileReader
                    reader.readAsDataURL(files[0]); // read the local file

                    reader.onloadend = function() { // set image data as background of div
                        //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                        uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url(" + this.result + ")");
                    }
                }

            });
        });
    </script>
</body>


</html>
