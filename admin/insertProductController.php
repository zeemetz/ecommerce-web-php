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
	$image=$_FILES["gambar"]["name"];
	$imagesrc=$_FILES["gambar"]["tmp_name"];
	$imagedest=$_SERVER['DOCUMENT_ROOT']."/manclothing/images/".$_FILES["gambar"]["name"];
	$err="";

	$query="insert into product values ('$kode','$nama','$tipe',$harga,$stockM,$stockL,$stockXL,'$deskripsi',$berat,'$image')";
	

	if(update($con,$query))
	{
		move_uploaded_file($imagesrc, $imagedest);
		$err="succes";
	}
	else
	{
		$err="false";
	}	
	header("location: ../index.php?page=admin/insertproduct.php&err=$err");
 ?>