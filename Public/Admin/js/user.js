//修改用户状态
function  UserState(uid,isf){
	$.ajax({
		url:"Upuser.php?u=single",
		type:"post",
		dataType:"text",
		data:{
			"uid":uid,
			"isf":isf
		},
		success:function(data){
//			alert(data);
			if(data=="1"){
				alert("修改成功");
				window.location.href="index.php?p=user";
			}else if(data=="0"){
				alert("修改失败");
				
			}
			
		}
			
	});
}
//批量
function ChUsers(isf){
	alert(11111);
	var uid="";
	//获取选中的复选框的个数
	var chkCount=$("input[type=checkbox]:checked").length;
//	alert(chkCount);
	if(chkCount==0){
		alert("你没有选择任何选项");
		return;
	}
	//找到所有的复选框
	var allChk=document.getElementsByName("items");
	for(var i=0;i<allChk.length;i++){
		if(allChk[i].checked==true){
			//复选框id即用户id
			var chid=allChk[i].id;
			uid+=chid+",";
		}
		
	}
	uid=uid.substr(0,uid.length-1);
	$.ajax({
		url:"Upuser.php?u=many",
		type:"post",
		dataType:"text",
		data:{
			"uid":uid,
			"isf":isf
		},
		success:function(data){
//			alert(data);
			if(data=="1"){
				alert("修改成功");
				window.location.href="index.php?p=user";
			}else if(data=="0"){
				alert("修改失败");
				
			}
			
		}
			
	});
}