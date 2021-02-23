@extends('layouts.app')
@section('title','Business')
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
                <section class="page-header single-header blog-single-header bg_img oh"
                    data-background="{{ asset('/') }}frontend/assets/images/blog/page-header.jpg">
                    <div class="bottom-shape">
                        <img src="{{ asset('/') }}frontend/assets/css/img/page-header2.png" alt="css">
                    </div>
                </section>
                <!--============= Header Section Ends Here =============-->
            
            
            
                <!--============= Blog Section Starts Here =============-->
                <section class="blog-single-section padding-bottom">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <article>
                                    <div class="post-details">
                                        <div class="post-inner ">
                                            <div class="post-header ">
                                                <div class="meta-post d-none">
                                                    <a href="#0" class="read">2 days ago</a>
                                                    <a href="#0" class="read">3 min read</a>
                                                </div>
                                                <h3 class="title">Business Plan</h3>
            
            
                                                Coming Soon
                                            </div>



                                            <div class="post-content d-none">
                                                <div class="entry-meta">
                                                    <div class="thumb">
                                                        <a href="#0">
                                                            <img src="{{ asset('/') }}frontend/assets/images/blog/author2.png"
                                                                alt="blog">
                                                        </a>
                                                    </div>
                                                    <a href="#0" class="comment">
                                                        <i class="flaticon-chat-1"></i>
                                                        <span>30</span>
                                                    </a>
                                                    <a href="#0" class="comment">
                                                        <i class="flaticon-share"></i>
                                                        <span>22</span>
                                                    </a>
                                                </div>
                                                <div class="entry-content">
                                                    <p>Hybrid mobile applications are like any other applications you will see on
                                                        your mobile. They get easily installed on your mobile device. You can look
                                                        for these apps in the App stores. By using these apps, you can engage your
                                                        friends via social media, play games, track your health, take photos and
                                                        much more.</p>
                                                    <p>Hybrid mobile applications are developed using a combination of web
                                                        technologies like CSS, HTML, and JS as same as websites on the internet. The
                                                        major difference is that hybrid applications are hosted inside a native app
                                                        which further uses a mobile platform's WebView. Here, WebView is a
                                                        chromeless browser window which is typically configured to run fullscreen.
                                                    </p>
                                                    <img src="{{ asset('/') }}frontend/assets/images/blog/blog5.jpg"
                                                        alt="blog">
                                                    <p>Unless you are the one who really cares about this, it is not terribly
                                                        important. What all matters are how your hybrid mobile application
                                                        development is going to work in the long run as no one will care about how
                                                        it was built. A hybrid mobile application is said to be good if it performs
                                                        well for its users.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tags-area d-none">
                                            <div class="tags">
                                                <span>
                                                    Tags :
                                                </span>
                                                <div class="tags-item">
                                                    <a href="#0"> Tickets </a>
                                                    <a href="#0"> Coming Soon </a>
                                                    <a href="#0"> Movies </a>
                                                </div>
                                            </div>
                                            <ul class="social-icons">
                                                <li>
                                                    <a href="#0">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#0" class="active">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#0">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#0">
                                                        <i class="fa fa-pinterest"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#0">
                                                        <i class="fa fa-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="blog-comment d-none">
                                        <h5 class="title">comments</h5>
                                        <ul class="comment-area">
                                            <li>
                                                <div class="blog-item">
                                                    <div class="blog-thumb">
                                                        <a href="#0">
                                                            <img src="{{ asset('/') }}frontend/assets/images/blog/author2.png"
                                                                alt="blog">
                                                        </a>
                                                    </div>
                                                    <div class="blog-thumb-info">
                                                        <span>13 days ago</span>
                                                        <h6 class="title"><a href="#0">carl morgan</a></h6>
                                                    </div>
                                                    <div class="blog-content">
                                                        <p>
                                                            Maecenas at velit eu erat egestas vestibulum id ut tellus. Sed et semper
                                                            mauris. Quisque eu lorem libero. Donec finibus metus tellus, eget rutrum
                                                            est mattis non.
                                                        </p>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <div class="blog-item">
                                                            <div class="blog-thumb">
                                                                <a href="#0">
                                                                    <img src="{{ asset('/') }}frontend/assets/images/blog/author1.png"
                                                                        alt="blog">
                                                                </a>
                                                            </div>
                                                            <div class="blog-thumb-info">
                                                                <span>13 days ago</span>
                                                                <h6 class="title"><a href="#0">john flores</a></h6>
                                                            </div>
                                                            <div class="blog-content">
                                                                <p>
                                                                    Maecenas at velit eu erat egestas vestibulum id ut tellus. Sed
                                                                    et semper mauris. Quisque eu lorem libero. Donec finibus metus
                                                                    tellus, eget rutrum est mattis non.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="blog-item">
                                                    <div class="blog-thumb">
                                                        <a href="#0">
                                                            <img src="{{ asset('/') }}frontend/assets/images/blog/author3.png"
                                                                alt="blog">
                                                        </a>
                                                    </div>
                                                    <div class="blog-thumb-info">
                                                        <span>13 days ago</span>
                                                        <h6 class="title"><a href="#0">carl morgan</a></h6>
                                                    </div>
                                                    <div class="blog-content">
                                                        <p>
                                                            Maecenas at velit eu erat egestas vestibulum id ut tellus. Sed et semper
                                                            mauris. Quisque eu lorem libero. Donec finibus metus tellus, eget rutrum
                                                            est mattis non.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="leave-comment">
                                            <h5 class="title">leave comment</h5>
                                            <form class="blog-form">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Enter Your Full Name" required name="name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Enter Your Email Address" required name="email">
                                                </div>
                                                <div class="form-group">
                                                    <textarea placeholder="Write A Message" required name="message"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" value="Submit Now">
                                                </div>
                                            </form>
                                        </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </section>
                <!--============= Blog Section Ends Here =============-->
            
            
            </div>
            <!-- /main -->
@endsection