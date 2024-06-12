<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pichutan &mdash; Join the Team</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('front/css/icomoon.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
    <!-- Superfish -->
    <link rel="stylesheet" href="{{ asset('front/css/superfish.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('front/js/modernizr-2.6.2.min.js') }}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{ asset('front/js/respond.min.js') }}"></script>
    <![endif]-->

</head>

<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">
        <div id="fh5co-header">
            <div class="top">
                <div class="container">
                    <span> <a href="#"><i>Email: </i> bengaliyaabroad@gmail.com</a></span>

                </div>
            </div>
            <!-- end:top -->
            <header id="fh5co-header-section">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                        <h1 id="fh5co-logo"><a href="index.html"><img src="{{ asset('front/images/icon_app.webp') }}" height="65"></a> Pichutan</h1>
                        <!-- START #fh5co-menu-wrap -->
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/cms/partners/sponsors') }}">Our Partners</a></li>
                                <li><a href="{{ url('/cms/about') }}">About Us and Events</a></li>
                                <li><a href="{{ url('cms/blog') }}">Blog</a></li>
                                <li><a href="{{ url('cms/contact') }}">Contact</a></li>
                                <li>
                                    <a class="fh5co-sub-ddown">More Information</a>
                                    <ul class="fh5co-sub-menu">
                                        <li class="active"><a href="{{ url('cms/join/team') }}">Join the Team</a></li>
                                        <li><a href="{{ url('cms/social/media') }}">Social Media</a></li>
                                    </ul>
                                </li>
                                @auth('website-user')
                                    <li>
                                        <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    </li>
                                @else
                                    <li><a href="{{ route('user.login') }}">Login</a></li>
                                    <li><a href="{{ route('user.register') }}">Register</a></li>
                                @endauth
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>

        </div>


        <div class="fh5co-hero">
            <div class="fh5co-overlay"></div>
            <div class="fh5co-cover text-center" style="background-image: url({{ asset('front/images/work-1.jpg') }});">
                <div class="desc animate-box">
                    <h2>Be a Part of the Team</h2>
                    <span style = "margin-left: 20%; margin-right: 20%; margin-top: 5%; font-size: 21px;"><i>Pichutan welcomes passionate individuals from <b>all ethnicities, ages, and statuses</b> to join our community and learn with us. </i></span>
                </div>
            </div>

        </div>
        <!-- END: header -->

        <div id="fh5co-services">
            <div class="container">
                <div class="row row-bottom-padded-lg">
                    <div class="col-md-12 animate-box">
                        <p class="lead"><b>Would you like to engage with us to speak, host an event, partake in a festival, share your ideas, or explore other opportunities?</b> Rest assured, we are here to support you every step of the way.
                            <br></br>
                            Currently, we conduct our recruitment process through the link provided below. After filling out the form and submitting it, please wait for a response from our approved email address. <i>Please understand that due to the high volume of emails we receive daily, it may take some time for us to respond.</i> We look forward to having you become a valuable member of our team soon.
                            <br></br>
                            <a href = "https://forms.gle/jdjVGC6AqshtqQys6" class
                            = "Apply-text"> <b style = "text-align: center; font-size: 35px;">CLICK HERE TO APPLY</b> </a>
                            <br></br> <b><i>
                                    *Our community operates on a volunteer-basis, meaning that all contributions are made out of goodwill and dedication to our cause, rather than monetary compensation. Individuals within the community hold various roles, including directors who work with teams. While there is an opportunity for advancement to specific roles, there is no financial remuneration associated with these positions. </i>
                            </b>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- fh5co-work-section -->
        <div id="fh5co-start-project-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center animate-box">
                        <h2>ANY QUESTIONS?</h2>
                        <a href="{{url('cms/contact')}}" class="btn btn-primary">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- START a project -->
    </div>
    <!-- END fh5co-page -->
</div>
<!-- END fh5co-wrapper -->

<!-- jQuery -->
<script src="{{ asset('front/js/jquery.min.js') }}"></script>
<!-- jQuery Easing -->
<script src="{{ asset('front/js/jquery.easing.1.3.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<!-- Waypoints -->
<script src="{{ asset('front/js/jquery.waypoints.min.js') }}"></script>
<!-- Superfish -->
<script src="{{ asset('front/js/hoverIntent.js') }}"></script>
<script src="{{ asset('front/js/superfish.js') }}"></script>

<!-- Main JS (Do not remove) -->
<script src="{{ asset('front/js/main.js') }}"></script>
</body>

</html>
