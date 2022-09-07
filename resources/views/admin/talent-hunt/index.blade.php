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

						<li class="breadcrumb-item active"><a href="javascript:void(0)">Talnet Hunt's</a></li>

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

                                <h4 class="card-title">Talent Hunt's Records</h4>

                            </div>

                            <div class="card-body">

                                <div class="table-responsive">

                                    <table id="example3" class="display min-w850">

                                        <thead>

                                            <tr>

                                                <th></th>

                                                <th>Name</th>

                                                <th>Email</th>

                                                <th>Mood</th>

                                                <th>created_at</th>

                                                <th>Action</th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            @if(isset($talent))

                                            @foreach ($talent as $val)

                                            <tr>

                                                <td><img class="rounded-circle" width="35" src="{{asset('upload/profile/'.$val->user->avatar)}}" alt=""></td>

                                                <td> {{$val->user->fname}} {{$val->user->lname}}</td>

                                                <td><a href="javascript:void(0);"><strong>{{$val->user->email}}</strong></a></td>

                                                <td>{{$val->mood}}</td>

                                                <td>{{ $val->created_at->format('Y-m-d') }}</td>

                                                <td>

													<div class="d-flex">

														<a href="{{route('get_talent_hunt',$val->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>

														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>

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

