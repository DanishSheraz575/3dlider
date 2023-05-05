<!DOCTYPE html>
<html lang="en" class="loading">
<!-- BEGIN : Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login Page - Apex responsive bootstrap 4 admin template</title>
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('public/app-assets/img/ico/apple-icon-60.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('public/app-assets/img/ico/apple-icon-76.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('public/app-assets/img/ico/apple-icon-120.png')}}">
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
    <link rel="stylesheet" type="text/css" href="{{asset('public/app-assets/vendors/css/sweetalert2.min.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/app-assets/css/app.css')}}">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
    <style>
        body{
            background-image: url({{ asset('public/app-assets/img/login-page-bg.webp') }});
            background-size:cover;
            background-repeat: no-repeat;
            background-position: top;
        }
        .card{
            background-color: rgb(255 255 255 / 92%);
            align-items: center;
        }
        .btn-block{
            background-color:rgb(26 115 232);
            border:2px solid white;
            border-radius: 8px;
        }
        input{
            text-align: center;
            border: none !important;
            box-shadow: 0 2px 8px 0.8px #8888886b;
            border-radius: 8px !important;
        }
    </style>
</head>
<!-- END : Head-->

<!-- BEGIN : Body-->
<body data-col="1-column" class=" 1-column  blank-page">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper">
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><!--Login Page Starts-->
                <div class="container-fluid ">
                        <div class="row mt-5">
                            <div class="col-4 mt-5 offset-4 p-0">
                                <div class="card mt-5">
                                    <div class="card-content">
                                        <div class="card-body text-center">
                                            <div>
                                                <img src="{{ asset('public/app-assets/img/login-logo-rcm.webp') }}" style="    width: 200px;height: 35px;margin-bottom: 20px;margin-top: 7px;" alt="">
                                                <p class="card-text">
                                                    Welcome to Atlantis Revenue Cycle Management
                                                </p>
                                                <label class="font-weight-bold mb-2">Enter your Credentials</label>
                                                <form id="login_form" action="javascript:login();" class="mt-2 mx-2">
                                                    @csrf
                                                    <div class="position-relative has-icon-left">
                                                    <input type="email" class="form-control mb-3" placeholder="Email Address" name="email" autocomplete="off" />
                                                    <div class="form-control-position ml-1">
                                                        <img src="{{ asset('public/app-assets/img/icon-user.webp') }}" style="width: 15px; height: 15px;margin-bottom: 7px;" alt="">
                                                    </div>
                                                    </div>
                                                    <div class="position-relative has-icon-left">
                                                    <input type="password" class="form-control mb-3" placeholder="Password" name="password" />
                                                    <div class="form-control-position ml-1">
                                                        <img src="{{ asset('public/app-assets/img/icon-password.webp') }}" style="width: 25px;height: 15px;" alt="">
                                                    </div>
                                                    </div>
                                                    <button class="btn btn-block ">
                                                        <a id="m_login_signin_submit" class="text-decoration-none text-white">Login</a>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--Login Page Ends-->
            </div>
        </div>
        <!-- END : End Main Content-->
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<!-- BEGIN VENDOR JS-->
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
<script src="{{asset('public/app-assets/js/notification-sidebar.js')}}" type="text/javascript"></script>
<script src="{{asset('public/app-assets/js/customizer.js')}}" type="text/javascript"></script>
<script src="{{asset('public/app-assets/vendors/js/sweetalert2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/app-assets/js/sweet-alerts.js')}}" type="text/javascript"></script>
<script src="{{asset('public/app-assets/js/ajax.js')}}" type="text/javascript"></script>
<script>
    function login() {
        let data = new FormData($('#login_form')[0]);
        let a = function () {
            window.location.reload();
        };
        let arr = [a];
        call_ajax_with_functions('', '{{route('do_login')}}', data, arr);
    }
</script>
<!-- END APEX JS-->
<!-- BEGIN PAGE LEVEL JS-->
<!-- END PAGE LEVEL JS-->
</body>
<!-- END : Body-->
</html>
