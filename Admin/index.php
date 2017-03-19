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
//��ҳ��
$totalPage=0;
//��ʼ����
$startIndex=0;
//ÿҳ��ʾ������
$Size=1;
//��ǰҳ
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
	//������
	$totalRows=$resCount[0]["num"];
}
$page=new Page($totalRows, $currentPage,"index.php?p={$pageurl}",$Size);
//�����µ�ǰҳ
$currentPage=$page->getCurrentPage();
//�ɵ�ǰҳ����ʼ����
$startIndex=($currentPage-1)*$Size;
//��ѯ������Ϣ
$sqlForm="select id,formid,vendee,taker,total,pay_method,del_method,tb_formstate.stateName,
tb_form.state
from tb_form,tb_formstate where tb_form.state=tb_formstate.stateId order by id
desc limit {$startIndex},{$Size}";
$resForm=$db->ExecuteDQL($sqlForm);
// print_r($resForm);
if($resForm){
	$smarty->assign("formInfo",$resForm);
}

//��ѯ��Ʒ��Ϣ
$sqlShop="select id,`name`,addtime,area,model,brand,stocks,sell from tb_commo limit 
{$startIndex} ,{$Size}";
$resShop=$db->ExecuteDQL($sqlShop);
if($resShop){
	$smarty->assign("shopInfo",$resShop);
}

$smarty->assign("page",$page);
$smarty->assign("currentPage",$currentPage);
$smarty->assign("totalPage",$page->getTotalPage());

//��ѯ���
//��ѯһ�����
$sql1="select * from tb_class where supid=0";
$resFirst=$db->ExecuteDQL($sql1);
if($resFirst){
	$smarty->assign("firstMenu",$resFirst);	
}
//��ѯ�������
$sql2="select * from tb_class where supid<>0";
$resSec=$db->ExecuteDQL($sql2);
if($resSec){
	$smarty->assign("secondMenu",$resSec);
}

//��ѯ����Ա��Ϣ
$sqlAdmin="select id,`name`,pwd from tb_admin";
$resAd=$db->ExecuteDQL($sqlAdmin);
if($resAd){
	$smarty->assign("resAdmin",$resAd);
	
}

//��ѯ������Ϣ
$sqlPublic="select id,title,content from tb_public";
$resPub=$db->ExecuteDQL($sqlPublic);
if($resPub){
	$smarty->assign("resPub",$resPub);
}
//�鿴��Ա��Ϣ
$sqlUser="select id,name,isfreeze from tb_user";
$resUser=$db->ExecuteDQL($sqlUser);
if($resUser){
	$smarty->assign("resUser",$resUser);
}
//��ѯ�� ����
$sqlLinks="select * from tb_links";
$resLikns=$db->ExecuteDQL($sqlLinks);
if($resLikns){
	$smarty->assign("resLinks",$resLikns);	
}


$smarty->display("index.tpl");
?>
