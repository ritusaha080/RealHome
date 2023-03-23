<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Home/ Blog-list</title>
    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/odometer-theme-default.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/slick.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/default.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/sass/style.css">

    <script src="{{asset('frontend')}}/js/jquery.min.js"></script>
</head>
<body>

    <!-- header section start  -->
    <header class="header-area">
        <!-- menu area start  -->
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="index.html"><img src="{{asset('frontend')}}/images/logo.png" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-8 col-8">
                        <div class="menu-section">
                            <a href="javascript:void(0)" class="mobile-btn"><i class="fa fa-bars" aria-hidden="true"></i></a>
                            <div class="responsive-menu">
                                <ul class="menu">
                                    <li><a href="{{route('homepage.get')}}">Home</a> </li>
                                    <li><a href="{{route('about.get')}}">About Us</a></li>
                                    <li><a href="{{route('property.get')}}">Property</a>
                                    </li>
                                    <li><a href="{{route('frontend.post')}}">Our Blog</a>
                                        {{-- <ul class="submenu">
                                            <li><a href="blog-post.html">Blog Post</a></li>
                                        </ul> --}}
                                    </li>
                                    <li><a href="{{route('contact.view')}}">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-4">
                        <ul class="social">
                            <li><a href="{{ getFacebookLink() }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="{{ getYoutubeLink()}}"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="{{ getEmailLink()}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="blank-div"></div>
        <!-- menu area end  -->
    </header>


    @yield('blog.content')



    <footer class="footer-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12 mb-30">
                    <div class="footer-title mb-20">
                        <img src="{{asset('frontend')}}/images/footerlogo.png" alt="">
                    </div>
                    <ul class="social footer-social">
                        <li><a href="{{ getFacebookLink() }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="{{ getYoutubeLink()}}"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>

                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="{{ getEmailLink()}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-12 mb-30">
                    <div class="footer-title">
                        <h5>Navigation</h5>
                    </div>
                    <ul class="footer-widget">
                        <li><a href="index.html">Home</a> </li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="property.html">Property</a></li>
                        <li><a href="#">Gallary</a></li>
                        <li><a href="blog.html">Our Blog</a></li>
                        <li><a href="contact.html">Contacts</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-12 mb-30">
                    <div class="footer-title">
                        <h5>For Clients</h5>
                    </div>
                    <ul class="footer-widget">
                        <li><a href="#">Sign in</a></li>
                        <li><a href="#">Forum</a></li>
                        <li><a href="#">Promotions</a></li>
                        <li><a href="#">News</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-12 mb-30">
                    <div class="footer-title">
                        <h5>Contact us</h5>
                    </div>
                    <ul class="footer-widget footer-contact">
                        @foreach ( getSettingsData(['facebook','youtube','email','freephones']) as $settings_data )
                        <li>{{$settings_data}}</li>
                        @endforeach
                        <li>Telephone: +1 959 603 6035</li>
                        <li>FAX: +1 800 559 6580</li>
                        <li class="mail">info@realhome.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section end  -->



    <script src="{{asset('frontend')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend')}}/js/jquery-plugin-collection.js"></script>
    <script src="{{asset('frontend')}}/js/script.js"></script>
</body>
</html>
