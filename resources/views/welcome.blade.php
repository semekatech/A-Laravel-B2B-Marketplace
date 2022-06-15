<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>Mybulksale(MBS)-Connecting Local Brands </title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('image/lo.png') }}" type="image/png">
        
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{ asset('webassets/css/animate.css') }}">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="{{ asset('webassets/css/magnific-popup.css') }}">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{ asset('webassets/css/slick.css') }}">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{ asset('webassets/css/LineIcons.css') }}">
        
    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="{{ asset('webassets/css/font-awesome.min.css') }}">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{ asset('webassets/css/bootstrap.min.css') }}">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{ asset('webassets/css/default.css') }}">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{ asset('webassets/css/style.css') }}">
    
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->    
   
   
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header class="header-area" >
        <div class="navbar-area" style="background:white;">
            <div class="container" >
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                         
                                <span style="color:black; font-size:30px;"><img src="{{ asset('image/lo.png') }} " style="width:200px;"/></span>
                           
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
                                <span class="toggler-icon" style="background:#51be78;"></span>
                                <span class="toggler-icon" style="background:#51be78;"></span>
                                <span class="toggler-icon" style="background:#51be78;"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto" >
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#facts">Contacts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#team">Careers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#blog">Blog</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            
                           
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
        
        <div id="home" class="header-hero bg_cover" style="background-image: url({{ asset('webassets/images/banner-bg.svg') }})">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="header-hero-content text-center">
                            <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s" style="color:black">Retail distribution workflow simplified</h3>
                      
                            <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s" >We help retailers source for bulk goods from top nearest wholesellers or distributors, place orders, 
                            make transactions and get their orders delivered within minutes by the nearest and available deliverers.</p>
                            <a href="#" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s" style="background: #51be78;">Ready? get Started</a>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="1.4s">
                            <img src="{{ asset('webassets/images/header-hero.png') }}" alt="hero">
                        </div> <!-- header hero image -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div id="particles-1" class="particles"></div>
        </div> <!-- header hero -->
    </header>
    
    <!--====== HEADER PART ENDS ======-->
    
    <!--====== ABOUT PART START ======-->
    
    <section id="about" class="about-area pt-70">
        <div class="container">
            <div class="row">
           
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line" style="background: #51be78;"></div>
                            <h3 class="title" style="color: #51be78;">For Retailers<span></span></h3>
                        </div> <!-- section title -->
                        <p class="text" style="color: black;">Create a pool of top wholesalers & distributors, easily source for bulk goods, place your orders, pay for them and 
                        have the orders delivered without delays.</p>
                        <a href="/loginretailer" class="main-btn" style="background: #51be78;">Join as a Retailer</a>
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="{{ asset('webassets/images/about3.svg') }}" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-1">
            <img src="{{ asset('webassets/images/about-shape-1.svg') }}" alt="shape">
        </div>
    </section>
    <section class="about-area pt-70">
        <div class="about-shape-2">
            <img src="{{ asset('webassets/images/about-shape-2.svg') }}" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-last">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line" style="background: #51be78;"></div>
                            <h3 class="title" style="color: #51be78;">For Wholesalers & Distributors <span></h3>
                        </div> <!-- section title -->
                        <p class="text">Connect with local retailers and offer bulk goods to them and connect them with deliverers to
                         get their orders delivered with no delays.</p>
                        <a href="/logindistributor" class="main-btn" style="background: #51be78;">Join as a Wholesalers or Distributors</a>
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="{{ asset('webassets/images/about2.svg') }}" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <section id="about" class="about-area pt-70">
        <div class="container">
            <div class="row">
           
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line" style="background: #51be78;"></div>
                            <h3 class="title" style="color: #51be78;">For Deliverers<span></span></h3>
                        </div> <!-- section title -->
                        <p class="text" style="color: black;">A job opportunity to earn income as you deliver orders to retailers from top Wholesalers & Distributors.</p>
                        <a href="#" class="main-btn" style="background: #51be78;">Join as a Deliverer</a>
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="{{ asset('webassets/images/about3.svg') }}" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-1">
            <img src="{{ asset('webassets/images/about-shape-1.svg') }}" alt="shape">
        </div>
    </section>
    <section class="about-area pt-70">
        <div class="about-shape-2">
            <img src="{{ asset('webassets/images/about-shape-2.svg') }}" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-last">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"style="background: #51be78;"></div>
                            <h3 class="title" style="color: #51be78;">For Field agents <span></h3>
                        </div> <!-- section title -->
                        <p class="text">Be your own boss and earn money promoting Wholesalers & Distributors products and helping retailers place orders and restock.</p>
                        <a href="#" class="main-btn" style="background: #51be78;">Join as an Agent</a>
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="{{ asset('webassets/images/about2.svg') }}" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== SERVICES PART START ======-->
    
    <section id="features" class="services-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto" style="background: #51be78;"></div>
                        <h3 class="title" style="color: #51be78;">Why <span> Mybulksale</span></h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                       
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#" style="color: #51be78;">Easy Interface</a></h4>
                            <p class="text">Our easy to use interface allows informal merchants to interact with our system comfortably</p>
                          
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#" style="color: #51be78;">Top products</a></h4>
                            <p class="text">Mybulksale offers collection of products from top Wholesalers & Distributors to help you easily source for stock.</p>
                          
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#" style="color: #51be78;">Quick Delivery</a></h4>
                            <p class="text">Our pool of top deliverers makes products delivery faster and without delays. </p>
                            
                        </div>
                    </div> <!-- single services -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== SERVICES PART ENDS ======-->
    
    
    
    
    <!--====== VIDEO COUNTER PART START ======-->
    
    <section id="facts" class="video-counter pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="video-content mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img class="dots" src="{{ asset('webassets/images/dots.svg') }}" alt="dots">
                        <div class="video-wrapper">
                            <div class="video-image">
                                <img src="{{ asset('webassets/images/video.png') }}" alt="video">
                            </div>
                            <div class="video-icon">
                                <a href="https://www.youtube.com/watch?v=r44RKWyfcFw" class="video-popup"><i class="lni-play"></i></a>
                            </div>
                        </div> <!-- video wrapper -->
                    </div> <!-- video content -->
                </div>
                <div class="col-lg-6">
                    <div class="counter-wrapper mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="counter-content">
                            <div class="section-title">
                                <div class="line" style="background: #51be78;"></div>
                                <h3 class="title" style="color: #51be78;">Cool facts <span> about Mybulksale</span></h3>
                            </div> <!-- section title -->
                            <p class="text">Our mission is help connect local brands and create job opportunities to the community.</p>
                        </div> <!-- counter content -->
                        <div class="row no-gutters">
                            <div class="col-4">
                                <div class="single-counter counter-color-1 d-flex align-items-center justify-content-center" >
                                    <div class="counter-items text-center" >
                                        <span class="count"><span class="counter">12</span>K</span>
                                        <p class="text">Retailers</p>
                                    </div>
                                </div> <!-- single counter -->
                            </div>
                            <div class="col-4">
                                <div class="single-counter counter-color-2 d-flex align-items-center justify-content-center">
                                    <div class="counter-items text-center">
                                        <span class="count"><span class="counter">87</span>K</span>
                                        <p class="text">Wholesalers & Distributors</p>
                                    </div>
                                </div> <!-- single counter -->
                            </div>
                            <div class="col-4">
                                <div class="single-counter counter-color-3 d-flex align-items-center justify-content-center">
                                    <div class="counter-items text-center">
                                        <span class="count"><span class="counter">4.8</span></span>
                                        <p class="text">Jobs Created</p>
                                    </div>
                                </div> <!-- single counter -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- counter wrapper -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== VIDEO COUNTER PART ENDS ======-->
    
    
    
    
    
    <!--====== FOOTER PART START ======-->
    
    <footer id="footer" class="footer-area pt-120"  >
        <div class="container" >
            <div class="subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subscribe-content mt-45">
                            <h2 class="subscribe-title"><span>Subscribe to our weekly Newsletter</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="subscribe-form mt-50">
                            <form action="#">
                                <input type="text" placeholder="Enter eamil">
                                <button class="main-btn" style="background: #51be78;">Subscribe</button>
                            </form>
                        </div>
                    </div>
                 </div> <!-- row -->
            </div> <!-- subscribe area -->
            <div class="footer-widget pb-100"  >
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <a class="logo" href="#">
                              <img src="{{ asset('image/lo.png') }} " style="width:200px;"/>
                            </a>
                            <p class="text">We help retailers source for bulk goods from top nearest Wholesalers & Distributors, place orders, 
                            make transactions and get their orders delivered within minutes by the nearest and available deliverers.</p>
                            <ul class="social">
                                <li><a href="#"><i class="lni-facebook-filled" style="color:#51be78;"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-filled" style="color:#51be78;"></i></a></li>
                                <li><a href="#"><i class="lni-instagram-filled" style="color:#51be78;"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original" style="color:#51be78;"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-7">
                        <div class="footer-link d-flex mt-50 justify-content-md-between">
                            <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="footer-title">
                                    <h4 class="title" style="color:#51be78;">Quick Link</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="#">Road Map</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Refund Policy</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Pricing</a></li>
                                </ul>
                            </div> <!-- footer wrapper -->
                            <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                                <div class="footer-title">
                                    <h4 class="title"style="color:#51be78; ;" >Resources</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Page</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div> <!-- footer wrapper -->
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-5">
                        <div class="footer-contact mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                            <div class="footer-title">
                                <h4 class="title" style="color:#51be78; ;">Contact Us</h4>
                            </div>
                            <ul class="contact">
                                <li>+254705030613</li>
                                <li>info@mybulsale.com</li>
                                <li>www.mybulk.com</li>
                                <li>701, Nairobi <br> Kenya
                        </div> <!-- footer contact -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
           
        </div> <!-- container -->
        <div id="particles-2"></div>
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->   
    
    <!--====== PART START ======-->
    
