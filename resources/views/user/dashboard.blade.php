@extends('user-dashboard-layouts.app')
@section('content')
		<!--content-->
        <div class="dashboard-content">

            <!--topbar-->
            <div class="topbar-content-dashboard">
              <div class="row">

                <!--search-->
                <div class="col-md-5">
                  <div class="search-dashboard-wrap">
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Search">
                      <button><i class="las la-search"></i></button>
                    </div>
                  </div>
                </div>
                <!--search-->

                <!--contact btn-->
                <div class="col-md-7">
                  <div class="contact-btn"><a href="#">Contact Now</a></div>
                </div>
                <!--contact btn-->

              </div>
            </div>
            <!--topbar-->

            <!--number list-->
            <div class="listing-content-range-wrap">
              <ul class="row">
                <li class="col-md-4">
                  <div class="listing-content-range">
                    <h5>Active Booking</h5>
                    <span>10</span><i class="las la-business-time"></i></div>
                </li>
                <li class="col-md-4">
                  <div class="listing-content-range">
                    <h5>Total Booking</h5>
                    <span>120</span><i class="las la-paste"></i></div>
                </li>
                <li class="col-md-4">
                  <div class="listing-content-range">
                    <h5>Total Earning</h5>
                    <span>$1000</span><i class="las la-coins"></i></div>
                </li>
              </ul>
            </div>
            <!--number list-->

            <!--coming soon-->
            <div class="coming-soon-calendar">
              <div class="row">
                <div class="col-md-6">
                  <div class="coming-soon-wraper">
                    <div class="row">

                      <!--text-->
                      <div class="col-md-8">
                        <div class="coming-soon-text">
                          <h3>Upgrade Your<br>
                            Account to unlock<br>
                            more features</h3>
                          <p>Coming Soon</p>
                        </div>
                      </div>
                      <!--text-->

                      <!--icon-->
                      <div class="col-md-4">
                        <div class="icon-unlock"><i class="las la-lock-open"></i></div>
                      </div>
                      <!--icon-->

                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="latest-activity-wraper">
                    <h4>Latest activity</h4>
                    <ul>
                      <li>Lorem lipsum dollar</li>
                      <li>Lorem lipsum dollar</li>
                      <li>Lorem lipsum dollar</li>
                      <li>Lorem lipsum dollar</li>
                      <li>Lorem lipsum dollar</li>
                      <li>Lorem lipsum dollar</li>
                      <li>Lorem lipsum dollar</li>
                      <li>Lorem lipsum dollar</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!--coming soon-->

            <!--graph chart-->
            <div class="graph-chart-wraper">
              <div class="row">
                <div class="col-md-6">
                  <div class="graph-chart-listing-wrap">
                    <h5>Weekly  Graph Bookings</h5>
                    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
                    <main>
                      <div id="bar-chart"></div>
                    </main>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="graph-chart-listing-wrap">
                    <h5>Weekly  Graph Profile Visits</h5>
                    <main>
                      <div id="bar-chart2"></div>
                    </main>
                  </div>
                </div>
              </div>
            </div>
            <!--graph chart-->

          </div>
          <!--content-->
@endsection
