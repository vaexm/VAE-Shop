<?php
include "../DBfile/DBH.class.php";
$db=new DBH();
$formid=$_POST["s"];
$sql="delete from tb_form where formid in ({$formid})";
$res=$db->ExecuteDML($sql);
if($res){
	echo "1";
	
}else{
	echo "0";
}
?>