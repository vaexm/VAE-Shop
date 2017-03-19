<?php
/**
 * 分页类
 * @author Administrator
 *
 */
class Page{
	//总行数
	private $totalRows;
	//总页数
	private $totalPages;
	//每页显示的条数
	private $size;
	//页面的url
	private $Url;
	//当前页面
	private $currentPage;
	//下一页
	private $nextPage;
	//上一页
	private $prePage;
	//专区编号
	private $pid;
	
	/**
	 *构造函数，用来初始化成员变量
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
	 * 由总行数求总页数
	 * @return number
	 */
	function getTotalPage(){
		$this->totalPages=ceil($this->totalRows/$this->size);
		return $this->totalPages;
	}
	
	/**
	 * 获取当前页
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
	 * 显示分区块
	 */
	function ShowPages(){
		echo "<div id='div1'>";
		/* if($this->currentPage==1){
			echo "<a href='{$this->Url}&page={$this->nextPage}'>下一页</a>"."&nbsp;&nbsp;";
			echo "<a href='{$this->Url}&page={$this->totalPages}'>末页</a>"."&nbsp;&nbsp;";
		}
		else if($this->currentPage==$this->totalPages){
		echo "<a href='{$this->Url}&page=1'>首页</a>"."&nbsp;&nbsp";
		echo "<a href='{$this->Url}&page={$this->prePage}'>上一页</a;>"."&nbsp;&nbsp;";
		} */
// 		else{
		echo "<a href='{$this->Url}&page=1'>首页</a>"."&nbsp;&nbsp;";
		echo "<a href='{$this->Url}&page={$this->prePage}'>上一页</a>"."&nbsp;&nbsp;";
		echo "<a href='{$this->Url}&page={$this->nextPage}'>下一页</a>"."&nbsp;&nbsp;";
		echo "<a href='{$this->Url}&page={$this->totalPages}'>末页</a>"."&nbsp;&nbsp;";
// 		}
// 		echo "共【{$this->totalPages}】页，当前是第【{$this->currentPage}】页";
		echo "</div>";
	}
}
?>