<?php
include 'conf.php';
include '../DBfile/DBH.class.php';
$db=new DBH();
//根据商品编号查询商品详细信息
$id=$_GET["gid"];
$sql="select tb_commo.id, tb_commo.name as gname,pics,area,model,tb_class.name as cname,brand,info,
stocks,m_price,v_price from tb_commo,tb_class where tb_commo.class=tb_class.id
and tb_commo.id={$id}";
$res=$db->ExecuteDQL($sql);
if($res){
	$smarty->assign("goodDetails",$res);
	
}
// print_r($res);
$smarty->display("ShowDetails.tpl");
?>