@extends('dashboard-layouts.app')
@section('content')
  <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">All Events</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">{{$eventData->name}} Event Submissions</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">{{$eventSubmissionData->video_title}}</a></li>
					</ol>
						<a class="float-right btn btn-warning btn-sm" href="{{url('/admin/events/'.$eventData->slug)}}"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
                <!-- row -->

                @if (session('error') || session('message'))
                <div class="alert alert-success" style="float: left; width: 100%;">
                <span class="{{ session('error') ? 'error':'success' }}">{{ session('error') ?? session('message') }}</span>
            </div>
            @endif
                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{$eventData->name}}'s Submissions</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <tbody>
                                            <tr>
                                                <th style="width:200px;">Submitted At</th>
                                                <td>{{date('M d,Y @h:i a',strtotime($eventSubmissionData->created_at))}}</td>
											</tr>
                                            <tr>
                                                <th style="width:200px;">ID</th>
                                                <td>{{$eventSubmissionData->video_slug}}</td>
											</tr>
										</tbody>
									</table>
								</div>
								<h5>User Information</h5>
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <tbody>
                                            <tr>
                                                <th style="width:200px;">Name</th>
                                                <td>{{$eventSubmissionData->name}}</td>
											</tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>{{$eventSubmissionData->email}}</td>
											</tr>
                                            <tr>
                                                <th>Phone</th>
                                                <td>{{$eventSubmissionData->phone}}</td>
											</tr>
                                            <tr>
                                                <th>Address</th>
                                                <td>{{$eventSubmissionData->address}}</td>
											</tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="clearfix"></div>
								<h5>Profession Information</h5>
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <tbody>
                                            <tr>
                                                <th style="width:200px;">Profession</th>
                                                <td>{{ucwords($eventSubmissionData->profession)}}</td>
											</tr>
											@if($eventSubmissionData->profession == 'student')
                                            <tr>
                                                <th>Institute</th>
                                                <td>{{($eventSubmissionData->Institute != '')?ucwords($eventSubmissionData->Institute):'-'}}</td>
											</tr>
                                            <tr>
                                                <th>Department</th>
                                                <td>{{($eventSubmissionData->department != '')?ucwords($eventSubmissionData->department):'-'}}</td>
											</tr>
                                            <tr>
                                                <th>Semester</th>
                                                <td>{{($eventSubmissionData->semester != '')?ucwords($eventSubmissionData->semester):'-'}}</td>
											</tr>
											@else
                                            <tr>
                                                <th>Organization</th>
                                                <td>{{($eventSubmissionData->organization != '')?ucwords($eventSubmissionData->organization):'-'}}</td>
											</tr>
											@endif
                                            <tr>
                                                <th>Submitting As</th>
                                                <td>{{ucwords($eventSubmissionData->submitting_as)}}</td>
											</tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="clearfix"></div>
								<h5>Video Information</h5>
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Video Category</th>
                                                <td>{{ucwords(str_replace('_',' ',$eventSubmissionData->cataegory))}}</td>
											</tr>
                                            <!--<tr>
                                                <th>Video Duration</th>
                                                <td>{{intval($eventSubmissionData->video_duration/60)}} min</td>
											</tr>-->
                                            <tr>
                                                <th style="width:200px;">Title</th>
                                                <td>{{$eventSubmissionData->video_title}}</td>
											</tr>
                                            <tr>
                                                <th>Caption</th>
                                                <td>{{nl2br($eventSubmissionData->video_caption)}}</td>
											</tr>
                                            <tr>
                                                <th>Director</th>
                                                <td>{{$eventSubmissionData->director_name}}</td>
											</tr>
                                            <tr>
                                                <th>Producer</th>
                                                <td>{{$eventSubmissionData->producer_name}}</td>
											</tr>
                                            <tr>
                                                <th>Actor(s)</th>
                                                <td>{{$eventSubmissionData->actor_name}}</td>
											</tr>
                                            <tr>
                                                <th>Video</th>
                                                <td><a target="_blank" href="https://info-at-rime.wistia.com/medias/{{$eventSubmissionData->video_id}}" class="btn btn-primary btn-sm">View Video</a></td>
											</tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
				</div>
{{--
                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Submission Undertaking</h4>
                            </div>
                            <div class="card-body">
    <div class="field-main-wraper">

    <p style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style='font-size:17px;line-height:115%;font-family:"Cambria",serif;'>Fatima Jinnah Women University&nbsp;</span></strong><span style='font-size:17px;line-height:115%;font-family:"Cambria",serif;'>in Collaboration with<strong>&nbsp;RIME Digital&nbsp;</strong></span></p>

          <p style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style='font-size:17px;line-height:115%;font-family:"Cambria",serif;'>organizing&nbsp;</span></strong></p>

          <p style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style='font-size:17px;line-height:115%;font-family:"Arial Black",sans-serif;'>Naqsh Digital Film Festival (NDFF), 2022</span></strong></p>

          <p style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style="font-size:28px;line-height:115%;">UNDERTAKING:</span></strong></p>

          <p style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-family:"Times New Roman",serif;'>I <span><input type="text" name="myname" style="border:none; border-radius:0; box-shadow:none; outline:none; border-bottom:1px solid #000" value="{{$eventSubmissionData->myname}}" disabled /></span>along with my team members: hereby assures you that we are only copyright holder to submit this video. Also&nbsp;</span><span style='font-family:"Times New Roman",serif;'>the any fees, costs or other claims arising from the screening of the film at the Film Festival are solely the responsibility of me and my team and that the Festival/Fatima Jinnah Women University and RIME Digital cannot be held responsible for any breach of copy rights or any other legal issues arises.&nbsp;</span></p>

          <p style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:.25in;'><span style='font-family:"Arial",sans-serif;'>CNIC Numbers:</span></p>

          <ol style="list-style-type: undefined;">
@php
$cnic = explode(',',$eventSubmissionData->cnic);
@endphp
			@foreach($cnic as $key => $item)
			@if($item != '')
            <li><span><input type="text" name="cnic[]" style="border:none; border-radius:0; box-shadow:none; outline:none; border-bottom:1px solid #000" value="{{$item}}" disabled /></span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</li>
			@endif
			@endforeach
          </ol>

          <p style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>

          <p style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:4.5in;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:.5in;'><span style="font-size:13px;line-height:115%;">&nbsp;</span></p>

                        <div class="package-checkbox">

                          <div class="boxes">

                            <input type="checkbox" id="box-2" name="terms" checked disabled />

                            <label for="box-2">I have read the TOS & Guidelines</a> </label>

                          </div>

                        </div>


                      </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
				</div>
--}}
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        <script>
            function functionstatus(val)
        {
            console.log(val);
            var status = val.value;
            var id = $(val).attr("data-id");
            if (status == "") {
                return false;
            }
            $.ajax({
                type: "post",
                url: "{{route('user_status')}}",
                data: {
                    '_token': "{{csrf_token()}}",
                    id: id,
                    status: status
                },
                success: function(data) {
                        window.location = '{{ route('alluser') }}'


                }
            });
        }

        </script>
@endsection
