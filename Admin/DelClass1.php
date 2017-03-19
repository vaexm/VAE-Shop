<?php
include '../DBfile/DBH.class.php';
$db=new DBH();
 $fid=$_POST["fid"];
$sql="delete from tb_class where id={$fid} or supid={$fid}";
// echo $sql;
$res=$db->ExecuteDML($sql);
// var_dump($res);
 if($res){
 	echo "1";	
 }else{
 	echo "0";
}
?>