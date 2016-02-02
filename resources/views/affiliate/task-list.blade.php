@extends('layouts.affiliate')

@section('content')

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="text-center page-title-box">
            <h4>Task Querying List</h4>
        </div>
    </div>
</div>

<!-- Date Nearby -->
<div class="row">

    <!-- One Offer-->
    <div class="col-sm-6">
        <div class="card-box widget-user">
            <div class="col-sm-6">
                <img src="{{asset('images/users/avatar-2.jpg')}}" class="img-responsive img-circle" alt="user">
                <div class="wid-u-info">
                    <h4 class="m-t-0 m-b-5">Price: 220</h4>
                    <p class="text-muted m-b-5 font-13">Date:dd-mm-yyyy</p>
                    <small class="text-danger"><b>Waiting</b></small>
                </div>

            </div>
        </div>
    </div>

    <!-- One Offer-->
    <div class="col-sm-6">
        <div class="card-box widget-user">
            <div class="col-sm-6">
                <img src="{{asset('images/users/avatar-3.jpg')}}" class="img-responsive img-circle" alt="user">
                <div class="wid-u-info">
                    <h4 class="m-t-0 m-b-5">Price: 180</h4>
                    <p class="text-muted m-b-5 font-13">Date:dd-mm-yyyy</p>
                    <small class="text-success"><b>Assigned</b></small>
                </div>

            </div>
            <div class="col-sm-3">
                <button onclick="location.href = '{{url('assigned-task')}}'" class="btn btn-pink"> Begin Chat </button>
            </div>
        </div>
    </div>

    <!-- One Offer-->
    <div class="col-sm-6">
        <div class="card-box widget-user">
            <div class="col-sm-6">
                <img src="{{asset('images/users/avatar-6.jpg')}}" class="img-responsive img-circle" alt="user">
                <div class="wid-u-info">
                    <h4 class="m-t-0 m-b-5">Price: 310</h4>
                    <p class="text-muted m-b-5 font-13">Date:dd-mm-yyyy</p>
                    <small class="text-danger"><b>Waiting</b></small>
                </div>

            </div>
        </div>
    </div>

</div> <!-- End row -->


@stop