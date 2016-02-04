@extends('layouts.affiliate')

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
                        <input class="form-control" placeholder="Name">
                    </div>
                </div><!-- /.form-group -->
                <div class="form-group bordered-top bordered-bottom no-margin">
                    <div class="input-group input-group-in no-border bordered-right bordered-left no-radius">
                        <span class="input-group-addon"><i class="glyphicon  glyphicon-phone"></i></span>
                        <input class="form-control" placeholder="Mobile Number">
                    </div>
                </div><!-- /.form-group -->
            </form><!-- /form -->
        </div><!-- /.panel-body -->
    </div>
</div>

<!-- Bank Account Form-->
<div class="row">
    <div class="card-box">
        <h4 class="m-t-0 header-title"><b>Bank Account</b></h4>
        <div class="panel-body">
            <form>
                <div class="form-group bordered-top bordered-bottom no-margin">
                    <div class="input-group input-group-in no-border bordered-right bordered-left no-radius">
                        <span class="input-group-addon"><i class="glyphicon  glyphicon-home"></i></span>
                        <input class="form-control" placeholder="Bank Detail">
                    </div>
                </div><!-- /.form-group -->
                <div class="form-group bordered-bottom">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group input-group-in no-border bordered-left no-radius">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                                <input class="form-control" placeholder="BSB">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group input-group-in no-border bordered-right bordered-left no-radius">
                                <span class="input-group-addon"><i class="glyphicon  glyphicon-lock"></i></span>
                                <input class="form-control" placeholder="Account No.">
                            </div>
                        </div>
                    </div>
                </div><!-- /.form-group -->
            </form><!-- /form -->
        </div><!-- /.panel-body -->
    </div>
</div>

<div class="card-box">
    <button onclick="location.href = '{{url('aprofile')}}'" class="btn btn-block btn--md btn-pink waves-effect waves-light"> Submit </button>
</div>

@stop




