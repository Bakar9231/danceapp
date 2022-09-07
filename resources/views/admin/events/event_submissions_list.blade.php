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
						<li class="breadcrumb-item active"><a href="javascript:void(0)">{{$eventData->name}} Event Submissions</a></li>
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
                                <h4 class="card-title">{{$eventData->name}}'s Submissions</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Video Title</th>
                                                <!--<th>Video Duration</th>-->
                                                <th>ID</th>
                                                <th>Submitted By</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Created</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($all_event_submissions))
                                            @foreach ($all_event_submissions as $key => $val)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$val->video_title}}</td>
                                                <!--<td>{{intval($val->video_duration/60)}} min</td>-->
                                                <td>{{$val->video_slug}}</td>
                                                <td>{{$val->name}}</td>
                                                <td>{{$val->email}}</td>
												<td>{{$val->phone}}</td>
                                                <td>{{date('M d,Y @h:i a',strtotime($val->created_at))}}</td>
                                                <td>
													<div class="d-flex">
														{{-- <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a> --}}
														<a href="{{url('/admin/events/'.$eventData->slug.'/'.$val->video_slug)}}" class="btn btn-info shadow btn-xs sharp"><i class="fa fa-eye"></i></a>
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
