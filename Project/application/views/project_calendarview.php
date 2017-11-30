<style>
table.calendar		{ border-left:1px solid #999; }
tr.calendar-row	{  }
td.calendar-day	{ min-height:160px; font-size:11px; position:relative; } * html div.calendar-day { height:160px; }
td.calendar-day:hover	{ background:#eceff5; }
td.calendar-day-np	{  min-height:160px; } * html div.calendar-day-np { height:160px; }
td.calendar-day-head { background:#ccc; font-weight:bold; text-align:center; width:150px; padding:5px; border-bottom:1px solid #999; border-top:1px solid #999; border-right:1px solid #999; }
div.day-number		{ background:#999; padding:10px; color:#fff; font-weight:bold; float:right; margin:0px 0px 0px 0; width:40px; height:40px; text-align:center; font-size:15px; }
/* shared */
td.calendar-day, td.calendar-day-np { width:150px; height:150px; padding:5px; border-bottom:1px solid #999; border-right:1px solid #999;  }




</style>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
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
              <body class="skin-dark">
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
					<li>
						<a href="<?php echo base_url();?>index.php/dashboard">
							<i class="fa fa-home"></i><span>Dashboard</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url();?>index.php/project_displayctrl">
							<i class="fa fa-laptop"></i><span>Admin Users</span>
							
						</a>
						
					<li >
						<a href="<?php echo base_url();?>index.php/project_employeectrl">
							<i class="fa fa-align-left"></i><span>Employees</span>
							
						</a>
						
					</li>
					<li class="active">
						<a href="<?php echo base_url();?>index.php/project_calendarctrl/calendarcreate">
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
				<i class="fa fa-table"></i>
				<span>Attendance</span>
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url();?>index.php/dashboard">Dashboard</a></li>
					<li class="active">Attendance</li>
					
				</ol>
			</section>
			<!-- END CONTENT HEADER -->
			
			<!-- BEGIN CONTENT -->
	
			<!-- BEGIN MAIN CONTENT -->
			<section class="content">
				<div class="row" align="center">
					<div class="col-md-12">





<?php
$noofpeople = array();
foreach($things as $key=>$r){

$noofpeople[$key] = $r;
 
}

function draw_calendar($month,$year,$noofpeople){

$dateObj   = DateTime::createFromFormat('!m', $month);
$monthName = $dateObj->format('F');	
?>
<p style="font-size:30px;"><a href="<?php echo base_url(); ?>index.php/Project_calendarctrl/calendarcreate/<?php echo$month?>/<?php echo$year?>/0"><<</a>&nbsp;&nbsp;&nbsp;<?php
echo"$monthName $year";
?>&nbsp;&nbsp;&nbsp;
<a href="<?php echo base_url(); ?>index.php/Project_calendarctrl/calendarcreate/<?php echo$month?>/<?php echo$year?>/1">>></a></p>
<?php
/* draw table */
	$calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

	/* table headings */
	$headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
	$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';

	/* days and weeks vars now ... */
	$running_day = date('w',mktime(0,0,0,$month,1,$year));
	$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
	$days_in_this_week = 1;
	$day_counter = 0;
	$dates_array = array();

	/* row for week one */
	$calendar.= '<tr class="calendar-row">';

	/* print "blank" days until the first of the current week */
	for($x = 0; $x < $running_day; $x++):
		$calendar.= '<td class="calendar-day-np"> </td>';
		$days_in_this_week++;
	endfor;

	/* keep going with days.... */
	for($list_day = 1; $list_day <= $days_in_month; $list_day++):
        
       {
		$calendar.= '<td class="calendar-day">';              
			/* add in the day number */
      			$calendar.='<a href='.base_url().'index.php/project_graph2ctrl/loadview/'.$list_day.'/'.$month.'/'.$year.'>';
			$calendar.= '<div class="day-number">'.$list_day. '</div>'; 

			/** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !! **/       if($noofpeople[$list_day]!=0)
			$calendar.= str_repeat($noofpeople[$list_day]." employees",1);
		$calendar.='</a>';
		$calendar.= '</td>';
			
		if($running_day == 6):
			$calendar.= '</tr>';
			if(($day_counter+1) != $days_in_month):
				$calendar.= '<tr class="calendar-row">';
			endif;
			$running_day = -1;
			$days_in_this_week = 0;
		endif;
		$days_in_this_week++; $running_day++; $day_counter++;
}	

endfor ;

	/* finish the rest of the days in the week */
	if($days_in_this_week < 8):
		for($x = 1; $x <= (8 - $days_in_this_week); $x++):
			$calendar.= '<td class="calendar-day-np"> </td>';
		endfor;
	endif;

	/* final row */
	$calendar.= '</tr>';

	/* end the table */
	$calendar.= '</table>';
	
	/* all done, return result */
	return $calendar;
}
echo draw_calendar($month,$year,$noofpeople);
?>
</body>	</section>
	</div>
				</div>
</div>
		
</aside>			<!-- END MAIN CONTENT -->
		
		<!-- END CONTENT -->


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

</section>
</html>
					



