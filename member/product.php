<br/><br/><br/><br/>
<?php include "connect.php" ?>
<div class="row" style="width:99%; margin:0 auto;">
  <div class="col-md-2">
	<ul class="list-group">

		<a class="list-group-item active" data-toggle='collapse' data-target='#outwear'>
		<span class="badge">241</span>
		Dress
		</a>

		<ul class="list-group collapse" id='outwear'>
		  <a class="list-group-item">
		    <span class="badge">150</span>
		    Mini Dress
		  </a>
		  <a class="list-group-item">
		    <span class="badge">50</span>
		    Midi Dress
		  </a>
		  <a class="list-group-item">
		    <span class="badge">41</span>
		    Long Dress
		  </a>
		</ul>

		<a class="list-group-item active" data-toggle='collapse' data-target='#jeans'>
		<span class="badge">545</span>
		Outwear
		</a>

		<ul class="list-group collapse" id='jeans'>
		  <a class="list-group-item">
		    <span class="badge">45</span>
		    Vest
		  </a>
		  <a class="list-group-item">
		    <span class="badge">150</span>
		    Blazer
		  </a>
		  <a class="list-group-item">
		    <span class="badge">200</span>
		    Jacket & Coat
		  </a>
		  <a class="list-group-item">
		    <span class="badge">50</span>
		    Cardigan
		  </a>
		  <a class="list-group-item">
		    <span class="badge">100</span>
		    Sweater
		  </a>
		</ul>

		<a class="list-group-item active" data-toggle='collapse' data-target='#sport'>
		<span class="badge">95</span>
		Sport
		</a>

		<ul class="list-group collapse" id='sport'>
		  <a class="list-group-item">
		    <span class="badge">20</span>
		    Nike
		  </a>
		  <a class="list-group-item">
		    <span class="badge">35</span>
		    Adidas
		  </a>
		  <a class="list-group-item">
		    <span class="badge">5</span>
		    Nautica
		  </a>
		  <a class="list-group-item">
		    <span class="badge">10</span>
		    Oakley
		  </a>
		  <a class="list-group-item">
		    <span class="badge">20</span>
		    Puma
		  </a>
		  <a class="list-group-item">
		    <span class="badge">5</span>
		    New balance
		  </a>
		</ul>
	</ul>
</div>
  <div class="col-md-9" style="margin-left:3%;">
