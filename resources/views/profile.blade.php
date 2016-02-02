@extends('layouts.user')

@section('header')
<!--venobox lightbox-->
<link href="{{asset('plugins/magnific-popup/dist/magnific-popup.css')}}"  rel="stylesheet" type="text/css">
@stop

@section('content')
        <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="text-center page-title-box">
                <h4>Profile</h4>
            </div>
        </div>
    </div>


    <div class="card-box widget-user">
        <div class="col-sm-6">
            <img src="{{asset('images/users/avatar-1.jpg')}}" class="img-responsive img-circle" alt="user">
            <div class="wid-u-info">
                <h4 class="m-t-0 m-b-5">Simon Lucas</h4>
                <p class="text-muted m-b-5 font-13">04x-xxx-xxxx</p>
                <small class="text-warning"><b>123 Bank Account xxx</b></small>
            </div>

        </div>
    </div>

    <!-- Gallery -->
    <div class="card-box">
        <div class="row">
            <div class="col-md-12">

                <div class="widget">
                    <div class="widget-head">
                        <h4 class="text-dark  header-title m-t-0">Gallery</h4>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-content">
                        <div class="padd">

                            <div class="gallery">
                                <!-- Full size image link in anchor tag. Thumbnail link in image tag. -->
                                <div class="gal-detail thumb">
                                    <a href="#" class="prettyPhoto[pp_gal]"><img src="{{asset('images/gallery/1.jpg')}}" class="thumb-img" alt=""></a>
                                </div>
                                <div class="gal-detail thumb">
                                    <a href="#" class="prettyPhoto[pp_gal]"><img src="{{asset('images/gallery/2.jpg')}}" class ="thumb-img" alt=""></a>
                                </div>
                                <div class="gal-detail thumb">
                                    <a href="#" class="prettyPhoto[pp_gal]"><img src="{{asset('images/gallery/3.jpg')}}" class ="thumb-img" alt=""></a>
                                </div>

                            </div>

                        </div>
                        <div class="widget-foot">
                            <!-- Footer goes here -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Photo Upload-->
    <div class="card-box">
        <h4 class="text-dark  header-title m-t-0">Upload your photos</h4>
        <div class="fileupload btn btn-purple btn-block waves-effect waves-light">
            <span><i class="ion-upload m-r-5"></i>Upload</span>
            <input type="file" class="upload">
        </div>
    </div>


    <div class="card-box">
        <button onclick="location.href = '{{url('date-nearby')}}'" class="btn btn-block btn--md btn-pink waves-effect waves-light"> Submit </button>
    </div>


@stop

@section('footer')
    <script src="{{ asset('plugins/isotope/dist/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
@stop