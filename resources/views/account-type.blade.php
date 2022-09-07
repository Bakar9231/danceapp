@extends('layouts.app')



@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
<style>
  .funkyradio div {

    clear: both;

    overflow: hidden;

  }



  .funkyradio label {

    width: 100%;

    background: #faeed9;

    font-weight: normal;

    padding: 25px 0;

    border-radius: 15px;

  }



  .funkyradio input[type="radio"]:empty,

  .funkyradio input[type="checkbox"]:empty {

    display: none;

  }



  .funkyradio input[type="radio"]:empty~label,

  .funkyradio input[type="checkbox"]:empty~label {

    position: relative;

    line-height: 2.5em;

    margin-top: 2em;

    cursor: pointer;

    -webkit-user-select: none;

    -moz-user-select: none;

    -ms-user-select: none;

    user-select: none;

  }



  .funkyradio input[type="radio"]:empty~label:before,

  .funkyradio input[type="checkbox"]:empty~label:before {

    position: absolute;

    display: block;

    top: 10px;

    bottom: 0;

    left: 15px;

    content: '';

    width: 40px;

    background: #eedcbc !important;

    border-radius: 50%;

    height: 40px;

    padding-top: 2px;

  }



  .funkyradio input[type="radio"]:hover:not(:checked)~label,

  .funkyradio input[type="checkbox"]:hover:not(:checked)~label {

    color: #888;

  }



  .funkyradio input[type="radio"]:hover:not(:checked)~label:before,

  .funkyradio input[type="checkbox"]:hover:not(:checked)~label:before {

    content: '\2714';

    color: #C2C2C2;

  }



  .funkyradio input[type="radio"]:checked~label,

  .funkyradio input[type="checkbox"]:checked~label {

    color: #777;

  }



  .funkyradio input[type="radio"]:checked~label:before,

  .funkyradio input[type="checkbox"]:checked~label:before {

    content: '\2714';

    color: #333;

    background-color: #ccc;

  }



  .funkyradio input[type="radio"]:focus~label:before,

  .funkyradio input[type="checkbox"]:focus~label:before {

    box-shadow: 0 0 0 3px #999;

  }



  .funkyradio-default input[type="radio"]:checked~label:before,

  .funkyradio-default input[type="checkbox"]:checked~label:before {

    color: #333;

    background-color: #ccc;

  }



  .funkyradio-primary input[type="radio"]:checked~label:before,

  .funkyradio-primary input[type="checkbox"]:checked~label:before {

    color: #fff;

    background-color: #337ab7;

  }



  .funkyradio-success input[type="radio"]:checked~label:before,

  .funkyradio-success input[type="checkbox"]:checked~label:before {

    color: #fff;

    background-color: #5cb85c;

  }



  .funkyradio-danger input[type="radio"]:checked~label:before,

  .funkyradio-danger input[type="checkbox"]:checked~label:before {

    color: #fff;

    background-color: #d9534f;

  }



  .funkyradio-warning input[type="radio"]:checked~label:before,

  .funkyradio-warning input[type="checkbox"]:checked~label:before {

    color: #fff;

    background-color: #f0ad4e;

  }



  .funkyradio-info input[type="radio"]:checked~label:before,

  .funkyradio-info input[type="checkbox"]:checked~label:before {

    color: #fff;

    background-color: #5bc0de;

  }

  .funkyradio-default {

    text-align: center;

  }

  .funkyradio-default span {

    width: 80px;

    height: 80px;

    border-radius: 50%;

    background: #fff;

    text-align: center;

    margin: 0 auto;

    padding-top: 22px;

    margin-bottom: 10px;

    display: block;

  }

  .funkyradio-default h3 {

    font-size: 18px;

    font-weight: bold;

  }
</style>



<!--dashboard-->

