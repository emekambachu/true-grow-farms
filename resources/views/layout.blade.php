<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') || True Grow Farms</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}">
    <meta name="description" content="True Grow Farms">

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&amp;family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/agrikon-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nouislider.pips.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>
<body>
<div class="preloader">
    <img class="preloader__image" width="55" src="{{ asset('assets/images/loader.png') }}" alt="">
</div>
<div class="page-wrapper">
    <header class="main-header">
        <div class="topbar">
            <div class="container">
                <div class="topbar__left">
                    <div class="topbar__social">
                        <a href="#" class="fab fa-facebook-square"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-pinterest-p"></a>
                        <a href="#" class="fab fa-instagram"></a>
                    </div>
                    <p>Welcome to True Grow Farms</p>
                </div>
                <div class="topbar__right">
                    <a href="mailto:info@truegrowfarms.com"><i class="agrikon-icon-email"></i><span>info@truegrowfarms.com</span></a>
                    <a href="#"><i class="agrikon-icon-clock"></i>Mon - Sat 8:00 - 6:30, Sunday - CLOSED</a>
                </div>
            </div>
        </div>
        <nav class="main-menu">
            <div class="container">
                <div class="logo-box">
                    <a href="{{ url('/') }}" aria-label="logo image">
                        <img src="{{ asset('assets/images/true_grow_farms_logo.png') }}" width="153" alt=""></a>
                    <span class="fa fa-bars mobile-nav__toggler"></span>
                </div>
                <ul class="main-menu__list">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('about') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ url('gallery') }}">Gallery</a>
                    </li>
                    <li>
                        <a href="{{ url('contact') }}">Contact</a>
                    </li>
                </ul>

                <div class="main-header__info">
                    <a href="#" class="search-toggler main-header__search-btn"><i class="agrikon-icon-magnifying-glass"></i></a>
                    <a class="main-header__cart-btn" href="#"><i class="agrikon-icon-shopping-cart"></i></a>
                    <a href="tel:92-666-888-0000" class="main-header__info-phone">
                        <i class="agrikon-icon-phone-call"></i>
                        <span class="main-header__info-phone-content">
<span class="main-header__info-phone-text">Call Anytime</span>
<span class="main-header__info-phone-title">682 214 3661</span>
</span>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div>
    </div>

    @yield('content')

    <footer class="site-footer">
{{--        <img src="{{ asset('assets/images/true_grow_farms_logo.png') }}" class="site-footer__shape-1" alt="">--}}
{{--        <img src="{{ asset('assets/images/true_grow_farms_logo.png') }}" class="site-footer__shape-2" alt="">--}}
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-widget">
                        <a href="" class="footer-widget__Logo">
                            <img src="{{ asset('assets/images/true_grow_farms_logo.png') }}" width="153" alt="">
                        </a>
{{--                        <p>There are many variations of passages of lorem ipsum available, but the majority suffered.--}}
{{--                        </p>--}}
                        <form action="#" data-url="YOUR_MAILCHIMP_URL" class="mc-form">
                            <input type="email" name="EMAIL" placeholder="Email Address">
                            <button type="submit"><i class="agrikon-icon-right-arrow"></i></button>
                        </form>
                        <div class="mc-form__response"></div>
                        <div class="footer__social">
                            <a href="#" class="fab fa-facebook-square"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
                    <div class="footer-widget footer-widget__links-widget">
                        <h3 class="footer-widget__title">Links</h3>
                        <ul class="list-unstyled footer-widget__links">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('about') }}">About us</a></li>
                            <li><a href="{{ url('gallery') }}">Gallery</a></li>
                            <li><a href="{{ url('contact') }}">Contacts</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-widget">
                        <h3 class="footer-widget__title">News</h3>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                    <h3 class="footer-widget__title">Contact</h3>
                    <ul class="list-unstyled footer-widget__contact">
                        <li>
                            <i class="agrikon-icon-telephone"></i>
                            <a href="tel:682 214 3661">682 214 3661</a>
                        </li>
                        <li>
                            <i class="agrikon-icon-email"></i>
                            <a href="mailto:info@truegrowfarms.com">info@truegrowfarms.com</a>
                        </li>
                        <li>
                            <i class="agrikon-icon-pin"></i>
                            <a href="#">Zurich, Switzerland</a>
                            <a href="#">New York, United States</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="bottom-footer">
        <div class="container">
            <p>© Copyright {{ date('Y') }} by True Grow Farms</p>
            <div class="bottom-footer__links">
                <a href="#">Terms & Conditions</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Sitemap</a>
            </div>
        </div>
    </div>
</div>
<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>

    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="far fa-times"></i></span>
        <div class="logo-box">
            <a href="{{ url('/') }}" aria-label="logo image">
                <img src="{{ asset('assets/images/true_grow_farms_logo.png') }}" width="155" alt="" /></a>
        </div>

        <div class="mobile-nav__container"></div>

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="agrikon-icon-email"></i>
                <a href="mailto:info@truegrowfarms.com">info@truegrowfarms.com</a>
            </li>
            <li>
                <i class="agrikon-icon-telephone"></i>
                <a href="tel:682 214 3661">682 214 3661</a>
            </li>
        </ul>
        <div class="mobile-nav__top">
            <div class="mobile-nav__language">
                <img src="{{ asset('assets/images/resources/flag-1-1.jpg') }}" alt="">
                <label class="sr-only" for="language-select">select language</label>

                <select class="selectpicker" id="language-select">
                    <option value="english">English</option>
                    <option value="arabic">Arabic</option>
                </select>
            </div>
            <div class="mobile-nav__social">
                <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

</div>

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>

    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label>
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="fa fa-search"></i>
            </button>
        </form>
    </div>

</div>

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
<script src="{{ asset('assets/js/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>
<script src="{{ asset('assets/js/wNumb.min.js') }}"></script>
<script src="{{ asset('assets/js/nouislider.min.js') }}"></script>

<script src="{{ asset('assets/js/theme.js') }}"></script>
<script defer src="../../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"67150b2c2fde5d07","version":"2021.6.0","r":1,"token":"72b2ec455a104aa0b3ca4230f1da2518","si":10}'></script>
</body>

</html>
