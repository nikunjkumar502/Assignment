$(document).ready(function(){
	
	function readURL(input) {

	  if (input.files && input.files[0]) {
	    var reader = new FileReader();

	    reader.onload = function(e) {
	      $('#productImg').attr('src', e.target.result);
	    }

	    reader.readAsDataURL(input.files[0]);
	  }
	}

	$("#ppicture").change(function() {
	  readURL(this);
	});

	$(".d-flex").click(function(){
		$(".d-flex").removeClass("active");
		$(this).addClass("active");
	});

		$("#submit").click(function(){
		$email = $("#email").val();
		$pwd1 = $("#current-password").val();
		$pwd2 = $("#re_password").val();

		if (($pwd1.length> 4 && $pwd1.length>4) && ($pwd1==$pwd2) && $email.length>12) {

			$.ajax({
				url: "sign1.php",
				data:{
					"submit": "1",
					"email": $email,
					"password": $pwd1
				},
				method:"POST",
				success:function(result){
					if(result.trim()=="1")
			        	alert("successfully signed up!!\n Please login now");
			        if(result.trim()=="0")
			        	alert("Oops it's not you it's us!!\n Please Try again after sometime");
			        if(result.trim()=="2")
			        	alert("Email already exists!!\n Please login");
			    },
			    error:function(e){
			    	alert("Error");
				}
			});

		}else{
			alert("enter valid values");
		}


	});
});
function fetchShopProducts(category){
	
	$rice = 0;
	$atta = 0;
	$oil = 0;
	$Pulses = 0;
	$snacks = 0;
	$salt = 0;
	$spices	= 0;
	$tea = 0;


	var url = "fetchproducts.php?q=";
		
	$.getJSON(url,function(products){
		$("#allproducts").empty();
		
		for(i=0;i<products.length;i++){
			if(products[i].pcategory=="rice")
			  			$rice++;			
			if(products[i].pcategory=="atta")
						 $atta++;			
			if(products[i].pcategory=="oil")
						  $oil++;			
			if(products[i].pcategory=="Pulses")
			 			 $Pulses++;			
			if(products[i].pcategory=="snacks")
						 $snacks++;			
			if(products[i].pcategory=="salt")
						  $salt++;
			if(products[i].pcategory=="spices")
						  $spices++;
			if(products[i].pcategory=="tea")
						  $tea++;
			if(category!=""){

				if(products[i].pcategory == category){
					$("#allproducts").append('<div class="col-md-4"><div class="card" style=""><div class="product-image" style=background-image:url("'+ products[i].ppicture +'") ></div><div class="card-body"><h5 class="card-title">'+ products[i].ptitle +'</h5><p class="card-text">Price: '+ products[i].pprice+'</p> <p class="card-text">Rating:</p><a href="#" class="btn btn-primary">View</a> &nbsp; <a href="checkout.php" class="btn btn-danger">checkout</a></div></div></div>');
				}
			}
			else{
					$("#allproducts").append('<div class="col-md-4"><div class="card" style=""><div class="product-image" style=background-image:url("'+ products[i].ppicture +'") ></div><div class="card-body"><h5 class="card-title">0'+ products[i].ptitle +'</h5><p class="card-text">Price: '+ products[i].pprice+'</p> <p class="card-text">Rating:</p><a href="#" class="btn btn-primary">View</a> &nbsp; <a href="checkout.php" class="btn btn-danger">checkout</a></div></div></div>');
			}	
		}

		$("#rbadge").html($rice);
		$("#abadge").html($atta);
		$("#obadge").html($oil);
		$("#Pbadge").html($Pulses);
		$("#sbadge").html($snacks);
		$("#s2badge").html($salt);
		$("#s3badge").html($spices);
		$("#tbadge").html($tea);
	});

}


