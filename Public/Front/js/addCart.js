//������ҳ���������ж��û��Ƿ��¼���������Ĳ���
$(function(){
	$("#imgBuy").click(function(){
//		alert("22");
		$.ajax({
			url:"addCartProcess.php",
			type:"post",
			dataType:"text",
			data:{
				"gid":$("#Hiddengid").val()
			},
			success:function(data){
//				alert(data);
				if(data=="0"){
					alert("���ȵ�¼");					
				}
				else if(data=="1"){
					alert("��ӹ��ﳵ�ɹ�");					
				}else if(data=="2"){
					alert("��ӹ��ﳵʧ��");					
				}else if(data=="3"){
					alert("���ﳵ����ӹ�����Ʒ");
					
				}
			}
		});
	});
});