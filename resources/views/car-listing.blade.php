@extends('layouts.rentcar')
@section('title','Car Listing')

@section('content')
<section class="page-header listing_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Car Listing</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="home">Home</a></li>
        <li>Car Listing</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header-->




<!--Listing-->
<section class="listing-page">
  <div class="container">
    <div class="row">
  <div class="col-md-9 col-md-push-3">



@forelse ($CarDetail as $key=>$data)
        <div class="product-listing-m gray-bg">
          <div class="product-listing-img"><img  src="uploads/{{$data->carpic}} " class="img-responsive" alt="Image" /> </a> 
          </div>
          <div class="product-listing-content">
            <h5><a href="  cardetail/{{$data->id}} ">{{$data->carname}} </a></h5>
            <p class="list-price">Price: {{$data->carprice}} RS  </p>
            <ul>
              <li><i class="fa fa-user" aria-hidden="true"></i> {{$data->carseats}} seats</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i> {{$data->carmodel}} model</li>
              <li><i class="fa fa-car" aria-hidden="true">{{$data->posttype}} </i></li>
            </ul>
            <p class="list-city">City: {{$data->location}} </p>

            <a href="cardetail/{{$data->id}} " class="btn">View Details <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
          </div>
        </div>

        @empty
            <h1 style="font-weight: bold;text-align: center;padding-right: 150px; padding-top: 70px;">No Data Found</h1>
        @endforelse

         </div>
      
      <!--Side-Bar-->
      <aside class="col-md-3 col-md-pull-9">  
      <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-car" aria-hidden="true"></i> Recently Listed Cars</h5>
          </div>
          <div class="recent_addedcars">
            <ul>

            @forelse ($CarDetail as $key=>$data)
              <li class="gray-bg">
                <div class="recent_post_img"> <a href="cardetail/{{$data->id}}"><img src="uploads/{{$data->carpic}}" alt="image"></a> </div>
                <div class="recent_post_title"> <a href="cardetail/{{$data->id}}">{{$data->carname}}</a>
                  <p class="widget_price">{{$data->carprice}}Rs Per Day</p>
                </div>
              </li>
              @empty
            no data found
        @endforelse
                           
            </ul>
          </div>
        </div>
      </aside>
      <!--/Side-Bar--> 
    </div>
  </div>
</section>
<!-- /Listing--> 

@endsection