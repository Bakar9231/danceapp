@extends('user-dashboard-layouts.app')
@section('content')
<style>
  .booking-step-button button {
    background: #619b09;
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
  <div class="booking-step-main-wraper">
    <div class="row">

      <div class="col-md-7">
        <div class="paypal-text-wrap">

          <p> All payments are processed via Paypal. Payments are processed
            on Paypal’s secure servers. Your information is encrypted via
            industry standard 2048 bit encryption and passed on to paypal.
            we do not save your information </p>
          <form method="POST" action="{{ route('processTransaction') }}">
            @csrf
            <input type="hidden" name="profile_id" value="{{ $data['profile_id'] }}">
            <input type="hidden" name="recurring" value="{{ $data['recurring'] }}">
            <input type="hidden" name="booking_type" value="{{ $data['booking_type'] }}">
            <div class="booking-step-button">
              <button type="Submit"> Go to Paypal </button>
            </div>
          </form>
          <div class="paypal-image"> <img src="{{asset('images/paypal-img.png')}}" alt="image"> </div>

        </div>
      </div>

      <div class="col-md-5">
        <div class="booking-step-rate-wrap">
          <ul>
            <li> Booking Rate <strong> ${{ $data['price'] }}</strong> </li>
            <li> Recurring Days <strong>@if($data['recurring'] === "yes")
                Recurring 4 Weeks
                @else
                Recurring 1 Week
                @endif</strong> </li>
            <li> Service Charges <strong>$0</strong> </li>
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






</div>
<!--content-->
<script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_SANDBOX_CLIENT_ID') }}"></script>
@endsection