@extends('admin.layout_admin');
@section('content_admin')


@section('add_new')
									<a href="{{route('admin.create')}}" class="btn btn-light-warning font-weight-bolder btn-sm">Add New</a>

@endsection

						<div class="d-flex flex-column-fluid">
              <!--begin::Container-->
              <div class="container">
                <!--begin::Dashboard-->
                
                <!--begin::Row-->
                <div class="row">

                <div class="col-lg-4">
                <!--begin::List Widget 3-->
                    <div class="card card-custom card-stretch gutter-b">
                      <!--begin::Header-->
                      <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-dark">Authors</h3>
                        <div class="card-toolbar">
                          <div class="dropdown dropdown-inline">
                            <a href="#" class="btn btn-light-primary btn-sm font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">August</a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                              <!--begin::Navigation-->
                              <ul class="navi navi-hover">
                                <li class="navi-header pb-1">
                                  <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <i class="flaticon2-shopping-cart-1"></i>
                                    </span>
                                    <span class="navi-text">Order</span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <i class="flaticon2-calendar-8"></i>
                                    </span>
                                    <span class="navi-text">Event</span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
								               	<span class="navi-icon">
                                      <i class="flaticon2-graph-1"></i>
                                    </span>
                                    <span class="navi-text">Report</span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <i class="flaticon2-rocket-1"></i>
                                    </span>
                                    <span class="navi-text">Post</span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <i class="flaticon2-writing"></i>
                                    </span>
                                    <span class="navi-text">File</span>
                                  </a>
                                </li>
                              </ul>
                              <!--end::Navigation-->
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body pt-2">                       
                
                       <!--begin::Item-->
                      
                        @foreach ($users as $user)
                          @if ($user->type == 0)
                              <div class="d-flex align-items-center mb-10">
                                  <!--begin::Symbol-->
                                  <div class="symbol symbol-40 symbol-light-success mr-5">
                                      <span class="symbol-label">
                                          <img src="{{asset('assets2/media/svg/avatars/009-boy-4.svg')}}" class="h-75 align-self-end" alt="" />
                                      </span>
                                  </div>
                                  <!--end::Symbol-->
                                  <div class="d-flex flex-column font-weight-bold">
                                      <label class="text-dark text-hover-primary mb-1 font-size-lg">{{$user->name}}</label>
                                      <span class="text-muted">{{$user->email}}</span>
                                  </div>
                              </div>
                          @endif
                      @endforeach

                        <!--end::Item-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::List Widget 3-->
                    </div>

                  <div class="col-lg-8">
                    <!--begin::Advance Table Widget 4-->
                    <div class="card card-custom card-stretch gutter-b">                 
                      <!--begin::Body-->
                      <div class="card-body pt-0 pb-3">
                        <div class="tab-content">
                          <!--begin::Table-->
                          <div class="table-responsive">
                            <table class="table table-head-custom table-head-bg table-borderless table-vertical-center" style="margin-top: 100px;">
                            <thead>
                              <tr class="text-left text-uppercase">
                                <th scope="col" style="min-width: 100px">name</th>
                                <th scope="col" style="min-width: 100px">email</th>
                                <th scope="col" style="min-width: 100px">budget</th>
                                <th scope="col" style="min-width: 100px">mobile</th>
                                <th scope="col" style="min-width: 100px">Books Purchased</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($users as $user)
                              @if ($user->type == 0 && count($user->books) > 0)
                              <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->budget}}</td>
                                <td>{{$user->mobile}}</td>
                                <td>
                                  @foreach($user->books as $book)
                                  {{$book->title}},
                                  @endforeach
                                </td>
                              </tr>
                              @endif
                              @endforeach
                            </tbody>
                          </table>
                          
                          </div>
                          <!--end::Table-->
                        </div>
                      </div>
					            <!--end::Body-->
                    </div>
                    <!--end::Advance Table Widget 4-->
                  </div>
                </div>
                <!--end::Row-->
                <!--end::Dashboard-->
              </div>
              <!--end::Container-->
			  </div>

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
      @if(session('success'))
    <div class="alert alert-success" role="alert" style="margin: 50px;color: #ffffff; 
        text-align: right; font-size:20px;padding-right:20px">
        {{ session('success') }}
    </div>
    @endif

        <div class="container" >    
            <div class="row grid">
              @foreach($comps as $comp)
            <div class="col-xl-4 col-lg-6 col-md-6 grid-item c-1 c-2 c-3">
                <div class="bd-blog mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <a href="{{route('admin.edit',$comp->id)}}">
                        <div class="bd-blog-thumb" style="position: relative;">
                            <img src="{{asset('storage/'.$comp->image)}}" alt="blog image">
                            <div class="bd-blog-price" style="position: absolute; top: 0; left: 0; background-color: rgba(0, 0, 0, 0.7); color: #fff; padding: 10px; font-size: 14px; font-weight: bold;width:60px;height:48px;">{{$comp->price}} {{'$'}}</div> <!-- إضافة العنصر المسؤول عن عرض السعر -->
                        </div>
                    </a>
                    <div class="bd-blog-content">
                        <div class="bd-blog-date">
                            <span>{{$comp->release_date}}</span>
                        </div>
                        <div class="bd-blog-meta">
                            <span><i class="fas fa-user"></i> {{$comp->author}} </span>
                        </div>

                        <div class="bd-blog-meta">
                            <span class="bd-blog-title">{{$comp->title}}</span>
                            
                        </div>

                        <form action="{{route('admin.destroy',$comp->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" style="border: none; background-color: transparent; cursor: pointer;margin-left:310px">
                                    <img src="{{asset('image/remove.png')}}" width="20px" height="20px" alt="Delete"></img>
                                </button>
                            </form>
                    </div>
                </div>
            </div>
            @endforeach    
            

            
                 <div class="pagination justify-content-center">
                   {{ $comps->links('customer.pagination') }}
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





