@extends('layouts.app')
@section('title','About')

@section('content')
<div>

    <!--============= Header Section Ends Here =============-->
    <section class="page-header bg_img"
        data-background="{{ asset('/') }}frontend/assets/images/page-header.png">
        <div class="bottom-shape d-none d-md-block">
            <img src="{{ asset('/') }}frontend/assets/css/img/page-header.png" alt="css">
        </div>
        <div class="container">
            <div class="page-header-content cl-white">
                <h2 class="title">About Us</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('Fontend.Home') }}">Home</a>
                    </li>
                    <li>
                        About Us
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--============= Header Section Ends Here =============-->


    <!--============= About Section Starts Here =============-->
    <section class="about-section padding-top padding-bottom oh">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5">
                    <div class="about-thumb rtl pr-xl-15">
                        <img src="{{ asset('/') }}frontend/assets/images/about/about.png" alt="about">
                    </div>
                </div>
                <div class="col-xl-7 pl-xl-0">
                    <div class="about-content">
                        <div class="section-header left-style">
                            <h5 class="cate">A Few Words About Us</h5>
                            <h2 class="title">We’re empowering teams to achieve greatness together.</h2>
                            <p>Global One Way are a portion of the transaction cost that is paid back to the client on
                                each trade, resulting in a lower spread and improved win ratio. For example, if your
                                rebate is .2 pips and the spread is .9 pips, then your net spread is only . </p>
                        </div>
                        <div class="counter-area-5">
                            <div class="counter-item-5">
                                <div class="counter-thumb">
                                    <img src="{{ asset('/') }}frontend/assets/images/counter/counter1.png"
                                        alt="counter">
                                </div>
                                <div class="counter-content">
                                    <h3 class="title"><span class="counter">45</span><span>k</span></h3>
                                    <p>Total User</p>
                                </div>
                            </div>
                            <div class="counter-item-5">
                                <div class="counter-thumb">
                                    <img src="{{ asset('/') }}frontend/assets/images/counter/counter2.png"
                                        alt="counter">
                                </div>
                                <div class="counter-content">
                                    <h3 class="title"><span class="counter">90</span><span>+</span></h3>
                                    <p>Countries</p>
                                </div>
                            </div>
                            <div class="counter-item-5">
                                <div class="counter-thumb">
                                    <img src="{{ asset('/') }}frontend/assets/images/counter/counter3.png"
                                        alt="counter">
                                </div>
                                <div class="counter-content">
                                    <h3 class="title"><span class="counter">99.99</span><span>%</span></h3>
                                    <p>Satisfaction</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= About Section Ends Here =============-->




    <!--============= Coverage Section Starts Here =============-->
    <section class="coverage-section padding-top padding-bottom-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section-header left-style coverage-header">
                        <h5 class="cate">Our stats say more than any words</h5>
                        <h2 class="title">Apps Without Borders</h2>
                        <p>
                            Mosta app are growing by 300% every year with a steady love from users around the world. We
                            are also close to achieving 10 million cumulative downloads.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="coverage-right-area text-lg-right">
                        <div class="rating-area">
                            <div class="ratings">
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                            </div>
                            <span class="average">5.0 / 5.0</span>
                        </div>
                        <h2 class="amount">312,921+</h2>
                        <a href="#0">Total User Reviews <i class="fa fa-paper-plane"></i></a>
                    </div>
                </div>
            </div>
            <div class="coverage-wrapper bg_img"
                data-background="{{ asset('/') }}frontend/assets/images/bg/world-map.png">
                <div class="border-item-1">
                    <span class="name">North America</span>
                    <h2 class="title">70.7%</h2>
                </div>
                <div class="border-item-2">
                    <span class="name">Asia</span>
                    <h2 class="title">14.4%</h2>
                </div>
                <div class="border-item-3">
                    <span class="name">North Europe</span>
                    <h2 class="title">8.4%</h2>
                </div>
                <div class="border-item-4">
                    <span class="name">South America</span>
                    <h2 class="title">1.8%</h2>
                </div>
                <div class="border-item-5">
                    <span class="name">Africa</span>
                    <h2 class="title">1.8%</h2>
                </div>
                <div class="border-item-6">
                    <span class="name">Australia</span>
                    <h2 class="title">3%</h2>
                </div>
            </div>
        </div>
    </section>
    <!--============= Coverage Section Ends Here =============-->



    <!--============= Creativity Section Starts Here =============-->
    <section class="oh creativity-section padding-bottom bg-max-lg-dark bg_img top_center"
        data-background="{{ asset('/') }}frontend/assets/images/feature/experience-bg.png">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 padding-top">
                    <div class="section-header left-style mb-0">
                        <h5 class="cate">We Build Apps for Creativity & Productivity</h5>
                        <h2 class="title">We Strive to Make Great Apps</h2>
                        <p>We are constantly working to improve usability based on data and listen to your voice to find
                            the best results. All of mosto's products are designed with the concerns of developers,
                            designers, and marketers alike, regardless of their position.A culture that seeks directions
                            and approaches issues from a
                            diverse perspective, rather than actively insisting on one
                            solution. </p>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 d-none d-lg-block">
                    <img src="{{ asset('/') }}frontend/assets/images/feature/experience.png" alt="feature">
                </div>
            </div>
        </div>
    </section>
    <!--============= Creativity Section Ends Here =============-->


    <!--============= History Section Starts Here =============-->
    <section class="history-section padding-top padding-bottom-2">
        <div class="container">
            <div class="section-header">
                <h5 class="cate">Our history </h5>
                <h2 class="title">How We Became Successful</h2>
                <p>We always challenge the openness of higher possibilities
                    without defining the limits of our teams and products. We test our hypotheses about new attempts and
                    enjoy making our way around the world.</p>
                <p></p>
            </div>
            <div class="history-slider owl-theme owl-carousel">
                <div class="history-item">
                    <div class="history-content">
                        <div class="content">
                            <h6 class="title">We Are Growing</h6>
                            <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                        </div>
                    </div>
                    <div class="history-thumb">
                        <div class="anime-item-2"></div>
                        <span>2014</span>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-content">
                        <div class="content">
                            <h6 class="title">We Are Growing</h6>
                            <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                        </div>
                    </div>
                    <div class="history-thumb">
                        <div class="anime-item-2"></div>
                        <span>2015</span>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-content">
                        <div class="content">
                            <h6 class="title">We Are Growing</h6>
                            <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                        </div>
                    </div>
                    <div class="history-thumb">
                        <div class="anime-item-2"></div>
                        <span>2016</span>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-content">
                        <div class="content">
                            <h6 class="title">We Are Growing</h6>
                            <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                        </div>
                    </div>
                    <div class="history-thumb">
                        <div class="anime-item-2"></div>
                        <span>2017</span>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-content">
                        <div class="content">
                            <h6 class="title">We Are Growing</h6>
                            <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                        </div>
                    </div>
                    <div class="history-thumb">
                        <div class="anime-item-2"></div>
                        <span>2018</span>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-content">
                        <div class="content">
                            <h6 class="title">We Are Growing</h6>
                            <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                        </div>
                    </div>
                    <div class="history-thumb">
                        <div class="anime-item-2"></div>
                        <span>2019</span>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-content">
                        <div class="content">
                            <h6 class="title">We Are Growing</h6>
                            <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                        </div>
                    </div>
                    <div class="history-thumb">
                        <div class="anime-item-2"></div>
                        <span>2020</span>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-content">
                        <div class="content">
                            <h6 class="title">We Are Growing</h6>
                            <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                        </div>
                    </div>
                    <div class="history-thumb">
                        <div class="anime-item-2"></div>
                        <span>2014</span>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-content">
                        <div class="content">
                            <h6 class="title">We Are Growing</h6>
                            <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                        </div>
                    </div>
                    <div class="history-thumb">
                        <div class="anime-item-2"></div>
                        <span>2015</span>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-content">
                        <div class="content">
                            <h6 class="title">We Are Growing</h6>
                            <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                        </div>
                    </div>
                    <div class="history-thumb">
                        <div class="anime-item-2"></div>
                        <span>2016</span>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-content">
                        <div class="content">
                            <h6 class="title">We Are Growing</h6>
                            <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                        </div>
                    </div>
                    <div class="history-thumb">
                        <div class="anime-item-2"></div>
                        <span>2017</span>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-content">
                        <div class="content">
                            <h6 class="title">We Are Growing</h6>
                            <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                        </div>
                    </div>
                    <div class="history-thumb">
                        <div class="anime-item-2"></div>
                        <span>2018</span>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-content">
                        <div class="content">
                            <h6 class="title">We Are Growing</h6>
                            <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                        </div>
                    </div>
                    <div class="history-thumb">
                        <div class="anime-item-2"></div>
                        <span>2019</span>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-content">
                        <div class="content">
                            <h6 class="title">We Are Growing</h6>
                            <p>emeritis hibridas hic dignus de fortis, altus orexisstoria</p>
                        </div>
                    </div>
                    <div class="history-thumb">
                        <div class="anime-item-2"></div>
                        <span>2020</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= History Section Ends Here =============-->



