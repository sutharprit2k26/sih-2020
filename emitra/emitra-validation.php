<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "sih") or die(mysqli_error($con));

mysqli_select_db($con,'sih');
$mail = $_POST['emitra_mail'];
$pass = $_POST['emitra_password'];

$username = substr($mail, 0, strpos($mail, '@'));
$q = "select E_Mail,Password from emitra_signup_data where E_Mail = '$mail' && Password = '$pass' ";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num == 1)
{
	$_SESSION['username'] = $username;
	

	header('location:emitra-dashboard.php');

}
else{

	
	header('location:../index.php');
}
?>