<div class="step-new-main-wraper">

  <div class="container-fluid">

    <form id="regForm" action="{{route('save_account_info')}}" method="POST" enctype="multipart/form-data">

      @csrf

      <div class="tab">

        <h1>Let's Get Your Account Setup And Open Up<br>

          a World Of Possibilities!!!...</h1>

        <p>Click<a href="#" id="nextBtn">Here</a>To Setup your Account</p>

      </div>

      <div class="tab">

        <h2>Account Type</h2>

        <!-- <ul class="row">

            <li class="col-md-4">

              <div class="listing-steps-account-wrap"><a href="#">

                <div class="listing-steps-account-icon"><img src="{{asset('images/account-icon1-1.png')}}" alt=""></div>

                <h4>Dance</h4>

                </a></div>

            </li>

            <li class="col-md-4">

              <div class="listing-steps-account-wrap"><a href="#">

                <div class="listing-steps-account-icon"><img src="{{asset('images/account-icon2-2.png')}}" alt=""></div>

                <h4>Company</h4>

                </a></div>

            </li>

            <li class="col-md-4">

              <div class="listing-steps-account-wrap"><a href="#">

                <div class="listing-steps-account-icon"><img src="{{asset('images/account-icon3-3.png')}}" alt=""></div>

                <h4>Theater</h4>

                </a></div>

            </li>

            <li class="col-md-2"></li>

            <li class="col-md-4">

              <div class="listing-steps-account-wrap"><a href="#">

                <div class="listing-steps-account-icon"><img src="{{asset('images/account-icon4-4.png')}}" alt=""></div>

                <h4>Band</h4>

                </a></div>

            </li>

            <li class="col-md-4">

              <div class="listing-steps-account-wrap"><a href="#">

                <div class="listing-steps-account-icon"><img src="{{asset('images/account-icon5-5.png')}}" alt=""></div>

                <h4>Photographer</h4>

                </a></div>

            </li>

          </ul>-->



        <div class="radio-btn-account-type-wrap">

          <ul class="row">

            <li class="col-md-4">

              <div class="funkyradio">

                <div class="funkyradio-default">

                  <input type="radio" name="account_type" value="Dance" id="radio1" />

                  <label for="radio1">

                    <span> <img src="{{asset('images/account-icon1-1.png')}}" alt=""> </span>

                    <h3> Dance </h3>

                  </label>

                </div>

              </div>

            </li>

            <li class="col-md-4">

              <div class="funkyradio">

                <div class="funkyradio-default">

                  <input type="radio" name="account_type" value="Company" id="radio2" />

                  <label for="radio2">

                    <span> <img src="{{asset('images/account-icon2-2.png')}}" alt=""> </span>

                    <h3> Company </h3>

                  </label>

                </div>

              </div>

            </li>

            <li class="col-md-4">

              <div class="funkyradio">

                <div class="funkyradio-default">

                  <input type="radio" name="account_type" value="Theater" id="radio3" />

                  <label for="radio3">

                    <span> <img src="{{asset('images/account-icon3-3.png')}}" alt=""> </span>

                    <h3> Theater </h3>

                  </label>

                </div>

              </div>

            </li>

            <li class="col-md-2"></li>

            <li class="col-md-4">

              <div class="funkyradio">

                <div class="funkyradio-default">

                  <input type="radio" name="account_type" value="Band" id="radio4" />

                  <label for="radio4">

                    <span> <img src="{{asset('images/account-icon4-4.png')}}" alt=""> </span>

                    <h3> Band </h3>

                  </label>

                </div>

              </div>

            </li>

            <li class="col-md-4">

              <div class="funkyradio">

                <div class="funkyradio-default">

                  <input type="radio" name="account_type" value="Photographer" id="radio5" />

                  <label for="radio5">

                    <span> <img src="{{asset('images/account-icon5-5.png')}}" alt=""> </span>

                    <h3> Photographer </h3>

                  </label>

                </div>

              </div>

            </li>

          </ul>

        </div>

      </div>

      <div class="tab">

        <h2>Basic Info</h2>

        <div class="carousel-main-step">

          <div class="owl-carousel-main-wrap">

            <div class="carousel-wrap">

              <div class="owl-carousel">

                <div class="item">

                  <div class="basic-info-list">

                    <h4>Basic Info</h4>

                    <p>It is a long established</p>

                  </div>

                </div>

                <div class="item">

                  <div class="basic-info-list">

                    <h4>Basic Info</h4>

                    <p>It is a long established</p>

                  </div>

                </div>

                <div class="item">

                  <div class="basic-info-list">

                    <h4>Basic Info</h4>

                    <p>It is a long established</p>

                  </div>

                </div>

                <div class="item">

                  <div class="basic-info-list">

                    <h4>Basic Info</h4>

                    <p>It is a long established</p>

                  </div>

                </div>

                <div class="item">

                  <div class="basic-info-list">

                    <h4>Basic Info</h4>

                    <p>It is a long established</p>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

        <div class="form-steps-new-wraper">

          <div class="form-group">

            <label>Name</label>

            <input type="text" name="name" id="name" class="form-control" placeholder="Alex John">

          </div>

          <div class="form-group">

            <label>Surname</label>

            <input type="text" name="surname" class="form-control" placeholder="Johny">

          </div>

          <div class="form-group">

            <label>Artist Name</label>

            <input type="text" name="aname" class="form-control" placeholder="Alex John">

          </div>

        </div>

      </div>

      <div class="tab">

        <h2>Location</h2>

        <div class="form-steps-new-wraper">

          <div class="form-group">

            <label class="fieldlabels">Type in an addres *</label>
            <input type="text" name="address" id="address-input" placeholder="" class="form-control map-input"
              data-parsley-group="block-3" autocomplete="on" />
            <div id="autocomplete-results"></div>
            <input type="hidden" name="latitude" id="address-latitude" value="0" />
            <input type="hidden" name="longitude" id="address-longitude" value="0" />

            <div id="autocomplete-results"></div>
          </div>
          <div id="address-map-container" class="form-control col span_12 first"
            style="height: 250px;overflow: hidden;">
            <div id="address-map" style="position: relative !important; overflow: visible !important;"></div>
            <input type="hidden" name="latitude" id="latitude" />
            <input type="hidden" name="longitude" id="longitude" />
          </div>


          <div class="form-group">

            <label>State</label>

            <input type="text" name="state" class="form-control" placeholder="Johny">

          </div>

          <div class="form-group">

            <label>Country</label>

            <input type="text" name="country" class="form-control" placeholder="country">

          </div>

        </div>

      </div>

      <div class="tab">

        <h2>Contact Info</h2>

        <div class="form-steps-new-wraper">

          <div class="form-group">

            <label>WhatsApp #</label>

            <input type="phone" name="wphone" class="form-control" placeholder="Alex John">

          </div>

          <div class="form-group">

            <label>Alt Email</label>

            <input type="email" name="email" class="form-control" placeholder="Johny">

          </div>

        </div>

      </div>

      <div class="tab">

        <h2>Personal Info</h2>

        <div class="form-steps-new-wraper">

          <div class="form-group">

            <label>Height</label>

            <input type="text" name="height" class="form-control" placeholder="Alex John">

          </div>

          <div class="form-group">

            <label>Weight</label>

            <input type="text" name="weight" class="form-control" placeholder="Johny">

          </div>

          <div class="form-group">

            <label>Eyes</label>

            <input type="text" name="eye" class="form-control" placeholder="Alex John">

          </div>

          <div class="form-group">

            <label>Hair</label>

            <input type="test" name="hair" class="form-control" placeholder="Alex John">

          </div>

        </div>

      </div>

      <div class="tab">

        <h2>Language Info</h2>

        <div class="form-steps-new-wraper">

          <div class="form-group">

            <label>Language</label>

            <select class="form-control" name="language">

              <option value="english">English</option>

              <option value="german">German</option>

              <option value="french">French</option>

              <option value="urdu">Urdu</option>

            </select>

          </div>

        </div>

      </div>

      <div class="tab">

        <h2>Profile Photos</h2>

        <div class="form-steps-new-wraper">

          <div class="form-group">

            <label>Profile Photo</label>

            <input type="File" name="image" class="form-control" placeholder="Alex John">

          </div>

          <div class="file-upload">
            <div class="image-upload-wrap">
              <div class="dropzone" id="document-dropzone"> </div>
            </div>
          </div>

        </div>

      </div>

      <div class="tab">

        <h2>Social Medias</h2>

        <div class="form-steps-new-wraper">

          <div class="form-group">

            <label>Facebook</label>

            <input type="text" name="facebook" class="form-control" placeholder="">

          </div>

          <div class="form-group">

            <label>Instagram</label>

            <input type="text" name="instagram" class="form-control" placeholder="">

          </div>

          <div class="form-group">

            <label>Linkedin</label>

            <input type="text" name="linkedin" class="form-control" placeholder="">

          </div>

          <div class="form-group">

            <label>Youtube</label>

            <input type="text" name="youtube" class="form-control" placeholder="">

          </div>

          <div class="form-group">

            <label>Website</label>

            <input type="text" name="website" class="form-control" placeholder="">

          </div>

          <div class="form-group">

            <label>Link to portfolio</label>

            <input type="text" name="portfolio" class="form-control" placeholder="">

          </div>

        </div>

      </div>

      <div class="tab">

        <h2>About Yourself</h2>

        <div class="form-steps-new-wraper">

          <div class="textarea-group form-group">

            <label>About Your Self</label>

            <textarea class="form-control" style="height:auto" rows="5" name="about"></textarea>

          </div>

        </div>

      </div>

      <div class="tab" id="customFields">

        <h2>Professional Experience</h2>

        {{--

        <table class="" id="customFields">

          <tr valign="top">

            <td class="grid grid-cols-7 gap-6 px-4 py-5 sm:p-6">
              <div class="form-group">

                <label>From</label>

                <input type="date" name="efrom[]" id="efrom" class="form-control" placeholder="">

              </div>

              <div class="form-group">

                <label>To</label>

                <input type="date" name="eto[]" id="eto" class="form-control" placeholder="">

              </div>

              <div class="form-group">

                <label>Experience</label>

                <input type="text" name="experince[]" id="experince" class="form-control" placeholder="">

              </div>

              <div class="w-full flex items-center"> <a href="javascript:void(0);" class="addCF btn btn-primary">Add</a>
              </div>
            </td>

          </tr>

        </table>

        --}}

        <div class="form-steps-new-wraper">

          <div class="form-group">

            <label>From</label>

            <input type="date" id="efrom" name="efrom[]" class="form-control" placeholder="">

          </div>

          <div class="form-group">

            <label>To</label>

            <input type="date" name="eto[]" id="eto" class="form-control" placeholder="">

          </div>

          <div class="form-group">

            <label>Experience</label>

            <input type="text" name="experince[]" id="experince" class="form-control" placeholder="">

          </div>

          <div class="addmore-button"><a href="javascript:void(0);" class="addCF btn btn-primary">Add More</a></div>

        </div>

      </div>

      <div class="tab" id="certifcate">

        <h2>Certificate/Competition</h2>

        <div class="form-steps-new-wraper">

          <div class="form-group">

            <label>Date</label>

            <input type="date" name="certifcate_date[]" id="certifcate_date" class="form-control" placeholder="">

          </div>

          <div class="form-group">

            <label>Competition</label>

            <input type="text" name="certifcate_competition[]" id="certifcate_competition" class="form-control"
              placeholder="">

          </div>

          <div class="form-group">

            <label>Place</label>

            <input type="text" class="form-control" name="certicate_place[]" id="certicate_place" placeholder="">

          </div>

          <div class="form-group">

            <label>Result</label>

            <input type="text" name="certifcate_result[]" id="certifcate_result" class="form-control" placeholder="">

          </div>

          <div class="addmore-button"><a href="javascript:void(0);" class="addCertifcate btn btn-primary">Add More</a>
          </div>

        </div>

      </div>

      <div class="tab" id="workshop">

        <h2>Upcoming Workshops</h2>

        <div class="form-steps-new-wraper">

          <div class="form-group">

            <label>Date</label>

            <input type="date" name="workshop_date[]" id="workshop_date" class="form-control" placeholder="">

          </div>

          <div class="form-group">

            <label>Style</label>

            <input type="text" name="workshop_style[]" id="workshop_style" class="form-control" placeholder="">

          </div>

          <div class="form-group">

            <label>Place</label>

            <input type="text" name="workshop_place[]" id="workshop_place" class="form-control" placeholder="">

          </div>

          <div class="addmore-button"><a href="javascript:void(0);" class="addWorkshop btn btn-primary"></i>Add More</a>
          </div>

        </div>

      </div>

      <div class="tab" id="offering">

        <h2>Offering</h2>

        <div class="form-steps-new-wraper">

          <div class="form-group">

            <label></label>

            <input type="text" name="offer[]" id="offer" class="form-control" placeholder="">

          </div>

          <div class="addmore-button"><a href="javascript:void(0);" class="addoffer btn btn-primary">Add More</a></div>

        </div>

      </div>

      <div class="tab" id="offering">

        <h2>Price</h2>

        <div class="form-steps-new-wraper">

          <div class="form-group">

            <label>Half Day Price</label>

            <input type="text" name="half_price" id="offer" class="form-control" placeholder="">

          </div>
          <div class="form-group">

            <label>Full Day Price</label>

            <input type="text" name="full_price" id="offer" class="form-control" placeholder="">

          </div>

        </div>

      </div>

      <div class="tab">

        <h2>Looking For</h2>

        <div class="form-steps-new-wraper">

          <div class="textarea-group">

            <label></label>

            <textarea class="form-control" rows="5"></textarea>

          </div>

        </div>

      </div>

      <div class="tab" id="favourites">

        <h2>Favorites</h2>

        <div class="form-steps-new-wraper">

          <div class="form-group">

            <label></label>

            <input class="form-control" name="favourite[]" id="favourite">

          </div>

          <div class="addmore-button"><a href="javascript:void(0);" class="addfav btn btn-primary">Add More</a></div>

        </div>

      </div>

      <div class="tab" id="educations">

        <h2>Education</h2>

        <div class="form-steps-new-wraper">

          <div class="form-group">

            <label>Title Of Degree</label>

            <input type="text" name="education[]" id="education" class="form-control" placeholder="">

          </div>

          <div class="addmore-button"><a href="javascript:void(0);" class="addeducation btn btn-primary">Add More</a>
          </div>

        </div>

      </div>

      <div class="tab" id="skills">

        <h2>Skills</h2>

        <div class="form-steps-new-wraper">

          <div class="form-group">

            <label>What skill Do You Have</label>

            <input type="text" name="skill[]" id="skill" class="form-control" placeholder="">

          </div>

          <div class="addmore-button"><a href="javascript:void(0);" class="addskil btn btn-primary">Add More</a></div>

        </div>

      </div>

      <div class="tab">

        <h2>Representing</h2>

        <div class="form-steps-new-wraper">

          <label class="customradio"><span class="radiotextsty">Agency</span>

            <input type="radio" checked="checked">

            <span class="checkmark"></span></label>

          <label class="customradio"><span class="radiotextsty">Agent</span>

            <input type="radio">

            <span class="checkmark"></span></label>

          <label class="customradio"><span class="radiotextsty">Other</span>

            <input type="radio">

            <span class="checkmark"></span></label>

          <label class="customradio"><span class="radiotextsty">Looking for agent</span>

            <input type="radio">

            <span class="checkmark"></span></label>

        </div>

      </div>

      <div class="button-fixed-wrap">

        <div>

          <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>

          <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>

        </div>

      </div>

      <!-- Circles which indicates the steps of the form: -->

      <div style="text-align:center;margin-top:40px; display:none"><span class="step"></span><span
          class="step"></span><span class="step"></span><span class="step"></span><span class="step"></span><span
          class="step"></span><span class="step"></span><span class="step"></span><span class="step"></span><span
          class="step"></span><span class="step"></span><span class="step"></span><span class="step"></span><span
          class="step"></span><span class="step"></span><span class="step"></span><span class="step"></span><span
          class="step"></span><span class="step"></span><span class="step"></span><span class="step"></span><span
          class="step"></span></div>

    </form>

  </div>

