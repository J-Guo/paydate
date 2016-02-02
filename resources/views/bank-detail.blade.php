@extends('layouts.user')

@section("topbar")
        <!-- Top Bar Start -->
<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <a href="index.html" class="logo"><i class="md md-equalizer"></i> <span>Minton</span> </a>
        </div>
    </div>

    <!-- Navbar -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="">
                <div class="pull-left">
                    <button class="button-menu-mobile open-left waves-effect">
                        <i class="md md-menu"></i>
                    </button>
                    <span class="clearfix"></span>
                </div>

                <ul class="nav navbar-nav hidden-xs">
                    <li><a href="#" class="waves-effect">Files</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle waves-effect" data-toggle="dropdown"
                           role="button" aria-haspopup="true" aria-expanded="false">Projects <span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Projects two</a></li>
                            <li><a href="#">Graphic design</a></li>
                            <li><a href="#">Projects four</a></li>
                        </ul>
                    </li>
                </ul>

                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                    <input type="text" placeholder="Search..." class="form-control app-search-input">
                    <a href=""><i class="fa fa-search"></i></a>
                </form>

                <ul class="nav navbar-nav navbar-right pull-right">

                    <li class="dropdown hidden-xs">
                        <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light"
                           data-toggle="dropdown" aria-expanded="true">
                            <i class="md md-notifications"></i> <span
                                    class="badge badge-xs badge-pink">3</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg">
                            <li class="text-center notifi-title">Notification</li>
                            <li class="list-group nicescroll notification-list">
                                <!-- list item-->
                                <a href="javascript:void(0);" class="list-group-item">
                                    <div class="media">
                                        <div class="pull-left p-r-10">
                                            <em class="fa fa-diamond noti-primary"></em>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">A new order has been placed A new
                                                order has been placed</h5>
                                            <p class="m-0">
                                                <small>There are new settings available</small>
                                            </p>
                                        </div>
                                    </div>
                                </a>

                                <!-- list item-->
                                <a href="javascript:void(0);" class="list-group-item">
                                    <div class="media">
                                        <div class="pull-left p-r-10">
                                            <em class="fa fa-cog noti-warning"></em>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">New settings</h5>
                                            <p class="m-0">
                                                <small>There are new settings available</small>
                                            </p>
                                        </div>
                                    </div>
                                </a>

                                <!-- list item-->
                                <a href="javascript:void(0);" class="list-group-item">
                                    <div class="media">
                                        <div class="pull-left p-r-10">
                                            <em class="fa fa-bell-o noti-success"></em>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">Updates</h5>
                                            <p class="m-0">
                                                <small>There are <span class="text-primary">2</span> new
                                                    updates available
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </a>

                            </li>

                            <li>
                                <a href="javascript:void(0);" class=" text-right">
                                    <small><b>See all notifications</b></small>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="hidden-xs">
                        <a href="#" class="right-bar-toggle waves-effect waves-light"><i
                                    class="md md-settings"></i></a>
                    </li>

                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <div id="sidebar-menu">
            <ul>
                <li class="text-muted menu-title">Main</li>

                <li>
                    <a href="index.html" class="waves-effect waves-primary subdrop"><i
                                class="md md-dashboard"></i><span> Dashboard </span></a>
                </li>


                <li class="has_sub">
                    <a href="#" class="waves-effect waves-primary"><i class="md md-palette"></i> <span> UI Kit </span>
                    </a>
                    <ul class="list-unstyled">
                        <li><a href="ui-buttons.html">Buttons</a></li>
                        <li><a href="ui-panels.html">Panels</a></li>
                        <li><a href="ui-portlets.html">Portlets</a></li>
                        <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                        <li><a href="ui-tabs.html">Tabs & Accordions</a></li>
                        <li><a href="ui-modals.html">Modals</a></li>
                        <li><a href="ui-progressbars.html">Progress Bars</a></li>
                        <li><a href="ui-notification.html">Notification</a></li>
                        <li><a href="ui-bootstrap.html">BS Elements</a></li>
                        <li><a href="ui-typography.html">Typography</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect waves-primary"><i
                                class="md md-invert-colors-on"></i><span> Components </span> <span
                                class="label label-default pull-right">5</span> </a>
                    <ul class="list-unstyled">
                        <li><a href="components-grid.html">Grid</a></li>
                        <li><a href="components-widgets.html">Widgets</a></li>
                        <li><a href="components-nestable-list.html">Nesteble</a></li>
                        <li><a href="components-range-sliders.html">Range Sliders </a></li>
                        <li><a href="components-sweet-alert.html">Sweet Alerts </a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect waves-primary"><i class="md md-redeem"></i>
                        <span> Icons </span> </a>
                    <ul class="list-unstyled">
                        <li><a href="icons-glyphicons.html">Glyphicons</a></li>
                        <li><a href="icons-materialdesign.html">Material Design</a></li>
                        <li><a href="icons-themifyicon.html">Themify Icons</a></li>
                        <li><a href="icons-ionicons.html">Ion Icons</a></li>
                        <li><a href="icons-fontawesome.html">Font awesome</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect waves-primary"><i class="md md-now-widgets"></i><span> Forms </span></a>
                    <ul class="list-unstyled">
                        <li><a href="form-elements.html">General Elements</a></li>
                        <li><a href="form-advanced.html">Advanced Form</a></li>
                        <li><a href="form-validation.html">Form Validation</a></li>
                        <li><a href="form-wizard.html">Form Wizard</a></li>
                        <li><a href="form-wysiwig.html">WYSIWYG Editor</a></li>
                        <li><a href="form-summernote.html">Summernote</a></li>
                        <li><a href="form-uploads.html">Multiple File Upload</a></li>
                        <li><a href="form-xeditable.html">X-editable</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect waves-primary"><i class="md md-view-list"></i><span> Tables </span></a>
                    <ul class="list-unstyled">
                        <li><a href="tables-basic.html">Basic Tables</a></li>
                        <li><a href="tables-datatable.html">Data Table</a></li>
                        <li><a href="tables-editable.html">Editable Table</a></li>
                        <li><a href="tables-responsive.html">Responsive Table</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect waves-primary"><i
                                class="md md-poll"></i><span> Charts </span> </a>
                    <ul class="list-unstyled">
                        <li><a href="chart-flot.html">Flot Chart</a></li>
                        <li><a href="chart-morris.html">Morris Chart</a></li>
                        <li><a href="chart-chartist.html">Chartist chart</a></li>
                        <li><a href="chart-nvd3.html">Nvd3 charts</a></li>
                        <li><a href="chart-peity.html">Peity Charts</a></li>
                        <li><a href="chart-sparkline.html">Sparkline Charts</a></li>
                        <li><a href="chart-other.html">Other Chart</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect waves-primary"><i
                                class="md md-place"></i><span> Maps </span> <span
                                class="label label-primary pull-right">2</span></a>
                    <ul class="list-unstyled">
                        <li><a href="map-google.html"> Google Map</a></li>
                        <li><a href="map-vector.html"> Vector Map</a></li>
                    </ul>
                </li>

                <li class="text-muted menu-title">More</li>

                <li class="has_sub">
                    <a href="#" class="waves-effect waves-primary"><i
                                class="md md-mail"></i><span> Mail </span></a>
                    <ul class="list-unstyled">
                        <li><a href="mail-inbox.html">Inbox</a></li>
                        <li><a href="mail-compose.html">Compose Mail</a></li>
                        <li><a href="mail-read.html">View Mail</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect waves-primary"><i
                                class="md md-pages"></i><span> Pages </span></a>
                    <ul class="list-unstyled">
                        <li><a href="pages-blank.html">Blank Page</a></li>
                        <li><a href="pages-login.html">Login</a></li>
                        <li><a href="pages-register.html">Register</a></li>
                        <li><a href="pages-recoverpw.html">Recover Password</a></li>
                        <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                        <li><a href="pages-404.html">404 Error</a></li>
                        <li><a href="pages-500.html">500 Error</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect waves-primary"><i
                                class="md md-place"></i><span> Extras </span></a>
                    <ul class="list-unstyled">
                        <li><a href="extras-timeline.html">Timeline</a></li>
                        <li><a href="extras-invoice.html">Invoice</a></li>
                        <li><a href="extras-calendar.html"> Calendar</a></li>
                        <li><a href="extras-email-template.html">Email template</a></li>
                        <li><a href="extras-maintenance.html">Maintenance</a></li>
                        <li><a href="extras-coming-soon.html">Coming-soon</a></li>
                        <li><a href="extras-gallery.html"> Gallery</a></li>
                    </ul>
                </li>

            </ul>
            <div class="clearfix"></div>
        </div>


        <div class="clearfix"></div>
    </div>

    <div class="user-detail">
        <div class="dropup">
            <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img
                        src="assets/images/users/avatar-2.jpg" alt="user-img" class="img-circle"> </a>
            <ul class="dropdown-menu">
                <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
            </ul>
        </div>

        <h5 class="m-t-0 m-b-0">John Deo</h5>
        <p class="text-muted m-b-0">
            <small><i class="fa fa-circle text-success"></i> <span>Online</span></small>
        </p>
    </div>
