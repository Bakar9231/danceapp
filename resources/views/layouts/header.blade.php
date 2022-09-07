<!--header-->
<div class="header-main-wraper">
    <div class="container-fluid">
      <div class="row">

        <!--logo-->
        <div class="col-md-2">
          <div class="logo-wraper"><a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" alt="logo"></a></div>
        </div>
        <!--logo-->

        <!--navigation-->
        <div class="col-md-7">
          <div class="header-navigation-wrap">
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
        <!--navigation-->

        <!--search-->
        <div class="col-md-3">
          <div class="header-search">
            <div class="form-group">
            <form method="post" action="{{route('search')}}">
                @csrf
              <input type="text" class="form-control" name="search" placeholder="Search" required>
              <button type="submit"><img src="{{asset('images/search-icon.svg')}}" alt="icon"></button>
            </form>
            </div>
          </div>
        </div>
        <!--search-->


      </div>
    </div>
  </div>
  <!--//header-->
