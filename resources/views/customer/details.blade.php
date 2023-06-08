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
      <!-- breadcrumb area start here -->
      <section class="bd-breadcrumb-area p-relative fix theme-bg">
         <!-- breadcrumb background image -->
         <div class="bd-breadcrumb-bg" data-background="{{asset('assets3/img/bg/breadcrumb-bg.jpg')}}"></div>
         <div class="bd-breadcrumb-wrapper mb-60 p-relative">
            <div class="container">
               <div class="bd-breadcrumb-shape d-none d-sm-block p-relative">
                  <div class="bd-breadcrumb-shape-1">
                     <img src="{{asset('assets3/img/shape/curved-line-2.png')}}" alt="img not found!">
                  </div>
                  <div class="bd-breadcrumb-shape-2">
                     <img src="{{asset('assets3/img/shape/white-curved-line.png')}}" alt="img not found!">
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-xl-10">
                     <div class="bd-breadcrumb d-flex align-items-center justify-content-center">
                        <div class="bd-breadcrumb-content text-center">
                           <h1 class="bd-breadcrumb-title">Book Details</h1>
                           <div class="bd-breadcrumb-list">
                              <span><a href="{{route('customers.index')}}"><i class="flaticon-hut"></i>Home</a></span>
                              <span>Book Details</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="bd-wave-wrapper bd-wave-wrapper-3">
            <div class="bd-wave bd-wave-3"></div>
            <div class="bd-wave bd-wave-3"></div>
         </div>
      </section>
      <!-- breadcrumb area end here  -->

      <!-- shop details area start  -->
      <section class="shop-details-area pt-120 pb-90">
         <div class="container">
            <div class="row wow fadeInUp" data-wow-delay=".3s">
               <div class="col-lg-6">
                  <div class="product-d-img-tab-wrapper mb-60">                   
                     <div class="product-d-img-tab">
                        <div class="tab-content" id="productDetailsTab">
                           <div class="tab-pane fade active show" id="pro-1" role="tabpanel"
                              aria-labelledby="pro-1-tab">
                              <img class="active" src="{{asset('storage/'.$details->image)}}" alt="img not found">
                           </div>
                          
                        </div>
                     </div>
                  </div>
            
               </div>

            
               <div class="col-lg-6">
                  <div class="product-side-info mb-60">
                    <div class="d-flex flex-column font-weight-bold">
                        <span class="text-muted" style="font-size: 14px;">عنوان الكتاب</span>
                        <h4 class="product-name">{{$details->title}}</h4>
                    </div>

                     <div class="product-price">
                        
                    <div class="d-flex flex-column font-weight-bold">
                        <span class="text-muted" style="font-size: 14px;">سعر الكتاب</span>
                        <span class="price-now">{{$details->price}}</span>

                    </div>

                     </div>

                     
                        
                    <div class="d-flex flex-column font-weight-bold">
                        <span class="text-muted" style="font-size: 14px;">وصف الكتاب</span>
                        
                        <p class="mb-30">{{$details->description}} </p>

                    </div>
                     
                  <div class="product-quantity-cart mb-30">
                     <div class="product-quantity-form">
                        <form action="#">
                           <button class="cart-minus" onclick="decreaseQuantity()">
                              <i class="far fa-minus"></i>
                           </button>
                           <input id="quantity-input" class="cart-input" type="text" value="1">
                           <button class="cart-plus" onclick="increaseQuantity()">
                              <i class="far fa-plus"></i>
                           </button>
                        </form>
                     </div>

   <script>
      function increaseQuantity() {
         var quantityInput = document.getElementById("quantity-input");
         var currentQuantity = parseInt(quantityInput.value);
         var newQuantity = currentQuantity + 1;
         quantityInput.value = newQuantity;
      }

      function decreaseQuantity() {
         var quantityInput = document.getElementById("quantity-input");
         var currentQuantity = parseInt(quantityInput.value);
         if (currentQuantity > 1) {
            var newQuantity = currentQuantity - 1;
            quantityInput.value = newQuantity;
         }
      }
   </script>

   <form action="{{ route('customers.store', ['user_id' => Auth::id(), 'book_id' => $details->id, 'title' => $details->title]) }}" method="POST">
      @csrf
      @method('POST')
      <input type="hidden" name="number_books" id="number-books-input">
      <button type="submit" class="bd-cart-btn" onclick="setNumberBooks()">
         <i class="fas fa-shopping-basket"></i>
         Add to Cart
      </button>
   </form>
</div>



<script>
   function setNumberBooks() {
      var quantityInput = document.getElementById("quantity-input");
      var numberBooksInput = document.getElementById("number-books-input");
      numberBooksInput.value = quantityInput.value;
   }
</script>

                    
                     <div class="product-d-meta author mb-10">
                        <span>Author:</span>
                        <span>{{$details->author}}</span>
                     </div>

                     <div class="product-d-meta ockcategories mb-10">
                        <span>Categories:</span>
               
                            <span>{{ $details->category->category }}</span>

                     </div>
                     <div class="product-d-meta tags mb-10">
                        <span>Release Date:</span>
                        <span>{{$details->release_date}}</span>
                     </div>
                     
                  </div>
               </div>
            </div>

         </div>
      </section>
      <!-- shop details area end  -->

     
   </main>
   <!-- main area end here  -->

</body>


<!-- Mirrored from codeskdhaka.com/html/kindedo-prev/kindedo/news.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 08:04:27 GMT -->
</html>
 @endsection
