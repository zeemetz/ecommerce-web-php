<br/><br/><br/><br/>
<div class="container-fluid"> 
<div class="row">
<?php 
	include "connect.php";
	$username = $_SESSION['username'];
	$arr = query($con,"select h.headerid as headerid, date, address, h.status as status, destinationcity, ongkir, total, phone, resi, p.status as payment_stat, rekening, an, amount, rekeningpenerima, anpenerima, note from header h join payment p on p.headerid = h.headerid where username = '$username' ");
	$i=1;
	foreach ($arr as $value) {
?>
	<div class="col-md-3 panel panel-default">
		<a href='#'><h3 class='trigger' onclick='detail("<?php echo $value['headerid'] ?>")'>Order- <?php echo $i ?></h3></a>
		<hr>
		<label>Order Id : </label> <?php echo $value['headerid'] ?> 
		<br/>
		<label>Order Date :</label> <?php echo $value['date'] ?>
		<br/>
		<label>Delivery Status :</label> <?php echo $value['status'] ?>
		<br/>
		<label>Destination Address :</label> <?php echo $value['address'] ?>
		<br/>
		<label>Destination City :</label> <?php echo $value['destinationcity'] ?>
		<br/>
		<label>Delivery Charge : </label> <?php echo $value['ongkir'] ?>
		<br/>
		<label>Total : </label> <?php echo $value['total'] ?>
		<br/>
		<label>Resi : </label> <?php echo $value['resi'] ?>
		<br/>

		<hr>
		<label>Payment Status : </label> <?php echo $value['payment_stat'] ?>
		<br/>
		<?php if($value['payment_stat']=='failed') {?>
		<label>Notes : </label> <?php echo $value['note'] ?><br/>
		<?php } ?>		
		<label>Rekening : </label> <?php echo $value['rekening'] ?>
		<br/>
		<label>Name: </label> <?php echo $value['an'] ?>
		<br/>
		<label>Amount : </label> <?php echo $value['amount'] ?>
		<br/>
		<label>Receiver Rekening : </label> <?php echo $value['rekeningpenerima'] ?>
		<br/>
		<label>Receiver Name : </label> <?php echo $value['anpenerima'] ?>
		<?php if($value['payment_stat'] == 'pending' || $value['payment_stat'] == 'failed') {?>
		<hr>
		<h4 align='center'>Input Payment</h4>
		<form action='member/insertpayment.php' method='post'>
			<input name='headerid' value='<?php echo $value['headerid'] ?>' style='display:none'>
			<hr>
			<h4>Sender</h4>
			<div class="form-group">
			    <label for="address" class="col-sm-3 control-label">Rekening</label>
			    <div class="col-sm-9">
			      <input class='number form-control' name='rekening' placeholder='ex: 5271104544'>
			      <p class="help-block">Input your rekening number</p>
			    </div>
			</div>
			<div class="form-group">
			    <label for="address" class="col-sm-3 control-label">Name</label>
			    <div class="col-sm-9">
			      <input class='form-control' name='an' placeholder='ex: yody hariadi'>
			      <p class="help-block">Input your rekening name</p>
			    </div>
			</div>
			<div class="form-group">
			    <label for="address" class="col-sm-3 control-label">Amount</label>
			    <div class="col-sm-9">
			      <input class='number form-control' name='amount' placeholder='ex: 100000'>
			      <p class="help-block">Input your rekening number, without (.) or (,)</p>
			    </div>
			</div>

			<hr>
			<h4>Receiver</h4>
			<div class="form-group">
			    <label for="address" class="col-sm-3 control-label">Rekening</label>
			    <div class="col-sm-9">
			      <input class='number form-control' name='rekeningpenerima' placeholder='ex: 5279944671'>
			      <p class="help-block">Input your rekening number</p>
			    </div>
			</div>
			<div class="form-group">
			    <label for="address" class="col-sm-3 control-label">Name</label>
			    <div class="col-sm-9">
			      <input class='form-control' name='anpenerima' placeholder='ex: Aprilia Chayadi'>
			      <p class="help-block">Input your rekening name</p>
			    </div>
			</div>
			<button class='btn btn-primary' type='submit'>send bukti</button>
		</form>
		<?php } ?>
	</div>
<?php $i++;} ?>
</div>
</div>
<br/><br/><br/><br/>