</div>
@stop

@section('content')
        <!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <ol class="breadcrumb pull-right">
                <li><a href="#">Minton</a></li>
                <li class="active">Dashboard</li>
            </ol>
            <h4 class="page-title">Welcome !</h4>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-6 col-lg-3">
        <div class="widget-simple-chart text-right card-box">
            <div class="circliful-chart" data-dimension="90" data-text="35%" data-width="5" data-fontsize="14" data-percent="35" data-fgcolor="#5fbeaa" data-bgcolor="#ebeff2"></div>
            <h3 class="text-success counter">2562</h3>
            <p class="text-muted text-nowrap">Total Sales today</p>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="widget-simple-chart text-right card-box">
            <div class="circliful-chart" data-dimension="90" data-text="75%" data-width="5" data-fontsize="14" data-percent="75" data-fgcolor="#3bafda" data-bgcolor="#ebeff2"></div>
            <h3 class="text-primary counter">5685</h3>
            <p class="text-muted text-nowrap">Daily visitors</p>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="widget-simple-chart text-right card-box">
            <div class="circliful-chart" data-dimension="90" data-text="58%" data-width="5" data-fontsize="14" data-percent="58" data-fgcolor="#f76397" data-bgcolor="#ebeff2"></div>
            <h3 class="text-pink">$ <span class="counter">12480</span></h3>
            <p class="text-muted text-nowrap">Total Earning</p>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="widget-simple-chart text-right card-box">
            <div class="circliful-chart" data-dimension="90" data-text="49%" data-width="5" data-fontsize="14" data-percent="49" data-fgcolor="#98a6ad" data-bgcolor="#ebeff2"></div>
            <h3 class="text-inverse counter">62</h3>
            <p class="text-muted text-nowrap">Pending Orders</p>
        </div>
    </div>
