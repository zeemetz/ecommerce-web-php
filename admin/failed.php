<br/><br/><br/><br/>
<div class="container-fluid">
	<div class="row">
	<?php 
		include "connect.php";
		$arr = query($con,"select * from header h join payment p on p.headerid = h.headerid where p.status = 'failed' and h.status = 'pending' ");
		foreach ($arr as $value) {
	 ?>
	 	<div class="col-md-4">
	 		<a href="#"><h3><?php echo $value['headerid'] ?></h3></a>
	 		<h3><?php echo $value['username'] ?></h3>
	 		<p> <label>To : </label> <?php echo $value['address'] ?></p>
	 		<p> <label>City : </label> <?php echo $value['destinationcity'] ?></p>
	 		<p> <label>Phone : </label> <?php echo $value['phone'] ?></p>
	 		<p> <label>Rp.</label> <?php echo number_format($value['total']) ?> + <?php echo number_format($value['ongkir']) ?>
	 			<label> = </label> <?php echo $value['total']+$value['ongkir'] ?>
	 		</p>
	 		<p><label>Notes : </label><?php echo $value['note'] ?></p>
	 	</div>
	 
	 <?php } ?>
</div>
</div>