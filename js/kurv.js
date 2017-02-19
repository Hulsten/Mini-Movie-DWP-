window.onload = function(){
	$(".buy-now-btn").click(function(event){
		var id = $(this).attr("data-id");
		var button = $(this);
		$.post("inc/kurv.php", {id: id, add: true}, function(result){
			button.html("TILFØJET ✓");
	    });
	});


	$(".kurv-element-delete p").click(function(event){
		$.post("inc/kurv.php", {id: $(this).attr("data-id"), delete: true}, function(result){
			location.reload();
	    });
	});
};
