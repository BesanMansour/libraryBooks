<!doctype html>
<html lang="zxx" dir="rtl" class="theme-light">
    
<!-- Mirrored from templates.envytheme.com/ketan/rtl/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Mar 2023 19:00:42 GMT -->
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.rtl.min.css')}}">
        <!-- Animate CSS --> 
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/boxicons.min.css')}}">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
        <!-- Owl Carousel Default CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
        <!-- Imagelightbox CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/imagelightbox.min.css')}}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <!-- Dark CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/dark.css')}}">
        <!-- Responsive CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
        <!-- RTL CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/rtl.css')}}">
		
		<title>Ketan - Childcare & Kids School HTML Template</title>

        <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    </head>

    <body>
        
        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="loader">
                <div class="wrapper">
                    <div class="circle circle-1"></div>
                    <div class="circle circle-1a"></div>
                    <div class="circle circle-2"></div>
                    <div class="circle circle-3"></div>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="index.html">
                                <script type="text/javascript" style="display:none">
//<![CDATA[
window.__mirage2 = {petok:"kmUX7NBJk6GCX2XMKFCDqqor9A02VZeiGkzkyugAkp0-1800-0"};
//]]>
</script>
<script type="text/javascript" src="../../../ajax.cloudflare.com/cdn-cgi/scripts/04b3eb47/cloudflare-static/mirage2.min.js"></script>
<img data-cfsrc="{{asset('assets/img/logo.png')}}" class="black-logo" alt="image" style="display:none;visibility:hidden;"><noscript><img src="{{asset('assets/img/logo.png')}}" class="black-logo" alt="image"></noscript>
                                <img data-cfsrc="{{asset('assets/img/logo-2.png')}}" class="white-logo" alt="image" style="display:none;visibility:hidden;"><noscript><img src="{{asset('assets/img/logo-2.png')}}" class="white-logo" alt="image"></noscript>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img data-cfsrc="{{asset('assets/img/logo.png')}}" class="black-logo" alt="image" style="display:none;visibility:hidden;"><noscript><img src="{{asset('assets/img/logo.png')}}" class="black-logo" alt="image"></noscript>
                            <img data-cfsrc="{{asset('assets/img/logo-2.png')}}" class="white-logo" alt="image" style="display:none;visibility:hidden;"><noscript><img src="{{asset('assets/img/logo-2.png')}}" class="white-logo" alt="image"></noscript>
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">

                            <div class="offcanvas__search mb-0">
                                <form action="{{ route('customers.search') }}" method="GET">
                                    <input type="text" name="search"  placeholder="Search here">
                                    <button type="submit"><i class="flaticon-search"></i></button>
                                </form>
                            </div>

                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Home 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                            
                                        <li class="nav-item">
                                            <a href="{{route('customers.index')}}" class="nav-link">
                                                Home
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Books 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{route('customers.create')}}" class="nav-link">
                                                Books
                                            </a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('customers.contact')}}" class="nav-link">
                                        Contact
                                    </a>
                                </li>
                            </ul>

                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <div class="dropdown language-switcher d-inline-block">
                                        
    
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item d-flex align-items-center">
                                                <img data-cfsrc="{{asset('assets/img/english.png')}}" class="shadow-sm" alt="flag" style="display:none;visibility:hidden;"><noscript><img src="{{asset('assets/img/english.png')}}" class="shadow-sm" alt="flag"></noscript>
                                                <span>English</span>
                                            </a>
                                            <a href="#" class="dropdown-item d-flex align-items-center">
                                                <img data-cfsrc="{{asset('assets/img/arab.png')}}" class="shadow-sm" alt="flag" style="display:none;visibility:hidden;"><noscript><img src="{{asset('assets/img/arab.png')}}" class="shadow-sm" alt="flag"></noscript>
                                                <span>العربيّة</span>
                                            </a>
                                            <a href="#" class="dropdown-item d-flex align-items-center">
                                                <img data-cfsrc="{{asset('assets/img/germany.png')}}" class="shadow-sm" alt="flag" style="display:none;visibility:hidden;"><noscript><img src="{{asset('assets/img/germany.png')}}" class="shadow-sm" alt="flag"></noscript>
                                                <span>Deutsch</span>
                                            </a>
                                            <a href="#" class="dropdown-item d-flex align-items-center">
                                                <img data-cfsrc="{{asset('assets/img/portugal.png')}}" class="shadow-sm" alt="flag" style="display:none;visibility:hidden;"><noscript><img src="{{asset('assets/img/portugal.png')}}" class="shadow-sm" alt="flag"></noscript>
                                                <span>Português</span>
                                            </a>
                                            <a href="#" class="dropdown-item d-flex align-items-center">
                                                <img data-cfsrc="{{asset('assets/img/china.png')}}" class="shadow-sm" alt="flag" style="display:none;visibility:hidden;"><noscript><img src="{{asset('assets/img/china.png')}}" class="shadow-sm" alt="flag"></noscript>
                                                <span>简体中文</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="option-item">                             
                                    @if(Auth::user())
                                         <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                            <a  class="default-btn" href="route('logout')"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                     تسجيل الخروج
                                            </a>
                                            </form>

                                          @else
                                          <a class="default-btn" href="{{route('login')}}">تسجيل الدخول</a>  
                                    @endif
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <div class="dropdown language-switcher d-inline-block">
                                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span>Language <i class='bx bx-chevron-down'></i></span>
                                        </button>
    
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item d-flex align-items-center">
                                                <img data-cfsrc="{{asset('assets/img/english.png')}}" class="shadow-sm" alt="flag" style="display:none;visibility:hidden;"><noscript><img src="{{asset('assets/img/english.png')}}" class="shadow-sm" alt="flag"></noscript>
                                                <span>English</span>
                                            </a>
                                            <a href="#" class="dropdown-item d-flex align-items-center">
                                                <img data-cfsrc="{{asset('assets/img/arab.png')}}" class="shadow-sm" alt="flag" style="display:none;visibility:hidden;"><noscript><img src="{{asset('assets/img/arab.png')}}" class="shadow-sm" alt="flag"></noscript>
                                                <span>العربيّة</span>
                                            </a>
                                            <a href="#" class="dropdown-item d-flex align-items-center">
                                                <img data-cfsrc="{{asset('assets/img/germany.png')}}" class="shadow-sm" alt="flag" style="display:none;visibility:hidden;"><noscript><img src="{{asset('assets/img/germany.png')}}" class="shadow-sm" alt="flag"></noscript>
                                                <span>Deutsch</span>
                                            </a>
                                            <a href="#" class="dropdown-item d-flex align-items-center">
                                                <img data-cfsrc="{{asset('assets/img/portugal.png')}}" class="shadow-sm" alt="flag" style="display:none;visibility:hidden;"><noscript><img src="{{asset('assets/img/portugal.png')}}" class="shadow-sm" alt="flag"></noscript>
                                                <span>Português</span>
                                            </a>
                                            <a href="#" class="dropdown-item d-flex align-items-center">
                                                <img data-cfsrc="{{asset('assets/img/china.png')}}" class="shadow-sm" alt="flag" style="display:none;visibility:hidden;"><noscript><img src="{{asset('assets/img/china.png')}}" class="shadow-sm" alt="flag"></noscript>
                                                <span>简体中文</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <a href="#" class="default-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

            @yield('content')

        <!-- Start Footer Area -->
        <section class="footer-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="logo">
                                <h2>
                                    <a href="index.html">Ketan</a>
                                </h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-pinterest-alt'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Contact Us</h3>

                            <ul class="footer-contact-info">
                                <li>
                                    <i class='bx bxs-phone'></i>
                                    <span>Phone</span>
                                    <a href="tel:882569756">882-569-756</a>
                                </li>
                                <li>
                                    <i class='bx bx-envelope'></i>
                                    <span>Email</span>
                                    <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#e68e838a8a89a68d83928788c885898b"><span class="__cf_email__" data-cfemail="a4ccc1c8c8cbe4cfc1d0c5ca8ac7cbc9">[email&#160;protected]</span></a>
                                </li>
                                <li>
                                    <i class='bx bx-map'></i>
                                    <span>Address</span>
                                    175 5th Ave Premium Area, New York, NY 10010, United States
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget pl-5">
                            <h3>Activities</h3>
    
                            <ul class="quick-links">
                                <li>
                                    <a href="#">Maths Olympiad</a>
                                </li>
                                <li>
                                    <a href="#">Art Competition</a>
                                </li>
                                <li>
                                    <a href="#">English Novels</a>
                                </li>
                                <li>
                                    <a href="#">Science Competition</a>
                                </li>
                                <li>
                                    <a href="#">Teachers Day</a>
                                </li>
                                <li>
                                    <a href="#">World Kids Day</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Photo Gallery</h3>

                            <ul class="photo-gallery-list">
                                <li>
                                    <div class="box">
                                        <img data-cfsrc="{{asset('assets/img/footer-gallery/footer-gallery-1.jpg')}}" alt="image" style="display:none;visibility:hidden;"><noscript><img src="{{asset('assets/img/footer-gallery/footer-gallery-1.jpg')}}" alt="image"></noscript>
                                        <a href="#" target="_blank" class="link-btn"></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="box">
                                        <img data-cfsrc="{{asset('assets/img/footer-gallery/footer-gallery-2.jpg')}}" alt="image" style="display:none;visibility:hidden;"><noscript><img src="{{asset('assets/img/footer-gallery/footer-gallery-2.jpg')}}" alt="image"></noscript>
                                        <a href="#" target="_blank" class="link-btn"></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="box">
                                        <img data-cfsrc="{{asset('assets/img/footer-gallery/footer-gallery-3.jpg')}}" alt="image" style="display:none;visibility:hidden;"><noscript><img src="{{asset('assets/img/footer-gallery/footer-gallery-3.jpg')}}" alt="image"></noscript>
                                        <a href="#" target="_blank" class="link-btn"></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="box">
                                        <img data-cfsrc="{{asset('assets/img/footer-gallery/footer-gallery-4.jpg')}}" alt="image" style="display:none;visibility:hidden;"><noscript><img src="{{asset('assets/img/footer-gallery/footer-gallery-4.jpg')}}" alt="image"></noscript>
                                        <a href="#" target="_blank" class="link-btn"></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="box">
                                        <img data-cfsrc="{{asset('assets/img/footer-gallery/footer-gallery-5.jpg')}}" alt="image" style="display:none;visibility:hidden;"><noscript><img src="{{asset('assets/img/footer-gallery/footer-gallery-5.jpg')}}" alt="image"></noscript>
                                        <a href="#" target="_blank" class="link-btn"></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="box">
                                        <img data-cfsrc="{{asset('assets/img/footer-gallery/footer-gallery-6.jpg')}}" alt="image" style="display:none;visibility:hidden;"><noscript><img src="{{asset('assets/img/footer-gallery/footer-gallery-6.jpg')}}" alt="image"></noscript>
                                        <a href="#" target="_blank" class="link-btn"></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="box">
                                        <img data-cfsrc="{{asset('assets/img/footer-gallery/footer-gallery-1.jpg')}}" alt="image" style="display:none;visibility:hidden;"><noscript><img src="{{asset('assets/img/footer-gallery/footer-gallery-1.jpg')}}" alt="image"></noscript>
                                        <a href="#" target="_blank" class="link-btn"></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="box">
                                        <img data-cfsrc="{{asset('assets/img/footer-gallery/footer-gallery-2.jpg')}}" alt="image" style="display:none;visibility:hidden;"><noscript><img src="{{asset('assets/img/footer-gallery/footer-gallery-2.jpg')}}" alt="image"></noscript>
                                        <a href="#" target="_blank" class="link-btn"></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="box">
                                        <img data-cfsrc="{{asset('assets/img/footer-gallery/footer-gallery-3.jpg')}}" alt="image" style="display:none;visibility:hidden;"><noscript><img src="{{asset('assets/img/footer-gallery/footer-gallery-3.jpg')}}" alt="image"></noscript>
                                        <a href="#" target="_blank" class="link-btn"></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Footer Area -->

        <!-- Start Copy Right Area -->
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-area-content">
                    <p>
                        Copyright @<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script> Ketan. All Rights Reserved by
                        <a href="https://envytheme.com/" target="_blank">
                            EnvyTheme
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <!-- End Copy Right Area -->

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class='bx bx-up-arrow-alt'></i>
        </div>
        <!-- End Go Top Area -->

        <!-- dark version -->
        <div class="dark-version">
            <label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round"></span>
            </label>
        </div>
        <!-- dark version -->

        <!-- Jquery Slim JS -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <!-- Bootstrap JS -->
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Meanmenu JS -->
        <script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
        <!-- Owl Carousel JS -->
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <!-- Magnific Popup JS -->
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- Imagelightbox JS -->
		<script src="{{asset('assets/js/imagelightbox.min.js')}}"></script>
        <!-- Odometer JS -->
        <script src="{{asset('assets/js/odometer.min.js')}}"></script>
        <!-- Jquery Appear JS -->
        <script src="{{asset('assets/js/jquery.appear.min.js')}}"></script>
        <!-- Ajaxchimp JS -->
		<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
		<!-- Form Validator JS -->
		<script src="{{asset('assets/js/form-validator.min.js')}}"></script>
		<!-- Contact JS -->
        <script src="{{asset('assets/js/contact-form-script.js')}}"></script>
        <!-- Custom JS -->
        <script src="{{asset('assets/js/main.js')}}"></script>
        


    </body>

<!-- Mirrored from templates.envytheme.com/ketan/rtl/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Mar 2023 19:00:42 GMT -->
</html>