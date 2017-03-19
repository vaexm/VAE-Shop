<?php
include "../DBfile/DBH.class.php";
$db=new DBH();
$fid=$_POST["fid"];
$sid=$_POST["sid"];
$sql="update tb_form set state={$sid} where formid='{$fid}'";
$res=$db->ExecuteDML($sql);
if($res){
	echo "1";//表明修改成功	
}else{
	echo "0";
}
?>