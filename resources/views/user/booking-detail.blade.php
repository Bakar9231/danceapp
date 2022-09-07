@extends('user-dashboard-layouts.app')
@section('content')

<style>
  body div#datepicker {
    width: 100% !important;
    height: 300px !important;
  }

  body .ui-widget.ui-widget-content {
    border: 1px solid #c5c5c5;
    max-width: 445px;
    width: 100%;
    margin-top: 50px;
  }

  body .ui-datepicker td span,
  body .ui-datepicker td a {
    display: block;
    padding: .2em;
    text-align: center;
    height: 40px;
    text-decoration: none;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .go-to-payment-btn button {
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

  .go-to-payment-btn button:hover {
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

  <!--booking detail-->
  <form action="{{route('user_booking_info')}}" method="GET">
    <div class="booking-detail-main-wrap">

      <!--calendar-->
      <div class="booking-calendar-amount">
        <div class="row">

          <!--booking calendar-->
          <div class="col-md-7">
            <div id="datepicker" style="width:300px; height:300px "></div>
            <input type="hidden" name="date" value="" id="select_date">
            <input type="hidden" name="date1" value="" id="select_date1">
            <input type="hidden" name="date2" value="" id="select_date2">
            <input type="hidden" name="date3" value="" id="select_date3">
            <input type="hidden" name="profile_id" value="{{ $event->id }}">
          </div>
          <!--booking calendar-->

          <!--booking list-->
          <div class="col-md-5">
            <div class="booking-slot-wraper">
              <h4>Choose Booking Slot</h4>
              <ul class="p-0">
                <li class="d-flex align-items-center gap-2">
                  <div class="form-check mb-4">
                    <input class="form-check-input" data-price="{{ $event->half_price }}" type="radio" name="booking"
                      value="Half Day" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">

                    </label>
                  </div>
                  <div class="booking-slot-list active-booking-slot-list w-100">
                    <h2>Half Day </h2>
                    <span>Booking Price<strong>${{ $event->half_price }}</strong></span>
                  </div>
                </li>
                <li class="d-flex align-items-center gap-2">
                  <div class="form-check mb-4">
                    <input class="form-check-input" data-price="{{ $event->full_price }}" type="radio" name="booking"
                      value="Full Day" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">

                    </label>
                  </div>
                  <div class="booking-slot-list second-booking-slot-list w-100">
                    <h2>Full Day</h2>
                    <span>Booking Price<strong>${{ $event->full_price }}</strong></span>
                  </div>
                </li>
                <input type="hidden" name="price" value="{{ $event->half_price }}" id="select_price">
              </ul>
            </div>
          </div>
          <!--booking list-->

        </div>
      </div>
      <!--calendar-->

      <div class="weekly-booking-wraper">
        <h5> Recurring Weekly Booking? </h5>
        <p> Upto a maximum of 4 weeks subject to availibility</p>

        <div class="selectpaymentradio">

          <label class="customradio"><span class="radiotextsty">Yes </span>
            <input type="radio" checked="checked" name="recurring" value="yes">
            <span class="checkmark"></span>
          </label>
          <label class="customradio"><span class="radiotextsty">No </span>
            <input type="radio" name="recurring" value="no">
            <span class="checkmark"></span>
          </label>
        </div>
      </div>
      <div class="booking-weekly-wrap" id="booking_weekly">
        <h4> Choose week day from calendar above to change recurring booking day </h4>
        <ul class="row">

          <li class="col-md-3">
            <div class="listing-booking-weekly">
              <h5> 2 Hours </h5>
              <span id="span1"> 01 June 2022 </span>
            </div>
          </li>
          <li class=" col-md-3">
            <div class="listing-booking-weekly">
              <h5> 2 Hours </h5>
              <span id="span2"> 01 June 2022 </span>
            </div>
          </li>

          <li class="col-md-3">
            <div class="listing-booking-weekly">
              <h5> 2 Hours </h5>
              <span id="span3"> 01 June 2022 </span>
            </div>
          </li>

          <li class="col-md-3">
            <div class="listing-booking-weekly">
              <h5> 2 Hours </h5>
              <span id="span4"> 01 June 2022 </span>
            </div>
          </li>
        </ul>
      </div>
      <div class="go-to-payment-btn"> <button type="submit"> Go to Payment </button> </div>
    </div>
  </form>
  <!--booking detail-->

</div>
<!--content-->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
  $( function() {
    var date = $( "#datepicker" ).datepicker({ dateFormat: 'yy/mm/dd' }).val();
  } );
  $(document).ready(function() {

  var dateObject = new Date();
  dateObject.setDate(dateObject.getDate());
  $("#span1").html(formatDate(dateObject));
  dateObject.setDate(dateObject.getDate() + 7);
  $("#span2").html(formatDate(dateObject));
  dateObject.setDate(dateObject.getDate() + 7);
  $("#span3").html(formatDate(dateObject));
  dateObject.setDate(dateObject.getDate() + 7);
  $("#span4").html(formatDate(dateObject));
  $("input[name$='recurring']").click(function() {
  var test = $(this).val();
  if(test === "no")
  {
    $("#booking_weekly").hide();
  }
  else{
    $("#booking_weekly").show(); 
  }
  });
  });
  $("#datepicker").datepicker({
  onSelect: function() {
  var dateObject = $(this).datepicker('getDate',{ dateFormat: "yy/mm/dd" },);
  //alert(dateObject);
  $("#select_date").val(formatDate(dateObject));
  dateObject.setDate(dateObject.getDate());
  $("#span1").html(formatDate(dateObject));
  dateObject.setDate(dateObject.getDate() + 7);
  $("#span2").html(formatDate(dateObject));
  $("#select_date1").val(formatDate(dateObject));
  dateObject.setDate(dateObject.getDate() + 7);
  $("#span3").html(formatDate(dateObject));
  $("#select_date2").val(formatDate(dateObject));
  dateObject.setDate(dateObject.getDate() + 7);
  $("#span4").html(formatDate(dateObject));
  $("#select_date3").val(formatDate(dateObject));
  
  }
  });
  function formatDate(date) {
  var d = new Date(date),
  month = '' + (d.getMonth() + 1),
  day = '' + d.getDate(),
  year = d.getFullYear();
  
  if (month.length < 2) month='0' + month; if (day.length < 2) day='0' + day; return [year, month, day].join('-'); }
  $('input[type=radio][name=booking]').on('change', function() {
  var price = $('input[name="booking"]:checked').attr("data-price");
  $("#select_price").val(price);

})
  
</script>
@endsection