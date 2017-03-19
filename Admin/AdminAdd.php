<?php
include '../DBfile/DBH.class.php';
$db=new DBH();
$name=$_POST["name"];
$pwd=$_POST["pwd"];
$sql="insert into tb_admin(`name`,pwd) VALUES ('{$name}','{$pwd}')";
//  echo $sql;
$res=$db->ExecuteDML($sql);
if($res){
	echo "1";
	
}else{
	echo "0";
}
?>