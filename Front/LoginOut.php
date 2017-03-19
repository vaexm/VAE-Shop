<?php
session_start();

// unset($_SESSION["username"]);

/* echo '<script>
		 confirm("你确定退出吗?");</script>'; */ 
// var_dump($isOut);
 unset($_SESSION["username"]);
		echo '<script>alert("用户已安全退出!");location.href="index.php";</script>'; 
// header("location:index.php");

?>