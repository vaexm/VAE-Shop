<?php
include '../libs/Smarty.class.php';
$smarty=new Smarty();
//重新定义后台模板文件的存放路径
$smarty->template_dir = array('./tpl/');
//定义后台编译文件的存放路径
$smarty->compile_dir = './tpl_c/';
//定义后台存放css文件的路径
define("ADMIN_CSS_URL", "../Public/Admin/css/");
//定义前台存放图片的文件路径
define("ADMIN_PICS_URL","../Public/Admin/images/");
//定义前台js文件的存放路径
define("ADMIN_JS_URL", "../Public/Admin/js/");
?>