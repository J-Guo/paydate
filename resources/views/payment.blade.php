@extends('layouts.user')

@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12 text-center">
            <div class="page-title-box">
                <h4 class="page-title">Payment Confirmation</h4>
            </div>
        </div>
    </div>

    <div class="panel fade in panel-default panel-fill" data-fill-color="true" data-init-panel="true">
        <div class="panel-body">
            <form action="{{url('assigned-date')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group bordered-top bordered-bottom no-margin">
                    <div class="input-group input-group-in no-border bordered-right bordered-left no-radius">
                        <span class="input-group-addon"><i class="glyphicon  glyphicon-user"></i></span>
                        <input class="form-control" placeholder="Name On Card">
                    </div>
                </div><!-- /.form-group -->
                <div class="form-group bordered-top bordered-bottom no-margin">
                    <div class="input-group input-group-in no-border bordered-right bordered-left no-radius">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
                        <input class="form-control" placeholder="Card Number">
                    </div>
                </div><!-- /.form-group -->
                <div class="form-group bordered-bottom">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group input-group-in no-border bordered-left no-radius">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                <input class="form-control" placeholder="MM/YY">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group input-group-in no-border bordered-right bordered-left no-radius">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input class="form-control" placeholder="CVC">
                            </div>
                        </div>
                    </div>
                </div><!-- /.form-group -->
                <div class="form-group clearfix">
                    <button type="submit" class="btn btn-primary pull-right">Continue <i class="fa fa-arrow-circle-right"></i></button>
                </div><!-- /.form-group -->
            </form><!-- /form -->
        </div><!-- /.panel-body -->
    </div>
@stop



