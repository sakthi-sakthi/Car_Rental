@extends('layouts.rentcar')
@section('title','Car Listing')

@section('content')


@forelse ($CarDetail as $key=>$data)
<section id="listing_img_slider">
  <div><img src="../uploads/{{$data->carpic}}" class="" alt="image" width="1000px" height="500px" style="margin-left: 170px;margin-top: 40px;" ></div>


</section>
<!--Listing-detail-->
<section class="listing-detail">
  <div class="container">
    <div class="listing_detail_head row">
      <div class="col-md-9">
        <h2>{{$data->carname}}</h2>
      </div>
      <div class="col-md-3">
        <div class="price_info">
          <p>Rs {{$data->carprice}}</p>Per Day
         
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9">
        <div class="main_features">
          <ul>
          
            <li> <i class="fa fa-calendar" aria-hidden="true"></i>
              <h5>{{$data->carmodel}}</h5>
              <p>Reg.Year</p>
            </li>
            <li> <i class="fa fa-cogs" aria-hidden="true"></i>
              <h5>{{$data->posttype}}</h5>
              <p>Car Type</p>
            </li>
       
            <li> <i class="fa fa-user-plus" aria-hidden="true"></i>
              <h5>{{$data->carseats}}</h5>
              <p>Seats</p>
            </li>
          </ul>
        </div>
        <div class="listing_more_info">
          <div class="listing_detail_wrap"> 
            <!-- Nav tabs -->
            <ul class="nav nav-tabs gray-bg" role="tablist">
              <li role="presentation" class="active"><a href="#vehicle-overview " aria-controls="vehicle-overview" role="tab" data-toggle="tab">Vehicle Overview </a></li>
          
              <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Vendor Details</a></li>
            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content"> 
              <!-- vehicle-overview -->
              <div role="tabpanel" class="tab-pane active" id="vehicle-overview">
                
                <p>Address: {{$data->address}}</p>

              </div>
              
              
              <!-- Accessories -->
              <div role="tabpanel" class="tab-pane" id="accessories"> 
                <!--Accessories-->
                <table>
 
                  <tbody>

                  <p>Contact Number:<a href="tel:{{$data->personnumber}}"> {{$data->personnumber}}</a></p>
                  <p>Shop Address: {{$data->address}}</p>
                  <p>city: {{$data->location}}</p>
                </tbody>
                </table>
              </div>
            </div>
          </div>
          
        </div>

   
      </div>
      
      <!--Side-Bar-->
     
      <!--/Side-Bar--> 
    </div>
    
    <div class="space-20"></div>
    <div class="divider"></div>

    
  </div>
</section>
<!--/Listing-detail--> 











@empty
            no data found
        @endforelse
@endsection
