/**
 * ���ÿ�д����������ӣ����д���
 * fid:�������
 * sid:����ԭ����״̬���
 */
oldSid=0;//��¼����֮ǰ��״̬���
formId="";//�������
function changeState(fid,sid){
	oldSid=sid;
	formId=fid;
	if(document.getElementById("tbState").style.display=="none"){
		//����ʾ������ı��
		document.getElementById("tbState").style.display="table";
	}else{
		document.getElementById("tbState").style.display="none";
	}

	//����ǰ����еĶ��������ʾ��������ŵĵط�
	document.getElementById("spFid").innerText=fid;
	//���ݵ�ǰ״̬�ı�Ŷ�Ӧ��ѡ�е�ѡ��ť
	var allrdos=document.getElementsByName("rdo");
	for(var i=0;i<allrdos.length;i++){
		if(allrdos[i].value==sid){
			allrdos[i].checked="checked";
		}
		
	}
}
function saveChangeState(){
	//����û�ѡ���״̬��ԭ������һ����������޸�
	//������ֱ��
	//��Ҫ�õ�ԭ����״̬��ź͵�ǰ����ѡ��ı��
	//����ѡ��ı��
	var newSid=0;
	var allrdos=document.getElementsByName("rdo");
	for(var i=0;i<allrdos.length;i++){
		if(allrdos[i].checked){
			newSid=allrdos[i].value;
		}
		
	}
	if(oldSid+1==newSid){
		//˵�������޸�
		$.ajax({
			url:"ProcessState.php",
			type:"post",
			dataType:"text",
			data:{
				"fid":formId,
				"sid":newSid
			},
			success:function(data){
				alert(data);
				if(data=="1"){
					alert("�޸ĳɹ�");
					window.location.href="index.php";
				}else if(data=="0"){
					alert("�޸�ʧ��");
					
				}
				
			}
				
		});
	}
	else{
		alert("�����޸�Ϊ��һ��״̬��");
	}
}
$(function(){
	  //ȫѡ
	  $("#chAll").click(function(){
		 $('[name=items]:checkbox').attr("checked",true);
		/*  $('[name=items]:checkbox').each(function(){
			  $(this).attr("checked",true);
			  });
		*/
		  });	      
	  //ȫ��ѡ
	  $("#chNo").click(function(){
		  		  $('[name=items]:checkbox').attr("checked",false);
		  	
		  });
	  //��ѡ
	  $("#chRes").click(function(){
		  $('[name=items]:checkbox').each(function(){
			  //$(this).attr("checked",!$(this).attr("checked"));
			  this.checked=!this.checked;
			  });
});
	  $("#delete").click(function(){
		  var formId1="";
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
						var id=chid.substr(3);
//						alert(gid);
						//�ҵ�����������Ӧ��span
						var formid=document.getElementById("sp"+id).innerText;
						formId1+=formid+",";
					}
					
				}
				formId1=formId1.substr(0,formId1.length-1);
//				alert(formId1);
				//�첽�ύ���������
				$.ajax({
					url:"DeleteForm.php",
					type:"post",
					dataType:"text",
					data:{"s":formId1},
					success:function(data){
//					alert(data);
						if(data=="1"){
							alert("ɾ�������ɹ�");
							window.location.href="index.php";
						}
						else if(data=="0") {
							alert("ɾ��ʧ��");
						}
						
					}
					
				});
		   }
		  else{
		   alert(111);
		   }
	  });
});
