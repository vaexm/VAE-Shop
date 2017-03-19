<?php
include 'conf.php';
include '../DBfile/DBH.class.php';
$db=new DBH();
//根据订单编号查询订单详细信息
$fid=$_GET["fid"];
$sql="select formid, commo_name,commo_num,agoprice,fold,total,vendee,taker,address,tel,`code`,
pay_method,del_method, formtime from tb_form where formid='{$fid}' ";
$resForm=$db->ExecuteDQL($sql);
if($resForm){
$smarty->assign("res",$resForm);	
}
$smarty->display("FormDetails.tpl");
?>