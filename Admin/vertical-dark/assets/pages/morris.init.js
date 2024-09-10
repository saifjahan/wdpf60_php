
/*
 Template Name: Zegva - Responsive Bootstrap 4 Admin Dashboard
 Author: Themesdesign
 Website: www.themesdesign.in
 File: Morris init js
 */

!function($) {
    "use strict";

    var MorrisCharts = function() {};

    //creates line chart
    MorrisCharts.prototype.createLineChart = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Line({
          element: element,
          data: data,
          xkey: xkey,
          ykeys: ykeys,
          labels: labels,
          hideHover: 'auto',
          gridLineColor: '#3a4657',
          resize: true, //defaulted to true
          lineColors: lineColors
        });
    },

    //creates line chart Dark
    MorrisCharts.prototype.createLineChart1 = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Line({
            element: element,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            gridLineColor: '#3d434a',
            gridTextColor: '#eee',
            hideHover: 'auto',
            pointSize: 3,
            resize: true, //defaulted to true
            lineColors: lineColors
        });
    },
    //creates area chart
    MorrisCharts.prototype.createAreaChart = function(element, pointSize, lineWidth, data, xkey, ykeys, labels, lineColors) {
        Morris.Area({
            element: element,
            pointSize: 3,
            lineWidth: 2,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            resize: true,
            hideHover: 'auto',
            gridLineColor: '#3a4657',
            lineColors: lineColors
        });
    },
    //creates Bar chart
    MorrisCharts.prototype.createBarChart  = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Bar({
            element: element,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            gridLineColor: '#3a4657',
            barSizeRatio: 0.4,
            resize: true,
            hideHover: 'auto',
            barColors: lineColors
        });
    },
    //creates Donut chart
    MorrisCharts.prototype.createDonutChart = function(element, data, colors) {
        Morris.Donut({
            element: element,
            data: data,
            resize: true,
            labelColor: '#dee2e6',
            backgroundColor: '#2c3749',
            colors: colors
        });
    },
    //creates Donut chart Dark
    MorrisCharts.prototype.createDonutChart1 = function(element, data, colors) {
        Morris.Donut({
            element: element,
            data: data,
            resize: true,
            colors: colors,
            labelColor: '#fff',
            backgroundColor: '#0e86e7'
        });
    },
    //creates Stacked chart
    MorrisCharts.prototype.createStackedChart  = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Bar({
            element: element,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            stacked: true,
            labels: labels,
            hideHover: 'auto',
            resize: true, //defaulted to true
            gridLineColor: '#0e86e7',
            gridTextColor: '#eee',
            barColors: lineColors
        });
    },
    MorrisCharts.prototype.init = function() {

        //create line chart
        var $data  = [
            { y: '2009', a: 70, b: 60 },
            { y: '2010', a: 75,  b: 65 },
            { y: '2011', a: 50,  b: 40 },
            { y: '2012', a: 75,  b: 65 },
            { y: '2013', a: 40,  b: 30 },
            { y: '2014', a: 75,  b: 65 },
            { y: '2015', a: 50, b: 40 }
          ];
        this.createLineChart('morris-line-example', $data, 'y', ['a', 'b'], ['Series A', 'Series B'], ['#23cbe0', '#0e86e7']);

        //creating area chart
        var $areaData = [
            {y: '2009', a: 10, b: 20},
            {y: '2010', a: 75, b: 65},
            {y: '2011', a: 50, b: 40},
            {y: '2012', a: 75, b: 65},
            {y: '2013', a: 50, b: 40},
            {y: '2014', a: 75, b: 65},
            {y: '2015', a: 90, b: 60},
            {y: '2016', a: 90, b: 75}
        ];
        this.createAreaChart('morris-area-example', 0, 0, $areaData, 'y', ['a', 'b'], ['Series A', 'Series B'], ['#23cbe0', '#0e86e7']);

        //creating bar chart
        var $barData = [
            {y: '2009', a: 95, b: 75},
            {y: '2010', a: 60, b: 75},
            {y: '2011', a: 45, b: 55},
            {y: '2012', a: 80, b: 70},
            {y: '2013', a: 45, b: 45},
            {y: '2014', a: 65, b: 55},
            {y: '2015', a: 80, b: 65},
            {y: '2016', a: 100, b: 85}
        ];
        this.createBarChart('morris-bar-example', $barData, 'y', ['a', 'b'], ['Series A', 'Series B'], ['#23cbe0', '#0e86e7']);

        //creating Stacked chart
        var $stckedData  = [
            { y: '2005', a: 45, b: 180},
            { y: '2006', a: 120,  b: 65},
            { y: '2007', a: 40, b: 90},
            { y: '2008', a: 75,  b: 85},
            { y: '2009', a: 100, b: 90},
            { y: '2010', a: 75,  b: 65},
            { y: '2011', a: 50,  b: 40},
            { y: '2012', a: 100,  b: 85},
            { y: '2013', a: 50,  b: 40},
            { y: '2014', a: 75,  b: 65},
            { y: '2015', a: 160, b: 70},
            { y: '2016', a: 60, b: 120}
        ];
        this.createStackedChart('morris-bar-stacked', $stckedData, 'y', ['a', 'b'], ['Series A', 'Series B'], ['#0e86e7','#f0f1f4']);

        //creating donut chart
        var $donutData = [
            {label: "Download Sales", value: 20},
            {label: "In-Store Sales", value: 50},
            {label: "Mail-Order Sales", value: 30}
        ];
        this.createDonutChart('morris-donut-example', $donutData, ['#745af1', '#23cbe0', '#0e86e7']);

        //creating donut chart Dark
        var $donutData1 = [
            {label: "Download Sales", value: 30},
            {label: "In-Store Sales", value: 30},
            {label: "Mail-Order Sales", value: 30}
        ];
        this.createDonutChart1('morris-donut-example-dark', $donutData1, ['#f0f1f4', '#f0f1f4', '#f0f1f4']);

        //create line chart Dark
        var $data1  = [
            { y: '2009', a: 20, b: 5 },
            { y: '2010', a: 45,  b: 35 },
            { y: '2011', a: 50,  b: 40 },
            { y: '2012', a: 75,  b: 65 },
            { y: '2013', a: 50,  b: 40 },
            { y: '2014', a: 75,  b: 65 },
            { y: '2015', a: 100, b: 90 }
        ];
        this.createLineChart1('morris-line-example-dark', $data1, 'y', ['a', 'b'], ['Series A', 'Series B'], ['#23cbe0', '#0e86e7']);
    },
    //init
    $.MorrisCharts = new MorrisCharts, $.MorrisCharts.Constructor = MorrisCharts
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.MorrisCharts.init();
}(window.jQuery);