</div>

<!--dashboard-->

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



<script>
  var currentTab = 0; // Current tab is set to be the first tab (0)

showTab(currentTab); // Display the current tab



function showTab(n) {

  var x = document.getElementsByClassName("tab");

  x[n].style.display = "block";

  if (n == 0) {

    document.getElementById("prevBtn").style.display = "none";

  } else {

    document.getElementById("prevBtn").style.display = "inline";

  }

  if (n == (x.length - 1)) {

    document.getElementById("nextBtn").innerHTML = "Submit";

  } else {

    document.getElementById("nextBtn").innerHTML = "Next";

  }

  fixStepIndicator(n)

}



function nextPrev(n) {

  var x = document.getElementsByClassName("tab");

  if (n == 1 && !validateForm()) return false;

  x[currentTab].style.display = "none";

  currentTab = currentTab + n;

  if (currentTab >= x.length) {

    document.getElementById("regForm").submit();

    return false;

  }

  showTab(currentTab);

}



function validateForm() {

  var x, y, i, valid = true;

  x = document.getElementsByClassName("tab");

  y = x[currentTab].getElementsByTagName("input");

  for (i = 0; i < y.length; i++) {

    if (y[i].value == "") {

      y[i].className += " invalid";

      valid = false;

    }

  }

  // If the valid status is true, mark the step as finished and valid:

  if (valid) {

    document.getElementsByClassName("step")[currentTab].className += " finish";

  }

  return valid; // return the valid status

}



