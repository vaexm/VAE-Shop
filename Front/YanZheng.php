<?php
include '../libs/Smarty.class.php';
$smarty=new Smarty();
//�����Ự
session_start();
//header()�����������ǣ�����һ��ԭʼ HTTP ��ͷ[Http Header]���ͻ��ˡ�
//�����ļ���ͼƬ��ʽ����������
header("Content-Type:image/png;charset=utf-8");
$img=imagecreate(100,40);
//������������ɫ
imagecolorallocate($img,215,255,235);
//��¼ÿһ�β������ַ�
$single="";
//��¼�ܵ��ַ�
$allStr="";
for($i=0;$i<4;$i++){
	//����һ����������������Ʋ�����Сдĸ�������ֻ��ߴ�д��ĸ
	$num=rand(0, 500);
	//����һ���ַ�����ɫ
	$fontColor=imagecolorallocate($img,rand(0, 200),rand(30, 230), rand(0, 150));
	if($num%3==0){

		//����Сд��ĸ    chr����ָ�����ַ�
		$single=chr(rand(97, 122));
	}else if($num%3==1){
		//������д��ĸ
		$single=chr(rand(65, 90));
	}else {
		$single=rand(0, 9);
	}

	$allStr.=$single;
	//ʹ��imagestringˮƽ�ػ����ַ���
	imagestring($img, 5, 30*$i, rand(3, 15), $single, $fontColor);

}

//Ϊ������֤��ʱ��֪����֤���ܵ��ַ�������Ҫ�������¼һ��
$_SESSION["code"]=$allStr;
//��Ӹ���Ԫ��
//�����ص�
for($i=0;$i<70;$i++){
	$pixColor=imagecolorallocate($img, rand(60, 255), rand(30, 200), rand(100, 255));
	//imagesetpixel��һ����һ����
	imagesetpixel($img, rand(3, 115),rand(3, 36) ,$pixColor);
}
//����
for($i=0;$i<5;$i++){
	$lineColor=imagecolorallocate($img, rand(60, 255), rand(30, 200), rand(100, 255));
	imageline($img, rand(0, 55), rand(0, 20), rand(55, 120), rand(20, 40), $lineColor);
}

//��png�ĸ�ʽ���ͼƬ
imagepng($img);

$smarty->assign("code",$img);
//�ͷ���Դ   ����һ��Դ
imagedestroy($img);
$smarty->display("login.tpl");

?>
