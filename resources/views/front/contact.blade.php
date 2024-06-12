<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pichutan &mdash;Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <!-- Include SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- Other CSS includes -->
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/superfish.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">

    <script src="{{ asset('front/js/modernizr-2.6.2.min.js') }}"></script>
</head>

<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">
        <div id="fh5co-header">
            <div class="top">
                <div class="container">
                    <span> <a href="#"><i>Email:</i> bengaliyaabroad@gmail.com</a></span>
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
                                <li class="active"><a href="{{ url('cms/contact') }}">Contact</a></li>
                                <li>
                                    <a class="fh5co-sub-ddown">More Information</a>
                                    <ul class="fh5co-sub-menu">
                                        <li><a href="{{ url('cms/join/team') }}">Join the Team</a></li>
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
            <div class="fh5co-cover text-center" style="background-image: url('{{ asset('front/images/work-1.jpg') }}');">
                <div class="desc animate-box">
                    <h2>Contact Us</h2>
                    <span style="margin-left: 20%; margin-right: 20%; margin-top: 5%; font-size: 21px;"><i>Would you like to <b>engage with us to speak, host an event, partake in a festival, share your ideas, or explore other opportunities? </b> Rest assured, we are here to support you every step of the way. Kindly reach out to us via the contact form provided below so we can address your inquiries promptly. Please understand that due to the high volume of emails we receive daily, it may take some time for us to respond.</i></span>
                </div>
            </div>
        </div>
        <!-- END: header -->

        <div id="fh5co-contact" class="animate-box">
            <div class="container">
                <form action="{{ route('contacts.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="massage" class="form-control" cols="30" rows="7" placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- fh5co-work-section -->
        <div id="fh5co-start-project-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center animate-box">
                        <h2>Start a Project</h2>
                        <a href="{{ url('cms/contact') }}" class="btn btn-primary">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- START a project -->
    </div>
    <!-- END fh5co-page -->
</div>
<!-- END fh5co-wrapper -->

<!-- Include jQuery and SweetAlert JS -->
<script src="{{ asset('front/js/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    @if(session('success'))
    Swal.fire({
        title: 'Success!',
        text: '{{ session('success') }}',
        icon: 'success',
        confirmButtonText: 'OK'
    });
    @endif
</script>

<!-- Other JS includes -->
<script src="{{ asset('front/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('front/js/hoverIntent.js') }}"></script>
<script src="{{ asset('front/js/superfish.js') }}"></script>
<script src="{{ asset('front/js/main.js') }}"></script>

</body>
</html>
