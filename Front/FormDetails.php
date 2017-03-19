<?php
session_start();
include 'conf.php';
// $smarty=new Smarty();
include "../DBfile/DBH.class.php";
$db=new DBH();
$sql="select realname,tel,`code`,address from tb_user where `name`='{$_SESSION["username"]}'";
$res=$db->ExecuteDQL($sql);
// print_r($res);
if($res){
	$smarty->assign("forminfo",$res);
	
}
// $_SESSION["forShop"]=$_POST["fgid"];
// print_r($res);
$smarty->display("form.tpl");
?>