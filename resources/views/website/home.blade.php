@extends('layouts.app')
@section('title','Home')
@push('css')
 <style>
        [wire\:loading] {
            display: none;
        }
    
        [wire\:offline] {
            display: none;
        }
    
        [wire\:dirty]:not(textarea):not(input):not(select) {
            display: none;
        }
    </style>   
@endpush
@section('content')

        <div>

            <!--============= Banner Section Starts Here =============-->
            <section class="banner-8 oh">
                <div class="banner-shape-8 d-lg-block d-none">
                    <img src="{{ asset('/') }}frontend/assets/images/banner/banner-shape-8.png" alt="banner">
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="banner-content-8">
                                <h1 class="title">
                                    Stay with us and we will make your future money system for you !
                                </h1>
                                <p>
                                    Global One Way, Best Money Management System ! You will stay with us and we will
                                    manage your future money !
                                </p>
                                <div class="banner-button-group">
                                    <a href="{{ route('login') }}" class="button-4">Sign In</a>
                                    <a href="{{ route('register') }}" class="button-4 active">Sign Up</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none">
                        </div>
                        <div class="col-12">
                            <div class="counter-wrapper-3">

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--============= Banner Section Ends Here =============-->


            <!--============= To Access Section Starts Here =============-->
            <section class="to-access-section padding-top padding-bottom bg_img mb-lg-5"
                data-background="{{ asset('/') }}frontend/assets/images/feature/to-access-bg.png" id="feature">
                <div class="container">
                    <div class="section-header">
                        <h5 class="cate">Welcome to our Future Money System ! </h5>
                        <h2 class="title">To Use Our Application</h2>
                        <p>Stay With Us We fully believe that this future money system will take you a long way ! Which
                            is a sure future !</p>
                    </div>
                    <div class="row mb-30 justify-content-center">
                        <div class="col-lg-3 col-sm-6">
                            <div class="to-access-item">
                                <div class="to-access-thumb">
                                    <span class="anime"></span>
                                    <div class="thumb">
                                        <img src="{{ asset('/') }}frontend/assets/images/icon/access1.png" alt="access">
                                    </div>
                                </div>
                                <h5 class="title">Productivity</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="to-access-item active">
                                <div class="to-access-thumb">
                                    <span class="anime"></span>
                                    <div class="thumb">
                                        <img src="{{ asset('/') }}frontend/assets/images/icon/access2.png" alt="access">
                                    </div>
                                </div>
                                <h5 class="title">Optimization</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="to-access-item">
                                <div class="to-access-thumb">
                                    <span class="anime"></span>
                                    <div class="thumb">
                                        <img src="{{ asset('/') }}frontend/assets/images/icon/access3.png" alt="access">
                                    </div>
                                </div>
                                <h5 class="title">Safety</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="to-access-item">
                                <div class="to-access-thumb">
                                    <span class="anime"></span>
                                    <div class="thumb">
                                        <img src="{{ asset('/') }}frontend/assets/images/icon/access4.png" alt="access">
                                    </div>
                                </div>
                                <h5 class="title">Sustainability</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--============= To Access Section Ends Here =============-->

            <!--============= How It Works Section Starts Here =============-->
            <section class="work-section padding-bottom bg_img mb-md-95 pb-md-0"
                data-background="{{ asset('/') }}frontend/assets/images/work/work-bg.jpg" id="how">
                <div class="oh padding-top pos-rel">
                    <div class="top-shape d-none d-lg-block">
                        <img src="{{ asset('/') }}frontend/assets/css/img/work-shape.png" alt="css">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-xl-7">
                                <div class="section-header left-style cl-white">
                                    <h5 class="cate">Yours</h5>
                                    <h2 class="title"> What Global One Way </h2>
                                    <p>Global One Way is a company that will take you to all of their business partners
                                        like Forex Trading Ship Management System Aircraft Airlines Hotels-Resorts
                                        Import-Export will share your business with everything. And we are going to
                                        start cryptocurrency trading anew. This cryptocurrency trading future means a
                                        very important instrument for the system. We are very happy to connect you with
                                        that future money system.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container">
                    <div class="count-slider owl-thumbs" data-slider-id="2">
                        <div class="count-item">
                            <span class="serial">01</span>
                            <h5 class="title">Register</h5>
                        </div>
                        <div class="count-item">
                            <span class="serial">02</span>
                            <h5 class="title">Sales</h5>
                        </div>
                        <div class="count-item">
                            <span class="serial">03</span>
                            <h5 class="title">Upgrade</h5>
                        </div>
                        <div class="count-item">
                            <span class="serial">04</span>
                            <h5 class="title">Yay! Done</h5>
                        </div>
                    </div>
                </div>
            </section>
            <!--============= How It Works Section Ends Here =============-->


            <!--============= Access Section Starts Here =============-->

        </div>
    </div>
    </div>
    </div>
    </section>
    <!--============= Access Section Ends Here =============-->


    <!--============= Feature Video Section Starts Here =============-->
    <section class="feature-video-section padding-top dark-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section-header mw-100">
                        <h5 class="cate">Amazing features to convince you</h5>
                        <h2 class="title">Watch our video presentation</h2>
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <p>In the process of making a app, the satisfaction of users is the most
                                    important and the focus is on usability and completeness</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="pos-rel mw-100">
                        <img class="w-100" src="{{ asset('/') }}frontend/assets/images/feature/feature-video.png" alt="bg">
                        <a href="#" class="video-button-2 popup">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Feature Video Section Ends Here =============-->


    <!--============= Advance Feature Section Starts Here =============-->

    <!--============= Advance Feature Section Ends Here =============-->


    <!--============= Pricing Section Starts Here =============-->
    <section class="pricing-section padding-top oh padding-bottom pb-lg-half bg_img pos-rel"
        data-background="{{ asset('/') }}frontend/assets/images/bg/pricing-bg.jpg" id="pricing">
        <div class="top-shape d-none d-md-block">
            <img src="{{ asset('/') }}frontend/assets/css/img/top-shape.png" alt="css">
        </div>
        <div class="bottom-shape d-none d-md-block mw-0">
            <img src="frontend/assets/css/img/bottom-shape.png" alt="css">
        </div>
        <div class="ball-2" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60" data-paroller-type="foreground"
            data-paroller-direction="horizontal">
            <img src="{{ asset('/') }}frontend/assets/images/balls/1.png" alt="balls">
        </div>
        <div class="ball-3" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30" data-paroller-type="foreground"
            data-paroller-direction="horizontal">
            <img src="{{ asset('/') }}frontend/assets/images/balls/2.png" alt="balls">
        </div>
        <div class="ball-4" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30" data-paroller-type="foreground"
            data-paroller-direction="horizontal">
            <img src="{{ asset('/') }}frontend/assets/images/balls/3.png" alt="balls">
        </div>
        <div class="ball-5" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30" data-paroller-type="foreground"
            data-paroller-direction="vertical">
            <img src="{{ asset('/') }}frontend/assets/images/balls/4.png" alt="balls">
        </div>
        <div class="ball-6" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60" data-paroller-type="foreground"
            data-paroller-direction="horizontal">
            <img src="{{ asset('/') }}frontend/assets/images/balls/5.png" alt="balls">
        </div>
        <div class="ball-7" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60" data-paroller-type="foreground"
            data-paroller-direction="vertical">
            <img src="{{ asset('/') }}frontend/assets/images/balls/6.png" alt="balls">
        </div>
        <div class="container">
            <div class="section-header cl-white">
                <h5 class="cate">Choose a plan that's right for you</h5>
                <h2 class="title">Pricing Plans</h2>
                <p>
                    Global One Way has plans, from free to paid, that scale with your needs. Subscribe to a plan that
                    fits the size of yours.
                </p>
            </div>
            <div class="tab-up">
                <div class="tab-area">
                    <div class="tab-item active">
                        <div class="pricing-slider-wrapper">
                            <div class="pricing-slider owl-theme owl-carousel">
                                <div class="pricing-item-2">
                                    <h5 class="cate">Free</h5>
                                    <div class="thumb">
                                        <img src="{{ asset('/') }}frontend/assets/images/pricing/pricing1.png" alt="pricing">
                                    </div>
                                    <h2 class="title"><sup>$</sup>0</h2>
                                    <span class="info">Onetime</span>
                                    <ul class="pricing-content-3">
                                        <li>Only Get Placement</li>
                                        <li>Monthly Updates</li>
                                        <li>-</li>
                                        <li>-</li>
                                        <li>24/7 Support</li>
                                    </ul>
                                    <a href="{{ route('register') }}" class="get-button">Signup<i
                                            class="fa fa-long-arrow-right"></i></a>
                                </div>
                                <div class="pricing-item-2">
                                    <h5 class="cate">Premium</h5>
                                    <div class="thumb">
                                        <img src="{{ asset('/') }}frontend/assets/images/pricing/pricing2.png" alt="pricing">
                                    </div>
                                    <h2 class="title"><sup>$</sup>30</h2>
                                    <span class="info">Onetime</span>
                                    <ul class="pricing-content-3">
                                        <li>Matching Income </li>
                                        <li>One Way Daily Income</li>
                                        <li>Sponsor Income</li>
                                        <li>Achievement Bonus</li>
                                        <li>24/7 Support</li>
                                    </ul>
                                    <a href="{{ route('register') }}" class="get-button">Signup<i
                                            class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--============= Pricing Section Ends Here =============-->


    <!--============= Testimonial Section Starts Here =============-->

    <!--============= Testimonial Section Ends Here =============-->


    <!--============= Faq Section Starts Here =============-->

    <!--============= Faq Section Ends Here =============-->


    <!--============= Trial Section Starts Here =============-->
    <section class="trial-section padding-bottom padding-top">
        <div class="container">
            <div class="trial-wrapper padding-top padding-bottom pr">
                <div class="ball-1">
                    <img src="{{ asset('/') }}frontend/assets/images/balls/balls.png" alt="balls">
                </div>
                <div class="trial-content cl-white">
                    <h3 class="title">Start your free account forever!</h3>
                    <p>
                        We have provided free account forever <br> Guarantee in case of dissatisfaction with our
                        product.
                    </p>
                </div>
                <div class="trial-button">
                    <a href="{{ route('register') }}" class="transparent-button">Sing Up <i
                            class="fa fa-long-arrow-right ml-xl-2"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--============= Trial Section Ends Here =============-->
    </div>
    <!-- /main -->
@endsection