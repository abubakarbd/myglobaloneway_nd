<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=" | Global One Way">
    <meta name="author" content="">
    <title>@yield('title') | Global One Way</title>

    <link rel="shortcut icon" href="{{ asset('/') }}frontend/assets/images/favicon.png" type="image/x-icon">

 
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/app.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/animate.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/owl.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/main.css">
    <link href="{{ asset('/') }}libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

@stack('css')

    <script src="{{ asset('/') }}frontend/assets/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/modernizr-3.6.0.min.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/plugins.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/magnific-popup.min.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/jquery-ui.min.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/wow.min.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/waypoints.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/owl.min.js"></script>

    <script src="{{ asset('/') }}frontend/assets/js/paroller.js"></script>
    <!-- Sweet Alerts js -->
    <script src="{{ asset('/') }}libs/sweetalert2/sweetalert2.min.js"></script>

</head>

<body>

    <div id="page">

        <!--============= ScrollToTop Section Starts Here =============-->

        <a href="#0" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
        <div class="overlay"></div>
        <!--============= ScrollToTop Section Ends Here =============-->


        <!--============= Header Section Starts Here =============-->
        <header class="header-section">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="{{ route('Fontend.Home') }}">
                            <img src="{{ asset('/') }}frontend/assets/images/logo/globaloneway.png" alt="logo"
                                style="height:30px; width: auto;">
                        </a>
                    </div>
                    <ul class="menu">

                        <li>
                            <a href="{{ route('Fontend.Home') }}">Home</a>
                        </li>

                        <li>
                            <a href="{{ route('Fontend.News') }}">News</a>
                        </li>

                        <li>
                            <a href="{{ route('Fontend.Business') }}">Business Planing</a>
                        </li>

                        <li>
                            <a href="{{ route('Fontend.About') }}">About</a>
                        </li>
                        <li>
                            <a href="{{ route('Fontend.Contact') }}">Contact</a>
                        </li>
                        <li class="d-sm-none">
                            <a href="{{ route('login') }}" class="m-0 header-button">Sign In</a>
                        </li>
                    </ul>
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="header-right">
                        <a href="{{ route('login') }}" class="header-button d-none d-sm-inline-block">Sign
                            In</a>
                    </div>
                </div>
            </div>
        </header>
        <!--============= Header Section Ends Here =============-->
        <!-- /header -->
@yield('content')

    <!--============= Footer Section Starts Here =============-->
    <footer class="footer-section bg_img" data-background="{{ asset('/') }}frontend/assets/images/footer/footer-bg.jpg">
        <div class="container">
            <div class="footer-top padding-top padding-bottom">
                <div class="logo">
                    <script language="JavaScript" type="text/javascript">
                            TrustLogo("https://www.globaloneway.com/sectigo_trust_seal_lg_140x54.png", "CL1", "none");
                        </script>
                    <a href="#0">
                        <img src="{{ asset('/') }}frontend/assets/images/logo/globaloneway.png" alt="logo">
                    </a>
                </div>
                <ul class="social-icons">
                    <li>
                        <a href="#0"><i class="fa fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#0" class="active"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-pinterest-p"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-google-plus-g"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <div class="footer-bottom">
                <ul class="footer-link">
                    <li>
                        <a href="{{ route('Fontend.Home') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('Fontend.Business') }}">Business Planing</a>
                    </li>
                    <li>
                        <a href="{{ route('Fontend.News') }}">News</a>
                    </li>
                    <li>
                        <a href="{{ route('Fontend.About') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ route('Fontend.Contact') }}">Contact</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}">Sign-In</a>
                    </li>
                </ul>
            </div>
            <div class="copyright">
                <p>
                    Copyright © 2020.All Rights Reserved By <a href="#">Global One Way</a>
                </p>
            </div>
        </div>
    </footer>
    <!--============= Footer Section Ends Here =============-->
    <!-- /header -->
    </div>
    <!-- page -->

    <div id="toTop"></div><!-- Back to top button -->

    <script src="{{ asset('/') }}frontend/assets/js/nice-select.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/main.js"></script>

    <script>
        window.livewire.on('success', message => {
        Swal.fire({
            title: message.title || 'Success',
            text: message.text,
            type: 'success',
            confirmButtonColor: '#3b5de7'
        });
    });

    window.livewire.on('success_back', message => {
        Swal.fire({
            title: message.title || 'Success',
            text: message.text,
            type: 'success',
            confirmButtonColor: '#3b5de7'
        }).then(function () {
            window.location = message.back;
        });
    });

    window.livewire.on('error', message => {
        Swal.fire({
            title: message.title || 'Error',
            text: message.text,
            type: 'error',
            confirmButtonColor: '#3b5de7'
        });
    });

    </script>
</body>

</html>