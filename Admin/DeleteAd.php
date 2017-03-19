<?php
include '../DBfile/DBH.class.php';
$db=new DBH();
$name=$_POST["name"];
$sql="delete from tb_admin where name='{$name}'";
//  echo $sql;
$res=$db->ExecuteDML($sql);
if($res){
	echo "1";
	
}else{
	echo "0";
}