//每点击一个商品的图片，出现一个显示商品详细信息的窗口
function openWindow(gid){
	window.open("ShowDetails.php?gid="+gid,"","width=500px,height=300px");	
}