function fixStepIndicator(n) {

  // This function removes the "active" class of all steps...

  var i, x = document.getElementsByClassName("step");

  for (i = 0; i < x.length; i++) {

    x[i].className = x[i].className.replace(" active", "");

  }

  //... and adds the "active" class on the current step:

  x[n].className += " active";

}

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  var uploadedDocumentMap = {}
  Dropzone.options.documentDropzone = {
      url: "{{ route('add.images.store') }}",
      acceptedFiles: ".jpeg,.jpg,.png,.gif",
      maxFilesize: 5, // MB
      addRemoveLinks: true,
      headers: {
          'X-CSRF-TOKEN': "{{ csrf_token() }}"
      },
      success: function(file, response) {
          $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
          uploadedDocumentMap[file.name] = response.name
          //uploadedDocumentMap[file.id] = response.id

      },
      removedfile: function(file) {
          file.previewElement.remove()
          var name = ''
          if (typeof file.file_name !== 'undefined') {
              name = file.file_name
          } else {
              name = uploadedDocumentMap[file.name]
          }
          var fileName = name;
          $.ajax({
              type: 'POST',
              url: "{{ route('add.images.remove') }}",
              data: {
                  "_token": "{{ csrf_token() }}",
                  fileName: fileName
              },
              success: function(data) {
                  console.log("Image has been successfully removed!!");
              },
              error: function(e) {
                  console.log(e);
              }
          });
          $('form').find('input[name="document[]"][value="' + name + '"]').remove()
      },
      init: function() {
          @if(isset($project) && $project->document)
          var files = {
              !!json_encode($project->document) !!
          }
          for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
          }
          @endif
      }
  }
