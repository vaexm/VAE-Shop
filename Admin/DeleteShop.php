<?php
include '../DBfile/DBH.class.php';
$db=new DBH();
$ids=$_POST["id"];
$sql="delete from tb_commo where id in({$ids})";
$res=$db->ExecuteDML($sql);
if($res){
	echo "1";
	
}else{
	echo "0";
}
?>