<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tomato Responsive Restaurant HTML5 Template</title>
    <meta name="author" content="Surjith S M">

    <!-- SEO -->
    <meta name="description" content="Tomato is a Responsive HTML5 Template for Restaurants and food related services.">
    <meta name="keywords" content="tomato, responsive, html5, restaurant, template, food, reservation">

    <!-- Favicons -->
    <link rel="shortcut icon" href=" {{ asset('img/frontend/favicon.ico') }}">

    <!-- Responsive Tag -->
    <meta name="viewport" content="width=device-width">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/frontend/bootstrap.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/frontend/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/frontend/plugin.css') }} ">
    <link rel="stylesheet" href=" {{ asset('js/frontend/vendor/vegas/vegas.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/frontend/main.css') }}">

    <!--[if lt IE 9]>
    <script src=" {{ asset('js/frontend/vendor/html5-3.6-respond-1.4.2.min.js') }}"></script>
    <![endif]-->
</head>

<body id="intro3">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Preloder-->
<div class="preloder animated">
    <div class="scoket">
        <img src="{{ url('img/frontend/preloader.svg') }}" alt="" />
    </div>
</div>

<div class="body">

    <!-- Navigation-->
    <nav class="navbar navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=" {{ route('frontend.index') }}">
                    <img src=" {{ asset('img/frontend/nav-logo.png') }}" alt="nav-logo">
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href=" {{ route('frontend.index') }}" >Home<span ></span></a></li>
                    <li ><a href=" {{ route('frontend.about') }}" > About<span ></span></a></li>
                    <li ><a href=" {{ route('frontend.menu') }}" > Menu <span ></span></a></li>
                    <li ><a href=" {{ route('frontend.blog') }}" > Blog <span ></span></a></li>
                    <li ><a href=" {{ route('frontend.shop') }}" > Shop <span ></span></a></li>
                    <li ><a href=" {{ route('frontend.contact') }}" > Contact <span ></span></a></li>

                </ul>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </nav>


@yield('content')


<!-- subscribe -->
    <section class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Subscribe</h1>
                    <p>Get updates about new dishes and upcoming events</p>
                    <form class="form-inline" action="php/subscribe.php" id="invite" method="POST">
                        <div class="form-group">
                            <input class="e-mail form-control" name="email" id="address" type="email" placeholder="Your Email Address" required>
                        </div>
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-angle-right"></i>
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h1>About us</h1>
                    <p>Duis leo justo, condimentum at purus eu,Aenean sed dolor sem. Etiam massa libero, auctor vitae egestas et, accumsan quis nunc.Duis leo justo, condimentum at purus eu, posuere pretium tellus.</p>
                    <a href="./about.html">Read more &rarr;</a>
                </div>
                <div class="col-md-4  col-sm-6">
                    <h1>Recent post</h1>
                    <div class="footer-blog clearfix">
                        <a href="./blog_right_sidebar.html">
                            <img src="{{ asset('img/frontend/thumb8.png') }}" class="img-responsive footer-photo" alt="blog photos">
                            <p class="footer-blog-text">Hand picked ingredients for our best customers</p>
                            <p class="footer-blog-date">29 may 2015</p>
                        </a>
                    </div>
                    <div class="footer-blog clearfix last">
                        <a href="./blog_right_sidebar.html">
                            <img src="{{ asset('img/frontend/thumb9.png') }}" class="img-responsive footer-photo" alt="blog photos">
                            <p class="footer-blog-text">Daily special foods that you will going to love</p>
                            <p class="footer-blog-date">29 may 2015</p>
                        </a>
                    </div>
                </div>

                <div class="col-md-4  col-sm-6">
                    <h1>Reach us</h1>
                    <div class="footer-social-icons">
                        <a href="http://www.facebook.com">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                        <a href="http://www.twitter.com">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="http://plus.google.com">
                            <i class="fa fa-google"></i>
                        </a>
                        <a href="http://www.youtube.com">
                            <i class="fa fa-youtube-play"></i>
                        </a>
                        <a href="http://www.vimeo.com">
                            <i class="fa fa-vimeo"></i>
                        </a>
                        <a href="http://www.pinterest.com">
                            <i class="fa fa-pinterest-p"></i>
                        </a>
                        <a href="http://www.linkedin.com">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>
                    <div class="footer-address">
                        <p><i class="fa fa-map-marker"></i>28 Seventh Avenue, Neew York, 10014</p>
                        <p><i class="fa fa-phone"></i>Phone: (415) 124-5678</p>
                        <p><i class="fa fa-envelope-o"></i>support@restaurant.com</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer - Copyright -->
        <div class="footer-copyrights">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p><i class="fa fa-copyright"></i> 2015.Tomato.All rights reserved. Designed with <i class="fa fa-heart primary-color"></i> by Surjithctly</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>




<!-- Javascript -->
<script src=" {{ asset('js/frontend/vendor/jquery-1.11.2.min.js') }}"></script>
<script src=" {{ asset('js/frontend/vendor/bootstrap.min.js') }} "></script>
<script src=" {{ asset('js/frontend/vendor/jquery.flexslider-min.js') }}"></script>
<script src=" {{ asset('js/frontend/vendor/spectragram.js') }}"></script>
<script src="  {{ asset('js/frontend/vendor/owl.carousel.min.js') }}"></script>
<script src=" {{ asset('js/frontend/vendor/velocity.min.js') }}"></script>
<script src=" {{ asset('js/frontend/vendor/velocity.ui.min.js') }}"></script>
<script src=" {{ asset('js/frontend/vendor/bootstrap-datepicker.min.js') }}"></script>
<script src=" {{ asset('js/frontend/vendor/bootstrap-clockpicker.min.js') }}"></script>
<script src=" {{ asset('js/frontend/vendor/jquery.magnific-popup.min.js') }}"></script>
<script src=" {{ asset('js/frontend/vendor/isotope.pkgd.min.js') }}"></script>
<script src=" {{ asset('js/frontend/vendor/slick.min.js') }}"></script>
<script src=" {{ asset('js/frontend/vendor/wow.min.js') }}"></script>
<script src=" {{ asset('js/frontend/animation.js') }}"></script>
<script src=" {{ asset('js/frontend/vendor/vegas/vegas.min.js') }}"></script>
<script src=" {{ asset('js/frontend/vendor/jquery.mb.YTPlayer.js') }}"></script>
<script src=" {{ asset('js/frontend/vendor/jquery.stellar.js') }}"></script>
<script src=" {{ asset('js/frontend/main.js') }}"></script>
<script src=" {{ asset('js/frontend/vendor/mc/jquery.ketchup.all.min.js') }}"></script>
<script src=" {{ asset('js/vendor/mc/main.js') }}"></script>

</body>

</html>
