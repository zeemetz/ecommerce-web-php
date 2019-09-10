<?php 
	include "../connect.php";
	$kode=$_POST['kode'];
	$nama=$_POST['nama'];
	$tipe=$_POST['tipe'];
	$harga=$_POST['harga'];
	$stockM=$_POST['m'];
	$stockL=$_POST['l'];
	$stockXL=$_POST['xl'];
	$deskripsi=$_POST['deskripsi'];
	$berat=$_POST['berat'];
	$err="";
	$query = "update product set nama='$nama', tipe='$tipe', harga=$harga, stockM=$stockM, stockL=$stockL, stockXL=$stockXL, deskripsi='$deskripsi' ,berat=$berat where kode = '$kode' ";
	echo $query;
	if(update($con,$query))
	{
		$err ="success";
	}
	else
	{
		$err="failed";
	}
	header("location: ../index.php?page=admin/product.php&err=$err");
 ?>