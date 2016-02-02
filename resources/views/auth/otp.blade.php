@extends('layouts.login')

@section('header')
<!-- Ino Slider-->
<link href="{{asset('plugins/ion-rangeslider/ion.rangeSlider.css')}}"  rel="stylesheet" type="text/css">
<link href="{{asset('plugins/ion-rangeslider/ion.rangeSlider.skinFlat.css')}}"  rel="stylesheet" type="text/css">
@stop

@section('content')

    <!-- Content -->
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center page-title-box">
                    <h4>Please input your 7 digit password</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <form class="form-horizontal" role="form" action="{{URL('verify')}}"  method="POST" id="token-form" >
                        {{csrf_field()}}
                        <input name="userid" type="hidden" value="{{(isset($userid) ? $userid : old('userid') )}}" />
                        <input name="mobileNum" type="hidden" value="{{(isset($mobileNum) ? $mobileNum : old('mobileNum') )}}" />
                        <input name="userType" type="hidden" value="{{(isset($userType) ? $userType : old('userType ') )}}" />
                        <div class="form-group">
                            <label for="otp" class="col-md-2 control-label">Token</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control"  name="otp" data-parsley-type="digits" data-parsley-length="[7,7]" required >
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="row">
                <div class="col-sm-12">
                <div class="card-box">

                    <form class="form-horizontal">

                        <div class="form-group">
                            <label for="age-range" class="col-sm-2 control-label"><b>Age</b><span class="font-normal text-muted f-s-12 clearfix">Select your range</span></label>
                            <div class="col-sm-10">
                                <input type="text" id="age-range">
                            </div>
                        </div>


                    </form>

                </div>
                </div>
         </div>



        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">

                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked>
                        <label for="inlineRadio1"> Male </label>
                    </div>

                    <div class="radio radio-inline radio-pink">
                        <input type="radio" id="inlineRadio2" value="option2" name="radioInline" checked>
                        <label for="inlineRadio2"> Female </label>
                    </div>
                </div>
         </div>
        </div>

        <div class="clo-sm-12">
        <button class="btn btn-block btn-lg btn-purple waves-effect waves-light" type="submit" form="token-form" value="Submit">Find Date Nearby</button>
        </div>

        <!-- Error Message -->
        <div class="alert-danger text-center m-t-20">
            @if(session()->has('message') )
                <p>{{ session()->get('message') }}</p>
            @endif
        </div>

@stop

@section('footer')
    <!-- Ion slider -->
    <script src="{{ asset('plugins/ion-rangeslider/ion.rangeSlider.min.js')}}"></script>
    <script src="{{ asset('pages/jquery.ui-sliders.js')}}"></script>
    <!-- Parsley Form Validator -->
    <script src="{{ asset('pages/parsley.min.js')}}"></script>
    <script type="text/javascript">
        $('#token-form').parsley();
    </script>
@stop