</script>
<script>
  $(document).ready(function() {

        $(".addCF").click(function() {

            var experince = $('#experince').val();

            var from = $('#efrom').val();

            var to = $('#eto').val();

            $("#customFields").append('<div class="form-steps-new-wraper"><div class="form-group"><input type="text" class="form-control" id="customFieldName"  value="' + from + '" placeholder="Input Name" readonly/><input type="hidden" name="efrom[]" value=' + from + '></div><div class="form-group"><input type="text" class="form-control" id="customFieldValue" name="quantity_' + to + '" value="' + to + '" placeholder="Input Value" readonly /><input type="hidden" name="eto[]" value=' + to + '></div><div class="form-group"><input type="text" class="form-control" id="customFieldValue" name="experince_' + experince + '" value="' + experince + '" placeholder="Input Value" readonly /><input type="hidden" name="experince[]" value=' + experince + '></div><div class="form-group"><a href="javascript:void(0);" class="remCF btn btn-danger">Remove</a></div></div>');

            $("#efrom").val('');

            $("#eto").val('');

            $("#experince").val('');

        });

        $("#customFields").on('click', '.remCF', function() {

            $(this).parent().parent().remove();

        });

        $(".addCertifcate").click(function() {

          var certifcate_date = $('#certifcate_date').val();

          var certifcate_competition = $('#certifcate_competition').val();

          var certicate_place = $('#certicate_place').val();

          var certifcate_result = $('#certifcate_result').val();

          $("#certifcate").append('<div class="form-steps-new-wraper"><div class="form-group"><input type="text" class="form-control" id="customFieldName"  value="' + certifcate_date + '" placeholder="Input Name" readonly/><input type="hidden" name="certifcate_date[]" value=' + certifcate_date + '></div><div class="form-group"><input type="text" class="form-control" id="customFieldValue" name="certifcate_competition_' + certifcate_competition + '" value="' + certifcate_competition + '" placeholder="Input Value" readonly /><input type="hidden" name="certifcate_competition[]" value=' + certifcate_competition + '></div><div class="form-group"><input type="text" class="form-control" id="customFieldValue" name="certicate_place_' + certicate_place + '" value="' + certicate_place + '" placeholder="Input Value" readonly /><input type="hidden" name="certicate_place[]" value=' + certicate_place + '></div><div class="form-group"><input type="text" class="form-control" id="customFieldValue" name="certifcate_result_' + certifcate_result + '" value="' + certifcate_result + '" placeholder="Input Value" readonly /><input type="hidden" name="certifcate_result[]" value=' + certifcate_result + '></div><div class="form-group"><a href="javascript:void(0);" class="removeCertifcate btn btn-danger">Remove</a></div></div>');

          $("#certifcate_date").val('');

          $("#certifcate_competition").val('');

          $("#certicate_place").val('');

          $("#certifcate_result").val('');

        });

        $("#certifcate").on('click', '.removeCertifcate', function() {

            $(this).parent().parent().remove();

        });

        $(".addWorkshop").click(function() {

            var workshop_date = $('#workshop_date').val();

            var workshop_style = $('#workshop_style').val();

            var workshop_place = $('#workshop_place').val();

            $("#workshop").append('<div class="form-steps-new-wraper"><div class="form-group"><input type="text" class="form-control" id="customFieldName"  value="' + workshop_date + '" placeholder="Input Name" readonly/><input type="hidden" name="workshop_date[]" value=' + workshop_date + '></div><div class="form-group"><input type="text" class="form-control" id="customFieldValue" name="workshop_style_' + workshop_style + '" value="' + workshop_style + '" placeholder="Input Value" readonly /><input type="hidden" name="workshop_style[]" value=' + workshop_style + '></div><div class="form-group"><input type="text" class="form-control" id="customFieldValue" name="workshop_place_' + workshop_place + '" value="' + workshop_place + '" placeholder="Input Value" readonly /><input type="hidden" name="workshop_place[]" value=' + workshop_place + '></div><div class="form-group"><a href="javascript:void(0);" class="removeworkshop btn btn-danger">Remove</a></div></div>');

            $("#workshop_place").val('');

            $("#workshop_style").val('');

            $("#workshop_date").val('');

        });

        $("#workshop").on('click', '.removeworkshop', function() {

            $(this).parent().parent().remove();

        });

        $(".addoffer").click(function() {

            var offer = $('#offer').val();

            $("#offering").append('<div class="form-steps-new-wraper"><div class="form-group"><input type="text" class="form-control" id="customFieldName"  value="' + offer + '" placeholder="Input Name" readonly/><input type="hidden" name="offer[]" value=' + offer + '></div><div class="form-group"><a href="javascript:void(0);" class="removeooffer btn btn-danger">Remove</a></div></div>');

            $("#offer").val('');

        });

        $("#offering").on('click', '.removeooffer', function() {

            $(this).parent().parent().remove();

        });

        $(".addfav").click(function() {

            var favourite = $('#favourite').val();

            $("#favourites").append('<div class="form-steps-new-wraper"><div class="form-group"><input type="text" class="form-control" id="customFieldName"  value="' + favourite + '" placeholder="Input Name" readonly/><input type="hidden" name="favourite[]" value=' + favourite + '></div><div class="form-group"><a href="javascript:void(0);" class="removefavourite btn btn-danger">Remove</a></div></div>');

            $("#favourite").val('');

        });

        $("#favourites").on('click', '.removefavourite', function() {

            $(this).parent().parent().remove();

        });

        $(".addeducation").click(function() {

            var education = $('#education').val();

            $("#educations").append('<div class="form-steps-new-wraper"><div class="form-group"><input type="text" class="form-control" id="customFieldName"  value="' + education + '" placeholder="Input Name" readonly/><input type="hidden" name="education[]" value=' + education + '></div><div class="form-group"><a href="javascript:void(0);" class="removeedu btn btn-danger">Remove</a></div></div>');

            $("#education").val('');

        });

        $("#educations").on('click', '.removeedu', function() {

            $(this).parent().parent().remove();

        });

        $(".addskil").click(function() {

            var skill = $('#skill').val();

            $("#skills").append('<div class="form-steps-new-wraper"><div class="form-group"><input type="text" class="form-control" id="customFieldName"  value="' + skill + '" placeholder="Input Name" readonly/><input type="hidden" name="skill[]" value=' + skill + '></div><div class="form-group"><a href="javascript:void(0);" class="removeskill btn btn-danger">Remove</a></div></div>');

            $("#skill").val('');

        });

        $("#skills").on('click', '.removeskill', function() {

            $(this).parent().parent().remove();

        });

    });

