<?php 
	include "../connect.php";
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "select * from user where username = '$username' and password = '$password'";
	$arr = query($con,$query);
	if($arr != null)
	{
		$_SESSION["username"] = $arr[0]["username"];
		$_SESSION["role"] = $arr[0]["role"];
		echo $_SESSION['role'];
		header("location: ../index.php");
	}
	else
	{
		echo "un-authorized access";
	}
 ?>