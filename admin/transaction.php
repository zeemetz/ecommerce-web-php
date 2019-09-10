<br/><br/><br/><br/>
<?php 
	include "connect.php";
	$query = "select * from (select count(h.headerid) as menu1 from payment p join header h on h.headerid = p.headerid where h.Status = 'pending' and p.status = 'pending' )a, (select count(h.headerid) as menu2 from payment p join header h on h.headerid = p.headerid where h.Status = 'pending' and p.status = 'paid' )b, (select count(h.headerid) as menu3 from payment p join header h on h.headerid = p.headerid where h.Status = 'in JNE' and p.status = 'done' )c, (select count(h.headerid) as menu4 from payment p join header h on h.headerid = p.headerid where h.Status = 'pending' and p.status = 'failed' )d";
	$arr = query($con,$query);
?>
<h1 align='center'>Report</h1>
<div class="row" style="width:99%; margin:0 auto;">
  <div class="col-md-3">
		<ul class="list-group" id='outwear'>
		  <a class="list-group-item" href='index.php?page=admin/paid.php'>
		    <span class="badge"><?php echo $arr[0]['menu1'] ?></span>
		    <label>Un-Paid and Un-Delivered</label>
		  </a>
		  <a class="list-group-item" href='index.php?page=admin/unpaid.php'>
		    <span class="badge"><?php echo $arr[0]['menu2'] ?></span>
		    <label>Paid and Un-Delivered</label>
		  </a>
		  <a class="list-group-item" href='index.php?page=admin/done.php'>
		    <span class="badge"><?php echo $arr[0]['menu3'] ?></span>
		    <label>Paid and Delivered</label>
		  </a>
		  <a class="list-group-item" href='index.php?page=admin/failed.php'>
		    <span class="badge"><?php echo $arr[0]['menu4'] ?></span>
		    <label>Failed</label>
		  </a>
		</ul>
	</div>
</div>