<?php
class DBH{
	//����������
	private $serverName;
	//�û���
	private $userName;
	//����
	private $userPwd;
	//���ݿ�����
	private $dbName;
	//���ݿ����ӱ�ʶ
	private $link;
	
	/**
	 * ���캯������ʼ���ֶ�
	 */
	function __construct(){
	
		$this->serverName="localhost";
		$this->userName="root";
		$this->userPwd="123456";
		$this->dbName="db_database24";
		$this->ConnectDB();
	}
	
	/**
	 * �������ݿ�ķ���
	 */
	function ConnectDB(){
		$this->link=@mysql_connect($this->serverName,$this->userName,
				$this->userPwd) or die("���ݿ�����ʧ��");
		@mysql_select_db($this->dbName) or die("�Ҳ���ָ�������ݿ�");
	}
	
	/**
	 * ִ����ɾ�ĵķ���
	 * @param  $sql Ҫִ�е�sql���
	 * @return boolean ִ�гɹ�����true,ʧ�ܷ���false
	 */
	function ExecuteDML($sql){
		mysql_query("set names utf8");
		$res=mysql_query($sql);
		if($res){
			$affRows=mysql_affected_rows($this->link);
			if($affRows){
				return true;
			
			}else{
				return false;
			}		
			
		}else{
				return false;
			}
		
	}
	
	/**
	 * ִ�в�ѯ�ķ���
	 * @param unknown $sql  Ҫִ�е�sql���
	 * @return ִ�гɹ������ز�ѯ������Ķ�ά���飬ʧ�ܷ���false
	 */
	function ExecuteDQL($sql){
		mysql_query("set names gbk");
		$res=mysql_query($sql);
		$allArr=array();
		if($res){
			while (($arr=mysql_fetch_assoc($res))!=false){
				$allArr[]=$arr;
		
			}
			return $allArr;
		}else{
			return false;
		}
	}
	
	/**
	 * ���������������ر����ݿ�����
	 */
	function __destruct(){
		@mysql_close($this->link);
	}
}
?>
