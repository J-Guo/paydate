@extends('layouts.affiliate')

@section('content')

        <!-- Content -->
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="text-center page-title-box">
            <h4>Assigned Task</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="card-box widget-user">
            <div class="col-sm-6">
                <img src="{{asset('images/users/avatar-3.jpg')}}" class="img-responsive img-circle" alt="user">
                <div class="wid-u-info">
                    <h4 class="m-t-0 m-b-5">Price: 220</h4>
                    <p class="text-muted m-b-5 font-13">Date:dd-mm-yyyy</p>
                    <small class="text-warning"><b>Place: 123 example rd</b></small>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="card-box widget-icon">
            <div>
                <i class="glyphicon glyphicon-star text-primary"></i>
                <div class="wid-icon-info">
                    <p class="text-muted m-b-5 font-13 text-uppercase">Reviews</p>
                    <h4 class="m-t-0 m-b-5 counter">46</h4>
                    <small class="text-danger"><b>85% 5 Stars!</b></small>
                </div>
            </div>
        </div>
    </div>

</div> <!-- end row -->

<div class="row">
    <!-- CHAT -->
    <div class="col-lg-12">
        <div class="card-box">
            <h4 class="m-t-0 m-b-20 header-title"><b>Chat</b></h4>

            <div class="chat-conversation">
                <ul class="conversation-list nicescroll">
                    <li class="clearfix">
                        <div class="chat-avatar">
                            <img src="{{asset('images/users/avatar-3.jpg')}}" alt="male">
                            <i>10:00</i>
                        </div>
                        <div class="conversation-text">
                            <div class="ctext-wrap">
                                <p>
                                    Hello!
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="clearfix odd">
                        <div class="chat-avatar">
                            <img src="{{asset('images/users/female-icon.png')}}" alt="Female">
                            <i>10:01</i>
                        </div>
                        <div class="conversation-text">
                            <div class="ctext-wrap">
                                <p>
                                    Hi, How are you? What about our next meeting?
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="chat-avatar">
                            <img src="{{asset('images/users/avatar-3.jpg')}}" alt="male">
                            <i>10:01</i>
                        </div>
                        <div class="conversation-text">
                            <div class="ctext-wrap">
                                <p>
                                    Yeah everything is fine
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="clearfix odd">
                        <div class="chat-avatar">
                            <img src="{{asset('images/users/female-icon.png')}}" alt="male">
                            <i>10:02</i>
                        </div>
                        <div class="conversation-text">
                            <div class="ctext-wrap">
                                <p>
                                    Wow that's great
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-sm-9 chat-inputbar">
                        <input type="text" class="form-control chat-input" placeholder="Enter your text">
                    </div>
                    <div class="col-sm-3 chat-send">
                        <button type="submit" class="btn btn-md btn-primary btn-block waves-effect waves-light">Send</button>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- end col-->
</div>

@stop