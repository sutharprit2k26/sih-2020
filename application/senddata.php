<?php
header('location:../emitra/emitra-dashboard.php');
$con = mysqli_connect("localhost", "root", "", "sih") or die(mysqli_error($con));

mysqli_select_db($con,'sih');
$fname = $_POST['f_name'];
$lname = $_POST['l_name'];
$faname = $_POST['fa_name'];
$talent = $_POST['talent'];
$talent1 = $_POST['talent1'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$state = $_POST['state'];
$code = $_POST['code'];
$dob = $_POST['dob'];
$sex = $_POST['sex'];
$education = $_POST['edu'];
$martial = $_POST['martial'];
$aadhar = $_POST['aadhar'];
$desc = $_POST['description'];
$files = $_FILES['image'];


$filename = $files['name'];
$fileerror = $files['error'];
$filetmp = $files['tmp_name'];

$fileext = explode('.',$filename);
$filecheck = strtolower(end($fileext));

$fileextstored = array('png','jpg','jpeg');


$q="SELECT * FROM appl WHERE Aadhar = '$aadhar' ";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if(($num == 1))
{
	echo "duplicate data";
}
else{

	if(in_array($filecheck,$fileextstored))
	{
		$destinationfile = 'pic/'.$filename;
		move_uploaded_file($filetmp,$destinationfile);

		$qy ="INSERT INTO `appl` (`f_name`, `l_name`, `fa_name`, `talent`, `sec_talent`, `contact`, `address`, `state`, `code`, `dob`, `sex`, `education`, `martial`, `Aadhar`,`description`,`image`) VALUES ('$fname','$lname','$faname','$talent','$talent1','$contact','$address','$state','$code','$dob','$sex','$education','$martial','$aadhar','$desc','$destinationfile')";

		mysqli_query($con, $qy) or die(mysqli_error($con));
		$query = mysqli_query($con,$q);

	}


}
?>