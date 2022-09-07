@extends('layouts.app') @section('content')
<style>



body{
	margin:0;
	padding:0
}

.thankkyou-message-main-wraper{
}

.thankkyou-message-main-wraper .thankkyou-message-image{
	padding:170px 0;
	background-position:top center !important;
	background-size:contain !important;
	background-repeat:no-repeat !important

}
.text-thankyou-wraper{
	margin-left:90px;
	margin-top:60px
}
.text-thankyou-wraper h1{
position: relative;
    z-index: 111;
    color: #fff;
    font-size:40px;
    font-weight:900;
}
.text-thankyou-wraper p{
	color:#fff;
	font-size:16px;
	padding-right:180px;
}
.thankyou-booking-box{
	    border-radius: 15px;
    background: rgba(225, 225, 225, 0.1);
    backdrop-filter: blur(8px);
	padding:25px;
	margin-right:50px;
	margin-top:-40px
}
.thankyou-booking-box h2{
	font-size:25px;
	color:#fff;
	font-weight:bold;
	border-bottom:1px solid #49495f;
	padding-bottom:10px;
	margin-bottom:30px;
}
.thankyou-booking-box ul{
	list-style:none;
	margin:0;
	padding:0
}
.thankyou-booking-box ul li{
	color:#fff;
	font-size:14px;
	padding-bottom:20px;
	border-bottom:1px solid #49495f;
	padding:10px 0;
}
.button-back{
	margin-top:20px;
}
.button-back a{
	display:block;
	padding:15px 0;
	background:#fff;
	color:#000;
	text-decoration:none;
	font-size:14px;
	text-align:center;
	border-radius:10px;
}
</style>
<div class="thankkyou-message-main-wraper">
  <div class="thankkyou-message-image" style="background:#10131c url('{{asset('images/thankyou-bg.jpg')}}') ;">
    <div class="container">
      <div class="row"> 
        
        <!---text-->
        
        <div class="col-md-8">
          <div class="text-thankyou-wraper">
            <h1> Booking Received</h1>
            <p> Thank you for making a booking with W4Dance. The service provider has 48 hours to accept or decline your booking request. You will only be charged if the service provider accepts your booking. We will notify you of the status of your booking when the service provider accepts or declines your request. </p>
          </div>
        </div>
        <!---text--> 
        
        <!--booking-->
        <div class="col-md-4">
        <div class="thankyou-booking-box">
        <h2>Booking Details</h2>
        
        <ul>
        <li> Booking ID: <strong class="pull-right"> 5AD454 </strong> </li>
        <li> Service Provider:  <strong class="pull-right"> John </strong></li>
        <li> Booking Date: <strong class="pull-right"> 9/6/2022 </strong> </li>
        <li> Booking Type: <strong class="pull-right"> 1 Day </strong> </li>
        <li> Total Payment: <strong class="pull-right"> $440 </strong> </li>
        
        
        </ul>
        
        
        <div class="button-back">  <a href="#"> Back To Dashboard </a></div>
        
        </div>
        </div>
        <!--booking-->
        
        
        
      </div>
    </div>
  </div>
</div>
@endsection