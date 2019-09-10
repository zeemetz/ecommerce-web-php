<br/><br/><br/><br/>
<form enctype="multipart/form-data" method ="post" action='admin/insertProductController.php' class='container-fluid' style='width:80%;margin:20px auto;'>
  
  <div class="form-group">
    <label for="kode" class="col-sm-3 control-label">Kode</label>
    <div class="col-sm-9">
      <input class="form-control" id="kode" placeholder="Auto Generated" type="text" name='kode'>
      <p class="help-block">Kode Auto Generate, Tidak perlu Diisi</p>
    </div>
  </div>

  <div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Nama</label>
    <div class="col-sm-9">
      <input class="form-control" id="nama" placeholder="Ex : White Plain Long Shirt" type="text" name='nama'>
      <p class="help-block">Nama Produk</p>
    </div>
  </div>

  <div class="form-group">
    <label for="tipe" class="col-sm-3 control-label">Tipe</label>
    <div class="col-sm-9">
      <input class="form-control" id="tipe" placeholder="Kemeja, Topi, Kaos, dll" type="text" name='tipe'>
      <p class="help-block">Nama Produk</p>
    </div>
  </div>

  <div class="form-group">
    <label for="harga" class="col-sm-3 control-label">Harga</label>
    <div class="col-sm-9">
      <input class="form-control number" id="harga" placeholder="ex : 95000" type="text" name='harga'>
      <p class="help-block">Harga Produk : tanpa mata uang, titik dan koma</p>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Stock</label>
    <div class="col-sm-3">
    	<label for='m'>M : </label>
      <input class="form-control number" id="m" placeholder="ex : 10" type="text" name='m'>
      <p class="help-block">Stock Produk Ukuran M</p>
    </div>
    <div class="col-sm-3">
    	<label for='l'>L : </label>
      <input class="form-control number" id="l" placeholder="ex : 10" type="text" name='l'>
      <p class="help-block">Stock Produk Ukuran L</p>
    </div>
    <div class="col-sm-3">
    	<label for='xl'>XL : </label>
      <input class="form-control number" id="xl" placeholder="ex : 10" type="text" name='xl'>
      <p class="help-block">Stock Produk Ukuran XL</p>
    </div>
  </div>

  <div class="form-group">
    <label for="deskripsi" class="col-sm-3 control-label">Deskripsi</label>
    <div class="col-sm-9">
      <textarea name='deskripsi' class='form-control' resizeable='false' style='resize:none' name='deskripsi' placeholder='Masukkan Keterangan Produk'></textarea>
      <p class="help-block">Deskripsi Produk : Masukkan Keterangan tentang Produk</p>
    </div>
  </div>

  <div class="form-group">
    <label for="berat" class="col-sm-3 control-label">Berat</label>
    <div class="col-sm-9">
      <input class="form-control decimal" id="berat" placeholder="ex : 0.20" type="text" name='berat'>
      <p class="help-block">Berat Produk : masukkan berat satuan dengan koma(.)</p>
    </div>
  </div>	

  <div class="form-group">
    <label for="gambar" class="col-sm-3 control-label">File</label>
    <div class="col-sm-6">
      <input id="gambar" type="file" name='gambar'>
      <p class="help-block">Pilih Gambar untuk di upload, ukuran gambar harus sesuai dengan format ..X..</p>
    </div>
    <div class="col-xs-6 col-sm-3">
    <a href="#" class="thumbnail">
      <img class='preview' src="images/noimage.jpg" alt="">
    </a>
  </div>
  </div>

  <button type="submit" class="btn btn-primary pull-right">Insert Product</button>

</form>