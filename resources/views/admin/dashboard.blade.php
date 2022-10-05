@extends('layouts.admin')

@section('content')

<h2 class="page-title" style="font-weight:bold;">Dashboard</h2>	
 <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Users</div>
            <div class="number">3</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text"><a href="reg-users" style="text-decoration: none;">See Details</span></a>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Cars</div>
            <div class="number">5</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text"><a href="allcars" style="text-decoration:none;">See Details</span></a>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">With Driver</div>
            <div class="number">3</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text"><a href="withdriver" style="text-decoration:none;">See Details</span></a>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Without Drivers</div>
            <div class="number">2</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text"><a href="withoutdriver" style="text-decoration:none;">See Details</span></a>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>
<!-- 
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">

													<div class="stat-panel-number h1 ">total</div>
													<div class="stat-panel-title text-uppercase">Reg Users</div>
												</div>
											</div>
											<a href="reg-users" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
												<div class="stat-panel-number h1 ">total</div>
													<div class="stat-panel-title text-uppercase">Listed Vehicles</div>
												</div>
											</div>
											<a href="allcars" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">

													<div class="stat-panel-number h1 ">total</div>
													<div class="stat-panel-title text-uppercase">With Driver</div>
												</div>
											</div>
											<a href="withdriver" class="block-anchor panel-footer">Full Details<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
												<div class="stat-panel-number h1 ">total</div>
													<div class="stat-panel-title text-uppercase">Without Driver</div>
												</div>
											</div>
											<a href="withoutdriver" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>


								</div>
							</div>
						</div> -->
					
      <div class="sales-boxes ">
       
        <div class="top-sales box">
          <div class="title">Top Cars For Rental</div>
          <ul class="top-sales-details">
            <li>
            <a href="">
              <img src="assets/images/featured-img-1.jpg" alt="">
              <span class="product">Rolls Royce</span>
            </a>
            <span class="price">$1107</span>
          </li>
          <li>
            <a href="">
              <img src="assets/images/featured-img-2.jpg" alt="">
              <span class="product">Jaqaur</span>
            </a>
            <span class="price">$1567</span>
          </li>
          <li>
            <a href="">
              <img src="assets/images/featured-img-3.jpg" alt="">
              <span class="product">Astro</span>
            </a>
            <span class="price">$1234</span>
          </li>
         
          
                
          </ul>
        </div>
    </div>
      </div>




@endsection

