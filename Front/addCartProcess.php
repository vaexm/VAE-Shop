<?php
session_start();
include '../DBfile/DBH.class.php';
$db=new DBH();
//���մ��ݹ�������Ʒ���
$gid=$_POST["gid"];
// echo $gid;
$reValue="";//��ʾ��Ҫ���ؿͻ��˵Ĳ���
/*
 * 0����ʾδ��¼ 1����ӵ����ﳵ�ɹ� 2����ӵ����ﳵʧ�� 3:˵��֮ǰ��ӹ�����Ʒ
*/
$isAdd=false; //��ʾ���ﳵ���Ƿ���ӹ�����Ʒ��Ĭ��Ϊfalse��ʾû����ӹ�
if (isset ( $_SESSION ["username"] )) {
	// ˵���Ѿ���¼��
	// �ٲ�ѯ���û��Ĺ��ﳵ��Ϣ
	$sqlShopping = "select shopping from tb_user where name='{$_SESSION["username"]}'";
	$resShopping = $db->ExecuteDQL ( $sqlShopping );
	if ($resShopping) {
		$shopping = $resShopping [0] ["shopping"];
		// ��Ҫ�жϹ��ﳵ�Ƿ�Ϊ��  �����Ϊ�գ���ô����Ҫȥ�жϹ��ﳵ���Ƿ�
		if ($shopping) {
			// ˵�����ﳵ������
			// ��$shopping���ա�@���ָ�
			// Ȼ���ٰѷָ������ÿһ�������ٰ���","�ָ�
			$arr1 = explode ( "@", $shopping );
			foreach ( $arr1 as $a ) {
				$arr2 = explode ( ",", $a );
				if ($arr2 [0] == $gid) {
					// ˵��֮ǰ��ӹ�����Ʒ
					$isAdd = true;
					break; 
				} else {
					$isAdd = false;
				}
			}
			
			// �������������ͨ��$isAdd��ȥ�ж��Ƿ�ӹ���Ʒ
			if ($isAdd) {
				$reValue = "3";
			} else {
				$sqlUpdate2 = "update tb_user set shopping='{$shopping}@{$gid},1' where name='{$_SESSION["username"]}'";
				$res = $db->ExecuteDML ( $sqlUpdate2 );
				if ($res) {
					
					$reValue = "1"; // ˵����ӵ����ﳵ�ɹ�
				} else {
					$reValue = "2"; // ˵����ӵ����ﳵʧ��
				}
			}
		} else {
			// ˵�����ﳵΪ��
			// ��ôֱ�����
			$sqlUpdate1 = "update tb_user set shopping='{$gid},1' where name='{$_SESSION["username"]}'";
			$res = $db->ExecuteDML ( $sqlUpdate1 );
			if ($res) {
				
				$reValue = "1"; // ˵����ӵ����ﳵ�ɹ�
			} else {
				$reValue = "2"; // ˵����ӵ����ﳵʧ��
			}
		}
	}
} else {
	
	// û�е�¼
	$reValue = "0";
}
echo $reValue;
?>