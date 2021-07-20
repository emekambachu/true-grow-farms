@extends('layout')

@section('title')
    Gallery
@endsection

@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg') }});"></div>

        <div class="container">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>/</li>
                <li><span>Gallery</span></li>
            </ul>
            <h2>Gallery</h2>
        </div>
    </section>

    <div class="projects-one">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="projects-one__single">
                        <img src="{{ asset('assets/images/projects/project-1-1.jpg') }}" alt="">
                        <div class="projects-one__content">
                            <h3>Harvest Innovation</h3>
                            <a href="" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="projects-one__single">
                        <img src="{{ asset('assets/images/projects/project-1-2.jpg') }}" alt="">
                        <div class="projects-one__content">
                            <h3>Harvest Innovation</h3>
                            <a href="" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="projects-one__single">
                        <img src="{{ asset('assets/images/projects/project-1-3.jpg') }}" alt="">
                        <div class="projects-one__content">
                            <h3>Harvest Innovation</h3>
                            <a href="" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="projects-one__single">
                        <img src="{{ asset('assets/images/projects/project-1-4.jpg') }}" alt="">
                        <div class="projects-one__content">
                            <h3>Harvest Innovation</h3>
                            <a href="" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="projects-one__single">
                        <img src="{{ asset('assets/images/projects/project-1-5.jpg') }}" alt="">
                        <div class="projects-one__content">
                            <h3>Harvest Innovation</h3>
                            <a href="" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="projects-one__single">
                        <img src="{{ asset('assets/images/projects/project-1-6.jpg') }}" alt="">
                        <div class="projects-one__content">
                            <h3>Harvest Innovation</h3>
                            <a href="" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
@endsection