</script>
<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLDIblkJ1Ac7bywYLO42XvdQ7AtHLDg1s&libraries=places&callback=initialize"
  async defer></script>
<script>
  function initialize() {



        $('#address-input').on('keyup keypress', function(e) {

            var keyCode = e.keyCode || e.which;

            if (keyCode === 13) {

                e.preventDefault();

                return false;



            }

        });



        const locationInputs = document.getElementsByClassName("map-input");

        const autocompletes = [];

        const geocoder = new google.maps.Geocoder;

        for (let i = 0; i < locationInputs.length; i++) {



            const input = locationInputs[i];

            const fieldKey = input.id.replace("-input", "");

            const isEdit = document.getElementById(fieldKey + "-latitude").value != '' && document.getElementById(fieldKey + "-longitude").value != '';



            const latitude = parseFloat(document.getElementById(fieldKey + "-latitude").value) || -33.8688;

            const longitude = parseFloat(document.getElementById(fieldKey + "-longitude").value) || 151.2195;



            const map = new google.maps.Map(document.getElementById(fieldKey + '-map'), {

                center: {lat: latitude, lng: longitude},

                zoom: 13

            });

            const marker = new google.maps.Marker({

                map: map,

                position: {lat: latitude, lng: longitude},

            });



            marker.setVisible(isEdit);



            const autocomplete = new google.maps.places.Autocomplete(input);

            autocomplete.key = fieldKey;

            autocompletes.push({input: input, map: map, marker: marker, autocomplete: autocomplete});

        }



        for (let i = 0; i < autocompletes.length; i++) {

            const input = autocompletes[i].input;

            const autocomplete = autocompletes[i].autocomplete;

            const map = autocompletes[i].map;

            const marker = autocompletes[i].marker;



            google.maps.event.addListener(autocomplete, 'place_changed', function () {

                marker.setVisible(false);

                const place = autocomplete.getPlace();



                geocoder.geocode({'placeId': place.place_id}, function (results, status) {

                    if (status === google.maps.GeocoderStatus.OK) {

                        const lat = results[0].geometry.location.lat();

                        const lng = results[0].geometry.location.lng();

                        setLocationCoordinates(autocomplete.key, lat, lng);

                    }

                });



                if (!place.geometry) {

                    window.alert("No details available for input: '" + place.name + "'");

                    input.value = "";

                    return;

                }



                if (place.geometry.viewport) {

                    map.fitBounds(place.geometry.viewport);

                } else {

                    map.setCenter(place.geometry.location);

                    map.setZoom(17);

                }

                marker.setPosition(place.geometry.location);

                marker.setVisible(true);



            });

        }

    }



    function setLocationCoordinates(key, lat, lng) {

        const latitudeField = document.getElementById("latitude");

        const longitudeField = document.getElementById("longitude");

        latitudeField.value = lat;

        longitudeField.value = lng;

    }

</script>

@endsection