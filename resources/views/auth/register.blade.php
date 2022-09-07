@extends('layouts.app')
<link href="{{asset('css/styles.css')}}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="login-form-wraper signup-form-wraper">
      <h1>Create New Account</h1>
      <form method="POST" action="{{ route('register') }}">

        @csrf

        <div class="form-group">

            <label> Name </label>

            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"

                placeholder="User Name">

            @error('name')

                <span class="invalid-feedback" role="alert">

                    <strong>{{ $message }}</strong>

                </span>

            @enderror

        </div>

        <div class="form-group">

            <label> Email Address </label>

            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"

                placeholder="Info@email.com">

            @error('email')

                <span class="invalid-feedback" role="alert">

                    <strong>{{ $message }}</strong>

                </span>

            @enderror

        </div>



        <div class="form-group">

            <label> Ph # </label>

            <input type="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="03029231486">

            @error('phone')

                <span class="invalid-feedback" role="alert">

                    <strong>{{ $message }}</strong>

                </span>

            @enderror

        </div>





        <div class="form-group">

            <label> Password </label>

            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"

                placeholder="Password (Minimum 8 Characters)">

            @error('password')

                <span class="invalid-feedback" role="alert">

                    <strong>{{ $message }}</strong>

                </span>

            @enderror

        </div>
        <div class="form-group">

            <label> Password </label>

            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">


        </div>



        <div class="login-button-wrap">
            <button>Create Account</button>
          </div>



    </form>
    </div>
  </div>
@endsection
