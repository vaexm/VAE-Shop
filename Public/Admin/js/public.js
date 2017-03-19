$(function(){	
	$("#deletePublic").click(function(){
		//alert(22);
		  var pid="";
		  if(window.confirm("你确定要删除吗?")){
//		      alert(22);
			//获取选中的复选框的个数
				var chkCount=$("input[type=checkbox]:checked").length;
//				alert(chkCount);
				if(chkCount==0){
					alert("请选择要删除的公告！");
					return;
				}
		  
				//找到所有的复选框
				var allChk=document.getElementsByName("items");
				for(var i=0;i<allChk.length;i++){
					if(allChk[i].checked==true){//说明删除该公告
//						alert(allChk[i].id);
						//复选框id
						var chid=allChk[i].id;//chkXX
						//公告id
						var id=chid.substr(3);
						pid+=id+",";
					}
					
				}
				pid=pid.substr(0,pid.length-1);
			   alert(pid);
				//异步提交到处理程序
				$.ajax({
					url:"DeletePublic.php",
					type:"post",
					dataType:"text",
					data:{"id":pid},
					success:function(data){
				alert(data);
						if(data=="1"){
							alert("删除商品成功");
							window.location.href="index.php?p=public";
						}
						else if(data=="0") {
							alert("删除失败");
						}
						
					}
					
				});
		   }
});
});
function AddPublic(){
	alert(123);
	var title=document.getElementById("puTitle").value;
	var content=document.getElementById("area").value;
	$.ajax({
		url:"AddPublic.php",
		type:"post",
		dataType:"text",
		data:{"title":title,
			  "content":content
			  },
		success:function(data){
	alert(data);
			if(data=="1"){
				alert("添加公告成功");
				window.location.href="index.php?p=Addpublic";
			}
			else if(data=="0") {
				alert("添加失败");
			}
			
		}
		
	});
}