<?php
session_start();
include '../DBfile/DBH.class.php';
include '../DBfile/Page.class.php';
$db=new DBH();
include 'conf.php';

//查询公告
$sqlPublic="select id,title,addtime from tb_public ORDER BY addtime desc limit 0,4 ";
$res=$db->ExecuteDQL($sqlPublic);
if($res)
{
	$smarty->assign("public",$res);
}
//查询友情链接
$sqlLink="select id,`name`,url from tb_links";
$resLink=$db->ExecuteDQL($sqlLink);
if($resLink){
	$smarty->assign("link",$resLink);
}

//查询推荐商品
$sqlCom="select id,`name`,pics,m_price,v_price from tb_commo where isnom=1 limit 0,4";
$resCom=$db->ExecuteDQL($sqlCom);
if($resCom){
	$smarty->assign("comment",$resCom);
	
}

//查询热门商品
$sqlHot="select id,name,pics,m_price,v_price from tb_commo 
ORDER BY sell desc limit 0,4";
$resHot=$db->ExecuteDQL($sqlHot);
if($resHot){
	$smarty->assign("hot",$resHot);
}

//查询最新商品
$sqlNew="select id,`name`,pics,m_price,v_price from tb_commo where isnew=1 limit 0,4";
$resNew=$db->ExecuteDQL($sqlNew);
if($resNew){
	$smarty->assign("new",$resNew);
}

//判断是否点击了导航菜单的超链接
if(isset($_GET["pageurl"])){
	$smarty->assign("url",$_GET["pageurl"].".tpl");
	$pageUrl=$_GET["pageurl"];
	$totalRows=0;
	//总页数
	$totalPage=0;
	//起始索引
	$startIndex=0;
	//每页显示的行数
	$Size=2;
	//当前页
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
	//求最新当前页
	$currentPage=$page->getCurrentPage();
	//由当前页求起始索引
	$startIndex=($currentPage-1)*$Size;
	//最新商品
	$newInfosql="
	select id,`name`,pics,area,class,brand,model,stocks,sell,m_price,v_price,addTime from tb_commo
	where isnew=1 ORDER BY addTime DESC limit {$startIndex},{$Size}";
	$resNewInfo=$db->ExecuteDQL($newInfosql);
	if($resNewInfo){
	$smarty->assign("PageNew",$resNewInfo);
	}
	//推荐商品
	$ComInfosql="
	select id,`name`,pics,area,class,brand,model,stocks,sell,m_price,v_price,addTime from tb_commo
	where isnom=1 limit {$startIndex},{$Size}";
	$resComInfo=$db->ExecuteDQL($ComInfosql);
	// print_r($resComInfo);
	if($resComInfo){
	$smarty->assign("PageCom",$resComInfo);
	}
	//热门商品
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
//判断是否登录
if(isset($_SESSION["username"])){
	$smarty->assign("user",$_SESSION["username"]);
	//说明登录成功
	$smarty->assign("islogin","1");
	
	//存放所有商品编号的字符串
	$gids="";
	$numArr=array();//存放所有商品数量的数组
	//查询用户购物车中信息
	$sqlCart="select shopping FROM tb_user where `name`='{$_SESSION["username"]}'";
	$resCart=$db->ExecuteDQL($sqlCart);  //
	if($resCart){
		//查询购物车中商品的编号和数量
		$shopping=$resCart[0]["shopping"];	
		$arr1=explode("@", $shopping);//Array ( [0] => Array ( [shopping] => 24,1@21,1 ) ) 
		foreach ($arr1 as $a){
			$arr2=explode(",", $a);
			$gids.=$arr2[0].",";
			$numArr[]=$arr2[1];			
		}
		//gids  去掉其中的逗号   substr截取字符串，最后一个不截
		$gids=substr($gids, 0,-1);
		//查询商品信息
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