<div class="row">
<?php $arr = query($con,"select * from product") ;
      foreach ($arr as $value) {
?>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img data-src="holder.js/300x300" alt="..." src='images/<?php echo $value['image'] ?>'>
      <div class="caption">
        <h3><?php echo $value["kode"]; ?></h3>
        <h3><?php echo $value["nama"] ?></h3>
        <h4> <label>Rp.</label> <?php echo number_format($value['harga']) ?> </h4>
        <p> 
            <label> Stock : </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label> M </label>  (<?php echo $value['stockM'] ?>)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label> L </label>  (<?php echo $value['stockL'] ?>)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label> XL </label>  (<?php echo $value['stockXL'] ?>)
        </p>
        <p><label>Weight : </label> <?php echo $value['berat'] ?> <b>Kg</b> </p>
        <p><label>Decription : </label> <br/> <?php echo $value['deskripsi']; ?> </p>
        <p>
        <a onclick='add("<?php echo $value['kode'] ?>","<?php echo $value['nama'] ?>",<?php echo $value['stockM'] ?>,<?php echo $value['stockL'] ?>,<?php echo $value['stockXL'] ?>,<?php echo $value['harga'] ?>,"<?php echo $value['image'] ?>")' href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#myModal"><span class='glyphicon glyphicon-shopping-cart'></span> Add to Cart</a>
        </p>
      </div>
    </div>
  </div>
<?php } ?>
</div>
<script type="text/javascript">
function add(kode,nama,stockM,stockL,stockXL,harga,image)
{	
	$("#kode").val(kode);
	$("#1").html(kode);
	$("#2").html(nama);
	$("#3").html(harga);
	$("#5").html('<a class="thumbnail"> <img src="images/'+image+'" alt=""> </a>');
	$("#stockm").html(" Stock = "+stockM);
	$("#stockl").html(" Stock = "+stockL);
	$("#stockxl").html(" Stock = "+stockXL);
	$("#m").val(0);
	$("#l").val(0);
	$("#xl").val(0);

	$("#m").keyup(function(event){
		if(event.keyCode==8&&$("#m").val().length==0)
			$("#m").val(0);
		if($("#m").val()>stockM)
		{
			$("#err").html('<div class="alert alert-danger" role="alert">Stock M remain '+stockM+'</div>');
			$("#buttonadd").attr('disabled','disabled');
		}
		else
		{
			$("#err").html("");
			$("#buttonadd").removeAttr('disabled');
			var totalqty = parseInt($("#m").val())+parseInt($("#l").val())+parseInt($("#xl").val());
			var total = harga*totalqty;
			console.log(totalqty);
			$("#4").html(total);
		}
	})
	$("#l").keyup(function(event){
		if(event.keyCode==8&&$("#l").val().length==0)
			$("#l").val(0);
		if($("#l").val()>stockL)
		{
			$("#err").html('<div class="alert alert-danger" role="alert">Stock L remain '+stockL+'</div>');
			$("#buttonadd").attr('disabled','disabled');
		}
		else
		{
			$("#err").html("");
			$("#buttonadd").removeAttr('disabled');
			var totalqty = parseInt($("#m").val())+parseInt($("#l").val())+parseInt($("#xl").val());
			var total = harga*totalqty;
			console.log(totalqty);
			$("#4").html(total);
		}
	})
	$("#xl").keyup(function(event){
		if(event.keyCode==8&&$("#xl").val().length==0)
			$("#xl").val(0);
		if($("#xl").val()>stockXL)
		{
			$("#err").html('<div class="alert alert-danger" role="alert">Stock XL remain '+stockXL+'</div>');
			$("#buttonadd").attr('disabled','disabled');
		}
		else
		{
			$("#err").html("");
			$("#buttonadd").removeAttr('disabled');
			var totalqty = parseInt($("#m").val())+parseInt($("#l").val())+parseInt($("#xl").val());
			var total = harga*totalqty;
			console.log(totalqty);
			$("#4").html(total);
		}
	})
}
$(document).ready(function(){
	$
})
</script>
<nav>
  <ul class="pagination pull-right">
    <li><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
  </ul>
</nav>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style='width:80%'>
  	<form id='cartform' action='member/addtocart.php' method='post'>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">My Cart</h4>
      </div>
      <div class="modal-body">
      	<input name='kode' id='kode' style='display:none'>
		<div class="row">
			<div id='5' class="col-md-3"></div>
			<div class="col-md-2"><h3 id='1'></h3></div>
			<div class="col-md-2"><h3 id='2'></h3></div>
			<div class="col-md-2"><h3 id='3'></h3>/pcs</div>
			<div class="col-md-3">
				<div class="row"><div class="col-md-12"><label>M : </label><label id='stockm'></label></div></div>
				<div class="row"><div class="col-md-12"><input class='number form-control' id='m' name='m'></div></div>
				<div class="row"><div class="col-md-12"><label>L : </label><label id='stockl'></label></div></div>
				<div class="row"><div class="col-md-12"><input class='number form-control' id='l' name='l'></div></div>
				<div class="row"><div class="col-md-12"><label>XL : </label><label id='stockxl'></label></div></div>
				<div class="row"><div class="col-md-12"><input class='number form-control' id='xl' name='xl'></div></div>
				<hr>
				<div class="row"><div class="col-md-12"><label>Total : </label> <label id='4'></label></div></div>
			</div>
		</div>
			
      </div>
      <div class="modal-footer">
      	<div id='err'></div>
      	<button id='buttonadd' type="submit" class="btn btn-primary">Add to Cart</button>
      </div>
    </div>
    </form>
  </div>
</div>