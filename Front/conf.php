<?php
include '../libs/Smarty.class.php';
$smarty=new Smarty();
//重新定义前台模板文件的存放路径
$smarty->template_dir = array('./tpl/');
//定义前台编译文件的存放路径
$smarty->compile_dir = './tpl_c/';
//定义前台存放css文件的路径
define("FRONT_CSS_URL", "../Public/Front/css/");
//定义前台存放图片的文件路径
define("FONT_PICS_URL","../Public/Front/");
//定义前台js文件的存放路径
define("FRONT_JS_URL", "../Public/Front/js/");
?>