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
	<link rel="stylesheet" type="text/css" href="emitra.css">

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
						<a href="#"><b>Welcome<span style="color: salmon;margin-left: 5px;"><?php echo $_SESSION['username'];?></span></b>
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
	
<!-- The sidebar -->
<div class="sidebar">
  <a class="active" class="tablinks" onclick="openCity(event, 'home')" id="x">Home</a>
  <a  class="tablinks" onclick="openCity(event, 'news')">News</a>
  <a class="tablinks" onclick="openCity(event, 'contact')">Contact</a>
  <a class="tablinks"onclick="openCity(event, 'about')">About</a>
</div>

<!-- Page content -->
<div class="content" id="home">
	<?php
			$conn = mysqli_connect("localhost","root","","sih");
			mysqli_select_db($conn,'sih');

			$q = "SELECT f_name,image FROM appl where f_name  = 'akshat' ";
			$querydisplay = mysqli_query($conn,$q);
			$result = mysqli_fetch_array($querydisplay);
			?>

  <div class="container" style="margin-top: 30px;">
		<div class="jumbotron">
			<h1 class="text-center" >Succesfully Logged In</h1>
			<br>
			 <center><a href="../application/application.php" class="btn btn-danger">Submit Applications</a></center> 
			 

		</div>
		<center>
			<div class="col-xs-4 col-xs-offset-4">
                    <a href="products.php#cameras" >
                    	<div class="thumbnail">
                            <img id="myImg" src="<?php  echo '../application/'.$result['image']; ?>" height="200px" width="270px" class="img-rounded img-responsive" alt="Snow">
                            <div class="caption">
                                <h2><?php echo $result['f_name']; ?></h2>
                               </div>
                        </div> 
                    </a>
                </div>
		</center>
	</div>
	
</div>
<div id="news" class="content">
	<h1>welcome news</h1>
</div>

<div id="contact" class="content">
	<h1>welcome contact</h1>
</div>

<div id="about" class="content">
	<h1>welcome about</h1>
</div>



<script type="text/javascript">


        	function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("content");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("x").click();


        </script>
	

</body>
</html>