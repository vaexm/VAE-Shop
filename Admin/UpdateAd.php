<?php
include '../DBfile/DBH.class.php';
$db=new DBH();
$name=$_POST["name"];
$pwd=$_POST["pwd"];
$sql="update tb_admin set pwd='{$pwd}' where name='{$name}'";
$res=$db->ExecuteDML($sql);
if($res){
	echo "1";//�޸ĳɹ�

}else{
	echo "0";//ʧ��
}

?>