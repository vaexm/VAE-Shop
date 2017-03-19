<?php
session_start();
include '../DBfile/DBH.class.php';
include '../DBfile/Page.class.php';
$db=new DBH();
include 'conf.php';

//��ѯ����
$sqlPublic="select id,title,addtime from tb_public ORDER BY addtime desc limit 0,4 ";
$res=$db->ExecuteDQL($sqlPublic);
if($res)
{
	$smarty->assign("public",$res);
}
//��ѯ��������
$sqlLink="select id,`name`,url from tb_links";
$resLink=$db->ExecuteDQL($sqlLink);
if($resLink){
	$smarty->assign("link",$resLink);
}

//��ѯ�Ƽ���Ʒ
$sqlCom="select id,`name`,pics,m_price,v_price from tb_commo where isnom=1 limit 0,4";
$resCom=$db->ExecuteDQL($sqlCom);
if($resCom){
	$smarty->assign("comment",$resCom);
	
}

//��ѯ������Ʒ
$sqlHot="select id,name,pics,m_price,v_price from tb_commo 
ORDER BY sell desc limit 0,4";
$resHot=$db->ExecuteDQL($sqlHot);
if($resHot){
	$smarty->assign("hot",$resHot);
}

//��ѯ������Ʒ
$sqlNew="select id,`name`,pics,m_price,v_price from tb_commo where isnew=1 limit 0,4";
$resNew=$db->ExecuteDQL($sqlNew);
if($resNew){
	$smarty->assign("new",$resNew);
}

//�ж��Ƿ����˵����˵��ĳ�����
if(isset($_GET["pageurl"])){
	$smarty->assign("url",$_GET["pageurl"].".tpl");
	$pageUrl=$_GET["pageurl"];
	$totalRows=0;
	//��ҳ��
	$totalPage=0;
	//��ʼ����
	$startIndex=0;
	//ÿҳ��ʾ������
	$Size=2;
	//��ǰҳ
	$currentPage=1;
	$newCountsql="";
	$newInfosql="";
	if($pageUrl=="Newthings"){
		$newCountsql="select count(id) as num from tb_commo";
	}else if($pageUrl=="Hotthings"){
		$newCountsql="select count(id) as num from tb_commo";
	}else if($pageUrl=="Commentthings"){
		$newCountsql="select count(id) as num from tb_commo where isnom=1";
	}
	$resNewCount=$db->ExecuteDQL($newCountsql);
	// print_r($resNewCount);
	if($resNewCount){
		$totalRows=$resNewCount[0]["num"];
	}
	$page=new Page($totalRows, $currentPage,"index.php?pageurl={$pageUrl}",$Size);
	//�����µ�ǰҳ
	$currentPage=$page->getCurrentPage();
	//�ɵ�ǰҳ����ʼ����
	$startIndex=($currentPage-1)*$Size;
	//������Ʒ
	$newInfosql="
	select id,`name`,pics,area,class,brand,model,stocks,sell,m_price,v_price,addTime from tb_commo
	where isnew=1 ORDER BY addTime DESC limit {$startIndex},{$Size}";
	$resNewInfo=$db->ExecuteDQL($newInfosql);
	if($resNewInfo){
	$smarty->assign("PageNew",$resNewInfo);
	}
	//�Ƽ���Ʒ
	$ComInfosql="
	select id,`name`,pics,area,class,brand,model,stocks,sell,m_price,v_price,addTime from tb_commo
	where isnom=1 limit {$startIndex},{$Size}";
	$resComInfo=$db->ExecuteDQL($ComInfosql);
	// print_r($resComInfo);
	if($resComInfo){
	$smarty->assign("PageCom",$resComInfo);
	}
	//������Ʒ
	$hotInfosql="
	select id,`name`,pics,area,class,brand,model,stocks,sell,m_price,v_price,addTime from tb_commo
	ORDER BY sell desc limit {$startIndex},{$Size}";
	$resHotInfo=$db->ExecuteDQL($hotInfosql);
	// print_r($resComInfo);
	if($resHotInfo){
	$smarty->assign("PageHot",$resHotInfo);
	}
	$smarty->assign("totalNum",$totalRows);
	$smarty->assign("size",$Size);
	$smarty->assign("currentPage",$currentPage);
	// echo $page->getTotalPage();
	$smarty->assign("totalPage",$page->getTotalPage());
	$smarty->assign("page",$page);
}
else{
	$smarty->assign("url","Allthings.tpl");

}
//�ж��Ƿ��¼
if(isset($_SESSION["username"])){
	$smarty->assign("user",$_SESSION["username"]);
	//˵����¼�ɹ�
	$smarty->assign("islogin","1");
	
	//���������Ʒ��ŵ��ַ���
	$gids="";
	$numArr=array();//���������Ʒ����������
	//��ѯ�û����ﳵ����Ϣ
	$sqlCart="select shopping FROM tb_user where `name`='{$_SESSION["username"]}'";
	$resCart=$db->ExecuteDQL($sqlCart);  //
	if($resCart){
		//��ѯ���ﳵ����Ʒ�ı�ź�����
		$shopping=$resCart[0]["shopping"];	
		$arr1=explode("@", $shopping);//Array ( [0] => Array ( [shopping] => 24,1@21,1 ) ) 
		foreach ($arr1 as $a){
			$arr2=explode(",", $a);
			$gids.=$arr2[0].",";
			$numArr[]=$arr2[1];			
		}
		//gids  ȥ�����еĶ���   substr��ȡ�ַ��������һ������
		$gids=substr($gids, 0,-1);
		//��ѯ��Ʒ��Ϣ
		$sqlInfo="SELECT id,`name`,m_price,v_price,fold from tb_commo where id in({$gids})";
		$resGoodInfo=$db->ExecuteDQL($sqlInfo);
		if($resGoodInfo){
			$smarty->assign("cart",$resGoodInfo);
			$smarty->assign("num",$numArr);
		}
		
		
	}
}else{
	$smarty->assign("islogin","0");
}
// print_r($numArr);
$smarty->display("index.tpl");
?>