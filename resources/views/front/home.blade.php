<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Pichutan &mdash;Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <!--
    //////////////////////////////////////////////////////

    FREE HTML5 TEMPLATE
    DESIGNED & DEVELOPED by FREEHTML5.CO

    Website: 		http://freehtml5.co/
    Email: 			info@freehtml5.co
    Twitter: 		http://twitter.com/fh5co
    Facebook: 		https://www.facebook.com/fh5co

    //////////////////////////////////////////////////////
     -->

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
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('front/css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.css')}}">
    <!-- Superfish -->
    <link rel="stylesheet" href="{{asset('front/css/superfish.css')}}">

    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">

    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Modernizr JS -->
    <script src="{{asset('front/js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{asset('front/js/respond.min.js')}}"></script>
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
                                <li   class="active"><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/cms/partners/sponsors') }}">Our Partners</a></li>
                                <li><a href="{{ url('/cms/about') }}">About Us and Events</a></li>
                                <li><a href="{{ url('cms/blog') }}">Blog</a></li>
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
            <div class="fh5co-cover text-center" style="background-image: url(images/work-1.jpg);">
                <div class="desc animate-box">
                    <h2>Empowering youth and cultivating creativity <b>together</b></h2>
                    <span style = "margin-left: 20%; margin-right: 20%; margin-top: 5%; font-size: 21px;"><i><b>Pichutan</b> is a subtle Bengali term that goes beyond mere nostalgia; it embodies a
							deep
							connection to the past, entwined with memories of individuals, places, food and more. At
							Pichutan, we
							cherish our past experiences while striving to enhance our homeland, <b>India.</b> </i></span>

                </div>
            </div>

        </div>
        <!-- end:header-top -->
        <div id="fh5co-work-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 animate-box">
                        <h3 class="heading-section">Gallery</h3>
                        <p>The gallery is currently being updated. Please check back later!</p>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="fh5co-grid animate-box"
                                     style="background-image: url({{asset('front/images/work-2.jpg')}});">
                                    <a class="image-popup text-center" href="#">
                                        <div class="prod-title">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="fh5co-grid animate-box"
                                     style="background-image: url({{asset('front/images/work-3.jpg')}});">
                                    <a class="image-popup text-center" href="#">
                                        <div class="prod-title">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="fh5co-grid animate-box"
                                     style="background-image: url({{asset('front/images/work-4.jpg')}});">
                                    <a class="image-popup text-center" href="#">
                                        <div class="prod-title">

                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="fh5co-grid animate-box"
                                     style="background-image: url({{asset('front/images/work-5.jpg')}});">
                                    <a class="image-popup text-center" href="#">
                                        <div class="prod-title">

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fh5co-work-section -->
        <div id="fh5co-services-section" class="border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 animate-box">
                        <h3 class="heading-section">What Others Think</h3>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="services animate-box">
                                    <h3>- Dr Rohit Kapoor | Pediatric Hematologist & Oncologist at Max
                                        Superspeciality Hospital Vaishali
                                    </h3>
                                    <p>I had a wonderful time collaborating with the Pichutan. Thanks for inviting
                                        me and all the very
                                        best for the future . You are a very bright set of young and enthusiastic
                                        students who have a
                                        bright future ahead.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="services animate-box">
                                    <h3>- Zainab | Youth founder of Cultural Controversies </h3>
                                    <p>Working with Pichutan in collaboration was so replenishing! I felt so
                                        relieved over the bond we
                                        shared for spreading desi culture and fostering communities. In our
                                        collaborative post shining
                                        light onto the peanut vendor who sang the infamous “Kacha Badam” song, we
                                        were effectively able to
                                        share Bengali culture to the public in a fun way!</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="services animate-box">
                                    <h3>-Diptangshu Ghosh | Youth Filmmaker </h3>
                                    <p>Pichutan has provided me with a lot of opportunities to take my films to
                                        people of different
                                        categories. Thank you for being such a great help to a young filmmaker like
                                        me. I think the thing
                                        that discourages youth from making films is lack of attention from people.
                                        Disability to reach
                                        people. Pichutan has helped me in that place. I have no words to explain my
                                        gratitude.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="services animate-box">
                                    <h3>-Ritabrata Roy | Secretary at Pichutan</h3>
                                    <p>Pichutan is a very nice program. I personally liked the idea + the president
                                        of Pichutan is creative and the way she is trying for us to get a better
                                        reach and connect more people is quite impressive. Pichutan hasn't achieved
                                        anything that big yet but it really has a good potential if we continue
                                        working on it for some time.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fh5co-services-section -->
        <div id="fh5co-content-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="fh5co-testimonial text-center animate-box">
                            <h2>About the Founder</h2>
                            <figure>
                                <img src="{{asset('front/images/Shantosmita1.png')}}" alt="user">
                            </figure>
                            <blockquote>
                                <p>I’m Shantosmita Biswas, an aspiring medical professional with a passion for
                                    science and technology. As an international student across the US, India, and
                                    Canada, I have keenly observed my community and the people around me. I noticed
                                    that many kids born abroad often disregarded their culture and mother tongue,
                                    sometimes spreading misinformation or trying to hide it. Additionally, there
                                    were groups who represented their culture in modern ways that left a misleading
                                    impression.
                                </p>
                            </blockquote>
                            <span>Shantosmita Biswas: Founder</span>
                            <br></br>
                            <br></br>
                            <p> Connect with me!<br>
                                <b><a href="https://www.instagram.com/megb1_/">Instagram </a> <br>
                                    <a href="https://www.youtube.com/@ShantosmitaBiswas">YouTube</a> <br>
                                    <a
                                        href="https://open.spotify.com/show/1Yq3JiSEjfqij9HlulUv0h?si=6b1e93b0e2d54000">Podcast
                                    </a> <br>
                                    <a href="https://www.linkedin.com/in/shantosmita/">LinkedIn </a> <br>
                                    <a href="https://medium.com/@shantosmita">Medium </a> <br>
                                </b>
                            </p>

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="fh5co-about-us animate-box">
                            <h2 class="text-center">My Story</h2>
                            <img src="{{asset('front/images/Shantosmita2.png')}}" alt="About Us">
                            <p> As someone who lived abroad without knowing how to speak Bengali and eventually
                                learned it fluently, I observed that both my peers and their parents were influenced
                                by the modern cultural wave. They often highlighted my fluency in Bengali,
                                contrasting it with their own struggles to grasp the language. During high school, I
                                often heard comments from other Indian students about my citizenship and Bengali
                                heritage, particularly one remark that sparked the idea for Pichutan: “You could
                                have been born in South India instead, why Kolkata?” This motivated me to create
                                Pichutan, a community initiative aimed at uniting international students to embrace
                                their culture and collectively represent all of India, starting with the development
                                of my home region, West Bengal.

                                Though I was hesitant to return to Kolkata as a child, I grew up appreciating the
                                unique opportunities I had because of my connection to the city. This deep
                                appreciation has influenced my work and inspired Pichutan, my little Bengali Para*.
                                Founding Pichutan as a teen introduced me to many new individuals and experiences,
                                and I am eager to share this success and continue building this community.


                                <br>
                            </p>
                            <p2> *Para- (Bengali: পাড়া, pronounced pa-ra)
                                Noun: A neighborhood or locality, often characterized by a close-knit community OR A
                                small, distinct area within a city or village where people live and interact with
                                each other regularly.</p2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fh5co-content-section -->
        <div id="fh5co-blog-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-12 animate-box">
                        <h3 class="heading-section">Impacts and Future Projects</h3>
                    </div>
                    <div class="col-lg-9 col-sm-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="fh5co-blog animate-box"
                                     style="background-image: url(images/blog-1.jpg);">
                                    <a class="image-popup">
                                        <div class="prod-title">
                                            <h3>Support</h3>
                                            <p>Discovering Appa’s Tea Stall on Instagram, I noticed its small following and online ordering system. After discussing the owner's ambition to expand his tea venture into serving tea in edible cups at a renowned café, I decided to support him. Teaming up with friends, we're creating a new website to boost his online presence and highlight his achievements. Stay tuned for updates on this evolving initiative!
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="fh5co-blog animate-box"
                                     style="background-image: url(images/blog-2.jpg);">
                                    <a class="image-popup">
                                        <div class="prod-title">
                                            <h3>Career Talks</h3>
                                            <p>Highlighting youth athletes and identifying areas for environmental
                                                improvement was one of our first youth engagement series on
                                                Instagram. Alongside this, we conducted interviews with medical
                                                professionals to provide insights into medical school. These
                                                initiatives have showcased the talented youth within our communities
                                                and highlighted the changes we can strive to implement.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="fh5co-blog animate-box"
                                     style="background-image: url(images/blog-3.jpg);">
                                    <a class="image-popup">
                                        <div class="prod-title">
                                            <h3>Resource</h3>
                                            <p>Ready, Set, FILM! Explore everything film-related with our young
                                                filmmakers and directors who frequently share their films with us to
                                                highlight and celebrate their achievements as broadcasting
                                                directors. Through Pichutan movie nights, these enthusiastic young
                                                filmmakers find a platform to showcase their work and gain
                                                inspiration to pursue further creative endeavors.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="fh5co-blog animate-box"
                                     style="background-image: url(images/blog-1.jpg);">
                                    <a class="image-popup">
                                        <div class="prod-title">
                                            <h3>International Reach</h3>
                                            <p>Starting college can be daunting, especially for international students with limited networking. But don’t worry, Pichutan helps. We select colleges with many Indian students and highlight activities to join, from Ivy League schools like Harvard to local ones like the University of Minnesota. We gather essential information for a smooth transition
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fh5co-blog-section -->
        <!--	<footer>
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Copyright 2016 Free Html5 <a href="#">Render</a>. All Rights Reserved. <br>Made with by <a
                                    href="http://freehtml5.co/">Freehtml5.co</a> / Demo Images: <a
                                    href="https://unsplash.com/">Unsplash</a></p>
                        </div>
                        <div class="col-md-6">
                            <ul class="footer-menu">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
