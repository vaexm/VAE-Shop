$(function(){	
	$("#deletePublic").click(function(){
		//alert(22);
		  var pid="";
		  if(window.confirm("��ȷ��Ҫɾ����?")){
//		      alert(22);
			//��ȡѡ�еĸ�ѡ��ĸ���
				var chkCount=$("input[type=checkbox]:checked").length;
//				alert(chkCount);
				if(chkCount==0){
					alert("��ѡ��Ҫɾ���Ĺ��棡");
					return;
				}
		  
				//�ҵ����еĸ�ѡ��
				var allChk=document.getElementsByName("items");
				for(var i=0;i<allChk.length;i++){
					if(allChk[i].checked==true){//˵��ɾ���ù���
//						alert(allChk[i].id);
						//��ѡ��id
						var chid=allChk[i].id;//chkXX
						//����id
						var id=chid.substr(3);
						pid+=id+",";
					}
					
				}
				pid=pid.substr(0,pid.length-1);
			   alert(pid);
				//�첽�ύ���������
				$.ajax({
					url:"DeletePublic.php",
					type:"post",
					dataType:"text",
					data:{"id":pid},
					success:function(data){
				alert(data);
						if(data=="1"){
							alert("ɾ����Ʒ�ɹ�");
							window.location.href="index.php?p=public";
						}
						else if(data=="0") {
							alert("ɾ��ʧ��");
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
				alert("��ӹ���ɹ�");
				window.location.href="index.php?p=Addpublic";
			}
			else if(data=="0") {
				alert("���ʧ��");
			}
			
		}
		
	});
}