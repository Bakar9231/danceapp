@extends('layouts.app')

@section('content')
<style>
#sync1 .item {
  padding:250px 0px;
  color: #FFF;
 border-radius:10px;
  text-align: center;
  background-size: cover !important;
}

#sync2 .item {
  background: #C9C9C9;
  padding: 72px 0px;
  margin:0 5px;
  color: #FFF;
  -webkit-border-radius:10px;
  text-align: center;
  cursor: pointer;
}
#sync2 .item h1 {
  font-size: 18px;
}
#sync2 .current .item {
  background: #0c83e7;
}

.owl-theme .owl-nav {
     top: 150px;
}
.owl-theme .owl-nav [class*='owl-'] {
  transition: all .3s ease;
}
.owl-theme .owl-nav [class*='owl-'].disabled:hover {
  background-color: #D6D6D6;
}

#sync1.owl-theme {
  position: relative;
}
#sync1.owl-theme .owl-next, #sync1.owl-theme .owl-prev {
  width: 22px;
  height: 40px;
  margin-top:100px;
  position: absolute;
  top: 50%;
}
#sync1.owl-theme .owl-prev {
  left: 60px;
}
#sync1.owl-theme .owl-next {
  right: 60px;
}
.owl-carousel .owl-stage-outer {
    overflow: hidden !important;
}

.profile-new-page-dance-wraper{
	background:#fff;
}
.profile-new-page-dance-wraper .profile-new-page-breacrums{
	background: #f8fafd;
	padding:30px  50px;
}
.profile-new-page-breacrums a{
	color:#000;
	text-decoration:none;
	font-size:14px;
}
.profile-new-page-breacrums i{
	margin:0 25px;
	color:#D6810A
}
.profile-new-heading-price{
	padding:40px  50px;
}
.profile-new-heading-price h1{
	font-size:30px;
	font-weight:bold;
	margin:0
}
.location-new-list{
}
.location-new-list a{
	color:#666;
	text-decoration:none;
	font-size:18px
}
.location-new-list i{
	font-size:18px;
}
.profile-booking-option-wrap{
	margin-top:8px;
    float: right;
}
.profile-booking-option-wrap h3{
	font-size:18px;
	margin:0;
	font-weight:bold;
	
}
.profile-booking-option-wrap span{
	font-size:22px;
	margin-right:25px;
}
.profile-booking-option-wrap span strong{
	color:#D6810A
}
.profile-left-right-section-wraper{
	padding:0  50px;
}
.profile-right-section-wraper{
	
}
.profile-image-name-wrap{
	border:1px solid #f0f0f0;
	padding:25px;
	border-radius:15px;
	margin-bottom:25px;
	text-align:center;
}
.profile-image-new-wrap{
	width:100px;
	height:100px;
	border-radius:50%;
	background-size:cover !important;
	margin:0 auto
}
.profile-right-section-wraper h4{
	font-size:22px;
	font-weight:bold;
	margin-top:25px;
	margin-bottom:0;
}
.profile-image-name-wrap{
}
.profile-image-name-wrap .email-profile{
	color: #666;
    text-decoration: none;
    font-size: 18px;
}
.profile-socail-wrap{
	text-align:center;
	margin-top:15px;
}
.profile-socail-wrap a{
	display:inline-block;
	width:40px;
	margin:0 3px;
	height:40px;
	border:1px solid #f0f0f0;
	text-align:center;
	border-radius:50%;
	font-size:16px;
	padding-top:8px;
	color:#000;
}
.profile-socail-wrap a:hover{
	background:#000;
	color:#fff;
	border:1px solid #000
}
.view-profile-btn{
	text-align:center;
	margin-top:40px;
	margin-bottom:20px;
}
.view-profile-btn a{
	    background: #D6810A;
    padding: 14px 30px;
    text-decoration: none;
    color: #fff;
    text-transform: uppercase;
    font-weight: 400;
    font-size: 14px;
    position: relative;
    border-radius: 8px;
    font-weight: 500;
}
.profile-info-wraper{
}
.profile-info-wraper ul{
	list-style:none;
	margin:0;
	padding:0
}
.profile-info-wraper ul li{
}
.profile-info-wraper ul li a{
	display:block;
	border:1px solid #f0f0f0;
	background:#fff;
	padding:16px 25px;
	text-decoration:none;
	color:#000;
	border-radius: 15px;
	margin-bottom:25px;
}
.profile-info-wraper ul li a:hover{
	box-shadow:0px 0px 70px 0 #f5f5f5
}
.profile-info-wraper ul li a i{
	width:50px;
	height:50px;
	border:1px solid #f0f0f0;
	border-radius:50%;
	font-size:18px;
	text-align:center;
	padding-top:15px;
	color:#000;
	margin-right:15px;
}
.profile-info-wraper ul li a strong{
	font-size:16px
}

