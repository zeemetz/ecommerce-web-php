<?php 
	include "../connect.php";
	$username = $_POST['username'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];

	$query = "insert into user(username,password,phone,role) values ('$username','$password','$phone','member') ";
	
	if(update($con,$query))
	{
		header("location: ../index.php?page=guest/register.php&err=success");
	}
	else
	{
		echo "failed";
	}
 ?>