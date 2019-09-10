<script type="text/javascript">
	$(document).ready(function(){
		$.post("getcity.php",function(data){
			var json = $.parseJSON(data);
			// console.log(json.rajaongkir.results.length);
			for (var i = 0; i < json.rajaongkir.results.length; i++) {
				var name = json.rajaongkir.results[i].city_name;
				var type = json.rajaongkir.results[i].type;
				var province = json.rajaongkir.results[i].province;
				var id = json.rajaongkir.results[i].city_id;
				$("#destination").append("<option value='"+id+"'>"+name+" - "+province+" ("+type+") </option>");
				
			}
		})

		$("#destination").change(function(){
			var berat_t = <?php echo $_POST['total_berat']*1000 ?>;
			var dest_t = $("#destination").val();
			$.post("getcost.php",{berat:berat_t,dest:dest_t},function(data){
				var json = $.parseJSON(data);
				var deliv_cost;
				var dest_input;
					var temp1 = json.rajaongkir.destination_details.city_name;
					var temp2 = json.rajaongkir.destination_details.province;
					var temp3 = json.rajaongkir.destination_details.type;
					dest_input = temp1 + " - "+temp2+" ("+temp3+")";
				try
				{
					deliv_cost = json.rajaongkir.results[0].costs[1].cost[0].value;
					
				}catch(e)
				{
					deliv_cost = "please check your destination city";						
				}
				$("#deliv_cost").html("Rp."+deliv_cost);
				$("#deliv_cost_input").val(deliv_cost);
				$("#dest_input").val(dest_input);
			})
		})

	})

$( document ).ajaxStart(function() {
  console.log("ajaxStart");
  $(".wait").fadeIn();
});

$( document ).ajaxComplete(function() {
  console.log("ajaxComplete");
  $(".wait").fadeOut();
});

</script>
<br/><br/><br/><br/>
<form enctype="multipart/form-data" method ="post" action='member/checkoutcontroller.php' class='container-fluid' style='width:80%;margin:20px auto;'>
  
  <div class="form-group">
    <label for="address" class="col-sm-3 control-label">Address</label>
    <div class="col-sm-9">
      <textarea id='address' class='form-control' resizeable='false' style='resize:none' name='address' placeholder='ex: Jl. K.H Syahdan No. 1 Kemanggisan, Palmerah, Jakarta'></textarea>
      <p class="help-block">Destination Address : Input your complete package destination address</p>
    </div>
  </div>

  <div class="form-group">
    <label for="phone" class="col-sm-3 control-label">Phone</label>
    <div class="col-sm-9">
      <input class="form-control number" id="phone" placeholder="ex : 0896 355 27273" type="text" name='phone'>
      <p class="help-block">Phone Numer : Active phone number in case of purchasing</p>
    </div>
  </div>

  <div class="form-group">
    <label for="destination" class="col-sm-3 control-label">Destination City</label>
    <div class="col-sm-9">
      <select id='destination' class='form-control'>
      	<option>choose destination city</option>
      </select>
      <input name='dest' style='display:none' id='dest_input'>
      <p class="help-block">Destination City : </p>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Total Price</label>
    <div class="col-sm-9">
      <label id='total_harga'><?php echo $_POST['total_harga']  ?></label>
      <p class="help-block">Total price of the product without delivery cost</p>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Total Weight</label>
    <div class="col-sm-9">
      <label id='total_berat'><?php echo $_POST['total_berat']*1000  ?> Gram </label>
      <p class="help-block">Total product weight</p>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Delivery Cost</label>
    <div class="col-sm-9">
      <label id='deliv_cost'>-</label>
      <p class="help-block">Delivery cost with JNE Regular Services</p>
    </div>
  </div>

<input name='total_harga' value='<?php echo $_POST['total_harga'] ?>' style='display:none'>
<input name='total_berat' value='<?php echo $_POST['total_berat']*1000 ?>' style='display:none'>
<input id='deliv_cost_input' name='deliv_cost' value='' style='display:none'>
<button class='btn btn-primary pull-right' type='submit'>Check Out</button>
<div class='wait'>
  <h3>Loading .... </h3>
</div>
</form>
