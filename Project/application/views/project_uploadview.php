
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
	
	<title>Attendance-Import</title>
	
	<link rel="icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">
	
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
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/dropzone/css/dropzone.css">
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
		<a href="dashboard" class="logo">
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
						<a href="dashboard">
							<i class="fa fa-home"></i><span>Dashboard</span>
						</a>
					</li>
					<li >
						<a href="project_displayctrl">
							<i class="fa fa-laptop"></i><span>Admin Users</span>
							</a></li>
						
					<li>
						<a href="project_employeectrl">
							<i class="fa fa-align-left"></i><span>Employees</span>
							
						</a>
						
					</li>
					
						<li class="active">

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
				<i class="fa fa-align-left"></i>
				<span>Import</span>
				<ol class="breadcrumb">
					<li><a href="dashboard">Dashboard</a></li>
					<li><a href="project_calendarctrl/calendarcreate">Attendance</a></li>
					<li class="active">Import</li>
				</ol>
			</section>
			<!-- END CONTENT HEADER -->
			
			<!-- BEGIN MAIN CONTENT -->
			<section class="content">
				<div class="row">
					<!-- BEGIN HORIZONTAL FORM -->
					
						<div class="grid">
							<div class="grid-header">
								<i class="fa fa-align-left"></i>
								<span class="grid-title">Import</span>
								
							</div>
							<div class="grid-body">
								<form action="Project_uploadctrl/upload" class="form-horizontal" role="form" enctype="multipart/form-data" method="post">
									<div class="form-group">
										<label class="col-lg-4 "><p style="font-weight: bold;text-align:left;">Select File</p><p>Please select raw date

from punching machine</p></label>
										<div class="col-lg-3 ">
											<br>
											<input type="file" name="userfile" class="form-group">
										</div>
								
										<div class="col-sm-offset-4 col-sm-10">
											<div class="btn-group">
												<br><br><br><input type="submit" name="submit" class="btn btn-primary">&nbsp;<button type="button" class="btn btn-default" onclick="location.href = '<?php echo base_url();?>index.php/project_uploadctrl';">Cancel</button>
											</div>
										</div>
									</div>
								</form>
			
							</div>
						</div>
					</div>
					<!-- END HORIZONTAL FORM -->
				</div>

				
			</section>
			<!-- END MAIN CONTENT -->
		</aside>
		<!-- END CONTENT -->
		
		<!-- BEGIN SCROLL TO TOP -->
		<div class="scroll-to-top"></div>
		<!-- END SCROLL TO TOP -->
	</div>

	<!-- BEGIN JS FRAMEWORK -->
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-2.1.0.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- END JS FRAMEWORK -->
	
	<!-- BEGIN JS PLUGIN -->
	<script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-totemticker/jquery.totemticker.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-resize/jquery.ba-resize.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-blockui/jquery.blockUI.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/dropzone/dropzone.min.js"></script>
	<script type="text/javascript">
		
		
	</script>
	<!-- END JS PLUGIN -->

	<!-- BEGIN JS TEMPLATE -->
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/skin-selector.js"></script>
	<!-- END JS TEMPLATE -->
</body>
</html>