.profile-info-wraper ul li .la-eye{
	background:#D6810A;
	border:1px solid #D6810A;
	color:#fff;
}
.profile-about-left-section{
	border:1px solid #f0f0f0;
	padding:35px;
	margin-bottom:25px;
	 border-radius: 15px;
}

.profile-about-left-section h4 {
    font-size: 25px;
    font-weight: bold;
    color: #093244;
    margin-bottom: 25px;
}
.profile-about-left-section p{
	font-size:14px;
	line-height:24px;
	padding:0;
	margin:0;
}
.profile-map-left-wrap{
		border:1px solid #f0f0f0;
	padding:35px;
	margin-bottom:25px;
	 border-radius: 15px;
}
.profile-map-left-wrap h4 {
    font-size: 25px;
    font-weight: bold;
    color: #093244;
    margin-bottom: 25px;
}


.personal-info-left-wrap{
			border:1px solid #f0f0f0;
	padding:35px;
	margin-bottom:25px;
	 border-radius: 15px;
}
.personal-info-left-wrap h4 {
    font-size: 25px;
    font-weight: bold;
    color: #093244;
    margin-bottom: 25px;
}
.personal-info-left-wrap{
}
.personal-info-left-wrap ul{
	list-style:none;
	margin:0;
	padding:0
}
.personal-info-left-wrap ul li{
	border-bottom:1px solid #f0f0f0;
	padding:18px 0;
	font-size:16px;
}
.professional-expericence li span{
	display:block;
}


