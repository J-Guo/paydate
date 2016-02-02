@extends('layouts.affiliate')

@section('content')
        <!-- Page-Title -->
<div class="row">
    <div class="col-sm-12 text-center">
        <div class="page-title-box">
            <h4 class="page-title">Make An offer</h4>
        </div>
    </div>
</div>

<div class="card-box">
    <form class="form-horizontal" role="form">
        <div class="form-group">
            <label for="reg-username" class="col-sm-4 control-label">Price</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="reg-username">
            </div>
        </div>
        <div class="form-group">
            <label for="reg-email" class="col-sm-4 control-label">Date</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" id="reg-email">
            </div>
        </div>
        <div class="form-group">
            <label for="reg-email" class="col-sm-4 control-label">Place</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" id="reg-email">
            </div>
        </div>

        <div class="form-group">
           <!-- Form Submit button here-->
        </div>
    </form>
</div>

<div class="card-box">
    <button onclick="location.href = '{{url('task-list')}}'" class="btn btn-block w-lg btn-pink waves-effect waves-light"> Send </button>
</div>
@stop



