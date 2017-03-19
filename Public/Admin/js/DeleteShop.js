$(function(){
	
	$("#deleteShop").click(function(){
	     alert(1111);
		  var shopId1="";
		  if(window.confirm("你确定要删除吗?")){
//		      alert(22);
			//获取选中的复选框的个数
				var chkCount=$("input[type=checkbox]:checked").length;
//				alert(chkCount);
				if(chkCount==0){
					alert("请选择要删除的物品！");
					return;
				}
				//找到所有的复选框
				var allChk=document.getElementsByName("items");
				for(var i=0;i<allChk.length;i++){
					if(allChk[i].checked==true){//说明删除该订单
//						alert(allChk[i].id);
						//复选框id
						var chid=allChk[i].id;//chkXX
						//商品id
						var id=chid.substr(3);
						shopId1+=id+",";
					}
					
				}
				shopId1=shopId1.substr(0,shopId1.length-1);
			   alert(shopId1);
				//异步提交到处理程序
				$.ajax({
					url:"DeleteShop.php",
					type:"post",
					dataType:"text",
					data:{"id":shopId1},
					success:function(data){
//					alert(data);
						if(data=="1"){
							alert("删除商品成功");
							window.location.href="index.php?p=shopping";
						}
						else if(data=="0") {
							alert("删除失败");
						}
						
					}
					
				});
		   }
		  else{
		  
		   }
});
});
