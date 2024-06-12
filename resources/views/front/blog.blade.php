<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('front/css/icomoon.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">


    <!-- Superfish -->

    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('front/css/superfish.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <style>
        div.middle {
            max-width: 600px;
            margin: auto;
        }

        .b-note p {
            text-align: justify;
        }

        .author-info {
            text-align: justify;
        }

        .truncate {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 3; /* number of lines to show */
            -webkit-box-orient: vertical;
        }
    </style>
</head>
<body>
<section>
    <div id="fh5co-header">
        <div class="top">
            <div class="container">
                <span><a href="#"><i>Email: </i> bengaliyaabroad@gmail.com</a></span>
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
                            <li  class="active"><a href="{{ url('cms/blog') }}">Blog</a></li>
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
                <h2><b>OUR</b> blog</h2>
                <span style="margin-left: 20%; margin-right: 20%; margin-top: 5%; font-size: 21px;"><i>Hey, this space is all yours—yes, really! Don’t believe us? Go ahead, spread your wings and let your imagination soar. Check out our blogs, and feel free to submit yours using the button by the end of this page.</i></span>
                <a href="{{ url('cms/create/blog') }}" class="btn btn-primary">Create a blog</a>

            </div>
        </div>
    </div>

    <div class="b-blog">
        <div class="b-main">
            @foreach ($blogs as $blog)
                <div class="b-image-content">
                    <img class="b-img" src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" style="width: 1000px; height: 560px; display: block; margin-left: 0; margin-right: auto;">
                </div>
                <div class="b-note">
                    <div class="b-title">
                        <p class="category">Read</p>
                        <h1 class="blog-title">{{ $blog->title }}</h1>
                        <div class="b-head">
                            <div class="blog-date">
                                <i class="fa-solid fa-calendar-days"></i>
                                <p style="font-size: 1.7rem; color: white; text-transform: uppercase; font-weight: 600;">{{ $blog->date }}</p>
                            </div>
                            <div class="author-name">
                                <i class="fa-solid fa-user"></i>
                                <p style="font-size: 1.7rem; color: white; text-transform: uppercase; font-weight: 600;">{{ $blog->author_name }}</p>
                            </div>
                        </div>
                        <br></br>

                        <div class="col-md-12 animate-box middle">
                            <h4 class="author-name">By {{ $blog->author_name }}</h4>
                            <p class="truncate">{{ $blog->content }}</p>

                            <h1>About the Author</h1>
                            <p class="author-info truncate">{{ $blog->author_info }}</p>

                            <a href="{{ url('cms/blog/' . $blog->id) }}" class="btn btn-primary">Read More</a>
                            @auth('website-user')
                                @if (auth('website-user')->user()->id == $blog->author_id)
                                    <a href="{{ route('editblog', $blog->id) }}" class="btn btn-secondary">Edit</a>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<div id="fh5co-start-project-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center animate-box">
                <a href="{{ url('cms/create/blog') }}" class="btn btn-primary">Create a blog</a>
            </div>
        </div>
    </div>
</div>
<script src="https://kit.fontawesome.com/14d320e4a1.js" crossorigin="anonymous"></script>


<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        @if(session()->has('flash_message'))
        let flashMessage = @json(session('flash_message'));
        if (flashMessage.type === 'success') {
            Swal.fire({
                title: "Success",
                text: flashMessage.message,
                icon: "success",
                button: "OK",
                className: "success-flash"
            });
        } else if (flashMessage.type === 'error') {
            Swal.fire({
                title: "Error",
                text: flashMessage.message,
                icon: "error",
                button: "OK",
                className: "error-flash"
            });
        }
        @endif
    });

    document.addEventListener('DOMContentLoaded', (event) => {
        @if(session()->has('update-flash_message'))
        let flashMessage = @json(session('update-flash_message'));
        if (flashMessage.type === 'success') {
            Swal.fire({
                title: "Success",
                text: flashMessage.message,
                icon: "success",
                button: "OK",
                className: "success-flash"
            });
        } else if (flashMessage.type === 'error') {
            Swal.fire({
                title: "Error",
                text: flashMessage.message,
                icon: "error",
                button: "OK",
                className: "error-flash"
            });
        }
        @endif
    });
</script>


</body>
</html>
