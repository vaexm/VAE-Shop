<?php
include '../DBfile/DBH.class.php';
$db=new DBH();
$sql="";
if(isset($_GET["u"])&&$_GET["u"]=="single"){
	//ֻ����һ���û�
	$uid=$_POST["uid"];
	$isf=$_POST["isf"];	
	$sql="update tb_user set isfreeze={$isf} where id={$uid}";
}else if(isset($_GET["u"])&&$_GET["u"]=="many"){
	//˵�������������û�
	$uids=$_POST["uid"];
	$isf=$_POST["isf"];
	$sql="update tb_user set isfreeze={$isf} where id in({$uids})";
}

$res=$db->ExecuteDML($sql);
if($res){
	echo "1";
}else{
	echo "0";
}
?>