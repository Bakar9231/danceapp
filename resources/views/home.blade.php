@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
@section('content')
@if(\Session::has('error'))
<script>
  $(document).ready(function () {
  swal(
  {
  icon: 'error',
  title: 'Oops...',
  text: 'Something went wrong!',
  },
  );
  });
</script>
{{ \Session::forget('error') }}
@endif
@if(\Session::has('success'))
<script>
  $(document).ready(function () {
  swal(
  {
  icon: 'success',
  title: 'Success',
  text: 'You Have Booked Successfully!',
  },
  );
  });
</script>
{{ \Session::forget('success') }}
@endif
<!--slider-->

<div class="slider-main-wraper">

  <div class="container-fluid">

    <h1><span>Shop Our</span><strong>Best</strong>Sellers.</h1>

    <a href="#">Shop Now</a>
  </div>

</div>

<!--slider-->



<!--content-->

<div class="content-wraper">



  <!--search-->

  <div class="search-slide-wrp aos-init aos-animate" data-aos="zoom-in">

    <div class="row">

      <div class="col-md-4">

        <div class="form-group"><img src="images/arrow-select.png" alt="arrow">

          <select class="select-control">

            <option>Beryl Emerald</option>

            <option>2</option>

            <option>3</option>

            <option>4</option>

            <option>5</option>

          </select>

        </div>

      </div>

      <div class="col-md-8">

        <div class="input-search-group">

          <input type="text" class="form-control" placeholder="Search  Location...">

          <button><img src="images/search-button.png" alt="button-search"></button>

        </div>

      </div>

    </div>

  </div>

  <!--search-->





  <!--top category-->

  <div class="category-main--wrap">

    <div class="container-fluid">



      <!--heading-->

      <div class="category-heading">

        <h2>Shop By Categories</h2>

        <p>Check Our All Categories</p>

      </div>

      <!--heading-->



      <!--owl-->

      <div class="category-listing-wrap">

        <div class="owl-carousel-main-wrap">

          <div class="carousel-wrap">

            <div class="owl-carousel">

              <div class="item">

                <div class="category-list-wrap"><a href="#">

                    <div class="category-list-image" style="background:url(images/account-icon1.png) no-repeat top;">
                    </div>

                    <div class="category-list-text">

                      <h4>Living Room</h4>

                      <span>See All<img src="images/arrow.svg" alt="arrow"></span>
                    </div>

                  </a></div>

              </div>

              <div class="item">

                <div class="category-list-wrap"><a href="#">

                    <div class="category-list-image" style="background:url(images/account-icon2.png) no-repeat top;">
                    </div>

                    <div class="category-list-text">

                      <h4>Dining Room</h4>

                      <span>See All<img src="images/arrow.svg" alt="arrow"></span>
                    </div>

                  </a></div>

              </div>

              <div class="item">

                <div class="category-list-wrap"><a href="#">

                    <div class="category-list-image" style="background:url(images/account-icon3.png) no-repeat top;">
                    </div>

                    <div class="category-list-text">

                      <h4>Bedroom</h4>

                      <span>See All<img src="images/arrow.svg" alt="arrow"></span>
                    </div>

                  </a></div>

              </div>

              <div class="item">

                <div class="category-list-wrap"><a href="#">

                    <div class="category-list-image" style="background:url(images/account-icon4.png) no-repeat top;">
                    </div>

                    <div class="category-list-text">

                      <h4>Mettresses</h4>

                      <span>See All<img src="images/arrow.svg" alt="arrow"></span>
                    </div>

                  </a></div>

              </div>

            </div>

          </div>

        </div>

      </div>

      <!--owl-->



    </div>

  </div>

  <!--top category-->



  <!--Get Inspired-->

  <div class="get-inspired-main-wraper">

    <div class="container-fluid">

      <div class="row">



        <!--heading list-->

        <div class="col-md-4">



          <!--heading-->

          <div class="heading-get-inpired">Get<br>

            Inspired</div>

          <!--heading-->



          <!--listing #1-->

          <div class="get-inspired-list-wrap"><a href="#"
              style="background:url(images/inspired-image1.png) no-repeat top">

              <div class="get-inspired-text">

                <h4>Zurich, Switzerland</h4>

                <span>Explore</span>
              </div>

            </a></div>

          <!--listing #1-->



        </div>

        <!--heading list-->



        <!--list-->

        <div class="col-md-4">

          <div class="listing-inspired-wrap">



            <!--listing #2-->

            <div class="get-inspired-list-wrap"><a href="#"
                style="background:url(images/inspired-image2.png) no-repeat top">

                <div class="get-inspired-text">

                  <h4>Geneva, Switzerland</h4>

                  <span>Explore </span>
                </div>

              </a></div>

            <!--listing #2-->



            <!--listing #3-->

            <div class="get-inspired-list-wrap"><a href="#"
                style="background:url(images/inspired-image3.png) no-repeat top">

                <div class="get-inspired-text">

                  <h4>London</h4>

                  <span>Explore</span>
                </div>

              </a></div>

            <!--listing #3-->



          </div>

        </div>

        <!--list-->



        <!--big list-->

        <div class="col-md-4">

          <div class="big-listing-wraper">

            <div class="big-list-wrap"><a href="#" style="background:url(images/inspired-image4.png) no-repeat top;">

                <div class="get-inspired-text">

                  <h4>Paris</h4>

                  <span>Explore</span>
                </div>

              </a></div>

          </div>

        </div>

        <!--big list-->



      </div>

    </div>

  </div>

  <!--Get Inspired-->



  <!--shopping-->

  <div class="shopping-main-wraper">

    <div class="container-fluid">

      <div class="row">



        <!--shopping image-->

        <div class="col-md-6">

          <div class="shopping-image-wraper">

            <div class="shopping-small-image" style="background:url(images/shop-small-image.png)"></div>

            <div class="shopping-big-image" style="background:url(images/shop-big-image.png)"></div>

          </div>

        </div>

        <!--shopping image-->



        <!--shopping text-->

        <div class="col-md-6">

          <div class="shopping-text-wraper">

            <h2>Shopping</h2>

            <h3>Made Easy</h3>

            <p>Ordering your furniture online is now easier than ever! Shop online now for our amazing pricing</p>

            <div class="shop-button-wrap"><a href="#">Shop Now</a></div>

          </div>

        </div>

        <!--shopping text-->



      </div>

    </div>

  </div>

  <!--shopping-->



  <!--best seller-->



  <div class="best-seller-main-wraper">



    <div class="container-fluid">



      <h2>Best Sellers</h2>

      <p>Shop Best Sellers</p>



      <ul class="row">

        @foreach ($data as $val)

        <li class="col-md-3">

          <div class="listing-bestseller-wraper">

            <div class="listing-bestseller-image"
              style="background:url({{asset('upload/Profile/'.$val->image)}}) no-repeat top center"></div>

            <div class="listing-bestseller-text"><span><i class="fa fa-map-marker" aria-hidden="true"></i>Established
                {{$val->city}} {{$val->state}} {{$val->country}} {{$val->zip}} </span>

              <h4>{{$val->aname}}</h4>

              <div class="star-rating-wrap"><i class="fa fa-star active-star" aria-hidden="true"></i><i
                  class="fa fa-star active-star" aria-hidden="true"></i><i class="fa fa-star active-star"
                  aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                  aria-hidden="true"></i></div>

              <p>{{$val->about}}. </p>

            </div>

            <div class="button-bestseller"><a href="{{route('profiles', $val->slug)}}">View Detail</a></div>

          </div>

        </li>

        @endforeach

      </ul>



    </div>



  </div>

  <!--best seller-->



  <!--Pay Later-->

  <div class="shopping-main-wraper paylater-main-wraper">

    <div class="container-fluid">

      <div class="row">



        <!--shopping text-->

        <div class="col-md-6">

          <div class="shopping-text-wraper">

            <h2>Pay Later</h2>

            <h3>Shop Now</h3>

            <p>We offer a variety of financing options to fit you and your lifestyle!</p>

            <div class="shop-button-wrap"><a href="#">Shop Now</a></div>

          </div>

        </div>

        <!--shopping text-->



        <!--shopping image-->

        <div class="col-md-6">

          <div class="shopping-image-wraper pay-image-wraper">

            <div class="shopping-big-image" style="background:url(images/pay-image1.png)"></div>

            <div class="shopping-small-image" style="background:url(images/pay-image2.png)"></div>

          </div>

        </div>

        <!--shopping image-->



      </div>

    </div>

  </div>

  <!--Pay Later-->



  <!--brands-->

  <div class="brands-listing-wraper">

    <div class="container-fluid">

      <ul class="row">

        <li class="col-md-3"><img src="images/brand-logo1.png" alt="logo"></li>

        <li class="col-md-3"><img src="images/brand-logo2.png" alt="logo"></li>

        <li class="col-md-3"><img src="images/brand-logo3.png" alt="logo"></li>

        <li class="col-md-3"><img src="images/brand-logo4.png" alt="logo"></li>

      </ul>

    </div>

  </div>

  <!--brands-->



  <!--big listing-->

  <div class="big-listing-bottom-wraper">

    <div class="container-fluid">

      <ul class="row">

        <li class="col-md-6">

          <div class="big-listing-left"><a href="#" style="background:url(images/big-left-list.webp) no-repeat top">

              <div class="big-listing-text">

                <h4>Create Your Space</h4>

                <span>shop now</span>
              </div>

            </a></div>

        </li>

        <li class="col-md-6">

          <div class="big-listing-left small-big-list-wrap"><a href="#"
              style="background:url(images/big-left-list.webp) no-repeat top">

              <div class="big-listing-text">

                <h4>Comfy & Cozy</h4>

                <span>shop now</span>
              </div>

            </a></div>

          <div class="big-listing-left small-big-list-wrap"><a href="#"
              style="background:url(images/big-left-list.webp) no-repeat top">

              <div class="big-listing-text">

                <h4>Comfy & Cozy</h4>

                <span>shop now</span>
              </div>

            </a></div>

        </li>

      </ul>

    </div>

  </div>

  <!--big listing-->



</div>

<!--content-->







<!--owl-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
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



@endsection

<!--content-->