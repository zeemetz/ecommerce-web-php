<?php 
	include "../connect.php";
	$headerid = $_POST['headerid'];
	$rekening = $_POST['rekening'];
	$an = $_POST['an'];
	$amount = $_POST['amount'];
	$rekeningpenerima = $_POST['rekeningpenerima'];
	$anpenerima = $_POST['anpenerima'];
	$status = "paid";
	$query = "update payment set status = '$status', rekening = '$rekening', an = '$an', amount = $amount, rekeningpenerima = '$rekeningpenerima', anpenerima = '$anpenerima' where headerid = '$headerid' ";
	$err="";
	echo $query;
	if(update($con,$query))
	{
		$err="sucess";
	}
	else
	{
		$err="failed";
	}
	header("location: ../index.php?page=member/payment.php&err=$err");
 ?>