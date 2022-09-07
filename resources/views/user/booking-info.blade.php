@extends('user-dashboard-layouts.app')
@section('content')
<style>
  .booking-step-button button {
    background: #D6810A;
    padding: 12px 45px;
    text-decoration: none;
    color: #fff;
    text-transform: uppercase;
    font-size: 14px;
    position: relative;
    border-radius: 8px;
    font-weight: 500;
    border: none;
  }

  .booking-step-button button:hover {
    background: #093244;
  }
</style>
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

  <!--booking step-->
  <form method="GET" action="{{ route('user_booking_payment') }}">
    <div class="booking-step-main-wraper">
      <div class="row">

        <div class="col-md-7">
          <div class="booking-step-info">

            <ul>
              <li> Booking ID : <strong>{{ $refrence_id }} </strong> </li>
              <li> Customer Name : <strong>{{ Auth::user()->name }} </strong> </li>
              <li> Booking Type : <strong>{{ $data['booking'] }} </strong> </li>
              <li> Booking Slot : <strong>{{ $data['price'] }} </strong> </li>
              <li> Booking Tenure : <strong>@if($data['recurring'] === "yes")
                  Recurring 4 Weeks
                  @else
                  Recurring 1 Week
                  @endif </strong> </li>
            </ul>
          </div>
        </div>
        <input type="hidden" name="profile_id" value="{{ $data['profile_id'] }}">
        <input type="hidden" name="price" value="{{ $data['price'] }}">
        <input type="hidden" name="recurring" value="{{ $data['recurring'] }}">
        <input type="hidden" name="booking_type" value="{{ $data['booking'] }}">
        <div class="col-md-5">
          <div class="booking-step-rate-wrap">
            <ul>
              <li> Booking Rate <strong> ${{ $data['price'] }}</strong> </li>
              <li> Service Charges <strong>$ 0</strong> </li>
            </ul>

            <div class="total-pay-btn"> Total Payable: @if($data['recurring'] === "yes")
              ${{ $data['price']* 4 }}
              @else
              ${{ $data['price'] }}
              @endif </div>
          </div>
        </div>


      </div>
    </div>
    <!--booking step-->

    <!--note-->
    <div class="booking-note-wraper">
      <p><strong> Note </strong>
        Ut pharetra hendrerit metus in gravida. Nam consequat nibh et est rutrum semper. Sed faucibus rutrum turpis quis
        congue. In dapibus finibus accumsan. Sed a sem vitae velit posuere imperdiet nec sit amet lorem. Etiam in
        egestas
        justo. Suspendisse non lacinia sapien. Aenean congue feugiat erat, vel ultrices mauris tincidunt sit amet.
        Maecenas elementum massa quis scelerisque dictum. Nulla facilisi. Vestibulum nec tempor turpis. Aliquam at
        volutpat erat. Vestibulum elit felis, pretium quis nunc vel, maximus fermentum nunc.
      </p>
    </div>
    <!--note-->

    <div class="booking-service-terms-btn-wrap">
      <div class="row">

        <div class="col-md-8">
          <div class="booking-terms-wrp">
            <h4> Click <a href="#">here</a> to view our cancellation policy </h4>
            <div class="package-checkbox">
              <div class="boxes">
                <input type="checkbox" id="box-1">
                <label for="box-1">I have read and understood the Privacy Policy and Terms of Service</label>



              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="booking-step-button">
            <button type="submit"> Go to Payment </button>
          </div>
        </div>
  </form>



</div>
</div>


</div>
<!--content-->
@endsection