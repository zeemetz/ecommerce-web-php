<?php 
	include "connect.php";
	$kode = $_GET['id'];
	$arr = query($con,"select * from product where kode = '$kode' ");
 ?>

 <br/><br/><br/><br/>
<form enctype="multipart/form-data" method ="post" action='admin/updateProductController.php' class='container-fluid' style='width:80%;margin:20px auto;'>
  
  <div class="form-group">
    <label for="kode" class="col-sm-3 control-label">Kode</label>
    <div class="col-sm-9">
      <input class="form-control" id="kode" placeholder="Auto Generated" type="text" name='kode' value='<?php echo $arr['0']['kode'] ?>'>
      <p class="help-block">JANGAN DIGANTI !!</p>
    </div>
  </div>

  <div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Nama</label>
    <div class="col-sm-9">
      <input class="form-control" id="nama" placeholder="Ex : White Plain Long Shirt" type="text" name='nama' value='<?php echo $arr['0']['nama'] ?>'>
      <p class="help-block">Nama Produk</p>
    </div>
  </div>

  <div class="form-group">
    <label for="tipe" class="col-sm-3 control-label">Tipe</label>
    <div class="col-sm-9">
      <input class="form-control" id="tipe" placeholder="Kemeja, Topi, Kaos, dll" type="text" name='tipe' value='<?php echo $arr['0']['tipe'] ?>'>
      <p class="help-block">Nama Produk</p>
    </div>
  </div>

  <div class="form-group">
    <label for="harga" class="col-sm-3 control-label">Harga</label>
    <div class="col-sm-9">
      <input class="form-control number" id="harga" placeholder="ex : 95000" type="text" name='harga' value='<?php echo $arr['0']['harga'] ?>'>
      <p class="help-block">Harga Produk : tanpa mata uang, titik dan koma</p>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Stock</label>
    <div class="col-sm-3">
    	<label for='m'>M : </label>
      <input class="form-control number" id="m" placeholder="ex : 10" type="text" name='m' value='<?php echo $arr['0']['stockM'] ?>'>
      <p class="help-block">Stock Produk Ukuran M</p>
    </div>
    <div class="col-sm-3">
    	<label for='l'>L : </label>
      <input class="form-control number" id="l" placeholder="ex : 10" type="text" name='l' value='<?php echo $arr['0']['stockL'] ?>'>
      <p class="help-block">Stock Produk Ukuran L</p>
    </div>
    <div class="col-sm-3">
    	<label for='xl'>XL : </label>
      <input class="form-control number" id="xl" placeholder="ex : 10" type="text" name='xl' value='<?php echo $arr['0']['stockXL'] ?>'>
      <p class="help-block">Stock Produk Ukuran XL</p>
    </div>
  </div>

  <div class="form-group">
    <label for="deskripsi" class="col-sm-3 control-label">Deskripsi</label>
    <div class="col-sm-9">
      <textarea name='deskripsi' class='form-control' resizeable='false' style='resize:none' name='deskripsi' placeholder='Masukkan Keterangan Produk' ><?php echo $arr['0']['deskripsi'] ?></textarea>
      <p class="help-block">Deskripsi Produk : Masukkan Keterangan tentang Produk</p>
    </div>
  </div>

  <div class="form-group">
    <label for="berat" class="col-sm-3 control-label">Berat</label>
    <div class="col-sm-9">
      <input class="form-control decimal" id="berat" placeholder="ex : 0.20" type="text" name='berat' value='<?php echo $arr['0']['berat'] ?>'>
      <p class="help-block">Berat Produk : masukkan berat satuan dengan koma(.)</p>
    </div>
  </div>	

  <!-- <div class="form-group">
    <label for="gambar" class="col-sm-3 control-label">File</label>
    <div class="col-sm-6">
      <input id="gambar" type="file" name='gambar' value='<?php echo $arr[0]['image'] ?>'>
      <p class="help-block">Pilih Gambar untuk di upload, ukuran gambar harus sesuai dengan format ..X..</p>
    </div>
    <div class="col-xs-6 col-sm-3">
    <a href="#" class="thumbnail">
      <img class='preview' src="images/<?php echo $arr[0]['image'] ?>" alt="..">
    </a>
  </div>
  </div> -->

  <button type="submit" class="btn btn-primary pull-right">Update Product</button>

</form>