<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:../index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>

	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" type="text/css" href="admin.css">

</head>
<body style="padding-top: 98px;">
	
	<div class="navbar navbar-default navbar-fixed-top font_size">
		<div class="marq">
			<marquee behavior="alternate"><h4 class="heading_size">Ministry Of Tribal Affairs</h4></marquee>
		</div>
		<div class="container">
			<div class="navbar-header"> 
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>

				<a class="navbar-brand" href="#">Ministry Of Tribal Affair</a>

			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					
					<li>
						<a href="#">Welcome <?php echo $_SESSION['username'];?>
					</a>
							
						</li>
					
					<li><a href="../logout.php"  ><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog "></span>Settings <span class="caret"></span></a>
						<ul class="dropdown-menu" >
							<li><a href="#"><span  style="margin-right: 8px;"></span>change profile pic</a></li>
							<li><a href="#"><span  style="margin-right: 8px;"></span>change password</a></li>

						</ul>
					</li>

				</ul>
			</div>
		</div>
	</div>
	<div class="container" style="margin-top: 100px;">
		<div class="jumbotron">
			<h1 class="text-center">Succesfully Signed In / Logged In</h1>
			<br>
			<center><a href="tribal-data-admin.php" class="btn btn-danger">View Applications</a></center>
		</div>
	</div>

</body>
</html>