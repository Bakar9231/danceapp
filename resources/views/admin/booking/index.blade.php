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

						<li class="breadcrumb-item active"><a href="javascript:void(0)">Users</a></li>

					</ol>

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

                                <h4 class="card-title">Users Records</h4>

                            </div>

                            <div class="card-body">

                                <div class="table-responsive">

                                    <table id="example3" class="display min-w850">

                                        <thead>

                                            <tr>

                                                <th></th>

                                                <th>Booking Id</th>

                                                <th>Booking Type</th>

                                                <th>Bookking Tenure</th>

                                                <th>Booking Rate</th>
                                                <th>Total Amount</th>

                                                <th>Action</th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            @if(isset($user))

                                            @foreach ($user as $val)

                                            <tr>

                                                <td><img class="rounded-circle" width="35" src="{{asset('dashboard/images/profile/small/pic1.jpg')}}" alt=""></td>

                                                <td> {{$val->booking_id}}</td>

                                                <td><a href="javascript:void(0);"><strong>{{$val->booking_type}}</strong></a></td>

                                                {{-- <td>@if($val->status == 1)

                                                    <span class="badge light badge-success">Active</span>

                                                @else

                                                <span class="badge light badge-danger">Banned</span>

                                                @endif

                                                </td> --}}

                                                <td>{{$val->booking_tenure}}</td>
                                                <td>{{$val->booking_rate}}</td>
                                                <td>{{$val->total_amount}}</td>

                                                {{-- <td><select class="form-control m-select2 photoStatus" name="status" data-id="{{$val->id}}" onchange="functionstatus(this);">

                                                    <option value="">Select</option>

                                                    <option value="0">Baned</option>

                                                    <option value="1">UnBan</option>

                                                </select></td> --}}

                                                <td>

													<div class="d-flex">

														{{-- <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a> --}}

														<a href="{{route('deluser',$val->id)}}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>

													</div>

												</td>

                                            </tr>

                                            @endforeach

                                            @endif





                                        </tbody>

                                    </table>

                                </div>

                            </div>

                        </div>

                    </div>

				</div>

            </div>

        </div>

        <!--**********************************

            Content body end

        ***********************************-->

        {{-- <script>

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



        </script> --}}

@endsection

