<html>
<head>
	<style type="text/css">
		#fade, #detail
		{	
			
			position: fixed;
			display: none;
		}
		#fade
		{	left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(50,50,50,0.5);
			z-index: 10000;
		}
		#detail
		{
			top: 10%;
			left:15%; 
			background-color: white;
			z-index: 10001;
			width: 70%;
			min-height: 20%;
			margin: 0 auto;
			border-radius: 10px;
		}
	</style>
	<?php error_reporting(0); ?>
	<?php session_start() ?>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script  src='js/jquery-2.1.1.min.js'></script>
	<script  src='js/bootstrap.min.js'></script>
	<script  src='js.js'></script>
	<link rel="stylesheet" type="text/css" href="css.css">
	<title>Man Clothing</title>
</head>
<body>
	<?php include "header.php" ?>
	<div style='min-height:395'>
	<?php 
		if(isset($_GET['page']))
		{
			include $_GET['page'];
		}
		else
		{
			include 'home.php';
		}
	 ?>
	 </div>
	<?php include "footer.php" ?>
<div id='fade'></div>
<div id="detail">
	<h3 align='center'>Detail</h3>
	<hr>
	<div class='content'>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3"><a class="thumbnail"><img id='d_image' alt=" "></a></div>
				<div class="col-md-2"><h3 id='d_kode'></h3></div>
				<div class="col-md-2"><h3 id="d_nama"></h3></div>
				<div class="col-md-2"><h3 id="d_harga"></h3></div>
				<div class="col-md-3">
					<div class="row">
					<div class="col-md-6"><label>X</label></div>
					<div class="col-md-6"><label id='d_m'></label></div>
					</div>
					<div class="row">
					<div class="col-md-6"><label>M</label></div>
					<div class="col-md-6"><label id='d_l'></label></div>
					</div>
					<div class="row">
					<div class="col-md-6"><label>XL</label></div>
					<div class="col-md-6"><label id='d_xl'></label></div>
					</div>
					<div class="row">
					<div class="col-md-6"><label>Total</label></div>
					<div class="col-md-6"><label id='d_subtotal'></label></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12"><h3 id='d_total'></h3></div>
			</div>
		</div>
	</div>
</div>
</body>
</html>