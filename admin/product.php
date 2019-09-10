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
        <a href="admin/deleteproduct.php?id=<?php echo $value['kode'] ?>" class="btn btn-primary" role="button"><span class='glyphicon glyphicon-remove'></span> Delete</a> 
        <a href="index.php?page=admin/updateproduct.php&id=<?php echo $value['kode'] ?>" class="btn btn-primary"><span class='glyphicon glyphicon-check'></span> Update</a>
        </p>
      </div>
    </div>
  </div>
<?php } ?>
</div>

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
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">My Cart</h4>
      </div>
      <div class="modal-body">
        <table class='table'>
			<tr><th>No</th><th>Product</th><th>Quantity</th><th>Price</th><th>Sub Total</th></tr>
			<tr><td>1. </td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
			<tr><td colspan='4' ><p class='pull-right'>Total Price</p></td><td><span class='glyphicon glyphicon-usd'>0.00</td></tr>
		</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Check Out</button>
      </div>
    </div>
  </div>
</div>