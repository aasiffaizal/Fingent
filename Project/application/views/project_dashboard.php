<!DOCTYPE html>
<html lang="en">
<head>
<script src="//d3js.org/d3.v3.min.js"></script>
  
<script type="text/javascript" src="https://rawgithub.com/NickQiZhu/dc.js/master/web/js/crossfilter.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/dc/1.7.0/dc.js"></script>
<link rel="stylesheet" type="text/css" href="http://tvinci.github.io/webs/css/dc.css"/>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Dashboard</title>
	
	<link rel="icon" href="http://localhost/Project/favicon.ico">
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<!-- BEGIN CSS FRAMEWORK -->
	<link rel="stylesheet" href="http://localhost/Project/assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost/Project/assets/plugins/font-awesome/css/font-awesome.min.css">
	<!-- END CSS FRAMEWORK -->
	
	<!-- BEGIN CSS PLUGIN -->
	<link rel="stylesheet" href="http://localhost/Project/assets/plugins/pace/pace-theme-minimal.css">
	<link rel="stylesheet" href="http://localhost/Project/assets/plugins/jquery-datatables/css/dataTables.bootstrap.css">
	<!-- END CSS PLUGIN -->
	
	<!-- BEGIN CSS TEMPLATE -->
	<link rel="stylesheet" href="http://localhost/Project/assets/css/main.css">
	<link rel="stylesheet" href="http://localhost/Project/assets/css/skins.css">
	<!-- END CSS TEMPLATE -->


</head>

<body class="skin-dark">
	<!-- BEGIN HEADER -->
	<header class="header">
		<!-- BEGIN LOGO -->
		<a href="dashboard" class="logo">
			<img src="http://localhost/Project/assets/img/Fingent.png" alt="Fingent" height="40">
		</a>
		<!-- END LOGO -->
<!-- BEGIN NAVBAR -->
		<nav class="navbar navbar-static-top" role="navigation">
			<a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
				<span class="sr-only">Toggle navigation</span>
				<span class="fa fa-bars fa-lg"></span>
			</a>
			
			
			
			<div class="navbar-right">
				<ul class="nav navbar-nav">
					<li class="dropdown navbar-menu">
						
						<ul class="dropdown-menu box task">
							
							
							</ul>

					
					
					<li class="dropdown profile-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-cog fa-lg"></i>
							<span class="username">Options</span>
							<i class="caret"></i>
						</a>
						<ul class="dropdown-menu box profile">
							<li><div class="up-arrow"></div></li>
							<li class="border-top">
							
							</li>
							
							</li>
							<li>
								<a href="Project_displayctrl/logout"><i class="fa fa-power-off"></i>Log Out</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<!-- END NAVBAR -->
	</header>
	<!-- END HEADER -->

	
	<div class="wrapper row-offcanvas row-offcanvas-left">
		<!-- BEGIN SIDEBAR -->
		<aside class="left-side sidebar-offcanvas">
			<section class="sidebar">
				<div class="user-panel">
					
					<div class="pull-left info">
						<p><strong><?php echo $_SESSION['Name'];?></strong></p>
						<a href="#"><i class="fa fa-circle text-green"></i> Online</a>
					</div>
				</div>
				
				<ul class="sidebar-menu">
					<li class="active">
						<a href="dashboard">
							<i class="fa fa-home"></i><span>Dashboard</span>
						</a>
					</li>
					<li >
						<a href="project_displayctrl">
							<i class="fa fa-laptop"></i><span>Admin Users</span>
							
						</a>
						
					<li >
						<a href="project_employeectrl">
							<i class="fa fa-align-left"></i><span>Employees</span>
							
						</a>
						
					</li>
					<li>
						<a href="project_calendarctrl/calendarcreate">
							<i class="fa fa-table"></i><span>Attendance</span>
						
						</a>
						
					</li>
					
						
						
						</ul>
					
					
				
			</section>
		</aside>
		<!-- END SIDEBAR -->
		
	
			<!-- BEGIN CONTENT -->
		<aside class="right-side">
			<!-- BEGIN CONTENT HEADER -->
			<section class="content-header">
				<i class="fa fa-home"></i>
				<span>Dashboard</span>
				<ol class="breadcrumb">
					<li class="active" >Dashboard</li>
					
				</ol>
			</section>
			<!-- END CONTENT HEADER -->

		
			<!-- BEGIN MAIN CONTENT -->
			<section class="content">
				<div class="row">
					<!-- BEGIN WIDGET -->
					<div class="col-sm-12 text-center">
						<div class="row" >
							<div class="col-lg-4"align="left"style="font-size:16px;">
								<div class="grid widget bg-light-blue">
									<div class="grid-body">
										<span class="title">Hours of Effort</span>
										<span class="value"><?php echo round($Effort,2);?></span>
										<span class="stat1 chart">&nbsp;</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4"align="center" style="font-size:16px;">
								<div class="grid widget bg-green">
									<div class="grid-body">
										<span class="title">Days</span>
										<span class="value"><?php echo $Days;?></span>
										<span class="stat2 chart">&nbsp;</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4"align="right">
								<div class="grid widget bg-purple"style="font-size:16px;">
									<div class="grid-body">
										<span class="title">Employees</span>
										<span class="value"><?php echo $Emp;?></span>
										<span class="stat3 chart">&nbsp;</span>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<!-- END WIDGET -->


