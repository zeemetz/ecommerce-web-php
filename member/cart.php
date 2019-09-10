<?php include "connect.php" ?>
<br/><br/><br/><br/>
<div class='container-fluid'>
<form action='index.php?page=member/checkout.php' method='post'>

<?php 
	$username = $_SESSION['username'];
	$arr = query($con,"select * from cart c join product p on p.kode = c.kode where username = '$username' ");
	$total_harga = 0;
	$total_berat = 0;
	foreach ($arr as $value) {
		$sub_total = $value['harga']*($value['qtyM']+$value['qtyL']+$value['qtyXL']);
		$sub_berat = $value['berat']*($value['qtyM']+$value['qtyL']+$value['qtyXL']);
		$total_harga += $sub_total;
		$total_berat += $sub_berat;
		?>
		<div class="row">
		<div class="col-md-3"><a href="#" class="thumbnail"><img src="images/<?php echo $value['image'] ?>" alt=""></a></div>
		<div class='col-md-2'><h3><?php echo $value['kode'] ?></h3></div>
		<div class='col-md-2'><h3><?php echo $value['nama'] ?></h3></div>
		<div class='col-md-2'><h3><?php echo $value['harga'] ?></h3> /pcs</div>
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-4"><label>Size M : </label></div>
				<div class="col-md-4"><label><?php echo $value['qtyM'] ?></label></div>
				<div class="col-md-4"><label> <?php echo $value['qtyM']*$value['harga'] ?> </label></div>
			</div>
			<div class="row">
				<div class="col-md-4"><label>Size L : </label></div>
				<div class="col-md-4"><label><?php echo $value['qtyL'] ?></label></div>
				<div class="col-md-4"><label> <?php echo $value['qtyL']*$value['harga'] ?> </label></div>
			</div>
			<div class="row">
				<div class="col-md-4"><label>Size XL : </label></div>
				<div class="col-md-4"><label><?php echo $value['qtyXL'] ?></label></div>
				<div class="col-md-4"><label> <?php echo $value['qtyXL']*$value['harga'] ?> </label></div>
			</div>
			<hr>
			<div class="row"><div class="col-md-12"><h3 class='pull-right'>Sub-Total : <?php echo $sub_total ?></h3></div></div>
		</div>
		</div>
		<hr>
		<?php
	}
 ?>

<div class="row">
	<div class="col-md-12">
<h4>Total Price = <?php echo $total_harga ?></h4>
<input name='total_harga' value='<?php echo $total_harga ?>' style='display:none'>
<br/>
<h4>Total Weight = <?php echo $total_berat ?></h4>
<input name='total_berat' value='<?php echo $total_berat ?>' style='display:none'>
</div>
 </div>
 <button class='btn btn-primary pull-right' type='submit'>Check Out</button>
 </form>
 </div>
 <br/>