</div>
<!-- end row -->




<div class="row">
    <div class="col-lg-4">
        <div class="card-box">
            <h4 class="text-dark  header-title m-t-0 m-b-30">Total Revenue</h4>

            <div class="widget-chart text-center">
                <div id="sparkline1"></div>
                <ul class="list-inline m-t-15">
                    <li>
                        <h5 class="text-muted m-t-20">Target</h5>
                        <h4 class="m-b-0">$1000</h4>
                    </li>
                    <li>
                        <h5 class="text-muted m-t-20">Last week</h5>
                        <h4 class="m-b-0">$523</h4>
                    </li>
                    <li>
                        <h5 class="text-muted m-t-20">Last Month</h5>
                        <h4 class="m-b-0">$965</h4>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <div class="col-lg-4">
        <div class="card-box">
            <h4 class="text-dark  header-title m-t-0 m-b-30">Yearly Sales Report</h4>

            <div class="widget-chart text-center">
                <div id="sparkline2"></div>
                <ul class="list-inline m-t-15">
                    <li>
                        <h5 class="text-muted m-t-20">Target</h5>
                        <h4 class="m-b-0">$1000</h4>
                    </li>
                    <li>
                        <h5 class="text-muted m-t-20">Last week</h5>
                        <h4 class="m-b-0">$523</h4>
                    </li>
                    <li>
                        <h5 class="text-muted m-t-20">Last Month</h5>
                        <h4 class="m-b-0">$965</h4>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <div class="col-lg-4">
        <div class="card-box">
            <h4 class="text-dark header-title m-t-0 m-b-30">Weekly Sales Report</h4>

            <div class="widget-chart text-center">
                <div id="sparkline3"></div>
                <ul class="list-inline m-t-15">
                    <li>
                        <h5 class="text-muted m-t-20">Target</h5>
                        <h4 class="m-b-0">$1000</h4>
                    </li>
                    <li>
                        <h5 class="text-muted m-t-20">Last week</h5>
                        <h4 class="m-b-0">$523</h4>
                    </li>
                    <li>
                        <h5 class="text-muted m-t-20">Last Month</h5>
                        <h4 class="m-b-0">$965</h4>
                    </li>
                </ul>
            </div>
        </div>

    </div>

</div>
<!-- end row -->



