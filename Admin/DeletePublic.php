<?php
include '../DBfile/DBH.class.php';
$db=new DBH();
$pid=$_POST["id"];
$sql="delete from tb_public where id in({$pid})";
$res=$db->ExecuteDML($sql);
if($res){
	echo "1";	
}else{
	echo "0";
}
?>