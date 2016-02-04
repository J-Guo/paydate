@extends('layouts.user')

@section('header')
<!-- Ino Slider-->
<link href="{{asset('plugins/ion-rangeslider/ion.rangeSlider.css')}}"  rel="stylesheet" type="text/css">
<link href="{{asset('plugins/ion-rangeslider/ion.rangeSlider.skinFlat.css')}}"  rel="stylesheet" type="text/css">
@stop

@section('content')

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="text-center page-title-box">
            <h4>Personal Details</h4>
        </div>
    </div>
</div>

<!-- Basic Information Form-->
<div class="row">
    <div class="card-box">
        <h4 class="m-t-0 header-title"><b>Basic Information</b></h4>
        <div class="panel-body">
            <form>
                <div class="form-group bordered-top bordered-bottom no-margin">
                    <div class="input-group input-group-in no-border bordered-right bordered-left no-radius">
                        <span class="input-group-addon"><i class="glyphicon  glyphicon-user"></i></span>
                        <input class="form-control" placeholder="Display Name">
                    </div>
                </div><!-- /.form-group -->
                <div class="form-group bordered-top bordered-bottom no-margin">
                <div class="radio radio-info radio-inline">
                    <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked>
                    <label for="inlineRadio1"> Male </label>
                </div>

                <div class="radio radio-inline radio-pink">
                    <input type="radio" id="inlineRadio2" value="option2" name="radioInline" checked>
                    <label for="inlineRadio2"> Female </label>
                </div>
                </div><!-- /.form-group -->

            </form><!-- /form -->
        </div><!-- /.panel-body -->
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

<!-- Photo Upload-->
<div class="card-box">
    <h4 class="text-dark  header-title m-t-0">Upload your profile photo</h4>
    <div class="fileupload btn btn-warning btn-block waves-effect waves-light">
        <span><i class="ion-upload m-r-5"></i>Upload</span>
        <input type="file" class="upload">
    </div>
</div>

<div class="card-box">
    <button onclick="location.href = '{{url('main')}}'" class="btn btn-block btn--md btn-purple waves-effect waves-light"> Submit </button>
</div>

@stop

@section('footer')
<!-- Ion slider -->
<script src="{{ asset('plugins/ion-rangeslider/ion.rangeSlider.min.js')}}"></script>
<script src="{{ asset('pages/jquery.ui-sliders.js')}}"></script>
@stop




