$(document).ready(function(){
	$(".quantity").change(function(){
		slm=$(this).val();
		index=$(this).attr("data-index");
		$.ajax({
			url:"js/xuly_Cart.php",
			type:"post",
			data:"slm"+'='+slm+"&index"+'='+index,
			async:true,
			success:function(kq){
				location.reload();
				
			}
		});
	});
});