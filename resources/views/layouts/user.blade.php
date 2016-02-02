<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Paydate Development Page</title>

    <link href="{{asset('css/bootstrap.min.css')}}"  rel="stylesheet" type="text/css">
    <link href="{{asset('css/core.css')}}"  rel="stylesheet" type="text/css">
    <link href="{{asset('css/icons.css')}}"  rel="stylesheet" type="text/css">
    <link href="{{asset('css/components.css')}}" rel="stylesheet"  type="text/css">
    <link href="{{asset('css/pages.css')}}"  rel="stylesheet" type="text/css">
    <link href="{{asset('css/menu.css')}}"  rel="stylesheet" type="text/css">
    <link href="{{asset('css/responsive.css')}}"  rel="stylesheet" type="text/css">

    <script src="{{ asset('js/modernizr.min.js')}}"></script>

    <!-- Sidebar-->
    <link href="{{asset('css/sidebar/jasny-bootstrap.min.css')}}"  rel="stylesheet" type="text/css">
    <link href="{{asset('css/sidebar/sidebar.css')}}"  rel="stylesheet" type="text/css">

    @yield("header")
</head>

<body>



<!-- Navigation Bar-->
<div class="topbar">

    <!-- Navbar -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="">
                <div class="pull-left">
                    <button type="button" class="button-menu-mobile waves-effect" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
                        <i class="mm fa fa-navicon"></i>
                    </button>
                    <span class="clearfix"></span>
                </div>

            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>

<!-- Sidebar menu-->
<div class="navmenu navmenu-default navmenu-fixed-left offcanvas">
    <div id="sidebar-menu">
        <ul>
            <li class="text-muted menu-title">Menu</li>

            <li>
                <a href="{{url('main')}}" class="waves-effect waves-primary"><i
                            class="md md-dashboard"></i><span> Home Page </span></a>
            </li>
            <li>
                <a href="{{url('date-nearby')}}" class="waves-effect waves-primary"><i
                            class="md  md-favorite"></i><span> Date Nearby </span></a>
            </li>
            <li>
                <a href="{{url('assigned-date')}}" class="waves-effect waves-primary"><i
                            class="md  md-chat"></i><span> Assigned Date</span></a>
            </li>
            <li>
                <a href="{{url('profile')}}" class="waves-effect waves-primary"><i
                            class="md  md-perm-contact-cal"></i><span> Profile </span></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->

<!-- Page Content-->
<div class="content">
    <div class="container">
        @yield("content")
    </div>
</div>

<script>
    var resizefunc = [];
</script>

<!-- Main -->
<script src="{{ asset('js/jquery-2.2.0.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/detect.js')}}"></script>
<script src="{{ asset('js/fastclick.js')}}"></script>
<script src="{{ asset('js/jquery.slimscroll.js')}}"></script>
<script src="{{ asset('js/jquery.blockUI.js')}}"></script>
<script src="{{ asset('js/waves.js')}}"></script>
<script src="{{ asset('js/wow.min.js')}}"></script>
<script src="{{ asset('js/jquery.nicescroll.js')}}"></script>
<script src="{{ asset('js/jquery.scrollTo.min.js')}}"></script>
<script src="{{ asset('plugins/switchery/switchery.min.js')}}"></script>
<!-- Offcanvas for sidebar-->
<script src="{{ asset('js/sidebar/jasny-bootstrap.min.js')}}"></script>
@yield("footer")

<!-- Custom main Js -->
<script src="{{ asset('js/jquery.core.js')}}"></script>
<script src="{{ asset('js/jquery.app.js')}}"></script>

</body>
</html>