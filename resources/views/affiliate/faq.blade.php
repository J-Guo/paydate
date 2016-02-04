@extends('layouts.affiliate')


@section('content')

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="text-center page-title-box">
            <h4>These is FAQ Page</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="tabbable">
            <ul class="nav nav-tabs padding-18 tab-size-bigger" id="myTab">
                <li class="active">
                    <a data-toggle="tab" href="#faq-tab-1" aria-expanded="true">
                        <i class="blue ace-icon fa fa-question-circle bigger-120"></i>
                        General
                    </a>
                </li>

                <li class="">
                    <a data-toggle="tab" href="#faq-tab-3" aria-expanded="false">
                        <i class="orange ace-icon fa fa-credit-card bigger-120"></i>
                        Payments
                    </a>
                </li>
            </ul>

            <div class="tab-content no-border padding-24">
                <div id="faq-tab-1" class="tab-pane fade active in">
                    <h4 class="blue">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        General Questions
                    </h4>

                    <div class="space-8"></div>

                    <div id="faq-list-1" class="panel-group accordion-style1 accordion-style2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="#faq-1-1" data-parent="#faq-list-1" data-toggle="collapse" class="accordion-toggle collapsed" aria-expanded="false">
                                    <i class="pull-right ace-icon fa fa-chevron-left" data-icon-hide="ace-icon fa fa-chevron-down" data-icon-show="ace-icon fa fa-chevron-left"></i>

                                    <i class="ace-icon fa fa-user bigger-130"></i>
                                    &nbsp; High life accusamus terry richardson ad squid?
                                </a>
                            </div>

                            <div class="panel-collapse collapse" id="faq-1-1" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="#faq-1-3" data-parent="#faq-list-1" data-toggle="collapse" class="accordion-toggle collapsed" aria-expanded="false">
                                    <i class="pull-right ace-icon fa fa-chevron-left" data-icon-hide="ace-icon fa fa-chevron-down" data-icon-show="ace-icon fa fa-chevron-left"></i>

                                    <i class="ace-icon fa fa-credit-card bigger-130"></i>
                                    &nbsp; Single-origin coffee nulla assumenda shoreditch et?
                                </a>
                            </div>

                            <div class="panel-collapse collapse" id="faq-1-3" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="#faq-1-4" data-parent="#faq-list-1" data-toggle="collapse" class="accordion-toggle collapsed" aria-expanded="false">
                                    <i class="pull-right ace-icon fa fa-chevron-left" data-icon-hide="ace-icon fa fa-chevron-down" data-icon-show="ace-icon fa fa-chevron-left"></i>

                                    <i class="ace-icon fa fa-files-o bigger-130"></i>
                                    &nbsp; Sunt aliqua put a bird on it squid?
                                </a>
                            </div>

                            <div class="panel-collapse collapse" id="faq-1-4" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="#faq-1-5" data-parent="#faq-list-1" data-toggle="collapse" class="accordion-toggle collapsed" aria-expanded="false">
                                    <i class="pull-right ace-icon fa fa-chevron-left" data-icon-hide="ace-icon fa fa-chevron-down" data-icon-show="ace-icon fa fa-chevron-left"></i>

                                    <i class="ace-icon fa fa-cog bigger-130"></i>
                                    &nbsp; Brunch 3 wolf moon tempor sunt aliqua put?
                                </a>
                            </div>

                            <div class="panel-collapse collapse" id="faq-1-5" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="faq-tab-3" class="tab-pane fade">
                    <h4 class="blue">
                        <i class="orange ace-icon fa fa-credit-card bigger-110"></i>
                        Payment Questions
                    </h4>

                    <div class="space-8"></div>

                    <div id="faq-list-3" class="panel-group accordion-style1 accordion-style2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="#faq-3-1" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed">
                                    <i class="ace-icon fa fa-plus smaller-80" data-icon-hide="ace-icon fa fa-minus" data-icon-show="ace-icon fa fa-plus"></i>&nbsp;
                                    Enim eiusmod high life accusamus terry richardson?
                                </a>
                            </div>

                            <div class="panel-collapse collapse" id="faq-3-1">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="#faq-3-2" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed">
                                    <i class="ace-icon fa fa-plus smaller-80" data-icon-hide="ace-icon fa fa-minus" data-icon-show="ace-icon fa fa-plus"></i>&nbsp;
                                    Single-origin coffee nulla assumenda shoreditch et?
                                </a>
                            </div>

                            <div class="panel-collapse collapse" id="faq-3-2">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="#faq-3-3" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed">
                                    <i class="ace-icon fa fa-plus smaller-80" data-icon-hide="ace-icon fa fa-minus" data-icon-show="ace-icon fa fa-plus"></i>&nbsp;
                                    Sunt aliqua put a bird on it squid?
                                </a>
                            </div>

                            <div class="panel-collapse collapse" id="faq-3-3">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="#faq-3-4" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed">
                                    <i class="ace-icon fa fa-plus smaller-80" data-icon-hide="ace-icon fa fa-minus" data-icon-show="ace-icon fa fa-plus"></i>&nbsp;
                                    Brunch 3 wolf moon tempor sunt aliqua put?
                                </a>
                            </div>

                            <div class="panel-collapse collapse" id="faq-3-4">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div>

        <div class="card-box">
            <button onclick="location.href = '{{url('apersonal-detail')}}'" class="btn btn-block btn--md btn-pink waves-effect waves-light">Yes I understand </button>
        </div>

@stop




