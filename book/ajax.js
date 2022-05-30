
$( document ).ready(function() {
	
	$.ajax({
		type: "POST",
		url: "get_locations.php",
		data:'',
		success: function(data){
			$("#LocationId").html(data);
		}
	});
});




function getRestaurents(val) {
	$.ajax({
		type: "POST",
		url: "get_restaurents.php",
		data:'locationId='+val,
		success: function(data1){
			$("#restaurentId").html(data1);
		}
	});
}




function getPrice(val) {
	$.ajax({
		type: "POST",
		url: "get_products.php",
		data:'restaurentId='+val,
		success: function(data){
			$("#price").html(data)
			
		}
	});
}

