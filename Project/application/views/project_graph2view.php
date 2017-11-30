<!DOCTYPE html>
<html lang="en">
<head>
<script src="<?php echo base_url(); ?>D3/d3.v3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>D3/crossfilter.js"></script>



	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Attendance</title>
	
	<link rel="icon" href="<?php echo base_url(); ?>favicon.ico">
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<!-- BEGIN CSS FRAMEWORK -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css">
	<!-- END CSS FRAMEWORK -->
	
	<!-- BEGIN CSS PLUGIN -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/pace/pace-theme-minimal.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jquery-datatables/css/dataTables.bootstrap.css">
	<!-- END CSS PLUGIN -->
	
	<!-- BEGIN CSS TEMPLATE -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/skins.css">
	<!-- END CSS TEMPLATE -->


</head>

<body class="skin-dark">
	<!-- BEGIN HEADER -->
	<header class="header">
		<!-- BEGIN LOGO -->
		<a href="<?php echo base_url(); ?>Dashboard" class="logo">
			<img src="<?php echo base_url(); ?>assets/img/Fingent.png" alt="Fingent" height="40">
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
								<a href="<?php echo base_url(); ?>Logout"><i class="fa fa-power-off"></i>Log Out</a>
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
					<li>
						<a href="<?php echo base_url(); ?>Dashboard">
							<i class="fa fa-home"></i><span>Dashboard</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>Project_displayctrl">
							<i class="fa fa-laptop"></i><span>Admin Users</span>
							
						</a>
						
					<li >
						<a href="<?php echo base_url(); ?>Project_employeectrl">
							<i class="fa fa-align-left"></i><span>Employees</span>
							
						</a>
						
					</li>
					<li class="active">
						<a href="<?php echo base_url(); ?>Project_calendarctrl/calendarcreate">
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
				<i class="fa fa-bar-chart-o"></i>
				<span>Punch Details</span>
				<ol class="breadcrumb">
				
					<li ><a href="<?php echo base_url(); ?>Project_calendarctrl/calendarcreate">Attendance</a></li>
					<li class="active">Punch Details</li>
				</ol>
			</section>
			<!-- END CONTENT HEADER -->
			
			<!-- BEGIN MAIN CONTENT -->
			<section class="content">
				<div class="row">
					<!-- BEGIN HORIZONTAL FORM -->
					
						<div class="grid">
							<div class="grid-header">
								<i class="fa fa-bar-chart-o"></i>
								<span class="grid-title">Attendance:&nbsp;<?php //echo $var;?></span><input type="submit" style="float: right;" class="btn btn-primary submit" onclick="location.href = '<?php echo base_url(); ?>Project_uploadctrl';" value="+Import New"></button>
								
							</div>
<div class="row">

							<div class="grid-body">
							<div align="center" style="font-size:30px; color:red;"><?php echo"<a href=".base_url()."Project_graph2ctrl/newloadview/$day/$month/$year/0><<&emsp;</a>";$monthNum = $month; $monthName = date("F", mktime(0, 0, 0, $monthNum, 10)); echo $day." ".$monthName." ".$year;
echo"<a href=".base_url()."Project_graph2ctrl/newloadview/$day/$month/$year/1>&emsp;>></a>";?> </div>
	<div id="chart"></div><br><br><?php if(!empty($d)){?> 
<svg id="svgVisualize" width="2000" height="550"></svg><?php } else echo"No data";?>

							</div>
						</div>
					</div>
			
			<!-- BEGIN MAIN CONTENT -->
			<section class="content">
				<div class="row">
					<!-- BEGIN BASIC DATATABLES -->
 <?php if(!empty($d)){ ?>
					<div class="col-md-12">
						<div class="grid no-border">
							<div class="grid-header">
								<i class="fa fa-table"></i>
								<span class="grid-title">Punch Time</span>

								
							</div>
							<div class="grid-body">
								<table id="dataTables1" class="table table-hover display" cellspacing="0" width="100%">
									<thead>
										<tr>

											<th>No.</th>
											<th>Employee Id</th>
											<th>Time</th>
											<th>Machine</th>
											<th>Action</th>
                                                                                   </tr></thead>
<tbody>
<?php $c=1; foreach($things as $post){?>
     <tr>
         <td> <?php echo $c;$c=$c+1;?></td>	
          <td> <?php echo $post->Emp_Id;?> </td>
          <td> <?php echo $post->time;?> </td>

  <td> <?php echo $post->Mach_Name;?> </td>
  <td> <?php if($post->In_Out==0) echo"In"; else echo"Out";?> </td>
 </tr>    
     <?php }?>  

										</tr>
										
									</tbody>
								</table>
							</div>
						</div>
					</div> <?php } ?>
					<!-- END BASIC DATATABLES -->
				</div>
				<div class="row">

		<!-- BEGIN SCROLL TO TOP -->
		<div class="scroll-to-top"></div>
		<!-- END SCROLL TO TOP -->
					

	
</body>
</html>
					

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
    
   d3.json('<?php echo base_url(); ?>Project_graph2ctrl/graph/<?php echo $day;?>/<?php echo $month;?>/<?php echo $year;?>', function(error, data){console.log(data);
  data.forEach(function(d) {
       d.time = +d.time;
       d.people = +d.people;
    });
InitChart();
function InitChart(){

        var vis = d3.select("#svgVisualize");
        var xRange = d3.scale.linear().range([60, 1050]).domain([0,
                        d3.max(data, function (d) {
                            return d.time+1;
                        })]);
        var yRange = d3.scale.linear().range([500, 60]).domain([0,
                        d3.max(data, function (d) {
                            return d.people+30;
                        })]);
        var xAxis = d3.svg.axis().scale(xRange).ticks(12);

  
        var yAxis = d3.svg.axis().scale(yRange).orient("left").ticks(10);
        vis.append("svg:g").call(xAxis).attr("transform", "translate(0 ,500)");

        vis.append("svg:g").call(yAxis).attr("transform", "translate(60,0)");
        var circles = vis.selectAll("circle").data(data);
    circles
        .enter()
        .insert("circle")
        .attr("cx", function (d) { return xRange (d.time); })
        .attr("cy", function (d) { return yRange (d.people); })
        .attr("r", function (d) { return d.people; })
	 .style("fill-opacity", .5) 
       .style("fill", "#ffdb4d");
	svg.selectAll("line.horizontalGrid").data(yScale.ticks(4)).enter()
    .append("line")
        .attr(
        {
            "class":"horizontalGrid",
            "x1" : margin.right,
            "x2" : width,
            "y1" : function(d){ return yScale(d);},
            "y2" : function(d){ return yScale(d);},
            "fill" : "none",
            "shape-rendering" : "crispEdges",
            "stroke" : "black",
            "stroke-width" : "1px"
        });

	

	console.log(circles.attr);
}
});
</script>
<style>
path {
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
 .tick line{
    opacity: 0.2;
  }
</style>

