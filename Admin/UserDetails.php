<?php
include 'conf.php';
include '../DBfile/DBH.class.php';
$db=new DBH();
$uid=$_GET["uid"];
//根据用户编号查询用户信息
$sql="select name,realname,card,tel,phone,Email,QQ,code,address,consume,addtime,fname from tb_user
,freeze where tb_user.id={$uid} and tb_user.isfreeze=freeze.id";
$res=$db->ExecuteDQL($sql);
if($res){
	
	$smarty->assign("res1",$res);
}
$smarty->display("UserDetails.tpl");
?>