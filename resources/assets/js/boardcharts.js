var sales_linechart = (function(){
	var chart;
	var graph;

	var chartData = [
		{"year": "2005", "value": 4500},
		{"year": "2006", "value": 4516},
		{"year": "2007", "value": 1235},
		{"year": "2008", "value": 10000},
		{"year": "2009", "value": 2563},
		{"year": "2010", "value": 4421},
		{"year": "2011", "value": 4567},
		{"year": "2012", "value": 6861},
		{"year": "2013", "value": 20000},
		{"year": "2014", "value": 7851},
		{"year": "2015", "value": 0.298}
	];


	AmCharts.ready(function () {
		// SERIAL CHART
		chart = new AmCharts.AmSerialChart();

		chart.dataProvider = chartData;
		chart.marginLeft = 10;
		chart.categoryField = "year";
		chart.dataDateFormat = "YYYY";

		// // listen for "dataUpdated" event (fired when chart is inited) and call zoomChart method when it happens
		// chart.addListener("dataUpdated", zoomChart);

		// AXES
		// category
		var categoryAxis = chart.categoryAxis;
		categoryAxis.parseDates = true; // as our data is date-based, we set parseDates to true
		categoryAxis.minPeriod = "YYYY"; // our data is yearly, so we set minPeriod to YYYY
		categoryAxis.dashLength = 3;
		categoryAxis.minorGridEnabled = true;
		categoryAxis.minorGridAlpha = 0.1;

		// value
		var valueAxis = new AmCharts.ValueAxis();
		valueAxis.axisAlpha = 0;
		valueAxis.inside = true;
		valueAxis.dashLength = 3;
		chart.addValueAxis(valueAxis);

		// GRAPH
		graph = new AmCharts.AmGraph();
		graph.type = "smoothedLine"; // this line makes the graph smoothed line.
		graph.lineColor = "#31AD91";
		graph.negativeLineColor = "#637bb6"; // this line makes the graph to change color when it drops below 0
		graph.bullet = "round";
		graph.bulletSize = 8;
		graph.bulletBorderColor = "#FFFFFF";
		graph.bulletBorderAlpha = 1;
		graph.bulletBorderThickness = 2;
		graph.lineThickness = 2;
		graph.valueField = "value";
		graph.balloonText = "[[category]]<br><b><span style='font-size:14px;'>[[value]]</span></b>";
		chart.addGraph(graph);

		// CURSOR
		var chartCursor = new AmCharts.ChartCursor();
		chartCursor.cursorAlpha = 0;
		chartCursor.cursorPosition = "mouse";
		chartCursor.categoryBalloonDateFormat = "YYYY";
		chart.addChartCursor(chartCursor);

		// // SCROLLBAR
		// var chartScrollbar = new AmCharts.ChartScrollbar();
		// chart.addChartScrollbar(chartScrollbar);

		chart.creditsPosition = "bottom-right";

		// WRITE
		chart.write("chartdiv");
	});

	// this method is called when chart is first inited as we listen for "dataUpdated" event
	function zoomChart() {
		// different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
		chart.zoomToDates(new Date(1972, 0), new Date(1984, 0));
	}
})();


var incomePerCategory = (function(){
	var chart;
    var chartData = [
        {"Category": "Air Filter","income": 1000,"expenses": 18.1},
        {"Category": "Injectors","income": 2000,"expenses": 22.8},
        {"Category": "Chassis","income": 500,"expenses": 23.9},
        {"Category": "Tranceiver","income": 4511,"expenses": 25.1},
        {"Category": "Storage","income": 123,"expenses": 25}
    ];

    AmCharts.ready(function () {
	    // SERIAL CHART
	    chart = new AmCharts.AmSerialChart();
	    chart.dataProvider = chartData;
	    chart.categoryField = "year";
	    chart.startDuration = 1;
	    chart.rotate = true;

	    // AXES
	    // category
	    var categoryAxis = chart.categoryAxis;
	    categoryAxis.gridPosition = "start";
	    categoryAxis.axisColor = "#DADADA";
	    categoryAxis.dashLength = 3;

	    // value
	    var valueAxis = new AmCharts.ValueAxis();
	    valueAxis.dashLength = 3;
	    valueAxis.axisAlpha = 0.2;
	    valueAxis.position = "top";
	    valueAxis.title = "Million USD";
	    valueAxis.minorGridEnabled = true;
	    valueAxis.minorGridAlpha = 0.08;
	    valueAxis.gridAlpha = 0.15;
	    chart.addValueAxis(valueAxis);

	    // GRAPHS
	    // column graph
	    var graph1 = new AmCharts.AmGraph();
	    graph1.type = "column";
	    graph1.title = "Income";
	    graph1.valueField = "income";
	    graph1.lineAlpha = 0;
	    graph1.fillColors = "#ADD981";
	    graph1.fillAlphas = 0.8;
	    graph1.balloonText = "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b></span>";
	    chart.addGraph(graph1);

	    // line graph
	    var graph2 = new AmCharts.AmGraph();
	    graph2.type = "line";
	    graph2.lineColor = "#27c5ff";
	    graph2.bulletColor = "#FFFFFF";
	    graph2.bulletBorderColor = "#27c5ff";
	    graph2.bulletBorderThickness = 2;
	    graph2.bulletBorderAlpha = 1;
	    graph2.title = "Expenses";
	    graph2.valueField = "expenses";
	    graph2.lineThickness = 2;
	    graph2.bullet = "round";
	    graph2.fillAlphas = 0;
	    graph2.balloonText = "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b></span>";
	    chart.addGraph(graph2);

	    // LEGEND
	    var legend = new AmCharts.AmLegend();
	    legend.useGraphSettings = true;
	    chart.addLegend(legend);

	    chart.creditsPosition = "top-right";

	    // WRITE
	    chart.write("bardiv");
    });
})();