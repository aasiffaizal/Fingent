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
	
	<title>Add a record</title>
	
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
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck/skins/square/blue.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/switchery/switchery.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-slider/css/slider.css">
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
		<a href="dashboard" class="logo">
			<img src="http://www.infopark.in/companylogo/204fingent_logo_2014(300X100px).png" alt="Fingent" height="40">
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
								<a href="Logout"><i class="fa fa-power-off"></i>Log Out</a>
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
				
				</form>
				<ul class="sidebar-menu">
					<li>
						<a href="dashboard">
							<i class="fa fa-home"></i><span>Dashboard</span>
						</a>
					</li>
					<li class="active">
						<a href="project_displayctrl">
							<i class="fa fa-laptop"></i><span>Admin Users</span>
							
						</a>
						
					</li>
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
				<i class="fa fa-align-left"></i>
				<span>Add</span>
                                  
				<ol class="breadcrumb">
					<li><a href="dashboard">Dashboard</a></li>
					<li><a href="project_displayctrl">Admin Users</a></li>
					<li class="active">Add</li>
				</ol>
			</section>
			<!-- END CONTENT HEADER -->
			
			<!-- BEGIN MAIN CONTENT -->
			<section class="content">
				
					
				<div class="row">
					<!-- BEGIN OTHER VALIDATION -->
					<div class="col-md-12">
						<div class="grid">
							<div class="grid-header">
								<i class="fa fa-align-left"></i>
								<span class="grid-title">Add a Record</span>
								
							</div>
							<div class="grid-body">
								<form id="signupForm" class="form-horizontal" role="form" action="<?php echo base_url(); ?>index.php/Project_addctrl/abc" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label">Name</label>
										<div class="col-sm-7">
											<input type="text" name="name" id="name" class="form-control">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label">Email</label>
										<div class="col-sm-7">
											<input type="text" name="email" id="email" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Password</label>
										<div class="col-sm-7">
											<input type="password" name="password" id="password" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Confirm Password</label>
										<div class="col-sm-7">
											<input type="password" name="confirm_password" id="confirm_password" class="form-control">
										</div>
									</div>
                                                                       <div class="form-group">
										<label class="col-sm-3 control-label">Status</label>
										<div class="col-sm-7">
										
												&emsp;&ensp;<label class="radio-inline"><input type="radio" name="radio1" class="icheck" value="Active">Active</label>
										
											
												&emsp;&ensp;<label class="radio-inline"><input type="radio" name="radio1" class="icheck" checked value="Inactive"> Inactive</label>
									
											
										</div>
                                                                                               
												     
                                       <div class="form-group"><br>
										<div class="col-sm-offset-5 col-sm-6">
											<div class="btn-group">
												<br><button type="submit" class="btn btn-primary">Submit</button>
												<button type="button" class="btn btn-default" onclick="location.href = '<?php echo base_url(); ?>index.php/Project_displayctrl';">Cancel</button>
											</div>

											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END OTHER VALIDATION -->
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
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/validation.js"></script>
	<!-- END JS PLUGIN -->

	<!-- BEGIN JS TEMPLATE -->
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/skin-selector.js"></script>
	<!-- END JS TEMPLATE -->
</body>
</html>
