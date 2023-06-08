@extends('customer.layout_customer');
@section('content')
        <!-- Start Main Banner Area -->
        <div class="main-banner"> 
            <div class="main-banner-item">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="main-banner-content">
                                        <span>Play, Learn and Grow</span>
                                        <h1>Empowering Student Knowledge</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                                      
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="main-banner-image">
                                        <img data-cfsrc="assets/img/main-banner/education-girl.png" alt="image" style="display:none;visibility:hidden;"><noscript><img src="assets/img/main-banner/education-girl.png" alt="image"></noscript>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-banner-shape">
                <div class="banner-bg-shape">
                    <img data-cfsrc="assets/img/main-banner/banner-bg-shape-1.png" class="white-image" alt="image" style="display:none;visibility:hidden;"><noscript><img src="assets/img/main-banner/banner-bg-shape-1.png" class="white-image" alt="image"></noscript>
                    <img data-cfsrc="assets/img/main-banner/banner-bg-shape-1-dark.png" class="black-image" alt="image" style="display:none;visibility:hidden;"><noscript><img src="assets/img/main-banner/banner-bg-shape-1-dark.png" class="black-image" alt="image"></noscript>
                </div>

                <div class="shape-1">
                    <img data-cfsrc="assets/img/main-banner/banner-shape-1.png" alt="image" style="display:none;visibility:hidden;"><noscript><img src="assets/img/main-banner/banner-shape-1.png" alt="image"></noscript>
                </div>

                <div class="shape-2">
                    <img data-cfsrc="assets/img/main-banner/banner-shape-2.png" alt="image" style="display:none;visibility:hidden;"><noscript><img src="assets/img/main-banner/banner-shape-2.png" alt="image"></noscript>
                </div>

                <div class="shape-3">
                    <img data-cfsrc="assets/img/main-banner/banner-shape-3.png" alt="image" style="display:none;visibility:hidden;"><noscript><img src="assets/img/main-banner/banner-shape-3.png" alt="image"></noscript>
                </div>

                <div class="shape-4">
                    <img data-cfsrc="assets/img/main-banner/banner-shape-4.png" alt="image" style="display:none;visibility:hidden;"><noscript><img src="assets/img/main-banner/banner-shape-4.png" alt="image"></noscript>
                </div>
            </div>
        </div>
        <!-- End Main Banner Area -->

        <!-- Start Who We Are Area -->
        <section class="who-we-are ptb-100"></section>
        <!-- End Who We Are Area -->

        
        
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from codeskdhaka.com/html/kindedo-prev/kindedo/news.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 08:04:26 GMT -->
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Kindedo - News</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets3/img/logo/favicon.png')}}">

   <!-- CSS here -->
   <link rel="stylesheet" href="{{asset('assets3/css/bootstrap.css')}}">
   <link rel="stylesheet" href="{{asset('assets3/css/meanmenu.css')}}">
   <link rel="stylesheet" href="{{asset('assets3/css/animate.min.css')}}">
   <link rel="stylesheet" href="{{asset('assets3/css/swiper-bundle.css')}}">
   <link rel="stylesheet" href="{{asset('assets3/css/slick.css')}}">
   <link rel="stylesheet" href="{{asset('assets3/css/nouislider.css')}}">
   <link rel="stylesheet" href="{{asset('assets3/css/backtotop.css')}}">
   <link rel="stylesheet" href="{{asset('assets3/css/magnific-popup.css')}}">
   <link rel="stylesheet" href="{{asset('assets3/css/nice-select.css')}}">
   <link rel="stylesheet" href="{{asset('assets3/css/flaticon_kindedo.css')}}">
   <link rel="stylesheet" href="{{asset('assets3/css/font-awesome-pro.css')}}">
   <link rel="stylesheet" href="{{asset('assets3/css/odometer.css')}}">
   <link rel="stylesheet" href="{{asset('assets3/css/spacing.css')}}">
   <link rel="stylesheet" href="{{asset('assets3/css/main.css')}}">
</head>
<body>
   <!-- main area start here  -->
   <!-- main area start here  -->
<main>
    <!-- blog area start here  -->
        <!-- Start Class Area -->
        <section class="class-area bg-fdf6ed pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Books</span>
                    <h2>Latest books</h2>
                </div>

                <div class="row">
                
                @foreach($homes as $home)
                <div class="col-xl-4 col-lg-6 col-md-6 grid-item c-1 c-2 c-3">
                    <div class="bd-blog mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <a href="{{route('customers.edit',$home->id)}}">
                            <div class="bd-blog-thumb"><img src="{{asset('storage/'.$home->image)}}" alt="blog image">
                            </div>
                        </a>
                        <div class="bd-blog-content">
                            <div class="bd-blog-date">
                                <span>{{$home->release_date}}</span>
                            </div>
                            <div class="bd-blog-meta">
                                <span><i class="fas fa-user"></i> {{$home->author}} </span>
                            </div>
                            <span class="bd-blog-title">{{$home->title}}</span>
                         
                        </div>
                    </div>                   
                </div>
                @endforeach

            <!-- program slider dots pagination  -->
            <div class="bd-program-pagination bd-dots-pagination fill-pagination"></div>
         </div>
         <!-- <div class="bd-wave-wrapper bd-wave-wrapper-2">
            <div class="bd-wave bd-wave-2"></div>
            <div class="bd-wave bd-wave-2"></div>
         </div> -->

      </section>
      <!-- program area end here -->

      <section class="bd-erro-area pt-120 pb-120">
         
      </section>

       <section class="class-area bg-fdf6ed pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Books</span>
                    <h2>Latest books</h2>
                </div>

                <div class="row">
   @foreach($topBooks as $userBook)
    <p>عنوان الكتاب: {{ $userBook->number_books }}</p>
    <p>مؤلف الكتاب: {{ $userBook->book_id }}</p>
@endforeach






            <!-- program slider dots pagination  -->
            <div class="bd-program-pagination bd-dots-pagination fill-pagination"></div>
         </div>
         <!-- <div class="bd-wave-wrapper bd-wave-wrapper-2">
            <div class="bd-wave bd-wave-2"></div>
            <div class="bd-wave bd-wave-2"></div>
         </div> -->

      </section>



            <div class="class-shape">
                <div class="shape-1">
                    <img data-cfsrc="assets/img/class/class-shape-1.png" alt="image" style="display:none;visibility:hidden;"><noscript><img src="assets/img/class/class-shape-1.png" alt="image"></noscript>
                </div>
                <div class="shape-2">
                    <img data-cfsrc="assets/img/class/class-shape-2.png" alt="image" style="display:none;visibility:hidden;"><noscript><img src="assets/img/class/class-shape-2.png" alt="image"></noscript>
                </div>
            </div>
        </section>
    <!-- blog area end here  -->
</main>
<!-- main area end here  -->


</body>


<!-- Mirrored from codeskdhaka.com/html/kindedo-prev/kindedo/news.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 08:04:27 GMT -->
</html>

         <!-- Start Who We Are Area -->
        <section class="who-we-are ptb-100"></section>
        <!-- End Who We Are Area -->

 @endsection
