//全局变量,记录用户账号
 uname="";
//旧密码
 oldPwd="";
function showTable(){
	if(document.getElementById("tbAdd").style.display=="none"){
		//先显示出下面的表格
		document.getElementById("tbAdd").style.display="table";
	}else{
		document.getElementById("tbAdd").style.display="none";
	}
	document.getElementById("tbUpdate").style.display="none"
}
function show(name,pwd){
//	alert(1111);
	uname=name;
	oldPwd=pwd;
//	alert(uname); alert(oldPwd);
	if(document.getElementById("tbUpdate").style.display=="none"){
		//先显示出下面的表格
		document.getElementById("tbUpdate").style.display="table";
	}else{
		document.getElementById("tbUpdate").style.display="none";
	}
	document.getElementById("tbAdd").style.display="none";
}
function Add(){
//	alert(111);
	var name=document.getElementById("txtId").value;
	var pwd=document.getElementById("txtPwd").value;
	var pwd1=document.getElementById("txtPwd1").value;
	if(name==""){
		alert("用户名不能为空");
		return false;		
	}
	if(pwd==""){
		alert("密码不能为空");
		return false;
	}
	if(pwd1==""){
		alert("确认密码不能为空");
		return false;	
	}
	if(pwd!=pwd1){
		alert("两次输入密码不同，请重新输入");
		return false;		
	}
	$.ajax({
		url:"AdminAdd.php",
		type:"post",
		dataType:"text",
		data:{
			"name":name,
			"pwd":pwd
		},
		success:function(data){
			alert(data);
			if(data=="1"){
				alert("添加成功");
				window.location.href="index.php?p=admin";
			}else if(data=="0"){
				alert("添加失败");
				
			}
			
		}
			
	});
}
function Update(){
	var opwd=document.getElementById("OldPwd").value;
	var pwd=document.getElementById("NewPwd").value;
	var pwd1=document.getElementById("NewPwd1").value;
	if(opwd==""){
		alert("原密码不能为空");		
		return false;		
	}
	if(opwd!=oldPwd){
		alert("原密码输入不正确");
		return false;		
	}
	if(pwd==""){
		alert("新密码不能为空");
		return false;		
	}
	if(pwd1==""){
		alert("确认密码不能为空");
		return false;		
	}
	if(pwd!=pwd1){
		alert("两次输入密码不同");
		return false;		
	}
	$.ajax({
		url:"UpdateAd.php",
		type:"post",
		dataType:"text",
		data:{
			"name":uname,
			"pwd":pwd
		},
		success:function(data){
//			alert(data);
			if(data=="1"){
				alert("修改成功");
				window.location.href="index.php?p=admin";
			}else if(data=="0"){
				alert("修改失败");
				
			}
			
		}
			
	});
}
function Delete(name){
	var name1=name;
	if(window.confirm("你确定删除吗?")){
//		alert(11);
		$.ajax({
			url:"DeleteAd.php",
			type:"post",
			dataType:"text",
			data:{
				"name":name1,
			},
			success:function(data){
//				alert(data);
				if(data=="1"){
					alert("删除成功");
					window.location.href="index.php?p=admin";
				}else if(data=="0"){
					alert("删除失败");
					
				}
				
			}
				
		});
		
	}else{
		alert(222);
	}
	
}