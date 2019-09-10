<?php 
	include "../connect.php";
	$kode = $_GET['id'];
	$err="";
	if(update($con,"delete from product where kode = '$kode' "))
	{
		$err='success';
	}
	else
	{
		$err='failed';
	}
	header("location: ../index.php?page=admin/product.php&err=$err");
 ?>