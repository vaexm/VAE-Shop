<?php
/**
 * ��ҳ��
 * @author Administrator
 *
 */
class Page{
	//������
	private $totalRows;
	//��ҳ��
	private $totalPages;
	//ÿҳ��ʾ������
	private $size;
	//ҳ���url
	private $Url;
	//��ǰҳ��
	private $currentPage;
	//��һҳ
	private $nextPage;
	//��һҳ
	private $prePage;
	//ר�����
	private $pid;
	
	/**
	 *���캯����������ʼ����Ա����
	 */
	function __construct($rows,$current=1,$url,$si=3){
		$this->totalRows=$rows;
		$this->currentPage=$current;
		$this->Url=$url;
		$this->size=$si;
		$this->prePage=0;
		$this->nextPage=2;
		
	}
	
	/**
	 * ������������ҳ��
	 * @return number
	 */
	function getTotalPage(){
		$this->totalPages=ceil($this->totalRows/$this->size);
		return $this->totalPages;
	}
	
	/**
	 * ��ȡ��ǰҳ
	 * @return Ambigous <number, unknown>
	 */
	function getCurrentPage(){
		if(isset($_GET["page"])){
			$this->currentPage=$_GET["page"];
			$this->prePage=$this->currentPage-1;
			$this->nextPage=$this->currentPage+1;
			
		}
		return $this->currentPage;
			
	}
	
	/**
	 * ��ʾ������
	 */
	function ShowPages(){
		echo "<div id='div1'>";
		/* if($this->currentPage==1){
			echo "<a href='{$this->Url}&page={$this->nextPage}'>��һҳ</a>"."&nbsp;&nbsp;";
			echo "<a href='{$this->Url}&page={$this->totalPages}'>ĩҳ</a>"."&nbsp;&nbsp;";
		}
		else if($this->currentPage==$this->totalPages){
		echo "<a href='{$this->Url}&page=1'>��ҳ</a>"."&nbsp;&nbsp";
		echo "<a href='{$this->Url}&page={$this->prePage}'>��һҳ</a;>"."&nbsp;&nbsp;";
		} */
// 		else{
		echo "<a href='{$this->Url}&page=1'>��ҳ</a>"."&nbsp;&nbsp;";
		echo "<a href='{$this->Url}&page={$this->prePage}'>��һҳ</a>"."&nbsp;&nbsp;";
		echo "<a href='{$this->Url}&page={$this->nextPage}'>��һҳ</a>"."&nbsp;&nbsp;";
		echo "<a href='{$this->Url}&page={$this->totalPages}'>ĩҳ</a>"."&nbsp;&nbsp;";
// 		}
// 		echo "����{$this->totalPages}��ҳ����ǰ�ǵڡ�{$this->currentPage}��ҳ";
		echo "</div>";
	}
}
?>