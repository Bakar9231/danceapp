@extends('layouts.app')



@section('content')



<style>
  .header-main-wraper {

    position: fixed;

    top: 0;

    width: 100%
  }

  .footer-main-wraper {

    display: none;

  }

  .top-search-category-listing {

    overflow: hidden;

  }

  .map-style {
    position: relative;
    overflow: hidden;
  }

  .map-pos {
    position: inherit !important;
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
                          <div class="category-list-image"
                            style="background:url(images/account-icon1.png) no-repeat top;"></div>
                          <div class="category-list-text">
                            <h4>Dance</h4>
                          </div>
                        </a></div>
                    </div>
                    <div class="item">
                      <div class="category-list-wrap"><a href="{{route('filter_search','Company')}}">
                          <div class="category-list-image"
                            style="background:url(images/account-icon2.png) no-repeat top;"></div>
                          <div class="category-list-text">
                            <h4>Company</h4>
                          </div>

                        </a></div>

                    </div>

                    <div class="item">

                      <div class="category-list-wrap"><a href="{{route('filter_search','Theater')}}">

                          <div class="category-list-image"
                            style="background:url(images/account-icon3.png) no-repeat top;"></div>

                          <div class="category-list-text">

                            <h4>Theater</h4>

                          </div>

                        </a></div>

                    </div>

                    <div class="item">

                      <div class="category-list-wrap"><a href="{{route('filter_search','Band')}}">

                          <div class="category-list-image"
                            style="background:url(images/account-icon4.png) no-repeat top;"></div>

                          <div class="category-list-text">

                            <h4>Band</h4>

                          </div>

                        </a></div>

                    </div>

                    <div class="item">

                      <div class="category-list-wrap"><a href="{{route('filter_search','Photographer')}}">

                          <div class="category-list-image"
                            style="background:url(images/account-icon5.png) no-repeat top;"></div>

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

              <li class="locations" data:lat="{{$value->latitude  }}" data:log="{{$value->longitude }}">

                <div class="search-list-result-wrap">

                  <a href="{{route('profiles',$value->slug)}}">

                    <div class="row">
                      <div class="col-md-3">

                        <div class="search-list-result-image"
                          style="background:url({{asset('upload/Profile/'.$value->image)}}) no-repeat top"></div>

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
                          <div class="search-list-location"> <i class="fa fa-map-marker" aria-hidden="true"></i>
                            {{$value->city}} {{$value->state}} {{$value->country}} </div>

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

                          <h6> Booking From </h6>

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
      <div class="col-md-6 map-style">
        <div>
          <div id="map_container" class="map-pos"></div>
        </div>
      </div>
      <!--map-->
    </div>
  </div>
</div>

<!--content-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
<script
  src="//maps.googleapis.com/maps/api/js?key=AIzaSyBLDIblkJ1Ac7bywYLO42XvdQ7AtHLDg1s&libraries=places&v=weeklyZ&callback=map_up">
</script>
<script>
  $(document).ready(function() {
    map_up();
  });
  var __defaults = {
  map : {
    key : 'AIzaSyAilNbkUpfBSlpqmg-1Sqh7dZ386-KbJUU',
    center : { lat: 36.778259, lng: -119.417931 }
  }
} 

var map = {
container_id : 'map_container',
settings : {
center : __defaults.map.center,
zoom : 7
},
instance : null,
init : () => {
map.instance = new google.maps.Map(document.getElementById(map.container_id),map.settings);
},
geocoordinate : (lat,lng,zoom=7) => {
if(map.instance !== null){
map.instance.setCenter({lat,lng});
map.instance.setZoom(zoom);
}else{
map.instance = new google.maps.Map(document.getElementById(map.container_id),map.settings);
map.instance.setCenter({lat,lng});
map.instance.setZoom(zoom);
}
}
}

function map_up(){
  map.init();
  $(".locations").each(function(index,location_li){
    let lng = parseFloat(location_li.getAttribute('data:log'));
    let lat = parseFloat(location_li.getAttribute('data:lat'));
  const svgMarker = {
  path: "M0 0h5v5H0Z",
  fillColor: "#ef6922",
  fillOpacity: 1,
  strokeWeight: 1,
  rotation: 45,
  scale: 2,
  anchor: new google.maps.Point(15, 30),
  };
  const marker = new google.maps.Marker({
  position: {lat,lng},
  map: map.instance,
  icon : svgMarker,
  animation: google.maps.Animation.DROP,
  title: 'marker',
  });
  location_li.addEventListener('mouseover',()=>{

  marker.setAnimation(google.maps.Animation.BOUNCE);
  });
  
  location_li.addEventListener('mouseout',()=>{
  marker.setAnimation(null);
  });
  });
  
  
}

</script>
@endsection