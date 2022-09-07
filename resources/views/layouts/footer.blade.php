<style>

.new-site-footer-wraper{
	padding:20px 30px;
	background:#0c1014
}

.footer-links-new-wrp{
}
.footer-links-new-wrp ul{
	list-style:none;
	margin-top:15px;
	text-align:center;
}
.footer-links-new-wrp ul li{
	display:inline-block;
	padding:0 35px;
}
.footer-links-new-wrp ul li a{
    color: #6c7682;
    font-size: 14px;
    text-decoration: none;
}
.footer-links-new-wrp ul li a:hover{
	color:#fff;
}
.footer-social-wrp{
	margin-top:7px;
}
.footer-social-wrp a{
	display:inline-block;
	width:40px;
	height:40px;
	border-radius:50%;
	border:1px solid #fff;
	color:#fff;
	text-decoration:none;
	text-align:center;
	padding-top:8px;
}
.footer-social-wrp a:hover{
	background:#fff;
	color:#0c1014
}

</style>


<!--footer-->
<div class="footer-main-wraper">
  <div class="container">
    <div class="row">

      <!--logo number-->
      <div class="col-md-4">
        <div class="footer-logo-number-wrap">
          <div class="footer-phone-number">
            <h5><span>Hotline Free 24/24</span>(+100) 123 456 7890</h5>
          </div>
          <div class="footer-contact-info"><span>123 lorem lipsum dollar dummy 54454</span><span>Call us (+100) 123 456
              7890</span><span>Fax us (+100) 123 456 789</span></div>
        </div>
      </div>
      <!--logo number-->

      <div class="col-md-2">
        <div class="footer-quick-links-wraper">
          <h4>Categories</h4>
          <ul>
            <li><a href="#">Electronics &amp; Office</a></li>
            <li><a href="#">Clothing</a></li>
            <li><a href="#">Accessories</a></li>
            <li><a href="#">Materials</a></li>
            <li><a href="#">Machinery</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-2">
        <div class="footer-quick-links-wraper">
          <h4>Information</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Terms &amp; Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Secure Payment</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-2">
        <div class="footer-quick-links-wraper">
          <h4>Information</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Terms &amp; Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Secure Payment</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-2">
        <div class="footer-quick-links-wraper">
          <h4>Information</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Terms &amp; Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Secure Payment</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--footer-->


<!--new footer-->
<div class="new-site-footer-wraper">
 <div class="container-fluid">
    <div class="row">


<div class="col-md-2">
<div class="logo-footer"><a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" alt="logo"></a></div>
</div>


<div class="col-md-8">
<div class="footer-links-new-wrp">
     <ul>
            <li><a href="#">Explore</a></li>
            <li><a href="#">Categories</a></li>
            <li><a href="#">Locations</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
          </ul>

</div>
</div>



<div class="col-md-2">
<div class="footer-social-wrp">
<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
</div>
</div>




</div>
</div>
</div>
<!--new footer-->

</head>

<body>
  <!-- Js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/aos.js')}}"></script>

  <!--animation-->
  <script>
    AOS.init({
  easing: 'ease-in-quad',
})
  </script>
  <!--//animation-->




  @if($_SERVER['SCRIPT_URL'] == '/public/')
  <!--owl-->
  <script>
    $('.owl-carousel').owlCarousel({
  loop: true,
  margin:25,
  nav: true,
  navText: [
    "<i class='fa fa-arrow-left'></i>",
    "<i class='fa fa-arrow-right'></i>"
  ],
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 2
    },
    600: {
      items: 4
    },
    1000: {
      items:6
    }
  }
})
  </script>
  <!--owl-->
  @else
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
  @endif




</body>

</html>