<!-- BEGIN MAIN CONTENT -->
			<section class="content">
				<div class="row">
					
					<div class="col-md-12 ">
						<div class="grid no-border">
							<br><div class="grid-header">
							<div class="grid-body">

								<div class="col-md-12">
							<br><p style="position:relative; left:500px;font-size:16px;font-weight:bold;">No of Employees per day </p><svg  id="svgVisualize" width="1300" height="600"></svg></div>
						<div class="col-md-12"><div id="chart" width="500"></div></div>
				
			
							<div class="col-lg-6">
								<br><p style="position:relative; left:175px;font-size:16px;font-weight:bold;">Device</p><div id="chart-ring-year"> </div></div>
								<div class="col-lg-6"><div id="rowChart"> </div></div>
							</div>
					
						</div>
					</div>
				</div>

			
				

		<!-- BEGIN SCROLL TO TOP -->
		<div class="scroll-to-top"></div>
		<!-- END SCROLL TO TOP -->





	<!-- BEGIN JS FRAMEWORK -->
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-2.1.0.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- END JS FRAMEWORK -->
	
	<!-- BEGIN JS PLUGIN -->
	<script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-totemticker/jquery.totemticker.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-resize/jquery.ba-resize.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-blockui/jquery.blockUI.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-datatables/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-datatables/js/dataTables.bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/datatables.js"></script>
	<!-- END JS PLUGIN -->

	<!-- BEGIN JS TEMPLATE -->
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/skin-selector.js"></script>
	<!-- END JS TEMPLATE -->
</body>
</html>
<script>

d3.json('http://localhost/Project/index.php/project_piechartctrl/getdata', function(error, data){
  data.forEach(function(d) {
     
       d.Attendance = +d.Attendance;
    });
	var ndx = crossfilter(data);
	

/*Ring*/
var yearRingChart   = dc.pieChart("#chart-ring-year");
var yearDim  = ndx.dimension(function(d) {return d.Machine;});
//var year_total = yearDim.group().reduceSum(function(d) {return d.http_200+d.http_302+d.http_404;});
var year_total = yearDim.group().reduceSum(function(d) {return d.Attendance;});
yearRingChart
	
    .width(400).height(500)
    .dimension(yearDim)
    .group(year_total)

    .legend(dc.legend())
    .innerRadius(0);
	


	
    
var yearlyBubbleChart = dc.bubbleChart('#yearly-bubble-chart');
var yearlyDimension = ndx.dimension(function (d) {
        return d.date;
    });
        
yearlyBubbleChart
.width(990)
.height(250)
        .transitionDuration(1500)
        .margins({top: 10, right: 50, bottom: 30, left: 10})
        .dimension(yearlyDimension)
	.group(year_total)
	 .keyAccessor(function (d) {
            return d.date;
        })
.radiusValueAccessor(function (d) {
            return d.Attendance;
        })
.valueAccessor(function (d) {
            return d.Attendance;
        })
        .colorAccessor(function (d) {
            return d.Machine;
        })
.maxBubbleRelativeSize(0.3)
        .x(d3.scale.linear().domain([-2500, 2500]))
        .y(d3.scale.linear().domain([-100, 100]))
        .r(d3.scale.linear().domain([0, 4000]))
.elasticY(true)
        .elasticX(true)



dc.renderAll();
  dc.renderAll('group');
  dc.redrawAll();
dc.redrawAll('group');

});


