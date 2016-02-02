@extends('layouts.affiliate')

@section('content')

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="text-center page-title-box">
            <h4>Task Nearby</h4>
        </div>
    </div>
</div>

<!-- Date Nearby -->
<div class="row">

    <!-- One Offer-->
    <div class="col-sm-6">
        <div class="card-box widget-user">
            <div class="col-sm-6">
                <img src="{{asset('images/users/avatar-1.jpg')}}" class="img-responsive img-circle" alt="user">
                <div class="wid-u-info">
                    <h4 class="m-t-0 m-b-5">Price: 220</h4>
                    <p class="text-muted m-b-5 font-13">Date:dd-mm-yyyy</p>
                    <small class="text-warning"><b>Place: 123 example rd</b></small>
                </div>

            </div>
            <div class="col-sm-3">
                <button onclick="location.href = '{{url('make-offer')}}'" class="btn btn-pink">Send An Offer </button>
            </div>
        </div>
    </div>

    <!-- One Offer-->
    <div class="col-sm-6">
        <div class="card-box widget-user">
            <div class="col-sm-6">
                <img src="{{asset('images/users/avatar-4.jpg')}}" class="img-responsive img-circle" alt="user">
                <div class="wid-u-info">
                    <h4 class="m-t-0 m-b-5">Price: 180</h4>
                    <p class="text-muted m-b-5 font-13">Date:dd-mm-yyyy</p>
                    <small class="text-warning"><b>Place: 123 example rd</b></small>
                </div>

            </div>
            <div class="col-sm-3">
                <button onclick="location.href = '{{url('make-offer')}}'" class="btn btn-pink"> Send An Offer </button>
            </div>
        </div>
    </div>

    <!-- One Offer-->
    <div class="col-sm-6">
        <div class="card-box widget-user">
            <div class="col-sm-6">
                <img src="{{asset('images/users/avatar-7.jpg')}}" class="img-responsive img-circle" alt="user">
                <div class="wid-u-info">
                    <h4 class="m-t-0 m-b-5">Price: 310</h4>
                    <p class="text-muted m-b-5 font-13">Date:dd-mm-yyyy</p>
                    <small class="text-warning"><b>Place: 123 example rd</b></small>
                </div>

            </div>
            <div class="col-sm-3">
                <button onclick="location.href = '{{url('make-offer')}}'" class="btn btn-pink"> Send An Offer </button>
            </div>
        </div>
    </div>

</div> <!-- End row -->


@stop

@section('footer')
    <script>



    </script>
@stop



