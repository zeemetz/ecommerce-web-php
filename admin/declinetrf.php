<?php 
	include "../connect.php";
	$headerid = $_POST['headerid'];
	$note = $_POST['note'];
	$status="failed";
	$query = "update payment set note = '$note', status='$status' where headerid = '$headerid' ";
	$err="";
	if(update($con,$query))
	{
		$err="success";
	}
	else
	{
		$err="failed";
	}
	header("location: ../index.php?page=admin/failed.php&err=$err ");
 ?>