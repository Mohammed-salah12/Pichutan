<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pichutan &mdash; Edit Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <link rel="shortcut icon" href="{{ asset('front/favicon.ico') }}">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/superfish.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <script src="{{ asset('front/js/modernizr-2.6.2.min.js') }}"></script>
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
            <header id="fh5co-header-section">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                        <h1 id="fh5co-logo"><a href="{{ url('/') }}"><img src="{{ asset('front/images/icon_app.webp') }}" height="65"></a> Pichutan</h1>
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/cms/partners/sponsors') }}">Our Partners</a></li>
                                <li><a href="{{ url('/cms/about') }}">About Us and Events</a></li>
                                <li class="active"><a href="{{ url('cms/blog') }}">Blog</a></li>
                                <li><a href="{{ url('cms/contact') }}">Contact</a></li>
                                <li>
                                    <a href="services.html" class="fh5co-sub-ddown">More Information</a>
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
                    <h2>Edit Blog</h2>
                    <span style="margin-left: 20%; margin-right: 20%; margin-top: 5%; font-size: 21px;">
              <i>Update the necessary parts of the blog using the form below. Please understand that it will take some time for us to review your submission before it gets published.</i>
            </span>
                </div>
            </div>
        </div>

        <div id="fh5co-contact" class="animate-box">
            <div class="container">
                <form action="{{ route('updateblog', $blogs->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="author_name" class="form-control" placeholder="Name" value="{{ old('author_name', $blogs->author_name) }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email', $blogs->email) }}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="title" class="form-control" placeholder="Blog Title" value="{{ old('title', $blogs->title) }}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="content" class="form-control" cols="30" rows="7" placeholder="Blog content" required>{{ old('content', $blogs->content) }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="author_info" class="form-control" cols="30" rows="3" placeholder="About the Author" required>{{ old('author_info', $blogs->author_info) }}</textarea>
                            </div>
                        </div>
                        <p style="margin-left: 2%"><b>Add the blog image below.</b></p>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="file" name="image" class="form-control" id="blogImage" accept="image/*">
                                @if($blogs->image)
                                    <img src="{{ asset('storage/' . $blogs->image) }}" alt="Blog Image" style="max-width: 200px; margin-top: 10px;">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Update Blog" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div id="fh5co-start-project-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center animate-box">
                        <h2>Any questions?</h2>
                        <a href="{{url('cms/contact')}}" class="btn btn-primary">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('front/js/jquery.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('front/js/hoverIntent.js') }}"></script>
<script src="{{ asset('front/js/superfish.js') }}"></script>
<script src="{{ asset('front/js/main.js') }}"></script>
</body>
</html>
