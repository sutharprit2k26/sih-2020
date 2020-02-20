<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "sih") or die(mysqli_error($con));

mysqli_select_db($con,'sih');
$mail = $_POST['authority_mail'];
$pass = $_POST['authority_password'];
$username = substr($mail, 0, strpos($mail, '@'));
$q = "select * from admin_signup_data where E_Mail = '$mail' && Password = '$pass' ";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num == 1)
{
	$_SESSION['username'] = $username;
	header('location:admin-dashboard.php');
}
else{
	header('location:../index.php');
}
?>