/**
 * ʵ����߲˵�չ�����պϵ�Ч��
 */
$(function(){
	//�ҵ����е�һ���˵��ĳ����ӣ���ӵ���¼�
	var firstLiA=$(".firstli>a");
	firstLiA.click(function(){
//		alert(333);
		//�ҵ���ǰһ���˵�����Ķ���ul
		var nextUl=$(this).next("ul");
		//�ҵ��ò˵���ͬ����һ���˵����Ӳ˵�
		var otherUl=$(this).parent().siblings().children("ul");
		if(nextUl.css("display")=="none"){
			nextUl.css("display","block");
			//�������Ķ����˵�����
			otherUl.css("display","none");			
		}else{
			nextUl.css("display","none");
		}
		changeIcon($(this));
	});
	
	
});
function changeIcon(Icon){
//	alert(444);
	if(Icon){
//		alert(555);
		if(Icon.css("background-image").indexOf("admin1.gif")>=0){
//			alert(111);
			Icon.css("background-image","url('../Public/Admin/images/e.gif')");
		}
	  else{
//			alert(222);
			Icon.css("background-image","url('../Public/Admin/images/admin1.gif')");
		}
	}
}