-->

    </div>
    <!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->

<!-- jQuery -->


<script src="{{asset('front/js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{asset('front/js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('front/js/jquery.waypoints.min.js')}}"></script>
<!-- Superfish -->
<script src="{{asset('front/js/hoverIntent.js')}}"></script>
<script src="{{asset('front/js/superfish.js')}}"></script>

<!-- Main JS (Do not remove) -->
<script src="{{asset('front/js/main.js')}}"></script>

<!-- jQuery -->


<script>
    $(document).ready(function() {
        // Function to handle flash messages
        @if(Session::has('flash_message'))
        let flashMessage = @json(Session::get('flash_message'));
        if (flashMessage.type === 'success') {
            showSweetAlert(flashMessage.message);
        }
        @endif

        // Function to handle logout flash messages
        @if(Session::has('logout-flash_message'))
        let logoutFlashMessage = @json(Session::get('logout-flash_message'));
        if (logoutFlashMessage.type === 'success') {
            showSweetAlert(logoutFlashMessage.message);
        }
        @endif
    });

    // Function to show SweetAlert
    function showSweetAlert(message) {
        Swal.fire({
            title: "Success",
            text: message,
            icon: "success",
            showConfirmButton: false,
            timer: 2000 // Close after 2 seconds
        });
    }
</script>

</body>

</html>

=
