<?php
session_start();
include '../DBfile/DBH.class.php';
$shopping=$_POST["s"];
$db=new DBH();
$sql="update tb_user set shopping='{$shopping}' where name='{$_SESSION["username"]}'";
$res=$db->ExecuteDML($sql);
if($res){
	echo "1";//��ʾ�޸ĳɹ�	
}else{
	echo "0"; 
}
?>