//�޸��û�״̬
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
				alert("�޸ĳɹ�");
				window.location.href="index.php?p=user";
			}else if(data=="0"){
				alert("�޸�ʧ��");
				
			}
			
		}
			
	});
}
//����
function ChUsers(isf){
	alert(11111);
	var uid="";
	//��ȡѡ�еĸ�ѡ��ĸ���
	var chkCount=$("input[type=checkbox]:checked").length;
//	alert(chkCount);
	if(chkCount==0){
		alert("��û��ѡ���κ�ѡ��");
		return;
	}
	//�ҵ����еĸ�ѡ��
	var allChk=document.getElementsByName("items");
	for(var i=0;i<allChk.length;i++){
		if(allChk[i].checked==true){
			//��ѡ��id���û�id
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
				alert("�޸ĳɹ�");
				window.location.href="index.php?p=user";
			}else if(data=="0"){
				alert("�޸�ʧ��");
				
			}
			
		}
			
	});
}