<?php 
	$conn = mysqli_connect("localhost","root","","sih");
	mysqli_select_db($conn,'sih');
	
	$id = $_GET['id'];
	$q = "SELECT * FROM appl WHERE id = $id";
	$querydata = mysqli_query($conn,$q);
	$result = mysqli_fetch_array($querydata);
	
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>

	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
	
	<img  src="<?php  echo '../application/'.$result['image']; ?>" height="200px" width="270px">

	</body>
	</html>