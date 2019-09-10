<?php 
	include "connect.php";
	$headerid = $_POST['headerid'];
	$query = "select * from detail d join product p on d.kode = p.kode where headerid = '$headerid' ";
	$arr = query($con,$query);
	$json = json_encode($arr);
	echo $json;
 ?>