@extends('layouts.admin')

@section('content')


<div class="col-md-11 col-md-push-1">

<br>
<br>

@forelse ($CarDetail as $key=>$data)
        <div class="product-listing-m gray-bg">
          <div class="product-listing-img"><img  src="uploads/{{$data->carpic}} " class="img-responsive" alt="Image" /> </a> 
          </div>
          <div class="product-listing-content">
            <h5><a href="  cardetail/{{$data->id}} ">{{$data->carname}} </a></h5>
            <p class="list-price">Price Per Day: {{$data->carprice}} RS  </p>
            <ul>
              <li><i class="fa fa-user" aria-hidden="true"></i> {{$data->carseats}} seats</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i> {{$data->carmodel}} model</li>
              <li><i class="fa fa-car" aria-hidden="true">{{$data->posttype}} </i></li>
            </ul>
            <p class="list-city">City: {{$data->location}} </p>

            <!-- <a href="" data-toggle="modal" data-dismiss="modal" class="btn btn-primary">View Details <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
 -->            <a href="../deletecar/{{$data->id}} " class="btn btn-danger">Delete<span class="angle_arrow"><i class="fa fa-trash"></i></span></a>
          </div>
        </div>

        @empty
            <h1 style="font-weight: bold;text-align: center;padding-right: 150px; padding-top: 120px;font-size: 40px;">No Data Found</h1>
        @endforelse

         </div>
@endsection

<!-- modal page -->

