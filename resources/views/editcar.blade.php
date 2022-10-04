@extends('layouts.rentcar')
@section('title','Edit Car')

@section('content')

@forelse ($CarDetail as $key=>$data)


<!--Page Header-->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Edit Car Details</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="home">Home</a></li>
        <li>Edit Car Details</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 


<section>
<div class="uploadcontainer">  

  <form id="contact" action="../updatecar/{{$data->id}}" method="get">
     @csrf
     {{$data->id}}
    <h2><a>{{$data->carname}}</a></h2>
    <h4><a>Provide The Details</a></h4>
    <fieldset>
      <input placeholder="Car name" type="text" name="carname" value="{{$data->carname}}">
    </fieldset>
    <fieldset>
      <input placeholder="Car Price Per Day" type="text" name="carprice" value="{{$data->carprice}}" >
    </fieldset>

    <fieldset>
      <input placeholder="Car Model" type="text" name="carmodel" value="{{$data->carmodel}}"  required autofocus>
    </fieldset>

    <fieldset>   
    <input placeholder="Car Seats" type="text" name="carseats" value="{{$data->carseats}}"  required autofocus>
    </fieldset>

    <fieldset>
      <input placeholder="Address" name="address" type="text" value="{{$data->address}}"  required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" value="{{ Auth::user()->number }}" name="personnumber" type="tel" required>
    </fieldset>

  <input style="display:none"  value='{{ Auth::user()->id }}'  name="user_id"/>
    <fieldset>
 
  <select name="posttype"  id="posttype">
  <option value="{{$data->posttype}}" >{{$data->posttype}}</option>
    <option value="With Driver">With Driver</option>
    <option value="Without Driver">Without Driver</option>
  </select>
    </fieldset>

    <fieldset>
    <select name="location" id="Location"  required>
    <option value="{{$data->location}}" disabled>{{$data->location}}</option>
    <option value="TamilNadu">TamilNadu</option>
    <option value="Kerala">Kerala</option>
    <option value="Bangalore">Bangalore</option>
    <option value="Mumbai">Mumbai</option>
    <option value="Aandhra">Aandhra</option>
    <option value="Delhi">Delhi</option>
    <option value="Gujarat">Gujarat</option>
  </select>

    </fieldset>
    <fieldset>
    <div class="form-group">
              <button class="btn" type="submit" name="send" type="submit">Upload </button>
            </div>
    </fieldset>
   
  </form>
</div>

</section>
@empty
            no data found
        @endforelse

@endsection