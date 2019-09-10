<?php 
	include "../connect.php";
	$resi = $_POST['resi'];
	$headerid = $_POST['headerid'];
	$query = "update header set resi = '$resi', status='in JNE' where headerid = '$headerid'";
	$err = "";
	echo $query;
	if(update($con,$query))
	{
		$query = "update payment set status = 'done' where headerid = '$headerid'";
		if(update($con,$query))
			$err = "success";
	}
	else
	{
		$err = "failed";
	}
	header("location: ../index.php?page=admin/done.php&err=$err");
 ?>