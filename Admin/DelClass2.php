<?php
include '../DBfile/DBH.class.php';
$db=new DBH();
$id=$_POST["sid"];
$sql="delete from tb_class where id={$id}";
$res=$db->ExecuteDML($sql);
if($res){
	echo "1";	
}else{
	echo "0";
}
?>