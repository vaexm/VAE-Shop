//ɾ������
//sidΪ�����id
function DelSec(sid){
	var secId=sid;
	if(window.confirm("��ȷ��Ҫɾ����?")){
		$.ajax({
			url:"DelClass2.php",
			dataType:"text",
			type:"post",
			data:{"sid":secId},
			success:function(data){
//				alert(data);
				if(data=="1"){
					alert("ɾ���ɹ�");
					window.location.href="index.php?p=class";
				}else if(data=="0"){
					alert("ɾ��ʧ��");
					
				}
				
			}
		});
	}	
}
//ɾ�����༰������  fid����id
function DelFir(fid){
	var firId=fid;
	alert(firId);
	if(window.confirm("��ȷ��Ҫɾ����?")){
		$.ajax({
			url:"DelClass1.php",
			dataType:"text",
			type:"post",
			data:{"fid":firId},
			success:function(data){
//				alert(data);
				if(data=="1"){
					alert("ɾ���ɹ�");
					window.location.href="index.php?p=class";
				}else if(data=="0"){
					alert("ɾ��ʧ��");
					
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
	//��ȡ�µ��������
	var newname=document.getElementById("txt"+id).value;
	if(oldname==newname){
		alert("�������û���κθı�");
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
					alert("���³ɹ�");
					window.location.href="index.php?p=class";
				}else if(data=="0"){
					alert("����ʧ��");
					
				}
				
			}
		});
		
	}
	
}