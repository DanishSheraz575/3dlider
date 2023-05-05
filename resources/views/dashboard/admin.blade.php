@extends("layout.template")
@section("header-scripts")
    <link rel="stylesheet" type="text/css" href="{{asset('public/app-assets/vendors/css/fullcalendar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/app-assets/vendors/css/daterangepicker.css')}}">
@endsection
@section("content")
    <div class="main-content">
        <div class="content-wrapper"><!--Statistics cards Starts-->

            <div class="card mt-2 p-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-10">
                                <div class="d-none" id="customer_search_id">
                                <input type="text" class="daterange-cus w-50 mb-2 mr-3">
                                <button class="btn btn-info btn-sm mt-2">Search</button>
                                </div>
                            </div>
                        <div class="col-2 mt-2">
                        <i class="ft-more-vertical float-right" id="chatOptions" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></i>
                        <div class="dropdown-menu" aria-labelledby="chatOptions">
                            <a href="#" class="dropdown-item" onclick="show_custom_search();">Custom Search</a>
                        </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 d-flex">
                                <div class="card gradient-blackberry">
                                    <div class="card-content">
                                        <div class="card-body pt-2 pb-0">
                                            <div class="media">
                                                <div class="media-body white text-left">
                                                    <h3 class="font-large-1 mb-0">27</h3>
                                                    <span>Customer</span>
                                                </div>
                                                <div class="media-right white text-right">
{{--                                                    <i class="icon-pie-chart font-large-1"></i>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <div id="Widget-line-chart" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 d-flex">
                                <div class="card gradient-ibiza-sunset">
                                    <div class="card-content">
                                        <div class="card-body pt-2 pb-0">
                                            <div class="media">
                                                <div class="media-body white text-left">
                                                    <h3 class="font-large-1 mb-0">9</h3>
                                                    <span>Invoice Sent</span>
                                                </div>
                                                <div class="media-right white text-right">
{{--                                                    <i class="icon-bulb font-large-1"></i>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <div id="Widget-line-chart1" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 d-flex">
                                <div class="card gradient-green-tea">
                                    <div class="card-content">
                                        <div class="card-body pt-2 pb-0">
                                            <div class="media">
                                                <div class="media-body white text-left">
                                                    <h3 class="font-large-1 mb-0">7</h3>
                                                    <span>Payment Received</span>
                                                </div>
                                                <div class="media-right white text-right">
{{--                                                    <i class="icon-graph font-large-1"></i>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <div id="Widget-line-chart2" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 d-flex">
                                <div class="card gradient-pomegranate">
                                    <div class="card-content">
                                        <div class="card-body pt-2 pb-0">
                                            <div class="media">
                                                <div class="media-body white text-left">
                                                    <h3 class="font-large-1 mb-0">5</h3>
                                                    <span>Document Received</span>
                                                </div>
{{--                                                <div class="media-right white text-right">--}}
{{--                                                    <i class="icon-wallet font-large-1"></i>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                        <div id="Widget-line-chart3" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 d-flex">
                                    <div class="card gradient-plum">
                                        <div class="card-content">
                                            <div class="card-body pt-2 pb-0">
                                                <div class="media">
                                                    <div class="media-body white text-left">
                                                        <h3 class="font-large-1 mb-0">15</h3>
                                                        <span>Credentialing In-Process</span>
                                                    </div>
                                                    <div class="media-right white text-right">
                                                        {{--                                                    <i class="icon-pie-chart font-large-1"></i>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="Widget-line-chart4" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 d-flex">
                                    <div class="card gradient-passion-fruit">
                                        <div class="card-content">
                                            <div class="card-body pt-2 pb-0">
                                                <div class="media">
                                                    <div class="media-body white text-left">
                                                        <h3 class="font-large-1 mb-0">7</h3>
                                                        <span>Credential Contracted</span>
                                                    </div>
                                                    <div class="media-right white text-right">
                                                        {{--                                                    <i class="icon-bulb font-large-1"></i>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="Widget-line-chart5" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 d-flex">
                                    <div class="card gradient-sublime-vivid">
                                        <div class="card-content">
                                            <div class="card-body pt-2 pb-0">
                                                <div class="media">
                                                    <div class="media-body white text-left">
                                                        <h3 class="font-large-1 mb-0">17</h3>
                                                        <span>Message Sent</span>
                                                    </div>
                                                    <div class="media-right white text-right">
                                                        {{--                                                    <i class="icon-graph font-large-1"></i>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="Widget-line-chart6" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 d-flex">
                                    <div class="card gradient-king-yna">
                                        <div class="card-content">
                                            <div class="card-body pt-2 pb-0">
                                                <div class="media">
                                                    <div class="media-body white text-left">
                                                        <h3 class="font-large-1 mb-0">15</h3>
                                                        <span>Message Received</span>
                                                    </div>
                                                    {{--                                                <div class="media-right white text-right">--}}
                                                    {{--                                                    <i class="icon-wallet font-large-1"></i>--}}
                                                    {{--                                                </div>--}}
                                                </div>
                                            </div>
                                            <div id="Widget-line-chart7" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 d-flex">
                                    <div class="card gradient-crystal-clear">
                                        <div class="card-content">
                                            <div class="card-body pt-2 pb-0">
                                                <div class="media">
                                                    <div class="media-body white text-left">
                                                        <h3 class="font-large-1 mb-0">5</h3>
                                                        <span>Document Received</span>
                                                    </div>
                                                    {{--<div class="media-right white text-right">--}}
                                                    {{--<i class="icon-wallet font-large-1"></i>--}}
                                                    {{--</div>--}}
                                                </div>
                                            </div>
                                            <div id="Widget-line-chart8" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id='fc-external-drag'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Statistics cards Ends-->
            <!--Line with Area Chart 1 Starts-->
            <div class="row">
                <div class="col-4">
                    <div class="card height-500">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Visit & Sales Statistics</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="chart-info mb-2">
                                    <span class="text-uppercase mr-3"><i class="fa fa-circle primary font-small-2 mr-1"></i> Sales</span>
                                    <span class="text-uppercase"><i class="fa fa-circle deep-purple font-small-2 mr-1"></i> Visits</span>
                                </div>
                                <div id="line-area2" class="height-400 lineAreaDashboard">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card height-500">
                        <div class="card-header">
                            <h4 class="card-title">Statistics</h4>
                        </div>
                        <div class="card-content">

                            <p class="font-medium-2 text-muted text-center">Hobbies</p>
                            <div id="bar-chart" class="height-250 BarChartShadow BarChart">
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center">
                                        <span class="gradient-pomegranate d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                                        <span class="font-large-1 d-block mb-2">48</span>
                                        <span>Sport</span>
                                    </div>
                                    <div class="col text-center">
                                        <span class="gradient-green-tea d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                                        <span class="font-large-1 d-block mb-2">9</span>
                                        <span>Music</span>
                                    </div>
                                    <div class="col text-center">
                                        <span class="gradient-blackberry d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                                        <span class="font-large-1 d-block mb-2">26</span>
                                        <span>Travel</span>
                                    </div>
                                    <div class="col text-center">
                                        <span class="gradient-ibiza-sunset d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                                        <span class="font-large-1 d-block mb-2">17</span>
                                        <span>News</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 ">
                    <div class="card height-500">
                        <div class="card-header">
                            <h4 class="card-title">Project Stats</h4>
                        </div>
                        <div class="card-content">

                            <p class="font-medium-2 text-muted text-center">Project Tasks</p>
                            <div id="donut-dashboard-chart" class="height-250 donut">
                            </div>

                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col">
                                        <span class="mb-1 text-muted d-block">23% - Started</span>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 23%;" aria-valuenow="23"
                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <span class="mb-1 text-muted d-block">14% - In Progress</span>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-amber" role="progressbar" style="width: 14%;" aria-valuenow="14"
                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col">
                                        <span class="mb-1 text-muted d-block">35% - Remaining</span>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-deep-purple bg-lighten-1" role="progressbar" style="width: 35%;"
                                                 aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <span class="mb-1 text-muted d-block">28% - Done</span>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-blue" role="progressbar" style="width: 28%;" aria-valuenow="28"
                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Line with Area Chart 1 Ends-->
        </div>
    </div>
@endsection
@section("footer-scripts")
    <script src="{{asset('public/app-assets/vendors/js/moment.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets/vendors/js/fullcalendar.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets/vendors/js/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets/js/fullcalendar.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets/vendors/js/daterangepicker.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets/vendors/js/chartist.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets/js/dashboard1.js')}}" type="text/javascript"></script>
    <script>
        function show_custom_search(){
            $("#customer_search_id").removeClass("d-none");
        }
        $('.daterange-cus').daterangepicker({
            locale: { format: 'YYYY-MM-DD' },
            drops: 'down',
            opens: 'right'
        });
        $('.daterange-btn').daterangepicker({
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate: moment()
        }, function (start, end) {
            $('.daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        });
    </script>
@endsection