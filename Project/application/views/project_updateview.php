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
	
	<title>Update a record</title>
	
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
		<a href="http://localhost/Project/index.php/dashboard" class="logo">
			<img src="http://www.infopark.in/companylogo/204fingent_logo_2014(300X100px).png" alt="Fingent" height="40">
		</a>
		<!-- END LOGO -->
		<!-- BEGIN NAVBAR -->
		<nav class="navbar navbar-static-top" role="navigation">

			<div class="navbar-right">
				<ul class="nav navbar-nav">
					
			
					<li class="dropdown profile-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-cog fa-lg"></i>
							<span class="username">Options</span>
							<i class="caret"></i>
						</a>
						<ul class="dropdown-menu box profile">
							
							
							<li>
								<a href="#"><i class="fa fa-power-off"></i>Log Out</a>
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
						<a href="http://localhost/Project/index.php/dashboard">
							<i class="fa fa-home"></i><span>Dashboard</span>
						</a>
					</li>
					<li class="active">
						<a href="http://localhost/Project/index.php/project_displayctrl">
							<i class="fa fa-laptop"></i><span>Admin Users</span>
							
						</a>
						
					<li >
						<a href="http://localhost/Project/index.php/project_employeectrl">
							<i class="fa fa-align-left"></i><span>Employees</span>
							
						</a>
						
					</li>
					<li>
						<a href="http://localhost/Project/index.php/project_calendarctrl/calendarcreate">
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
				<span>Update</span>
				<ol class="breadcrumb">
					<li><a href="http://localhost/Project/index.php/dashboard">Dashboard</a></li>
					<li><a href="http://localhost/Project/index.php/project_displayctrl">Admin Users</a></li>
					<li class="active">Update</li>
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
								<span class="grid-title">Modify a Record</span>
								
							</div>
							<div class="grid-body">
								<form id="signupForm" class="form-horizontal" role="form" action="http://localhost/Project/index.php/Project_updatectrl/updateuser1" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label">Name</label>
										<div class="col-sm-7">
											<input type="text" name="name" id="name" value=" <?php print_r($name); ?>" class="form-control">
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
										<label class="col-sm-3 control-label">Email</label>
										<div class="col-sm-7">
											<input type="email" name="email" id="email"value=" <?php print_r($email); ?>" class="form-control">
										</div>
									</div>
<input type="hidden" value="<?php print_r($name); ?>" name="oldname">
									
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-9">
											<div class="btn-group">
												<button type="submit" class="btn btn-primary submit">Submit</button>
<button type="button" class="btn btn-default" onclick="location.href = 'http://localhost/Project/index.php/Project_displayctrl';">Cancel</button>
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
	<script src="http://localhost/Project/assets/plugins/jquery-2.1.0.min.js"></script>
	<script src="http://localhost/Project/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- END JS FRAMEWORK -->
	
	<!-- BEGIN JS PLUGIN -->
	<script src="http://localhost/Project/assets/plugins/pace/pace.min.js"></script>
	<script src="http://localhost/Project/assets/plugins/jquery-totemticker/jquery.totemticker.min.js"></script>
	<script src="http://localhost/Project/assets/plugins/jquery-resize/jquery.ba-resize.min.js"></script>
	<script src="http://localhost/Project/assets/plugins/jquery-blockui/jquery.blockUI.min.js"></script>
	<script src="http://localhost/Project/assets/plugins/jquery-validation/jquery.validate.min.js"></script>
	<script src="http://localhost/Project/assets/js/validation.js"></script>
	<!-- END JS PLUGIN -->

	<!-- BEGIN JS TEMPLATE -->
	<script src="http://localhost/Project/assets/js/main.js"></script>
	<script src="http://localhost/Project/assets/js/skin-selector.js"></script>
	<!-- END JS TEMPLATE -->
</body>
</html>
