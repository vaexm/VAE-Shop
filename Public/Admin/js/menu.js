/**
 * 实现左边菜单展开，闭合的效果
 */
$(function(){
	//找到所有的一级菜单的超链接，添加点击事件
	var firstLiA=$(".firstli>a");
	firstLiA.click(function(){
//		alert(333);
		//找到当前一级菜单下面的耳机ul
		var nextUl=$(this).next("ul");
		//找到该菜单下同级的一级菜单的子菜单
		var otherUl=$(this).parent().siblings().children("ul");
		if(nextUl.css("display")=="none"){
			nextUl.css("display","block");
			//将其他的二级菜单隐藏
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