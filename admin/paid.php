<br/><br/><br/><br/>
<div class="container-fluid">
	<div class="row">
	<?php 
		include "connect.php";
		$arr = query($con,"select * from header h join payment p on p.headerid = h.headerid where p.status = 'paid' and h.status = 'pending' ");
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
	 		<h3>Approve</h3>
	 		<form action="admin/inputresi.php" method='post'>
	 			<input name='headerid' value='<?php echo $value['headerid'] ?>' style='display:none'>
	 			<div class="form-group">
				    <label for="kode" class="col-sm-12 control-label">Resi</label>
				    <div class="col-sm-12">
				      <input class="form-control" placeholder="ex: 19278152895761289" type="text" name='resi'>
				      <p class="help-block">Masukkan nomor resi pengiriman barang JNE</p>
				    </div>
				</div>
				<button class='btn btn-primary'>Approve</button>
	 		</form>
	 		<h3>Decline</h3>
	 		<form action="admin/declinetrf.php" method='post'>
	 			<input name='headerid' value='<?php echo $value['headerid'] ?>' style='display:none'>
	 			<div class="form-group">
				    <label for="kode" class="col-sm-12 control-label">Notes</label>
				    <div class="col-sm-12">
				      <textarea name='note' class='form-control' style='resize:none' placeholder='ex: amount of money insuficient'></textarea>
				      <p class="help-block">Masukkan alasan penolakan transaksi</p>
				    </div>
				</div>
				<button class='btn btn-primary'>Decline</button>
	 		</form>
	 	</div>
	 
	 <?php } ?>
</div>
</div>