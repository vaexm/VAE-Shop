//删除子类
//sid为子类的id
function DelSec(sid){
	var secId=sid;
	if(window.confirm("你确定要删除吗?")){
		$.ajax({
			url:"DelClass2.php",
			dataType:"text",
			type:"post",
			data:{"sid":secId},
			success:function(data){
//				alert(data);
				if(data=="1"){
					alert("删除成功");
					window.location.href="index.php?p=class";
				}else if(data=="0"){
					alert("删除失败");
					
				}
				
			}
		});
	}	
}
//删除父类及其子类  fid父类id
function DelFir(fid){
	var firId=fid;
	alert(firId);
	if(window.confirm("你确定要删除吗?")){
		$.ajax({
			url:"DelClass1.php",
			dataType:"text",
			type:"post",
			data:{"fid":firId},
			success:function(data){
//				alert(data);
				if(data=="1"){
					alert("删除成功");
					window.location.href="index.php?p=class";
				}else if(data=="0"){
					alert("删除失败");
					
				}
				
			}
		});
	}
}
function UpClass(cid,cname){
	alert(111);
	var id=cid;
	var oldname=cname;
//	alert(id); alert(oldname);
	//获取新的类别名称
	var newname=document.getElementById("txt"+id).value;
	if(oldname==newname){
		alert("类别名称没有任何改变");
		return;		
	}else{
		$.ajax({
			url:"UpClass.php",
			dataType:"text",
			type:"post",
			data:{"cid":id,
				  "cname":newname
				},
			success:function(data){
//				alert(data);
				if(data=="1"){
					alert("更新成功");
					window.location.href="index.php?p=class";
				}else if(data=="0"){
					alert("更新失败");
					
				}
				
			}
		});
		
	}
	
}