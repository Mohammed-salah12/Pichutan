<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog->title }}</title>
    <!-- Include CSS stylesheets -->
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/superfish.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
</head>
<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">
        <div id="fh5co-header">
            <div class="top">
                <div class="container">
                    <span><a href="#"><i>Email:</i> bengaliyaabroad@gmail.com</a></span>
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
                                <li class="active"><a href="{{ url('cms/blog') }}">Blog</a></li>
                                <li><a href="{{ url('cms/contact') }}">Contact</a></li>
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
            <div class="fh5co-cover text-center" style="background-image: url({{ asset('front/images/work-1.jpg') }});">
                <div class="desc animate-box">
                    <h2>{{ $blog->title }}</h2>
                    <p><strong>Author:</strong> {{ $blog->author_name }}</p>
                    <p><strong>Email:</strong> {{ $blog->email }}</p>
                </div>
            </div>
        </div>
        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">

        <div id="fh5co-contact" class="animate-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p><strong>Content:</strong> {{ $blog->content }}</p>
                        <p><strong>About the Author:</strong> {{ $blog->author_info }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-start-project-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center animate-box">
                        <h2>Any questions?</h2>
                        <a href="{{ url('cms/contact') }}" class="btn btn-primary">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
