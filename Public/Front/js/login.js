$(function(){
	$("#btnLogin").click(function(){
		var uid=$("#txtId").val();
		var upwd=$("#txtPwd").val();
		var code=$("#txtCode").val();
//		alert(code);
		if(uid==""&&upwd!=""&&code!=""){
			alert("�������û���");$("#txtId").focus();
			return false;
		}else if(uid!=""&&upwd==""&&code!=""){
			alert("���벻��Ϊ��");		$("#txtPwd").focus();
			return false;
		}else  if(uid!=""&&upwd!=""&&code==""){
			alert("��������֤��");
			return false;
			
		}else if(uid==""&&upwd==""&&code==""){
			  alert("��������Ϣ");
              return false;
		}else if(uid==""&&upwd==""&&code!=""){
			alert("�������û���������");return false;
		}else if(uid==""&&upwd!=""&&code==""){
			alert("�������û�������֤��");return false;
			
		}else if(uid!=""&&upwd==""&&code==""){
			alert("�������������֤��");return false;
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
					alert("��¼ʧ�ܣ����������֤������!");					
				}
				else if(data=="1"){
					alert("��ӭ����");
					location.href="index.php";
					
				}else if(data=="2"){
					alert("��������û�������������!");
					
				}
			}
		});
		
	});
	
	
});