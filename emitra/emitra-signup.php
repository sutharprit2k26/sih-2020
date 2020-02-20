<?php
session_start();
header('location:../index.php');
$con = mysqli_connect("localhost", "root", "", "sih") or die(mysqli_error($con));

mysqli_select_db($con,'sih');
$name = $_POST['emitra_name'];
$mail = $_POST['emitra_mail'];
$address = $_POST['emitra_address'];
$phone = $_POST['emitra_phone'];
$state = $_POST['emitra_state'];
$city = $_POST['emitra_city'];
$code = $_POST['emitra_code'];
$pass = $_POST['emitra_password'];

$q="SELECT * FROM emitra_signup_data WHERE E_Mail = '$mail' ";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num == 1)
{
	echo "duplicate data";
}
else{
$qy ="insert into emitra_signup_data (Full_Name,E_Mail,Address,Phone_Number,State,City,Postal_Code,Password) values ('$name','$mail','$address','$phone','$state','$city','$code','$pass')";
	
	mysqli_query($con, $qy) or die(mysqli_error($con));
}
?>