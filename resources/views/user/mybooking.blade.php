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

    <!--booking listing-->
    <div class="booking-listing-main-wraper">

        <h3> My Bookings </h3>

        <ul>
            @if($data)
            @foreach($data as $val)
            @if($val->user_id==Auth::user()->id)
            <li>
                <div class="booking-list-dashboard">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="booking-text-wrap">
                                <div class="booking-text-image"
                                    style="background:url(images/profile-image.jpg) no-repeat top"></div>
                                <span> Customer Name: <strong> {{ $val->profile->name }} </strong> </span>
                                <span> Booking Date: <strong> {{ $val->date }} </strong> </span>
                                <span> Contact Info: <strong>{{ $val->profile->wphone }} </strong>
                                </span>

                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="info-booking-wraper pending-booking-wrap">
                                <h5> Booking Status <span> {{ $val->status }} </span> </h5>
                                @if($val->status === 'Approved')
                                <div class="info-booking-btn"> <a href="#"> Confirm
                                        Booking </a> </div>
                                @endif
                                <p> Confirm booking within 48 hours or it will
                                    be automatically declined </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @else($val->profile_id==Auth::user()->id)
            <li>
                <div class="booking-list-dashboard">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="booking-text-wrap">
                                <div class="booking-text-image"
                                    style="background:url(images/profile-image.jpg) no-repeat top">
                                </div>
                                <span> Customer Name: <strong> {{ $val->user->name }} </strong> </span>
                                <span> Booking Date: <strong> {{ $val->date }} </strong> </span>
                                <span> Contact Info: <strong>{{ $val->user->phone }} </strong>
                                </span>

                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="info-booking-wraper pending-booking-wrap">
                                <h5> Booking Status <span> {{ $val->status }} </span> </h5>
                                <div class="info-booking-btn"> <a href="#" onClick="ConfirmBooking({{$val->id}})">
                                        Confirm
                                        Booking </a> </div>
                                <p> Confirm booking within 48 hours or it will
                                    be automatically declined </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endif
            @endforeach
            @else
            <li>
                No Recoed Found!
            </li>
            @endif
        </ul>
    </div>
    <!--booking listing-->

</div>
<!--content-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    function ConfirmBooking(itemid, userid) {
     var booking_id = itemid;
     $.ajax({
         type: 'post',
         url: 'status-booking',
         data: {
             'booking_id': booking_id,
              "_token": "{{ csrf_token() }}",
         },
         success: function () {
             alert("successfully done");
         },
         error: function (XMLHttpRequest) {
         }
     });
   }

</script>
@endsection
