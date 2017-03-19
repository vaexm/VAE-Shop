<?php
session_start();
include '../DBfile/DBH.class.php';
$db=new DBH();
//接收传递过来的商品编号
$gid=$_POST["gid"];
// echo $gid;
$reValue="";//表示需要返回客户端的参数
/*
 * 0：表示未登录 1：添加到购物车成功 2：添加到购物车失败 3:说明之前添加过该商品
*/
$isAdd=false; //表示购物车中是否添加过该商品，默认为false表示没有添加过
if (isset ( $_SESSION ["username"] )) {
	// 说明已经登录了
	// 再查询该用户的购物车信息
	$sqlShopping = "select shopping from tb_user where name='{$_SESSION["username"]}'";
	$resShopping = $db->ExecuteDQL ( $sqlShopping );
	if ($resShopping) {
		$shopping = $resShopping [0] ["shopping"];
		// 需要判断购物车是否为空  如果不为空，那么就需要去判断购物车中是否
		if ($shopping) {
			// 说明购物车中有商
			// 将$shopping按照“@”分割
			// 然后再把分割出来的每一个部分再按照","分割
			$arr1 = explode ( "@", $shopping );
			foreach ( $arr1 as $a ) {
				$arr2 = explode ( ",", $a );
				if ($arr2 [0] == $gid) {
					// 说明之前添加过该商品
					$isAdd = true;
					break; 
				} else {
					$isAdd = false;
				}
			}
			
			// 遍历完了最后再通过$isAdd再去判断是否加过商品
			if ($isAdd) {
				$reValue = "3";
			} else {
				$sqlUpdate2 = "update tb_user set shopping='{$shopping}@{$gid},1' where name='{$_SESSION["username"]}'";
				$res = $db->ExecuteDML ( $sqlUpdate2 );
				if ($res) {
					
					$reValue = "1"; // 说明添加到购物车成功
				} else {
					$reValue = "2"; // 说明添加到购物车失败
				}
			}
		} else {
			// 说明购物车为空
			// 那么直接添加
			$sqlUpdate1 = "update tb_user set shopping='{$gid},1' where name='{$_SESSION["username"]}'";
			$res = $db->ExecuteDML ( $sqlUpdate1 );
			if ($res) {
				
				$reValue = "1"; // 说明添加到购物车成功
			} else {
				$reValue = "2"; // 说明添加到购物车失败
			}
		}
	}
} else {
	
	// 没有登录
	$reValue = "0";
}
echo $reValue;
?>