<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>RCM CRM - Admin Dashboard</title>
    {{--Header Scripts--}}
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('public/app-assets/img/ico/apple-icon-152.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/app-assets/img/ico/favicon.ico')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('public/app-assets/img/ico/favicon-32.png')}}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/app-assets/fonts/feather/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/app-assets/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/app-assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/app-assets/vendors/css/perfect-scrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/app-assets/vendors/css/prism.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/app-assets/vendors/css/chartist.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/app-assets/vendors/css/sweetalert2.min.css')}}">

    {{--Header Page Scripts--}}
    <!-- BEGIN APEX CSS-->
    @yield("header-scripts")
    <link rel="stylesheet" type="text/css" href="{{asset('public/app-assets/css/app.css')}}">
    <style>
        .shortcut:hover{
            color:mediumslateblue;
            background: none;
        }
        .shortcut.highlighted{
            color:mediumslateblue;
        }
        .shortcut i{
            font-size: 20px;
        }
        .app-sidebar .navigation li ul li a, .off-canvas-sidebar .navigation li ul li a {
            padding: 8px 18px 8px 40px !important;
        }
    </style>
    <!-- END APEX CSS-->
</head>
<body data-col="2-columns" class=" 2-columns" onkeyup="captureUser(event)">
<div class="wrapper nav-collapsed menu-collapsed">
    @include("layout.sidebar")
    @include("layout.navbar")
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        @yield("content")
        <!-- END : End Main Content-->
        <!-- BEGIN : Footer-->
        <footer class="footer footer-static footer-light">
            <p class="clearfix text-muted text-sm-center px-2"><span>Copyright  &copy; 2023 <a href="https://atlantisbpo.com/" target="_blank" class="text-bold-800 primary darken-2">Atlantis BPO</a>, All rights reserved. </span></p>
        </footer>
        <!-- End : Footer-->
    </div>
</div>
<!-- START Notification Sidebar-->

<script src="{{asset('public/app-assets/vendors/js/core/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/app-assets/vendors/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/app-assets/vendors/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/app-assets/vendors/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/app-assets/vendors/js/prism.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/app-assets/vendors/js/jquery.matchHeight-min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/app-assets/vendors/js/screenfull.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/app-assets/vendors/js/pace/pace.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN APEX JS-->
<script src="{{asset('public/app-assets/js/app-sidebar.js')}}" type="text/javascript"></script>
<script src="{{asset('public/app-assets/vendors/js/moment.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/app-assets/vendors/js/sweetalert2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/app-assets/js/sweet-alerts.js')}}" type="text/javascript"></script>
<script src="{{asset('public/app-assets/js/ajax.js')}}" type="text/javascript"></script>
{{--Footer Page Scripts--}}
@yield("footer-scripts")
</body>
</html>
