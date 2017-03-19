<?php
include '../DBfile/DBH.class.php';
$db=new DBH();
$cid=$_POST["cid"];
$cname=$_POST["cname"];
$sql="update tb_class set name='{$cname}' where id={$cid} ";
$res=$db->ExecuteDML($sql);
if($res){
	echo "1";
}else{
	echo "0";
}

?>