//ȫ�ֱ���,��¼�û��˺�
 uname="";
//������
 oldPwd="";
function showTable(){
	if(document.getElementById("tbAdd").style.display=="none"){
		//����ʾ������ı��
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
		//����ʾ������ı��
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
		alert("�û�������Ϊ��");
		return false;		
	}
	if(pwd==""){
		alert("���벻��Ϊ��");
		return false;
	}
	if(pwd1==""){
		alert("ȷ�����벻��Ϊ��");
		return false;	
	}
	if(pwd!=pwd1){
		alert("�����������벻ͬ������������");
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
				alert("��ӳɹ�");
				window.location.href="index.php?p=admin";
			}else if(data=="0"){
				alert("���ʧ��");
				
			}
			
		}
			
	});
}
function Update(){
	var opwd=document.getElementById("OldPwd").value;
	var pwd=document.getElementById("NewPwd").value;
	var pwd1=document.getElementById("NewPwd1").value;
	if(opwd==""){
		alert("ԭ���벻��Ϊ��");		
		return false;		
	}
	if(opwd!=oldPwd){
		alert("ԭ�������벻��ȷ");
		return false;		
	}
	if(pwd==""){
		alert("�����벻��Ϊ��");
		return false;		
	}
	if(pwd1==""){
		alert("ȷ�����벻��Ϊ��");
		return false;		
	}
	if(pwd!=pwd1){
		alert("�����������벻ͬ");
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
				alert("�޸ĳɹ�");
				window.location.href="index.php?p=admin";
			}else if(data=="0"){
				alert("�޸�ʧ��");
				
			}
			
		}
			
	});
}
function Delete(name){
	var name1=name;
	if(window.confirm("��ȷ��ɾ����?")){
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
					alert("ɾ���ɹ�");
					window.location.href="index.php?p=admin";
				}else if(data=="0"){
					alert("ɾ��ʧ��");
					
				}
				
			}
				
		});
		
	}else{
		alert(222);
	}
	
}