@extends('layouts.rentcar')
@section('title','Upload Post')

@section('content')

<!--Page Header-->
    <!-- STYLE CSS -->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Upload Cars</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="home">Home</a></li>
        <li>Upload Cars</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 


<section>
    <div class="wrapper">
        <div class="form-left">
            
        </div>
        <form class="form-right" action="{{route('car_details.store')}}" method="POST" enctype=multipart/form-data>
          @csrf
          <br>
            <h2 class="text-uppercase" style="font-size:30px;">Upload Car</h2>
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label>Car Name</label>
                    <input placeholder="Enter Car name" type="text" name="carname"  required autofocus class="input-field">
                </div>
                <div class="col-sm-6 mb-3">
                    <label>Car Price</label>
                    <input placeholder="Car Price Per Day" type="text" name="carprice"  required autofocus class="input-field">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label>Car Model</label>
                     <input placeholder="Enter Car Model" type="text" name="carmodel"  required autofocus class="input-field">
                </div>
                <div class="col-sm-6 mb-3">
                    <label>Car Seats</label>
                    <input placeholder="Enter Car Seats" name="carseats" type="text"  required class="input-field">
                </div>
                <div class="col-md-12">
                    <label>Address</label>
                    <input type="text" name="address" id="address" class="input-field" required placeholder="Enter Your Address">
                </div>
                <input style="display:none"  value='{{ Auth::user()->id }}' name="user_id"/>
                <div class="col-md-12">
                  <label>Select Your City</label>
                      <select name="location" id="Location" required>
                      <option value="" disabled selected>Select The City</option>
                      <option value="TamilNadu">TamilNadu</option>
                      <option value="Kerala">Kerala</option>
                      <option value="Aandhra">Aandhra</option>
                      <option value="Mumbai">Mumbai</option>
                      <option value="Bangalore">Bangalore</option>
                      <option value="Delhi">Delhi</option>
                      <option value="Kolkata">Kolkata</option>
                      <option value="Gujarat">Gujarat</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label>Mobile Number</label>
                    <input placeholder="Your Phone Number" value="{{ Auth::user()->number }}" name="personnumber" type="tel" required class="input-field">
                </div>
                <div class="col-sm-6 mb-3">
                    <label>Car Image</label>
                    <input id="carpic" type="file" name="carpic" class="input-field"  required autofocus>
                </div>
                
                <div class="col-md-12">
                  <label>Car Type</label>
                    <select name="posttype" id="posttype">
                    <option value="" disabled selected>Select Car Type</option>
                      <option value="With Driver">With Driver</option>
                      <option value="Without Driver">Without Driver</option>
                    </select>
                </div>
              
            </div>
            <br>
            <center>
            <div class="form-field">
                <input type="submit" value="Upload" class="register" name="register">
            </div>
            </center>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body{
    background: #fff;
    min-height: 100vh;
}

.wrapper{
    max-width: 850px;
    background-color: #fff;
    border-radius: 10px;
    position: relative;
    display: flex;
    margin: 50px auto;
    box-shadow: 0 8px 20px 0px #1f1f1f1a;
    overflow: hidden;
}

.wrapper .form-left{
    background-image: url("form/images/img5.jpg");
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    padding: 20px 40px;
    position: relative;
    width: 100%;
    color: #fff;
}

.wrapper h2{
    font-weight: 700;
    font-size: 25px;
    padding: 5px 0 0;
    margin-bottom: 34px;
    pointer-events: none;
}

.wrapper .form-left p{
    font-size: 0.9rem;
    font-weight: 300;
    line-height: 1.5;
    pointer-events: none;
}

.wrapper .form-left .text{
    margin: 20px 0 25px;
}

.wrapper .form-left p span{
    font-weight: 700;
}

.wrapper .form-left input{
    padding: 15px;
    background: #fff;
    border-top-left-radius: 5px;
    border-bottom-right-radius: 5px;
    width: 180px;
    border: none;
    margin: 15px 0 50px 0px;
    cursor: pointer;
    color: #333;
    font-weight: 700;
    font-size: 0.9rem;
    appearance: unset;
    outline: none;
}

.wrapper .form-left input:hover{
    background-color: #f2f2f2;
}

.wrapper .form-right{
    padding: 0px 40px;
    position: relative;
    width: 100%;
}

.wrapper .form-right h2{
    color: #3786bd;
}

.wrapper .form-right label{
    font-weight: 600;
    font-size: 15px;
    color: #666;
    display: block;
    margin-bottom: 8px;
}

.wrapper .form-right .input-field{
    width: 100%;
    padding: 10px 15px;
    border: 1px solid #e5e5e5;
    border-top-left-radius: 5px;
    border-bottom-right-radius: 5px;
    outline: none;
    color: #333;
}

.wrapper .form-right .input-field:focus{
    border: 1px solid #31a031;
}


.wrapper .option {
    display: block;
    position: relative;
    padding-left: 30px;
    margin-bottom: 12px;
    font-size: 0.95rem;
    font-weight: 900;
    cursor: pointer;
    user-select: none
}

.wrapper .option input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0
}

.wrapper .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 18px;
    width: 18px;
    background-color: #fff;
    border: 2px solid #ddd;
    border-radius: 2px
}

.wrapper .option:hover input~.checkmark {
    background-color: #f1f1f1
}

.wrapper .option input:checked~.checkmark {
    border: 2px solid #e5e5e5;
    background-color: #fff;
    transition: 300ms ease-in-out all
}

.wrapper .checkmark:after {
    content: "\2713";
    position: absolute;
    display: none;
    color: #3786bd;
    font-size: 1rem;
}

.wrapper .option input:checked~.checkmark:after {
    display: block
}

.wrapper .option .checkmark:after {
    left: 2px;
    top: -4px;
    width: 5px;
    height: 10px
}

.wrapper .register{
    padding: 12px;
    background: #3786bd;
    border-top-left-radius: 5px;
    border-bottom-right-radius: 5px;
    width: 130px;
    border: none;
    margin: 6px 0 50px 0px;
    cursor: pointer;
    color: #fff;
    font-weight: 700;
    font-size: 15px;
}

.wrapper .register:hover{
    background-color: #3785bde0;
}

.wrapper a{
    text-decoration: none;
}

@media (max-width: 860.5px) {
    .wrapper{
        margin: 50px 5px;
    }
}


@media (max-width: 767.5px){
    .wrapper{
        flex-direction: column;
        margin: 30px 20px;
    }

    .wrapper .form-left{
        border-bottom-left-radius: 0px;
    }

    
}

@media (max-width: 575px) {

    .wrapper{
        margin: 30px 15px;
    }

    .wrapper .form-left{
        padding: 25px;
    }
    .wrapper .form-right{
        padding: 25px;
    }
}
    </style>
</section>


@endsection