<div class="row">
    <div class="col-lg-6">
        <div class="card-box">
            <div class="row">
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-xs-6 text-center">
                            <canvas id="partly-cloudy-day" width="100" height="100"></canvas>
                        </div>
                        <div class="col-xs-6">
                            <h2 class="m-t-0 text-muted"><b>32°</b></h2>
                            <p class="text-muted">Partly cloudy</p>
                            <p class="text-muted">15km/h - 37%</p>
                        </div>
                    </div><!-- End row -->
                </div>
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-xs-4 text-center">
                            <h4 class="text-muted m-t-0">SAT</h4>
                            <canvas id="cloudy" width="35" height="35"></canvas>
                            <h4 class="text-muted">30<i class="wi-degrees"></i></h4>
                        </div>
                        <div class="col-xs-4 text-center">
                            <h4 class="text-muted m-t-0">SUN</h4>
                            <canvas id="wind" width="35" height="35"></canvas>
                            <h4 class="text-muted">28<i class="wi-degrees"></i></h4>
                        </div>
                        <div class="col-xs-4 text-center">
                            <h4 class="text-muted m-t-0">MON</h4>
                            <canvas id="clear-day" width="35" height="35"></canvas>
                            <h4 class="text-muted">33<i class="wi-degrees"></i></h4>
                        </div>
                    </div><!-- end row -->
                </div>
            </div><!-- end row -->
        </div>
    </div> <!-- end col -->

    <div class="col-lg-6">
        <div class="card-box">
            <div class="row">
                <div class="col-sm-7">
                    <div class="">
                        <div class="row">
                            <div class="col-xs-6 text-center">
                                <canvas id="snow" width="100" height="100"></canvas>
                            </div>
                            <div class="col-xs-6">
                                <h2 class="m-t-0 text-muted"><b> 23°</b></h2>
                                <p class="text-muted">Partly cloudy</p>
                                <p class="text-muted">15km/h - 37%</p>
                            </div>
                        </div><!-- end row -->
                    </div><!-- weather-widget -->
                </div>
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-xs-4 text-center">
                            <h4 class="text-muted m-t-0">SAT</h4>
                            <canvas id="sleet" width="35" height="35"></canvas>
                            <h4 class="text-muted">30<i class="wi-degrees"></i></h4>
                        </div>
                        <div class="col-xs-4 text-center">
                            <h4 class="text-muted m-t-0">SUN</h4>
                            <canvas id="fog" width="35" height="35"></canvas>
                            <h4 class="text-muted">28<i class="wi-degrees"></i></h4>
                        </div>
                        <div class="col-xs-4 text-center">
                            <h4 class="text-muted m-t-0">MON</h4>
                            <canvas id="partly-cloudy-night" width="35" height="35"></canvas>
                            <h4 class="text-muted">33<i class="wi-degrees"></i></h4>
                        </div>
                    </div><!-- End row -->
                </div> <!-- col-->
            </div><!-- End row -->
        </div>
    </div> <!-- end col -->
</div>
<!--end row/ WEATHER -->



<div class="row">
    <div class="col-lg-8">
        <div class="card-box">
            <h4 class="text-dark  header-title m-t-0">Latest Projects</h4>
            <p class="text-muted m-b-25 font-13">
                Your awesome text goes here.
            </p>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Project Name</th>
                        <th>Start Date</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Assign</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Minton Admin v1</td>
                        <td>01/01/2016</td>
                        <td>26/04/2016</td>
                        <td><span class="label label-info">Released</span></td>
                        <td>Coderthemes</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Minton Frontend v1</td>
                        <td>01/01/2016</td>
                        <td>26/04/2016</td>
                        <td><span class="label label-success">Released</span></td>
                        <td>Minton admin</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Minton Admin v1.1</td>
                        <td>01/05/2016</td>
                        <td>10/05/2016</td>
                        <td><span class="label label-pink">Pending</span></td>
                        <td>Coderthemes</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Minton Frontend v1.1</td>
                        <td>01/01/2016</td>
                        <td>31/05/2016</td>
                        <td><span class="label label-purple">Work in Progress</span>
                        </td>
                        <td>Minton admin</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Minton Admin v1.3</td>
                        <td>01/01/2016</td>
                        <td>31/05/2016</td>
                        <td><span class="label label-warning">Coming soon</span></td>
                        <td>Coderthemes</td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>Minton Admin v1.3</td>
                        <td>01/01/2016</td>
                        <td>31/05/2016</td>
                        <td><span class="label label-primary">Coming soon</span></td>
                        <td>Minton admin</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end col -8 -->

    <div class="col-lg-4">
        <div class="card-box widget-user">
            <div>
                <img src="assets/images/users/avatar-1.jpg" class="img-responsive img-circle" alt="user">
                <div class="wid-u-info">
                    <h4 class="m-t-0 m-b-5">Chadengle</h4>
                    <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                    <small class="text-warning"><b>Admin</b></small>
                </div>
            </div>
        </div>

        <div class="card-box widget-user">
            <div>
                <img src="assets/images/users/avatar-2.jpg" class="img-responsive img-circle" alt="user">
                <div class="wid-u-info">
                    <h4 class="m-t-0 m-b-5">Tomaslau</h4>
                    <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                    <small class="text-success"><b>User</b></small>
                </div>
            </div>
        </div>

        <div class="card-box widget-user">
            <div>
                <img src="assets/images/users/avatar-7.jpg" class="img-responsive img-circle" alt="user">
                <div class="wid-u-info">
                    <h4 class="m-t-0 m-b-5">Ok</h4>
                    <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                    <small class="text-pink"><b>Admin</b></small>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- end row -->
@stop