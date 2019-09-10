$(document).ready(function() {

    $(".trigger").click(function(){
        $("#fade").fadeIn();
        $("#detail").fadeIn();
    })

    $("#fade").click(function(){
        $("#fade").fadeOut();
        $("#detail").fadeOut();
    })

    $("[href]").each(function() {
    if (this.href == window.location.href) {
        $(this).parent().addClass("active");
        }
    });

    $(".number").keydown(function(event){
    	if(event.keyCode!=8&&event.keyCode<48 || event.keyCode>57)
    		event.preventDefault();
    })

    $(".decimal").keydown(function(event){
    	if(event.keyCode!=190&&event.keyCode!=8&&(event.keyCode<48 || event.keyCode>57))
    		event.preventDefault();
    })

    function readURL(input) {

        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();

            reader.onload = function (e) 
            {
                $('.preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#gambar").change(function(){
        readURL(this);
    });


});


function detail(headerid_temp,total)
{
    $("#detail .content #d_image").attr("src","");
    $("#detail .content #d_kode").html("");
    $("#detail .content #d_nama").html("");
    $("#detail .content #d_harga").html("");
    $("#detail .content #d_m").html("");
    $("#detail .content #d_l").html("");
    $("#detail .content #d_xl").html("");

    $.post("orderdetail.php",{headerid:headerid_temp},function(data){ 
        var json = $.parseJSON(data);
        for (var i = json.length - 1; i >= 0; i--) 
        {
            $("#detail .content #d_image").attr("src","images/"+json[i].image);
            $("#detail .content #d_kode").append(json[i].kode);
            $("#detail .content #d_nama").append(json[i].nama);
            $("#detail .content #d_harga").append(json[i].harga);
            $("#detail .content #d_m").append(json[i].qtym);
            $("#detail .content #d_l").append(json[i].qtyl);
            $("#detail .content #d_xl").append(json[i].qtyxl);
        // $("#detail .content #d_subtotal").append(json[0].harga*(json[0].qtym+json[0].qtyl+json[0].qtyxl));
        };
    })

}