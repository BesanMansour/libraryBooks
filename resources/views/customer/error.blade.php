@extends('customer.layout_no_data');
@section('no_data')  
                  <div class="col-xl-10">
                     <div class="bd-breadcrumb d-flex align-items-center justify-content-center">
                        <div class="bd-breadcrumb-content text-center">
                           <h1 class="bd-breadcrumb-title">404 Page</h1>
                           <div class="bd-breadcrumb-list">
                              <span><a href="{{route('customers.index')}}"><i class="flaticon-hut"></i>Home</a></span>
                              <span>404 page</span>
                           </div>
                        </div>
                     </div>
                  </div>
 @endsection