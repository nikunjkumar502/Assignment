function fetchAllProducts(category){
	var url = "fetchproducts.php?q=";
	category = $("#fitercat").val();
	$.getJSON(url,function(products){
		$("#productTable").empty();
		$("#productTable").append('<tr><thead><th width="20%">Product ID</th><th  width="20%">Title</th><th width="15%"> Price</th><th width="20%">Category</th><th>Actions</th></thead></tr>');
		for(i=0;i<products.length;i++){
			if(category!=""){
				if(products[i].pcategory == category){
					$("#productTable").append('<tr><td>'+products[i].pid+'</td><td>'+products[i].ptitle +'</td><td>'+ products[i].pprice+'</td><td>'+products[i].pcategory+'</td><td><span class="badge badge-primary badge-pill">Edit</span>&nbsp; <span class="badge badge-danger badge-pill">Delete</span>&nbsp;<span class="badge badge-info badge-pill">Hide/View</span></td></tr>');
					
				}
			}
			else{
					$("#productTable").append('<tr><td>'+products[i].pid+'</td><td>'+products[i].ptitle +'</td><td>'+ products[i].pprice+'</td><td>'+products[i].pcategory+'</td><td><span class="badge badge-primary badge-pill">Edit</span>&nbsp; <span class="badge badge-danger badge-pill" onclick="deleteProduct('+ products[i].pid +')">Delete</span>&nbsp;<span class="badge badge-info badge-pill" onclick="hideViewProduct('+products[i].pid+','+products[i].pshow+')">Hide/View</span></td></tr>');
					}	
		}
	});

}

function deleteProduct(pid){
	alert("delete");
	var url = "admindeleteproducts.php?pid="+pid;
	$.get(url,function(response){
		alert(response.trim());
		fetchAllProducts("");
	});
}


function updateStatus(pid,flag){
	flag==1 ?flag=0:flag=1	
	var url = "adminblockunblock.php?uid="+pid+"&flag="+flag;
	$.get(url,function(response){
		alert(response.trim());
		fetchAllUsers("");
	});
	
}

function hideViewProduct(pid,flag){
	alert("hide");
	flag==1 ?flag=0:flag=1
	var url = "adminhideviewproduct.php?pid="+pid+"&flag="+flag;
	$.get(url,function(response){
		alert(response.trim());
		fetchAllProducts("");
	});
}