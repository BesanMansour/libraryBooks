
@extends('customer.layout_customer');
@section('content')        
        

<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from codeskdhaka.com/html/kindedo-prev/kindedo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 08:04:29 GMT -->
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Kindedo - Contact</title>
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
                           <h1 class="bd-breadcrumb-title">Contact Us</h1>
                           <div class="bd-breadcrumb-list">
                              <span><a href="index.html"><i class="flaticon-hut"></i>Kindedo</a></span>
                              <span>Contact Us</span>
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

      <!-- contact info area start here -->
      <section class="bd-contact-info-area pt-120 pb-95">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="bd-contact-info-wrap mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                     <div class="bd-contact-info">
                        <div class="bd-contact-info-content">
                           <div class="bd-contact-info-icon cat-1">
                              <a href="tel:9072003462"><i class="flaticon-phone-call"></i></a>
                           </div>
                           <h6><a href="tel:9072003462">907-200-3462</a></h6>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="bd-contact-info-wrap mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                     <div class="bd-contact-info">
                        <div class="bd-contact-info-content">
                           <div class="bd-contact-info-icon cat-2">
                              <a href="#"><i class="flaticon-location-pin"></i></a>
                           </div>
                           <h6><a href="#">14/A, Kilix Home Tower</a></h6>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="bd-contact-info-wrap mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                     <div class="bd-contact-info">
                        <div class="bd-contact-info-content">
                           <div class="bd-contact-info-icon cat-3">
                              <a href="mailto:support@kindedo.com"><i class="flaticon-email"></i></a>
                           </div>
                           <h6><a href="mailto:support@kindedo.com">support@kindedo.com</a></h6>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- contact info area end here-->

      <!-- contact area start here  -->
      <section class="bd-contact-area pb-60">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 mb-60">
                  <div class="bd-contact-form wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                     <h3 class="bd-contact-form-title mb-25">Contact Us Right Here</h3>
                     <form action="#">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="bd-contact-input mb-30">
                                 <label for="name">Name <sup><i class="fa-solid fa-star-of-life"></i></sup></label>
                                 <input id="name" type="text">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="bd-contact-input mb-30">
                                 <label for="email">Email <sup><i class="fa-solid fa-star-of-life"></i></sup></label>
                                 <input id="email" type="text">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="bd-contact-input mb-30">
                                 <label for="phone">Phone <sup><i class="fa-solid fa-star-of-life"></i></sup></label>
                                 <input id="phone" type="text">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="bd-contact-input mb-30">
                                 <label for="subject">Subject <sup><i
                                          class="fa-solid fa-star-of-life"></i></sup></label>
                                 <select name="subject" id="subject" class="bd-nice-select">
                                    <option>Select Subject</option>
                                    <option>Junior KG</option>
                                    <option>Senior KG</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="bd-contact-input mb-20">
                                 <label for="textarea">Comments <sup><i
                                          class="fa-solid fa-star-of-life"></i></sup></label>
                                 <textarea name="textarea" id="textarea"></textarea>
                              </div>
                           </div>
                           <div class="col-md-12 mb-30">
                              <div class="bd-contact-agree d-flex align-items-center">
                                 <input class="" type="checkbox" id="check-agree">
                                 <label class="check-label" for="check-agree">Save Data for Next Comment</label>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="bd-contact-agree-btn">
                                 <button type="submit" class="bd-btn">
                                    <span class="bd-btn-inner">
                                       <span class="bd-btn-normal">Send
                                          now</span>
                                       <span class="bd-btn-hover">Send
                                          now</span>
                                    </span>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-xl-6 mb-60">
                  <div class="bd-contact-map wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                     <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14596.899807208923!2d90.3654215!3d23.8461445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1673765392297!5m2!1sen!2sbd"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- contact area end here  -->

      <!-- newsletter area start here  -->
      <section class="bd-newsletter-area">
         <div class="container">
            <div class="bd-newsletter pt-100 pb-100 theme-bg">
               <div class="bd-newsletter-bg" data-background="{{asset('assets3/img/bg/newsletter-bg.jpg')}}"></div>
               <div class="row justify-content-center">
                  <div class="col-xl-8 col-lg-10">
                     <div class="bd-newsletter-content">
                        <div class="bd-section-title-wrapper text-center is-white mb-45">
                           <h2 class="bd-section-title mb-0">Join Our Newsletter</h2>
                           <p>Subscribe our newsletter to get our latest update & news.</p>
                        </div>
                        <div class="bd-newsletter-form">
                           <form action="#">
                              <div class="bd-newsletter-input">
                                 <input type="text" placeholder="your email">
                                 <button type="submit" class="bd-btn">
                                    <span class="bd-btn-inner">
                                       <span class="bd-btn-normal"><i
                                             class="fa-sharp fa-solid fa-paper-plane"></i>Subscribe now</span>
                                       <span class="bd-btn-hover"><i
                                             class="fa-sharp fa-solid fa-paper-plane"></i>Subscribe now</span>
                                    </span>
                                 </button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- newsletter area end here  -->
   </main>
   <!-- main area end here  -->


   <!-- offcanvas area start -->
   <div class="offcanvas__area">
      <div class="offcanvas__bg"></div>
      <div class="offcanvas__wrapper">
         <div class="offcanvas__content">
            <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
               <div class="offcanvas__logo logo">
                  <a href="index.html">
                     <img src="{{asset('assets3/img/logo/logo.svg')}}" alt="logo">
                  </a>
               </div>
               <div class="offcanvas__close">
                  <button class="offcanvas__close-btn">
                     <i class="fa-thin fa-times"></i>
                  </button>
               </div>
            </div>
            <div class="offcanvas__search mb-0">
               <form action="#">
                  <button type="submit"><i class="flaticon-search"></i></button>
                  <input type="text" placeholder="Search here">
               </form>
            </div>
            <div class="mobile-menu fix mt-35"></div>
            <div class="offcanvas__about d-none d-lg-block mt-30 mb-30">
               <h4>About Kindedo</h4>
               <p>With the help of teachers and environment as the third teacher, students
                  have opportunities to confidently take risks.</p>
            </div>
            <div class="offcanvas__contact mt-30 mb-30">
               <h4>Contact Info</h4>
               <ul>
                  <li class="d-flex align-items-center gap-2">
                     <div class="offcanvas__contact-icon">
                        <a target="_blank"
                           href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">
                           <i class="fal fa-map-marker-alt"></i></a>
                     </div>
                     <div class="offcanvas__contact-text">
                        <a target="_blank"
                           href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">12/A,
                           Mirnada City Tower, NYC</a>
                     </div>
                  </li>
                  <li class="d-flex align-items-center gap-2">
                     <div class="offcanvas__contact-icon">
                        <a href="tel:+088889797697"><i class="far fa-phone"></i></a>
                     </div>
                     <div class="offcanvas__contact-text">
                        <a href="tel:+088889797697">088889797697</a>
                     </div>
                  </li>
                  <li class="d-flex align-items-center gap-2">
                     <div class="offcanvas__contact-icon">
                        <a href="mailto:support@gmail.com"><i class="fal fa-envelope"></i></a>
                     </div>
                     <div class="offcanvas__contact-text">
                        <a href="mailto:support@gmail.com">support@mail.com</a>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="offcanvas__social">
               <ul>
                  <li><a target="_blank" href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                  </li>
                  <li><a target="_blank" href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
                  <li><a target="_blank" href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- offcanvas area end -->

   <!-- serach popup area start here  -->
   <div class="bd-search-popup-area">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="bd-search-popup">
                  <div class="bd-search-form">
                     <form action="#">
                        <div class="bd-search-input">
                           <input type="search" placeholder="Type here to serach ...">
                           <div class="bd-search-submit">
                              <button type="submit"><i class="flaticon-search"></i></button>
                           </div>
                        </div>
                     </form>
                     <div class="bd-search-close">
                        <div class="bd-search-close-btn">
                           <button><i class="fa-thin fa-close"></i></button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- search popup overlay  -->
   <div class="bd-search-overlay"></div>
   <!-- serach popup area end here  -->

   <!-- JS here -->
   <script src="{{asset('assets3/js/vendor/jquery.js')}}"></script>
   <script src="{{asset('assets3/js/vendor/waypoints.js')}}"></script>
   <script src="{{asset('assets3/js/bootstrap-bundle.js')}}"></script>
   <script src="{{asset('assets3/js/meanmenu.js')}}"></script>
   <script src="{{asset('assets3/js/swiper-bundle.js')}}"></script>
   <script src="{{asset('assets3/js/slick.js')}}"></script>
   <script src="{{asset('assets3/js/nouislider.js')}}"></script>
   <script src="{{asset('assets3/js/magnific-popup.js')}}"></script>
   <script src="{{asset('assets3/js/parallax.js')}}"></script>
   <script src="{{asset('assets3/js/backtotop.js')}}"></script>
   <script src="{{asset('assets3/js/nice-select.js')}}"></script>
   <script src="{{asset('assets3/js/wow.min.js')}}"></script>
   <script src="{{asset('assets3/js/isotope-pkgd.js')}}"></script>
   <script src="{{asset('assets3/js/imagesloaded-pkgd.js')}}"></script>
   <script src="{{asset('assets3/js/ajax-form.js')}}"></script>
   <script src="{{asset('assets3/js/jquery.appear.js')}}"></script>
   <script src="{{asset('assets3/js/jquery.odometer.min.js')}}"></script>
   <script src="{{asset('assets3/js/main.js')}}"></script>

</body>
   <section class="bd-erro-area pt-120 pb-120">
         
      </section>

        <section class="bd-erro-area pt-120 pb-120">
         
      </section>

<!-- Mirrored from codeskdhaka.com/html/kindedo-prev/kindedo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 08:04:29 GMT -->
</html>

 @endsection

