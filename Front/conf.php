<?php
include '../libs/Smarty.class.php';
$smarty=new Smarty();
//���¶���ǰ̨ģ���ļ��Ĵ��·��
$smarty->template_dir = array('./tpl/');
//����ǰ̨�����ļ��Ĵ��·��
$smarty->compile_dir = './tpl_c/';
//����ǰ̨���css�ļ���·��
define("FRONT_CSS_URL", "../Public/Front/css/");
//����ǰ̨���ͼƬ���ļ�·��
define("FONT_PICS_URL","../Public/Front/");
//����ǰ̨js�ļ��Ĵ��·��
define("FRONT_JS_URL", "../Public/Front/js/");
?>