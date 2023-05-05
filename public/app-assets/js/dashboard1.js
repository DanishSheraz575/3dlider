/*=========================================================================================
    File Name: dashboard1.js
    Description: Dashboard 1
    ----------------------------------------------------------------------------------------
    Item Name: Apex - Responsive Admin Theme
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

// chartist chart
// ------------------------------
$(window).on("load", function () {
    dashboard()
});
function dashboard(){
    // line chart widget 1 configuration Starts
    var widgetlineChart = new Chartist.Line('#Widget-line-chart', {
        labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13"],
        series: [
            [50, 45, 60, 55, 70, 55, 60, 55, 65, 57, 60, 53, 53]
        ]
    }, {
        axisX: {
            showGrid: true,
            showLabel: false,
            offset: 0,
        },
        axisY: {
            showGrid: false,
            low: 40,
            showLabel: false,
            offset: 0,
        },
        lineSmooth: Chartist.Interpolation.cardinal({
            tension: 0
        }),
        fullWidth: true,
    });

    // line chart widget 1 configuration Ends

    // line chart widget 2 configuration Starts
    var widgetlineChart1 = new Chartist.Line('#Widget-line-chart1', {
        labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13"],
        series: [
            [50, 45, 60, 55, 70, 55, 60, 55, 65, 57, 60, 53, 53]
        ]
    }, {
        axisX: {
            showGrid: true,
            showLabel: false,
            offset: 0,
        },
        axisY: {
            showGrid: false,
            low: 40,
            showLabel: false,
            offset: 0,
        },
        lineSmooth: Chartist.Interpolation.cardinal({
            tension: 0
        }),
        fullWidth: true,
    });

    // line chart widget 2 configuration Ends

    // line chart widget 3 configuration Starts
    var widgetlineChart2 = new Chartist.Line('#Widget-line-chart2', {
        labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13"],
        series: [
            [50, 45, 60, 55, 70, 55, 60, 55, 65, 57, 60, 53, 53]
        ]
    }, {
        axisX: {
            showGrid: true,
            showLabel: false,
            offset: 0,
        },
        axisY: {
            showGrid: false,
            low: 40,
            showLabel: false,
            offset: 0,
        },
        lineSmooth: Chartist.Interpolation.cardinal({
            tension: 0
        }),
        fullWidth: true,
    });

    // line chart widget 3 configuration Ends

    // line chart widget 4 configuration Starts
    var widgetlineChart3 = new Chartist.Line('#Widget-line-chart3', {
        labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13"],
        series: [
            [50, 45, 60, 55, 70, 55, 60, 55, 65, 57, 60, 53, 53]
        ]
    }, {
        axisX: {
            showGrid: true,
            showLabel: false,
            offset: 0,
        },
        axisY: {
            showGrid: false,
            low: 40,
            showLabel: false,
            offset: 0,
        },
        lineSmooth: Chartist.Interpolation.cardinal({
            tension: 0
        }),
        fullWidth: true,
    });

    // line chart widget 5 configuration Starts
    var widgetlineChart4 = new Chartist.Line('#Widget-line-chart4', {
        labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13"],
        series: [
            [50, 45, 60, 55, 70, 55, 60, 55, 65, 57, 60, 53, 53]
        ]
    }, {
        axisX: {
            showGrid: true,
            showLabel: false,
            offset: 0,
        },
        axisY: {
            showGrid: false,
            low: 40,
            showLabel: false,
            offset: 0,
        },
        lineSmooth: Chartist.Interpolation.cardinal({
            tension: 0
        }),
        fullWidth: true,
    });
    // line chart widget 6 configuration Starts
    var widgetlineChart5 = new Chartist.Line('#Widget-line-chart5', {
        labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13"],
        series: [
            [50, 45, 60, 55, 70, 55, 60, 55, 65, 57, 60, 53, 53]
        ]
    }, {
        axisX: {
            showGrid: true,
            showLabel: false,
            offset: 0,
        },
        axisY: {
            showGrid: false,
            low: 40,
            showLabel: false,
            offset: 0,
        },
        lineSmooth: Chartist.Interpolation.cardinal({
            tension: 0
        }),
        fullWidth: true,
    });
    // line chart widget 7 configuration Starts
    var widgetlineChart6 = new Chartist.Line('#Widget-line-chart6', {
        labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13"],
        series: [
            [50, 45, 60, 55, 70, 55, 60, 55, 65, 57, 60, 53, 53]
        ]
    }, {
        axisX: {
            showGrid: true,
            showLabel: false,
            offset: 0,
        },
        axisY: {
            showGrid: false,
            low: 40,
            showLabel: false,
            offset: 0,
        },
        lineSmooth: Chartist.Interpolation.cardinal({
            tension: 0
        }),
        fullWidth: true,
    });
    // line chart widget 8 configuration Starts
    var widgetlineChart7 = new Chartist.Line('#Widget-line-chart7', {
        labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13"],
        series: [
            [50, 45, 60, 55, 70, 55, 60, 55, 65, 57, 60, 53, 53]
        ]
    }, {
        axisX: {
            showGrid: true,
            showLabel: false,
            offset: 0,
        },
        axisY: {
            showGrid: false,
            low: 40,
            showLabel: false,
            offset: 0,
        },
        lineSmooth: Chartist.Interpolation.cardinal({
            tension: 0
        }),
        fullWidth: true,
    });
    // line chart widget 9 configuration Starts
    var widgetlineChart8 = new Chartist.Line('#Widget-line-chart8', {
        labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13"],
        series: [
            [50, 45, 60, 55, 70, 55, 60, 55, 65, 57, 60, 53, 53]
        ]
    }, {
        axisX: {
            showGrid: true,
            showLabel: false,
            offset: 0,
        },
        axisY: {
            showGrid: false,
            low: 40,
            showLabel: false,
            offset: 0,
        },
        lineSmooth: Chartist.Interpolation.cardinal({
            tension: 0
        }),
        fullWidth: true,
    });

    // Bar Chart Starts
    var barChart = new Chartist.Bar('#bar-chart', {
            labels: ["Customer", "Invoice Sent", "Payment Received", "Document Received","Credential In-process", "Credential Contracted", "Message sent", "Message Received"],
            series: [[43, 13, 20, 10,13, 13, 50, 50]]

        }, {
            axisX: {
                showGrid: false,
            },
            axisY: {
                showGrid: false,
                showLabel: false,
                offset: 0
            },
            low: 0,
            high: 60
        },
        [
            ['screen and (max-width: 640px)', {
                seriesBarDistance: 5,
                axisX: {
                    labelInterpolationFnc: function (value) {
                        return value[0];
                    }
                }
            }]
        ]);

    barChart.on('created', function (data) {
        var defs = data.svg.elem('defs');
        defs.elem('linearGradient', {
            id: 'gradient4',
            x1: 0,
            y1: 1,
            x2: 0,
            y2: 0
        }).elem('stop', {
            offset: 0,
            'stop-color': 'rgba(238, 9, 121,1)'
        }).parent().elem('stop', {
            offset: 1,
            'stop-color': 'rgba(255, 106, 0, 1)'
        });
        defs.elem('linearGradient', {
            id: 'gradient5',
            x1: 0,
            y1: 1,
            x2: 0,
            y2: 0
        }).elem('stop', {
            offset: 0,
            'stop-color': 'rgba(0, 75, 145,1)'
        }).parent().elem('stop', {
            offset: 1,
            'stop-color': 'rgba(120, 204, 55, 1)'
        });

        defs.elem('linearGradient', {
            id: 'gradient6',
            x1: 0,
            y1: 1,
            x2: 0,
            y2: 0
        }).elem('stop', {
            offset: 0,
            'stop-color': 'rgba(132, 60, 247,1)'
        }).parent().elem('stop', {
            offset: 1,
            'stop-color': 'rgba(56, 184, 242, 1)'
        });
        defs.elem('linearGradient', {
            id: 'gradient7',
            x1: 0,
            y1: 1,
            x2: 0,
            y2: 0
        }).elem('stop', {
            offset: 0,
            'stop-color': 'rgba(155, 60, 183,1)'
        }).parent().elem('stop', {
            offset: 1,
            'stop-color': 'rgba(255, 57, 111, 1)'
        });
    });
    barChart.on('draw', function (data) {
        var barHorizontalCenter, barVerticalCenter, label, value;
        if (data.type === 'bar') {

            data.element.attr({
                y1: 195,
                x1: data.x1 + 0.001
            });

        }
    });
    //Bar Chart Ends

}