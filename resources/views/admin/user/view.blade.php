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
						<li class="breadcrumb-item"><a href="javascript:void(0)">User Detail</a></li>
					</ol>
						<a class="float-right btn btn-warning btn-sm" href="{{route('alluser')}}"><i class="fa fa-arrow-left"></i> Back</a>
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
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <tbody>
                                            <tr>
                                                <th style="width:200px;">Submitted At</th>
                                                <td>{{date('M d,Y @h:i a',strtotime($user->created_at))}}</td>
											</tr>
										</tbody>
									</table>
								</div>
								<h3>User Information</h3>
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <tbody>
                                            <tr>
                                                <th style="width:200px;">Name</th>
                                                <td>{{$user->name ?? ""}}</td>
											</tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>{{$user->email ?? ""}}</td>
											</tr>
                                            <tr>
                                                <th>Phone</th>
                                                <td>{{$user->phone ?? ""}}</td>
											</tr>
                                        </tbody>
                                    </table>
                                </div>
								
								<h3>Account Type</h3>
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Account Type</th>
                                                <td>Dancer</td>
											</tr>
                                        </tbody>
                                    </table>
                                </div>
								<h3>Basic info</h3>
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Name</th>
                                                <td>{{$user->profile->name ?? ""}}</td>
											</tr>
                                            <tr>
                                                <th>Surname</th>
                                                <td>{{$user->profile->surname ?? ""}}</td>
											</tr>
                                            <tr>
                                                <th>Artist Name</th>
                                                <td>{{$user->profile->aname ?? ""}}</td>
											</tr>
                                        </tbody>
                                    </table>
                                </div>

								<h3>Location info</h3>
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>City</th>
                                                <td>{{$user->profile->city ?? ""}}</td>
											</tr>
                                            <tr>
                                                <th>State</th>
                                                <td>{{$user->profile->state ?? ""}}</td>
											</tr>
                                            <tr>
                                                <th>Country</th>
                                                <td>{{$user->profile->country ?? ""}}</td>
											</tr>
                                        </tbody>
                                    </table>
                                </div>
								<h3>Contact info</h3>
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Alt Email</th>
                                                <td>{{$user->profile->email ?? ""}}</td>
											</tr>
                                            <tr>
                                                <th>WhatsApp</th>
                                                <td>{{$user->profile->wphone ?? ""}}</td>
											</tr>
                                        </tbody>
                                    </table>
                                </div>
								<h3>Personal info</h3>
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Height</th>
                                                <td>{{$user->profile->height ?? ""}}</td>
											</tr>
                                            <tr>
                                                <th>Weight</th>
                                                <td>{{$user->profile->weight ?? ""}}</td>
											</tr>
                                            <tr>
                                                <th>Eyes</th>
                                                <td>{{$user->profile->eye ?? ""}}</td>
											</tr>
                                            <tr>
                                                <th>Hair</th>
                                                <td>{{$user->profile->hair ?? ""}}</td>
											</tr>
                                        </tbody>
                                    </table>
                                </div>
								<h3>Language info</h3>
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Language</th>
                                                <td>{{$user->profile->language ?? ""}}</td>
											</tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h3>Profile Picture</h3>
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <tbody>
                                            <tr>
                                            @isset($user->profile->image)
                                                <td><img src="{{ asset('upload/Profile/'.$user->profile->image) }}" style="height: 50px"; width="100px"></td>
                                            @endisset
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
@endsection
