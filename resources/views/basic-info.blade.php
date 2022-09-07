@extends('layouts.innerapp')

@section('content')
<div class="dashboard-main-wraper">
  <div class="container-fluid">
    <div class="row">

      <!--left menu-->
      <div class="col-md-3">
        <div class="dashboard-left-menu-wraper">

          <!--logo-->
          <div class="dashboard-logo"><a href="#"><img src="images/logo-white.jpg" alt="logo"></a></div>
          <!--logo-->

          <!--step nav-->
          <div class="step-nav-main-wraper">
            <ul>
              <li  class="active-nav-menu">
                <div class="listing-nav-button">
                  <h5>Basic Info</h5>
                  <a href="#">Name</a><a href="#">Surname</a><a href="#">Artist Name</a></div>
              </li>
              <li>
                <div class="listing-nav-button">
                  <h5>Location</h5>
                  <a href="#">City</a><a href="#">Address</a><a href="#">Country</a></div>
              </li>
              <li>
                <div class="listing-nav-button">
                  <h5>Contact Info</h5>
                  <a href="#">Phone Number</a><a href="#">Email Address</a></div>
              </li>
              <li class="less-padding">
                <div class="listing-nav-button">
                  <h5>Personal info</h5>
                  <a href="#">Height</a><a href="#">Weight</a><a href="#">Eyes</a><a href="#">Eyes</a></div>
              </li>
              <li class="no-padding-list">
                <div class="listing-nav-button">
                  <h5>About</h5>
                  <a href="#">Text Area</a></div>
              </li>
            </ul>
          </div>
          <!--step nav-->

        </div>
      </div>
      <!--left menu-->

      <!--right panel-->
      <div class="col-md-9">
        <div class="dashboard-right-content-wraper">

          <!--dashboard top-->
          <div class="dashboard-topbar-wraper">
            <div class="row">

              <!--text-->
              <div class="col-md-3">
                <h3>Overview</h3>
              </div>
              <!--text-->

              <!--search-->
              <div class="col-md-6">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Search Here">
                  <button><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
              </div>
              <!--search-->

              <!--dropdown-->
              <div class="col-md-3">
                <div class="profile-image-wraper">
                  <div class="profile-image" style="background:url(images/profile-image.jpg) no-repeat top"></div>
                  <a href="#">Etta Willam<i class="fa fa-angle-down" aria-hidden="true"></i></a></div>
              </div>
              <!--dropdown-->

            </div>
          </div>
          <!--dashboard top-->

          <!--dashboard content-->
          <div class="dashboard-content-wraper">
            <div class="row">

              <!--left content-->
              <div class="col-md-8">
                <div class="dashboard-basic-main-wraper">
                <h2> Basic Info </h2>
                <form class="row">

                <div class="col-md-6">
                <div class="form-group">
                <label> Name </label>
                <input type="email" class="form-control" placeholder="Alex John">
                </div>
                </div>



                <div class="col-md-6">
                <div class="form-group">
                <label> Surname </label>
                <input type="email" class="form-control" placeholder="Johny">
                </div>
                </div>



                <div class="col-md-6">
                <div class="form-group">
                <label> Artist Name </label>
                <input type="email" class="form-control" placeholder="Alex John">
                </div>
                </div>


                <div class="col-md-12">
                <div class="button-next-prev"><a href="#">Back</a><a href="#" class="next-button">Next</a></div>
                </div>


                </form>
                </div>
              </div>
              <!--left content-->

              <!--right content-->
              <div class="col-md-4">
                <div class="content-right-image-dashboard"><img class="postion-right-image" src="images/image-dashboard1.png" alt="image"></div>
              </div>
              <!--right content-->

            </div>
          </div>
          <!--dashboard content-->

        </div>
      </div>
      <!--right panel-->

    </div>
  </div>
</div>
@endsection
