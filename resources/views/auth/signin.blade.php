@extends('layouts.login')


@section('content')

    <div class="wrapper-page">

        <div class="text-center">
            <a href="#" class="logo logo-lg"><i class="md md-equalizer"></i> </a>
        </div>
        <form class="form-horizontal" action="{{URL('signin')}}"  method="POST" id="signin-form">

            <div class="login-field ">
                <input class="form-control" type="text"  placeholder="Email Address" name="email"  required>
            </div>
            <div class="login-field ">
                <input class="form-control" type="password" placeholder="Password"  name="password" required>
            </div>
            {{csrf_field()}}
            <div class="login-field ">
                <button class="btn btn-block w-lg btn-purple waves-effect waves-light" id="userSubmit">Sign In
                </button>
            </div>
        </form>

    </div>

@stop


