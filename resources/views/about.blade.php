@extends('layout')

@section('title')
    About
@endsection

@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg') }});"></div>

        <div class="container">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>/</li>
                <li><span>About</span></li>
            </ul>
            <h2>About Us</h2>
        </div>
    </section>

    <section class="service-one">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="service-one__box">
                        <img src="{{ asset('assets/images/services/service-1-1.jpg') }}" alt="">
                        <div class="service-one__box-content">
                            <h3><a href="">Agriculture Leader</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="service-one__box">
                        <img src="{{ asset('assets/images/services/service-1-2.jpg') }}" alt="">
                        <div class="service-one__box-content">
                            <h3><a href="">Quality Standards</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="service-one__box">
                        <img src="{{ asset('assets/images/services/service-1-3.jpg') }}" alt="">
                        <div class="service-one__box-content">
                            <h3><a href="">Organic Services</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-one">
        <img src="{{ asset('assets/images/icons/about-bg-icon-1-1.png') }}" class="about-one__bg-shape-1" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-one__images">
                        <img src="{{ asset('assets/images/resources/about-1-1.jpg') }}" alt="">
                        <img src="{{ asset('assets/images/resources/about-1-2.jpg') }}" alt="">
                        <div class="about-one__count wow fadeInLeft" data-wow-duration="1500ms">
                            <span>Trusted by</span>
                            <h4>8900</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-one__content">
                        <div class="block-title text-left">
                            <div class="block-title__image"></div>
                            <p>Welcome to True Grow Farms</p>
                            <h3>Better Agriculture for
                                Better Future</h3>
                        </div>
                        <div class="about-one__tagline">
                            <p>We have 30 years of agriculture & eco farming experience globaly</p>
                        </div>
                        <div class="about-one__summery">
                            <p>Our very first community supporting agriculture (CSA) farm which been growing food, fun, and community spirit from the ground up for 34 years.<br>
                                We set the tone and standards of home grown local, organic and regenerative community. Our little urban farm has been home for three generations of families sharing the livingness of our sacred soil’s celebration..</p>
                        </div>
                        <div class="about-one__icon-row">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="about-one__box">
                                        <i class="agrikon-icon-farmer"></i>
                                        <h4><a href="">Professional Farmers</a></h4>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="about-one__box">
                                        <i class="agrikon-icon-agriculture"></i>
                                        <h4><a href="">Organic & Eco Solutions</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-three__image">
                        <img src="{{ asset('njs_ceo.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-three__content">
                        <div class="block-title">
                            <div class="block-title__image"></div>
                            <p>Get to know us</p>
                            <h3>Our CEO</h3>
                        </div>
                        <div class="about-three__summery">
                            <p>Nichola J. Stein, Our CEO and Livestock investor, explores how agricultural innovation is contributing to Zurich farmers combat climate challenges on his 13,000-acre farm.</p>
                            <p>Nichola had a remarkable educational experience in Management and Agriculture. He studied Business Administration in HWZ University of Applied Sciences, Zurich. He got his Bachelor's degree in Business Administration and Management and a Masters degree in Agricultural Business and Management.</p>
                            <p>Nichola relies on innovatsion in agricultural technology to farm sustainably and look after the environment. This helps reduce the impact climate change has on farming and allows them to grow high-quality crops despite the changes. He says "says leaving a legacy means leaving the land better than it was before".</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="call-to-action__three jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 50%">
        <img class="call-to-action__three__bg jarallax-img"
             src="{{ asset('assets/images/backgrounds/cta-1-bg-1.jpg') }}" alt="parallax-image" />
        <div class="container">
            <div class="row">
                <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1500ms">
                    <div class="call-to-action__three-image">
                        <img src="{{ asset('assets/images/resources/cta-3-1.jpg') }}" alt="">
                        <img src="{{ asset('assets/images/resources/cta-3-2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="call-to-action__three-content">
                        <h3>Providing High Quality Products</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gray-boxed-wrapper home-one__boxed">
        <img src="{{ asset('assets/images/icons/home-1-blog-bg.png') }}" alt="" class="home-one__boxed-bg">

        <div class="blog-home__slogan">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="blog-home__slogan-main">
                            <i class="agrikon-icon-farm"></i>
                            <div class="blog-home__slogan-content">
                                <h3>We Care About Our Agriculture Growth</h3>
                                <p>Helping farmers to emerging markets maximize their profits. We use agronomic machine learning, remote sensing, and mobile phones to deliver financing, farm products.<br>
                                    Customized advice to smallholder farmers with radical efficiency and scalability agricultural methods used.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="blog-home__slogan-image">
                            <img src="{{ asset('assets/images/resources/blog-cta-1.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="client-carousel client-carousel__has-border-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                    <div class="contact-two__content">
                        <div class="block-title">
                            <div class="block-title__image"></div>
                            <h3>Partners</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 140, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "375": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "767": {
                    "spaceBetween": 50,
                    "slidesPerView": 4
                },
                "991": {
                    "spaceBetween": 50,
                    "slidesPerView": 5
                },
                "1199": {
                    "spaceBetween": 100,
                    "slidesPerView": 5
                }
            }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/partners/1.png') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/partners/2.png') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/partners/3.png') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/partners/4.png') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/partners/5.png') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/partners/6.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
