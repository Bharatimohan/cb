<?php

include("connect.php");

$con = OpenCon();

session_start();

if(isset($_POST['submit']))
{
	$fname = $_POST['Fname'];
	$lname = $_POST['Lname'];
	$phone = $_POST['phone'];
	$user_id = $_POST['user_id'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$add_new_request = mysqli_query($con,"INSERT INTO `user`(`user_id`,`Fname`,`Lname`,`address`, `phone_no`, `password` ) VALUES ('$user_id','$fname','$lname','$address','$phone','$password')");
	$username = mysqli_insert_id($con);
	$smartcard_no = rand(1111111111,1999999999);
	$balance= 0;
	$card_status="Processing";
	$admin_id=
	$add_new_card = mysqli_query($con,"INSERT INTO `smartcard`(`Scard_no`, `user_id`) VALUES ('$smartcard_no','$user_id')");
	$_SESSION['request_sent'] = "Your request has been sent successfully login to check the status";
	header("location: ../login.php");
}
CloseCon($con);
?>