<?php
include '../DBfile/DBH.class.php';
$db=new DBH();
$id=$_POST["lid"];
$name=$_POST["lname"];
$url=$_POST["lurl"];
//�޸ĳɹ�
$sql="update tb_links set name='{$name}',url='{$url}' where id={$id}";
$res=$db->ExecuteDML($sql);
if($res){
	echo "1";//˵���޸ĳɹ�
}else{
	echo "0";//˵���޸�ʧ��
}
?>