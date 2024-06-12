<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Blog</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('front/favicon.ico') }}">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/superfish.css') }}">
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
                    <h2>Create a Blog</h2>
                    <span style="margin: 0 20%; font-size: 21px;">
                        <i>Submit all of the parts of the blog to the form below. Please understand that it will take some time for us to review your submission before it gets published.</i>
                    </span>
                </div>
            </div>
        </div>
        <!-- END: header -->

        <div id="fh5co-contact" class="animate-box">
            <div class="container">
                <form action="{{ route('storeblog') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="author_name" class="form-control" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Author Email" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="title" class="form-control" placeholder="Blog Title" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="content" class="form-control" cols="30" rows="7" placeholder="Blog Content" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="author_info" class="form-control" cols="30" rows="3" placeholder="About the Author" required></textarea>
                            </div>
                        </div>
                        <p style="margin-left: 2%"><b>Add the blog image below.</b></p>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="file" name="image" class="form-control" id="blogImage" accept="image/*" required>
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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- fh5co-work-section -->
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