</script>
<script>

d3.json('http://localhost/Project/index.php/project_piechartctrl/bubblegraph', function(error, sampleData){
dateFormat = d3.time.format("%Y-%m-%d");
  sampleData.forEach(function(d) {
	d.dd = dateFormat.parse(d.Date);
d.Attendance = +d.Attendance;
    });

InitChart();
function InitChart(){

var xf = crossfilter(sampleData);

    var dateDim = xf.dimension(function (d) {
        return d.dd;
    });
var Dim = xf.dimension(function (d) {
        return d.dd;
    });
	
var m = [80, 80, 80, 80]; // margins
		var w = 1000 - m[1] - m[3]; // width
		var h = 400 - m[0] - m[2]; // height

	 var mindate = new Date(2015,2,1);
	 var maxdate = dateDim.top(1)[0].dd;
        var vis = d3.select("#svgVisualize");
        var xRange = d3.time.scale().range([60, 900]).domain([mindate, maxdate]) 
        var yRange = d3.scale.linear().range([500, 60]).domain([0,
                        d3.max(sampleData, function (d) {
                            return d.Attendance+20;
                        })]);
        var xAxis = d3.svg.axis().scale(xRange).ticks(10).tickPadding(1);
        var yAxis = d3.svg.axis().scale(yRange).orient("left").ticks(10);
        vis.append("svg:g").call(xAxis).attr("transform", "translate(0 ,500)");
        vis.append("svg:g").call(yAxis).attr("transform", "translate(60,0)");
        var circles = vis.selectAll("circle").data(sampleData);
    circles
        .enter()
        .insert("circle")
        .attr("cx", function (d) { return xRange (d.dd); })
        .attr("cy", function (d) { return yRange (d.Attendance); })
        .attr("r", function (d) { return d.Attendance/5; })
	 .style("fill-opacity", .5) 
       .style("fill", "#ffdb4d");
 vis.selectAll('.axis line, .axis path,path').style({'stroke': 'black', 'fill': 'none', 'stroke-width': '1px'});


 

	
}
});

</script>

<style>
.path {
				stroke: black;
				stroke-width: 1;
				fill: none;
			}
			
			.axis {
			  shape-rendering: crispEdges;
			}

			.x.axis line {
			  stroke: lightgrey;
			}

			.x.axis .minor {
			  stroke-opacity: .5;
			}

			.x.axis path {
			  display: block;
			  stroke: #000;
			}

			.y.axis line, .y.axis path {
			  fill: none;
			  stroke: #000;
			}
</style>


