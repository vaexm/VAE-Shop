<?php
include '../DBfile/DBH.class.php';
$db=new DBH();
$id=$_POST["lid"];
$name=$_POST["lname"];
$url=$_POST["lurl"];
//修改成功
$sql="update tb_links set name='{$name}',url='{$url}' where id={$id}";
$res=$db->ExecuteDML($sql);
if($res){
	echo "1";//说明修改成功
}else{
	echo "0";//说明修改失败
}
?>