@extends('layouts.login')


@section('content')

    <form class="form-horizontal" action="{{URL('signin')}}"  method="POST" id="signin-form">

        <div class="login-field ">
            <input class="form-control" type="text"  placeholder="Mobile Number" name="email"  required>
            <i class="md md-phone form-control-feedback l-h-34"></i>
        </div>
        <div class="login-field ">
            <input class="form-control" type="password"   name="password" required>
            <i class="md md-phone form-control-feedback l-h-34"></i>
        </div>
        {{csrf_field()}}
        <div class="login-field ">
            <button class="btn btn-block w-lg btn-purple waves-effect waves-light" id="userSubmit">Sign In
            </button>
        </div>
    </form>

@stop


