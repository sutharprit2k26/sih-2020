<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "sih") or die(mysqli_error($con));

mysqli_select_db($con,'sih');
$name = $_POST['authority_name'];
$mail = $_POST['authority_mail'];
$designation = $_POST['authority_designation'];
$auth_name = $_POST['authorization_name'];
$phone = $_POST['authority_phone'];
$pass = $_POST['authority_password'];

$q="SELECT * FROM admin_signup_data WHERE E_Mail = '$mail' ";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num == 1)
{
	echo "duplicate data";
}
else{
$qy ="insert into admin_signup_data (Full_Name,E_Mail,Designation,Authorization_Name,Phone_Number,Password) values ('$name','$mail','$designation','$auth_name','$phone','$pass')";
    echo "<h1>data entered successfully</h1>";
	mysqli_query($con, $qy) or die(mysqli_error($con));
}
?>