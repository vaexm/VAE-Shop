<?php
session_start();

// unset($_SESSION["username"]);

/* echo '<script>
		 confirm("��ȷ���˳���?");</script>'; */ 
// var_dump($isOut);
 unset($_SESSION["username"]);
		echo '<script>alert("�û��Ѱ�ȫ�˳�!");location.href="index.php";</script>'; 
// header("location:index.php");

?>