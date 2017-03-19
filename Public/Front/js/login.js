$(function(){
	$("#btnLogin").click(function(){
		var uid=$("#txtId").val();
		var upwd=$("#txtPwd").val();
		var code=$("#txtCode").val();
//		alert(code);
		if(uid==""&&upwd!=""&&code!=""){
			alert("请输入用户名");$("#txtId").focus();
			return false;
		}else if(uid!=""&&upwd==""&&code!=""){
			alert("密码不能为空");		$("#txtPwd").focus();
			return false;
		}else  if(uid!=""&&upwd!=""&&code==""){
			alert("请输入验证码");
			return false;
			
		}else if(uid==""&&upwd==""&&code==""){
			  alert("请输入信息");
              return false;
		}else if(uid==""&&upwd==""&&code!=""){
			alert("请输入用户名和密码");return false;
		}else if(uid==""&&upwd!=""&&code==""){
			alert("请输入用户名和验证码");return false;
			
		}else if(uid!=""&&upwd==""&&code==""){
			alert("请输入密码和验证码");return false;
		}
		$.ajax({		
			url:"ProcessLogin.php",
			type:"post",
			data:{
				
				"uid":$("#txtId").val(),
				"upwd":$("#txtPwd").val(),
				"code":$("#txtCode").val()
				
			},
			dataType:"text",
			success:function(data){
//				alert(data);
				if(data=="0"){
					alert("登录失败，你输入的验证码有误!");					
				}
				else if(data=="1"){
					alert("欢迎光临");
					location.href="index.php";
					
				}else if(data=="2"){
					alert("你输入的用户名或密码有误!");
					
				}
			}
		});
		
	});
	
	
});