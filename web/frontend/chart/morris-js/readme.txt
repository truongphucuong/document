﻿Morris.js
Source:
	http://morrisjs.github.io/morris.js/



Using morris

Step 1:
	Add css
	Add jQuery
	Add Raphael.js
	Add Morris.js
Step 2: add element div
	<div id="morris-chart"></div>
Step 2:
	- Line: 1 line
		<script>
			new Morris.Line({
				// ID of the element in which to draw the chart.
				  element: 'morris-1-line',
				  // Chart data records -- each entry in this array corresponds to a point on
				  // the chart.
				  data: [
				    { year: '2008', value: 20 },
				    { year: '2009', value: 10 },
				    { year: '2010', value: 5 },
				    { year: '2011', value: 5 },
				    { year: '2012', value: 20 }
				  ],
				  // The name of the data record attribute that contains x-values.
				  xkey: 'year',
				  // A list of names of data record attributes that contain y-values.
				  ykeys: ['value'],
				  // Labels for the ykeys -- will be displayed when you hover over the
				  // chart.
				  labels: ['Value']
			});
		</script>
	- Line: 2 line
		<script>
			/*
			* Play with this code and it'll update in the panel opposite.
			*
			* Why not try some of the options above?
			*/
			Morris.Line({
				element: 'morris-1-line',
				data: [
				{ y: '2006', a: 100, b: 90 },
				{ y: '2007', a: 75,  b: 65 },
				{ y: '2008', a: 50,  b: 80 },
				{ y: '2009', a: 75,  b: 65 },
				{ y: '2010', a: 50,  b: 90 },
				{ y: '2011', a: 75,  b: 65 },
				{ y: '2012', a: 100, b: 90 }
				],
				xkey: 'y',
				ykeys: ['a', 'b'],
				labels: ['Series A', 'Series B']
			});
		</script>
	- Bar: 1 bar
		<script>
			/*
			* Play with this code and it'll update in the panel opposite.
			*
			* Why not try some of the options above?
			*/
			Morris.Bar({
				element: 'morris-1-bar',
				resize: true,
				data: [
				{ y: '2006', a: 100},
				{ y: '2007', a: 75},
				{ y: '2008', a: 50},
				{ y: '2009', a: 75},
				{ y: '2010', a: 50},
				{ y: '2011', a: 75},
				{ y: '2012', a: 100}
				],
				xkey: 'y',
				ykeys: ['a'],
				labels: ['Series A']
			});

		</script>
	- Bar: 2 bar	
		<script>
			/*
			* Play with this code and it'll update in the panel opposite.
			*
			* Why not try some of the options above?
			*/
			Morris.Bar({
				element: 'morris-2-bar',
				resize: true,
				data: [
				{ y: '2006', a: 100, b: 90 },
				{ y: '2007', a: 75,  b: 65 },
				{ y: '2008', a: 50,  b: 40 },
				{ y: '2009', a: 75,  b: 65 },
				{ y: '2010', a: 50,  b: 40 },
				{ y: '2011', a: 75,  b: 65 },
				{ y: '2012', a: 100, b: 90 }
				],
				xkey: 'y',
				ykeys: ['a', 'b'],
				labels: ['Series A', 'Series B']
			});
		</script>
	- Donut
		<script>
			/*
			* Play with this code and it'll update in the panel opposite.
			*
			* Why not try some of the options above?
			*/
			Morris.Donut({
				element: 'morris-donut',
				data: [
				{label: "Download Sales", value: 12},
				{label: "In-Store Sales", value: 30},
				{label: "Mail-Order Sales", value: 20}
				]
			});
		</script>

