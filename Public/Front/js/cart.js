
$(function(){
//	alert(123);
	  //ȫѡ
	  $("#chAll").click(function(){
//		 alert(1234);
		 $('[name=items]:checkbox').attr("checked",true);
//		  alert(123);
		/*  $('[name=items]:checkbox').each(function(){
			  $(this).attr("checked",true);
			  });
		*/
		 changeTotal();
		  });
	     
	      
	  //ȫ��ѡ
	  $("#chNo").click(function(){
		  		  $('[name=items]:checkbox').attr("checked",false);
		  		changeTotal();
		  });
	  //��ѡ
	  $("#chRes").click(function(){
		  $('[name=items]:checkbox').each(function(){
			  //$(this).attr("checked",!$(this).attr("checked"));
			  this.checked=!this.checked;changeTotal();
			  });
});
});



/*
 * gid ��Ʒ���  num��Ʒ����  price��Ʒ����
 */
function calTotal(gid,num,price){
//	alert("22");
	document.getElementById("sp"+gid).innerText=num*price;
	changeTotal();
}
//����ѡ��ѡ�е�ʱ�����¼��㵱ǰ�� С�ƣ��������ܼ�
function changeTotal(){
	//�ҵ����и�ѡ��
	var allChk=document.getElementsByName("items");
	//��¼�ܼ�
	var sum=0;
	for(var i=0;i<allChk.length;i++){
		if(allChk[i].checked){
			//�ҵ���ǰ��ѡ���id
			var gid=allChk[i].id;
			sum+=parseFloat(document.getElementById("sp"+gid.substr(3)).innerText);			
		}
		
	}
	//��ʾ�����ܼ�   toFixed�������뵽ָ��λ��
	document.getElementById("sptotal").innerText=sum.toFixed(1);
	
}

//������Ʒ��Ϣ
function saveShopping(){
	//��ȡѡ�еĸ�ѡ��ĸ���
	var chkCount=$("input[type=checkbox]:checked").length;
//	alert(chkCount);
	if(chkCount==0){
		alert("��ѡ��Ҫ�������Ʒ��");
		return;
	}
	
	//���ÿһ�е���Ʒ�ı�ź����µ�����
	//��ȡ���е���Ʒ������
	var shopping="";
	var allnum=document.getElementsByName("txtnum");
	for(var i=0;i<allnum.length;i++){
		
		var txtId=allnum[i].id;//"numXXX"
		var gid=txtId.substr(3);
		shopping+=gid+","+allnum[i].value+"@";
	}
	shopping=shopping.substr(0,shopping.length-1);
//�첽�ύ���������
	$.ajax({
		url:"UpdateShopping.php",
		type:"post",
		dataType:"text",
		data:{"s":shopping},
		success:function(data){
//		alert(data);
			if(data=="1"){
				alert("���ﳵ���³ɹ���");
			}
			else {
				alert("���ﳵ������δ���£�");
			}
			
		}
		
	});
	location.href="index.php";
	
}

function Delete(){
	var shopping="";
	//��ȡѡ�еĸ�ѡ��ĸ���
	var chkCount=$("input[type=checkbox]:checked").length;
//	alert(chkCount);
	if(chkCount==0){
		alert("��ѡ��Ҫɾ������Ʒ��");
		return;
	}
	//�ҵ����еĸ�ѡ��
	var allChk=document.getElementsByName("items");
//	alert(allChk.length);
	for(var i=0;i<allChk.length;i++){
		if(allChk[i].checked==false){//˵����ɾ������Ʒ
//			alert(allChk[i].id);
			//��ѡ��id
			var chid=allChk[i].id;//chkXX
			var gid=chid.substr(3);
//			alert(gid);
			//�ҵ�����Ӧ����Ʒ�����Ŀ�
			var num=document.getElementById("num"+gid).value;
//			alert(num);
			shopping+=gid+","+num+"@";
		}
		
	}
	shopping=shopping.substr(0,shopping.length-1);
//	alert(shopping);
	
	//�첽�ύ���������
	$.ajax({
		url:"UpdateShopping.php",
		type:"post",
		dataType:"text",
		data:{"s":shopping},
		success:function(data){
		alert(data);
			if(data=="1"){
				alert("���ﳵ���³ɹ���");
			}
			else {
				alert("���ﳵ������δ���£�");
			}
			
		}
		
	});
	
}

function Pay(){
	//��¼���е���Ʒ��
	var formGid="";
	//��ȡѡ�еĸ�ѡ��ĸ���
	var chkCount=$("input[type=checkbox]:checked").length;
//	alert(chkCount);
	if(chkCount==0){
		alert("��ѡ��Ҫ�������Ʒ��");
		return;
	}
	//�ҵ����еĸ�ѡ��
	var allChk=document.getElementsByName("items");
	for(var i=0;i<allChk.length;i++){
		if(allChk[i].checked==true){//˵���������Ʒ
//			alert(allChk[i].id);
			//��ѡ��id
			var chid=allChk[i].id;//chkXX
			var gid=chid.substr(3);
			//�ҵ�����Ӧ����Ʒ�����Ŀ�
			formGid+=gid+",";
			
		}		
	}
	formGid=formGid.substr(0,formGid.length-1);
//	alert(formGid);
	window.open("FormDetails.php","","width=500px,height=300px");
//	alert(1111);
	//�첽�ύ���������
	$.ajax({
		url:"FormDetails.php",
		type:"post",
		dataType:"text",
		data:{"fgid":formGid},
		success:function(data){
		alert(data);
			/*if(data=="1"){
				alert("���³ɹ���");
			}
			else {
				alert("���ﳵ������δ���£�");
			}*/
			
		}
		
	});
	
	
}