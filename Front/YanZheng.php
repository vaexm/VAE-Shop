<?php
include '../libs/Smarty.class.php';
$smarty=new Smarty();
//开启会话
session_start();
//header()函数的作用是：发送一个原始 HTTP 标头[Http Header]到客户端。
//设置文件以图片格式输出到浏览器
header("Content-Type:image/png;charset=utf-8");
$img=imagecreate(100,40);
//给画布设置颜色
imagecolorallocate($img,215,255,235);
//记录每一次产生的字符
$single="";
//记录总的字符
$allStr="";
for($i=0;$i<4;$i++){
	//产生一个随机数，用来控制产生字小写母或者数字或者大写字母
	$num=rand(0, 500);
	//产生一个字符的颜色
	$fontColor=imagecolorallocate($img,rand(0, 200),rand(30, 230), rand(0, 150));
	if($num%3==0){

		//产生小写字母    chr返回指定的字符
		$single=chr(rand(97, 122));
	}else if($num%3==1){
		//产生大写字母
		$single=chr(rand(65, 90));
	}else {
		$single=rand(0, 9);
	}

	$allStr.=$single;
	//使用imagestring水平地绘制字符串
	imagestring($img, 5, 30*$i, rand(3, 15), $single, $fontColor);

}

//为了在验证的时候知道验证码总的字符串，需要在这里记录一下
$_SESSION["code"]=$allStr;
//添加干扰元素
//画像素点
for($i=0;$i<70;$i++){
	$pixColor=imagecolorallocate($img, rand(60, 255), rand(30, 200), rand(100, 255));
	//imagesetpixel画一个单一像素
	imagesetpixel($img, rand(3, 115),rand(3, 36) ,$pixColor);
}
//画线
for($i=0;$i<5;$i++){
	$lineColor=imagecolorallocate($img, rand(60, 255), rand(30, 200), rand(100, 255));
	imageline($img, rand(0, 55), rand(0, 20), rand(55, 120), rand(20, 40), $lineColor);
}

//以png的格式输出图片
imagepng($img);

$smarty->assign("code",$img);
//释放资源   销毁一资源
imagedestroy($img);
$smarty->display("login.tpl");

?>
