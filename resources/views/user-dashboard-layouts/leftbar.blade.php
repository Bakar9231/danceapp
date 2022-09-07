<!--dashboard-->
<div class="dashboard-main-wraper">
  <div class="container-fluid">

    <!--left nav-->
    <div class="left-nav-wraper">

      <!--logo-->
      <div class="dashboard-logo"><a href="#" title="logo"><img src="{{asset('images/logo.png')}}" alt="logo"></a></div>
      <!--logo-->

      <!--navigation-->
      <div class="navigation-dashboard">
        <ul>
          <li><a href="#"><i class="las la-user"></i>My Account</a></li>
          <li><a href="#"><i class="las la-file-alt"></i>My Profile</a></li>
          <li><a href="{{route('user_mybooking')}}"><i class="las la-paste"></i>My Bookings</a></li>
          <li><a href="#"><i class="las la-business-time"></i>My Reservations</a></li>
          <li><a href="#"><i class="las la-wallet"></i>My Wallet</a></li>
          <li><a href="#"><i class="las la-calendar"></i>Calendar</a></li>
        </ul>
      </div>
      <!--navigation-->

      <!--profile-->
      <div class="profile-left-nav">

        <!--image-->
        <div class="profile-image-nav" style="background:url({{asset('images/profile-image.jpg')}}) no-repeat top;"></div>
        <!--image-->

        <!--profile name-->
        <div class="profile-name">
          <h3>Sarah Connor</h3>
          <p>Sarahconor@gmail.com</p>
        </div>
        <!--profile name-->

      </div>
      <!--profile-->

    </div>
    <!--left nav-->