</div>

<script src="/livewire/livewire.js?id=d7d975b5d122717a1ee0" data-turbolinks-eval="false"></script>
<script data-turbolinks-eval="false">
    if (window.livewire) {console.warn('Livewire: It looks like Livewire\'s @livewireScripts JavaScript assets have already been loaded. Make sure you aren\'t loading them twice.')}window.livewire = new Livewire();window.livewire_app_url = '';window.livewire_token = 'T35k4M7eJiiESjKzik5PteIvwULdC0AGz9ENir04';/* Make Alpine wait until Livewire is finished rendering to do its thing. */window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};document.addEventListener("DOMContentLoaded", function () {window.livewire.start();});var firstTime = true;document.addEventListener("turbolinks:load", function() {/* We only want this handler to run AFTER the first load. */if(firstTime) {firstTime = false;return;}window.livewire.restart();});document.addEventListener("turbolinks:before-cache", function() {document.querySelectorAll('[wire\\:id]').forEach(function(el) {const component = el.__livewire;const dataObject = {data: component.data,events: component.events,children: component.children,checksum: component.checksum,locale: component.locale,name: component.name,errorBag: component.errorBag,redirectTo: component.redirectTo,};el.setAttribute('wire:initial-data', JSON.stringify(dataObject));});});
</script>
<script>
    window.onload = function () {

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            toolTip: {
                shared: true
            },
            legend: {
                fontSize: 0
            },
            backgroundColor: "transparent",
            color: "#ffffff",
            data: [{
                type: "splineArea",
                showInLegend: true,
                name: "Income",
                yValueFormatString: "$#,#000",
                xValueFormatString: "YYYY",
                dataPoints: [
                    { x: new Date(2015, 1), y: 0 },
                    { x: new Date(2016, 1), y: 1000 },
                    { x: new Date(2017, 1), y: 700 },
                    { x: new Date(2018, 1), y: 1400 },
                    { x: new Date(2019, 1), y: 1500 },
                    { x: new Date(2020, 1), y: 1000 },
                ]
            },
            {
                type: "splineArea",
                showInLegend: true,
                yValueFormatString: "#k",
                name: "Active Members",
                dataPoints: [
                    { x: new Date(2015, 1), y: 0 },
                    { x: new Date(2016, 1), y: 400 },
                    { x: new Date(2017, 1), y: 1000 },
                    { x: new Date(2018, 1), y: 1000 },
                    { x: new Date(2019, 1), y: 2000 },
                    { x: new Date(2020, 1), y: 2200 },
                ]
            }]
        });
        chart.render();

        }

</script>



<!-- /main -->
@endsection