<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div>
            </div>
        </div>
    </section>
-->
    
    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="{{ asset('webassets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('webassets/js/vendor/modernizr-3.7.1.min.js') }}"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="{{ asset('webassets/js/popper.min.js') }}"></script>
    <script src="{{ asset('webassets/js/bootstrap.min.js') }}"></script>
    
    <!--====== Plugins js ======-->
    <script src="{{ asset('webassets/js/plugins.js') }}"></script>
    
    <!--====== Slick js ======-->
    <script src="{{ asset('webassets/js/slick.min.js') }}"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="{{ asset('webassets/js/ajax-contact.js') }}"></script>
    
    <!--====== Counter Up js ======-->
    <script src="{{ asset('webassets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('webassets/js/jquery.counterup.min.js') }}"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('webassets/js/jquery.magnific-popup.min.js') }}"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="{{ asset('webassets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('webassets/js/scrolling-nav.js') }}"></script>
    
    <!--====== wow js ======-->
    <script src="{{ asset('webassets/js/wow.min.js') }}"></script>
    
    <!--====== Particles js ======-->
    <script src="{{ asset('webassets/js/particles.min.js') }}"></script>
    
    <!--====== Main js ======-->
    <script src="{{ asset('webassets/js/main.js') }}"></script>
    
</body>

</html>
