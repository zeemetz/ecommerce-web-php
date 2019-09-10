<?php 
	include "../connect.php";
	$headerid = uniqid();
	$username = $_SESSION['username'];
	$temp = getdate();
	$date = $temp['mday']." ".$temp['month']." ".$temp['year'];
	$address = $_POST['address'];
	$status = "pending";
	$destinationcity = $_POST['dest'];
	$ongkir = $_POST['deliv_cost'];
	$total = $_POST['total_harga'];
	$phone = $_POST['phone'];
	$resi = "-";
	$query = "insert into header(headerid, username, date, address, status, destinationcity, ongkir, total, phone, resi) values ('$headerid','$username','$date','$address','$status','$destinationcity',$ongkir,$total,'$phone','$resi')";
	$err="failed";
	if(update($con,$query))
	{
		$query = "insert into payment(headerid,status) values('$headerid','pending')";
		if(update($con,$query))
		{
			$arr = query($con,"select * from cart where username='$username' ");
			foreach ($arr as $value) {
				$kode = $value['kode'];
				$qtym = $value['qtyM'];
				$qtyl = $value['qtyL'];
				$qtyxl = $value['qtyXL'];
				$query = "insert into detail(headerid, kode, qtym, qtyl, qtyxl) values('$headerid','$kode',$qtym,$qtyl,$qtyxl)";
				echo $query;
				update($con,$query);
			}
			$query = "delete from cart where username = '$username' ";
			update($con,$query);
			$err = "success";
		}
	}
	echo $query;
	header("location: ../index.php?page=member/cart.php&err=$err");
?>