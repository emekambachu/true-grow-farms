@extends('layout')

@section('title')
    Home
@endsection

@section('content')
    <section class="main-slider">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{
        "slidesPerView": 1,
        "loop": true,
        "effect": "fade",
        "autoplay": {
            "delay": 5000
        },
        "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
        }
    }'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url({{ asset('assets/images/main-slider/main-slider-1-1.jpg') }});">
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-7">
                                <span class="tagline">Welcome to True Grow Farms</span>
                                <h2><span>Agriculture</span> <br>
                                    & Eco Farming</h2>
                                <a href="{{ url('about') }}" class=" thm-btn">Discover More</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url({{ asset('assets/images/main-slider/main-slider-1-2.jpg') }});">
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-7">
                                <span class="tagline">Welcome to True Grow Farms</span>
                                <h2><span>Agriculture</span><br>
                                    & Eco Farming</h2>
                                <a href="{{ url('about') }}" class=" thm-btn">Discover More</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="agrikon-icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="agrikon-icon-right-arrow"></i></div>
            </div>
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
                        <a href="{{ url('about') }}" class="thm-btn">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service-two">
        <div class="service-two__bottom-curv"></div>
        <div class="container">
            <div class="block-title text-center">
                <div class="block-title__image"></div>
                <p>Our Services list</p>
                <h3>What We’re Offering</h3>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="service-two__card">
                        <div class="service-two__card-image">
                            <img src="{{ asset('assets/images/services/service-2-1.jpg') }}" alt="">
                        </div>
                        <div class="service-two__card-content">
                            <div class="service-two__card-icon">
                                <i class="agrikon-icon-tractor"></i>
                            </div>
                            <h3><a href="">Agriculture Products</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="service-two__card">
                        <div class="service-two__card-image">
                            <img src="{{ asset('assets/images/services/service-2-2.jpg') }}" alt="">
                        </div>
                        <div class="service-two__card-content">
                            <div class="service-two__card-icon">
                                <i class="agrikon-icon-organic-food"></i>
                            </div>
                            <h3><a href="">Oragnic Products</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="service-two__card">
                        <div class="service-two__card-image">
                            <img src="{{ asset('assets/images/services/service-2-3.jpg') }}" alt="">
                        </div>
                        <div class="service-two__card-content">
                            <div class="service-two__card-icon">
                                <i class="agrikon-icon-vegetable"></i>
                            </div>
                            <h3><a href="">Fresh Vegetables</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="service-two__card">
                        <div class="service-two__card-image">
                            <img src="{{ asset('assets/images/services/service-2-4.jpg') }}" alt="">
                        </div>
                        <div class="service-two__card-content">
                            <div class="service-two__card-icon">
                                <i class="agrikon-icon-dairy"></i>
                            </div>
                            <h3><a href="">Dairy Products</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="projects-one project-one__home-one">
        <div class="container">
            <div class="block-title text-center">
                <div class="block-title__image"></div>
                <p>Closed projects</p>
                <h3>Latest Projects List</h3>
            </div>
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 0, "slidesPerView": 1, "loop": true, "slidesPerGroup": 1, "pagination": {
            "el": "#projects-one__swiper-pagination",
            "type": "bullets",
            "clickable": true
        },
        "breakpoints": {
            "0": {
                "spaceBetween": 0,
                "slidesPerView": 1,
                "slidesPerGroup": 1
            },
            "640": {
                "spaceBetween": 30,
                "slidesPerView": 2,
                "slidesPerGroup": 2
            },
            "992": {
                "spaceBetween": 30,
                "slidesPerView": 2,
                "slidesPerGroup": 2
            }
        }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="projects-one__single">
                            <img src="{{ asset('assets/images/projects/project-2-1.jpg') }}" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="projects-one__single">
                            <img src="{{ asset('assets/images/projects/project-2-2.jpg') }}" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="projects-one__single">
                            <img src="{{ asset('assets/images/projects/project-2-3.jpg') }}" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="projects-one__single">
                            <img src="{{ asset('assets/images/projects/project-2-4.jpg') }}" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="projects-one__single">
                            <img src="{{ asset('assets/images/projects/project-2-2.jpg') }}" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="projects-one__single">
                            <img src="{{ asset('assets/images/projects/project-2-4.jpg') }}" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination" id="projects-one__swiper-pagination"></div>
            </div>
        </div>
    </div>

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
                        <h3>Providing High Quality
                            Products</h3>
                        <a href="{{ url('about') }}" class="thm-btn">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials-one">
        <img src="{{ asset('assets/images/icons/testimonials-bg-1-1.png') }}" class="testimonials-one__bg" alt="">
        <div class="container">
            <h2 class="testimonials-one__title">Testimonials</h2>
            <div id="testimonials-one__carousel" class="testimonials-one__carousel swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonials-one__icons">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly
                            refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure dolor in
                            reprehenderit in esse nulla pariatur.</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonials-one__icons">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly
                            refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure dolor in
                            reprehenderit in esse nulla pariatur.</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonials-one__icons">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly
                            refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure dolor in
                            reprehenderit in esse nulla pariatur.</p>
                    </div>
                </div>
            </div>
            <div id="testimonials-one__thumb" class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonials-one__image">
                            <img src="{{ asset('assets/images/resources/testimonials-1-1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonials-one__image">
                            <img src="{{ asset('assets/images/resources/testimonials-1-2.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonials-one__image">
                            <img src="{{ asset('assets/images/resources/testimonials-1-3.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="testimonials-one__meta" class="testimonials-one__carousel swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonials-one__meta">
                            <h4>Jessica Brown</h4>
                            <span>Customer</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonials-one__meta">
                            <h4>Caleb Hoffman</h4>
                            <span>Customer</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonials-one__meta">
                            <h4>Bradley Kim</h4>
                            <span>Customer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination" id="testimonials-one__swiper-pagination"></div>
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
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered in some form, by injected humour words.</p>
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
    <section class="contact-two">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                    <div class="contact-two__image">
                        <div class="contact-two__image-bubble-1"></div>
                        <div class="contact-two__image-bubble-2"></div>
                        <div class="contact-two__image-bubble-3"></div>
                        <img src="{{ asset('assets/images/resources/contact-1-1.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                    <div class="contact-two__content">
                        <div class="block-title">
                            <div class="block-title__image"></div>
                            <p>Contact now</p>
                            <h3>Leave Us A
                                Message</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                    @if(session('success'))
                        <div class="text-center text-white p-3" style="width: 70%; margin: 4px auto; background-color: #3e976c;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ url('contact/submit') }}" class="contact-one__form contact-form-validated">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="name" placeholder="Full Name">
                            </div>
                            <div class="col-lg-12">
                                <input type="text" name="email" placeholder="Email Address">
                            </div>
                            <div class="col-lg-12">
                                <input type="text" name="mobile" placeholder="Phone Number">
                            </div>
                            <div class="col-lg-12">
                                <textarea name="description" placeholder="Write Message"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="thm-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
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
