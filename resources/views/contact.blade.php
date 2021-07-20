@extends('layout')

@section('title')
    Contact us
@endsection

@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg') }});"></div>

        <div class="container">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>/</li>
                <li><span>Contact us</span></li>
            </ul>
            <h2>Contact us</h2>
        </div>
    </section>

    <section class="contact-one">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4">
                    <div class="contact-one__content">
                        <div class="block-title">
                            <div class="block-title__image"></div>
                            <p>Contact now</p>
                            <h3>Leave A Message</h3>
                        </div>
                        <div class="contact-one__summery">
                            <p></p>
                        </div>
                        <div class="contact-one__social">
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-8">
                    <form action="{{ url('contact/submit') }}"
                          class="contact-one__form contact-form-validated" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="name" placeholder="Full Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="email" placeholder="Email Address">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="mobile" placeholder="Phone Number">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="subject" placeholder="Subject">
                            </div>
                            <div class="col-lg-12">
                                <textarea name="description" placeholder="Write Message"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="thm-btn">Send a Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-infos">
        <div class="container">
            <div class="inner-container wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                <div class="row no-gutters">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="contact-infos__single">
                            <h3>Visit Company</h3>
                            <p>New York. United States of America.</p>
                            <p>Zurich. Switzerland.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="contact-infos__single">
                            <h3>Call or Email</h3>
                            <p><a href="mailto:info@truegrowfarms.com">info@truegrowfarms.com</a> <br>
                                <a href="mailto:support@truegrowfarms.com">support@truegrowfarms.com</a><br>
                                <a href="tel:666-888-0000">682 214 3661</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
