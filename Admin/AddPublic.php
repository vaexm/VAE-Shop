<?php
header("Content-Type:text/html;charset=gbk;");
include '../DBfile/DBH.class.php';
$db=new DBH();
$title=$_POST["title"];
$content=$_POST["content"];
//��ӹ���
$sql="insert into tb_public (title,content,addtime) values('{$title}','{$content}',NOW())";
$res=$db->ExecuteDML($sql);
//  echo $sql;
if($res){
	echo "1";//�ɹ�	
}else{
	echo "0";//ʧ��
}
?>