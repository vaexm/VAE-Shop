<?php
session_start();
include '../DBfile/DBH.class.php';
$db=new DBH();
$uid=$_POST["uid"];
$upwd=$_POST["upwd"];
$code=$_POST["code"];
$isCode=0;
if(strtoupper($code)==strtoupper($_SESSION["code"])){
	$isCode=1;//验证通过

}else {
	$isCode==0;
}
$sql="select * from tb_user where `name`= '{$uid}' and password=md5('{$upwd}')";
$res=$db->ExecuteDQL($sql);
if($res&&$isCode==1){
	echo "1";//登录成功
	$_SESSION["username"]=$res[0]["name"];
	
}else if($res&&$isCode!=1){
	echo "0";//验证码有误
}else if($isCode==1&&(!$res)){
	echo "2";//用户名或密码有误
}
?>