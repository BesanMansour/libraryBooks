@extends('customer.layout_customer');
@section('content')    

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
    <section class="bd-blog-area pt-120 pb-120">
        <div class="container" >    
            <div class="row grid">
                
                @foreach($books as $book)
                <div class="col-xl-4 col-lg-6 col-md-6 grid-item c-1 c-2 c-3">
                    <div class="bd-blog mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <a href="{{route('customers.edit',$book->id)}}">
                            <div class="bd-blog-thumb"><img src="{{asset('storage/'.$book->image)}}" alt="blog image">
                            </div>
                        </a>
                        <div class="bd-blog-content">
                            <div class="bd-blog-date">
                                <span>{{$book->release_date}}</span>
                            </div>
                            <div class="bd-blog-meta">
                                <span><i class="fas fa-user"></i> {{$book->author}} </span>
                            </div>


                            <span class="bd-blog-title">{{$book->title}}</span>
                         
                        </div>
                    </div>                   
                </div>
                @endforeach
                
                <div class="pagination justify-content-center">
                  {{ $books->appends(request()->except('page'))->links() }}
                </div>

            </div>
        </div>
    </section>
    <!-- blog area end here  -->
</main>
<!-- main area end here  -->


</body>


<!-- Mirrored from codeskdhaka.com/html/kindedo-prev/kindedo/news.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 08:04:27 GMT -->
</html>

 @endsection