</style>
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<div class="profile-new-page-dance-wraper">
  <div class="container-fluid"> 
    
    <!--breadcrum-->
    <div class="profile-new-page-breacrums"> <a href="#"> Home </a> <i class="las la-angle-double-right"></i> <a href="#"> Product Listing </a> <i class="las la-angle-double-right"></i> <a href="#"> Product Detail </a> </div>
    <!--breadcrum--> 
    
    <!--heading price-->
    <div class="profile-new-heading-price">
      <div class="row"> 
        
        <!--heading location-->
        <div class="col-md-6">
          <h1> Nullam In Ante Euismod Semper Orci Sed.</h1>
          <div class="location-new-list"> <i class="las la-map-marker-alt"></i> <a href="#"> Bay Pines, FL Calafornia Usa</a> </div>
        </div>
        <!--heading location--> 
        
        <!--booking option-->
        <div class="col-md-6">
          <div class="profile-booking-option-wrap">
            <h3>Booking Option </h3>
            <span> Full Day : <strong> $550 </strong> </span> <span> Half Day : <strong> $250 </strong> </span> </div>
        </div>
        <!--booking option--> 
        
      </div>
    </div>
    <!--heading price--> 
    
    <!--profile left right sections-->
    <div class="profile-left-right-section-wraper">
      <div class="row"> 
        
        <!--profile section left-->
        <div class="col-md-8">
          <div class="profile-left-section-wraper"> 
            
            <!--profile image-->
            <div class="profile-image-carousel-wrap">
              <div id="sync1" class="owl-carousel owl-theme">
                <div class="item" style="background:url({{asset('upload/Profile/'.$value->image)}}) no-repeat top"> </div>
                <div class="item" style="background:url({{asset('upload/Profile/'.$value->image)}}) no-repeat top"> </div>
                <div class="item" style="background:url({{asset('upload/Profile/'.$value->image)}}) no-repeat top"> </div>
                <div class="item" style="background:url({{asset('upload/Profile/'.$value->image)}}) no-repeat top"> </div>
                <div class="item" style="background:url({{asset('upload/Profile/'.$value->image)}}) no-repeat top"> </div>
                <div class="item" style="background:url({{asset('upload/Profile/'.$value->image)}}) no-repeat top"> </div>
                <div class="item" style="background:url({{asset('upload/Profile/'.$value->image)}}) no-repeat top"> </div>
                <div class="item" style="background:url({{asset('upload/Profile/'.$value->image)}}) no-repeat top"> </div>
              </div>
              <div id="sync2" class="owl-carousel owl-theme">
                <div class="item" style="background:url({{asset('upload/Profile/'.$value->image)}}) no-repeat top"> </div>
                <div class="item" style="background:url({{asset('upload/Profile/'.$value->image)}}) no-repeat top"> </div>
                <div class="item" style="background:url({{asset('upload/Profile/'.$value->image)}}) no-repeat top"> </div>
                <div class="item" style="background:url({{asset('upload/Profile/'.$value->image)}}) no-repeat top"> </div>
                <div class="item" style="background:url({{asset('upload/Profile/'.$value->image)}}) no-repeat top"> </div>
                <div class="item" style="background:url({{asset('upload/Profile/'.$value->image)}}) no-repeat top"> </div>
                <div class="item" style="background:url({{asset('upload/Profile/'.$value->image)}}) no-repeat top"> </div>
                <div class="item" style="background:url({{asset('upload/Profile/'.$value->image)}}) no-repeat top"> </div>
              </div>
            </div>
            <!--profile image--> 
            
            <!--about-->
            <div class="profile-about-left-section">
              <h4> About Yourself </h4>
              <p> Etiam eros purus, interdum sit amet volutpat ut, aliquam vitae nisi. Cras vitae semper mauris. Donec vel ligula vitae nulla tincidunt fringilla et eget tortor. Proin dapibus tortor augue, vitae malesuada nibh vehicula at. Integer eros libero, finibus a finibus nec, volutpat at augue. Nunc eu ullamcorper massa. Phasellus volutpat pharetra pretium. Etiam imperdiet fringilla nisi, nec interdum elit commodo at. Aliquam rhoncus, nibh vitae ornare vulputate, enim turpis rutrum sapien, eget imperdiet lacus ante nec quam. Mauris congue tortor in iaculis semper. Cras nec risus eros. Praesent tristique nisl sit amet ullamcorper sagittis. <br />
                <br />
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae felis id est tempor accumsan nec non tortor. Praesent mauris ante, sagittis eget nibh semper, posuere ornare massa. Morbi ullamcorper, magna gravida tristique lacinia, dui sapien finibus ligula, in cursus elit nunc nec mauris. Cras posuere cursus nibh, ac tincidunt ligula consequat vitae. Praesent vestibulum quam volutpat dolor semper, vitae cursus orci ultricies. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed et sapien sit amet nulla consectetur efficitur. Proin vulputate nibh elit, vitae sollicitudin ligula fringilla at. </p>
            </div>
            <!--about--> 
            
            <!--map-->
            <div class="profile-map-left-wrap">
              <h4> Map Location </h4>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13288.539840035934!2d73.07594429999999!3d33.6277425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1660557091365!5m2!1sen!2s" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!--map--> 
            
            <!--Personal Info-->
            <div class="personal-info-left-wrap">
              <h4> Personal Info </h4>
              <ul>
                <li> Height <strong>22 ft.</strong> </li>
                <li> WeightSea <strong>Hunt Boats</strong> </li>
                <li> Eyes <strong>Triton 225</strong> </li>
                <li> Hair <strong>Up to 4 people</strong> </li>
                <li> Language <strong>English</strong> </li>
              </ul>
            </div>
            <!--Personal Info--> 
            
            <!--Representing-->
            <div class="personal-info-left-wrap">
              <h4> Representing </h4>
              <ul>
                <li> Agency <strong>22 ft.</strong> </li>
                <li> Agent <strong>Hunt Boats</strong> </li>
                <li> Other <strong>Triton 225</strong> </li>
                <li> Looking for an agent <strong>Up to 4 people</strong> </li>
              </ul>
            </div>
            <!--Representing--> 
            
            <!--Looking For-->
            <div class="personal-info-left-wrap">
              <h4> Looking For </h4>
              <ul>
                <li> <span>1:</span> Lorem lipsum dollar </li>
                <li> <span>2:</span> Lorem lipsum dollar </li>
                <li> <span>3:</span> Lorem lipsum dollar </li>
                <li> <span>4:</span> Lorem lipsum dollar </li>
              </ul>
            </div>
            <!--Looking For--> 
            
            <!--Education-->
            <div class="personal-info-left-wrap">
              <h4> Education </h4>
              <ul>
                <li> <span>1:</span> Lorem lipsum dollar </li>
                <li> <span>2:</span> Lorem lipsum dollar </li>
                <li> <span>3:</span> Lorem lipsum dollar </li>
                <li> <span>4:</span> Lorem lipsum dollar </li>
              </ul>
            </div>
            <!--Education--> 
            
            <!--Representing-->
            <div class="personal-info-left-wrap professional-expericence">
              <h4> Professional Experience </h4>
              <ul>
                <li> <span>From <strong>22 ft.</strong></span> <span> To <strong>Hunt Boats</strong> </span> <span>Experience <strong>Triton 225</strong></span> </li>
                <li> <span>From <strong>22 ft.</strong></span> <span> To <strong>Hunt Boats</strong> </span> <span>Experience <strong>Triton 225</strong></span> </li>
                <li> <span>From <strong>22 ft.</strong></span> <span> To <strong>Hunt Boats</strong> </span> <span>Experience <strong>Triton 225</strong></span> </li>
                <li> <span>From <strong>22 ft.</strong></span> <span> To <strong>Hunt Boats</strong> </span> <span>Experience <strong>Triton 225</strong></span> </li>
              </ul>
            </div>
            <!--Representing--> 
            
            <!--Representing-->
            <div class="personal-info-left-wrap professional-expericence">
              <h4> Certificate/Competition </h4>
              <ul>
                <li> <span>Date <strong>1/1/22</strong></span> <span> Competition <strong>Hunt Boats</strong> </span> <span>Place <strong>Triton 225</strong></span> <span>Result <strong>Triton 225</strong></span> </li>
                <li> <span>Date <strong>1/1/22</strong></span> <span> Competition <strong>Hunt Boats</strong> </span> <span>Place <strong>Triton 225</strong></span> <span>Result <strong>Triton 225</strong></span> </li>
                <li> <span>Date <strong>1/1/22</strong></span> <span> Competition <strong>Hunt Boats</strong> </span> <span>Place <strong>Triton 225</strong></span> <span>Result <strong>Triton 225</strong></span> </li>
                <li> <span>Date <strong>1/1/22</strong></span> <span> Competition <strong>Hunt Boats</strong> </span> <span>Place <strong>Triton 225</strong></span> <span>Result <strong>Triton 225</strong></span> </li>
              </ul>
            </div>
            <!--Representing--> 
            
          </div>
        </div>
        <!--profile section left--> 
        
        <!--profile section right -->
        <div class="col-md-4">
          <div class="profile-right-section-wraper"> 
            
            <!--profile-->
            <div class="profile-image-name-wrap">
              <div class="profile-image-new-wrap" style="background:url({{asset('upload/Profile/'.$value->image)}}) no-repeat top"></div>
              <h4> Lidia Stone </h4>
              <a href="#" class="email-profile"> <i class="las la-envelope"></i> Info@email.com </a>
              <div class="profile-socail-wrap"> <a href="#"> <i class="lab la-facebook-f"></i> </a> <a href="#"> <i class="lab la-twitter"></i> </a> <a href="#"> <i class="lab la-instagram"></i> </a> <a href="#"> <i class="lab la-linkedin-in"></i> </a> <a href="#"> <i class="lab la-youtube"></i> </a> <a href="#"> <i class="las la-globe"></i> </a> <a href="#"> <i class="las la-external-link-alt"></i> </a> </div>
              <div class="view-profile-btn"> <a href="#"> Request To Book</a> </div>
            </div>
            <!--profile--> 
            
            <!--profile info-->
            <div class="profile-info-wraper">
              <ul>
                <li> <a href="#"> <i class="las la-phone"></i> <strong>123 **********</strong> <i class="pull-right las la-eye"></i> </a> </li>
              </ul>
            </div>
            <!--profile info--> 
            
          </div>
        </div>
        <!--profile section right --> 
        
      </div>
    </div>
    <!--profile left right sections--> 
    
  </div>
