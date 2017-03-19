//在详情页面点击购买，判断用户是否登录，及其他的操作
$(function(){
	$("#imgBuy").click(function(){
//		alert("22");
		$.ajax({
			url:"addCartProcess.php",
			type:"post",
			dataType:"text",
			data:{
				"gid":$("#Hiddengid").val()
			},
			success:function(data){
//				alert(data);
				if(data=="0"){
					alert("请先登录");					
				}
				else if(data=="1"){
					alert("添加购物车成功");					
				}else if(data=="2"){
					alert("添加购物车失败");					
				}else if(data=="3"){
					alert("购物车已添加过该商品");
					
				}
			}
		});
	});
});