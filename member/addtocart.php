<?php 
	include "../connect.php";
	$kode=$_POST['kode'];
	$m=$_POST['m'];
	$l=$_POST['l'];
	$xl=$_POST['xl'];
	$username=$_SESSION['username'];
	$temp = getdate();
	$date = $temp['mday']." ".$temp['month']." ".$temp['year'];
	$query="insert into cart(username,kode,qtym,qtyl,qtyxl,date) values('$username','$kode',$m,$l,$xl,'$date') ";


	$err="";
	if(update($con,$query))
	{
		$query="update product set stockM = stockM - $m, stockL = stockL - $l, stockXL = stockXL - $xl where kode = '$kode' ";
		if(update($con,$query))
			$err="success";
		else 
			$err = "failed";
	}
	else
	{
		$err="failed";
	}
	header("location: ../index.php?page=member/cart.php&err=$err");
 ?>