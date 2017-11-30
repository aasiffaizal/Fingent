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
	
	<title>Punch Details</title>
	
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
		<a href="<?php echo base_url(); ?>/index.php/dashboard" class="logo">
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
								<a href="<?php echo base_url(); ?>/index.php/Project_displayctrl/logout"><i class="fa fa-power-off"></i>Log Out</a>
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
						<a href="<?php echo base_url(); ?>/index.php/dashboard">
							<i class="fa fa-home"></i><span>Dashboard</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>/index.php/project_displayctrl">
							<i class="fa fa-laptop"></i><span>Admin Users</span>
							
						</a>
						
					<li class="active" >
						<a href="<?php echo base_url(); ?>/index.php/project_employeectrl">
							<i class="fa fa-align-left"></i><span>Employees</span>
							
						</a>
						
					</li>
					<li>
						<a href="<?php echo base_url(); ?>/index.php/project_calendarctrl/calendarcreate">
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
					<li><a href="<?php echo base_url(); ?>/index.php/dashboard">Dashboard</a></li>
					<li><a href="<?php echo base_url(); ?>/index.php/Project_employeectrl">Employees</a></li>
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
								<span class="grid-title">Employee:&nbsp;<?php echo $var;?></span>
								
							</div>
<div class="row">

							<div class="grid-body">
							<div align="center" style="font-size:30px; color:red;">	<?php echo"<a href=".base_url()."index.php/Project_graph1ctrl/newloadview/$var/$month/$year/0><<&emsp;</a>";$monthNum = $month; $monthName = date("F", mktime(0, 0, 0, $monthNum, 10)); echo $monthName." ".$year;
							echo"<a href=".base_url()."index.php/Project_graph1ctrl/newloadview/$var/$month/$year/1>&emsp;>></a>";?> </div>
								<div id="chart"></div><br><br><?php if(empty($d)) echo "No data";?>
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
											<th>Date</th>
											<th>Time</th>
											<th>Machine</th>
											<th>Action</th>
                                                                                   </tr></thead>
<tbody>
<?php $c=1; foreach($things as $post){?>
     <tr>
         <td> <?php echo $c;$c=$c+1;?></td>	
          <td> <?php echo $post->Date;?> </td>
          <td> <?php echo $post->Time;?> </td>

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
    //var data = [{"date":"2015-03-02","start":"8.0000","end":"15.6000"},{"date":"2015-03-03","start":"7.2000","end":"16.0167"},{"date":"2015-03-04","start":"9.2000","end":"16.0167"}];

     //var data = [
        //{"date": "2015-09-03", "mangoes": "20", "kiwis": "20", "lemons": "10"},
        //{"date": "2015-09-04", "mangoes": "2", "kiwis": "10", "lemons": "10"},
        //{"date": "2015-09-05", "mangoes": "10.0005", "kiwis": "2", "lemons": "10"},
        //{"date": "2015-09-06", "mangoes": "10", "kiwis": "10", "lemons": "2"},
        //{"date": "2015-09-07", "mangoes": "2", "kiwis": "2", "lemons": "10"},
        //{"date": "2015-09-08", "mangoes": "2", "kiwis": "10", "lemons": "2"},
        //{"date": "2015-09-09", "mangoes": "10", "kiwis": "2", "lemons": "2"}
    //];
d3.json('<?php echo base_url(); ?>index.php/project_graph1ctrl/graph/<?php echo $var;?>/<?php echo $month;?>/<?php echo $year;?>', function(error, data){console.log(data);
    dateFormat = d3.time.format("%Y-%m-%d");

    data.forEach(function (e) {
        e.dd = dateFormat.parse(e.date);
        e.start=+e.start;
        e.end=+e.end-e.start;
       
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
                p.start += v.start;
                p.end += v.end;
                
                return p;
            },
            function (p, v) {
                p.start -= v.start;
                p.end -= v.end;
                return p;
            },
            function () {
                return {
                    start: 0,
                    end:0
                    
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
                            if (d[keyName] == "start") return "none";
                            else if (d[keyName] == "end") return "#d9d9d9";
                           
                        });
                    };
                    setAttr(_chart.selectAll("g.stack").selectAll("rect.bar"), "layer")
                    setAttr(_chart.selectAll("g.dc-legend-item").selectAll("rect"), "name")
                });
    };

    cssChart
            .margins({top: 50, right: 20, left: 50, bottom: 50})
            .width(1500)
            .height(600)
            .gap(50)
            .dimension(dateDim)
            .group(eventsByDate, "start")
            .valueAccessor(function (d) {
                return d.value.start;
            })
            .stack(eventsByDate, "end", function (d) {
                return d.value.end;
            })
            
            .x(d3.time.scale().domain([minDate, maxDate]))
	     .y(d3.scale.linear().domain([0, 24]))
            .xUnits(d3.time.days)

            .centerBar(true)
            .elasticY(true)
.elasticX(true)
.xAxisPadding(1)
            .brushOn(false)
            .renderlet(colorRenderlet)
	.xAxisLabel('Date')
          .yAxisLabel('Time')
	  .y(d3.scale.linear().domain([0, 24]).range([0, 24]))
	 .renderHorizontalGridLines(true)
            .render();
});

</script>
<style>
#chart g.stack._0  > rect.bar {
    stroke: none;
    fill: none;
}

#chart g.stack._1 > rect.bar {
    stroke: none;
    fill: #d9d9d9;
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
    fill: #d9d9d9;
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
    fill: #e6b800;
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

