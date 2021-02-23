@extends('layouts.app')
@section('title','News')
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
    <!--============= Header Section Ends Here =============-->
    <section class="page-header bg_img oh"
        data-background="{{ asset('/') }}frontend/assets/images/page-header.png">
        <div class="bottom-shape d-none d-md-block">
            <img src="{{ asset('/') }}frontend/assets/css/img/page-header.png" alt="css">
        </div>
        <div class="container">
            <div class="page-header-content cl-white">
                <h2 class="title">News Pages</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('Fontend.Home') }}">Home</a>
                    </li>
                    <li>
                        <a href="#0">Pages</a>
                    </li>
                    <li>
                        News Pages
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--============= Header Section Ends Here =============-->



    <!--============= Blog Section Starts Here =============-->
    <section class="blog-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <article class="mb-40-none">
                        <div class="post-item">
                            <div class="post-thumb ">
                                <a href="{{ route('Fontend.newsDetails') }}"><img
                                        src="{{ asset('/') }}frontend/assets/images/blog/blog1.jpg"
                                        alt="blog"></a>
                            </div>
                            <div class="post-content">
                                <h3 class="title">
                                    <a href="{{ route('Fontend.newsDetails') }}">Comming Soon!</a>
                                </h3>
                                <p class="d-none">Hybrid mobile applications are like any other applications you will
                                    see
                                    on your mobile.</p>
                                <a href="{{ route('Fontend.newsDetails') }}" class="read d-none">3 min Read</a>
                            </div>
                        </div>
                    </article>
                    <div class="pagination-area text-center pt-50 pb-50 pb-lg-none d-none">
                        <a href="#0"><i class="fas fa-angle-double-left"></i><span>Prev</span></a>
                        <a href="#0">1</a>
                        <a href="#0">2</a>
                        <a href="#0" class="active">3</a>
                        <a href="#0">4</a>
                        <a href="#0">5</a>
                        <a href="#0"><span>Next</span><i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <aside class="sticky-menu">
                        <div class="widget widget-search">
                            <h5 class="title">search</h5>
                            <form class="search-form">
                                <input type="text" placeholder="Enter your Search Content" required>
                                <button type="submit"><i class="flaticon-loupe"></i>Search</button>
                            </form>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!--============= Blog Section Ends Here =============-->


</div> <!-- /main -->
@endsection