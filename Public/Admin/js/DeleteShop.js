$(function(){
	
	$("#deleteShop").click(function(){
	     alert(1111);
		  var shopId1="";
		  if(window.confirm("��ȷ��Ҫɾ����?")){
//		      alert(22);
			//��ȡѡ�еĸ�ѡ��ĸ���
				var chkCount=$("input[type=checkbox]:checked").length;
//				alert(chkCount);
				if(chkCount==0){
					alert("��ѡ��Ҫɾ������Ʒ��");
					return;
				}
				//�ҵ����еĸ�ѡ��
				var allChk=document.getElementsByName("items");
				for(var i=0;i<allChk.length;i++){
					if(allChk[i].checked==true){//˵��ɾ���ö���
//						alert(allChk[i].id);
						//��ѡ��id
						var chid=allChk[i].id;//chkXX
						//��Ʒid
						var id=chid.substr(3);
						shopId1+=id+",";
					}
					
				}
				shopId1=shopId1.substr(0,shopId1.length-1);
			   alert(shopId1);
				//�첽�ύ���������
				$.ajax({
					url:"DeleteShop.php",
					type:"post",
					dataType:"text",
					data:{"id":shopId1},
					success:function(data){
//					alert(data);
						if(data=="1"){
							alert("ɾ����Ʒ�ɹ�");
							window.location.href="index.php?p=shopping";
						}
						else if(data=="0") {
							alert("ɾ��ʧ��");
						}
						
					}
					
				});
		   }
		  else{
		  
		   }
});
});
