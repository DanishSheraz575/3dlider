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
                            <div class="col-11">
                                <div class="d-none" id="customer_search_id">
                                    <form action="javascript:dashboard_customer_report_data_div()" id="generate_customer_report_form_id" >
                                        @csrf
                                        <div class="form-group d-flex">
                                            <input type="text" name="date" id="date_range" class="daterange-cus form-control mb-2 mr-3">
                                            <button class="btn btn-info btn-sm ">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-1 mt-1">
                                <i class="ft-more-vertical float-right" id="chatOptions" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false"></i>
                                <div class="dropdown-menu" aria-labelledby="chatOptions">
                                    <a href="#" class="dropdown-item" onclick="show_custom_search();">Custom Search</a>
                                </div>
                            </div>
                        </div>
                        <div id="dashboard_customer_report_data_div">
                            @include('dashboard.partial.customer_stats')
                        </div>
                    </div>
                </div>
            </div>

            <!--Statistics cards Ends-->
            <!--Line with Area Chart 1 Starts-->
            <div class="row">
                <div class="col-4">
                    <div class="card height-550">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Incoming & Outgoing Sms Statistics</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="chart-info mb-2">
                                    <span class="text-uppercase mr-3"><i class="fa fa-circle primary font-small-2 mr-1"></i> Incoming SMS</span>
                                    <span class="text-uppercase"><i class="fa fa-circle deep-purple font-small-2 mr-1"></i> Outgoing SMS</span>
                                </div>
                                <div id="line-area2" class="height-400 lineAreaDashboard">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card height-550">
                        <div class="card-header">
                            <h4 class="card-title">States</h4>
                        </div>
                        <div class="card-content">

                            <p class="font-medium-2 text-muted text-center">Customer States</p>
                            <div id="bar-chart" class="height-250 BarChartShadow BarChart">
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center">
                                        <span class="gradient-pomegranate d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                                        <span class="font-large-1 d-block mb-2">65</span>
                                        <span>Customer</span>
                                    </div>
                                    <div class="col text-center">
                                        <span class="gradient-pomegranate d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                                        <span class="font-large-1 d-block mb-2">8</span>
                                        <span>Invoice Sent</span>
                                    </div>
                                    <div class="col text-center">
                                        <span class="gradient-green-tea d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                                        <span class="font-large-1 d-block mb-2">9</span>
                                        <span>Payment Received</span>
                                    </div>
                                    <div class="col text-center">
                                        <span class="gradient-blackberry d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                                        <span class="font-large-1 d-block mb-2">6</span>
                                        <span>Document Received</span>
                                    </div>
                                    <div class="col text-center">
                                        <span class="gradient-ibiza-sunset d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                                        <span class="font-large-1 d-block mb-2">4</span>
                                        <span>Credential In-process</span>
                                    </div>
                                    <div class="col text-center">
                                        <span class="gradient-pomegranate d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                                        <span class="font-large-1 d-block mb-2">5</span>
                                        <span>Credential Contracted</span>
                                    </div>
                                    <div class="col text-center">
                                        <span class="gradient-pomegranate d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                                        <span class="font-large-1 d-block mb-2">53</span>
                                        <span>Message sent</span>
                                    </div>
                                    <div class="col text-center">
                                        <span class="gradient-green-tea d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                                        <span class="font-large-1 d-block mb-2">145</span>
                                        <span>Message Received</span>
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
    <script src="{{asset('public/app-assets/vendors/js/fullcalendar.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets/vendors/js/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets/vendors/js/daterangepicker.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets/vendors/js/chartist.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets/js/dashboard1.js')}}" type="text/javascript"></script>
    <script>
        // Line with Area Chart 2 Starts
        var lineArea2 = new Chartist.Line('#line-area2', {
                labels: {!! $harray !!},
                series: [
                    {!! $incoming_sms !!},
                    {!! $outgoing_sms !!}
                ]
            }, {
                showArea: true,
                fullWidth: true,
                lineSmooth: Chartist.Interpolation.none(),
                axisX: {
                    showGrid: false,
                },
                axisY: {
                    low: 0,
                    scaleMinSpace: 50,
                }
            },
            [
                ['screen and (max-width: 640px) and (min-width: 381px)', {
                    axisX: {
                        labelInterpolationFnc: function (value, index) {
                            return index % 2 === 0 ? value : null;
                        }
                    }
                }],
                ['screen and (max-width: 380px)', {
                    axisX: {
                        labelInterpolationFnc: function (value, index) {
                            return index % 3 === 0 ? value : null;
                        }
                    }
                }]
            ]);

        lineArea2.on('created', function (data) {
            var defs = data.svg.elem('defs');
            defs.elem('linearGradient', {
                id: 'gradient2',
                x1: 0,
                y1: 1,
                x2: 0,
                y2: 0
            }).elem('stop', {
                offset: 0,
                'stop-opacity': '0.2',
                'stop-color': 'rgba(255, 255, 255, 1)'
            }).parent().elem('stop', {
                offset: 1,
                'stop-opacity': '0.2',
                'stop-color': 'rgba(0, 201, 255, 1)'
            });

            defs.elem('linearGradient', {
                id: 'gradient3',
                x1: 0,
                y1: 1,
                x2: 0,
                y2: 0
            }).elem('stop', {
                offset: 0.3,
                'stop-opacity': '0.2',
                'stop-color': 'rgba(255, 255, 255, 1)'
            }).parent().elem('stop', {
                offset: 1,
                'stop-opacity': '0.2',
                'stop-color': 'rgba(132, 60, 247, 1)'
            });
        });
        lineArea2.on('draw', function (data) {
            var circleRadius = 4;
            if (data.type === 'point') {

                var circle = new Chartist.Svg('circle', {
                    cx: data.x,
                    cy: data.y,
                    r: circleRadius,
                    class: 'ct-point-circle'
                });
                data.element.replace(circle);
            }
            else if (data.type === 'label') {
                // adjust label position for rotation
                const dX = data.width / 2 + (30 - data.width)
                data.element.attr({ x: data.element.attr('x') - dX })
            }
        });
        // Line with Area Chart 2 Ends
    </script>
@endsection
