<?php
include 'conf.php';
include '../DBfile/DBH.class.php';
include '../DBfile/Page.class.php';
$db=new DBH();



if(isset($_GET["p"])){
	$smarty->assign("url",$_GET["p"].".tpl");
	$pageurl=$_GET["p"];
	
}
else{
	$smarty->assign("url","form.tpl");
	$pageurl="form";
}

$countSql="";
$totalRows=0;
//总页数
$totalPage=0;
//起始索引
$startIndex=0;
//每页显示的行数
$Size=1;
//当前页
$currentPage=1;
if($pageurl=="form"){
	$countSql="select count(id) as num from tb_form";
	$Size=10;
}else if($pageurl=="shopping"){
	$countSql="select count(id) as num from tb_commo";
	$Size=6;
	
}
$resCount=$db->ExecuteDQL($countSql);
if($resCount){
	//总条数
	$totalRows=$resCount[0]["num"];
}
$page=new Page($totalRows, $currentPage,"index.php?p={$pageurl}",$Size);
//求最新当前页
$currentPage=$page->getCurrentPage();
//由当前页求起始索引
$startIndex=($currentPage-1)*$Size;
//查询订单信息
$sqlForm="select id,formid,vendee,taker,total,pay_method,del_method,tb_formstate.stateName,
tb_form.state
from tb_form,tb_formstate where tb_form.state=tb_formstate.stateId order by id
desc limit {$startIndex},{$Size}";
$resForm=$db->ExecuteDQL($sqlForm);
// print_r($resForm);
if($resForm){
	$smarty->assign("formInfo",$resForm);
}

//查询商品信息
$sqlShop="select id,`name`,addtime,area,model,brand,stocks,sell from tb_commo limit 
{$startIndex} ,{$Size}";
$resShop=$db->ExecuteDQL($sqlShop);
if($resShop){
	$smarty->assign("shopInfo",$resShop);
}

$smarty->assign("page",$page);
$smarty->assign("currentPage",$currentPage);
$smarty->assign("totalPage",$page->getTotalPage());

//查询类别
//查询一级类别
$sql1="select * from tb_class where supid=0";
$resFirst=$db->ExecuteDQL($sql1);
if($resFirst){
	$smarty->assign("firstMenu",$resFirst);	
}
//查询二级类别
$sql2="select * from tb_class where supid<>0";
$resSec=$db->ExecuteDQL($sql2);
if($resSec){
	$smarty->assign("secondMenu",$resSec);
}

//查询管理员信息
$sqlAdmin="select id,`name`,pwd from tb_admin";
$resAd=$db->ExecuteDQL($sqlAdmin);
if($resAd){
	$smarty->assign("resAdmin",$resAd);
	
}

//查询公告信息
$sqlPublic="select id,title,content from tb_public";
$resPub=$db->ExecuteDQL($sqlPublic);
if($resPub){
	$smarty->assign("resPub",$resPub);
}
//查看会员信息
$sqlUser="select id,name,isfreeze from tb_user";
$resUser=$db->ExecuteDQL($sqlUser);
if($resUser){
	$smarty->assign("resUser",$resUser);
}
//查询友 链接
$sqlLinks="select * from tb_links";
$resLikns=$db->ExecuteDQL($sqlLinks);
if($resLikns){
	$smarty->assign("resLinks",$resLikns);	
}


$smarty->display("index.tpl");
?>