</div>
<div class="call-toaction-main-wraper" style="background:#000;">
  <h5> Are you an artist? Register and publish your
    profile for free &amp; start getting bookings today! </h5>
  <a href="#"> Get Started Now </a> </div>
<script>
$(document).ready(function() {

    var sync1 = $("#sync1");
    var sync2 = $("#sync2");
    var slidesPerPage = 3; //globaly define number of elements per page
    var syncedSecondary = true;

    sync1.owlCarousel({
        items: 1,
        slideSpeed: 2000,
        nav: true,
        autoplay: false, 
        dots: true,
        loop: true,
        responsiveRefreshRate: 200,
        navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
    }).on('changed.owl.carousel', syncPosition);

    sync2
        .on('initialized.owl.carousel', function() {
            sync2.find(".owl-item").eq(0).addClass("current");
        })
        .owlCarousel({
            items: slidesPerPage,
            dots: true,
            nav: true,
            smartSpeed: 200,
            slideSpeed: 500,
            slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
            responsiveRefreshRate: 100
        }).on('changed.owl.carousel', syncPosition2);

    function syncPosition(el) {
        //if you set loop to false, you have to restore this next line
        //var current = el.item.index;

        //if you disable loop you have to comment this block
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);

        if (current < 0) {
            current = count;
        }
        if (current > count) {
            current = 0;
        }

        //end block

        sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
        var onscreen = sync2.find('.owl-item.active').length - 1;
        var start = sync2.find('.owl-item.active').first().index();
        var end = sync2.find('.owl-item.active').last().index();

        if (current > end) {
            sync2.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
            sync2.data('owl.carousel').to(current - onscreen, 100, true);
        }
    }

    function syncPosition2(el) {
        if (syncedSecondary) {
            var number = el.item.index;
            sync1.data('owl.carousel').to(number, 100, true);
        }
    }

    sync2.on("click", ".owl-item", function(e) {
        e.preventDefault();
        var number = $(this).index();
        sync1.data('owl.carousel').to(number, 300, true);
    });
});
</script> 
@endsection 