<script>
dateFormat = d3.time.format("%Y-%m-%d");
d3.json("http://localhost/Project/index.php/project_effortctrl/getvalues", function(error, data){console.log(error);
    data.forEach(function (e) {
        e.dd = dateFormat.parse(e.Date);
        e.Effort=+e.Effort;
       // e.end=+e.end-e.Effort;
       
    });

    var cssChart = dc.barChart("#chart");
    var xf = crossfilter(data);

    var dateDim = xf.dimension(function (d) {
        return d.dd;
    });
var Dim = xf.dimension(function (d) {
        return d.dd;
    });
    var eventsByDate = dateDim.group().reduce(
            function (p, v) {
                p.Effort += v.Effort;
               // p.end += v.end;
                
                return p;
            },
            function (p, v) {
                p.Effort -= v.Effort;
               // p.end -= v.end;
                return p;
            },
            function () {
                return {
                    Effort: 0,
                 //   end:0
                   
                };
            }
    );


    var minDate = dateDim.bottom(1)[0].dd;
   
    var maxDate = dateDim.top(1)[0].dd;


 
	
    /* when any bar is clicked, recolor the chart */
    var colorRenderlet = function (_chart) {
        _chart.selectAll("rect.bar")
                .on("click", function (d) {
                    function setAttr(selection, keyName) {
                        selection.style("fill", function (d) {
                            if (d[keyName] == "Effort") return "none";
                            else if (d[keyName] == "end") return "black";
                           
                        });
                    };
                    setAttr(_chart.selectAll("g.stack").selectAll("rect.bar"), "layer")
                    setAttr(_chart.selectAll("g.dc-legend-item").selectAll("rect"), "name")
                });
    };

    cssChart
            .margins({top: 100, right: 20, left: 50, bottom: 50})
            .width(900)
            .height(500)
            .gap(50)
            .dimension(dateDim)
            .group(eventsByDate, "Effort")
            .valueAccessor(function (d) {
                return d.value.Effort;
            })
           
            
            .x(d3.time.scale().domain([minDate, maxDate]))
	     .y(d3.scale.linear().domain([0, 1400]))
            .xUnits(d3.time.days)
            .centerBar(true)
            .elasticY(true)
.elasticX(true)
.xAxisPadding(1)
.yAxisPadding(3)
            .brushOn(false)
            .renderlet(colorRenderlet)
          .yAxisLabel('Effort')
	  .xAxisLabel('Date')
	  .y(d3.scale.linear().domain([0, 1400]).range([0, 24]))
            .render();

console.log(cssChart);
});
</script>
<style>
#chart g.stack._0  > rect.bar {
    stroke: none;
    fill: steelblue;
}

#chart g.stack._1 > rect.bar {
    stroke: none;
    fill: black;
}

#chart g.stack._2 > rect.bar {
    stroke: none;
    fill: green;
}

#chart rect.bar
{
width:2px;
}
#chart g.dc-legend-item:nth-child(1) > rect:nth-child(1) {
    stroke: none;
    fill: red;
}

#chart g.dc-legend-item:nth-child(2) > rect:nth-child(1) {
    stroke: none;
    fill: black;
}

#chart g.dc-legend-item:nth-child(3) > rect:nth-child(1) {
    stroke: none;
    fill: green;
}
</script>
<style>
#chart g.stack._0  > rect.bar {
    stroke: none;
    fill: none;
}

#chart g.stack._1 > rect.bar {
    stroke: none;
    fill: black;
}


#chart rect.bar
{
width:2px;
}
#chart g.dc-legend-item:nth-child(1) > rect:nth-child(1) {
    stroke: none;
    fill: red;
}

#chart g.dc-legend-item:nth-child(2) > rect:nth-child(1) {
    stroke: none;
    fill: black;
}

</style>

<script type="text/javascript">




d3.json("http://localhost/Project/index.php/Dashboard/row", function(error, data){
    data.forEach(function (e) {
console.log(e.Day);
        e.Effort=+e.Effort;
      
       
    });

var rowChart = dc.rowChart("#rowChart");
var ndx = crossfilter(data),
   
   
    neighborhoodDimension = ndx.dimension(function (d) {
        return d.Day;
    }),
    neighborhoodGroup = neighborhoodDimension.group().reduceSum(function (d) {
        return d.Effort;
    });
  


rowChart.width(500)
    .height(500)
    .dimension(neighborhoodDimension)
    .group(neighborhoodGroup);
	//.renderLabel('c')
	//.renderTitle('f')
	console.log(rowChart);
	
    
   

dc.renderAll();
});
</script>
