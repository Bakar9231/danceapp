@extends('layouts.app')



@section('content')



<style>

.header-main-wraper{

	position:fixed;

	top:0;

	width:100%

}

.footer-main-wraper{

	display:none;

}

.top-search-category-listing{

	overflow:hidden;

}

</style>





<!--content-->

<div class="search-results-main-wraper">

    <div class="container-fluid">

    <div class="row">







    <!--search result listing-->

    <div class="col-md-6">

    <div class="search-result-listing-wraper">





    <!--top category-->

    <div class="top-search-category-listing">



    <!--owl-->

    <div class="category-listing-wrap">

            <div class="owl-carousel-main-wrap">

              <div class="carousel-wrap">

                <div class="owl-carousel">

                  <div class="item">

                    <div class="category-list-wrap"><a href="{{route('filter_search','Dance')}}" class="active-list">

                      <div class="category-list-image" style="background:url(images/account-icon1.png) no-repeat top;"></div>

                      <div class="category-list-text">

                        <h4>Dance</h4>

                        </div>

                      </a></div>

                  </div>

                  <div class="item">

                    <div class="category-list-wrap"><a href="{{route('filter_search','Company')}}">

                      <div class="category-list-image" style="background:url(images/account-icon2.png) no-repeat top;"></div>

                      <div class="category-list-text">

                        <h4>Company</h4>

                      </div>

                      </a></div>

                  </div>

                  <div class="item">

                    <div class="category-list-wrap"><a href="{{route('filter_search','Theater')}}">

                      <div class="category-list-image" style="background:url(images/account-icon3.png) no-repeat top;"></div>

                      <div class="category-list-text">

                        <h4>Theater</h4>

                      </div>

                      </a></div>

                  </div>

                  <div class="item">

                    <div class="category-list-wrap"><a href="{{route('filter_search','Band')}}">

                      <div class="category-list-image" style="background:url(images/account-icon4.png) no-repeat top;"></div>

                      <div class="category-list-text">

                        <h4>Band</h4>

                      </div>

                      </a></div>

                  </div>

                  <div class="item">

                    <div class="category-list-wrap"><a href="{{route('filter_search','Photographer')}}">

                      <div class="category-list-image" style="background:url(images/account-icon5.png) no-repeat top;"></div>

                      <div class="category-list-text">

                        <h4>Photographer</h4>

                      </div>

                      </a></div>

                  </div>

                </div>

                </div>

                </div>

          </div>

    <!--owl-->





    </div>

    <!--top category-->





    <!--search result listing-->

    <div class="search-result-list-main-wrap">



    {{-- <h1> Agency </h1> --}}



    <ul>

    @foreach ($val as $value)

    <li>

    <div class="search-list-result-wrap">

    <a href="{{route('profiles',$value->id)}}">

    <div class="row">



    <div class="col-md-3">

    <div class="search-list-result-image" style="background:url({{asset('upload/Profile/'.$value->image)}}) no-repeat top"></div>

    </div>





    <div class="col-md-6">

    <div class="search-list-result-text">

    <h3> {{$value->name}}

    <span>

    <i class="fa fa-star active-star" aria-hidden="true"></i>

    <i class="fa fa-star active-star" aria-hidden="true"></i>

    <i class="fa fa-star active-star" aria-hidden="true"></i>

    <i class="fa fa-star" aria-hidden="true"></i>

    <i class="fa fa-star" aria-hidden="true"></i>

    </span>

    </h3>



    <div class="search-list-location">  <i class="fa fa-map-marker" aria-hidden="true"></i>  {{$value->city}} {{$value->state}} {{$value->country}}  </div>

    <p>{{$value->about}}.</p>

    </div>

    </div>







    <div class="col-md-3">

    <div class="search-list-right-wrap">



    <div class="search-list-icon">

    <i class="fa fa-heart-o" aria-hidden="true"></i>

    <i class="fa fa-envelope-open-o" aria-hidden="true"></i>

     <i class="fa fa-share-alt" aria-hidden="true"></i>

    </div>

    <h6>  Booking From </h6>

    <h5> $300 </h5>

    <span> View Detail </span>

    </div>

    </div>

    </div>

    </a>

    </div>

    </li>

    @endforeach





    </ul>

    </div>

    <!--search result listing-->









    </div>

    </div>

    <!--search result listing-->





    <!--map-->

    <div class="col-md-6">

    <div class="map-listing-wraper">

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26593.116400675088!2d73.1703624!3d33.5757258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1653563682469!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>

    </div>

    <!--map-->













    </div>

    </div>

    </div>

    <!--content-->

@endsection

