
<!DOCTYPE html>
<html>
<head>
	<title>Tribal Talent</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/index.js"></script>
  <link rel="stylesheet" type="text/css" href="card.css">
	
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" type="text/css" href="../css/tribal-data.css">
</head>
<body style="padding-top: 96px;">
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

				<a class="navbar-brand" href="#"><img src="">Ministry Of Tribal Affair</a>

			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">

					<li><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-envelope"></span>About Us</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-phone"></span>Contact Us</a></li>
					<li><a href="../logout.php"><span class="glyphicon glyphicon-log-in"></span>logout</a></li>

					</ul>
				</div>
			</div>
		</div>



		<div class="nav2 ">
			<div class="container-fluid">
				<div class="row"> 
					<div class="col-xs-2">
						<center><div class="dropdown">
							<a href="#" onclick="openCity(event, 'Sports')" id="x" >Sports<img class="margin_from_left" src="../images/soccer.png" height="30px" width="30px"></a>

						</div>	</center>
					</div>
					<div class="col-xs-2">
						<center><div class="dropdown">
							<a href="#" onclick="openCity(event, 'Painting')" >Painting<img class="margin_from_left" src="../images/paint.png" height="30px" width="30px"></a>

						</div>	</center>
					</div>

					<div class="col-xs-2">
						<center><div class="dropdown">
							<a href="#" onclick="openCity(event, 'Dancing')" >Dancing<img class="margin_from_left" src="../images/dancer.png" height="30px" width="30px"></a>

						</div>	</center>
					</div>

					<div class="col-xs-2">
						<center><div class="dropdown">
							<a href="#" onclick="openCity(event, 'Singing')" >Singing<img class="margin_from_left" src="../images/karaoke.png" height="30px" width="30px"></a>

						</div>	</center>
					</div>

					<div class="col-xs-2">
						<center><div class="dropdown">
							<a href="#" onclick="openCity(event, 'Crafting')" >Crafting<img class="margin_from_left" src="../images/clay.png" height="30px" width="30px"></a>

						</div>	</center>
					</div>

					<div class="col-xs-2">
						<center><div class="dropdown">
							<a href="#" onclick="openCity(event, 'Services')" >Services<img class="margin_from_left" src="../images/call-center.png" height="30px" width="30px"></a>

						</div>	</center>
					</div>

				</div> 
			</div>




		</div>

		<div id="Sports" class="tabcontent">
			<div class="container" >
				<div class="jumbotron">
					<h1>Yuva With Sports Talent</h1>
				</div>
				
			</div>
			<h1>sports</h1>


		</div>
		<div id="Painting" class="tabcontent">
			<div class="container" >
				<div class="jumbotron">
					<h1>Yuva With Painting Talent</h1>
				</div>
				
			</div>
			<?php
			$conn = mysqli_connect("localhost","root","","sih");
			mysqli_select_db($conn,'sih');

			$q = "SELECT * FROM appl where talent = 'painting'";
			$querydisplay = mysqli_query($conn,$q);
			while ($result = mysqli_fetch_array($querydisplay)) {
				?>
				
			<div class="col-xs-12 col-sm-6 col-md-3 " style="padding: 20px;">	
				 <div class="card" style="width: 16rem;">
				 	<img id="myImg" src="<?php  echo '../application/'.$result['image']; ?>" height="200px" width="270px" alt="Snow">
					
					<div class="card-body">
						<h1 class="card-title"><?php echo $result['f_name'];?></h1>
						<p class="card-text " style="text-align: justify; width: 270px;"><?php echo $result['description']?></p>

						<a href='show.php?id="<?php echo $result['id']?>"' class="btn btn-danger">view profile</a>
					</div>
				</div>
			
			</div>
			
				<?php
			}

			?>

		</div>
		<div id="Dancing" class="tabcontent">
			<div class="container" >
				<div class="jumbotron">
					<h1>Yuva With Dancing Talent</h1>

				</div>

				
			</div>
		</div>
		<div id="Singing" class="tabcontent">
			<div class="container" >
				<div class="jumbotron">
					<h1>Yuva With Singing Talent</h1>
				</div>

				
			</div>

		</div>
		<div id="Crafting" class="tabcontent">
			<div class="container" >
				<div class="jumbotron">
					<h1>Yuva With Crafting Talent</h1>
				</div>
				
			</div>

		</div>
		<div id="Services" class="tabcontent">
			<div class="container" >
				<div class="jumbotron">
					<h1>Yuva Who Provide Service</h1>
				</div>
				
			</div>


		</div>

		
		<footer class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<h6>About</h6>
						<p style="text-align: justify;">The Ministry of Tribal Affairs is the nodal Ministry for overall policy, planning and coordination of programmes for development of ST’s. To this end, Ministry of Tribal Affairs has undertaken activities that follow from the subjects allocated under the Government of India (Allocation of Business) Rules, 1961</p>
					</div>

					<div class="col-xs-6 col-md-3">
						<h6>Categories</h6>
						<ul class="footer-links">
							<li><a href="#">Sports</a></li>
							<li><a href="#">Painting</a></li>
							<li><a href="#">Dancing</a></li>
							<li><a href="#">Crafting</a></li>
							<li><a href="#">Singing</a></li>
							<li><a href="#">Service</a></li>
						</ul>
					</div>

					<div class="col-xs-6 col-md-3">
						<h6>Quick Links</h6>
						<ul class="footer-links">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Join</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Sitemap</a></li>
						</ul>
					</div>
				</div>
				<hr>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-6 col-xs-12">
						<center><p class="copyright-text"> Copyright © 2017. All rights reserved. Content Managed by Ministry of Tribal Affairs, Government of India

						</p>
					</center>
				</div>

			</div>
		</div>
	</footer>
	<!--signup form script-->
	<script type="text/javascript">


		function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
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
<!-- end sign up script -->

</body>
</html>