@extends('layouts.login')


@section('header')
    <link href="{{asset('css/flexslider.css')}}"  rel="stylesheet" type="text/css">
    <!-- The 4th slider input field style -->
    <style type="text/css">
        .login-field {
            width: 100%;
            margin-bottom: 80px;
        }
    </style>
@stop

@section('content')


    <div class="wrapper-page">

        <div class="text-center">
            <a href="#" class="logo logo-lg"><i class="md md-equalizer"></i> <span>Paydate</span> </a>
        </div>

        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="images/slider/wall-paper1.jpg" />
                </li>
                <li>
                    <img src="images/slider/wall-paper2.jpg" />
                </li>
                <li>
                    <img src="images/slider/wall-paper3.jpg" />
                </li>
                <li>
                    <form class="form-horizontal" action="{{URL('otp')}}"  method="POST" id="phone-form">

                            <div class="login-field ">
                                <input class="form-control" type="text"  placeholder="Mobile Number" name="mobile" data-parsley-type="digits" required>
                                <i class="md md-phone form-control-feedback l-h-34"></i>
                            </div>
                            {{csrf_field()}}
                            <input type="hidden" id="userType" name="userType" value="user">
                            <div class="login-field ">
                                <button class="btn btn-block w-lg btn-purple waves-effect waves-light" id="userSubmit">Find a Pay-date
                                </button>
                            </div>
                            <div class="alert-danger text-center m-t-20">
                                @if(session()->has('message') )
                                    <p>{{ session()->get('message') }}</p>
                                @endif
                            </div>
                            <div class="login-field text-center">
                                {A one time password will be sent by SMS}
                            </div>
                            <div >
                                <button class="btn btn-block w-lg btn-pink waves-effect waves-light" id="affiliateSubmit">Become Anffiliate
                                </button>
                            </div>
                    </form>
                </li>
            </ul>
        </div>



    </div>


@stop

@section('footer')
    <!-- flexslider -->
    <script src="js/jquery.flexslider.js"></script>
    <!-- Parsley Form Validator-->
    <script src="{{ asset('pages/parsley.min.js')}}"></script>
    <script>
        //initialize flex slider
        $(document).ready(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                animationLoop: false
            });

            $('#phone-form').parsley();

           //set user type based on submit button
           $('#affiliateSubmit').on("click",function(){
                $('#userType').val('affiliate');
          });
        });
    </script>
@stop


