@extends('layouts.user')

@section("header")
    <link href="{{asset('plugins/ion-rangeslider/ion.rangeSlider.css')}}"  rel="stylesheet" type="text/css">
    <link href="{{asset('plugins/ion-rangeslider/ion.rangeSlider.skinFlat.css')}}"  rel="stylesheet" type="text/css">
@stop

@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12 text-center">
            <div class="page-title-box">
                <h4 class="page-title">Date Nearyby</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="m-t-0 m-b-20 header-title"><b>Markers</b></h4>
                <form @submit.prevent="locateAddress" id="locationForm">
                    <input type="text" id="address" v-model="address" placeholder="123 Example St">
                    <button class="btn btn-info w-xs" type="submit">Search Date</button>
                </form>
                <div id="User-Map" class="gmaps"></div>
            </div>
        </div>

    </div>

    <!-- Price Range-->
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">

                <form class="form-horizontal">

                    <div class="form-group">
                        <label for="age-range" class="col-sm-2 control-label"><b>Price</b><span class="font-normal text-muted f-s-12 clearfix">Select your range</span></label>
                        <div class="col-sm-10">
                            <input type="text" id="price-range">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="card-box">
    <form action="{{url('date-nearby')}}" method="POST">
        {{csrf_field()}}
        <button class="btn btn-block w-lg btn-purple waves-effect waves-light" type="submit">Search Date Nearby
        </button>
    </form>
    </div>
@stop

@section("footer")

    <!--Build Vue.js -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.14/vue.min.js"></script>
    <!--Build Loading Overlay -->
    <script src="{{asset('js/pages/loadingoverlay.js')}}"></script>
    <!--Build Page JavaScripts -->
    <script src="{{asset('js/map.js')}}"></script><!-- JS for map-->
    <!--Build Google Map API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAomTWe6-_JXMoza7hm9olIQLZ8TEq5PdY&callback=app.createMap"
            async defer></script>
    <!-- Ion slider -->
    <script src="{{ asset('plugins/ion-rangeslider/ion.rangeSlider.min.js')}}"></script>
    <script src="{{ asset('pages/jquery.ui-sliders.js')}}"></script>
@stop

